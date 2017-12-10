<!Doctype html>
<html>
<head>
<title>Register2</title>
<style>
			body{
				cellspacing:0px;
				cellpadding:0px;
				margin-top:0px;
				margin-left:0px;
				margin-right:0px;
				margin-bottom:0px;
			}	
			table{
				cellspacing:0px;
				cellpadding:0px;
				margin-top:0px;
				margin-left:0px;
				margin-right:0px;
				background-color:#87ceeb;
				margin-bottom:0px;
			}
		</style>
</head>
<body>
<img src="un.png">
<form action="Insertion2.php" method="POST">
<table cellpadding="0" cellspacing="0" border="2" align="center"  style="margin-left:190px;background-color:cyan" width="1000px" height="400px" >
	<th colspan="4"><p style="font-size:25px">Personal Information_2</p></th>
	<tr> <td> Address: </td> <td> <textarea rows="3" column="290"  name="addres" required /> </textarea></tr>
<tr> <td>District</td> <td> <input type="text" name="dis" required/ > </td> </tr>
<tr>  <td> City :</td> <td> <input type="text" name="city" requied/> </td> </tr>
<tr> <td> State: </td> <td> <input type="text" name="state" requied/> </td> </tr>
<tr> <td> Pincode: </td> <td> <input type="text" name="pin" requied/> </<td> </tr>
<tr> <td colspan="2"> Domicial:   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="dom" value="Yes">Yes
                                                 <input type="radio" name="dom" value="no">No 
												 <p><small><small> Yes,If you are a Kashmir  Migrant?<br/>Otherwise ,No</small></small>
 <p align="right" style="margin-right:20px"><input type="Submit" value="Proceed">  <input type="button" value="Cancel"></p>
 
 </td></tr>
												 </table>
											</form>
								</body>
</html>