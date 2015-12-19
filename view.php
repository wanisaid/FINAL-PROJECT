<?php
include('db.php');
// the deleting code 
if(isset($_GET['delete_id'])){
$sql = "DELETE FROM grading_tbl WHERE id = '{$_GET['delete_id']}'";
$query = mysql_query($sql);
header("Location: $_SERVER[PHP_SELF]");
}
?>
<html>
<head>
<title>The grades record</title>
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
  window.location.href='update.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='view.php?delete_id='+id;
 }
}
</script>
</head>

<body>
<center>
<div id="header">
 <div id="content">
    <label>GRADES VIEW DETAILS</label>
    </div>
</div>
<div id="body">
 <div id="content">
<a href="grade.php"><button class="style1">Add new records</button></a><br />
<a href="home.php"><button class="style1">back to home</button></a>
<table border="1">
<tr>
<td>Id</td>
<td>REGISTRATION NO.</td>
<td>TESTS</td>
<td>COURSEWORK</td>
<td>FINAL EXAMS</td>
<td>TOTAL MARKS</td>
<td>GRADES</td>
<td>COURSE UNIT</td>
<?php
$sql = "SELECT * FROM grading_tbl";
$query = mysql_query($sql);
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['Reg_no'];?></td>
<td><?php echo $row['Tests'];?></td>
<td><?php echo $row['coursework'];?></td>
<td><?php echo $row['final_exam'];?></td>
<td><?php echo $row['total_marks'];?></td>
<td><?php echo $row['grades'];?></td>
<td><?php echo $row['course_unit'];?></td>
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
