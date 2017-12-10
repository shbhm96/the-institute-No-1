<?php
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$name=$fn." ".$ln;
$father=$_POST['fthr'];
$mother=$_POST['mthr'];
$dob=$_POST['dob'];
$cate=$_POST['dropdown'];
$hand=$_POST['handy'];
$mobile=$_POST['mobile'];
$email=$_POST['e-mail'];

include('dbcon.php');


$q="INSERT INTO `student`( `Name`, `Mother's Name`, `Father's Name`, `DOB`, `Mobile No`, `E-mail Id`, `Category`, `Physically Handicapped`) 
VALUES ('$name','$father','$mother','$dob','$mobile','$email','$cate','$hand');";
$status=mysqli_query($con,$q);
$q1="SELECT `Roll-No` FROM `student` WHERE `E-mail Id`='email';";
$stats=mysqli_query($con,$q1);
$q2=mysqli_num_rows($stats);
echo "<br>".$q2;
	
if($con)
	echo "Connection Successful!";
 if($status==1)
{
	?>
	<script>	
		window.alert("Record Inserted Successfully");
	</script>	
	<?php
/*	$to=$email;
	$subject="Confirmation Mail ";
	$msg="Your Roll no: $roll+3459200000"."\r\n"."Your Password:$mobile i.e., Your mobile no.";
	$header="From:shbhm96@gmail.com"."\r\n"."Cc:shbhm96@gmail.com";
	
	$mail=mail('$to','$subject','$msg','$header');
	if($mail)
	{		
		?>
		<script>
			window.alert("Check Your Gmail Account");		
		</script>
	<?php
	}
	else
	{
		window.alert("Something Went Wrong\nMail not send properly");*/
		header('location:prsonl_info.php');
	
 }
	else{
	//	header('location:index.php');
	}
	mysqli_close($con);	
?>