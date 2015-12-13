<?php
include ("database.php");	
class Library
{
		
	public $db_util;
	function __construct()
	{
		$this->db_util = new Database();
	}



	/*BPJS*/
	public function register_bpjs($data)
	{
		
		$current_date = new DateTime();
		$current_date = date_format($current_date,"Y-m-d H:i:s");
		
		$bpjs = $this->db_util->create('daftar_bpjs','no_kk,no_pegawai,created_at',array(
				$data['no_kk'],$data['no_pegawai'],$current_date
			));	

		$pegawai = $this->db_util->create('pegawai','nip, nama, jenis_kelamin, tgl_lahir, jabatan',array(
				$data['no_pegawai'],
				$data['nama'],
				$data['jenis_kelamin'],
				$data['tgl_lahir'],
				$data['jabatan']
			)); 

		if(!$this->db_util->check('kartukk','no_kk',$data['no_kk']))
		{
			$kk = $this->db_util->create('kartukk','no_kk,nama_kk,alamat,rt,rw,desa,kecamatan,kabupaten,provinsi,kode_pos',array(
				$data['no_kk'],
				$data['nama_kk'],
				$data['alamat'],
				$data['rt'],
				$data['rw'],
				$data['desa'],
				$data['kecamatan'],
				$data['kabupaten'],
				$data['provinsi'],
				$data['kode_pos']
			));	
		}
	}

	public function getAllRelation_bpjs()
	{
		$db=$this->db_util->getConnection();
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		
		$dataEx = $db->Execute('SELECT no_bpjs,no_kk,no_pegawai FROM daftar_bpjs');	
		$data = array();
		while (!$dataEx->EOF) { 
            $data['no_bpjs'] = $dataEx->fields[0];
            $data['no_kk'] = $dataEx->fields[1];
            $data['no_pegawai'] = $dataEx->fields[2];
            $dataEx->MoveNext(); 
        }  
		return $data;	
	}

	public function getRelation_bpjs($no_bpjs)
	{
		$db=$this->db_util->getConnection();
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		
		$dataEx = $db->Execute('SELECT no_bpjs,no_kk,no_pegawai FROM daftar_bpjs WHERE no_bpjs='.$no_bpjs);	
		$data = array();
		while (!$dataEx->EOF) { 
            $data['no_bpjs'] = $dataEx->fields[0];
            $data['no_kk'] = $dataEx->fields[1];
            $data['no_pegawai'] = $dataEx->fields[2];
            $dataEx->MoveNext(); 
        }  
		return $data;	
	}

	public function getAllData_bpjs()
	{
		$db=$this->db_util->getConnection();
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		
		$dataEx = $db->Execute('SELECT no_bpjs,daftar_bpjs'.'.'.'no_kk,nama_kk,alamat,rt,rw,desa,kecamatan,kabupaten,provinsi,kode_pos,pegawai'.'.'.'nip,nama,jenis_kelamin,tgl_lahir,jabatan FROM daftar_bpjs,kartukk,pegawai WHERE daftar_bpjs'.'.'.'no_kk=kartukk'.'.'.'no_kk AND daftar_bpjs'.'.'.'no_pegawai=pegawai'.'.'.'nip');	
		$data = array();
		while (!$dataEx->EOF) { 
            $data[$dataEx->fields[0]]['no_bpjs'] = $dataEx->fields[0];
            $data[$dataEx->fields[0]]['no_kk'] = $dataEx->fields[1];
            $data[$dataEx->fields[0]]['nama_kk'] = $dataEx->fields[2];
            $data[$dataEx->fields[0]]['alamat'] = $dataEx->fields[3];
            $data[$dataEx->fields[0]]['rt'] = $dataEx->fields[4];
           	$data[$dataEx->fields[0]]['rw'] = $dataEx->fields[5];
            $data[$dataEx->fields[0]]['desa'] = $dataEx->fields[6];
            $data[$dataEx->fields[0]]['kecamatan'] = $dataEx->fields[7];
            $data[$dataEx->fields[0]]['kabupaten'] = $dataEx->fields[8];
            $data[$dataEx->fields[0]]['provinsi'] = $dataEx->fields[9];
            $data[$dataEx->fields[0]]['kode_pos'] = $dataEx->fields[10];
            $data[$dataEx->fields[0]]['no_pegawai'] = $dataEx->fields[11];
            $data[$dataEx->fields[0]]['nama'] = $dataEx->fields[12];
            $data[$dataEx->fields[0]]['jenis_kelamin'] = $dataEx->fields[13];
            $data[$dataEx->fields[0]]['tgl_lahir'] = $dataEx->fields[14];
            $data[$dataEx->fields[0]]['jabatan'] = $dataEx->fields[15];
            $dataEx->MoveNext(); 
        }  
		return $data;
	}

