<?php 
	include '../sistemnya.php';
	if (!(isset($_POST['kelas'])) AND !(isset($_POST['nim']))) {
		header('location:index.php');	
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png"> 
    <title>
    	<?php 
    		// DEKLARASI INISIALISASI UNTUK TITLE DAN BREADCUMB
		    $a=$namasistemnya; //nampak
		    $ka="sipetor";  //link
		    $b="Pengundian"; 
		    $kb="pengundian/index.php"; 
		    $c="[Step 3] Hasil Penilaian"; 
		    $kc="pengundian/step1.php?id=".$_POST['kelas']; 
		    $d=""; 
		    $kd=""; 
		    $e=""; 
		    $ke=""; 
		    $pemisah= " || ";
			include '../titlenya.php';
			echo $title;
		?>
	</title>
	<!-- PARSER LIBRARY CSS -->
    <?php include "../cssnya.php"; ?>
    <?php include "../js_timer_step3.php"; // untuk timer js?>
    <body class="infobar-overlay sidebar-hideon-collpase sidebar-scroll animated-content">
    	<?php 
	  		$idmhs=$_POST['nim'];
  			$ambilmhs=mysqli_query($link, "select nama_mahasiswa from mahasiswa where id_mahasiswa='$idmhs'");
  			$arrambilmhs=mysqli_fetch_array($ambilmhs);
	  	?>
        <!-- PARSER HEADER -->
    	<?php include "../headernya.php"; ?>
		<div id="wrapper">
		    <div id="layout-static">
				<?php include "../kontenkirinya.php"; ?>	
				<div class="static-content-wrapper">
        			<div class="static-content">
            			<div class="page-content">
			                <?php include '../breadcumbnya.php' ?>
			               	<div class="container-fluid">
								<div data-widget-group="group1">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" >
												<div class="panel-heading" style="background-color: rgba(212, 211, 192, 0.5); margin-bottom: 10px;">
													<h1 style="color: #1A8300; font-weight: bold;"> <?php echo "$c"; ?></h1>
												</div>
												<div class="col-md-12" style="text-align: right;">
													<h2 style="color: #B70E0E; font-weight: bold;"><?php echo $idmhs." - ".$arrambilmhs['nama_mahasiswa']; ?></h2>
													<p>
												  		<?php 
												  			$tb_sql=mysqli_query($link, "
												  				select * from mahasiswa,tugasbesar, tugasbesar_mahasiswa
												  				where tugasbesar_mahasiswa.id_mahasiswa='$idmhs'
												  				and tugasbesar.id_tb=tugasbesar_mahasiswa.id_tb
												  				and tugasbesar.status='1'
												  				and mahasiswa.status='1'
												  				"
												  			);
												  			$jumlah_tb=mysqli_num_rows($tb_sql);
												  			if ($jumlah_tb > 0){
												  				$datatb=mysqli_fetch_array($tb_sql);
												  				$nama_sistemnya=$datatb['nama_sistem'];
												  				echo "<h3>".$nama_sistemnya."</h3>";
												  			} else {
												  				echo "<h3> BELUM MEMILIKI JUDUL</h3>";
												  			}

												  		?>
												  	</p>
												</div>
												<form id="cd" action="step3_proses.php" name="cd" method="post">
													<div class="col-md-3">
												  	  	<div class="panel panel-default">
												  	  		<div class="panel-heading">
												  	  			<h3>sisa waktu</h3>
												  	  		</div>
												  	  		<div class="row">
														  	  	<div class="form-group col-md-3">
																  	<input name="disp" type="text" id="txt" value="00:00" size="5" readonly="true" border="0">
															  	</div>
															</div>
												  	  	</div>												  		
												  	</div>
												  	<div class="col-md-9">
												  		<div class="panel panel-default">
													  		<div class="panel-heading">
													  			<h3>hasil penilaian</h3>
													  		</div>
													  		<div class="row">
														  		<div class="col-md-2" style="text-align: right;">
														  			<label class="control-label" style="font-weight: bold;">Analisis</label>
														  		</div> 
														  		<div class="col-md-1">
														  			<input type="number" readonly min="0" value="<?php echo $_POST['analisis_hasil']; ?>" max="100" name="analisis_hasil">
														  		</div>
														  		<div class="col-md-1">
														  			<input type="number" readonly min="0" max="100" name="analisis_pemahaman" value="<?php echo $_POST['analisis_pemahaman']; ?>">
														  		</div>
														  		<div class="col-md-5">
														  			<textarea readonly name="analisis_komentar" cols="70" rows="3"><?php echo $_POST['analisis_komentar']; ?></textarea>
															  	</div>
															</div>
														  	<div class="row">
														  		<div class="col-md-2" style="text-align: right;">
														  			<label class="control-label" style="font-weight: bold;">Desain</label>
														  		</div>
														  		<div class="col-md-1">
														  			<input readonly type="number" min="0" max="100" name="desain_hasil" value="<?php echo $_POST['desain_hasil']; ?>">
														  		</div>
														  		<div class="col-md-1">
														  			<input readonly type="number" min="0" max="100" name="desain_pemahaman" value="<?php echo $_POST['desain_pemahaman']; ?>">
														  		</div>
														  		<div class="col-md-5">
														  			<textarea readonly name="desain_komentar" cols="70" rows="3"><?php echo $_POST['desain_komentar']; ?></textarea>
														  		</div>
														  	</div>
														  	<div class="row">
														  		<div class="col-md-2" style="text-align: right;">
														  			<label class="control-label" style="font-weight: bold;">Implementasi</label>
														  		</div>
														  		<div class="col-md-1">
														  			<input readonly type="number" min="0" max="100" name="implementasi_hasil" value="<?php echo $_POST['implementasi_hasil']; ?>">
														  		</div>
														  		<div class="col-md-1">
														  			<input readonly type="number" min="0" max="100" name="implementasi_pemahaman" value="<?php echo $_POST['implementasi_pemahaman']; ?>">
														  		</div>
														  		<div class="col-md-5">
														  			<textarea readonly name="implementasi_komentar" cols="70" rows="3"><?php echo $_POST['implementasi_komentar']; ?></textarea>
														  		</div>
														  	</div>
													  	</div>
												  	</div>
													<input type="hidden" name="nim" value="<?php echo $_POST['nim'] ?>">
													<input type="hidden" name="kelas" value="<?php echo $_POST['kelas'] ?>">
												</form>
											</div>
										</div>
									</div>
								</div>
                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <?php include '../footernya.php'; ?>
                </div>
		    </div>
		</div>
	    <!-- PARSER LIBRARY JS -->
	    <?php include "../jsnya.php"; ?>
    </body>
</html>