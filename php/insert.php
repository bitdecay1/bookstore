
<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = ""; //default password for user root is empty
$dbname = "book_sc";
$conn=new mysqli($dbhost,$dbusername, $dbpassword,$dbname) or die ("Connection failed: %s\n". $conn->error);
$insertbooks= "INSERT INTO books(isbn, title, author_name, genre, price)
VALUES 	('9781449355739', 'Dark Rising', 'Susan Cooper', 'Fantasy', 19.99),
	('9781449357016', 'The Dragonriders of Pern', 'Anne McCaffery', 'Fantasy', 19.99),
	('9781789534627', 'Torch against the knight','Sabaa Tahir', 'Fantasy', 19.99),
	('9781477848661', 'Game of Thrones', 'George R.R. Martin', 'Fantasy', 19.99),
	('9788999907664', '1984' , 'George Orwell' , 'Fiction' , 30.00),
	('9783340012391', 'Jane Eyre', 'Charlotte Broite', 'Fiction' , 40.00),
	('9782702421505','Les Annees 1934-1935', 'Agatha Christie', 'mystery', 3.22),
	('9780061043505','Strong Poison','Dorothy L. Sayers','fiction',3.42),
	('9781591856085','Believe and Rejoice','James P. Gills','non-fiction',3.42)
";

if($conn->query($insertbooks) === TRUE){
	echo "New books have been inserted successfully";
}else{
	echo "Error: " .$insertbooks . "<br>" . $conn->error;
}
$conn->close();	

?>

