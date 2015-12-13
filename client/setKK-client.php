<?php
	require_once('../nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/ta/server.php?wsdl',true);

	

	$result = $client->call('setKK',array(
			'no_bpjs' => $_POST['no_bpjs'],
			'no_kk' => $_POST['no_kk']
		));

	

?>