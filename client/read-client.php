
<?php
	require_once('../nusoap/lib/nusoap.php');
	$client= new nusoap_client('http://localhost/ta/server.php?wsdl',true);
	$data = $client->call('getIndexData',array());
//	var_dump($data);
//	echo " " . htmlspecialchars($client->response,ENT_QUOTES) . " ";
?>

<table class="table table-hover">
	<tr>
		<th>
			No. BPJS				
		</th>
		<th>
			Nama 		
		</th>
		<th>
			Jabatan	
		</th>
		<th>
			Kecamatan			
		</th>
		<th>
			Kab./Kota
		</th>
		<th>
			Provinsi
		</th>
		<th>
			Kode Pos		
		</th>
		<th>
			Action
		</th>
	</tr>
<?php foreach ($data as $row) { ?>
	<tr>
		<td><?php echo $row['no_bpjs']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['jabatan']; ?></td>
		<td><?php echo $row['kecamatan']; ?></td>
		<td><?php echo $row['kabupaten']; ?></td>
		<td><?php echo $row['provinsi']; ?></td>
		<td><?php echo $row['kode_pos']; ?></td>
		<td>
			<div class="no_bpjs display-none"><?php echo $row['no_bpjs']; ?></div>
			<div class="no_pegawai display-none"><?php echo $row['no_pegawai']; ?></div>
			<div class="no_kk display-none"><?php echo $row['no_kk']; ?></div>
			<button type="btn" id="edit-btn" class="btn btn-primary" data-toggle="modal" data-target="#update-bpjs"><span class="glyphicon glyphicon-pencil"> Edit</span></button>
			<button type="btn" id="delete-btn" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
		</td>
	</tr>
<?php } ?>
</table>