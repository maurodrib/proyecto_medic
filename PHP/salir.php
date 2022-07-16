<?php
   SESSION_START();
   SESSION_DESTROY();
   echo "<script type='text/javascript'>
	alert('USTED HA SALIDO DEL SISTEMA');
	window.open('../index.php','_self');
	</script>";
?>