<?php

?>

<link rel="stylesheet" href="css/signup.css"> 

<section class="signup-form">
<div class="login-wrapper">
<form action="conndtbase.php" class="form" method="post">
  <h2>Signup</h2>
  <div class="input-group">
    <input type="text" name="fullname" id="fullname" >
    <label for="fullname">Full name</label>
  </div>
  <div class="input-group">
    <input type="text" name="username" id="username" >
    <label for="username">Username</label>
  </div>
  <div class="input-group">
    <input type="text" name="email" id="email">
    <label for="email">Email</label>
  </div>
  <div class="input-group">
    <input type="password" name="password" id="password">
    <label for="password1">Password</label>
  </div>
    <div class="input-group">
    <input type="password" name="cpassword" id="cpassword" >
    <label for="cpassword">Repeat password</label>
  </div>
  <input type="submit" value="Signup" class="submit-btn">
  <div class="right t-c">Already have an <a href="login.php">account?</div>
</form>
</section>
