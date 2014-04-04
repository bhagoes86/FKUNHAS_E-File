<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Surat Masuk Internal</div>
</div>
<div class="block-content collapse in">
<div class="span12">
<?php
if($_GET[act]=="detail"){
$e = mysql_fetch_array(mysql_query("SELECT a.*, b.cNama FROM sinter a,civitas b WHERE a.sipengirim=b.cId AND a.siid='$_GET[id]'"));

if ($e[cFoto]==""){
	$foto = "foto/none.jpg";
}else{
	$foto = "foto/$e[cFoto]";
}
?>
<strong>
<legend>Detail Surat</legend>
<table width="100%">
	<tr><td width="24%">Nomor Surat</td><td>: <?=$e[sinmr];?></td></tr>
    <tr><td>Tanggal Surat</td><td>: <?=tgl_indo($e[sitgl]);?></td></tr>
    <tr><td>Perihal</td><td>: <?=$e[siperihal];?></td></tr>
    <tr>
		<td>Yang Bertanda Tangan</td>
		<td>: <img src="<?=$foto;?>" style="width: 60px; height: 60px;" class="tooltip-right" data-original-title="<?=$e[cNama];?>">
			<strong><?=$e[cNama];?></strong>
		</td>
	</tr>
    <tr><td>Ket</td><td>: <?=$e[siket];?></td></tr>
	<tr><td colspan="2"><br><a href="sinternal/<?=$e[sifile];?>">* Klik Untuk Lihat "Lampiran" Surat</a></td></tr>
</table>
</strong>
<br><br>
<?php	
mysql_query("UPDATE psin SET sistatus='Y' WHERE siid='$_GET[id]' AND cId='$_SESSION[cv]'");
}else{
?>
<div class="block-content collapse in">
<div class="span12">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tb14">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Tanggal</th>
			<th>Yang Bertanda Tangan</th>
			<th>Perihal</th>
            <th>Lampiran</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$smasuk = mysql_query("SELECT a.*,b.*,c.cNama FROM sinter a LEFT JOIN psin b ON a.siid=b.siid LEFT JOIN civitas c ON a.sipengirim=c.cId WHERE b.cId='$_SESSION[cv]'");
		while($s = mysql_fetch_array($smasuk)) {
		if ($s[sistatus]=='N'){
			echo "<tr class=success>";
		}else{
			echo "<tr>";
		}
		echo	"<td><a href='home.php?pages=usrt&act=detail&id=$s[siid]' title=DetailSurat>$s[sinmr]</a></td>
                <td>";echo tgl_indo($s[sitgl]);echo"</td>
                <td>$s[cNama]</td>
                <td>$s[siperihal]</td>
                <td><a href='sinternal/$s[sifile]' target='_blank'>Lampiran Surat</a></td>
			  </tr>";	
		}
	?>
	</tbody>
	</table>
	<br><br>
	<span class="label label-info">
	Baris Berwarna HIJAU = <strong>BELUM TERBACA</strong><br>
	Tampilkan Detail (Klik No Surat) Untuk Konfirmasi Telah Dibaca
	</span>
</div>
</div>
<?php
}
?>
</div><!--/span12-->
</div><!--/block-content-->