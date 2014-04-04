<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Surat Keluar</div>
</div>
<div class="block-content collapse in">
<div class="span12">

<?php
if($_GET[act]=="tambah"){
?>
<form method="post" action="include/sout/aksi_sout.php?act=tambah" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Tambah Surat Keluar</legend>
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
				$cv = mysql_query("SELECT cId, cNama FROM civitas WHERE cid<>0");
				while ($dcv=mysql_fetch_array($cv)){
	    	     	echo "<option value='$dcv[cId]'>$dcv[cNama]</option>";
				}
			?>
           	</select>
        </div> 
    </div>
    <div class="control-group">
		<label class="control-label" for="kepada">Kepada</label>
        <div class="controls">
        	<?php
			$sql = mysql_query("SELECT DISTINCT okepada FROM osurat");
			$src="";
			while($r = mysql_fetch_array($sql)) {
				$src = $src."\"".$r[okepada]."\",";
			}
			$isi= substr($src,0,-1);
			?>
        	<input type="text" name="kepada" class="span4" required="required" id="kepada" data-provide="typeahead" data-items="4" data-source='[<?=$isi?>]' autocomplete="off">
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
$e = mysql_fetch_array(mysql_query("SELECT * FROM osurat WHERE oid='$_GET[id]'"));
?>
<form method="post" action="include/sout/aksi_sout.php?act=edit&id=<?=$e[oid];?>" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Edit Surat Masuk</legend>
	<div class="control-group">
		<label class="control-label" for="ns">Nomor Surat</label>
        <div class="controls"><input class="input-medium focused" id="ns" type="text" name="nomor" value="<?=$e[onmr];?>"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="tgl">Tanggal</label>
        <div class="controls"><input class="input-small datepicker" id="tgl" type="text" name="tgl" value="<?=$e[otgl];?>" required="required"></div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="pengirim">Yang Bertanda Tangan</label>
        <div class="controls">
            <select id="pengirim" class="chzn-select" name="pengirim">
            <?php
				$cv = mysql_query("SELECT cId, cNama FROM civitas WHERE cid<>0");
				while ($dcv=mysql_fetch_array($cv)){
					if ($e[okepada]==$cv[cId]){
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
		<label class="control-label" for="kepada">Kepada</label>
        <div class="controls">
        	<?php
			$sql = mysql_query("SELECT DISTINCT okepada FROM osurat");
			$src="";
			while($r = mysql_fetch_array($sql)) {
				$src = $src."\"".$r[okepada]."\",";
			}
			$isi= substr($src,0,-1);
			?>
        	<input type="text" name="kepada" class="span4" id="kepada" required="required" data-provide="typeahead" data-items="4" data-source='[<?=$isi?>]' autocomplete="off" value="<?=$e[okepada];?>">
        </div>
    </div>
    
    <div class="control-group">
		<label class="control-label" for="perihal">Perihal</label>
        <div class="controls"><input class="input-xxlarge focused" id="perihal" type="text" name="perihal" value="<?=$e[operihal];?>"></div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="ket">Keterangan</label>
        <div class="controls">
        	<textarea name="ket" id="ket" class="input-large textarea" style="width: 610px; height: 100px"><?=$e[oket];?></textarea>
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
}else{
?>
<div class="block-content collapse in">
<div class="span12">
	<?php
	if($_SESSION[levelcv]<2){
	?>
	<button class="btn-info btn-large" onclick="window.location.href='?pages=sout&act=tambah'">Tambah Surat Keluar</button>
    <br /><br />
	<?php
	}
	?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tb14">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Tanggal</th>
			<th>Yang Bertanda Tangan</th>
			<th>Kepada</th>
			<th>Perihal</th>
            <th>Lampiran</th>
            <th class='center'>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$smasuk = mysql_query("SELECT a.*, b.cNama FROM osurat a, civitas b WHERE a.opengirim=b.cId");
		while($s = mysql_fetch_array($smasuk)) {
		echo "<tr>
				<td>$s[onmr]</td>
                <td>";echo tgl_indo($s[otgl]);echo"</td>
                <td>$s[cNama]</td>
                <td>$s[okepada]</td>
                <td>$s[operihal]</td>
                <td><a href='skeluar/$s[ofile]' target='_blank'>Lampiran Surat</a></td>";
				echo "
				<td class='center'><a href='include/sout/aksi_sout.php?act=hapus&id=$s[oid]' onClick=\"return confirm('Yakin ingin menghapus??')\"><i class='icon-trash'></i></a> 
				<a href='?pages=sout&act=edit&id=$s[oid]'><i class='icon-edit'></i>
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