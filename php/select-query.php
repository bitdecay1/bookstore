<?php

  function OpenCon(){
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = ""; //default password for user root is empty
	$dbname = "book_sc";

    $conn=new mysqli($dbhost,$dbusername, $dbpassword,$dbname) or die ("Connetion failed: %s\n". $conn->error);
    
     return $conn;
  }//end of OpenCon() function

  function CloseCon($conn)
  {
    $conn->close();
  }
  
  $connection = OpenCon();
  
   if($connection)
   {
	 $sql_statement="SELECT title,author_name FROM books";
	 
	 if ($result=$connection->query($sql_statement)) {
		 $line = "";
		 
		 while($row=$result->fetch_object()){ 
			$line = $row->title . ",  ";
			$line = $line . $row->author_name;
	        echo  "$line<br><br>";
			$line = "";
		 } 
	}		 
	$result->close();
   }
   else{
	   echo "Connection failed";
   }

?>
