<?php 
  session_start();
if (!isset($_SESSION["NIS"])) {
    header("Location:index.php?status=1");
    exit;
  }

  $conn = mysqli_connect("localhost","root","","pemilu");
  $mpk = "siswa_mpk";
  $osis = "siswa";
  $query = "select * from ".$osis." where NIS = " . $_SESSION["NIS"];
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {   
  
    if (!$_POST["submit"]) {
      header("Location:index.php?status=AndaTelahMemilih");
      session_destroy();
      exit;
    }
  }
 ?>
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>SMAN 2 Tangerang Selatan</title>
  <script src="script.js"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- File CDN -->
  <link rel="stylesheet" href="stylesheets/bootstrap.css" />
  <link rel="stylesheet" href="stylesheets/all.css" />
  <!-- Tolong pasang sebelum style.css di input -->
  <link rel="stylesheet" href="stylesheets/style.css" />
</head>

  <body>
    <section class="container login-form-container-2">
      <!-- Start FORM -->
      
      <form action="thankyou.php" method="POST">
        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-3">
              <div>
                <!-- VALUE 1 -->
                <img class="card-img-top"
                id="a" 
                src="images/osis1.png"
                alt="Card image cap" type="image" value="1" onclick="select1O()">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card mb-3">
              <div>
                <!-- VALUE 2 -->
                <img class="card-img-top"
                id="b" 
                src="images/osis2.png"
                alt="Card image cap" type="image" value="2" onclick="select2O()">
            </div>
          </div>
          
        </div>
      </div>
      <!-- Button SUBMIT -->

      <input type="text" id="suara" name="suara" value="0" hidden="">
      <div class="text-center mb-3"><input type="Submit" name="osis" value="Submit"class="btn btn-danger btn-block"></input></div>
    </form>
    <!-- End of FORM -->
     <!-- NAVBAR BAWAH -->
      <div class="container">
          <div aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Pemilihan OSIS
                </li>
              </ol>
      </div>
      <!-- END OF NAVBAR BAWAH -->
    </section>
    <!-- Sampai sini -->
  </body>
</html>
