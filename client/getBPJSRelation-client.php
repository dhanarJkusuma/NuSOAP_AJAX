<?php
	require_once('../nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/ta/server.php?wsdl',true);
	$result = json_encode($client->call('getRelationBpjs',array(
			'no_bpjs'=> $_POST['no_bpjs']
		)));
	echo $result;
?>