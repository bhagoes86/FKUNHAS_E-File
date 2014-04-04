<?php
require_once "../cek_sesi.php";
session_start();
include "../../config/koneksi.php";
include "../../config/fungsi_thumb.php";
$act=$_GET[act];

// Input civitas
if ($act=='tambah'){
  $pass = md5($_POST['pass']);
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $foto = $acak.$nama_file; 
  
  if (!empty($lokasi_file)){
	UploadFoto($foto);
	$q=mysql_query("INSERT INTO civitas(cNip,
									cNama,
									cAlamat,
									cTelp, 
									cEmail,
									cFoto,
									cPass,
									idj) 
							VALUES('$_POST[nip]',
									'$_POST[nama]',
									'$_POST[alamat]',
									'$_POST[telp]',
									'$_POST[email]',
									'$foto',
									'$pass',
									'$_POST[jabatan]')");
  }else{
	$q=mysql_query("INSERT INTO civitas(cNip,
									cNama,
									cAlamat,
									cTelp, 
									cEmail,
									cPass,
									idj) 
							VALUES('$_POST[nip]',
									'$_POST[nama]',
									'$_POST[alamat]',
									'$_POST[telp]',
									'$_POST[email]',
									'$pass',
									'$_POST[jabatan]')");
	}
  if ($q){
	  echo "<script>window.alert('Data Tersimpan');window.location=('../../home.php?pages=civitas')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Tersimpan');self.history.back();</script>";
  }
}
// hapus civitas
elseif ($act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT cFoto FROM civitas WHERE cId='$_GET[id]'"));
  if ($data['cFoto']!=''){
    //hapus file foto
	 unlink("../../foto/$data[cFoto]"); 
  }
  mysql_query("DELETE FROM civitas WHERE cId='$_GET[id]'");
  echo "<script>window.location=('../../home.php?pages=civitas')</script>"; 
}
// edit civitas
elseif ($act=='edit'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $foto = $acak.$nama_file; 
  
  //jika data diupdate ubahfoto=0 dan ubahpassword=0
  if ((empty($lokasi_file)) && ($_POST['pass']=="")){
	$q=mysql_query("UPDATE civitas SET cNip    = '$_POST[nip]',
                                   cNama     = '$_POST[nama]',
                                   cAlamat	 = '$_POST[alamat]',
                                   cTelp	 = '$_POST[telp]', 
                                   cEmail	 = '$_POST[email]',
								   idj		 = '$_POST[jabatan]'
								   WHERE cId = '$_GET[id]'");
	
  }
  //jika data diupdate ubahfoto=1 dan ubahpassword=0
  elseif((!empty($lokasi_file)) && ($_POST['pass']=="")){
	$data=mysql_fetch_array(mysql_query("SELECT cFoto FROM civitas WHERE cId='$_GET[id]'"));
	if ($data['cFoto']!=''){
		//hapus foto
		unlink("../../foto/$data[cFoto]"); 
	}
	UploadFoto($foto);
	$q=mysql_query("UPDATE civitas SET cNip    = '$_POST[nip]',
                                   cNama     = '$_POST[nama]',
                                   cAlamat	 = '$_POST[alamat]',
                                   cTelp	 = '$_POST[telp]', 
                                   cEmail	 = '$_POST[email]',
								   cFoto	 = '$foto',
								   idj		 = '$_POST[jabatan]'
								   WHERE cId = '$_GET[id]'");
  }
  //jika data diupdate ubahfoto=0 dan ubahpassword=1
  elseif((empty($lokasi_file)) && ($_POST['pass']!="")){
	$pass = md5($_POST['pass']);
	$q=mysql_query("UPDATE civitas SET cNip    = '$_POST[nip]',
                                   cNama     = '$_POST[nama]',
                                   cAlamat	 = '$_POST[alamat]',
                                   cTelp	 = '$_POST[telp]', 
                                   cEmail	 = '$_POST[email]',
								   cPass	 = '$pass',
								   idj		 = '$_POST[jabatan]'
								   WHERE cId = '$_GET[id]'");
  }
  //jika data diupdate ubahfoto=1 dan ubahpassword=1
  else{
	$pass = md5($_POST['pass']);
	$data=mysql_fetch_array(mysql_query("SELECT cFoto FROM civitas WHERE cId='$_GET[id]'"));
	if ($data['cFoto']!=''){
		//hapus foto
		unlink("../../foto/$data[cFoto]"); 
	}
	UploadFoto($foto);
	$q=mysql_query("UPDATE civitas SET cNip    = '$_POST[nip]',
                                   cNama     = '$_POST[nama]',
                                   cAlamat	 = '$_POST[alamat]',
                                   cTelp	 = '$_POST[telp]', 
                                   cEmail	 = '$_POST[email]',
								   cPass	 = '$pass',
								   cFoto	 = '$foto',
								   idj		 = '$_POST[jabatan]'
								   WHERE cId = '$_GET[id]'");  
  }
  
  if ($q){
	if($_SESSION[levelcv]!=0){
	   echo "<script>window.alert('Data Terupdate');window.location=('../../home.php?pages=home')</script>";
	}else{
	   echo "<script>window.alert('Data Terupdate');window.location=('../../home.php?pages=civitas')</script>";
	}
  }else{
	  echo "<script>window.alert('Data Gagal Update');self.history.back();</script>";
  }
}
?>
