<!DOCTYPE HTML>
<html>
	<head>		<title>	Submission Complete	</title></head>
	<script type="text/javascript">
	function sayHello (){
		var x=document.getElementById("b1");
		x.style.display("show");
	}
	function sayhi(){
		var y=document.getElementById("b1");
		y.widndow.print();
	}
	</script>
		
<body>
<?php
	$roll=$_POST['roll_no'];
	$mobile=$_POST['mobile_no'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'clg_db');
	$q="SELECT * FROM `student` WHERE `Roll-No`='$roll'`Mobile No`='$mobile';";
	$run=mysqli_query($con,$q);
	if(mysqli_num_rows($run)<1)
	{
?>
		<script>			window.alert("Invalid roll_no or mobile_no");			</script>
<?php
		header('location:index.php');
	}
	else
	{
		while($data=mysqli_fetch_assoc($run))
		{	
?>
	<table align="center" style="font-size:20px;text-align:center" border="0x" cellpadding="15px" width="100px" height="1000px">
	<tr>  <td colspan="3">  <img src="C:\Users\Shubham\Pictures\photo\un.png">  </td>  </tr>
		<tr>
			<th style="font-size:40px">
				<?php echo $data['Roll-No'];
			</th>
			<td rowspan="5">
			<?php
			$q1="SELECT * FROM `images` WHERE `Roll-No`='$roll';";
			$run1=mysqli_query($con,$q1);
			while($data1=mysqli_fetch_assoc($run1))
			{			
			?>
				<img src="/photos/<?php echo $data1['photo'];?>" style="align:center;height:40px;width:30px">
				<img src="/photos/<?php echo $data1['photo'];?>" style="align:center;height:40px;width:30px">
			<?php
			}			
			?>			
			</td>		
		</tr>
		<tr>	<td>Name</td>	<td><?php echo $data['Name'];?></td>	</tr>
		<tr>	<td>Mothers Name</td>	<td><?php echo $data["Mother's Name"];?></td>	</tr>
		<tr>	<td>Fathers Name</td>	<td><?php echo $data["Father's Name"];?></td>	</tr>
		<tr>	<td>DOB</td>			<td><?php echo $data['DOB'];?></td>				</tr>
		<tr>	<td>Mobile No.</td>		<td><?php echo $data['Mobile No'];?></td>		</tr>
		<tr>	<td>Category</td>		<td><?php echo $data['Category'];?></td>		</tr>
		<tr>	<td>Physically Handicapped</td><td><?php echo $data['Physically Handicapped'];?></td>	</tr>
		<?php
		}
	
		$q="SELECT * FROM `student2` WHERE `Roll-No`='$roll';";
		$run=mysqli_query($con,$q);
		while($data=mysqli_fetch_assoc($run))
		{		
			?>
			<tr>	<td>Address</td>	<td><?php echo $data['Address'];?></td>	</tr>
			<tr>	<td>District</td>	<td><?php echo $data['District'];?></td></tr>
			<tr>	<td>City</td>		<td><?php echo $data['City'];?>		</td></tr>
			<tr>	<td>State</td>		<td><?php echo $data['State'];?>	</td></tr>
			<tr>	<td>Pincode</td>	<td><?php echo $data['Pincode'];?>	</td></tr>
			<tr>	<td>Domicile</td>	<td><?php echo $data['Domicile'];?>	</td></tr>
	<?php
		}
		$q="SELECT * FROM `tenth` WHERE `Roll-No`='$roll';";
		$run=mysqli_query($con,4q);
		while($data=mysqli_fetch_assoc(run))
		{
	?><tr>
		<table cellpadding="15px"  align="center" style="font-size:20px;text-align:center"   width="1000px" height="400px" >
	<tr> <td colspan="6"> <b> <big> <big> <big> <i> <center> <cite> EDUCATIONAL INFORMATION </cite> <center> </i> </big> </big> </big> </big> </b> </td> </tr>
<tr> <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>CLASS/COURSE</b> </td> <td> <b>Roll_No:</b> </td> <td> <b>Percenteage/Grade</b> </td> 
<td> <b> School/College</b> </td> <td> <b>Board/University</b></td><td> <b>Course Type</b></td></tr>
<tr> 
	<td>10<sup>th</sup> </td> 
	<td> <?php echo $data['tenth_roll'];?></td>
	<td><?php echo $data['tenth_per'];?> </td> 
	<td><?php echo $data['tenth_school'];?> <td>
	<td> <?php echo $data['tenth_brd'];?></td> 
	<td><?php echo $data['tenth_type'];?>  </td>
</tr>
<?php
		}
		$q="SELECT * FROM `twelve` WHERE `Roll-No`='$roll';";
		$run=mysqli_query($con,4q);
		while($data=mysqli_fetch_assoc(run))
		{
	?>
<tr> 
	<td> 12<sup>th</sup </td> 
	<td><?php echo $data['twelve_roll'];?>  </td>
	<td><?php echo $data['twelve_per'];?>   </td> 
	<td><?php echo $data['twelve_school'];?>  </td>
	<td><?php echo $data['twelve_brd'];?> 	 </td>
	<td><?php echo $data['twelve_type'];?>  </td>	
</tr>
<?php
		}
		$q="SELECT * FROM `graduation` WHERE `Roll-No`='$roll';";
		$run=mysqli_query($con,4q);
		while($data=mysqli_fetch_assoc(run))
		{
	?>								 																				  
<tr> 
	<td><b>Graduation</b>  </td>
	<td><?php echo $data['Grad_roll'];?>   </td>
	<td><?php echo $data['Grad_per'];?>   </td>
	<td><?php echo $data['Grad_clg'];?>   </td>
	<td><?php echo $data['Grad_uni'];?>   </td>
	<td><?php echo $data['Grad_type'];?>   </td>
</tr>
<?php
		}
	}
?>
</table>
	</tr>
	<tr align="center">
		<p align="center" style="margin-left:30px">
		<input type="checkbox" onclick="sayhello()"> &nbsp&nbspI have declared that all the data inserted being correct upto the bexst of my knowledge,
		If anything found illegal in my documnets,than committee have authority to cancel my application and the committee have the
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp authority to take actions related according to Indian Penal Code
	</tr>
	<tr>
		<td>
			<p align="center" style="margin-top:30px">
		<input type="Submit" style="display:hide" id="b1" onclick="sayhi()">&nbsp&nbsp&nbsp
		<input type="Button" value="Edit">&nbsp&nbsp&nbsp
		<input type="Button" value="Cancel"></p>&nbsp&nbsp&nbsp	</td>
	</tr>
</table>
</body>
</html>	