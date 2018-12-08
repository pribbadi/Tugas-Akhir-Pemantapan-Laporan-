<?php 
	include '../sistemnya.php'
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
		    $b="Kelas"; 
		    $kb="kelas/index.php"; 
		    $c="Tambah"; 
		    $kc="kelas/tambah.php"; 
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
    <body class="infobar-overlay sidebar-hideon-collpase sidebar-scroll animated-content" id="tooltips-demo">
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
											<div class="panel panel-default">
												<div class="panel-heading">
													<h2><?php echo $c.' '.$b; ?></h2>
												</div>
												<div class="panel-body no-padding">
													<form action="tambah_proses.php" class="form-horizontal row-border" method="POST">
								                        <div class="form-group">
														    <label class="col-sm-3 control-label">Kelas</label>
														    <div class="col-sm-5">
														        <input type="text" name='nama' class="form-control mask" data-inputmask="'mask':'MI-9'" required="on" autofocus="on" autocomplete="off" placeholder="MI-x">
														    </div>
														</div>
								                        <div class="form-group">
								                            <label class="col-sm-3 control-label">Tahun Akademik</label>
								                            <div class="col-sm-5">
								                                <input type="text" name='tahun_akademik' class="form-control mask" data-inputmask="'mask':'9999/9999'" required="on" autofocus autocomplete="off" placeholder="20xx/20xx">
								                            </div>
								                        </div>
								                        <div class="form-group">
														    <label class="col-sm-3 control-label">Semester</label>
														    <div class="col-sm-5">
														        <input type="text" name='semester' class="form-control mask" data-inputmask="'mask':'9'" required="on"  autocomplete="off" placeholder="x">
														    </div>
														</div>
														<div class="panel-footer">
											                <div class="row">
											                    <div class="col-sm-6 col-sm-offset-3">
											                        <div class="btn-toolbar">
											                        	<input type='submit' class="btn btn-primary" value="SIMPAN">
											                        	</input>
											                            <a class="btn btn-default" href="<?php echo $base_url.'admin/'.$kb; ?>" >
																			<i class="fa fa-chevron-left"></i>
																			<span>&nbsp Back</span>
																		</a>
											                        </div>
											                    </div>
											                </div>
											            </div>
													</form>
												</div>
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