
<?php


$email = '';
$price = '';

if(isset($_POST['submit'])) 
{

$email=$_POST['email'];
$price=$_POST['psw'];

// send email using PHP's built in 
// command, mail()
if(mail('k5844.kushan@gmail.com',$price,$email))								
		{
			
			echo "<script type='text/javascript'>alert('Thank you for contacting us');</script>";
		}
		else
		{
			
			echo "<script type='text/javascript'>alert('There is an Error');</script>";
		}
		
		$email = '';
		$price = '';
}
?>

