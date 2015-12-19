<?php
include 'db.php';

//check if loggedin in already
if(loggedin()){
 header("Location: home.php");
  exit();
} 
if($_POST['login']){
//get data
$username = $_POST['username'];
$password = $_POST['password'];
$rememberme = $_POST['rememberme'];

if($username&&$password)
{

   $login = mysql_query("SELECT * FROM login WHERE username='$username'");
   while($row = mysql_fetch_assoc($login))
   {
        $db_password = $row['password'];
		if(($password)==$db_password){//md5
		   $loginok = TRUE;
		}else{
		     $loginok = FALSE;
		}
		
		if($loginok==TRUE){
		
		     if($rememberme=="on"){
			     setcookie("username",$username,time() +7200);
			 }else if($rememberme==""){
			 
			     $_SESSION['username']=$username;
				 header("Location: home.php");
			     exit();
			 }
		
		}else{
		    die("incorrect username/password combination");
		}
   }
}
}
?>
<html>
<head>
<title>the login page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style type="text/css">
<!--
.style3 {
	font-size: 24px;
	font-family: "Times New Roman", Times, serif;
}
-->
</style>
</head>
<body background="img4.jpg">
<center>
<div id="header">
 <div id="content">
    <label><center>WELCOME TO JUBA UNIVERSITY ADMISSION SYSTEM</center></label>
    </div>
</div>
<form action="login.php" method="POST" />
<span class="style3">Username:</span><br />
<input type="text" name="username" /><p />
<span class="style3">Password:</span><br />
<input type="password" name="password" /><p />

<input type="checkbox" name="rememberme" /> Remember me<br />
<input type="submit" name="login" value="login">
</form>
<a href="register.php"><button>Create New Account</button></a>
</div>
</div>
</center>
</body>
</html>