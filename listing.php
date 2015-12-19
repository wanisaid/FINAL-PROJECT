<?php
include('db.php');
// the deleting code 
if(isset($_GET['delete_id'])){
$sql = "DELETE FROM subjects WHERE id = '{$_GET['delete_id']}'";
$query = mysql_query($sql);
header("Location: $_SERVER[PHP_SELF]");
}
?>
<html>
<head>
<title>The subject record</title>
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
  window.location.href='editing.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='listing.php?delete_id='+id;
 }
}
</script>
</head>

<body>
<center>
<div id="header">
 <div id="content">
    <label>SUBJECTS VIEW DETAILS</label>
  </div>
</div>
<div id="body">
 <div id="content">
 <a href="subject.php"><button class="style1">Add new courses</button></a><br />
 <a href="home.php"><button class="style1">back to home page</button></a>
<table border="1">
<tr>
<td>Id</td>
<td>COURSE DESCRIPTION</td>
<?php
$sql = "SELECT * FROM subjects";
$query = mysql_query($sql);
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['description'];?></td>
 <td><a href="javascript:edit_id('<?php echo $row['id'];?>')"><img src="Edit.png" align="EDIT" width="25" height="25" /></a></td>
 <td><a href="javascript:delete_id('<?php echo $row['id'];?>')"><img src="Delete.png" align="DELETE" width="25" height="25" /></a></td>
</tr>
<?php
}
?>
</tr>
</table>
</body>
</html>
