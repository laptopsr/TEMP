<?php
$pageTitle = 'Page 2';
include ("ylatunniste.php");

error_reporting(E_ALL ^ ( E_NOTICE | E_WARNING | E_DEPRECATED | E_STRICT));

$mysqlyhteys = mysql_connect("localhost", "root", "ferro") or die("Yhdist�minen ei onnistunut!");
mysql_select_db("medipostit", $mysqlyhteys) or die("Tietokantaa ei l�ytynyt!");

$aloitus = mysql_real_escape_string(stripslashes($_GET['aloitus']));
$lopetus = mysql_real_escape_string(stripslashes($_GET['lopetus']));
$yritysid = mysql_real_escape_string(stripslashes($_GET['yritysid']));

$veloxnro="00750";

print "<table>";
print "<tr><td>Nro</td><td>Toimituspvm</td><td>Tunnus</td><td>Viite</td><td>Lahtopno</td><td>Toimitustapa</td><td>Rivilkm</td><td>Laskutuspaino</td><td>Hinta</td><td>PoLisa</td><td>Yhteensa veroton</td></tr>";
print "<tr><td>Tuotelaji</td><td>Vastaanottaja</td><td></td><td>Kustannuspaikka</td><td>Kohdepono</td><td>Kollilaji</td><td>Km</td><td>Vyohyke</td><td>Palautus</td><td>Erilliskas</td></tr>";
$haku1 = "select * from MT where tila='128' and tpvm >'$aloitus' and tpvm <'$lopetus' and yritysid='$yritysid' order by tpvm";
$hak1  = mysql_query($haku1,$mysqlyhteys);
while ($ha1 = mysql_fetch_array($hak1))	{
	$hakux = "select * from V_KPAIKKA where kpnro='$ha1[kpaikka]'";
	$hakx  = mysql_query($hakux, $mysqlyhteys);
	$hax   = mysql_fetch_array($hakx);
	$merkki =substr($ha1[merkki],0,7);

	
	print "<tr>";
	print "<td>$ha1[numero]</td>";
        $pvm = date("d.m.Y", strtotime($ha1[tpvm]));
	print "<td>$pvm</td>";
	print "<td>$merkki</td>";
	print "<td>$ha1[viitteenne]</td>";

if	($ha1[palautus]==0)	{
		$lahtopono=$veloxnro;
		} else {
		$lahtopono=$ha1[tiosoite];
		}
	print "<td>$lahtopono</td>";
		
	$sql = mysql_query("select * from toimitustavat where yritysid='$yritysid' and id='$ha1[ttapa]'");
	$sq  = mysql_fetch_array($sql);	
	print "<td>$sq[toimitustapa]</td>";

	$sql = mysql_query("select count(*) as count from MTRIVI where numero='$ha1[numero]'");
	$sq  = mysql_fetch_array($sql);
	print "<td>$sq[count]</td>";





	$haku2 = "select * from MTRIVI where numero='$ha1[numero]'";
	$hak2  = mysql_query($haku2,$mysqlyhteys);
	while ($ha2 = mysql_fetch_array($hak2)) {
		$haku3 = "select * from VARASTO where koodi='$ha2[koodi]' and yritysid='$ha2[yritysid]'";
		$hak3  = mysql_query($haku3,$mysqlyhteys);
		$ha3   = mysql_fetch_array($hak3);
		$tpaino = $ha2[kpl]*(($ha3[pituus]/100)*($ha3[leveys]/100)*($ha3[korkeus]/100)*250);
		$ppaino = $ha2[kpl]*$ha3[paino];
		//lisapalvelun ja pakkausmateriaali laskentaa varten
		$lisa = $ha3[kpl]*$ha3[lisahinta];
		$pakkaus = $ha2[kpl]*$ha3[ovh3];

		if ($ppaino > $tpaino) {
		$lpaino = $ppaino;
		}
                if ($tpaino > $ppaino) {
                $lpaino = $tpaino;
                }
		$insert1 = "insert into LASKUTMP set koodi='$ha3[koodi]', lpaino='$lpaino', numero='$ha1[numero]', lisa='$lisa', pakkaus='$pakkaus', ek='$ha3[erilliskasiteltava]'";
		$inser1	 = mysql_query($insert1, $mysqlyhteys);
		}

	$haku4 = "select sum(lpaino) as total from LASKUTMP where numero='$ha1[numero]'";
	$hak4  = mysql_query($haku4,$mysqlyhteys);
	$ha4   = mysql_fetch_array($hak4);
	$pain = round($ha4[total],2);
	$paino = number_format($pain, 2, ',', ' ');
	print "<td>$paino</td>";

//------- Toimitusmaksun laskeminen
	if ($ha1[kollit]=="1"){
		$mps = "0";
		} else {
		$mps = "1";
		}
	//Kirje ja pakettitoimitusten lasku muille paitsi Economy luokalle
	if (($ha1[kollilaji]=="1") or ($ha1[kollilaji]=="2") and $ha1[ttapa]!=="5")	{
	$haku5 = "select * from TOIMITUSMAKSU where yritysid='$yritysid' and ttapa='$ha1[ttapa]' and mps='$mps' and kollilaji='$ha1[kollilaji]' and min<'$ha4[total]' and max>'$ha4[total]'";
        $hak5  = mysql_query($haku5,$mysqlyhteys);
        $ha5   = mysql_fetch_array($hak5);
	$thint = $ha5[hinta];
	$thinta = number_format($thint, 2, ',', ' ');
	print "<td>$thinta</td>";
	}
	//Economy
        if ($ha1[ttapa]=="5")   {
	$ykspaino = $ha4[total]/$ha1[kollit];
        $haku5 = "select * from TOIMITUSMAKSU where yritysid='$yritysid' and ttapa='$ha1[ttapa]' and kollilaji='$ha1[kollilaji]' and min<'$ykspaino' and max>'$ykspaino'";
        $hak5  = mysql_query($haku5,$mysqlyhteys);
        $ha5   = mysql_fetch_array($hak5);
        $thint = $ha5[hinta]*$ha1[kollit];
        $thinta = number_format($thint, 2, ',', ' ');
        print "<td>$thinta</td>";
        }


	//Lava ja rullakkohinnan lasku
	if (($ha1[kollilaji]=="3") or ($ha1[kollilaji]=="4") or ($ha1[kollilaji]=="5"))   {
	$nro = substr($ha1[tosoite], 0, 5);
	$haku6 = "select * from VYOHYKE where postinumero like '$nro'";
	$hak6  = mysql_query($haku6,$mysqlyhteys);
        $ha6   = mysql_fetch_array($hak6);
        $haku7 = "select * from TOIMITUSMAKSU where yritysid='$yritysid' and ttapa='$ha1[ttapa]' and vyohyke='$ha6[vyohyke]' and kollilaji='$ha1[kollilaji]' and min<'$ha4[total]' and max>'$ha4[total]'";
//print "$haku7<br>";
        $hak7  = mysql_query($haku7,$mysqlyhteys);
        $ha7   = mysql_fetch_array($hak7);
	if ($ha1[kollit]=="1")	{
	$thint = $ha7[hinta];
	$thinta = number_format($thint, 2, ',', ' ');
		if ($thinta=="0"){
		print "<td>Ei hintaa</td>";
		} else {
        	print "<td>$thinta</td>";
		}
	} else {
	$thint = $ha7[hinta]+($ha[kollit]-1)*$ha7[hinta2];
	$thinta = number_format($thint, 2, ',', ' ');
                if ($thinta=="0"){
                print "<td>Ei hintaa</td>";
                } else {
                print "<td>$thinta</td>";
                }
        }
	}
//------- Polttoainelisan laskeminen

	$haku9 = "select * from toimitustavat where yritysid='$yritysid' and id='$ha1[ttapa]'";
        $hak9  = mysql_query($haku9,$mysqlyhteys);
        $ha9   = mysql_fetch_array($hak9);
	$palisa = $ha9[polttoainelisa]/100*$thinta;
	$pol = round($palisa,2);
	$polisa = number_format($pol, 2, ',', ' ');
	print "<td>$polisa</td>";

		
//------- Yhteensa

	$tot = round(($thint+$palisa+$erillis),2);
	$total = number_format($tot, 2, ',', ' ');
	print "<td>$total</td>";

//-------- VAROITUKSET

	if ($paino=="0,00") {
	print "<td>Paino tai mittatiedot puutteelliset</td>";
	}
	if ($thinta=="0,00" and $ha1[ttapa]!="1") {
	print "<td>Kuljetushinta puuttuu</td>";
	}
        if ($ha1[kollit]=="") {
        print "<td>Kollimaara puuttuu</td>";
        }
        if ($ha1[kollilaji]=="") {
        print "<td>Kollilaji puuttuu</td>";
        }
        if ($ha1[kollilaji]=="1" and ($ha1[ttapa]=="6" or $ha1[ttapa]=="5")) {
        print "<td>Vaara kollilaji</td>";
        }


	print "</tr>";

	
///TOINEN RIVI
	print "<tr>";
	print "<td></td>";
	print "<td>$ha1[tnimi2]</td>";
	print "<td>$ha1[tnimi1]</td>";
	print "<td>$hax[kpaikka]</td>";

if	($ha1[palautus]==0)	{
		$kohdepono=$ha1[tiosoite];
		} else {
		$kohdepono=$veloxnro;
		}
	print "<td>$kohdepono</td>";

	if ($ha1[kollilaji]=="1"){
	print "<td>Kirje</td>";
	}
        if ($ha1[kollilaji]=="2"){
        print "<td>Paketti</td>";
        }
        if ($ha1[kollilaji]=="3"){
        print "<td>Rullakko</td>";
        }
        if ($ha1[kollilaji]=="4"){
        print "<td>Lava</td>";
        }
        if ($ha1[kollilaji]=="5"){
        print "<td>Lava</td>";
        }
	print "<td></td>";			
	print "<td>$ha6[vyohyke]</td>";		
	print "<td>$ha1[palautus]</td>";	

//------ Erilliskäsiteltävä

        $haku14 = "select max(ek) as total from LASKUTMP where numero='$ha1[numero]'";
        $hak14  = mysql_query($haku14,$mysqlyhteys);
        $ha14   = mysql_fetch_array($hak14);
	if ($ha14[total]=="1.000"){
	$erillis = "6,70";
	}
	if ($ha14[total]=="0.000"){
	$erillis="";
	}

        $eri = round($erillis,2);
        $ek = number_format($eri, 2, ',', ' ');
        print "<td>$erillis</td>";



	print "</tr>";	
	}
print "</table>";

$delete1 = "delete from LASKUTMP where id>'1'";
$del1 = mysql_query($delete1, $mysqlyhteys);

include ("alatunniste.php");
?>
