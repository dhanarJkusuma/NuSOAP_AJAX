<?php
	require_once('../nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/ta/server.php?wsdl',true);
	$result = json_encode($client->call('getDataPegawai',array(
			'no_pegawai'=> $_POST['no_pegawai']
		)));
	echo $result;
?>