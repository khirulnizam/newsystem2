<?php
//filename : listing.php
	
	include "dbconnect.php";

	$sql="SELECT id, name, matrixno
		 FROM students";

	//execute sql command
	$result = mysqli_query($conn, $sql);

	//how many record fetched
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_assoc(  
			$result)){
			echo "ID ".$row['id']."<br>";
			echo "Matrix ".$row['matrixno']."<br>";
			echo "Name ".$row['name']."<hr>";
		}//end while
	}//end if mum_rows
?>