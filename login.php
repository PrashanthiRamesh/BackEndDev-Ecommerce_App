<?php

include_once("includes/header.php");


// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"])){
 header("location: index.php");
 exit;
}

include_once("includes/database.php");

if(isset($_POST['login'])){
  //validate and sanitize email
  $email=$_POST['email'];
  $select_email_query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($connect,$select_email_query);
  if(!$result){
      echo "email does not exist...";
  }else{   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      if(mysqli_num_rows($result) == 1){
          if(password_verify($_POST['password'],$row['userPassword'])){
          $_SESSION['email'] = $email;
          $_SESSION['loggedin']=true;// Initializing Session
        header("location: index.php");
        }else{
          echo "wrong password";
        }       }
     else{
        echo "Email does not exist";
      }}}    
 
?>

<div class="container">
<form method="post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
</div>


<?php
include_once("includes/footer.php");