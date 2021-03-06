<?php
session_start();
include 'koneksi.php';
if ($_SESSION['username'] == '' || $_SESSION['level'] != '1') {
  ?>
  <script language="JavaScript">
    document.location = 'index.php';
  </script>
<?php
} else {
  ?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tambah Akun Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>


    <title>Login Form</title>

  </head>


  <body>
    <div class="login-content">
      <!-- Register -->
      <?php

        // include database connection file
        include_once "koneksi.php";

        // Check If form submitted, insert form data into users table.
        if (isset($_POST['register'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $pasmd5 = md5($password);


          // Insert user data into table
          $ambil_id = mysqli_query($konek, "SELECT id FROM user ORDER BY id DESC LIMIT 1");
          $row_id = mysqli_fetch_array($ambil_id);
          $hasil_id = $row_id['id'];
          $id = $hasil_id + 1;
          $result = mysqli_query($konek, "INSERT INTO user VALUES('$id','$username','$pasmd5', 1)");
          header('location:boot1.php');
        }
        ?>
      <div class="nk-block toggled" id="l-login">
        <form id="login-form" class="form" method="post" action="add_admin.php">
          <div class="nk-form">
            <h3>Buat Akun Admin</h3>
            <p>Masukkan data baru akun admin.</p>
            <div class="input-group">
              <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
              <div class="nk-int-st">
                <input type="text" class="form-control" placeholder="Username" name="username">
              </div>
            </div>
            <div class="input-group mg-t-15">
              <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
              <div class="nk-int-st">
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div>
            <div style="margin-bottom: 2rem;"></div>
            <a href="boot1.php" class="btn">
              <i class="notika-icon notika-left-arrow left-arrow-ant"></i><a href="boot1.php" style="padding-top: 1rem;">Kembali ke Data Nilai</a>
            </a>
            <button type="submit" name="register" value="Register" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
        </form>
      </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>

  </body>

  </html>

<?php
}
?>