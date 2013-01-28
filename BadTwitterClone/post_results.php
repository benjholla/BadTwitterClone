<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="/BadTwitterClone/favicon.ico">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>BadTwitterClone - Post</title>
</head>
<body>
<center>
<h1>BadTwitterClone Post <img border="0" src="/BadTwitterClone/images/sadbird.png" alt="Bad Twitter Clone Logo" width="130" height="110" /></h1>
</center>
<br />
<center><a href="/BadTwitterClone/">Home</a></center>
<br />
<?php
function postmessage($username, $message)
{
  //open connection to the database, assumes the database is on the same machine
  //as the machine executing this PHP code (local machine)
  //edit config.php to change the machine preferences
  include 'config.php';
  include 'opendb.php';
  
  //assumes there is already a databse in the mysql databse called "badtwitterclone"
  $dbname = 'badtwitterclone';
  mysql_select_db($dbname);
  
  //inserts data into the table
  mysql_query("INSERT INTO Tweets (Username, Tweet) VALUES ('$username', '$message')");
  echo "<p><b>Thanks " . $username . ", your message has been posted!</b></p>";

  //close connection to the database
  include 'closedb.php';
}

if (isset($_COOKIE["Username"])){
  $username=$_COOKIE["Username"];
  if(strlen($_POST["message"]) != 0){
    // message is in a POST parameter
    $message = $_POST["message"];
	postmessage($username, $message);
  } else if(strlen($_GET["message"]) != 0){
    // message is in a GET parameter (in the URL)
    $message = $_GET["message"];
	postmessage($username, $message);
  } else {
    echo "A 'message' parameter must be passed as either a POST or GET parameter.";
  }
} else {
   echo 'You must be logged in to view this page.';
}
?>
<br />
</body>
</html>