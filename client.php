
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CLient ::  BPJS</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="asstes/css/datepicker.css">
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<style>
		#set-kk
		{
			padding-left: 10px;
		}
	</style>
</head>
<body>
		

	<!-- Modal -->
	<form id="register-form" method="POST" action="#">	 	
	<div class="modal fade" id="register-bpjs"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="form-title"> - </h4>
	      </div>
	      <div class="modal-body">
	      	<div class="page-header">
			  <h2>Data KK <small>Kartu Keluarga</small></h2>
			</div>
	      	<div class="form-group">
				<label for="exampleInputtext1">No Kartu Keluarga</label>
		    	<input type="text" class="form-control" id="bindKK_reg" name="no_kk" placeholder="Kartu Keluarga">
		  	</div>
			<div class="form-group">
			    <label for="exampleInputtext1">Nama Kepala Keluarga</label>
			    <input type="text" class="form-control" id="nama_kkReg" name="nama_kk" placeholder="Nama Kepala Keluarga">
			</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Alamat</label>
				<textarea class="form-control" id="alamat_kkReg" rows="3" name="alamat"></textarea>		  
			</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">RT</label>
		    	<input type="text" class="form-control" id="rt_kkReg" name="rt" placeholder="RT">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">RW</label>
		    	<input type="text" class="form-control" id="rw_kkReg" name="rw" placeholder="RW">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Desa</label>
		    	<input type="text" class="form-control" id="desa_kkReg" name="desa" placeholder="Desa">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Kecamatan</label>
		    	<input type="text" class="form-control" id="kecamatan_kkReg" name="kecamatan" placeholder="Kecamatan">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Kabupaten/Kota</label>
		    	<input type="text" class="form-control" id="kabupaten_kkReg" name="kabupaten" placeholder="Kabupaten/Kota">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Provinsi</label>
		    	<input type="text" class="form-control" id="provinsi_kkReg" name="provinsi" placeholder="Provinsi">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Kode Pos</label>
		    	<input type="text" class="form-control" id="kodepos_kkReg" name="kode_pos" placeholder="Kode Pos">
		  	</div>
			<div class="page-header">
			  <h2>Data Pegawai</h2>
			</div>
		  	<div class="form-group">
			    <label for="exampleInputtext1">No. Pegawai(NIP)</label>
			    <input type="text" class="form-control" id="bindPegawai_reg" name="no_pegawai" placeholder="No Pegawai">
			</div>
			<div class="form-group">
			    <label for="exampleInputtext1">Nama</label>
			    <input type="text" class="form-control" id="pegawai_namaReg" name="nama" placeholder="Nama">
			</div>
			<div class="form-group">
			    <label for="exampleInputtext1">Jenis Kelamin</label>
				<select class="form-control" name="jenis_kelamin" id="pegawai_jkReg">
				  <option value="pria">Pria</option>
				  <option value="wanita">Wanita</option>
				</select>
			</div>
			<div class="form-group">
				<div class="row">
				<div class="col-md-12">
			    	<label for="exampleInputtext1">Tanggal Lahir</label>
				</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<select class="form-control" name="tgl" id="pegawai_tglReg">
							<option value="" selected disabled>DD</option>
							<?php for($i=1;$i<=31;$i++){ ?>
							<?php if($i<10){ ?>
								<option value="<?php echo '0'.$i; ?>"><?php echo '0'.$i; ?></option>
							<?php }else{ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="bln" id="pegawai_blnReg">
							<option value="" selected disabled>MM</option>
							<?php for($i=1;$i<=12;$i++){ ?>
							<?php if($i<10){ ?>
								<option value="<?php echo '0'.$i; ?>"><?php echo '0'.$i; ?></option>
							<?php }else{ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="thn" id="pegawai_thnReg">
							<option value="" selected disabled>YYYY</option>
							<?php for($i=1900;$i<=2015;$i++){ ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
			    <label for="exampleInputtext1">Jabatan/Golongan</label>
			    <input type="text" class="form-control" id="pegawai_jabatanReg" name="jabatan" placeholder="Jabatan/Golongan">
			</div>

		
	      </div>
	      <div class="modal-footer">
	        <div id="alert-register" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove"></span>NIP sudah digunakan.</div>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" id="submit-reg" class="btn btn-primary">Simpan</button>
	      </div>
	    </div>
	  </div>
	</div>
	</form>
	
	<div class="modal fade" id="update-bpjs"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="form-title"> Form Edit BPJS</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="page-header">
			  <h2>Data KK <small>Kartu Keluarga</small></h2>
			</div>
			<form id="setKK-form" method="POST" action="#">	 	
			<div class="input-group">
				<input type="text" class="form-control update_kk" id="bindKK_upd" name="no_kk" placeholder="Kartu Keluarga">
			    <input type="hidden" id="set_no_bpjs" name="no_bpjs">
			      <span class="input-group-btn">
			        <button type="submit" class="btn btn-default btn-success" id="set-kk" type="button"><span class="glyphicon glyphicon-ok"></span>  Set KK</button>
			      </span>
			</div><!-- /input-group -->
			</form>
			<div id="success_set" class="alert alert-success" role="alert">No KK telah diset.</div>
		  	<div id="kk_notfound" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove"></span>KK tidak ada.</div>
		  	<table class="table table-striped data-kk">
				<tr>
					<td>Nama Kepala Keluarga</td>
					<td> : </td>
				 	<td><p  id="nama_kkUpd"></p></td>
				</tr>
				<tr>
					<td>Alamat Keluarga</td>
					<td> : </td>
				  	<td><p  id="alamat_kkUpd"></p></td>				
				</tr>
				<tr>
					<td>Kecamatan</td>
				  	<td> : </td>
				  	<td><p id="kecamatan_kkUpd"></p></td>
				</tr>
				<tr>
					<td>Kabupaten/Kota</td>
				  	<td> : </td>
				  	<td><p id="kabupaten_kkUpd"></p></td>
				</tr>
				<tr>
					<td>Provinsi</td>
				  	<td> : </td>
				  	<td><p id="provinsi_kkUpd"></p></td>
				</tr>
				<tr>
					<td>Kode Pos</td>
				  	<td> : </td>
				  	<td><p id="kodepos_kkUpd"></p></td>
				</tr>  
			</table>
			<div class="row">
			<div class="col-md-4">
				<button type="button" class="btn btn-primary" id="addKK-btn" data-toggle="modal" data-target="#addKK"><span class="glyphicon glyphicon-plus"></span> Tambah KK</button>
			</div>
			</div>
			<div class="page-header">
			  <h2>Data Pegawai</h2>
			</div>
		  
		  	<div class="form-group">
			    <label for="exampleInputtext1">No. Pegawai(NIP)</label>
			    <input type="text" class="form-control update_pegawai" id="bindPegawai_upd"  placeholder="No Pegawai">
				<input type="hidden" id="pr_pegawai" name="no_pegawai"/>
			</div>
			<div class="form-group">
			    <label for="exampleInputtext1">Nama</label>
			    <input type="text" class="form-control" id="pegawai_namaUpd" name="nama" placeholder="Nama">
			</div>
			<div class="form-group">
			    <label for="exampleInputtext1">Jenis Kelamin</label>
				<select class="form-control" name="jenis_kelamin" id="pegawai_jkUpd">
				  <option value="pria">Pria</option>
				  <option value="wanita">Wanita</option>
				</select>
			</div>
			<div class="form-group">
				<div class="row">
				<div class="col-md-12">
			    	<label for="exampleInputtext1">Tanggal Lahir</label>
				</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<select class="form-control" name="tgl" id="pegawai_tglUpd">
							<option value="" selected disabled>DD</option>
							<?php for($i=1;$i<=31;$i++){ ?>
							<?php if($i<10){ ?>
								<option value="<?php echo '0'.$i; ?>"><?php echo '0'.$i; ?></option>
							<?php }else{ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="bln" id="pegawai_blnUpd">
							<option value="" selected disabled>MM</option>
							<?php for($i=1;$i<=12;$i++){ ?>
							<?php if($i<10){ ?>
								<option value="<?php echo '0'.$i; ?>"><?php echo '0'.$i; ?></option>
							<?php }else{ ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="thn" id="pegawai_thnUpd">
							<option value="" selected disabled>YYYY</option>
							<?php for($i=1900;$i<=2015;$i++){ ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
			    <label for="exampleInputtext1">Jabatan/Golongan</label>
			    <input type="text" class="form-control" id="pegawai_jabatanUpd" name="jabatan" placeholder="Jabatan/Golongan">
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" id="update-btn" class="btn btn-primary">Simpan</button>
	      </div>
	     </div>
	  </div>
	</div>
	</form>

	<div class="modal fade" id="addKK" tabindex="-1" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Tambah Kartu Keluarga</h4>
	      </div>
	      <div class="modal-body">
	        <div class="form-group">
				<label for="exampleInputtext1">No Kartu Keluarga</label>
		    	<input type="text" class="form-control" id="keKK" name="no_kk" placeholder="Kartu Keluarga">
		  	</div>
	  	<div id="alert-addKK" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove"></span>KK sudah ada.</div>
			<div class="form-group">
			    <label for="exampleInputtext1">Nama Kepala Keluarga</label>
			    <input type="text" class="form-control" id="keNama" name="nama_kk" placeholder="Nama Kepala Keluarga">
			</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Alamat</label>
				<textarea class="form-control" rows="3" id="keAlamat" name="alamat"></textarea>		  
			</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">RT</label>
		    	<input type="text" class="form-control" id="keRT" name="rt" placeholder="RT">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">RW</label>
		    	<input type="text" class="form-control" id="keRW" name="rw" placeholder="RW">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Desa</label>
		    	<input type="text" class="form-control" id="keDesa" name="desa" placeholder="Desa">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Kecamatan</label>
		    	<input type="text" class="form-control" id="keKecamatan" name="kecamatan" placeholder="Kecamatan">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Kabupaten/Kota</label>
		    	<input type="text" class="form-control" id="keKabupaten" name="kabupaten" placeholder="Kabupaten/Kota">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Provinsi</label>
		    	<input type="text" class="form-control" id="keProvinsi" name="provinsi" placeholder="Provinsi">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputtext1">Kode Pos</label>
		    	<input type="text" class="form-control" id="keKodePos" name="kode_pos" placeholder="Kode Pos">
		  	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" id="add-kk" class="btn btn-primary">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="col-xs-12">
		<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
	</div>

	<div class="col-xs-12 col-md-10 col-md-offset-1">
  			<div id="data-content">
  				
  			</div>
	</div>
	
	<!-- Button trigger modal -->
	<div class="col-xs-12 col-md-6 col-md-offset-5">
		<button type="button" class="btn btn-success btn-lg myanimate"  id="bpjs-baru" data-toggle="modal" data-target="#register-bpjs">
		 	<span class="glyphicon glyphicon-plus"></span> Daftar BPJS
		</button>
	</div>

<script type="text/javascript">
	 $(document).ready(function() {
	 	$('#alert-register').hide();
	 	$('#kk_notfound').hide();
	 	$('#success_set').hide();
	 	$('#bpjs-baru').hide();
	 	$('#alert-addKK').hide();
	 	document.getElementById('add-kk').disabled=false;
	 	getData();
 	   $(document).on('submit', '#register-form', function() {	    
		    $('#loader-wrapper').show();
			$.post("client/register-client.php", $(this).serialize())
		        .done(function(data) { 
		            getData();
					document.getElementById("register-form").reset();
				});
		return false;
		});

 	   	$(document).on('click','#update-btn',function(){
 	   		var no_pegawai_i = $('#pr_pegawai').val();
 	   		var nama_i = $('#pegawai_namaUpd').val();
 	   		var jenis_kelamin_i = $('#pegawai_jkUpd').val();
 	   		var thn_i = ($('#pegawai_thnUpd').val());
 	   		var bln_i = ($('#pegawai_blnUpd').val());
 	   		var tgl_i = ($('#pegawai_tglUpd').val());
 	   		var jabatan_i = $('#pegawai_jabatanUpd').val();
 	   		$.post('client/updatePegawai-client.php',{no_pegawai : no_pegawai_i,nama:nama_i,jenis_kelamin:jenis_kelamin_i,thn:thn_i,bln:bln_i,tgl:tgl_i,jabatan:jabatan_i})
 	   		.done(function(result)
 	   		{
 	   			getData();
 	   			$('#update-bpjs').modal('hide');
 	   		});
 	   return false;
 	   });


 	   $(document).on('submit', '#setKK-form', function() {	    
		    $('#loader-wrapper').show();
			$.post("client/setKK-client.php", $(this).serialize())
		        .done(function(data) {
					$('#success_set').fadeIn('slow');
					setTimeout(function(){
					$('#success_set').fadeOut('slow');
					},3000);
					getData();
		        });
		return false;
		});
 	   
 	   $(document).on('click','#add-kk',function(){
	 	   	var no_kki = $('#keKK').val();
	 	   	var nama_kki = $('#keNama').val();
	 	   	var alamat_kk = $('#keAlamat').val();
	 	   	var rt_kk = $('#keRT').val();
	 	   	var rw_kk = $('#keRW').val();
	 	   	var desa_kk = $('#keDesa').val();
	 	   	var kecamatan_kk = $('#keKecamatan').val();
	 	   	var kabupaten_kk = $('#keKabupaten').val();
	 	   	var provinsi_kk = $('#keProvinsi').val();
	 	   	var kode_pos_kk = $('#keKodePos').val();
	 	   		$.post("client/addKK-client.php", {no_kk:no_kki,nama_kk:nama_kki,alamat:alamat_kk,rt:rt_kk,rw:rw_kk,desa:desa_kk,kecamatan:kecamatan_kk,kabupaten:kabupaten_kk,provinsi:provinsi_kk,kode_pos:kode_pos_kk})
			        .done(function(data) { 
			        	$('#addKK').modal('hide');
					});
 	   	return false;
 	   });

 	   $(document).on('click','#addKK-btn',function(){
 	   		$('#keKK').val('');
	 	   	$('#keNama').val('');
	 	   	$('#keAlamat').val('');
	 	   	$('#keRT').val('');
	 	   	$('#keRW').val('');
	 	   	$('#keDesa').val('');
	 	   	$('#keKecamatan').val('');
	 	   	$('#keKabupaten').val('');
	 	   	$('#keProvinsi').val('');
	 	   	$('#keKodePos').val('');
 	   });

 	   $(document).on('keyup','#keKK',function(){
 	   		checkKK($(this).val());
 	   });


 	   $(document).on('keyup','#bindKK_reg',function(){
			resetKKRegisterField(); 	   		
			var bind_val = $(this);
 	   		getKKRegister($(this).val());
 	   });

 	   $(document).on('keyup','#bindKK_upd',function(){
			resetKKUpdateField(); 	   		
			var bind_val = $(this);
 	   		getKKUpdate($(this).val());
 	   });

 	   $(document).on('keydown','#bindKK_upd',function(){
			resetKKUpdateField(); 	   		
 	   });


 	   $(document).on('keyup','#bindPegawai_reg',function(){
 	   		resetPegawaiRegister();
 	   		var bind_val = $(this);
 	   		getPegawaiRegister($(this).val());
 	   });

 	   $(document).on('click', '#delete-btn', function() {	    
		    if(confirm('Are you sure;?')){
			    var no_bpjs = $(this).closest('td').find('.no_bpjs').text();
			    var no_kk = $(this).closest('td').find('.no_kk').text();
			    var no_pegawai = $(this).closest('td').find('.no_pegawai').text();
			    $.post("client/delete-client.php", { no_bpjs: no_bpjs,no_kk: no_kk,no_pegawai: no_pegawai })
			        .done(function(data){
			            $('#loader-wrapper').show();
			            getData();
			        });
			}
			return false;
		});


 	   $(document).on('click', '#edit-btn', function() {	    
		        var no_bpjs = $(this).closest('td').find('.no_bpjs').text();
			    var no_kk = $(this).closest('td').find('.no_kk').text();
			    var no_pegawai = $(this).closest('td').find('.no_pegawai').text();
			    document.getElementById('set-kk').disabled=false;
			    $('#pr_pegawai').val(no_pegawai);
			    $('#set_no_bpjs').val(no_bpjs);
			    FillBPJS(no_bpjs);
			    getKKUpdate(no_kk);
			    no_kk = null;
			    getPegawaiUpdate(no_pegawai);
			return false;
		});

 	
	});

	function getData()
	{
		$('#data-content').fadeIn('slow', function(){
			$('#data-content').load('client/read-client.php', function(){
				$('#register-bpjs').modal('hide');		        
				$('#bpjs-baru').show();
				$('#loader-wrapper').hide();    
				$('#data-content').fadeIn('slow');
		 	   	$('#bpjs-baru').on('click',function(){
		 	   		changeModalTitle('Form Pendaftaran BPJS');
					disablePegawaiRegister(false);
		 	   		$('#alert-register').hide();
		 	   		document.getElementById("register-form").reset();
		 	   });
			});
		});	
	}

	function getKKRegister(no_kk)
	{
		var no_kki = no_kk;
		$.ajax({
            url: "client/getKK-client.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {no_kk:no_kki},
            success: function (result) {
            	if(result.no_kk!=0)
            	{
    
            		$("#nama_kkReg").val(result.nama_kk);  
	             	$("#alamat_kkReg").val(result.alamat);
	             	$("#rt_kkReg").val(result.rt);
	             	$("#rw_kkReg").val(result.rw);
	             	$("#desa_kkReg").val(result.desa);
	             	$("#kecamatan_kkReg").val(result.kecamatan);
	             	$("#kabupaten_kkReg").val(result.kabupaten);
	             	$("#provinsi_kkReg").val(result.provinsi);
	             	$("#kodepos_kkReg").val(result.kode_pos);	
	        	}
	        	else
	        	{
	        		$("#nama_kkReg").val("");  
	             	$("#alamat_kkReg").val("");
	             	$("#rt_kkReg").val("");
	             	$("#rw_kkReg").val("");
	             	$("#desa_kkReg").val("");
	             	$("#kecamatan_kkReg").val("");
	             	$("#kabupaten_kkReg").val("");
	             	$("#provinsi_kkReg").val("");
	             	$("#kodepos_kkReg").val("");	
	        	}
            }
		});		
	}

	function checkKK(no_kk)
	{
		var no_kki = no_kk;
		$.ajax({
            url: "client/getKK-client.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {no_kk:no_kki}
		}).done(function(result){
            	document.getElementById('add-kk').disabled=false;
	        	$("#alert-addKK").fadeOut('slow');
            	if(result.no_kk!=0)
            	{         		
	             	$("#alert-addKK").fadeIn('slow');
	        		document.getElementById('add-kk').disabled=true;
	        	}
		}).fail(function() {
			    $("#alert-addKK").fadeOut('slow');
	        	document.getElementById('add-kk').disabled=false;
		});
	}

	function getKKUpdate(no_kk)
	{
		var no_kki = no_kk;
		$.ajax({
            url: "client/getKK-client.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {no_kk:no_kki},
            success: function(result){
            	if(result.no_kk!=0)
            	{
            		document.getElementById('set-kk').disabled=false;
            		var no_kk = $(document).closest('td').find('.no_bpjs').text();
            		var no_pegawai = $(document).closest('td').find('.no_bpjs').text();
            		$('#kk_notfound').fadeOut('slow');
            		$('.data-kk').fadeIn('slow');
            		$('#nama_kkUpd').text(result.nama_kk);
            		$('#alamat_kkUpd').text(result.alamat+" RT."+ result.rt + " RW." + result.rw + " Desa "+result.desa);
            		$("#kecamatan_kkUpd").text(result.kecamatan);
            		$("#kabupaten_kkUpd").text(result.kabupaten);
            		$("#provinsi_kkUpd").text(result.provinsi);
            		$("#kodepos_kkUpd").text(result.kode_pos);
				}
            	else
				{
					$('#kk_notfound').fadeIn('slow');
					$('.data-kk').fadeOut('slow');
					$('#nama_kkUpd').text('');
            		$('#alamat_kkUpd').text('');
            		$("#kecamatan_kkUpd").text('');
            		$("#kabupaten_kkUpd").text('');
            		$("#provinsi_kkUpd").text('');
            		$("#kodepos_kkUpd").text('');
					document.getElementById('set-kk').disabled=true;
				}

            },
            error: function(xhr, status, error) {
				  var err = eval("(" + xhr.responseText + ")");
				  alert(err.Message);
				}
        });
     }

	function resetKKRegisterField()
	{
		$("#nama_kkReg").val("");  
		$("#alamat_kkReg").val("");
		$("#rt_kkReg").val("");
		$("#rw_kkReg").val("");
		$("#desa_kkReg").val("");
		$("#kecamatan_kkReg").val("");
		$("#kabupaten_kkReg").val("");
		$("#provinsi_kkReg").val("");
		$("#kodepos_kkReg").val("");
	}

	
	function resetKKUpdateField()
	{
		$("#nama_kkUpd").val("");  
		$("#alamat_kkUpd").val("");
		$("#rt_kkUpd").val("");
		$("#rw_kkUpd").val("");
		$("#desa_kkUpd").val("");
		$("#kecamatan_kkUpd").val("");
		$("#kabupaten_kkUpd").val("");
		$("#provinsi_kkUpd").val("");
		$("#kodepos_kkUpd").val("");
	}

	function FillBPJS(no_bpjs)
	{
		var no_bpjsi = no_bpjs;
		$.ajax({
            url: "client/getBPJSRelation-client.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {no_bpjs:no_bpjs},
            success: function (result) {
          		$(".update_kk").val(result.no_kk);  
             	$(".update_pegawai").val(result.no_pegawai);
            }
		});
	}

	function changeModalTitle(page_title){   
	    $('#form-title').text(page_title);     
	    	document.title=page_title;
	}


	function getPegawaiRegister(no_pegawai)
	{
		var nipi = no_pegawai;
		$.ajax({
            url: "client/getPegawai-client.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {no_pegawai:nipi},
            success: function (result) {
            	if(result!="")
            	{
            		$("#pegawai_namaReg").val(result.nama);  
	             	$("#pegawai_jkReg").val(result.jenis_kelamin);
	             	$("#pegawai_tglReg").val(result.tgl_lahir);
	             	$("#pegawai_blnReg").val(result.bln_lahir);
	             	$("#pegawai_thnReg").val(result.thn_lahir);
	             	$("#pegawai_jabatanReg").val(result.jabatan);
					$("#alert-register").show("slow");
					disablePegawaiRegister(true);            	
					document.getElementById('submit-reg').disabled = true;			
				}
            	else
				{
					$("#alert-register").hide("slow");
					disablePegawaiRegister(false);
					document.getElementById('submit-reg').disabled = false;			

				}
            }
		});
     }

	function getPegawaiUpdate(no_pegawai)
	{
		var nipi = no_pegawai;
		$.ajax({
            url: "client/getPegawai-client.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {no_pegawai:nipi},
            success: function (result) {
            	document.getElementById('bindPegawai_upd').disabled=true;
        		$("#pegawai_namaUpd").val(result.nama);  
             	$("#pegawai_jkUpd").val(result.jenis_kelamin);
             	$("#pegawai_tglUpd").val(result.tgl_lahir);
             	$("#pegawai_blnUpd").val(result.bln_lahir);
             	$("#pegawai_thnUpd").val(result.thn_lahir);
             	$("#pegawai_jabatanUpd").val(result.jabatan);							
            }
		});
     }
    function disablePegawaiRegister(boolEnable)
    {
     	document.getElementById('pegawai_namaReg').disabled = boolEnable;
     	document.getElementById('pegawai_jkReg').disabled = boolEnable;
     	document.getElementById('pegawai_tglReg').disabled = boolEnable;
     	document.getElementById('pegawai_blnReg').disabled = boolEnable;
     	document.getElementById('pegawai_thnReg').disabled = boolEnable;
     	document.getElementById('pegawai_jabatanReg').disabled = boolEnable;
    }

    function disablePegawaiUpdate(boolEnable)
    {
     	document.getElementById('pegawai_namaUpd').disabled = boolEnable;
     	document.getElementById('pegawai_jkUpd').disabled = boolEnable;
     	document.getElementById('pegawai_tglUpd').disabled = boolEnable;
     	document.getElementById('pegawai_blnUpd').disabled = boolEnable;
     	document.getElementById('pegawai_thnUpd').disabled = boolEnable;
     	document.getElementById('pegawai_jabatanUpd').disabled = boolEnable;
    }

    function resetPegawaiRegister()
	{
		$("#pegawai_namaReg").val("");  
		$("#pegawai_jkReg").val("");
		$("#pegawai_tglReg").val("");
		$("#pegawai_blnReg").val("");
		$("#pegawai_thnReg").val("");
		$("#pegawai_jabatanReg").val("");
	}

	function resetPegawaiUpdate()
	{
		$("#nama_kkUpd").val("");  
		$("#alamat_kkUpd").val("");
		$("#rt_kkUpd").val("");
		$("#rw_kkUpd").val("");
		$("#desa_kkUpd").val("");
		$("#kecamatan_kkUpd").val("");
		$("#kabupaten_kkUpd").val("");
		$("#provinsi_kkUpd").val("");
		$("#kodepos_kkUpd").val("");
	}

	function innerTextValue(id,value)
	{
		document.getElementById(id).innerHTML = value;
	}

</script>	
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.validate.js"></script>
</body>
</html>