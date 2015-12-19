<?php
// session
session_start();
// this the connection to the database
$conn = mysql_connect("localhost","root","");
$db_select = mysql_select_db("grading",$conn);
if(!$db_select)
{
die("database connection failed");
}

//login check function
function loggedin()
{
  if(isset($_SESSION['username'])||isset($_COOKIE['username']))
  $loggedin = TRUE;
  return $loggedin;
}
?>