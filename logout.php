<?php

	session_start();

	unset($_SESSION[cv]);
	unset($_SESSION[nipcv]);
	unset($_SESSION[namacv]);
	unset($_SESSION[passcv]);
	unset($_SESSION[jabatancv]);
  	unset($_SESSION[levelcv]);
	
	unset($_SESSION[loginefile]);
	
	session_destroy()

?>

<script>
parent.location = "index.php";
</script>