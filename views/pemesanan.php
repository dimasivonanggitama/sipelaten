<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiPelaten | Pemesanan</title>
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
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="../index.php"><strong>siPelaten </strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="../access.php?controller=User&function=logout">Logout <i class="glyphicon glyphicon-log-out"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="atas">
        <div class="container" >
        <h1 style="font-size: 20px; text-align: center">SILAHKAN MEMASUKKAN DATA PEMESANAN LAPANGAN TENIS</h1></div>
    </div>
    <hr>
  </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
  </div>
  <div class="col-sm-12 col-md-4 col-lg-4" style="background-color: white; border-radius: 20px; border: 1px solid lightblue;">
      <form method="post" action="../access.php?controller=User&function=peminjaman_process" style="font-family: Arial; font-size: 15px; padding: 15px 10px 15px 10px">

        <div class="form-group">
          <label>Nama Pemesan</label>
          <input name="input_nama_pemesan" type="text" class="form-control" placeholder="Masukkan Nama Pemesan" value="<?php if (isset ($_SESSION['session_update'])) { echo $_SESSION['session_peminjam_nama_forUpdate']; } ?>" required>
        </div>

        <div class="form-group">
          <label>Nomer Telepon</label>
          <input name="input_nomorTelepon_pemesan" type="text" class="form-control" placeholder="Masukkan Nomer Telepon" value="<?php if (isset ($_SESSION['session_update'])) { print $_SESSION['session_peminjam_telp_forUpdate']; } ?>" required>
        </div>

        <div class="form-group">
          <label>Nomer Lapangan</label>
          <select name="pilihan_lapangan" class="form-control" style="margin-bottom: 10px" value="<?php if (isset ($_SESSION['session_update'])) { print $_SESSION['session_peminjam_lapangan_forUpdate']; } ?>" >
            <option value="1">Lapangan 1</option>
            <option value="2">Lapangan 2</option>
            <option value="3">Lapangan 3</option>
            <option value="4">Lapangan 4</option>
          </select>

          <label>Tanggal Peminjaman</label>
           <input name="input_tanggal_pemesanan" class="form-control" id="date" name="date" type="date" value="<?php if (isset ($_SESSION['session_update'])) { print $_SESSION['session_peminjam_tanggal_forUpdate']; } ?>" />
           <script src="../assets/js/jquery.min.js"></script>
           <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

          <label>Waktu Peminjaman</label>
          <br>

          <input name="input_waktu_pemesanan_awal" type="time" value="<?php if (isset ($_SESSION['session_update'])) { print $_SESSION['session_peminjam_waktu_A_forUpdate']; } ?>" /> - <input name="input_waktu_pemesanan_akhir" type="time" value="<?php if (isset ($_SESSION['session_update'])) { print $_SESSION['session_peminjam_waktu_B_forUpdate']; } ?>" />
          <script src="../assets/js/jquery.min.js"></script>
          <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
          <br>
	  <center>
          	<button type="submit" class="btn btn-primary" style="margin-top: 10px">Tambah Pesanan</button>
	  </center>
      </form>
      <center>
	  <a href="../access.php?controller=User&function=redirectToPeminjaman">Kembali</a>
      </center>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
    </div>
  </div>
</body>
</html>
