<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = '15-03-2021-grupa3';
$port = 3306;

$polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);
if(mysqli_connect_errno()!=0){
	echo('błąd połączenia do bazy danych');
}else{
	echo('Połączono pomyślnie');
}

?>