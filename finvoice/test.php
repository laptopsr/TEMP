<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

/**
 * Severa API call:
 * Get account by account number
 */
function get_account_by_number($soapClient, $accountNumber)
{
	var_dump($soapClient);
	try {
		$parameters->accountNumber = $accountNumber;
		$ret = $soapClient->GetAccountByNumber($parameters);
	} catch (Exception $exc) {
		print "Failed: " . $exc->getMessage() . "<hr/>\n";
		var_dump($soapClient->__getLastRequest());
		die("Making the call failed.");
		
	}

	var_dump($ret);
}


/**
 * Begin code
 */

$WSDL_URL = "https://sync.severa.com/webservice/S3/API.svc/WSDL";
$webServicePassword = "your_api_key_here!"; 

$SOAP_NameSpace = "http://soap.severa.com/";

try {
	$soapClient = @new SoapClient($WSDL_URL, Array("uri" => $SOAP_NameSpace,
							'encoding' => 'ISO-8859-1',
							'trace' => true));
} catch (Exception $exc) {
	print "Failed: " . $exc->getMessage() . "<hr/>\n";
	die("Constructing new client was not successful.");
}

$soapHeader = new SoapHeader($SOAP_NameSpace, "WebServicePassword", $webServicePassword);
$soapClient->__setSoapHeaders($soapHeader);


// Get the account number 1001
get_account_by_number($soapClient, 1001);
$requesti = $soapClient -> __getLastRequest();
print_r($requesti);


?>
