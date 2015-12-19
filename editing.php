<?php
include('db.php');
// calling items from the database
if(isset($_GET['edit_id'])){
$sql = "SELECT * FROM subjects WHERE id='{$_GET['edit_id']}'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
}

if(isset($_POST['update'])){
// Assigning the variables
$a = $_POST['id'];
$b = $_POST['descripting'];
//the next is the updating command or code
$sql = "UPDATE subjects SET id='$a',description='$b' WHERE id = '{$_GET['edit_id']}'";
$query = mysql_query($sql);
if(mysql_query($sql))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='listing.php';
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
?>
<html>
<head>
<title>The Course units page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="header">
 <div id="content">
    <label>Welcome To The Course Units Information Page</label>
    </div>
</div>
<div id="body">
 <div id="content">
<form action="" method="post">
<table>
<tr>
<td>Course description</td>
<td><input type="text" name="descripting" value="<?php echo $row['description'];?>" /><input type="hidden" name="id" value="<?php echo $row['id'];?>" /></td>
</tr>
<tr>
<td><center><center><button type="submit" name="update"><strong>Update</strong></button></center></td>
<td><center><button type="submit" name="cancel"><strong>Cancel</strong></button></td>
</tr>
</table>
</form>
  </div>
</div>
</center>
</body>
</html>