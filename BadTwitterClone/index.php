<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="/BadTwitterClone/favicon.ico">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>BadTwitterClone - Home</title>
</head>
<body>
<center>
<h1>BadTwitterClone <img border="0" src="/BadTwitterClone/images/sadbird.png" alt="Bad Twitter Clone Logo" width="130" height="110" /></h1>
</center>
<br />
<?php
if (isset($_COOKIE["Username"])){
  echo '<h1>Welcome ' . $_COOKIE["Username"] . '!<h1>';
  echo '<h2><i>What do you want to do?</i></h2>';
  echo '<ul>';
  echo '<li><h3><a href="/BadTwitterClone/all_tweets.php">Read All Tweets</a></h3>';
  echo '<li><h3><a href="/BadTwitterClone/all_users.php">Read User Tweets</a></h3></li>';
  echo '<li><h3><a href="/BadTwitterClone/my_tweets.php">Read My Tweets</a></h3></li>';
  echo '<li><h3><a href="/BadTwitterClone/post.php">Post Tweet</a></h3></li>';
  echo '<li><h3><a href="/BadTwitterClone/logout.php">Logout</a></h3></li>';
  echo '</ul>';
}
else {
  echo '<h1>Welcome Guest!</h1>';
  echo '<h2><i>What do you want to do?</i></h2>';
  echo '<ul>';
  echo '<li><h3><a href="/BadTwitterClone/all_tweets.php">Read All Tweets</a></h3>';
  echo '<li><h3><a href="/BadTwitterClone/all_users.php">Read User Tweets</a></h3></li>';
  echo '<li><h3><a href="/BadTwitterClone/register.html">Register Account</a></h3></li>';
  echo '<li><h3><a href="/BadTwitterClone/login.html">Login</a></h3></li>';
  echo '</ul>';
}
?>
<br />
<br />
<br />
<center><a href="/BadTwitterClone/policy.html">Privacy Policy</a> - <a href="/BadTwitterClone/terms.html">Terms of Use</a></center>
</body>
</html>