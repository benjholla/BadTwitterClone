<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="/BadTwitterClone/favicon.ico">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>BadTwitterClone - Registration</title>
</head>
<body>
<center>
<h1>BadTwitterClone Registration <img border="0" src="/BadTwitterClone/images/sadbird.png" alt="Bad Twitter Clone Logo" width="130" height="110" /></h1>
</center>
<br />
<center><a href="/BadTwitterClone/">Home</a></center>
<br />

<?php
//get POST information from register form (previous page)
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email1"];

//open connection to the database, assumes the database is on the same machine
//as the machine executing this PHP code (local machine)
//edit config.php to change the machine preferences
include 'config.php';
include 'opendb.php';

//assumes there is already a databse in the mysql databse called "badtwitterclone"
$dbname = 'badtwitterclone';
mysql_select_db($dbname);

//get all data from the users table (assumes users table already exists!)
$result = mysql_query("SELECT * FROM Users");

//search for existing username
$usernamefound = "false";
while($row = mysql_fetch_array($result))
  {
  $name = $row['Username'];
   if ($name==$username)
	{
	 $usernamefound="true";
	}   
 }

//if username exits inform user, else create new user
if($usernamefound=="true")
{
  echo "<p><b>Username already exists!</b></p>";
  echo "<p><b>Username: \"" . $username . "\" could not be registered.</b></p>"; 
  echo "<p><b>Please try again using a different Username.</b></p>"; 
  echo "<form name=return action=\"register.html\"><input value=\"Try Again\" type=\"submit\"></form>";
}
else
{
  //inserts data into the table
  mysql_query("INSERT INTO Users (Username, Password, Email) 
  VALUES ('$username', '$password', '$email')");
  echo "<p><b>Success!</b></p>";
  echo "<p><b>Username: \"" . $username . "\" has been registered.</b></p>";
  echo '<p>You can now <a href="/BadTwitterClone/login.html">login</a>.</p>';
}

//close connection to the database
include 'closedb.php';
?>

<br />
</body></html>