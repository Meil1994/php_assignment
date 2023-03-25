<?php
echo '
  <form method="post">
    <button type="submit" name="home">Home</button>
    <button type="submit" name="contact">Contact Us</button>
  </form>
  <h3>Welcome to About Us Page!
  <br/>
  <button onclick="alert(\'Hello! I welcome you again to the About Us Page..\')">Click Me</button>
  ';

if(isset($_POST['home'])) {
  // Code to execute when the contact button is clicked
  header("Location: home.php");
  exit();
}

if(isset($_POST['contact'])) {
  // Code to execute when the about us button is clicked
  header("Location: contact.php");
  exit();
}