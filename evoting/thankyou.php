<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","pemilu");

  if ($_POST["suara"] == "0") {
    if (isset($_POST["osis"])) {
      header("Location:pemilihan_osis.php");
      exit;
    }
    else if (isset($_POST["mpk"])) {
      header("Location:pemilihan_mpk.php");
      exit;
    }
  }
  if (!isset($_SESSION["NIS"])) {
    header("Location:index.php?status=1");
    exit;
  }

  $mpk = "siswa_mpk";
  $osis = "siswa";
  $suaraOsis = "suara";
  $suaraMpk = "suara_mpk";
  
  if (isset($_POST["osis"])) {
    $query = "insert into suara value(".$_POST["suara"] .")";
    $ins = "insert into siswa value(" . $_SESSION["NIS"] .")";
  }
  elseif (isset($_POST["mpk"])) {
    
    $query = "insert into suara_mpk value(".$_POST["suara"] .")";
    $ins = "insert into siswa_mpk value(" . $_SESSION["NIS"] .")";
  }


  $result = mysqli_query($conn, $query);

  mysqli_query($conn, $ins);

  session_destroy();

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>SMAN 2 Tangerang Selatan</title>
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
    <section class="container login-form-container text-center">
      <div>
        <img
          class="card-img-top"
          src="images/thanks.png"
          alt="Card image cap"
        />
      </div>
      <!-- <div>
        <h1 class="display-4">Terima Kasih</h1>
        
        <p class="lead">Anda Telah Memilih <%= jenis %> Tahun Ini</p>
        <div class="mt-5">
          <span class="bg-success p -2"
            ><small class="text-white">Redirecting in 5 seconds...</small></span
          >
        </div>
      </div> -->
    </section>
    <!-- SCRIPT untuk kembali ke HOME setelah pilih calon ketua & wakil -->
    <script type="text/javascript">
      setTimeout(function() {
        window.location = "index.php";
      }, 3000);
    </script>
  </body>
</html>
