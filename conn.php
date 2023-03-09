<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'system_register';

$conn = mysqli_connect($servername,$username,$password,$db_name);
if($conn) {
    /* echo "connection successful"; */
} else {
    die(mysqli_connect_error($conn));
}   

?>