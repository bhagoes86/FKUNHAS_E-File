<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Surat Internal</div>
</div>
<div class="block-content collapse in">
<div class="span12">
<?php
if($_GET[act]=="tambah"){
?>
<form method="post" action="include/sinter/aksi_sinter.php?act=tambah" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Tambah Surat</legend>
	<div class="control-group">
		<label class="control-label" for="ns">Nomor Surat</label>
        <div class="controls"><input class="input-medium focused" id="ns" type="text" name="nomor"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="tgl">Tanggal</label>
        <div class="controls"><input class="input-small datepicker" id="tgl" type="text" name="tgl" required="required"></div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="pengirim">Yang Bertanda Tangan</label>
        <div class="controls">
            <select id="pengirim" class="chzn-select" name="pengirim">
            	<option>Pilih Civitas</option>
            	<?php
					$cv = mysql_query("SELECT cId, cNama FROM civitas");
					while ($dcv=mysql_fetch_array($cv)){
	    		     	echo "<option value='$dcv[cId]'>$dcv[cNama]</option>";
					}
				?>
           	</select>
        </div> 
    </div>
    
    <div class="control-group">
		<label class="control-label" for="perihal">Perihal</label>
        <div class="controls"><input class="input-xxlarge focused" id="perihal" type="text" name="perihal"></div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="ket">Keterangan</label>
        <div class="controls">
        	<textarea name="ket" id="ket" class="input-large textarea" style="width: 610px; height: 100px"></textarea>
        </div>
    </div>
   	<div class="control-group">
    	<label class="control-label" for="fileInput">Lampiran</label>
        <div class="controls">
        	<input class="input-file uniform_on" id="fileInput" type="file" name="fupload">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
        <button class="btn btn-primary">Simpan</button> 
        <button type="reset" class="btn" onclick=self.history.back()>Batal</button>
        </div>
    </div>
</fieldset>
</form>
<?php
}elseif($_GET[act]=="edit"){
$e = mysql_fetch_array(mysql_query("SELECT * FROM sinter WHERE siid='$_GET[id]'"));
?>
<form method="post" action="include/sinter/aksi_sinter.php?act=edit&id=<?=$e[siid];?>" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Edit Surat Masuk</legend>
	<div class="control-group">
		<label class="control-label" for="ns">Nomor Surat</label>
        <div class="controls"><input class="input-medium focused" id="ns" type="text" name="nomor" value="<?=$e[sinmr];?>"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="tgl">Tanggal</label>
        <div class="controls"><input class="input-small datepicker" id="tgl" type="text" name="tgl" value="<?=$e[sitgl];?>" required="required"></div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="pengirim">Yang Bertanda Tangan</label>
        <div class="controls">
            <select id="pengirim" class="chzn-select" name="pengirim">
            <?php
				$cv = mysql_query("SELECT cId, cNama FROM civitas");
				while ($dcv=mysql_fetch_array($cv)){
					if ($e[sipengirim]==$cv[cId]){
						echo "<option value=$dcv[cId] selected>$dcv[cNama]</option>";
					}else{
						echo "<option value=$dcv[cId]>$dcv[cNama]</option>";
					}
				}
			?>
           	</select>
        </div> 
    </div>
    <div class="control-group">
		<label class="control-label" for="perihal">Perihal</label>
        <div class="controls"><input class="input-xxlarge focused" id="perihal" type="text" name="perihal" value="<?=$e[siperihal];?>"></div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="ket">Keterangan</label>
        <div class="controls">
        	<textarea name="ket" id="ket" class="input-large textarea" style="width: 610px; height: 100px"><?=$e[siket];?></textarea>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
        <button class="btn btn-primary">Simpan</button> 
        <button type="reset" class="btn" onclick=self.history.back()>Batal</button>
        </div>
    </div>
</fieldset>
</form>
<?php
}elseif($_GET[act]=="lp"){
?>
<form method="post" action="include/sinter/aksi_sinter.php?act=lp&id=<?=$_GET[id];?>" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>List Penerima Surat Internal</legend>
	<div class="control-group">
    	<label class="control-label" for="psin">Penerima Surat</label>
        <div class="controls">
        	<select multiple="multiple" id="psin" name="psin[]" class="chzn-select span8">
            	<?php
				$cv = mysql_query("SELECT cId, cNama FROM civitas WHERE cId IN(SELECT cId FROM psin WHERE siid='$_GET[id]')");
				while ($dcv=mysql_fetch_array($cv)){
	    	     	echo "<option value='$dcv[cId]' selected>$dcv[cNama]</option>";
				}
				$cv = mysql_query("SELECT cId, cNama FROM civitas WHERE cId NOT IN(SELECT cId FROM psin WHERE siid='$_GET[id]')");
				while ($dcv=mysql_fetch_array($cv)){
	    	     	echo "<option value='$dcv[cId]'>$dcv[cNama]</option>";
				}
				?>                             
            </select>
        </div> 
    </div>
    <div class="control-group">
        <div class="controls">
        <button class="btn btn-primary">Simpan</button> 
        <button type="reset" class="btn" onclick=self.history.back()>Batal</button>
        </div>
    </div>
    <br><br><br><br><br><br>
</fieldset>
</form>
<?php
}elseif($_GET[act]=="detail"){
	$e = mysql_fetch_array(mysql_query("SELECT a.*, b.cNama FROM sinter a,civitas b WHERE a.sipengirim=b.cId AND a.siid='$_GET[id]'"));
?>
<strong>
<legend>Detail Surat Internal</legend>
<table width="100%">
	<tr><td width="24%">Nomor Surat</td><td>: <?=$e[sinmr];?></td></tr>
    <tr><td>Tanggal Surat</td><td>: <?=tgl_indo($e[sitgl]);?></td></tr>
    <tr><td>Perihal</td><td>: <?=$e[siperihal];?></td></tr>
    <tr><td>Yang Bertanda Tangan</td><td>: <strong><?=$e[cNama];?></strong></td></tr>
    <tr><td>Ket</td><td>: <?=$e[siket];?></td></tr>
</table>
</strong>
<br />
<legend>Kepada :</legend>
<table class="table table-bordered table-striped">
<thead>
	<td width="30%">NIP</td>
    <td>Nama</td>
</thead>
<?php
	$psn = mysql_query("SELECT a.cNip,a.cNama,a.cFoto FROM civitas a
						LEFT JOIN psin b ON b.cId=a.cId
						WHERE b.siid='$_GET[id]'");
	while ($t=mysql_fetch_array($psn)){
		$j++;
		if ($t[cFoto]==""){
			$foto = "foto/none.jpg";
		}else{
			$foto = "foto/$t[cFoto]";
		}
		
		echo "<tr>
				<td>$t[cNip]</td>
				<td>
					<img src='$foto' style='width: 30px; height: 30px;' class='tooltip-right' data-original-title='$t[cNama]'>
					$t[cNama]
				</td>
			 </tr>";
	}
?>
</table>
<br />
<big>Jumlah Penerima : <?=$j;?> Orang</big>
<?php	
}else{
?>
<div class="block-content collapse in">
<div class="span12">
	<?php
	if($_SESSION[levelcv]<2){
	?>
	<button class="btn-info btn-large" onclick="window.location.href='?pages=sinter&act=tambah'">Tambah Surat</button><br /><br />
	<?php
	}
	?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tb14">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Tanggal</th>
			<th>Yang Bertanda Tangan</th>
			<th>Perihal</th>
            <th>Penerima</th>
            <th>Lampiran</th>
            <th class='center'>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$smasuk = mysql_query("SELECT a.*, b.cNama FROM sinter a, civitas b WHERE a.sipengirim=b.cId");
		while($s = mysql_fetch_array($smasuk)) {
		echo "<tr>
				<td><a href='home.php?pages=sinter&act=detail&id=$s[siid]' title=DetailSurat>$s[sinmr]</a></td>
                <td>";echo tgl_indo($s[sitgl]);echo"</td>
                <td>$s[cNama]</td>
                <td>$s[siperihal]</td>
				<td><a href='?pages=sinter&act=lp&id=$s[siid]' class='btn btn-info'>List Penerima</a></td>
                <td><a href='sinternal/$s[sifile]' target='_blank'>Lampiran Surat</a></td>";
				echo "
				<td class='center'><a href='include/sinter/aksi_sinter.php?act=hapus&id=$s[siid]' onClick=\"return confirm('Yakin ingin menghapus??')\"><i class='icon-trash'></i></a> 
				<a href='?pages=sinter&act=edit&id=$s[siid]'><i class='icon-edit'></i>
				</td>
				</tr>";	
		}
	?>
	</tbody>
</table>
</div>
</div>
<?php
}
?>
</div><!--/span12-->
</div><!--/block-content-->