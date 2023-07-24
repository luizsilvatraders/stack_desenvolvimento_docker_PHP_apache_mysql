<?php
//phpinfo();

$conn = mysqli_connect('db', 'root', 'root', 'sys') or die(mysqli_error());
echo'bd conectado';
$conn->close();
?>