<html>
<head>
<script type="text/javascript">
		function resettxt(myfield) {
			document.form1[myfield].value = document.form1[myfield].defaultValue
		}
		
		function ClearForm(){
			document.form1.reset();
		}

		function validateForm1(fieldname) {
			var x=document.form1[fieldname].value;
			if (x==null || x=="0") {
				alert("Select location.");
				return false;
			}
			return true;
		}
	</script>
	<style type="text/css">
		body { 
			margin: 0; padding: 10px;
			font: 1em "Lucida Sans Unicode", Verdana;
			letter-spacing: 0.1em;
		}
		h1 { font-size: 2.7em; font-weight: 100; }
		form {margin-left: 23%; margin-top: 5em;}
		select { 
			padding: 1px 0px 1px 5px;
			font-weight: bold;
			font-size: 1em;
			border: #666 1px solid;
			border-radius: 4px;
			text-align: left;
		}
		input {
			color: #000;
			font-size: 0.9em;
			letter-spacing: 0.1em;
			padding: 4px 12px 4px 12px;
			font-weight: bold;
			background: #eee;
			border: #666 1px solid;
			border-radius: 4px;
			text-align: center;
			
		}
	</style>
</head>
<body>
<h1>Map Updater</h1>
From the drop-down menu select an aera that had been covered with literature and other resources and press 'Update' button. When you finish, click on the top right corner icon to close this form.
<HR>
<?php
$saving = $_REQUEST['updating'];
if ($saving == 1) {
	$file = "gospel.txt"; 

	//collect information from form
	$name = $_POST['name'];
	$curdate = date('Y').'-'.date('m');

	// get the file contents, assuming the file to be readable (and exist) 
	$contents = file_get_contents($file); 
	// escape special characters in the query 
	$pattern = preg_quote($name, '/'); 
	// finalise the regular expression, matching the whole line 
	$pattern = "/^.*$pattern.*\$/m"; 
	// search, and store all matching occurences in $matches 
	if(preg_match_all($pattern, $contents, $matches)){ 
		$found = implode("\n", $matches[0]); 
		$field = explode ('|', $found);
		$houses = $field[3];
		$location = $field[2];
	} 
	else{ 
	}

	$entry = $curdate.'|'.$name.'|'.$location.'|'.$houses.'|';
	
	//memove maching line
	$fname = "gospel.txt"; 
	$lines = file($fname); 
	foreach($lines as $line) if(!strstr($line, $name)) $out .= $line;  
	$f = fopen($fname, "w");  
	fwrite($f, $out);  
	fclose($f);
	
	// remove slashes
	$data = "\n$entry";
	$corrected = stripslashes($data);
		
	//open the file
	$fh = fopen("gospel.txt", "a");
		
	//write the file
	fwrite($fh, $corrected);
	
	//close the file
	fclose($fh);
	
	//Remove blank lines
	$str=file_get_contents("$fname");
	$str = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);
	file_put_contents("$fname", "$str");
}

echo '
	<form name="form1" method="post" action="mapupdate.php?updating=1">
	<select name="name" id="plots">
		<option value="0" selected>Select Area</option>';

$fp = fopen('gospel.txt','r');
while (!feof($fp)) {
	$line = fgets($fp, 1024); //use 2048 if very long lines
	$field = explode ('|', $line);
	echo '
	<option value="'.$field[1].'">'.$field[1].'</option>';
}

fclose($fp);

echo '
	</select>
	<input id="button" type="submit" name="Submit" value="UPDATE" onclick="return validateForm1(\'name\');return false;parent.location=\'mapupdate.php\'">
	</form>
	';
?>
</body>
</html>