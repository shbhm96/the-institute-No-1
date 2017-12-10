<?php
include('dbcon.php');

$roll_10=$_POST['ten_roll'];
$per_10=$_POST['ten_per'];
$school_10=$_POST['ten_school'];
$brd_10=$_POST['ten_brd'];
$type_10=$_POST['ten_type1'];

$q="INSERT INTO `tenth`( `Tenth_roll`, `tenth_per`, `tenth_school`, `tenth_board`, `tenth_type`) 
VALUES ('$roll_10','$per_10','$school_10','$brd_10','$type_10');";
$status=mysqli_query($con,$q);
 if($status==1)
 {
		echo "Record Inserted 10th data inserted";
	?>
	<script>
		window.alert("Record Inserted Successfully");
	</script>
	<?php	
 }
	else{
		echo " ".$q;
		echo "10th data  Not inserted ";	
	}
$roll_12=$_POST['tew_roll'];
$per_12=$_POST['tew_per'];
$school_12=$_POST['tew_school'];
$brd_12=$_POST['tew_brd'];
$type_12=$_POST['tew_type1'];

$q1="INSERT INTO `twelve`(`twelve_roll`, `twelve_per`, `twelve_school`, `twelve_board`, `twelve_type`) 
VALUES ('$roll_12','$per_12','$school_12','$brd_12','$type_12');";
$status2=mysqli_query($con,$q1);
if($status2==1)
{
		echo "Record Inserted 10th data inserted";
	?>
	<script>
		window.alert("Record Inserted Successfully");
	</script>
	<?php	
 }

	else{
		echo "12th data  Not inserted ";	
	}


$roll_grad=$_POST['grad_roll'];
$per_grad=$_POST['grad_per'];
$school_grad=$_POST['grad_school'];
$brd_grad=$_POST['grad_brd'];
$type_grad=$_POST['grad_type1'];
	
$q2="INSERT INTO `graduation`(`Roll-No`, `Grad_roll`, `Grad_per`, `Grad_clg`, `Grad_uni`, `Grad_type`)
 VALUES ('$roll_grad','$per_grad','$school_grad','$brd_grad','$type_grad');";
$status3=mysqli_query($con,$q2);
	mysqli_close($con);
	
if($con)
	echo "Connection Successful!";	
if($status3==1)
	{
		echo "Record Inserted 10th data inserted";
	?>
	<script>
		window.alert("Record Inserted Successfully");
	</script>
	<?php	
 }

	else{
		echo "grad data  Not inserted ";	
	}
	header('location:uploading.php');
?>