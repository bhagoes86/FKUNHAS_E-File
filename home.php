<?php
require_once "cek_sesi.php";
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"config/koneksi.php";
include"config/fungsi_indotgl.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Aplikasi E-File Surat - Fakultas Kedokteran Universitas Hasanuddin</title>
<!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
		<link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
<!-- batas panel atas-->
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
    	<div class="container-fluid">
        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
            	<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
			</a>
			<a class="brand" href="home.php?pages=home">Aplikasi E-File FK UNHAS</a>
	        <div class="nav-collapse collapse">
	            <ul class="nav pull-right">
	                <li class="dropdown">
                    	<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        	<i class="icon-user"></i> Hai, <?php echo $_SESSION[namacv];?> <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                        <li>
                        	<a tabindex="-1" href="home.php?pages=civitas&act=edit&id=<?php echo $_SESSION[cv];?>">Profile</a>
						</li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="logout.php">Logout</a></li>
                        </ul>
                   </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- batas panel atas-->
        
<div class="container-fluid"><!-- container-fluid-->
	<div class="row-fluid">
	<!--batas side bar (kiri)-->
	<div class="span2" id="sidebar"><!--span2-->
        <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
			<div class="navbar navbar-inner block-header">
		    <center>
			<h5 align="center">Aplikasi E-File Fakultas Kedokteran</h5>
			<img src="images/logo.png" />
			<h4>Universitas Hasanuddin</h4>         
			</center>
		    </div>
        </ul>
			<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<a href='?pages=home'>
				<div class="navbar navbar-inner block-header">
					<div class="muted pull-left"><i class='icon-home'></i> Beranda</div>
				</div>
				</a>
			</ul>
        <?php
			
			if ($_SESSION[levelcv]<3){
				include "menusurateksternal.php";
				include "menusuratinternal.php";
				include "menumaster.php";	
				include "menulaporan.php";
			}else{
				include "menuusr.php";
			}
		?>
    </div><!--/span2-->
	<!--batas side bar (kiri)-->
                
	<!--batas konten (kanan)-->
    <div class="span10"><!--span10-->
        <div class="row-fluid">
		    <div class="span12" id="content">
		        <div class="row-fluid">
		            <div class="block"><!-- block -->
                    <?php
						if($_GET[pages]=="civitas"){
							include"include/civitas/civitas.php";	//admin
						}elseif($_GET[pages]=="jabatan"){
							include"include/jabatan/jabatan.php";	//admin
						}elseif($_GET[pages]=="suin"){
							include"include/suin/suin.php";			//admin,operator,dekan
						}elseif($_GET[pages]=="sout"){
							include"include/sout/sout.php";			//admin,operator,dekan
						}elseif($_GET[pages]=="sinter"){
							include"include/sinter/sinter.php";		//admin,operator,dekan
						}elseif($_GET[pages]=="rall"){
							include"include/rall/rall.php";			//admin,dekan
						}elseif($_GET[pages]=="rsuin"){
							include"include/rsuin/rsuin.php";		//admin,dekan
						}elseif($_GET[pages]=="rsout"){
							include"include/rsout/rsout.php";		//admin,dekan
						}elseif($_GET[pages]=="usrte"){
							include"usrte.php";						//other
						}elseif($_GET[pages]=="usrt"){
							include"usrt.php";						//other
						}elseif($_GET[pages]=="rsi"){
							include"include/rsi/rsi.php";		//admin,dekan
						}elseif($_GET[pages]=="rdi"){
							include"include/rdi/rdi.php";		//admin,dekan
						}elseif($_GET[pages]=="udis"){
							include"udisposisi.php";				//other
						}else{
							include"welcome.php";
						}
					?>  
		            </div><!-- /block -->
		        </div>
		    </div>
        </div>
    </div><!--/span10-->
	<!--batas konten (kanan)-->
    </div><!--/row fluid-->
	<hr>
	<!--batas footer -->
	<footer>
        <p>
			Copyright &copy; <?php echo date('Y'); ?><br />
			<a href="http://med.unhas.ac.id">Fakultas Kedokteran</a><br>
			<a href="http://unhas.ac.id"><strong>Universitas Hasanuddin Makassar</strong></a><br>
			Support By Mediatama
		</p>
    </footer>
	<!--batas footer -->
</div><!-- /container-fluid-->
            
<link href="vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="vendors/chosen.min.css" rel="stylesheet" media="screen">
<link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<script src="vendors/jquery-1.9.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/jquery.uniform.min.js"></script>
<script src="vendors/chosen.jquery.min.js"></script>
<script src="vendors/bootstrap-datepicker.js"></script>
<script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
<script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
<script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/scripts.js"></script>

<script src="vendors/jGrowl/jquery.jgrowl.js"></script>

<script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/DT_bootstrap.js"></script>
<script>
   $(function(){});
</script>

<script>
    $(function() {
		$(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();
        $('.textarea').wysihtml5();
		
		$('.tooltip').tooltip();	
		$('.tooltip-left').tooltip({ placement: 'left' });	
		$('.tooltip-right').tooltip({ placement: 'right' });	
		$('.tooltip-top').tooltip({ placement: 'top' });	
		$('.tooltip-bottom').tooltip({ placement: 'bottom' });

		$('.popover-left').popover({placement: 'left', trigger: 'hover'});
		$('.popover-right').popover({placement: 'right', trigger: 'hover'});
		$('.popover-top').popover({placement: 'top', trigger: 'hover'});
		$('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});
		
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
			$('#rootwizard').find('.bar').css({width:$percent+'%'});
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
				$('#rootwizard').find('.pager .next').hide();
				$('#rootwizard').find('.pager .finish').show();
				$('#rootwizard').find('.pager .finish').removeClass('disabled');
            } else {
                $('#rootwizard').find('.pager .next').show();
                $('#rootwizard').find('.pager .finish').hide();
            }
        }});
		$('#rootwizard .finish').click(function() {
			alert('Finished!, Starting over!');
			$('#rootwizard').find("a[href*='tab1']").trigger('click');
        });
    });
</script>
</body>
</html>
