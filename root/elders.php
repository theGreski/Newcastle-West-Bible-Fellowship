<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
	$username = strtolower(trim(stripslashes(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING))));
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	
	if ($username == 'elder' && $password == 'meet1ng') {
		
		$_SESSION['loggedin'] = TRUE;
		header("Location:elders.php");
	
	} else {
	
		$error_message = "<span style='color: #ff5686; font-size: 0.9em;'>Your login details weren't correct. Please try again.<br /><br /></span>";
		
	}
	
}

$action = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING);
$target = filter_input(INPUT_GET, 't', FILTER_SANITIZE_STRING);
if ($action == 'delfile') {
	
	$directory  = "media/";
	$fullPath = $directory . $target;

	if (file_exists($fullPath)) { unlink($fullPath); }
	header("Location: elders.php");
	exit;

}

include "common.php"; 

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="robots" content="noindex,nofollow,noarchive" />
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300|Open+Sans+Condensed:300,700,300italic|PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css+js/jquery.countdown.css"> 
	<script type="text/javascript" src="css+js/jquery.plugin.min.js"></script>
	<script type="text/javascript" src="css+js/jquery.countdown.min.js"></script>
	
	<script type="text/javascript" src="scripts/uploadify/swfobject.js"></script>
	<script type="text/javascript" src="scripts/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
	
	<link rel="stylesheet" href="css+js/style.css" />
	<style type="text/css">
		.content h5 a {
			padding: 0 0.35em;
			border: thin solid;
			border-radius: 4px;
		}
		.content h5 span {
			margin: auto 0.9em;
		}
		#reading { text-align: justify; margin-bottom: 2em;}
		#reading b {
			font-size: smaller;
			font-weight: bold;
			margin: 0 0.8em;
		}
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
			border: solid thin #93b0c2;
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
			background: 		linear-gradient(to bottom, #abc8da 0%, #88a5b7 100%); /* W3C */
			background: 		-webkit-linear-gradient(top, #abc8da 0%,#88a5b7 100%); /* Chrome10+,Safari5.1+ */
			background: 		-webkit-gradient(linear, left top, left bottom, from(#abc8da), to(#88a5b7));
		}
		
		.uploadifyButton {
			background-color: #a0a0a0;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			color: #FFF;
			font: 12px Arial, Helvetica, sans-serif;
			padding: 8px 0;
			text-align: center;
			width: 100%;
		}
		.uploadify:hover .uploadifyButton {
			background-color: #222521;
		}
		.uploadifyQueueItem {
			background-color: #959595;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			font: 11px Verdana, Geneva, sans-serif;
			margin-top: 5px;
			
			padding: 10px;
		}
		.uploadifyError {
			background-color: #FF6666 !important;
		}
		.uploadifyQueueItem .cancel {
			float: right;
			border: none;
		}
		.uploadifyQueue .completed {
			background-color: #E5E5E5;
		}
		.uploadifyProgress {
			background-color: #E5E5E5;
			margin-top: 10px;
			width: 100%;
		}
		.uploadifyProgressBar {
			background-color: #0099FF;
			height: 3px;
			width: 1px;
		}
		#fileUploaded {
			color:				#fff;
			background-color:	#0b0;
			text-align:			center;
			width:				auto;
			margin:				auto 27%;
			padding:			1em;
			border-radius:		3px;
		}
	</style>
	<script type="text/javascript" src="css+js/scripts.js"></script>
	<script type="text/javascript">
	// <![CDATA[
	$(document).ready(function() {
		$('#fileUploaded').hide();
		$('#file_upload').uploadify({
			'uploader'		: '/scripts/uploadify/uploadify.swf',
			'script'		: '/scripts/uploadify/uploadifyb.php',
			'cancelImg'		: '/scripts/uploadify/cancel.png',
			'folder'    	: '/resources',
			'auto'			: true,
			'fileExt'       : '*.pdf;*.PDF',
			'fileDesc'   	: 'Only PDF File',
			'multi'			: false,
			'sizeLimit'		: 2500000,
			'wmode'       	: 'transparent',
			'buttonText'  	: 'SELECT FILE',
			'onComplete'	: function (event, queueID, fileObj, response, data) {
				$('#fileUploaded').html('The file was successfully uploaded.');
				$('#fileUploaded').show().animate({'display':'block'},4000).hide(400);
			}
		});
		$('#audio_upload').uploadify({
			'uploader'		: '/scripts/uploadify/uploadify.swf',
			'script'		: '/scripts/uploadify/uploadifym.php',
			'cancelImg'		: '/scripts/uploadify/cancel.png',
			'folder'    	: '/media',
			'auto'			: false,
			'fileExt'       : '*.mp3;*.MP3;*.pdf;*.PDF',
			'fileDesc'   	: 'Only mp3/pdf files',
			'multi'			: false,
			'sizeLimit'		: 26214400,
			'wmode'       	: 'transparent',
			'buttonText'  	: 'SELECT FILE',
			'width'       	: 120,
			'onComplete'	: function (event, queueID, fileObj, response, data) {
				$('#fileUploaded').html('The file was successfully uploaded.');
				$('#fileUploaded').show().animate({'display':'block'},4000).hide(400);
				setTimeout(function() {
					location.reload(true);
					// Do something after 4 seconds
					// This can be direct code, or call to some other function
				}, 4000);
				
			}
		});
	});
	// ]]>
	</script>
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
			<h2 class="elders" style='text-transform: none;'>the Elders <span style="font-size:small;">panel</span></h2>
			
			<?php 
				
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) {
					echo "<div id='fileUploaded'></div>";
					// Upload box for bulletin
					echo "<div style='overflow: auto; text-align: left;'>
								<h2>Upload Bulletin</h2>
								<input id='file_upload' type='file' name='file_upload' />
								<p style='margin: 2px; color: #343733; text-align: left;'>Select your pdf file and it will be automatically renamed and uploaded into right location.</p>
							</div>";
					// Upload box for mp3 and pdf
					echo "<div style='overflow: auto; text-align: left;'>
								<style>
									.uploadifyQueue a {text-decoration: none; border-bottom: none;}
									.listfiles {
										font-size: 0.9em;
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
										font-size: 1.3em;
										margin: auto 1em;
									}
									a.links {
										display: block;
										width: 119px;
										border: thin solid #444;
										border-radius: 2px;
										background: 		-webkit-linear-gradient(top, #777 0%,#333 100%); /* Chrome10+,Safari5.1+ */
										background: 		-webkit-gradient(linear, left top, left bottom, from(#777), to(#333));
										background: 		linear-gradient(to bottom, #777 0%, #333 100%); /* W3C */
										color: #fff;
										font-size: 0.9em;
										text-align: center;
										padding: 5px;
										margin-top: 0.8em;
										-moz-box-sizing: 					border-box;
										-webkit-box-sizing:					border-box;
										box-sizing: 						border-box;
									}
									a.links:hover {
										color: #fff;
										background: 		-webkit-linear-gradient(top, #333 0%,#777 100%); /* Chrome10+,Safari5.1+ */
										background: 		-webkit-gradient(linear, left top, left bottom, from(#333), to(#777));
										background: 		linear-gradient(to bottom, #333 0%, #777 100%); /* W3C */
									}
								</style>
								<h2>Upload Media Files</h2>
								<input id='audio_upload' type='file' name='audio_upload' />
								<p style='margin: 1px; text-align: left;'>
									<a class='links' href='javascript:$(\"#audio_upload\").uploadifyUpload()'>START UPLOAD</a></p>
							</div>";
							
					// List files in media folder in alphabetical order
					$directory="media";
					$handler = opendir($directory);

					while ($file = readdir($handler)) {
						if ($file != '.' && $file != '..' && $file != ".htaccess" && $file != "index.php" && $file != "error_log") {
							$file_names[] = $file;
							$file_part = explode('_',$file);
							$file_numbers[] = intval($file_part[0]);
						}
					}
					closedir($handler);
					
					natsort($file_names);
					$file_names = array_reverse($file_names);
					
					echo "
						<h2>Files Already Uploaded</h2>
						<table class='listfiles'>";
					foreach ($file_names as $file) {
						echo "<tr><td>" . $file . "</td><td><a href='elders.php?a=delfile&t=" . $file . "' onclick=\"javascript:return confirm('Are you sure to delete the file?');\" title='Delete the file'>&times;</a></td></tr>";
					}
					echo "</table>";
					
				} else {
					echo "
						<form action='elders.php' method='post'>
							".$error_message."
							<input type='text' name='username' maxlength='32' autocorrect='off' placeholder='username' required /><br />
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