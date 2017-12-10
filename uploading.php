<!Doctype html>
<html>
<head>
<title>Upload</title>
<style>
			body{
				cellspacing:0px;
				cellpadding:0px;
				margin-top:0px;
				margin-left:0px;
				margin-right:0px;
				margin-bottom:0px;
			}	
			input{
				align:center;
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
<form action="insertion4.php" method="POST" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="2" align="center"  style="margin-left:190px;background-color:cyan" width="1000px" height="400px" >
	<th colspan="4"><p style="font-size:35px"><u>Uploading Photo/Signature</u></p></th>
<tr> <td><p style="font-size:25px"> <b>Upload Photo</b></p>
	<p align="center"><input type="file" name="upload_photo"></p>
	 <p> <a href="upload.php"><small><small>Guidelines for Photo Uploading</small></small></a>	</p>	</tr>
	
<tr> <td><p style="font-size:25px"> <b> Upload Signature 	</b></p>
		<p align="center"><input type="file" name="upload_sign"></p>
	 <p> <a href="upload.php"><small><small>Guidelines for Signature Uploading</small></small></a> </p> </td></tr>
														</table>
	 
 <p align="right" style="margin-right:180px"><input type="Submit" value="Proceed">  <input type="button" value="Cancel"></p>
											</form>
								</body>
</html>
