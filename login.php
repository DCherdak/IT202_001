<p>Login: Run me in the browser from your server to try</p>
<form method="POST">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required/>
  <label for="p1">Password:</label>
  <input type="password" id="p1" name="password" required/>
  <input type="submit" name="login" value="Login"/>
</form>

<?php
if(isset($_POST["login"])){
  $email = null;
  $password = null;
  if(isset($_POST["email"])){
    $email = $_POST["email"];
  }
  if(isset($_POST["password"])){
    $password = $_POST["password"];
  }
  $isValid = true;
  if(!isset($email) || !isset($password)){
   $isValid = false; 
  }
  //TODO other validation as desired, remember this is the last line of defense
  //here you'd probably want some email validation, for sake of example let's do a super basic one
  if(!strpos($email, "@")){
   $isValid = false;
    echo "<br>Invalid email<br>";
  }
  if($isValid){
    if(password_verify($password, $password_hash_from_db)){
     echo "<br>Welcome! You're logged in!<br>"; 
    }
    else{
     echo "<br>Invalid password, get out!<br>"; 
    }
  }
  else{
   echo "There was a validation issue"; 
  }
}
?>
