<?php
	require_once('../nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/ta/server.php?wsdl',true);

	$tgl_lahir = $_POST['thn'] . "-" . $_POST['bln'] . "-" . $_POST['tgl'];
	

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
			'kode_pos' => $_POST['kode_pos'],
			'no_pegawai' => $_POST['no_pegawai'],
			'nama' => $_POST['nama'],
			'jenis_kelamin' => $_POST['jenis_kelamin'],
			'tgl_lahir' => $tgl_lahir,
			'jabatan' => $_POST['jabatan']
		);

	$result = $client->call('updateBpjs',array(
			'data' => $data
		));

	
	


?>