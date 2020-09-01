<?php 

$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

if (empty($name) || empty($email) || empty($message))
{
	echo "Please fill all the fields";
}
else 
{
	mail("8elajar@webname.com", "Tanggapan", $message,"From : $name <$email>");
	echo "<script type='text/javascript'>alert('Your Message Success');
		window.history.log(-1);
	</script>";
}
?>