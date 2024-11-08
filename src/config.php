<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost'); //change 'localhost' to your local ip address
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rootpass');
define('DB_NAME', 'test_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERRO: Nao foi possivel conectar. " . mysqli_connect_error());
}
?>