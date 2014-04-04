<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Civitas</div>
</div>
<div class="block-content collapse in">
<div class="span12">

<?php
if($_GET[act]=="tambah"){
?>
<form method="post" action="include/civitas/aksi_civitas.php?act=tambah" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Tambah Civitas</legend>
	<div class="control-group">
		<label class="control-label" for="nip">NIP</label>
        <div class="controls"><input class="input-medium focused" id="nip" type="text" name="nip" required="required"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="nama">Nama</label>
        <div class="controls"><input class="input-xlarge focused" id="nama" type="text" name="nama" required="required"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="alamat">Alamat</label>
        <div class="controls"><input class="input-xxlarge focused" id="alamat" type="text" name="alamat" required="required"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="telp">Telepon</label>
        <div class="controls"><input class="input-xlarge focused" id="telp" type="text" name="telp"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="email">Email</label>
        <div class="controls"><input class="input-xxlarge focused" id="email" type="email" name="email"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="jabatan">Jabatan</label>
        <div class="controls">
        	<select name="jabatan" class="span3">
                <?php
					$jabatan = mysql_query("SELECT * FROM jabatan");
					while($j = mysql_fetch_array($jabatan)){
						if ($j[jabatan]=="Staff"){
							echo"<option value='$j[idj]' selected>$j[jabatan]</option>";	
						}else{
							echo"<option value='$j[idj]'>$j[jabatan]</option>";
						}
					}
				?>
            </select>
         </div>
    </div>
	
	<div class="control-group">
		<label class="control-label">Foto</label>
		<div class="controls"><input class="input-file uniform_on" id="fileInput" type="file" name="fupload"></div>
    </div>
	
    <div class="control-group">
		<label class="control-label" for="pass">Password</label>
        <div class="controls"><input class="input-medium focused" id="pass" type="password" name="pass" required="required"></div>
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
$e = mysql_fetch_array(mysql_query("SELECT * FROM civitas WHERE cId='$_GET[id]'"));
if ($e[cFoto]==""){
	$foto = "foto/none.jpg";
}else{
	$foto = "foto/$e[cFoto]";
}
?>
<form method="post" action="include/civitas/aksi_civitas.php?act=edit&id=<?=$e[cId];?>" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Edit Civitas</legend>
	<div class="control-group">
		<div class="controls">
		<img src="<?=$foto;?>" style="width: 120px; height: 120px;" class="tooltip-right" data-original-title="<?=$e[cNama];?>">
		<input class="input-file uniform_on" id="fileInput" type="file" name="fupload">
		<?php
		if ($e[cFoto]!=""){
		echo "<span class='help-inline'>*Abaikan bila foto tidak diganti</span>";
		}
		?>
		</div>
    </div>
	<div class="control-group">
		<label class="control-label" for="nip">NIP</label>
        <div class="controls"><input class="input-medium focused" id="nip" type="text" name="nip" required="required" value="<?=$e[cNip];?>"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="nama">Nama</label>
        <div class="controls"><input class="input-xlarge focused" id="nama" type="text" name="nama" required="required" value="<?=$e[cNama];?>"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="alamat">Alamat</label>
        <div class="controls"><input class="input-xxlarge focused" id="alamat" type="text" name="alamat" required="required" value="<?=$e[cAlamat];?>"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="telp">Telepon</label>
        <div class="controls"><input class="input-xlarge focused" id="telp" type="text" name="telp" value="<?=$e[cTelp];?>"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="email">Email</label>
        <div class="controls"><input class="input-xxlarge focused" id="email" type="email" name="email" value="<?=$e[cEmail];?>"></div>
    </div>
    <?php
	if ($e[cId]!=0){
	?>
    <div class="control-group">
		<label class="control-label" for="jabatan">Jabatan</label>
        <div class="controls">
        	<?php
			if($_SESSION[jabatan]==0){
				echo "<select name='jabatan' class='span3'>";
			}else{
				echo "<select name='jabatan' class='span3' disabled='disabled'>";
			}
			?>
                <?php
					$tampil=mysql_query("SELECT * FROM jabatan ORDER BY jabatan");
					while($w=mysql_fetch_array($tampil)){
						if ($e[idj]==$w[idj]){
							echo "<option value=$w[idj] selected>$w[jabatan]</option>";
						}else{
							echo "<option value=$w[idj]>$w[jabatan]</option>";
						}
					}
				?>
            </select>
         </div>
    </div>
    <?php
	}
	?>	
    <div class="control-group">
		<label class="control-label" for="pass">Password</label>
        <div class="controls">
        	<input class="input-medium focused" id="pass" type="password" name="pass">
            <span class="help-inline">* Kosongkan bila password tidak diganti</span>
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
	<button class="btn-info btn-large" onclick="window.location.href='?pages=civitas&act=tambah'">Tambah Civitas</button>
    <br /><br />
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tb14">
	<thead>
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jabatan</th>
			<th>Telepon</th>
            <th>Email</th>
            <th class='center'>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$civitas = mysql_query("SELECT * FROM civitas,jabatan WHERE jabatan.idj=civitas.idj");
		while($s = mysql_fetch_array($civitas)) {
		echo "<tr>
				<td>$s[cNip]</td>
                <td>$s[cNama]</td>
                <td>$s[cAlamat]</td>
                <td>$s[jabatan]</td>
                <td>$s[cTelp]</td>
                <td>$s[cEmail]</td>
				<td class='center'>";
                echo "<a href='include/civitas/aksi_civitas.php?act=hapus&id=$s[cId]' onClick=\"return confirm('Yakin ingin menghapus??')\"><i class='icon-trash'></i></a> 
				<a href='?pages=civitas&act=edit&id=$s[cId]'><i class='icon-edit'></i>";
				echo "
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
