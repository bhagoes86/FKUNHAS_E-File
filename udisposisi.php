<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Disposisi</div>
</div>
<div class="block-content collapse in">
<div class="span12">
<?php
if($_GET[act]=="detail"){
$tglhrini = date("Y-m-d");
$e = mysql_fetch_array(mysql_query("SELECT a.*,b.*,c.cNama,c.cFoto,d.* FROM disposisi a 
									LEFT JOIN pdis b ON a.iid=b.iid 
									LEFT JOIN civitas c ON b.pid=c.cId 
									LEFT JOIN isurat d ON a.iid=d.iid
									WHERE b.cId='$_SESSION[cv]' AND a.iid=$_GET[id]"));

$sft = Array("A"=>"Rutin","B"=>"Penting","C"=>"Rahasia");
$bdg = Array("A"=>"success","B"=>"warning","C"=>"important");
$sifat = "<span class='label label-".$bdg[$e[dSifat]]."'>".$sft[$e[dSifat]]."</span>";
$tglS=$e[dTglS];
if ($e[dTglS]=="0000-00-00"){
	$tglS="-";
}

if ($e[psACC]=='N'){
	$status = "Belum ACC";
}else{
	$status = "Telah ACC";
}
		
if ($e[psTglbaca]=="0000-00-00"){
	$vion = "-";
}else{
	$vion = date("Y-m-d");
}

if ($e[cFoto]==""){
	$foto = "foto/none.jpg";
}else{
	$foto = "foto/$e[cFoto]";
}

?>
<strong>
<legend>Detail Disposisi</legend>
<table width="100%">
	<tr>
		<td width="24%">Nomor Agenda</td><td>: <?=$e[dNoagenda];?></td>
		<td rowspan="9">
			
		</td>
	</tr>
    <tr><td>Tanggal</td><td>: <?=tgl_indo($e[ptgl]);?></td></tr>
	<tr><td>Tanggal Selesai</td><td>: <?=tgl_indo($tglS);?></td></tr>
    <tr>
		<td>Pendisposisi</td>
		<td>: 
			<img src="<?=$foto;?>" style="width: 60px; height: 60px;" class="tooltip-right" data-original-title="<?=$e[cNama];?>">
			<?=$e[cNama];?>
		</td>
	</tr>
	<tr><td>Instruksi/Informasi</td><td>: <?=$e[dInstruksi];?></td></tr>
	<tr><td>Sifat</td><td>: <?=$sifat;?></td></tr>
	<tr><td>Status</td><td>: <span class='label label-warning'><?=$status;?></span></td></tr>
    <tr><td>Surat Masuk Dari</td><td>: <strong><?=$e[ipengirim];?></strong></td></tr>
    <tr><td colspan="2"><br><a href="smasuk/<?=$e[ifile];?>">* Klik Untuk Lihat "Lampiran" Surat</a></td></tr>
</table>
</strong>
<br>
<?php
if ($e[psACC]=="N"){
	echo "<a class='btn btn-info' href=?pages=udis&act=acc&pdid=$e[pdid]&iid=$e[iid]>ACC</a><br><br>";
}elseif(($e[psACC]=="Y") && ($_SESSION[levelcv]>=2) && ($_SESSION[levelcv]<=6)){
	$qcd =mysql_query("SELECT * FROM pdis WHERE iid='$_GET[id]' AND pId<>1");
	$cd = mysql_fetch_array($qcd);
	$ada = mysql_num_rows($qcd);
		
					
	$cv = mysql_query("SELECT a.cId, a.cNama FROM civitas a 
					   LEFT JOIN jabatan b ON b.idj=a.idj
					   WHERE a.cId<>'$_SESSION[cId]' AND b.idj>5");
	?>
	
	<form method="post" action="?pages=udis&act=fwd" enctype="multipart/form-data" class="form-horizontal">
	<div class="control-group">
		<input type="hidden" name="iid" value="<?=$e[iid];?>">
		<input type="hidden" name="pdid" value="<?=$a[pdid];?>">
		<label class="control-label" for="kepada"><strong>Teruskan Kepada</strong></label>
		<div class="controls">
			<select id="kepada" class="chzn-select" name="kepada">
			<?php
				if ($ada==0){
					echo "<option>Pilih Civitas</option>";
				}
				while ($dcv=mysql_fetch_array($cv)){
					if ($dcv[cId]==$cd[cId]){
						echo "<option value=$dcv[cId] selected>$dcv[cNama]</option>";
					}else{
						echo "<option value=$dcv[cId]>$dcv[cNama]</option>";
					}
				}
			?>
			</select>
			<span class="help-inline">* Abaikan Jika Tidak Diteruskan</span>
		</div> 
	</div>
	<div class="control-group">
        <div class="controls">
        <button class="btn btn-primary">Simpan</button> 
        </div>
    </div>
	</form>
<?php	
}
mysql_query("UPDATE pdis SET psTglbaca='$tglhrini' WHERE pdid='$e[pdid]' AND cId='$_SESSION[cv]'");
?>
<br><br><br><br><br><br><br>
<?php
}elseif($_GET[act]=="acc"){
	mysql_query("UPDATE pdis SET psACC='Y' WHERE pdid='$_GET[pdid]' AND cId='$_SESSION[cv]'");
	echo "<script>window.location=('home.php?pages=udis&act=detail&id=$_GET[iid]');</script>";
}elseif($_GET[act]=="fwd"){
	$ptgl = date("Y-m-d");
	if ($_POST[pdid]==""){
		mysql_query("INSERT INTO pdis (ptgl,pId,cId,psACC,iid) 
					VALUES ('$ptgl','$_SESSION[cv]','$_POST[kepada]','N','$_POST[iid]')");
	}else{
		mysql_query("UPDATE pdis SET ptgl='$ptgl',
									 pId='$_SESSION[cv]',
									 cId='$_POST[kepada]',
									 psACC='N',
									 psTglbaca='0000-00-00',
									 iid='$_POST[iid]'
								 WHERE pdid='$_POST[pdid]'");
	}
	echo "<script>window.location=('home.php?pages=udis');</script>";
}else{
?>
<div class="block-content collapse in">
<div class="span12">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tb14">
	<thead>
		<tr>
			<th>Status</th>
			<th>Nomor Agenda</th>
			<th>Tanggal</th>
			<th>Tanggal Selesai</th>
			<th>Pendisposisi</th>
			<th>Sifat</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$dsp = mysql_query("SELECT a.*,b.*,c.cNama FROM disposisi a LEFT JOIN pdis b ON a.iid=b.iid LEFT JOIN civitas c ON b.pid=c.cId WHERE b.cId='$_SESSION[cv]'");
		while($s = mysql_fetch_array($dsp)) {
			$sft = Array("A"=>"Rutin","B"=>"Penting","C"=>"Rahasia");
			$bdg = Array("A"=>"success","B"=>"warning","C"=>"important");
			$sifat = "<span class='label label-".$bdg[$s[dSifat]]."'>".$sft[$s[dSifat]]."</span>";
			$tglS=$s[dTglS];
			if ($s[dTglS]=="0000-00-00"){
				$tglS="-";
			}
			
			if ($s[psACC]=='N'){
				$st = "<strong>Belum ACC</strong>";
			}else{
				$st = "Telah ACC";
			}
		
			if ($s[psTglbaca]=="0000-00-00"){
				echo "<tr class=success>";
			}else{
				echo "<tr>";
			}
			echo	"<td>$st</td>
					 <td>
						<a href='?pages=udis&act=detail&id=$s[iid]' title='Detail'>$s[dNoagenda]</a>
					</td>
					<td>";echo tgl_indo($s[ptgl]);echo"</td>
					<td>";echo tgl_indo($tglS);echo"</td>
					<td>$s[cNama]</td>
					<td>$sifat</td>
			  </tr>";	
		}
	?>
	</tbody>
	</table>
	<br><br>
	<span class="label label-info">
	Baris Berwarna HIJAU = <strong>BELUM TERBACA</strong><br>
	Tampilkan Detail (Klik No Agenda) Untuk Konfirmasi Telah Dibaca
	</span>
</div>
</div>
<?php
}
?>
</div><!--/span12-->
</div><!--/block-content-->