	public function getData_bpjs($no_bpjs)
	{
		$db=$this->db_util->getConnection();
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		
		$dataEx = $db->Execute('SELECT no_bpjs,daftar_bpjs'.'.'.'no_kk,nama_kk,alamat,rt,rw,desa,kecamatan,kabupaten,provinsi,kode_pos,pegawai'.'.'.'nip,nama,jenis_kelamin,tgl_lahir,jabatan FROM daftar_bpjs,kartukk,pegawai WHERE daftar_bpjs'.'.'.'no_kk=kartukk'.'.'.'no_kk AND daftar_bpjs'.'.'.'no_pegawai=pegawai'.'.'.'nip and daftar_bpjs'.'.'.'no_bpjs=\'1\'');	
		$data = array();
		while (!$dataEx->EOF) { 
            $data['no_bpjs'] = $dataEx->fields[0];
            $data['no_kk'] = $dataEx->fields[1];
            $data['nama_kk'] = $dataEx->fields[2];
            $data['alamat'] = $dataEx->fields[3];
            $data['rt'] = $dataEx->fields[4];
           	$data['rw'] = $dataEx->fields[5];
            $data['desa'] = $dataEx->fields[6];
            $data['kecamatan'] = $dataEx->fields[7];
            $data['kabupaten'] = $dataEx->fields[8];
            $data['provinsi'] = $dataEx->fields[9];
            $data['kode_pos'] = $dataEx->fields[10];
            $data['no_pegawai'] = $dataEx->fields[11];
            $data['nama'] = $dataEx->fields[12];
            $data['jenis_kelamin'] = $dataEx->fields[13];
            $data['tgl_lahir'] = $dataEx->fields[14];
            $data['jabatan'] = $dataEx->fields[15];
            $dataEx->MoveNext(); 
        }  
		return $data;
	}




	public function delete_bpjs($no_bpjs,$no_pegawai)
	{
		//$kk = delete_bpjs('kartuKK','no_bpjs',$no_bpjs);
		$bpjs =$this->db_util->delete_data('daftar_bpjs','no_bpjs',$no_bpjs);
		$pegawai =$this->db_util->delete_data('pegawai','nip',$no_pegawai);
		if($bpjs&&$pegawai)
		{
			return true;
		}		

	}

	public function update_bpjs($data,$no_bpjs)
	{

		$bpjs = $this->db_util->update('daftar_bpjs','no_kk,no_pegawai,created_at',array(
				$data['no_kk'],$data['no_pegawai'],$current_date
			));	

		$pegawai = $this->db_util->update('pegawai','nip, nama, jenis_kelamin, tgl_lahir, jabatan',array(
				$data['no_pegawai'],
				$data['nama'],
				$data['jenis_kelamin'],
				$data['tgl_lahir'],
				$data['jabatan']
			)); 

	}


	/*DAFTAR_BPJS*/
	public function setKey_bpjs($no_bpjs,$no_kk,$no_pegawai)
	{
		$key_bpjs = $this->db_util->update('daftar_bpjs','no_kk,no_pegawai',array($no_kk,$no_pegawai),'no_bpjs = ' . $no_bpjs);
		return $key_bpjs;
	}

	public function setKeyBykk_bpjs($no_bpjs,$no_kk)
	{
		$key_bpjs = $this->db_util->update('daftar_bpjs','no_kk',array($no_kk),'no_bpjs = ' . $no_bpjs);
		return $key_bpjs;
	}



	/*KK*/

	public function addKK($data)
	{
		$kk = $this->db_util->create('kartukk','no_kk,nama_kk,alamat,rt,rw,desa,kecamatan,kabupaten,provinsi,kode_pos',array(
				$data['no_kk'],
				$data['nama_kk'],
				$data['alamat'],
				$data['rt'],
				$data['rw'],
				$data['desa'],
				$data['kecamatan'],
				$data['kabupaten'],
				$data['provinsi'],
				$data['kode_pos']
			));	
		return $kk;
	}

	public function getAll_KK()
	{
		$db=$this->db_util->getConnection();
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		
		$dataEx = $db->Execute('SELECT * FROM kartuKK');	
		$data = array();
		while (!$dataEx->EOF) { 
            $data[$dataEx->fields[0]]['id'] = $dataEx->fields[0];
            $data[$dataEx->fields[0]]['no_kk'] = $dataEx->fields[1];
            $data[$dataEx->fields[0]]['nama_kk'] = $dataEx->fields[2];
            $data[$dataEx->fields[0]]['alamat'] = $dataEx->fields[3];
            $data[$dataEx->fields[0]]['rt'] = $dataEx->fields[4];
           	$data[$dataEx->fields[0]]['rw'] = $dataEx->fields[5];
            $data[$dataEx->fields[0]]['desa'] = $dataEx->fields[6];
            $data[$dataEx->fields[0]]['kecamatan'] = $dataEx->fields[7];
            $data[$dataEx->fields[0]]['kabupaten'] = $dataEx->fields[8];
            $data[$dataEx->fields[0]]['provinsi'] = $dataEx->fields[9];
            $data[$dataEx->fields[0]]['kode_pos'] = $dataEx->fields[10];
            $dataEx->MoveNext(); 
        }  
		return $data;
	}

