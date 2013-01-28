<?php
ob_start(); // Initiate the output buffer, cookies should be set before rendering html, so buffer we should use a buffer
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="/BadTwitterClone/favicon.ico">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>BadTwitterClone - Login</title>
</head>
<body>
<center>
<h1>BadTwitterClone Login <img border="0" src="/BadTwitterClone/images/sadbird.png" alt="Bad Twitter Clone Logo" width="130" height="110" /></h1>
</center>
<br />
<center><a href="/BadTwitterClone/">Home</a></center>
<br />
<?php
//get POST information from login form (previous page)
$username=$_POST["username"];
$password=$_POST["password"];

//open connection to the database, assumes the database is on the same machine
//as the machine executing this PHP code (local machine)
//edit config.php to change the machine preferences
include 'config.php';
include 'opendb.php';

//assumes there is already a databse in the mysql databse called "badtwitterclone"
$dbname = 'badtwitterclone';
mysql_select_db($dbname);

//get user data from the users table (assumes users table already exists!)
$result = mysql_query("SELECT * FROM Users WHERE Username='" . $username . "'");

// authenticate user
$login = false;
while($row = mysql_fetch_array($result))
{
  if($row['Username']==$username && $row['Password']==$password){
	$login = true;
  }
}

//if username exits and password is correct set cookie, else inform user
if($login)
{
  // set an active cookie for this username
  setcookie("Username", $username, time()+3600);
  echo "Welcome $username. You are now logged in.";
}
else
{
  // set the cookie to be expired
  setcookie("Username", $username, time()-3600);
  echo 'Login failed.  <a href="/BadTwitterClone/login.html">Try again</a>.';
}

//close connection to the database
include 'closedb.php';
?>
<?php
ob_end_flush(); // Flush the output from the buffer, and stop buffering html
?>
<br />
</body>
</html>