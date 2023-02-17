<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiPelaten | Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php"><strong>siPelaten </strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="login.php">Logout <i class="glyphicon glyphicon-log-out"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="atas">
        <div class="container">
            <p id="welcome">Selamat Datang, admin</p>
            <p id="argumen">Silahkan melakukan validasi pemesanan lapangan tenis.</p>
            <br>
        </div>
    </div>
    <hr>
    <div class="col-md-2 col-sm-2 col-xs-12" id="kiri">
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12" id="tengah" style="border-radius: 20px">
      <div class="table-responsive" style="padding-right: 20px">
   <table id="mytable" class="table table-bordred table-striped" style="font-family: arial; font-size: 15px; text-align: center; border-radius: 20px">
        <thead>
        <th>Nama Pemesan</th>
         <th>Nomer Telepon</th>
          <th>Nomer Lapangan</th>
          <th>Tanggal Peminjaman</th>
          <th>Durasi Peminjaman</th>
           <th>Validasi</th>
        </thead>
            <tbody>
            <tr>
            <td>Mohsin</td>
            <td>0812332212</td>
            <td>1</td>
            <td>DD/MM/YYY</td>
            <td>2 jam</td>
            <td><p data-placement="top" data-toggle="tooltip" title="validate"><button class="btn btn-primary btn-xs" data-title="Validasi" data-toggle="modal" data-target="" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
            </tr>
            </tbody>
            </table>
  </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-12" id="kanan">
    </div>
</body>
</html>
