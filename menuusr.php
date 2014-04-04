<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
    <div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Surat Masuk</div>
	</div>
	<li>
	<?php
		$sql = mysql_query("SELECT * FROM isurat 
							 WHERE ikepada = '$_SESSION[cv]'
							 AND istatus = 'N'");
		$j = mysql_num_rows($sql);
		if($j > 0){
			echo"<a href='?pages=usrte'><i class='icon-arrow-right'></i><strong> Eksternal <span class='badge badge-info pull-right'>$j</span></strong></a>";
		} else {
			echo"<a href='?pages=usrte'><i class='icon-arrow-right'></i> Eksternal</a>";
		}
		?>
	</li>
	<li>
	<?php
		$sql = mysql_query("SELECT * FROM psin 
							 WHERE cId = '$_SESSION[cv]'
							 AND sistatus = 'N'");
		$j = mysql_num_rows($sql);
		if($j > 0){
			echo"<a href='?pages=usrt'><i class='icon-arrow-left'></i><strong> Internal <span class='badge badge-info pull-right'>$j</span></strong></a>";
		} else {
			echo"<a href='?pages=usrt'><i class='icon-arrow-left'></i> Internal</a>";
		}
		?>
	</li>
</ul>

<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
    <div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Disposisi</div>
	</div>
	<li>
		<?php
		$sql = mysql_query("SELECT * FROM pdis 
							 WHERE cId = '$_SESSION[cv]'
							 AND psTglbaca ='0000-00-00'");
		$j = mysql_num_rows($sql);
		if($j > 0){
			echo"<a href='?pages=udis'><i class='icon-forward'></i><strong> Disposisi <span class='badge badge-info pull-right'>$j</span></strong></a>";
		} else {
			echo"<a href='?pages=udis'><i class='icon-forward'></i> Disposisi</a>";
		}
		?>
	</li>
</ul>