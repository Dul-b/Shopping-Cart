<?php


$email = '';


if(isset($_POST['submit'])) 
{

$email=$_POST['email'];
   

// send email using PHP's built in 
// command, mail()
if(mail('k5844.kushan@gmail.com','Sign Up for a Newsletter',$email))								
		{
			
			echo "<script type='text/javascript'>alert('Thank you for contacting us');</script>";
		}
		else
		{
			
			echo "<script type='text/javascript'>alert('There is an Error');</script>";
		}
		
		$email = '';
		
}
?>