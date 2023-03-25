<?php
echo '
  <form method="post">
    <button type="submit" name="contact">Contact Us</button>
    <button type="submit" name="aboutus">About Us</button>
  </form>
  <h3>Welcome to Home Page!
  ';

if(isset($_POST['contact'])) {
  // Code to execute when the contact button is clicked
  header("Location: contact.php");
  exit();
}

if(isset($_POST['aboutus'])) {
  // Code to execute when the about us button is clicked
  header("Location: about.php");
  exit();
}

