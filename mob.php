
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

var domain = "sivex";
var url = "http://etuntifw.azurewebsites.net/index.php/api/mob";
var imei = "353888067886268";
var puh_nro = "0449304851";
var versio = "0.47";
var tag = "36073245411209220";
var aloitan = "<?php echo date('d.m.Y H:i:s'); ?>";


function insertRow(){

   	var postData = {
	domain: domain,
	imei: imei,
	asiakas_num: versio+"_"+tag,
	puh_numero: puh_nro,
	bluetooth_name: "xxx",
	sim_serial_number: "xxx",
	subscriber_id: "xxx",
	my_location: "xxx",
	osoite: "xxx",
	kohde_kannasta: "xxx",
	kohdenID: "0",
	aloitan: aloitan,
	loppui: "",
	viesti: "xxx",
	tekijan_nimi: "xxx",
	tid: "0",
	etaisyys: "0",
	status: "1",
	tietoja: "0",
	hyvaksytty: "0",
	};

        $.ajax({
           url: url,
	   type:'POST',
 	   data: JSON.stringify(postData),
	   //dataType: "json",
           success: function(html){
        	console.log(data);
    	},
    		error:function (xhr, ajaxOptions, thrownError){
        	console.log(xhr.responseText);
    	} 
        });

}


	var status = '';

	$.ajax({
	    url: url+'?filter=[{"property":"imei","value":"'+imei+'"},{"property":"loppui","value":"","operator": "="}]',
	    type:"GET",
	    success:function(data) {
	      console.log(data);
	      //console.log(data.data.mob[0].status);
	
	      if(data.success === false)
	      {
		insertRow();
	      } else {
		return false;
	      }

	    },
	    error:function (xhr, ajaxOptions, thrownError){
	      console.log(xhr.responseText);

	    } 
	});







});
</script>

