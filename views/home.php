<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiPelaten | Home</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <?php 
	session_start();
	if (!isset($_SESSION['session_username'])) {
		$_SESSION['user_state'] = "Anda harus login terlebih dahulu!";
		header("location: ../access.php?controller=User&function=login");
		break;
	}
    ?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="../access.php?controller=User&function=home"><strong>siPelaten </strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="../access.php?controller=User&function=logout"><font color="red"><b>Logout </b></font><i class="glyphicon glyphicon-log-out"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="atas">
        <div class="container">
            <p id="welcome">Selamat Datang, <b><?php echo $_SESSION['session_username']; ?></b>!</p> 
	    <br>
            <p id="argumen">Untuk memesan lapangan, silahkan menekan tombol tambah pemesanan. Untuk melihat poin yang ada, silahkan menekan tombol lihat poin.</p>
        </div>
    </div>
    <hr>
    <div>
        <div class="row" style="padding-right: 100px; ">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="jumbotron" id="home" style="border: 2px solid lightblue; margin-left: 50px" >
                    	<h3 class="text-center" id="menubar">Menu Bar</h3>
                      	<a class="btn btn-default btn-lg show" role="button" href="../access.php?controller=User&function=redirectToPemesanan" id="tambah">Tambah Pemesanan</a>
                      	<a class="btn btn-default btn-lg show" role="button" href="../access.php?controller=User&function=search_jadwal_lapangan" id="tambah">Cek Lapangan</a>
                      	<a class="btn btn-default btn-lg show" role="button" id="cekpoin" data-toggle="modal" data-target="#myModal">Cek Poin</a>
                      	<!-- Modal -->
                      	<div id="myModal" class="modal fade" role="dialog" >
                        	<div class="modal-dialog">
                          		<!-- Modal content-->
                          		<div class="modal-content">
                            			<div class="modal-header">
                              				<button type="button" class="close" data-dismiss="modal">&times;</button>
                              				<h4 class="modal-title">Poin Anda</h4>
                            			</div>
                            			<div class="modal-body">
                              				<p>Jumlah poin anda adalah : <?php echo $_SESSION['session_peminjam_poin_total']; ?> poin.</p>
                            			</div>
                            			<div class="modal-footer">
                              				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            			</div>
                          		</div>
                        	</div>
                      	</div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12" style="border-radius: 20px">
              <div class="table-responsive" style="padding-right: 20px">
           <table id="mytable" class="table table-bordred table-striped" style="font-family: arial; font-size: 15px; text-align: center; border-radius: 20px">
                <thead>
			<th>ID pemesanan</th>
                	<th>Nama Pemesan</th>
                 	<th>Kontak</th>
                  	<th>Lapangan</th>
                  	<th>Tanggal Peminjaman</th>
                  	<th>Lama Peminjaman</th>
                  	<th>Biaya</th>
                  	<th>Status</th>
			<?php if ($_SESSION['session_username'] != "admin") { ?>
                   		<th>Aksi</th>
			<?php } ?>
                </thead>
		<tbody>
			<?php $i = 1; while ($i <= $_SESSION['i']) { 
				?>
                   		<tr>
                     			<td><?php echo $_SESSION['session_peminjam_id'][$i]; ?></td>
                     			<td><?php echo $_SESSION['session_peminjam_nama'][$i]; ?></td>
                     			<td><?php echo $_SESSION['session_peminjam_telp'][$i]; ?></td>
                     			<td><?php echo $_SESSION['session_peminjam_lapangan'][$i]; ?></td>
                     			<td><?php echo $_SESSION['session_peminjam_tanggal'][$i]; ?></td>
                     			<td><?php echo $_SESSION['session_peminjam_durasi'][$i]; ?></td>
                     			<td> <a class="btn btn-default btn-sm show" role="button" id="rincianBIaya" data-toggle="modal" data-target="#rincianBiaya<?php echo $_SESSION['session_peminjam_id'][$i]; ?>" style="">Tampilkan</a>
                       				<!-- Modal -->
                       				<div id="rincianBiaya<?php echo $_SESSION['session_peminjam_id'][$i]; ?>" class="modal fade" role="dialog" >
                         				<div class="modal-dialog">
                           					<!-- Modal content-->
                           					<div class="modal-content">
                             						<div class="modal-header">
                               							<button type="button" class="close" data-dismiss="modal">&times;</button>
                               							<h4 class="modal-title">Rincian Biaya</h4>
                             						</div>
                             						<div class="modal-body">
                               							<div class="table-responsive">
                                	 						<table class="table table-bordered">
                                	   							<thead>
                                	     								<div class="jenengtabel">
                                	       									<th>Lapangan</th>
                                	       									<th>Biaya Perjam</th>
                                	       									<th>Lama Peminjaman</th>
                                	       									<th>Total Biaya</th>
                                     									</div>
                                   								</thead>
                                   								<tbody>
                                     									<td><?php echo $_SESSION['session_peminjam_lapangan'][$i]; ?></td>
                                     									<td><?php $harga_perjam = "10000"; echo $harga_perjam; ?></td>
                                     									<td><?php echo $_SESSION['session_peminjam_durasi'][$i]; ?></td>
                                     									<td><?php echo $harga_perjam * $_SESSION['session_peminjam_durasi'][$i]; ?></td>
                                   								</tbody>
                                 							</table>
                               							</div>
                             						</div>
                             						<div class="modal-footer">
                               							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                             						</div>
                           					</div>
                         				</div>
                       				</div>
					</td>
					<td>
						<?php 
							if ($_SESSION['session_username'] != "admin") { 
								if ($_SESSION['session_peminjam_status'][$i] == 0) { 
									?>
									<p>Belum divalidasi</p>
									<?php 
								} 
								if ($_SESSION['session_peminjam_status'][$i] == 1) { 
									?>
									<p style="color:green;"><b>Divalidasi</b></p>
									<?php 
								}
								if ($_SESSION['session_peminjam_status'][$i] == -1) { 
									?>
									<p style="color:red;"><b>Tidak divalidasi</b></p>
									<?php 
								}
						      	} else { 
								if ($_SESSION['session_peminjam_status'][$i] == 0) { 
									?>
									<a href="../access.php?controller=User&function=validasi&id=<?php echo $_SESSION['session_peminjam_id'][$i]; ?>"><p style="color:green;">Validasi<b>?</b></p></a>
									<a href="../access.php?controller=User&function=unvalidasi&id=<?php echo $_SESSION['session_peminjam_id'][$i]; ?>"><p style="color:red;">Unvalidasi<b>?</b></p></a>
									<?php
								} 
							}
						?>
					</td>
					<?php if ($_SESSION['session_username'] != "admin") { ?>
                     				<td>
							<p data-placement="top" data-toggle="tooltip" title="Ubah Rincian Pemesanan">
								<form method="post" action="../access.php?controller=User&function=update_process&id=<?php echo $_SESSION['session_peminjam_id'][$i]; ?>">
									<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" >
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</form>
							</p>
							<p data-placement="top" data-toggle="tooltip" title="Batalkan Pemesanan">
								<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo $_SESSION['session_peminjam_id'][$i]; ?>">
									<span class="glyphicon glyphicon-remove-circle"></span>
								</button>
							</p>
						</td>
					<?php } ?>
                     			<!-- Modal -->
                     			<div id="delete<?php echo $_SESSION['session_peminjam_id'][$i]; ?>" class="modal fade" role="dialog" >
                       				<div class="modal-dialog">
                         				<!-- Modal content-->
                         				<div class="modal-content">
                           					<div class="modal-header">
                             						<button type="button" class="close" data-dismiss="modal">&times;</button>
                             						<h4 class="modal-title">Konfirmasi</h4>
                           					</div>
                           					<div class="modal-body">
                             						<p>Apakah anda ingin membatalkan pemesanan ?</p>
                           					</div>
                           					<div class="modal-footer">
                              						<a href="../access.php?controller=User&function=delete_process&id=<?php echo $_SESSION['session_peminjam_id'][$i]; ?>" class="btn btn-danger btn-ok">Ya</a>
									
                            						<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                           					</div>
                         				</div>
                       				</div>
                     			</div>
				</tr>
			<?php $i++; } ?>
		</tbody>
             </table>
          </div>
        </div>
    </div>
</body>
</html>
