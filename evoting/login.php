<?php 
  // if (!isset($_POST["siswa"])) {
  //   if (!isset($_GET["status"])) {
     
  //     header("Location:index.php"); 
  //   }
  // }

 ?>
<!DOCTYPE html>
<html>
  <head>
  <title>SMAN 2 Tangerang Selatan</title>
  <script type="text/javascript">
    function validate(evt) {
      var theEvent = evt || window.event;

      if (theEvent.type === 'paste') {
        key = event.clipdoardData.getData('text/plain');
      }
      else {
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
      }
      var regex = /[0-9]|\./;
      if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) {
          theEvent.preventDefault();
        }
      }
    }
  </script>
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
      <form method="POST" action="pemilihan.php">
        <div class="form-group">
          <label class="h5" for="title"
            ><i class="fas fa-user-friends mr-2"></i>Nomor Induk Siswa</label
          ><label class="text-danger">*</label>
          <input
            type="text"
            class="form-control"
            name="NIS"
            id="title"
            placeholder="Enter Nomor Induk Siswa... (NIS)"
            autocomplete="off"
            onkeypress="validate(event)"
          />
        </div>
        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block"></button>
      </form>
    </section>
    <footer></footer>
  </body>
</html>
