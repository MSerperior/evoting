<?php 

if (!isset($_GET["v"])) {
  session_start();
  $_SESSION["NIS"] = $_POST['NIS'];

  $conn = mysqli_connect("localhost","root","","pemilu");
  $mpk = "siswa_mpk";
  $osis = "siswa";
  $query2 = "select * from pemilih where NIS = " . $_POST["NIS"];
  $result2 = mysqli_query($conn, $query2);
  if (mysqli_num_rows($result2) > 0) {   
  
    if (!$_POST["submit"]) {
      header("Location:index.php");
      session_destroy();
      exit;
    }
  }
  else {
    header("Location:index.php?status=AndaTidakTerdaftar");
    session_destroy();
    exit;
  }
}
else{
  session_start();
  $_SESSION["NIS"] = 0;
}

 ?> 
<!DOCTYPE html>
<html>
<head>

  <title>SMAN 2 Tangerang Selatan</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- File CDN -->
  <link rel="shortcut icon" type="image/x-icon" href="images/sman2tangsel.png">
  <link rel="stylesheet" href="stylesheets/bootstrap.css" />
  <link rel="stylesheet" href="stylesheets/all.css" />
  <!-- Tolong pasang sebelum style.css di input -->
  <link rel="stylesheet" href="stylesheets/style.css" />
</head>

  <body>
    <!-- Dari Sini -->
    <section class="container login-form-container">
      <div class="row">
        <div class="col-lg-6">
          <div class="card mb-3">
            <div>
              <!-- Link menuju berikutnya -->
              <a href="pemilihan_osis.php"
                ><img
                  class="card-img-top"
                  src="images/Bosis1.png"
                  alt="Card image cap"
              /></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-3">
            <div >
                    <!-- Link menuju berikutnya -->
                    <a href="pemilihan_mpk.php?"
                    ><img
                      class="card-img-top"
                      src="images/Bmpk1.png"
                      alt="Card image cap"
                  /></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Sampai sini -->
  </body>
</html>
