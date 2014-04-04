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
  
  UploadSKeluar($nama_file_unik);
  $q=mysql_query("INSERT INTO osurat(onmr,
                                   otgl,
                                   opengirim,
                                   okepada, 
                                   operihal,
                                   oket,
								   ofile) 
	                     VALUES('$_POST[nomor]',
                                '$_POST[tgl]',
                                '$_POST[pengirim]',
                                '$_POST[kepada]',
								'$_POST[perihal]',
								'$_POST[ket]',
								'$nama_file_unik')");
  if ($q){
	  echo "<script>window.alert('Data Tersimpan');window.location=('../../home.php?pages=sout')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Tersimpan');self.history.back();</script>";
  }

}
//update smasuk
elseif($act=='edit'){
  $q=mysql_query("UPDATE osurat SET onmr     = '$_POST[nomor]',
                                   otgl	     = '$_POST[tgl]',
                                   opengirim = '$_POST[pengirim]',
                                   okepada	 = '$_POST[kepada]', 
                                   operihal	 = '$_POST[perihal]',
								   oket		 = '$_POST[ket]'
								   WHERE oid = '$_GET[id]'");
  if ($q){
	  echo "<script>window.alert('Data Terupdate');window.location=('../../home.php?pages=sout')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Update');self.history.back();</script>";
  }
}
// hapus smasuk
elseif ($act=='hapus'){
 $data=mysql_fetch_array(mysql_query("SELECT ofile,oid FROM osurat WHERE oid='$_GET[id]'"));
  if ($data['ofile']!=''){
     mysql_query("DELETE FROM osurat WHERE oid='$_GET[id]'");
	 unlink("../../skeluar/$data[ofile]"); 
  }
  else{
     mysql_query("DELETE FROM osurat WHERE oid='$_GET[id]'");
  }
  echo "<script>window.location=('../../home.php?pages=sout')</script>"; 
}
?>
