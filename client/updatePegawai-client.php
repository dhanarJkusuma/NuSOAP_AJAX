<?php
	require_once('../nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/ta/server.php?wsdl',true);

	$tgl_lahir = $_POST['thn'] . "-" . $_POST['bln'] . "-" . $_POST['tgl'];
	

	$data = array(
			'nip' => $_POST['no_pegawai'],
			'nama' => $_POST['nama'],
			'jenis_kelamin' => $_POST['jenis_kelamin'],
			'tgl_lahir' => $tgl_lahir,
			'jabatan' => $_POST['jabatan']
		);

	$result = $client->call('updatePegawai',array(
			'data' => $data
		));

	
echo " " . htmlspecialchars($client->response,ENT_QUOTES) . " ";

?>