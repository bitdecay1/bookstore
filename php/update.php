
<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = ""; //default password for user root is empty
$dbname = "book_sc";
$conn=new mysqli($dbhost,$dbusername, $dbpassword,$dbname) or die ("Connection failed: %s\n". $conn->error);
$insertbooks= "update books set
title='Dark Rising into the Sun' where isbn='9781449355739'";

if($conn->query($insertbooks) === TRUE){
	echo "Database has been updated successfully.";
}else{
	echo "Error: " .$insertbooks . "<br>" . $conn->error;
}
$conn->close();

?>

