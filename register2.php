<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo '<h1>Welcome ' . $_POST["firstname"] . $_POST["lastname"] . '</h1><br>';
    echo '<h1>Your Email Address is ' . $_POST["email"] . '</h1><br>';
    echo '<h1>Your Password has ' . strlen($_POST["password"]) . '</h1><br>';

    if($_POST["password"] == $_POST["confirmpassword"])
    {
      echo 'Your password is equal!<br>';
    }
    else
    {
      echo 'Not Equal<br>';
    }
    
  }
?>