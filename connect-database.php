<?php

  $connection = OpenCon();
   
   if($connection)
   {
	echo "Connected Successfully<br><br>";
	
	CloseCon($connection);
	 
	echo "Close Connection";
   }
   else{
	   echo "Connection failed";
   }

  function OpenCon(){
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = ""; //default password for user root is empty
	$dbname = "bookstoredb";

    $conn=new mysqli($dbhost,$dbusername, $dbpassword,$dbname) or die ("Connetion failed: %s\n". $conn->error);
    
     return $conn;
  }//end of OpenCon() function

  function CloseCon($conn)
  {
    $conn->close();
  }
?>
