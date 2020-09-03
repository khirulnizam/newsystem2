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
	$sql="UPDATE activity
		SET
		activityname='$activityname', 
		date='$date', 
		time='$time',
		speaker='$speaker'
		WHERE id='$id'";
		//data dari borang html
		//echo $sql;

	$rs=mysqli_query($conn,$sql);
	if (mysqli_error($rs)==true){
		echo mysqli_error($rs);
	}//sql error
	if($rs==true){
		header ("Location: searchactivity.php?msg=Record update");
		echo "Record update";
	}else{
		//header ("Location: searchactivity.php?msg=Cannot save Record ");
		echo "Cannot save record";
	}
}//end isset