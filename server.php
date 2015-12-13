<?php
	include('library.php');	
	require_once('adodb/adodb.inc.php');

	require_once('nusoap/lib/nusoap.php');

	ini_set('display_errors','Off');

	$server = new nusoap_server;
	 
	$server->configureWSDL('server', 'urn:server');
	$server->wsdl->schemaTargetNamespace = 'urn:server';
	  

	$server->wsdl->addComplexType(
	 'DataBpjs',
	 'complexType',
	 'struct',
	 'all',
	 '',
	  array(
	  	'no_bpjs' => array('name' => 'no_bpjs','type' => 'xsd:integer'),
	  	'no_kk' => array('name' => 'no_kk','type' => 'xsd:integer'),
	  	'nama_kk' => array('name' => 'nama_kk','type' => 'xsd:string'),
	  	'alamat' => array('name' => 'alamat','type' => 'xsd:string'),
	  	'rt' => array('name' => 'rt','type' => 'xsd:integer'),
	  	'rw' => array('name' => 'rw','type' => 'xsd:integer'),
	  	'desa' => array('name' => 'desa','type' => 'xsd:string'),
	  	'kecamatan' => array('name' => 'kecamatan','type' => 'xsd:string'),
	  	'kabupaten' => array('name' => 'kabupaten','type' => 'xsd:string'),
	  	'provinsi' => array('name' => 'provinsi','type' => 'xsd:string'),
	  	'kode_pos' => array('name' => 'kode_pos','type' => 'xsd:integer'),
	  	'no_pegawai' => array('name' => 'no_pegawai','type' => 'xsd:integer'),
	  	'nama' => array('name' => 'nama','type' => 'xsd:string'),
	  	'jenis_kelamin' => array('name' => 'jenis_kelamin','type' => 'xsd:string'),
	  	'tgl_lahir' => array('name' => 'tgl_lahir','type' => 'xsd:string'),
	  	'jabatan' => array('name' => 'jabatan','type' => 'xsd:string')
	  	)
	);

	$server->wsdl->addComplexType('BpjsArray','complexType','array','','SOAP-ENC:Array',
        array(),
        array(
            array(
                'ref' => 'SOAP-ENC:arrayType',
                'wsdl:arrayType' => 'tns:DataBpjs[]'
            )
        )
);

	$server->wsdl->addComplexType(
	 'DataKK',
	 'complexType',
	 'struct',
	 'all',
	 '',
	  array(
	  	'id' => array('name' => 'id','type' => 'xsd:integer'),
	  	'no_kk' => array('name' => 'no_kk','type' => 'xsd:integer'),
	  	'nama_kk' => array('name' => 'nama_kk','type' => 'xsd:string'),
	  	'alamat' => array('name' => 'alamat','type' => 'xsd:string'),
	  	'rt' => array('name' => 'rt','type' => 'xsd:integer'),
	  	'rw' => array('name' => 'rw','type' => 'xsd:integer'),
	  	'desa' => array('name' => 'desa','type' => 'xsd:string'),
	  	'kecamatan' => array('name' => 'kecamatan','type' => 'xsd:string'),
	  	'kabupaten' => array('name' => 'kabupaten','type' => 'xsd:string'),
	  	'provinsi' => array('name' => 'provinsi','type' => 'xsd:string'),
	  	'kode_pos' => array('name' => 'kode_pos','type' => 'xsd:integer')
	  	)
	);


	$server->wsdl->addComplexType(
	 'inKK',
	 'complexType',
	 'struct',
	 'all',
	 '',
	  array(
	  	'no_kk' => array('name' => 'no_kk','type' => 'xsd:integer'),
	  	'nama_kk' => array('name' => 'nama_kk','type' => 'xsd:string'),
	  	'alamat' => array('name' => 'alamat','type' => 'xsd:string'),
	  	'rt' => array('name' => 'rt','type' => 'xsd:integer'),
	  	'rw' => array('name' => 'rw','type' => 'xsd:integer'),
	  	'desa' => array('name' => 'desa','type' => 'xsd:string'),
	  	'kecamatan' => array('name' => 'kecamatan','type' => 'xsd:string'),
	  	'kabupaten' => array('name' => 'kabupaten','type' => 'xsd:string'),
	  	'provinsi' => array('name' => 'provinsi','type' => 'xsd:string'),
	  	'kode_pos' => array('name' => 'kode_pos','type' => 'xsd:integer')
	  	)
	);

	$server->wsdl->addComplexType('KKArray','complexType','array','','SOAP-ENC:Array',
        array(),
        array(
            array(
                'ref' => 'SOAP-ENC:arrayType',
                'wsdl:arrayType' => 'tns:DataKK[]'
            )
        )
);

	$server->wsdl->addComplexType(
	 'RelatedBpjs',
	 'complexType',
	 'struct',
	 'all',
	 '',
	  array(
	  	'no_bpjs' => array('name' => 'no_bpjs','type' => 'xsd:integer'),
	  	'no_kk' => array('name' => 'no_kk','type' => 'xsd:integer'),
	  	'no_pegawai' => array('name' => 'no_pegawai','type' => 'xsd:integer')
	  	)
	);

	$server->wsdl->addComplexType(
	 'DataPegawai',
	 'complexType',
	 'struct',
	 'all',
	 '',
	  array(
	  	'no_pegawai' => array('name' => 'no_pegawai','type' => 'xsd:integer'),
	  	'nama' => array('name' => 'nama','type' => 'xsd:string'),
	  	'jenis_kelamin' => array('name' => 'jenis_kelamin','type' => 'xsd:string'),
	  	'tgl_lahir' => array('name' => 'tgl_lahir','type' => 'xsd:string'),
	  	'bln_lahir' => array('name' => 'bln_lahir','type' => 'xsd:string'),
	  	'thn_lahir' => array('name' => 'thn_lahir','type' => 'xsd:string'),
	  	'jabatan' => array('name' => 'jabatan','type' => 'xsd:string')
	  	)
	);

	$server->wsdl->addComplexType('SemuaPegawai','complexType','array','','SOAP-ENC:Array',
        array(),
        array(
            array(
                'ref' => 'SOAP-ENC:arrayType',
                'wsdl:arrayType' => 'tns:DataPegawai[]'
            )
        )
);

