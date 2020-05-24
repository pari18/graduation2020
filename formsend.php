<?php
include "connect.php";
if(isset($_POST['submit']))
{
	$allowedExts = array("pdf");
$temp = explode(".", $_FILES["pdf_file"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["pdf_file"]["name"];

$folder = 'assignment';
$target_file = $folder.'/'.basename($_FILES['pdf_file']['name']);

move_uploaded_file($_FILES["pdf_file"]["tmp_name"],$target_file);
$sql=mysqli_query($conn,"INSERT INTO mk (pdf_file)VALUES('$upload_pdf')");
if($sql){
	echo "Data Submit Successful";
}
else{
	echo "Data Submit Error!!";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> form</title>
</head>
<body>
	<br>
	<br>
form to be filled.
<br>
<br>
<form action="formsend.php" method="post" enctype="multipart/form-data">
	Id:
	<input type="text" name="id" placeholder="Id">
	<br>
	<br>
 First Name:
<input type="text" name="fname" id="" placeholder="enter your name">
<br>
<br>	
Last Name:
<input type="text" name="lname" id="" placeholder="enter your lastname">
<br>
<br>
<input type="file" name="pdf_file" id="pdf_file" accept="application/pdf "style="font-size:20px; >
    <input type="submit" value="Upload file" name="submit">
    <br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>