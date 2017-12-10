<?php
include('dbcon.php');

$img_name=$_FILES['upload_photo']['name'];

$temp_img_name=$_FILES['upload_photo']['temp_name'];

$sign_name=$_FILES['upload_sign']['name'];

$temp_sign_name=$_FILES['upload_sign']['temp_name'];

move_uploaded_file($temp_img_name,"/photos/$img_name");

move_uploaded_file($temp_sign_name,"/signatures/$sign_name");

$qry="INSERT INTO `images`(`photo`, `sign`)
 VALUES ('$img_name','$sign_name');";
 $status=mysqli_query($con,$qry);
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
	header('location:index.php');
}
	else{
		header('location:uploading.php');
		echo "<br>".$q."<br>";
		echo "Not inserted";		
	}
?>