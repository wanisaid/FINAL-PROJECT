<?php
 include('db.php');
 // calling items from the database
if(isset($_GET['edit_id'])){
$sql = "SELECT * FROM tblstudent WHERE id='{$_GET['edit_id']}'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
}

if(isset($_POST['update'])){
// Assigning the variables
$a = $_POST['id'];
$b = $_POST['names'];
$c = $_POST['lname'];
$d = $_POST['ages'];
$e = $_POST['genderr'];
$f = $_POST['addresses'];
$g = $_POST['emails'];
$h = $_POST['contacts'];
$i = $_POST['regs'];
//the next is the updating command or code
$sql = "UPDATE tblstudent SET id='$a',firstname='$b',lastname='$c',age='$d',gender='$e',address='$f',email='$g',contact='$h',Reg_no='$i' WHERE id = '{$_GET['edit_id']}'";
$query = mysql_query($sql);
  // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='list.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['reset']))
{
 header("Location: list.php");
}
?>
<html>
<head>
<title>The student info page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
<form action="" method="post">
<table>
<tr>
<td>Fill The Following Form To input Data</td>
<td></td>
</tr>
<tr>
<td>Firstname</td>
<td><input type="text" name="names" value="<?php echo $row['firstname'];?>" /><input type="hidden" name="id" value="<?php echo $row['id'];?>" /></td>
</tr>
<tr>
<td>Lastname</td>
<td><input type="text" name="lname" value="<?php echo $row['lastname'];?>"/></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="ages" value="<?php echo $row['age'];?>"/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" name="genderr" value="<?php echo $row['gender'];?>"/></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="addresses" value="<?php echo $row['address'];?>"/></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="emails" value="<?php echo $row['email'];?>"/></td>
</tr>
<tr>
<td>Contact</td>
<td><input type="text" name="contacts" value="<?php echo $row['contact'];?>"/></td>
</tr>
<tr>
<td>Registration No.</td>
<td><input type="text" name="regs" value="<?php echo $row['Reg_no'];?>"/></td>
</tr>
<tr>
<td><center><button type="submit" name="update"><strong>Update</strong></button></center></td>
<td><button type="submit" name="cancel"><strong>Cancel</strong></button></td>
</tr>
</table>
</form>
    </div>
</div>
</center>
</body>
</html>