$server->wsdl->addComplexType(
	 'InputPegawai',
	 'complexType',
	 'struct',
	 'all',
	 '',
	  array(
	  	'nip' => array('name' => 'nip','type' => 'xsd:integer'),
	  	'nama' => array('name' => 'nama','type' => 'xsd:string'),
	  	'jenis_kelamin' => array('name' => 'jenis_kelamin','type' => 'xsd:string'),
	  	'tgl_lahir' => array('name' => 'tgl_lahir','type' => 'xsd:string'),
	  	'jabatan' => array('name' => 'jabatan','type' => 'xsd:string')
	  	)
	);

	


	$server->register('registerBpjs',
				array('data' => 'tns:DataBpjs'),  //parameters
				array('return' => 'xsd:boolean'),  //output
				'urn:server',   //namespace
				'urn:server#registerBpjs',  //soapaction
				'rpc', // style
				'encoded', // use
				'Register bpjs');  //description
	
	$server->register('getIndexData',
				array(),  //parameters
				array('return' => 'tns:BpjsArray'),  //output
				'urn:server',   //namespace
				'urn:server#getIndexData',  //soapaction
				'rpc', // style
				'encoded', // use
				'Get All Bpjs');  //description	

	$server->register('deleteBpjs',
				array('no_bpjs' => 'xsd:integer','no_kk' => 'xsd:integer', 'no_pegawai' => 'xsd:integer'),
				array('return' => 'xsd:boolean'),
				'urn:server',
				'urn:server#deleteBpjs',
				'rpc',
				'encoded',
				'Delete bpjs');


	$server->register('getKK',
			    array('no_kk' => 'xsd:integer'),
			      array('return' => 'tns:DataKK'),
			      'urn:server',
			      'urn:server#getKK',
			      'rpc',
			      'encoded',
			      'Mengambil data Kartu Keluarga berdasar Nomer KK');

	$server->register('getDataBpjs',
			    array('no_bpjs' => 'xsd:integer'),
			      array('return' => 'tns:DataBpjs'),
			      'urn:server',
			      'urn:server#getBPJS',
			      'rpc',
			      'encoded',
			      'Mengambil data BPJS berdasar Nomer BPJS');

	$server->register('getRelationBpjs',
			    array('no_bpjs' => 'xsd:integer'),
			      array('return' => 'tns:RelatedBpjs'),
			      'urn:server',
			      'urn:server#getRelationBpjs',
			      'rpc',
			      'encoded',
			      'Mengambil data Relation BPJS berdasar Nomer BPJS');

	$server->register('getDataPegawai',
			    array('no_pegawai' => 'xsd:integer'),
			      array('return' => 'tns:DataPegawai'),
			      'urn:server',
			      'urn:server#getDataPegawai',
			      'rpc',
			      'encoded',
			      'Mengambil data Pegawai  berdasar Nomer NIP');

		$server->register('setKK',
			    array('no_bpjs' => 'xsd:integer', 'no_kk' => 'xsd:integer'),
			      array('return' => 'xsd:boolean'),
			      'urn:server',
			      'urn:server#setKK',
			      'rpc',
			      'encoded',
			      'Untuk men-set KK pada suatu data BPJS');
	
	$server->register('updatePegawai',
			    array('data' => 'tns:InputPegawai'),
			      array('return' => 'xsd:boolean'),
			      'urn:server',
			      'urn:server#updatePegawai',
			      'rpc',
			      'encoded',
			      'Update Data Pegawai');

	$server->register('addPegawai',
			    array('data' => 'tns:InputPegawai'),
			      array('return' => 'xsd:boolean'),
			      'urn:server',
			      'urn:server#addPegawai',
			      'rpc',
			      'encoded',
			      'Tambah Data Pegawai');

	$server->register('addKK',
			array('data' => 'tns:inKK'),
			array('return' => 'xsd:boolean'),
			'urn:server',
			'urn:server#addKK',
			'rpc',
			'encoded',
			'Tambah Kartu Keluarga');

	$server->register('getAllPegawai',
			    array(),
			      array('return' => 'SemuaPegawai'),
			      'urn:server',
			      'urn:server#getAllPegawai',
			      'rpc',
			      'encoded',
			      'Get Semua Data Pegawai');

	$server->register('deletePegawai',
			    array('nip' => 'xsd:integer'),
			      array('return' => 'xsd:boolean'),
			      'urn:server',
			      'urn:server#deletePegawai',
			      'rpc',
			      'encoded',
			      'Hapus Data Pegawai');





	
	function getIndexData()
	{
		$libs = new Library();
		$data = $libs->getAllData_bpjs();
		return $data;
	}

	function getDataBpjs($no_bpjs)
	{
		$libs = new Library();
		$data = $libs->getData_bpjs($no_bpjs);
		return $data;
	}

	function getRelationBpjs($no_bpjs)
	{
		$libs = new Library();
		$data = $libs->getRelation_bpjs($no_bpjs);
		return $data;
	}

	function registerBpjs($data)
	{
		$libs = new Library();
		$result = $libs->register_bpjs($data);
		if($result) return true;
	}

	function deleteBpjs($no_bpjs,$no_kk,$no_pegawai)
	{
		$libs = new Library();
		$result = $libs->delete_bpjs($no_bpjs,$no_pegawai);
		if($result) return true;
	}

	function addKK($data)
	{
		$libs = new Library();
		$result= $libs->addKK($data);
		if($result) return true;
	}

	function getKK($no_kk) 
	{
	    $libs = new Library();
	    return $libs->get_KK($no_kk);
	}

	function getDataPegawai($no_pegawai)
	{
		$libs = new Library();
		return $libs->get_pegawai($no_pegawai);
	}

	function setKK($no_bpjs,$no_kk)
	{
		$libs = new Library();
		return $libs->setKeyBykk_bpjs($no_bpjs,$no_kk);
	}
	
	function addPegawai($data)
	{
		$libs = new Library();
		return $libs->add_pegawai($data);
	}

	function updatePegawai($data)
	{
		$libs = new Library();
		return $libs->update_pegawai($data);
	}

	function getAllPegawai()
	{
		$libs = new Library();
		return $libs->getAll_pegawai();
	}

	function deletePegawai($nip)
	{
		$libs = new Library();
		return $libs->delete_pegawai($nip);
	}

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	 
	$server->service($HTTP_RAW_POST_DATA);


 ?>

