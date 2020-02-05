<!DOCTYPE html>
<html>
<head>
	<title>Pagina de cierre</title>
</head>
<body>

<?php  
	session_start();
	session_destroy();
	header("location:Login.html");
?>

</body>
</html>