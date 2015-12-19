<?php
 include('db.php');
 if(isset($_POST['add'])){
// Assigning the variables
$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['pass'];
// the next is the insert command
$sql = "INSERT INTO login(id,username,password) 
   VALUES('$a','$b','$c')";
$query = mysql_query($sql);
if(mysql_query($sql))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='login.php';
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
</head>
<body>
<center>
<div id="header">
 <div id="content">
    <label>Welcome To The User Registering Page</label>
  </div>
</div>
<div id="body">
 <div id="content">
<form action="" method="post">
<table>
<tr>
<td>Fill The Following Form To input Data</td>
<td></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="name" value="" /><input type="hidden" name="id" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="pass" value=""/></td>
</tr>
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