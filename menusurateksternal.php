<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
    <div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Menu Eksternal</div>
	</div>
	<li>
	<?php
		$sql = mysql_query("SELECT * FROM isurat 
							 WHERE ikepada = '$_SESSION[cv]'
							 AND istatus = 'N'");
		$j = mysql_num_rows($sql);
		if($j > 0){
			echo"<a href='?pages=suin'><i class='icon-arrow-right'></i><strong> Surat Masuk <span class='badge badge-info pull-right'>$j</span></strong></a>";
		} else {
			echo"<a href='?pages=suin'><i class='icon-arrow-right'></i> Surat Masuk</a>";
		}
		?>
	</li>
	<li>	
		<a href="?pages=sout"><i class="icon-arrow-left"></i> Surat Keluar</a>
	</li>
</ul>