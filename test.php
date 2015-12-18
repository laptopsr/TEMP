<?php

$rss = '<?xml version="1.0" encoding="utf-8"?>
<result>
     <status>
         <jobid>3082380</jobid>
         <statusid>C4661609</statusid>
         <billnum>1000</billnum>
         <statustype>comment</statustype>
         <statustime>2015-11-27 10:00:13</statustime>
         <statusref>Laskutus</statusref>
         <statustext>Lasku luotu</statustext>
         <statuscode>0</statuscode>
         <paydate></paydate>
         <amount></amount>
     </status>
</result>
';

	if($xml = simplexml_load_string($rss, 'SimpleXMLElement', LIBXML_NOCDATA))
	{

	 if($xml->commonerror != 'No statusupdates')
	 {

		libxml_use_internal_errors(true);
		$sxe = simplexml_load_string($rss);
		if ($sxe) 
		{

	  	foreach ($sxe->status as $r) {
echo '<textarea class="form-control" rows="10">';
print_r(json_encode($r));
echo '</textarea>';
		
		}

	}
}
}
?>
