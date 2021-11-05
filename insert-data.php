<?php

    $dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = ""; //default password for user root is empty
	$dbname = "bookstoredb";

    $conn=new mysqli($dbhost,$dbusername, $dbpassword,$dbname) or die ("Connection failed: %s\n". $conn->error);
    
    $sql_statement = "INSERT INTO books(title,author_name) VALUES('Frankenstein', 'By George')";
    $sql_statement = "INSERT INTO authors(name) VALUES('By George')";
	
	if($conn->query($sql_statement) === TRUE){
		echo "New beer has been inserted successfully";
	}else{
		echo "Error: " .$sql_statement . "<br>" . $conn->error;
	}
	
    $conn->close();
  
?>
