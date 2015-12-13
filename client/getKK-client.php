<?php
	require_once('../nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/ta/server.php?wsdl',false);
	$ret = $client->call('getKK',array(
			'no_kk'=> $_POST['no_kk']
		));
	if($ret!=null)
	{
		$result = json_encode($ret);
		echo $result;
	}

?>