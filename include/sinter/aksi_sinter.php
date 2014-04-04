<?php
require_once "../cek_sesi.php";
session_start();
include "../../config/koneksi.php";
include "../../config/fungsi_thumb.php";
$act=$_GET[act];

// Input
if ($act=='tambah'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  UploadSinter($nama_file_unik);
  $q=mysql_query("INSERT INTO sinter(sinmr,
                                   sitgl,
                                   sipengirim,
                                   siperihal,
                                   siket,
								   sifile) 
	                     VALUES('$_POST[nomor]',
                                '$_POST[tgl]',
                                '$_POST[pengirim]',
								'$_POST[perihal]',
								'$_POST[ket]',
								'$nama_file_unik')");
  if ($q){
	  echo "<script>window.alert('Data Tersimpan');window.location=('../../home.php?pages=sinter')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Tersimpan');self.history.back();</script>";
  }

}elseif($act=='edit'){
  $q=mysql_query("UPDATE sinter SET sinmr   	 = '$_POST[nomor]',
                                   sitgl 	  = '$_POST[tgl]',
                                   sipengirim = '$_POST[pengirim]',
                                   siperihal = '$_POST[perihal]',
								   siket	 = '$_POST[ket]'
								   WHERE siid = '$_GET[id]'");
  if ($q){
	  echo "<script>window.alert('Data Terupdate');window.location=('../../home.php?pages=sinter')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Update');self.history.back();</script>";
  }
}
// hapus smasuk
elseif ($act=='hapus'){
 $data=mysql_fetch_array(mysql_query("SELECT sifile,siid FROM sinter WHERE siid='$_GET[id]'"));
  if ($data['sifile']!=''){
     mysql_query("DELETE FROM sinter WHERE siid='$_GET[id]'");
	 mysql_query("DELETE FROM psin WHERE siid='$_GET[id]'");
	 unlink("../../sinternal/$data[sifile]"); 
  }
  else{
     mysql_query("DELETE FROM sinter WHERE siid='$_GET[id]'");
 	 mysql_query("DELETE FROM psin WHERE siid='$_GET[id]'");
  }
  echo "<script>window.location=('../../home.php?pages=sinter')</script>"; 
}
//tambah penerima
elseif ($act=='lp'){
  mysql_query("DELETE FROM psin WHERE siid='$_GET[id]'");	
  $psin = $_POST["psin"];
  foreach ($psin as $x=>$cid)
  {
	$q=mysql_query("INSERT INTO psin(cId,siid) VALUES ('$cid','$_GET[id]')");  
  }
  
  if ($q){
	  echo "<script>window.location=('../../home.php?pages=sinter')</script>";
  }else{
	  echo "<script>self.history.back();</script>";
  }
}
?>
