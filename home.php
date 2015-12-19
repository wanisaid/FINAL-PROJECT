<?php
include 'db.php';

if(!loggedin()){
   header("Location: login.php");
   exit();
}
?>
<html>
<head>
<title>The home page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color:#FF3300;
}

-->
</style>
</head>
<body background="img3.jpg">
<center>
<div id="header">
 <div id="content">
    <label><center>WELCOME TO JUBA UNIVERSITY ADMISSION SYSTEM</center></label>
    </div>
</div>
<div id="body">
 <div id="content">
 <h2 class="style1">WELCOME TO THE HOME PAGE</h2>
 <br />
 <a href="student.php"><button class="style1">Add new students</button></a>
 <a href="grade.php"><button class="style1">Add new grades</button></a>
 <a href="view.php"><button class="style1">View grades</button></a><br /><br />
 <a href="subject.php"><button class="style1">Add new course units</button></a>
 <a href="list.php"><button class="style1">View student_info</button></a>
 <a href="listing.php"><button class="style1">View course_units</button></a>
 </div>
</div>
You 're logged in!<p />
<a href="logout.php"><button>Logout</button></a>
</center>
</body>
</html>