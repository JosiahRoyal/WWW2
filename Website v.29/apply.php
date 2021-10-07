<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $region = $_POST['region'];
  $message = $_POST['message'];

  $mailTo = "contact@josiahroyal.com";
  $headers = "From: ".$mailFrom;
  $txt = "Application from ".$name.".\n\n".$region;

  mail($mailTo, $txt, $message, $headers);
  header("Loction: indx.php?mailsend");
}
