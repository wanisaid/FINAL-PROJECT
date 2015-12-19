<?php
include('db.php');
// the deleting code 
if(isset($_GET['delete_id'])){
$sql = "DELETE FROM tblstudent WHERE id = '{$_GET['delete_id']}'";
$query = mysql_query($sql);
header("Location: $_SERVER[PHP_SELF]");
}
?>
<html>
<head>
<title>The student record</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color:#FF3300;
}

-->
</style>
<script type="text/javascript">
function edit_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Are You Sure to Delete ?'))
 {
  window.location.href='list.php?delete_id='+id;
 }
}
</script>
</head>

<body>
<center>
<div id="header">
 <div id="content">
    <label>STUDENT VIEW DETAILS</label>
    </div>
</div>
<div id="body">
 <div id="content">
 <a href="student.php"><button class="style1">Add new students</button></a><br />
 <a href="student.php"><button class="style1">back to home page</button></a>
<table border="1">
<tr>
<td>Id</td>
<td>Firstname</td>
<td>Lastname</td>
<td>Age</td>
<td>Gender</td>
<td>Email</td>
<td>Contact</td>
<td>Registration No.</td>
<?php
$sql = "SELECT * FROM tblstudent";
$query = mysql_query($sql);
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['Reg_no'];?></td>
 <td><a href="javascript:edit_id('<?php echo $row['id'];?>')"><img src="Edit.png" align="EDIT" width="25" height="25" /></a></td>
 <td><a href="javascript:delete_id('<?php echo $row['id'];?>')"><img src="Delete.png" align="DELETE" width="25" height="25" /></a></td>
</tr>
<?php
}
?>
</tr>
</table>
  </div>
</div>
</center>
</body>
</html>
