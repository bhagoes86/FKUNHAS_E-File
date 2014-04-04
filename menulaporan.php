<?php
if(($_SESSION[levelcv]==0)||($_SESSION[levelcv]==2)){
?>
<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
    <div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Menu Laporan</div>
	</div>
	<li>
		<a href="?pages=rall"><i class="icon-th-list"></i> Rekapitulasi</a>
	</li>
	<li>
		<a href="?pages=rsuin"><i class="icon-print"></i> Surat Masuk</a>
	</li>
	<li>
		<a href="?pages=rsout"><i class="icon-book"></i> Surat Keluar</a>
	</li>
	<li>
		<a href="?pages=rsi"><i class="icon-list-alt"></i> Surat Internal</a>
	</li>
	<li>
		<a href="?pages=rdi"><i class="icon-tasks"></i> Disposisi</a>
	</li>
</ul>
<?php
}
?>