<?php
include "config/koneksi.php";

function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = anti_injection($_POST['username']);
$pass     = anti_injection(md5($_POST['password']));

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
  header('location:index.php');
}else{
	$login=mysql_query("SELECT * FROM civitas WHERE cNip='$username' AND cPass='$pass'");
	$ketemu=mysql_num_rows($login);
	$r=mysql_fetch_array($login);
	
	// Apabila username dan password ditemukan
	if ($ketemu > 0){
		session_start();
		include "timeout.php";
		$_SESSION[cv]      = $r[cId];
		$j = mysql_fetch_array(mysql_query("SELECT jabatan FROM jabatan WHERE idj='$r[idj]'"));
		$_SESSION[nipcv]     = $r[cNip];
		$_SESSION[namacv]  = $r[cNama];
		$_SESSION[passcv]     = $r[cPass];
		$_SESSION[jabatancv]    = $j[jabatan];
		$_SESSION[levelcv]      = $r[idj];
		// session timeout
 
		$_SESSION[loginefile] = 1;
		timer();
		$sid_lama = session_id();
		session_regenerate_id();
		$sid_baru = session_id();
		mysql_query("UPDATE civitas SET cSession='$sid_baru' WHERE cId='$r[cId]'");
		header('location:home.php');
	}else{
		echo "<script>alert('Username atau Password Salah..!'); parent.location = 'index.php';</script>";
	}
}
?>
