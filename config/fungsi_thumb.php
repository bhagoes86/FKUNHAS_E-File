<?php

function UploadFoto($fupload_name){

  //direktori gambar

  $vdir_upload = "../../foto/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];


  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }
  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);


  //Hapus gambar di memori komputer
  imagedestroy($im_src);

}

function UploadRegis($fupload_name){

  //direktori gambar

  $vdir_upload = "foto/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];



  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }

  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

  $dst_width = 286;

  $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

  $im = imagecreatetruecolor($dst_width,$dst_height);

  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

  if ($_FILES["fupload"]["type"]=="image/jpeg" ){

      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/png" ){

      imagepng($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){

      imagegif($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){

      imagewbmp($im,$vdir_upload . "small_" . $fupload_name);

      }

  

  //Hapus gambar di memori komputer

  imagedestroy($im_src);

  imagedestroy($im);

}



function UploadAgenda($fupload_name){

  //direktori gambar

  $vdir_upload = "../agenda/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];



  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }

  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

  $dst_width = 94;

  $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

  $im = imagecreatetruecolor($dst_width,$dst_height);

  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

  if ($_FILES["fupload"]["type"]=="image/jpeg" ){

      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/png" ){

      imagepng($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){

      imagegif($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){

      imagewbmp($im,$vdir_upload . "small_" . $fupload_name);

      }

  

  //Hapus gambar di memori komputer

  imagedestroy($im_src);

  imagedestroy($im);

}



function UploadAgendaAdmin($fupload_name){

  //direktori gambar

  $vdir_upload = "../../agenda/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];



  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }

  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

  $dst_width = 94;

  $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

  $im = imagecreatetruecolor($dst_width,$dst_height);

  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

  if ($_FILES["fupload"]["type"]=="image/jpeg" ){

      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/png" ){

      imagepng($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){

      imagegif($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){

      imagewbmp($im,$vdir_upload . "small_" . $fupload_name);

      }

  

  //Hapus gambar di memori komputer

  imagedestroy($im_src);

  imagedestroy($im);

}



function UploadNews($fupload_name){

  //direktori gambar

  $vdir_upload = "../img_news/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];



  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }

  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

  $dst_width = 150;

  $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

  $im = imagecreatetruecolor($dst_width,$dst_height);

  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

  if ($_FILES["fupload"]["type"]=="image/jpeg" ){

      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/png" ){

      imagepng($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){

      imagegif($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){

      imagewbmp($im,$vdir_upload . "small_" . $fupload_name);

      }

  

  //Hapus gambar di memori komputer

  imagedestroy($im_src);

  imagedestroy($im);

}



function uploadCalgot($fupload_name){

  //direktori gambar

  $vdir_upload = "../Pendaftaran/foto_calgot/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];



  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }

  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

  $dst_width = 100;

  $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

  $im = imagecreatetruecolor($dst_width,$dst_height);

  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

  if ($_FILES["fupload"]["type"]=="image/jpeg" ){

      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/png" ){

      imagepng($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){

      imagegif($im,$vdir_upload . "small_" . $fupload_name);

      }

	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){

      imagewbmp($im,$vdir_upload . "small_" . $fupload_name);

      }

  

  //Hapus gambar di memori komputer

  imagedestroy($im_src);

  imagedestroy($im);

}



function uploadAlbum($fupload_name){

  //direktori gambar

  $vdir_upload = "../img_album/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];



  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }

  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

  $dst_width = 120;

  $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

  $im = imagecreatetruecolor($dst_width,$dst_height);

  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

  if ($_FILES["fupload"]["type"]=="image/jpeg" ){

      imagejpeg($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/png" ){

      imagepng($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){

      imagegif($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){

      imagewbmp($im,$vdir_upload . "kecil_" . $fupload_name);

      }

  

  //Hapus gambar di memori komputer

  imagedestroy($im_src);

  imagedestroy($im);

}

function uploadGaleri($fupload_name){

  //direktori gambar

  $vdir_upload = "../img_galeri/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];



  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }

  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

  $dst_width = 140;

  $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

  $im = imagecreatetruecolor($dst_width,$dst_height);

  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

  if ($_FILES["fupload"]["type"]=="image/jpeg" ){

      imagejpeg($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/png" ){

      imagepng($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){

      imagegif($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){

      imagewbmp($im,$vdir_upload . "kecil_" . $fupload_name);

      }

  

  //Hapus gambar di memori komputer

  imagedestroy($im_src);

  imagedestroy($im);

}

function uploadHeader($fupload_name){

  //direktori gambar

  $vdir_upload = "../header/data1/images/";

  $vfile_upload = $vdir_upload . $fupload_name;

  $tipe_file   = $_FILES['fupload']['type'];



  //Simpan gambar dalam ukuran sebenarnya

  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli  

  if ($tipe_file=="image/jpeg" ){

      $im_src = imagecreatefromjpeg($vfile_upload);

      }elseif ($tipe_file=="image/png" ){

      $im_src = imagecreatefrompng($vfile_upload);

      }elseif ($tipe_file=="image/gif" ){

      $im_src = imagecreatefromgif($vfile_upload);

      }elseif ($tipe_file=="image/wbmp" ){

      $im_src = imagecreatefromwbmp($vfile_upload);

    }

  $src_width = imageSX($im_src);

  $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

  $dst_width = 140;

  $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

  $im = imagecreatetruecolor($dst_width,$dst_height);

  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

  if ($_FILES["fupload"]["type"]=="image/jpeg" ){

      imagejpeg($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/png" ){

      imagepng($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){

      imagegif($im,$vdir_upload . "kecil_" . $fupload_name);

      }

	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){

      imagewbmp($im,$vdir_upload . "kecil_" . $fupload_name);

      }

  

  //Hapus gambar di memori komputer

  imagedestroy($im_src);

  imagedestroy($im);

}
function UploadSMasuk($fupload_name){
  //direktori file
  $vdir_upload = "../../smasuk/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan file
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
function UploadSKeluar($fupload_name){
  //direktori file
  $vdir_upload = "../../skeluar/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan file
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

function UploadSinter($fupload_name){
  //direktori file
  $vdir_upload = "../../sinternal/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan file
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}


?>

