<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="/BadTwitterClone/favicon.ico">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>BadTwitterClone - All Tweets</title>
</head>
<body>
<center>
<h1>BadTwitterClone All Tweets <img border="0" src="/BadTwitterClone/images/sadbird.png" alt="Bad Twitter Clone Logo" width="130" height="110" /></h1>
</center>
<br />
<center><a href="/BadTwitterClone/">Home</a></center>
<br />
<br />


<?php
if (isset($_COOKIE["Username"])){
  echo '<center>';
  echo '<b>Showing the last ten tweets (from ' . $_COOKIE["Username"] . ')</b>';
  echo '<br />';
  echo '<br />';

  //open connection to the database, assumes the database is on the same machine
  //as the machine executing this PHP code (local machine)
  //edit config.php to change the machine preferences
  include 'config.php';
  include 'opendb.php';

  //assumes there is already a databse in the mysql databse called "badtwitterclone"
  $dbname = 'badtwitterclone';
  mysql_select_db($dbname);

  // get the last 10 tweets of current user
  $result = mysql_query("SELECT * FROM Tweets WHERE Username='" . $_COOKIE["Username"] . "' ORDER BY ID DESC");

  echo '<table border="1">';
  echo '<tr>';
  echo '<th>Tweet Message</th>';
  echo '</tr>';

  // iterate over all results
  while($row = mysql_fetch_array($result))
  {
     echo '<tr>';
     echo '<td>' . $row['Tweet'] . '</td>';
     echo '</tr>';
  }

  echo '</table>';

  //close connection to the database
  include 'closedb.php';
}
else {
  echo 'You must be logged in to view this page.';
}
?>
</center>
<br />
</body>
</html>