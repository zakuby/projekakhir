<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to PhotoBook</title>

</head>
<body>

<div id="container">
  <form action="../user/login" method="post">
    <!--Nama :<input name="nama"></input><br> -->
    Username :<input name="username"></input><br>
    Password :<input type="password" name="password"></input><br>
    <!--Email :<input name="email"></input><br>-->
    <input type="submit" value="Login"></input>
  </form>
</div>

</body>
</html>