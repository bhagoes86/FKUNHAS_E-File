<?php
	$qsm = mysql_query("SELECT a.cId,a.cNama, 
					    (SELECT COUNT(b.iid) FROM isurat b WHERE a.cId=b.ikepada)  AS ttl,
						(SELECT COUNT(c.iid) FROM isurat c WHERE a.cId=c.ikepada AND c.istatus='N') AS urd,
						(SELECT COUNT(d.iid) FROM isurat d WHERE a.cId=d.ikepada AND d.istatus='Y') AS rd 
						FROM civitas a WHERE a.cId='$_SESSION[cv]'");
	$s=mysql_fetch_array($qsm);
	
	$qsi = mysql_query("SELECT a.cId,a.cNama, 
						(SELECT COUNT(b.psid) FROM psin b WHERE a.cId=b.cId) AS ttl,
						(SELECT COUNT(c.psid) FROM psin c WHERE a.cId=c.cId AND c.sistatus='N') AS urd,
						(SELECT COUNT(d.psid) FROM psin d WHERE a.cId=d.cId AND d.sistatus='Y') AS rd
						FROM civitas a WHERE a.cId='$_SESSION[cv]'");
	$i=mysql_fetch_array($qsi);
	
	$qds = mysql_query("SELECT a.cId,a.cNama, 
						(SELECT COUNT(b.pdid) FROM pdis b WHERE a.cId=b.cId) AS ttl,
						(SELECT COUNT(c.pdid) FROM pdis c WHERE a.cId=c.cId AND c.psTglbaca='0000-00-00') AS urd,
						(SELECT COUNT(d.pdid) FROM pdis d WHERE a.cId=d.cId AND d.psTglbaca<>'0000-00-00') AS rd
						FROM civitas a WHERE a.cId='$_SESSION[cv]'");
	$d=mysql_fetch_array($qds);
?>
<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Surat Masuk Eksternal</div>
</div>
<div class="row-fluid">
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-error" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Total Surat Masuk Eksternal</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$s[ttl];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-info" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Belum Terbaca</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$s[urd];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-success" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Terbaca</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$s[rd];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
</div>
<?php
if ($_SESSION[levelcv]>2){
?>
<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Surat Masuk Internal</div>
</div>
<div class="row-fluid">
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-error" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Total Surat Masuk Internal</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$i[ttl];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-info" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Belum Terbaca</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$i[urd];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-success" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Terbaca</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$i[rd];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
</div>

<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Disposisi</div>
</div>
<div class="row-fluid">
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-error" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Total Disposisi</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$d[ttl];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-info" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Belum Terbaca</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$d[urd];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
	<div class="span4">
	<div class="block-content collapse in">
		<div class="alert alert-block alert-success" style="padding: 10px 10px 8px 10px;">
		<h4 class="alert-heading">Terbaca</h4><hr />
		<div style="padding:0px 10px 10px 10px;">
		<center>
		<h1><?=$d[rd];?></h1>
		</center>
		</div>
		</div>
	</div>
	</div>
</div>
<?php
}
?>