<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Surat Masuk Eksternal</div>
</div>
<div class="block-content collapse in">
<div class="span12">
<?php
if($_GET[act]=="detail"){
$e = mysql_fetch_array(mysql_query("SELECT a.*, b.cNama FROM isurat a,civitas b WHERE a.ikepada=b.cId AND a.ikepada='$_SESSION[cv]' AND a.iid='$_GET[id]'"));

?>
<strong>
<legend>Detail Surat</legend>
<table width="100%">
	<tr><td width="24%">Nomor Surat</td><td>: <?=$e[inmr];?></td></tr>
    <tr><td>Tanggal Surat</td><td>: <?=tgl_indo($e[itgl]);?></td></tr>
    <tr><td>Perihal</td><td>: <?=$e[iperihal];?></td></tr>
    <tr>
		<td>Pengirim</td>
		<td>: 
			<strong><?=$e[ipengirim];?></strong>
		</td>
	</tr>
    <tr><td>Ket</td><td>: <?=$e[iket];?></td></tr>
	<tr><td colspan="2"><br><a href="smasuk/<?=$e[ifile];?>">* Klik Untuk Lihat "Lampiran" Surat</a></td></tr>
</table>
</strong>
<br><br>
<?php	
mysql_query("UPDATE isurat SET istatus='Y' WHERE iid='$_GET[id]' AND ikepada='$_SESSION[cv]'");
}else{
?>
<div class="block-content collapse in">
<div class="span12">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tb14">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Tanggal</th>
			<th>Pengirim</th>
			<th>Perihal</th>
            <th>Lampiran</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$smasuk = mysql_query("SELECT a.*,b.cNama FROM isurat a LEFT JOIN civitas b ON a.ikepada=b.cId WHERE a.ikepada='$_SESSION[cv]'");
		while($s = mysql_fetch_array($smasuk)) {
		if ($s[istatus]=='N'){
			echo "<tr class=success>";
		}else{
			echo "<tr>";
		}
		echo	"<td><a href='home.php?pages=usrte&act=detail&id=$s[iid]' title=DetailSurat>$s[inmr]</a></td>
                <td>";echo tgl_indo($s[itgl]);echo"</td>
                <td>$s[ipengirim]</td>
                <td>$s[iperihal]</td>
                <td><a href='smasuk/$s[ifile]' target='_blank'>Lampiran Surat</a></td>
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