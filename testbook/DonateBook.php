<?php

	$sql=mysqli_connect("localhost","ieeedtu","wmgStranger505++","ieeedtu_testbook");
  
	$bid= $_GET['bid'];
	
	
    $query = "Update `BooksData` set `exchange_donate`='D' WHERE `b_id`='$bid' ";
    
      

   $result = $sql->query($query);     
       if (!$result) {
       printf("Query failed: %s\n", $mysqli->error);
       exit;
   }      
 

     $result->close();
    $sql->close();
    
    echo json_encode("Success");
?>	