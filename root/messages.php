<?php 
session_start();

// To password protect the site comment the line below
$_SESSION['messages'] = TRUE;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
	$password = strtolower(trim(stripslashes(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING))));
	
	if ($password == 'ncwbf') {
		
		$_SESSION['messages'] = TRUE;
		header("Location:messages.php");
	
	} else {
	
		$error_message = "<span style='color: #ff5686; font-size: 0.9em;'>Your password weren't correct. Please try again.<br /><br /></span>";
		
	}
	
}

include "common.php"; 

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="robots" content="index,follow" />
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300|Open+Sans+Condensed:300,700,300italic|PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css+js/jquery.countdown.css"> 
	<script type="text/javascript" src="css+js/jquery.plugin.min.js"></script>
	<script type="text/javascript" src="css+js/jquery.countdown.min.js"></script>	
	<link rel="stylesheet" href="css+js/style.css" />
	<style type="text/css">
		
		form {
			text-align: center;
			margin-top: 5em;
		}
		input {
			color: #BBB;
			font-family: inherit;
			font-size: 1em;
			width: 14em;
			padding: 0.4em;
			margin: 0.6em auto;
			border: solid thin #aaa;
			border-radius: 5px;
			-webkit-border-top-left-radius: 	5px;
			-webkit-border-top-right-radius: 	5px;
			-webkit-border-bottom-left-radius: 	5px;
			-webkit-border-bottom-right-radius: 5px;
			box-sizing: 						border-box;
			-moz-box-sizing: 					border-box;
			-webkit-box-sizing:					border-box;
			-webkit-appearance: 				none;
		}
		input[type='submit'] {
			color: 				#fff;
			background-color: 	#93b0c2;
			background: 		-webkit-linear-gradient(top, #cccccc 0%,#777777 100%); /* Chrome10+,Safari5.1+ */
			background: 		-webkit-gradient(linear, left top, left bottom, from(#cccccc), to(#777777));
			background: 		linear-gradient(to bottom, #cccccc 0%, #777777 100%); /* W3C */
		}
		p.back_link {
			margin:				3em 0;
		}
		.back_link a {
			background-color: 	#93b0c2;
			background: 		-webkit-linear-gradient(top, #888 0%,#444 100%); /* Chrome10+,Safari5.1+ */
			background: 		-webkit-gradient(linear, left top, left bottom, from(#888), to(#444));
			background: 		linear-gradient(to bottom, #888 0%, #444 100%); /* W3C */
			border-radius: 		5px;
			padding:			1em;
			color:				#fff;
			border:				none;
		}
		.back_link a:hover {
			background: 		-webkit-linear-gradient(top, #444 0%,#888 100%); /* Chrome10+,Safari5.1+ */
			background: 		-webkit-gradient(linear, left top, left bottom, from(#444), to(#888));
			background: 		linear-gradient(to bottom, #444 0%, #888 100%); /* W3C */
			color: #fff;
		}
	</style>
	<script type="text/javascript" src="css+js/scripts.js"></script>
	<!-- Google analytics code. Include in every page to be tracked. -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-8476785-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>
<div class="container">
	<div class="wrapper">
		
		<?php echo $heading; ?>
		
		<div class="sidebar">
			
			<?php echo $menu; ?>
			
		</div>
		<div class="content">
			<h2 class="teaching" style='text-transform: none;'>messages <span style="font-size:small;">online</span></h2>
			
			<?php 
				
				if (isset($_SESSION['messages']) && $_SESSION['messages'] == TRUE) {
					
					$action = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING);
					$target = filter_input(INPUT_GET, 't', FILTER_SANITIZE_STRING);
					if ($action == 'listen') {
						
						// listen file section
						
						$directory  = "media/";
						$fullPath = $directory . $target;

						if (file_exists($fullPath)) { 
	
							$ext = pathinfo($target, PATHINFO_EXTENSION);
							if ($ext == 'mp3' || $ext == 'MP3') {
								
								// include getID3() library (can be in a different directory if full path is specified)
								require_once('getid3/getid3.php');
				
								// Initialize getID3 engine
								$getID3 = new getID3;
								
								$ThisFileInfo = $getID3->analyze($fullPath);
								getid3_lib::CopyTagsToComments($ThisFileInfo);
								
								echo "<h4>Title: " . implode('<BR>', $ThisFileInfo['comments_html']['title']) . "</h4>";
								echo "<h4>Speaker: " . implode('<BR>', $ThisFileInfo['comments_html']['artist']) . "</h4>";
								echo "<h4>Lenght: " . $ThisFileInfo['playtime_string'] . "</h4>";
								
								echo "
									<audio controls preload='auto' style='width: 96%;'>
										<source src='" . $fullPath . "' type='audio/mpeg'>
										Your browser does not support the audio element.
									</audio>
									<p class='back_link'><a href='javascript:history.back();'>Show all files</a></p>
								";
							}
						}

					} else {
						
						// List files in media folder in alphabetical order
						
						echo "<div style='overflow: auto; text-align: left;'>
									<style>
										
										.listfiles {
											font-size: 1.0em;
											margin: 0;
											padding: 0;
											border-collapse: collapse;
											min-width: 60%;
											vertical-align: middle;
										}
										.listfiles tr:hover {
											background-color: #fafafa;
										}
										.listfiles a {
											border: none;
											font-size: 1.2em;
											margin: auto 1.1em;
										}
										
									</style>
									
								</div>";
							
						
						$directory="media";
						$handler = opendir($directory);
						$allowed_ext =  array('pdf','PDF','mp3','MP3');
					
						while ($file = readdir($handler)) {
							if ($file != '.' && $file != '..' && $file != ".htaccess" && $file != "index.php" && $file != "error_log") {
								$file_ext = pathinfo($file, PATHINFO_EXTENSION);
								if(in_array($file_ext,$allowed_ext) ) {
									$file_names[] = $file;
								}
							}
						}
						closedir($handler);
					
						natsort($file_names);
						$file_names = array_reverse($file_names);
						
						echo "
							<h2>Available Media Files</h2>
							<table class='listfiles'>";
						foreach ($file_names as $file) {
							
							$ext = pathinfo($file, PATHINFO_EXTENSION);
							
							if ($ext == 'pdf' || $ext == 'PDF') {
								$image = "<img src='pics/icon_pdf.png' />";
								$link = "media/" . $file;
							} else if ($ext == 'mp3' || $ext == 'MP3') {
								$image = "<img src='pics/icon_mp3.png' />";
								$link = "messages.php?a=listen&t=" . $file;
							}
							
							$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
							
							echo "<tr><td>" . $image . "</td>
							<td><a href='" . $link . "'>" . str_replace("_", " ", substr($withoutExt, strpos($withoutExt, '_'))) . "</a></td></tr>";
						}
						echo "</table>";
						
					}
					
				} else {
					echo "
						<form action='messages.php' method='post'>
							".$error_message."
							<input type='password' name='password' maxlength='32' placeholder='password' required /><br />
							<input type='submit' name='submit' value='Log in' />
						</form>";
				}
				
			?>
			
			
		
		</div>
		<div style="clear:both;"></div>
	</div>
</div>
</body>
</html>