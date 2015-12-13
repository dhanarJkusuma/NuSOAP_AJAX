<?php
	require_once('../nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/ta/server.php?wsdl',true);

	$data = array(
			'no_kk' => $_POST['no_kk'],
			'nama_kk' => $_POST['nama_kk'],
			'alamat' => $_POST['alamat'],
			'rt' => $_POST['rt'],
			'rw' => $_POST['rw'],
			'desa' => $_POST['desa'],
			'kecamatan' => $_POST['kecamatan'],
			'kabupaten' => $_POST['kabupaten'],
			'provinsi' => $_POST['provinsi'],
			'kode_pos' => $_POST['kode_pos']		
		);

	$result = $client->call('addKK',array(
			'data' => $data
		));

	
	

echo " " . htmlspecialchars($client->response,ENT_QUOTES) . " ";
	

?>