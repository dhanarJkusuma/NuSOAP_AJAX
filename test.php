<?php
	require_once('nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/tigaab/server.php?wsdl',true);
	$ret = $client->call('getKK',array(
			'no_kk'=> 2147483648
		));
	var_dump($ret);

?>

<?php
/*	include('library.php');
	$lib = new Library();
	$ret = $lib->get_kk(214748364);
	var_dump($ret); 
*/?>