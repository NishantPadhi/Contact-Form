<?php
if(isset($_POST['submitBtn']))
{
	$name=$_POST['name'];
	$subject = 'New message from contact form';
	$email=$_POST['email'];
	$num=$_POST['mobile'];
	$message=$_POST['message'];

	$mailTo="srinu@connectingfreshers.com";
	$headers="From: ".$mailFrom;
	$txt= "First name: ".$name.".\n\n"."Email ID: ".$email."\n\n"."Number: ".$num."\n\n"."Message: ".$message;


	mail($mailTo,$subject,$txt,$headers);
	header("Location: index.php?mailsend");
}