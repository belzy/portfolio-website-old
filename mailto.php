<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8" />
	</head>
	
	<body>
		<?php
			$to = "brandon.g.elzy@brandonelzy.com";
			$fromName = $_POST['name'];
			$fromEmail = $_POST['email'];
			$subject = "";
			if(isset($_POST['phone'])) $phone = $_POST['phone'];
            else $phone = "";
			$message = wordwrap($_POST['message'], 70);
			$header = "To: " . $to . PHP_EOL . "From: " . $fromName . PHP_EOL . $fromEmail . PHP_EOL . $phone . PHP_EOL . PHP_EOL;
		
			if (isset($_POST['submit']))
			{
				mail($to, $subject, $header . $message);
				echo "Your message was sent successfully";
			}
			else
				echo "Your message could not be sent";
		?>
	</body>
</html>
