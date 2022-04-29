<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="Author" content="Grzegorz Rekowski" />
	<meta name="robots" content="noindex,nofollow" />
	<style type="text/css">
		body {
			margin: 0px;
			padding: 0px;
			background-color: #222521;
		}
		form {
			margin: 0px;
			padding: 0px;
		}
		input {
			padding: 3px;
			font-family: "Century Gothic", "Lucida Sans Unicode", Arial, Helvetica, sans-serif;
			letter-spacing: 0.07em;
			width: 98%;
			height: 14px;
			border: 1px solid #222521;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			font-size: 0.7em;
			color: #aaaaaa;
			font-style: italic;
			font-weight: 550;
		}
		input:focus {
			border: 2px solid #bcd18b;
			color: #222222;
			font-style: normal;
			font-weight: 330;
		}
		form input#button {
			width: 50px;
			display: none;
		}
	</style>
</head>
<body>
<?php
  $saving = $_REQUEST['updating'];
  if ($saving == 1) { 
    $data = $_POST['data'];
	$file = "users.txt"; 
	
	//collect old entries
	$fh = fopen($file, 'r');
	$olddata = fread($fh, filesize($file));
	fclose($fh);
	
	//collect information from form
	$newscontent = $_POST['content'];
 
	// make it in an order
	$data = "$newscontent\n";
	$corrected = stripslashes($data);
	
	//open the file
	$fh = fopen("users.txt", "w");
	
	//write the file
	fwrite($fh, $corrected);
	fwrite($fh, $olddata);

	//close the file
	fclose($fh);
	
	// send email notofocation about new entry
	$to = "grekowski@gmail.com, colmbur@gmail.com, andyshanks7@gmail.com";
	$subject = "Elders Panel Notification";
	$body = "Hi,\n\nSomebody had updated a message on Elders Panel.\nLog in to check what's on somebody's mind.\n\nDo not answer to this email, it's just notification.\n\nIf this email appeard in SPAM folder, click NOT SPAM to receive further updates.";
	$headers = "From: elders-panel@ncwbiblefellowship.com\r\n" .
     "X-Mailer: php";
	mail($to, $subject, $body, $headers);
	
	}
	echo '
	<html><form name="form1" method="post" action="signup.php?updating=1">
	<input onfocus="this.value=\'\'" value="Type in your message here and press Enter to submit." autocomplete="off" type="text" name="content"> <input id="button" type="submit" name="Submit" value="send">
	</form></html>
	';
?>
</body>
</html>