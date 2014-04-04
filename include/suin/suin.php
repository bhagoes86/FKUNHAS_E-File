<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Surat Masuk</div>
</div>
<div class="block-content collapse in">
<div class="span12">

<?php
if($_GET[act]=="tambah"){
?>
<form method="post" action="include/suin/aksi_suin.php?act=tambah" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Tambah Surat Masuk</legend>
	<div class="control-group">
		<label class="control-label" for="ns">Nomor Surat</label>
        <div class="controls"><input class="input-medium focused" id="ns" type="text" name="nomor"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="tgl">Tanggal</label>
        <div class="controls"><input class="input-small datepicker" id="tgl" type="text" name="tgl" required="required"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="pengirim">Pengirim</label>
        <div class="controls">
        	<?php
			$sql = mysql_query("SELECT DISTINCT ipengirim FROM isurat");
			$src="";
			while($r = mysql_fetch_array($sql)) {
				$src = $src."\"".$r[ipengirim]."\",";
			}
			$isi= substr($src,0,-1);
			?>
        	<input type="text" name="pengirim" class="span4" required="required" id="pengirim" data-provide="typeahead" data-items="4" data-source='[<?=$isi?>]' autocomplete="off">
        </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="kepada">Kepada</label>
        <div class="controls">
            <select id="kepada" class="chzn-select" name="kepada">
            	<option>Pilih Tujuan Surat</option>
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
$e = mysql_fetch_array(mysql_query("SELECT * FROM isurat WHERE iid='$_GET[id]'"));
?>
<form method="post" action="include/suin/aksi_suin.php?act=edit&id=<?=$e[iid];?>" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Edit Surat Masuk</legend>
	<div class="control-group">
		<label class="control-label" for="ns">Nomor Surat</label>
        <div class="controls"><input class="input-medium focused" id="ns" type="text" name="nomor" value="<?=$e[inmr];?>"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="tgl">Tanggal</label>
        <div class="controls"><input class="input-small datepicker" id="tgl" type="text" name="tgl" value="<?=$e[itgl];?>" required="required"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="pengirim">Pengirim</label>
        <div class="controls">
        	<?php
			$sql = mysql_query("SELECT DISTINCT ipengirim FROM isurat");
			$src="";
			while($r = mysql_fetch_array($sql)) {
				$src = $src."\"".$r[ipengirim]."\",";
			}
			$isi= substr($src,0,-1);
			?>
        	<input type="text" name="pengirim" class="span4" id="pengirim" required="required" data-provide="typeahead" data-items="4" data-source='[<?=$isi?>]' autocomplete="off" value="<?=$e[ipengirim];?>">
        </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="kepada">Kepada</label>
        <div class="controls">
            <select id="kepada" class="chzn-select" name="kepada">
            <?php
				$cv = mysql_query("SELECT cId, cNama FROM civitas");
				while ($dcv=mysql_fetch_array($cv)){
					if ($e[ikepada]==$cv[cId]){
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
        <div class="controls"><input class="input-xxlarge focused" id="perihal" type="text" name="perihal" value="<?=$e[iperihal];?>"></div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="ket">Keterangan</label>
        <div class="controls">
        	<textarea name="ket" id="ket" class="input-large textarea" style="width: 610px; height: 100px"><?=$e[iket];?></textarea>
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
}elseif($_GET[act]=="detail"){
$e = mysql_fetch_array(mysql_query("SELECT a.*, b.cNama FROM isurat a,civitas b WHERE a.ikepada=b.cId AND a.iid='$_GET[id]'"));

if ($e[ikepada]==$_SESSION[cv]){
	mysql_query("UPDATE isurat SET istatus='Y' WHERE ikepada='$_SESSION[cv]' AND iid='$_GET[id]'");
}
?>
<strong>
<legend>Detail Surat Masuk</legend>
<table width="100%">
	<tr><td width="14%">Nomor Surat</td><td>: <?=$e[inmr];?></td></tr>
    <tr><td>Tanggal Surat</td><td>: <?=tgl_indo($e[itgl]);?></td></tr>
    <tr><td>Perihal</td><td>: <?=$e[iperihal];?></td></tr>
    <tr><td>Pengirim</td><td>: <strong><?=$e[ipengirim];?></strong></td></tr>
    <tr><td>Kepada</td><td>: <strong><?=$e[cNama];?></strong></td></tr>
    <tr><td>Ket</td><td>: <?=$e[iket];?></td></tr>
</table>
</strong>
<br />
<?php
$qds = mysql_query("SELECT a.*,(SELECT cNama FROM civitas WHERE cId=a.dPendisposisi) as dPdisposisi FROM disposisi a WHERE a.iid='$_GET[id]'");
$ds = mysql_fetch_array($qds);
$jds = mysql_num_rows($qds);

if ($jds>0){
?>
<!-- isi disposisi-->
<legend>Disposisi</legend>
<table width="100%">
	<tr><td width="14%">Nomor Agenda</td><td>: <?=$ds[dNoagenda];?></td></tr>
    <tr><td>Tanggal</td><td>: <?=tgl_indo($ds[dTglM]);?></td></tr>
    <?php
	$sft = Array("A"=>"Rutin","B"=>"Penting","C"=>"Rahasia");
	$bdg = Array("A"=>"success","B"=>"warning","C"=>"important");
	$tglS=$ds[dTglS];
	if ($ds[dTglS]=="0000-00-00"){
		$tglS="";
	}
	?>
    <tr><td>Tanggal Penyelesaian</td><td>: <?=tgl_indo($tglS);?></td></tr>
    <tr><td>Pendisposisi Awal</td><td>: <?=$ds[dPdisposisi];?></td></tr>
    <tr><td>Instruksi/Informasi</td><td>: <?=$ds[dInstruksi];?></td></tr>
    <tr><td>Sifat</td><td>: <span class="label label-<?=$bdg[$ds[dSifat]];?>"><?=$sft[$ds[dSifat]];?></span></td></tr>
</table>
<br />
<legend>History Disposisi :</legend>
<table class="table table-bordered">
<thead>
	<td>Tanggal</td>
	<td>Oleh</td>
    <td>Kepada</td>
    <td width="200">Status</td>
    <td width="150">Dilihat Pada</td>   
</thead>
<?php
$pds = mysql_query("SELECT a.*,
					(SELECT b.cNama FROM civitas b WHERE b.cId=a.pId) As oleh,
					(SELECT b.cNama FROM civitas b WHERE b.cId=a.cId) As kepada 
					FROM pdis a WHERE a.iid='$_GET[id]'");

//$pds = mysql_query("SELECT a.cNip, a.cNama, b.psACC, b.psTglbaca FROM civitas a LEFT JOIN pdis b ON b.cId=a.cId WHERE b.iid='$_GET[id]'");

while ($t=mysql_fetch_array($pds)){
	$tglBaca = tgl_indo($t[psTglbaca]);
	$tglDis = tgl_indo($t[ptgl]);
	if ($t[psTglbaca]=="0000-00-00"){
		$tglBaca="<span class='label label-important'>Belum dilihat</span>";
	}
	if ($t[psACC]=="N"){
		echo "<tr>
				<td>$tglDis</td>
				<td>$t[oleh]</td>
				<td>$t[kepada]</td>
				<td><span class='label label-warning'>Menunggu Konfirmasi</span></td>
				<td>$tglBaca</td>
			 </tr>";
	}else{
		echo "<tr class='info'>
				<td>$tglDis</td>
				<td>$t[oleh]</td>
				<td>$t[kepada]</td>
				<td><span class='label label-success'>ACC</span></td>
				<td>$tglBaca</td>
			 </tr>";
	}
}
?>
</table>
<!-- /isi disposisi-->
<?php	
}
?>

<?php
//batas dari disposisi.php
}elseif($_GET[act]=="tambahdisp"){
	$iid=$_GET['id'];
?>
<form method="post" action="include/suin/aksi_suin.php?act=tambahdisp&iid=<?=$iid;?>" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Tambah Disposisi</legend>
	<div class="control-group">
		<label class="control-label" for="noagenda">Nomor Agenda</label>
        <div class="controls"><input class="input-medium focused" id="noagenda" type="text" name="noagenda" required="required"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="tglm">Tanggal</label>
        <div class="controls"><input class="input-small datepicker" id="tglm" type="text" name="tglm" required="required"></div>
    </div>
     <div class="control-group">
		<label class="control-label" for="tgls">Tanggal Penyelesaian</label>
        <div class="controls"><input class="input-small datepicker" id="tgls" type="text" name="tgls"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="pendisposisi">Pendisposisi</label>
        <div class="controls">
            <select id="pendisposisi" class="chzn-select" name="pendisposisi">
            <?php
				$cv = mysql_query("SELECT cId, cNama FROM civitas");
				while ($dcv=mysql_fetch_array($cv)){
					if ($dcv[cId]==$_SESSION[cv]){
		    	     	echo "<option value='$dcv[cId]' selected>$dcv[cNama]</option>";
					}else{
						echo "<option value='$dcv[cId]'>$dcv[cNama]</option>";
					}
				}
			?>
           	</select>
        </div>
    </div>
	<div class="control-group">
    	<label class="control-label" for="sifat">Sifat</label>
        <div class="controls">
        	<select id="sifat" name="sifat" class="span2">
            	<option value="A">Rutin</option>
                <option value="B">Penting</option>
                <option value="C">Rahasia</option>
            </select>
		</div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="pdis">Diteruskan Kepada</label>
        <div class="controls">
        	<select multiple="multiple" id="pdis" name="pdis[]" class="chzn-select span4">
             	<?php
				$cv = mysql_query("SELECT cId, cNama FROM civitas WHERE cId NOT IN(SELECT cId FROM pdis WHERE iid='$iid')");
				while ($dcv=mysql_fetch_array($cv)){
	    	     	echo "<option value='$dcv[cId]'>$dcv[cNama]</option>";
				}
				?>                             
            </select>
        </div> 
    </div>
    <div class="control-group">
    	<label class="control-label" for="isi">Instuksi/Informasi</label>
        <div class="controls">
        	<textarea name="isi" id="isi" class="input-large textarea" style="width: 610px; height: 100px"></textarea>
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
}elseif($_GET[act]=="editdisp"){
$e = mysql_fetch_array(mysql_query("SELECT * FROM disposisi WHERE iid='$_GET[id]'"));
$iid = $e['iid'];
?>
<form method="post" action="include/suin/aksi_suin.php?act=editdisp&iid=<?=$iid;?>" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
<legend>Edit Disposisi</legend>
	<div class="control-group">
		<label class="control-label" for="noagenda">Nomor Agenda</label>
        <div class="controls"><input class="input-medium focused" id="noagenda" type="text" name="noagenda" value="<?=$e[dNoagenda];?>" required="required"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="tglm">Tanggal</label>
        <div class="controls"><input class="input-small datepicker" id="tglm" type="text" name="tglm" value="<?=$e[dTglM];?>" required="required"></div>
    </div>
     <div class="control-group">
		<label class="control-label" for="tgls">Tanggal Penyelesaian</label>
        <?php
		$tglS=$e[dTglS];
		if ($e[dTglS]=="0000-00-00"){
			$tglS="";
		}
		?>
        <div class="controls"><input class="input-small datepicker" id="tgls" type="text" name="tgls" value="<?=$tglS;?>"></div>
    </div>
    <div class="control-group">
		<label class="control-label" for="pendisposisi">Pendisposisi</label>
        <div class="controls">
            <select id="pendisposisi" class="chzn-select" name="pendisposisi">
            <?php
				$cv = mysql_query("SELECT cId, cNama FROM civitas");
				while ($dcv=mysql_fetch_array($cv)){
					if ($dcv[cId]==$e[cId]){
		    	     	echo "<option value='$dcv[cId]' selected>$dcv[cNama]</option>";
					}else{
						echo "<option value='$dcv[cId]'>$dcv[cNama]</option>";
					}
				}
			?>
           	</select>
        </div>
    </div>
	<div class="control-group">
    	<label class="control-label" for="sifat">Sifat</label>
        <div class="controls">
        	<select id="sifat" name="sifat" class="span2">
            	<?php
				$sft = Array("A"=>"Rutin","B"=>"Penting","C"=>"Rahasia");
				foreach($sft as $v=>$t){
					if ($e[dSifat]==$v){
						echo "<option value='$v' selected>$t</option>";
					}else{
						echo "<option value='$v'>$t</option>";
					}
				}
				?>
            </select>
		</div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="pdis">Diteruskan Kepada</label>
        <div class="controls">
        	<select multiple="multiple" id="pdis" name="pdis[]" class="chzn-select span4">
             	<?php
				$cv = mysql_query("SELECT cId, cNama FROM civitas WHERE cId IN(SELECT cId FROM pdis WHERE iid='$iid')");
				while ($dcv=mysql_fetch_array($cv)){
	    	     	echo "<option value='$dcv[cId]' selected>$dcv[cNama]</option>";
				}
				$cv = mysql_query("SELECT cId, cNama FROM civitas WHERE cId NOT IN(SELECT cId FROM pdis WHERE iid='$iid')");
				while ($dcv=mysql_fetch_array($cv)){
	    	     	echo "<option value='$dcv[cId]'>$dcv[cNama]</option>";
				}
				?>                             
            </select>
        </div> 
    </div>
    <div class="control-group">
    	<label class="control-label" for="isi">Instuksi/Informasi</label>
        <div class="controls">
        	<textarea name="isi" id="isi" class="input-large textarea" style="width: 610px; height: 100px"><?=$e[dInstruksi];?></textarea>
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
<!-- batas dari disposisi.php -->
<?php
}else{
?>
<div class="block-content collapse in">
<div class="span12">
	<?php
	if($_SESSION[levelcv]<2){
	?>
	<button class="btn-info btn-large" onclick="window.location.href='?pages=suin&act=tambah'">Tambah Surat Masuk</button>
    <br /><br />
	<?php
	}
	?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tb14">
	<thead>
		<tr>
			<th>Disposisi</th>
			<th>Nomor</th>
			<th>Tanggal</th>
			<th>Pengirim</th>
			<th>Kepada</th>
			<th>Perihal</th>
            <th>Lampiran</th>
            <th class='center'>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$jinbox = mysql_num_rows(mysql_query("SELECT a.*, b.cNama FROM isurat a, civitas b WHERE a.ikepada=b.cId AND a.istatus='N' AND a.ikepada='$_SESSION[cv]'"));
		
		$smasuk = mysql_query("SELECT a.*, b.cNama FROM isurat a, civitas b WHERE a.ikepada=b.cId");	
				
		while($s = mysql_fetch_array($smasuk)) {
		if (($s[istatus]=='N')&&($s[ikepada]==$_SESSION[cv])){
			echo "<tr class=success>";
		}else{
			echo "<tr>";
		}
				echo "<td class='center'>";
				$ds = mysql_query("SELECT * FROM disposisi WHERE iid='$s[iid]'");
				$jr = mysql_num_rows($ds);
				
					if ($jr<1){
						echo "<a href='?pages=suin&act=tambahdisp&id=$s[iid]'>Disposisi</a>";
					}else{
						echo "<a href='?pages=suin&act=editdisp&id=$s[iid]'>Edit Disposisi</i>";
					}
				
			echo "</td>";
			echo "<td><a href='home.php?pages=suin&act=detail&id=$s[iid]' title=Detail'>$s[inmr]</a></td>
                <td>";echo tgl_indo($s[itgl]);echo"</td>
                <td>$s[ipengirim]</td>
                <td>$s[cNama]</td>
                <td>$s[iperihal]</td>
                <td><a href='smasuk/$s[ifile]' target='_blank'>Lampiran Surat</a></td>";
				echo "
				<td class='center'><a href='include/suin/aksi_suin.php?act=hapus&id=$s[iid]' onClick=\"return confirm('Yakin ingin menghapus??')\"><i class='icon-trash'></i></a> 
				<a href='?pages=suin&act=edit&id=$s[iid]'><i class='icon-edit'></i>
				</td>
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