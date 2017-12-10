<?php
$address=$_POST['addres'];
$dis=$_POST['dis'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$domi=$_POST['dom'];
include('dbcon.php');
$q="INSERT INTO `student2`( `Address`, `District`, `City`, `State`, `Pincode`, `Domicile`) 
VALUES ('$address','$dis','$city','$state','$pin','$domi');";
$status=mysqli_query($con,$q);
	mysqli_close($con);	
if($con)
	echo "Connection Successful!";
 if($status==1)
 {
		echo "Record Inserted";
		?>
	<script>
		window.alert("Record Inerted Successfully");
	</script>
<?php
		header('location:Edu_info.php');
 }
	else{
		header('location:prsonl_info.php');
		echo "<br>".$q."<br>";
		echo "Not inserted";	
		
	}
?>