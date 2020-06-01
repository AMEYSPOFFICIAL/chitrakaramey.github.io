<?php
// variable setting
$Name = $_REQUEST['Name'];
$Email = $_REQUEST['Email'];
$Message = $_REQUEST['Message'];

//check input fields
if (empty($Name) || empty($Email) || empty($Message)) 
{
	echo "Please Fill All Details";
}
else
{
	mail("ameysathaye.pc@gmail.com", "Website Message", $message , "From: $Name <$Email>");
	echo "<script type='text/javascript'>alert('Your message Sent Successfully');
	window.history.log(-1);

	</script>'';
}
?>
