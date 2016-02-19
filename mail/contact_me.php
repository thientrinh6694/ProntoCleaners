<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['apartment']) 		||
   empty($_POST['building'])	||
   empty($_POST['area1'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$apartment = $_POST['apartment'];
$building = $_POST['building'];
$area = $_POST['area1'];
	
// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Customer Plan A Pick-up:  $name";
$email_body = "You have received a new plan from your website plan a pick-up form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nApartment number: $apartment\n\nBuilding Name: $building\n\nArea in Dubai: $area1";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>