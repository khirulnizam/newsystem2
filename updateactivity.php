<?php
//updateactivity.php
if(isset($_POST['activityname']) &&
	isset($_POST['time']) && isset($_POST['date'])){

	//simpan ke database
	include "dbconnect.php";
	
	//fetch data
	$id=$_POST['id'];
	$activityname=$_POST['activityname'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$speaker=$_POST['speaker'];

	//sql insert
	$sql="UPDATE INTO activities
		(activityname, date, time,speaker,userid)
		VALUES('$activityname','$date',
		'$time','$speaker',
		'".$_SESSION['userid']."')";
		//data dari borang html
		echo $sql;

	$rs=mysqli_query($conn,$sql);
	if($rs==true){
		echo "Record saved";
	}else{
		echo "Cannot save record";
	}
}//end isset