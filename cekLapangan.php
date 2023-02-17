<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiPelaten | Cek Ketersediaan Lapangan</title>
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
            <p id="welcome">Cek Ketersediaan Lapangan</p> <br>
            <p id="argumen">Untuk cek ketersediaan lapangan, silahkan melakukan pengecekan di halaman ini.</p>
        </div>
    </div>
    <hr>
    <div>
        <div class="row" style="padding-right: 100px; ">
            <div class="col-md-1 col-sm-1 col-xs-12">
            </div>
            <div class="col-md-10 col-sm-10 col-xs-12" style="border-radius: 20px">
              <div class="jumbotron" style="border: 1px solid lightblue; border-radius: 20px; padding: 20px 20px 20px 20px; background-color: white; margin-left: 150px">
                <h4>Ketersediaan Lapangan</h4>
                <br>
                <form class="form-inline" action="#" method="post" style="font-family: arial">
                  <div class="form-group">
                    <input type="date">
                    <script src="assets/js/jquery.min.js"></script>
                    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                  </div>
                  <div class="form-group">
                    <select class="form-control">
                      <option>Lapangan 1</option>
                      <option>Lapangan 2</option>
                      <option>Lapangan 3</option>
                      <option>Lapangan 4</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <a href="#" class="btn btn-primary filter-room">Cari</a>
                  </div>
                </form>
                <br>
                <table id="mytable" class="table table-bordred table-striped" style="font-family: arial; font-size: 15px; text-align: center; border-radius: 20px">
                     <thead>
                    <th>08.00</th>
                      <th>09.00</th>
                      <th>10.00</th>
                      <th>11.00</th>
                      <th>12.00</th>
                      <th>13.00</th>
                      <th>14.00</th>
                      <th>15.00</th>
                      <th>16.00</th>
                      <th>17.00</th>
                      <th>18.00</th>
                      <th>19.00</th>
                      <th>20.00</th>
                     </thead>
                          <tbody>
                          <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          </tr>
                          </tbody>
                         </table>
              </div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-12">
        </div>
    </div>
</body>
</html>
