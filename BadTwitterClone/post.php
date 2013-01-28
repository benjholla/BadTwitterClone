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

<script type="text/javascript">
function check(){
if(!checkpost()){return false;}
}
</script>

<script>
function checkpost(){
if (document.registration.message.value.length==0){
alert("Please enter a message to post.");
return false;
}
if (document.registration.message.value.length>140){
alert("Your message cannot be longer than 140 characters.");
return false;
}
return true;
}
</script>

<br />

<?php
if (isset($_COOKIE["Username"])){
  echo '<form name=registration action="post_results.php" method="post" onSubmit="return check()"><span style="font-weight: bold;">';
  echo '<span style="font-weight: bold;">Message:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />';
  echo '<textarea cols="50" rows="5" name="message"></textarea>';
  echo '<br />';
  echo '<br />';
  echo '<input value="Post Message" type="submit"></form>';
}
else {
  echo 'You must be logged in to view this page.';
}
?>

<br />
</body>
</html>