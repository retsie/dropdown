<?php 

$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'sample_dropdown';


try {
	$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
} catch (PDOException $e) {
	echo 'ERROR' . $e->getMessage();
}




 ?>