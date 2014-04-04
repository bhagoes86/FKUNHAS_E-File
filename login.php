<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"config/koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Aplikasi E-File Surat - Fakultas Kedokteran Universitas Hasanuddin</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body id="login">
	<div class="container">
	    <form class="form-signin" method="post" action="cek_login.php">
        <div class="navbar-inner navbar-inverse">
         <center>
         <h5 align="center">Aplikasi E-File Fakultas Kedokteran</h5>
		 <img src="images/logo.png" />
         <h4>Universitas Hasanuddin</h4>         
         </center>
        </div>
        <br />
        <legend></legend>
        <input type="text" class="input-block-level" placeholder="NIP" name="username">
        <input type="password" class="input-block-level" placeholder="Password" name="password">
        <button class="btn btn-block btn-primary" type="submit">Log In</button>
        <br />
        <center>
         <h5>Copyright &copy; <?php echo date('Y'); ?><br /><a href="http://med.unhas.ac.id">Fakultas Kedokteran - <strong>Universitas Hasanuddin Makassar</strong></h5>         
         </center>
    	</form>
         
    </div> <!-- /container -->
  </body>
</html>

 <script src="vendors/jquery-1.9.1.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
