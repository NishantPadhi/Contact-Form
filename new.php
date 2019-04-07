<?php
if(isset($_POST['submitBtn']))
{
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$mailform=$_POST['mail'];
	$message=$_POST['message'];

	$mailTo="srinu@connectingfreshers.com";
	$headers="From: ".$mailFrom;
	$txt= "You have received an e-mail from ".$name.".\n\n".$message;


	mail($mailTo,$subject,$txt,$headers);
	header("Location: index.php?mailsend");
}