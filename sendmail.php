<?php

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $subject=$_POST['subject'];
  $mailFrom=$_POST['mail'];
  $message=$_POST['message'];


  $mailTo='mrezan181040@bscse.uiu.ac.bd';
  $headers= "From: ".$mailFrom;
  $text="You have received a mail from".$name ."\n\n.".$message;

  mail($mailTo,$subject,$text,$headers);

  header('Location: index.php');

}



?>