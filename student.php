<?php
 include('db.php');
 if(isset($_POST['add'])){
// Assigning the variables
$a = $_POST['ids'];
$b = $_POST['names'];
$c = $_POST['lname'];
$d = $_POST['ages'];
$e = $_POST['genderr'];
$f = $_POST['addresses'];
$g = $_POST['emails'];
$h = $_POST['contacts'];
$i = $_POST['regs'];
// the next is the insert mysql command to input data to the database
$sql = "INSERT INTO tblstudent(id,firstname,lastname,age,gender,address,email,contact,Reg_no) 
   VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
$query = mysql_query($sql);
if(mysql_query($sql))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='list.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<html>
<head>
<title>
The student info page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color:#FF3300;
}

-->
</style>
</head>
<body>
<center>
<div id="header">
 <div id="content">
    <label>Welcome To The Student Information Page</label>
  </div>
</div>
<div id="body">
 <div id="content">
 <a href="list.php"><button class="style1">back to view page</button></a><br />
 <a href="home.php"><button class="style1">back to home page</button></a>
<form action="" method="post">
<table>
<tr>
<td>Fill The Following Form To input Data</td>
<td></td>
</tr>
<tr>
<td>Firstname</td>
<td><input type="text" name="names" value="" /><input type="hidden" name="ids" /></td>
</tr>
<tr>
<td>Lastname</td>
<td><input type="text" name="lname" value=""/></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="ages" value=""/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" name="genderr" value=""/></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="addresses" value=""/></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="emails" value=""/></td>
</tr>
<tr>
<td>Contact</td>
<td><input type="text" name="contacts" value=""/></td>
</tr>
<tr>
<td>Registration No.</td>
<td><input type="text" name="regs" value=""/></td>
</tr>
<tr>
<td><center><button type="submit" name="add"><strong>Add</strong></button></center></td>
<td><button type="reset" name="reset"><strong>Reset</strong></button></td>
</tr>
</table>
</form>
</div>
</div>
</center>
</body>
</html>