	public function get_KK($no_kk)
	{
		$db=$this->db_util->getConnection();
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		
		$KartuKeluarga  = $db->Execute("SELECT * FROM kartukk WHERE no_kk='$no_kk'");
		$data = array();
			$data['id'] = 0;
            $data['no_kk'] = 0;
            $data['nama_kk'] = "Not Found";
            $data['alamat'] = "Not Found";
            $data['rt'] = 0;
           	$data['rw'] = 0;
            $data['desa'] = "Not Found";
            $data['kecamatan'] = "Not Found";
            $data['kabupaten'] = "Not Found";
            $data['provinsi'] = "Not Found";
            $data['kode_pos'] = 0;
	 	if (!$KartuKeluarga->EOF) { 
            $data['id'] = $KartuKeluarga->fields[0];
            $data['no_kk'] = $KartuKeluarga->fields[1];
            $data['nama_kk'] = $KartuKeluarga->fields[2];
            $data['alamat'] = $KartuKeluarga->fields[3];
            $data['rt'] = $KartuKeluarga->fields[4];
           	$data['rw'] = $KartuKeluarga->fields[5];
            $data['desa'] = $KartuKeluarga->fields[6];
            $data['kecamatan'] = $KartuKeluarga->fields[7];
            $data['kabupaten'] = $KartuKeluarga->fields[8];
            $data['provinsi'] = $KartuKeluarga->fields[9];
            $data['kode_pos'] = $KartuKeluarga->fields[10];
        }  

		return $data;
	}

	/*PEGAWAI*/

	public function getAll_pegawai()
	{
		$db=$this->db_util->getConnection();
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		
		$dataEx = $db->Execute('SELECT * FROM pegawai');	
		$data = array();
		while (!$dataEx->EOF) { 
            $data[$dataEx->fields[0]]['nip'] = $dataEx->fields[0];
            $data[$dataEx->fields[0]]['nama'] = $dataEx->fields[1];
            $data[$dataEx->fields[0]]['jenis_kelamin'] = $dataEx->fields[2];
            $str_date = strtotime($dataEx->fields[3]);
            $data[$dataEx->fields[0]]['tgl_lahir'] = date('d',$str_date);
            $data[$dataEx->fields[0]]['bln_lahir'] = date('m',$str_date);
           	$data[$dataEx->fields[0]]['thn_lahir'] = date('Y',$str_date);
            $data[$dataEx->fields[0]]['jabatan'] = $dataEx->fields[4];
            $dataEx->MoveNext(); 
        }  
		return $data;
	}

	public function get_pegawai($no_pegawai)
	{
		$db=$this->db_util->getConnection();
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		
		$dataEx = $db->Execute('SELECT * FROM pegawai WHERE nip = ' . $no_pegawai );	
		$data = array();
		while (!$dataEx->EOF) { 
            $data['no_pegawai'] = $dataEx->fields[0];
            $data['nama'] = $dataEx->fields[1];
            $data['jenis_kelamin'] = $dataEx->fields[2];
            $str_date = strtotime($dataEx->fields[3]);
            $data['tgl_lahir'] = date('d',$str_date);
            $data['bln_lahir'] = date('m',$str_date);
           	$data['thn_lahir'] = date('Y',$str_date);
            $data['jabatan'] = $dataEx->fields[4];
            $dataEx->MoveNext(); 
        }  
		return $data;
	}

	public function update_pegawai($data)
	{
		$key_bpjs = $this->db_util->update('pegawai','nama,jenis_kelamin,tgl_lahir,jabatan',array(
			$data['nama'],
			$data['jenis_kelamin'],
			$data['tgl_lahir'],
			$data['jabatan']
			),'nip = ' . $data['nip']);
		return $key_bpjs;
	}

	public function delete_pegawai($nip)
	{

		$deleted = $this->db_util->delete_data('pegawai','nip',$nip);
		return $deleted;
		//$this->db->Execute("delete from pegawai where nip='$nip'");
	}

	public function add_pegawai($data){
		
		$nip = $data['nip'];
		$nama = $data['nama'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$tanggal_lahir = $data['tgl_lahir'];
		$jabatan = $data['jabatan'];
		$sql = "INSERT into pegawai(nip, nama, jenis_kelamin, tanggal_lahir, jabatan) values('$nip','$nama','$jenis_kelamin','$tanggal_lahir','$jabatan')";
		
		$insert = $this->db->Execute($sql);
		if($insert==true){
			$sukses = true;
			return $sukses;
		}else{
			$sukses = false;
			return $sukses;
		}
	}
	

}
	
?>