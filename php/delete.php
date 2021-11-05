
<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = ""; //default password for user root is empty
$dbname = "book_sc";
$conn=new mysqli($dbhost,$dbusername, $dbpassword,$dbname) or die ("Connection failed: %s\n". $conn->error);
$insertbooks= "DELETE FROM authors
WHERE name IN (SELECT author_name FROM books WHERE price <4)";

if($conn->query($insertbooks) === TRUE){
	echo "The data has been deleted.";
}else{
	echo "Error: " .$insertbooks . "<br>" . $conn->error;
}
$conn->close();

?>

