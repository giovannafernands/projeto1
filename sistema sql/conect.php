<?php 

$dsn = 'mysql:dbname=REGISTROS;host=localhost';

$usr ='root';
$password ='ifpe';

$conn = new  PDO($dsn, $usr, $password);
$stmt = $conn->query('SELECT');
$data = $stmt->fetchAll();



 ?>