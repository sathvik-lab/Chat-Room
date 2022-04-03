<?php  

$servername = "localhost";
$username = "root";
$password = "";
$database = "chatroom";

//creating a database

$conn = mysqli_connect($servername,$username,$password,$database);


// to check weather the database is set up or not

if (!$conn)
{
	die("Failed to Connect" . mysqli_connect_error());
}

?>