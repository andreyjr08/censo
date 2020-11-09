<?php

    session_start();

if(!isset($_SESSION["usuario"])){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Exito</title>
</head>
<body>
<h1>Ingresaste con exito</h1>
</body>
</html>
