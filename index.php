
<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['text'];

  $mailTo = "brichards@desteel.com";
  $headers = "From: ".$email;
  $txt = "You have received an email from ".$name.".\n\n".$text;

  mail($mailto,$text, $headers);
  header("Location: index.php?mailsend")
}



 ?>
