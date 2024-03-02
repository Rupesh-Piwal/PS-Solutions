
<!-- <?php
	// if (isset($_POST["submit"])) {
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$message = $_POST['message'];
	// 	$human = intval($_POST['human']);
	// 	$from = $email; 
		
		// WARNING: Be sure to change this. This is the address that the email will be sent to
		// $to = 'YOUR_SPECIFIED_EMAIL_ADDRESS'; 
		
		// $subject = "Message from ".$name." ";
		
		// $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		// if (!$_POST['name']) {
		// 	$errName = 'Please enter your name';
		// }
		
		// Check if email has been entered and is valid
		// if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		// 	$errEmail = 'Please enter a valid email address';
		// }
		
		//Check if message has been entered
		// if (!$_POST['message']) {
		// 	$errMessage = 'Please enter your message';
		// }
		// //Check if simple anti-bot test is correct
		// if ($human !== 5) {
		// 	$errHuman = 'Your anti-spam is incorrect';
		// }
 
// If there are no errors, send the email
// if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
// 	if (mail ($to, $subject, $body, $from)) {
// 		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
// 	} else {
// 		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
// 	}
// }
// 	}
?> -->



<?php


//varible setting
 $name= $_REQUEST['name'];
 $email = $_REQUEST['Email'];
 $message = $_REQUEST['Message'];
 $subject = "Message from Contact form !";

 $to ="internpps123@gmail.com";  // change receiving email id 
 
 $content = "Name : ". $name. "\r\nContact email : ". $email. "\r\n \r\nMessage : \r\n \r\n".$message ; // name [break] email [break] message
 


// check input fields
if ( empty($name)|| empty($email)|| empty($message))
{
echo"<script type='text/javascript'>alert('Please fill all correct');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
}


?>