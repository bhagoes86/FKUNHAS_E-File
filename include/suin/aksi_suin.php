<?php
require_once "../cek_sesi.php";
session_start();
include "../../config/koneksi.php";
include "../../config/fungsi_thumb.php";
$act=$_GET[act];

// Input Smasuk
if ($act=='tambah'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  UploadSMasuk($nama_file_unik);
  $q=mysql_query("INSERT INTO isurat(inmr,
                                   itgl,
                                   ipengirim,
                                   ikepada, 
                                   iperihal,
                                   iket,
								   ifile,
								   istatus) 
	                     VALUES('$_POST[nomor]',
                                '$_POST[tgl]',
                                '$_POST[pengirim]',
                                '$_POST[kepada]',
								'$_POST[perihal]',
								'$_POST[ket]',
								'$nama_file_unik',
								'N')");
  if ($q){
	  echo "<script>window.alert('Data Tersimpan');window.location=('../../home.php?pages=suin')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Tersimpan');self.history.back();</script>";
  }

}
//update smasuk
elseif($act=='edit'){
  $q=mysql_query("UPDATE isurat SET inmr     = '$_POST[nomor]',
                                   itgl	     = '$_POST[tgl]',
                                   ipengirim = '$_POST[pengirim]',
                                   ikepada	 = '$_POST[kepada]', 
                                   iperihal	 = '$_POST[perihal]',
								   iket		 = '$_POST[ket]'
								   WHERE iid = '$_GET[id]'");
  if ($q){
	  echo "<script>window.alert('Data Terupdate');window.location=('../../home.php?pages=suin')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Update');self.history.back();</script>";
  }
}
// hapus smasuk
elseif ($act=='hapus'){
 $data=mysql_fetch_array(mysql_query("SELECT ifile,iid FROM isurat WHERE iid='$_GET[id]'"));
  if ($data['ifile']!=''){
    //hapus juga data dari tabel lain yg berhubungan dengan surat masuk
	 unlink("../../smasuk/$data[ifile]"); 
  }
  
  mysql_query("DELETE FROM isurat WHERE iid='$_GET[id]'");
  mysql_query("DELETE FROM disposisi WHERE iid='$_GET[id]'");
  mysql_query("DELETE FROM pdis WHERE iid='$_GET[id]'");
  mysql_query("DELETE FROM isurat WHERE iid='$_GET[id]'");
  
  echo "<script>window.location=('../../home.php?pages=suin')</script>"; 
}

//batas dari aksi_disposisi.php
//tambah disp
elseif ($act=='tambahdisp'){
  $q1=mysql_query("INSERT INTO disposisi(dNoagenda,
                                   dTglM,
                                   dTglS,
                                   dPendisposisi, 
                                   dInstruksi,
                                   dSifat,
								   iid) 
	                     VALUES('$_POST[noagenda]',
                                '$_POST[tglm]',
                                '$_POST[tgls]',
								'$_POST[pendisposisi]',
                                '$_POST[isi]',
								'$_POST[sifat]',
								'$_GET[iid]')");
  $pdis = $_POST["pdis"];
  foreach ($pdis as $x=>$cid)
  {
	$q2=mysql_query("INSERT INTO pdis(ptgl,pid,cId,iid,psACC) VALUES ('$_POST[tglm]','$_POST[pendisposisi]','$cid','$_GET[iid]','N')"); 
  }
  
  if ($q1&&$q2){
	  echo "<script>window.alert('Data Tersimpan');window.location=('../../home.php?pages=suin')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Tersimpan');self.history.back();</script>";
  }
//edit disp
}
elseif($act=='editdisp'){
  $q1=mysql_query("UPDATE disposisi SET dNoagenda	= '$_POST[noagenda]',
                                   dTglM	     = '$_POST[tglm]',
                                   dTglS		 = '$_POST[tgls]',
                                   dPendisposisi = '$_POST[pendisposisi]', 
                                   dInstruksi	 = '$_POST[isi]',
								   dSifat		 = '$_POST[sifat]'
								   WHERE iid 	 = '$_GET[iid]'");
  //hapus isi pdis yang sebelumnya
  mysql_query("DELETE FROM pdis WHERE iid='$_GET[iid]' AND pId='$_POST[pendisposisi]'");
  $pdis = $_POST["pdis"];
  foreach ($pdis as $x=>$cid)
  {
	$q2=mysql_query("INSERT INTO pdis(ptgl,pid,cId,iid,psACC) VALUES ('$_POST[tglm]','$_POST[pendisposisi]','$cid','$_GET[iid]','N')"); 
  }
  if ($q1&&$q2){
	  echo "<script>window.alert('Data Terupdate');window.location=('../../home.php?pages=suin')</script>";
  }else{
	  echo "<script>window.alert('Data Gagal Update');self.history.back();</script>";
  }
}
//batas dari aksi_disposisi.php
?>
