<?php 
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

//Pevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost","root","");
mysql_select_db('book_sc');

//Query the database for user
$result = mysql_query("select * from uses where usename ='$usename' and password'") or die("Failed to query database" .mysql_error());
$row = mysql_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password){
	header('Location: index.html');
} else {
	echo "Failed to login";

}

/*
if (!empty($username)){
	if (!empty($password)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "book_sc";

	//Create connection
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().') '.mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO admin(username, password) values ('$username','$password')";
		// Check if this query is working or not
		/*if($conn->query($sql)){
			header("url=index.html");
		}
		else{
			echo "Error: ".$sql ."<br>".$conn->error;
		}
		$conn->close();
	}

	}
	else{
		echo "Passwod should not be empty";
		die();
	}

}
else{
	echo "Usename should not be empty";
	die();
}

exit;
*/
?>