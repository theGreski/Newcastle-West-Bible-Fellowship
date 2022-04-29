<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Messages OnLine - Newcastle West Bible Fellowship</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="Author" content="Grzegorz Rekowski" />
	<meta name='robots' content='noindex, nofollow, noarchive, notranslate, noimageindex' />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/styles/style.css" rel="stylesheet" />
	
	<link type="text/css" href="http://www.ncwbiblefellowship.com/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" media="screen" />
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/motionpack.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/jquery.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/texts.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/settings.js" type="text/javascript"></script>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.ncwbiblefellowship.com/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="http://www.ncwbiblefellowship.com/audio/audio-player.js"></script>
	<link rel="SHOTRTCUT ICON" href="http://www.ncwbiblefellowship.com/favicon.ico" />
	<link rel="ICON" href="http://www.ncwbiblefellowship.com/favicon.ico" type="image/x-icon" />
	<script type="text/javascript">  
		AudioPlayer.setup("http://www.ncwbiblefellowship.com/audio/player.swf", {   
		width: 400,
		initialvolume: 100,
		transparentpagebg: "yes",
		noinfo: "no",
		animation: "yes",
		remaining: "no",
		checkpolicy: "no",
		buffer: 10
		});   
	</script>
		<style type="text/css">
		<!--
			h4 { font: 12pt "Century Gothic", "Lucida Sans Unicode", Arial, Helvetica, sans-serif; font-weight: normal; color: #bcd18b; margin: 18px 0px 0.6em; padding: 0px; }
			.bullet { color: #e8aab8; font-size: 12pt; padding-left: 3pt; padding-right: 4pt; }
			.tag { color: #e8aab8; padding-right: 0pt; padding-bottom: 9px;}
			.music a{ border: none}
			.music { position: relative; top: -1px;}
			.dwn { border: none; margin-right: 30px;}
			.author {width: 190px; float: left;}
			.lenght {width: 150px; float: left;}
			.line { margin: 15px 0px; display: block; text-align: center; }
		-->
	</style>
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
<body style="background: url(http://www.ncwbiblefellowship.com/pics/bodybg.png) #222521 repeat-x 0px -228px">
<!-- http://fancybox.net/home used script and tips -->
<div id="pagewraper">
	<div class="midwrap">
		
		<div id="menuwraper">
			<div style="float: right; padding-right: 10px;">
				<ul>
					<li id="menu1"><a href="http://www.ncwbiblefellowship.com" onmouseover="this.innerHTML = '{ Home }';" onmouseout="this.innerHTML = 'Home';">Home</a></li>
					<li id="menu2"><a href="http://www.ncwbiblefellowship.com/whatwedo" onmouseover="this.innerHTML = '{ What we do }';" onmouseout="this.innerHTML = 'What we do';">What we do</a></li>
					<li id="menu3"><a href="http://www.ncwbiblefellowship.com/aboutus" onmouseover="this.innerHTML = '{ About Us }';" onmouseout="this.innerHTML = 'About Us';">About Us</a></li>
					<li id="menu4"><a href="http://www.ncwbiblefellowship.com/gospel" onmouseover="this.innerHTML = '{ Gospel }';" onmouseout="this.innerHTML = 'Gospel';">Gospel</a></li>
					<li id="menu7"><a href="http://www.ncwbiblefellowship.com/ultimate" onmouseover="this.innerHTML = '{ Outreach }';" onmouseout="this.innerHTML = 'Outreach';">Outreach</a></li>
					<li id="menu5"><a href="http://www.ncwbiblefellowship.com/news" onmouseover="this.innerHTML = '{ News }';" onmouseout="this.innerHTML = 'News';">News</a></li>
					<li id="menu6"><a href="http://www.ncwbiblefellowship.com/contact" onmouseover="this.innerHTML = '{ Contact }';" onmouseout="this.innerHTML = 'Contact';">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="midwrap">
			<div class="fullsizepage">
				<h1>Messages online</h1>
				What we preach and proclaim<br /><br />
				Here are our resources currently available online. You can download it in mp3 format to your disk by clicking on download icon or listen them online using included player by clicking play button on right hand site.<br /><br />
				
				<?PHP 
				// include getID3() library (can be in a different directory if full path is specified)
				require_once('../getid3/getid3.php');
				
				// Initialize getID3 engine
				$getID3 = new getID3;
				
				$directory = opendir('.'); 
				
				$files = array();
				
				while(false != ($file = readdir($directory))) {
					
					$info = pathinfo($file);
					if ($info["extension"] == "mp3" OR $info["extension"] == "pdf") { 
						$files[] = $file;
					}

				}
				
				closedir($directory);
				natcasesort($files); // sort.
	
				// print.
				foreach($files as $file) {
					$info = pathinfo($file);
					if ($info["extension"] == "mp3") {
						//echo("<a href='$file'>$file</a> <br />\n");
						$ThisFileInfo = $getID3->analyze($file);
						getid3_lib::CopyTagsToComments($ThisFileInfo);
						echo '<h4>'.(!empty($ThisFileInfo['comments_html']['title'])  ? implode('<BR>', $ThisFileInfo['comments_html']['title'])  : '&nbsp;').'</h4>';
						echo '<span class="music"><span class="author"><span class="bullet">&bull;</span>by <span class="tag">'.(!empty($ThisFileInfo['comments_html']['artist']) ? implode('<BR>', $ThisFileInfo['comments_html']['artist']) : '&nbsp;'). '</span></span>';
						echo '<span class="lenght"><span class="bullet">&bull;</span>Lenght: <span class="tag">'.(!empty($ThisFileInfo['playtime_string'])         ? $ThisFileInfo['playtime_string']                          : '&nbsp;').'</span></span></span>';
						echo '<a href="http://www.ncwbiblefellowship.com/messages/'.$file.'" class="dwn" style="border: none;" title="Download"><img src="http://www.ncwbiblefellowship.com/pics/down.png" alt="Download" style="width: 28px; height: 24px;"></a>';
						echo '<span id="'.$file.'">Your device is not supporting flash.</span><script type="text/javascript">AudioPlayer.embed("'.$file.'", {soundFile: "http://www.ncwbiblefellowship.com/messages/'.$file.'"});</script>';
						echo '<img src="http://www.ncwbiblefellowship.com/pics/line.png" class="line">
							<p style="display: none">'.$ThisFileInfo['filename'].' test</p>';
					} else {
						$parts = explode("-", $file);
						$author = $parts[0];
						$part2 = explode(".", $parts[1]);
						$title = $part2[0];
						$ext = $part2[1];
						echo "<h4>" . $title . " [" . $ext . "]</h4>";
						echo "<span class='music'><span class='author'><span class='bullet'>&bull;</span>by <span class'tag'>" . $author . "</span></span>";
						echo "<span class='lenght'><span class='bullet'></span><span class='tag'></span></span></span>";
						echo "<a href='http://www.ncwbiblefellowship.com/messages/" . $file . "' class='dwn' style='border: none;' title='Download'><img src='http://www.ncwbiblefellowship.com/pics/down.png' alt='Download' style='width: 28px; height: 24px;'></a>";
						echo "<img src='http://www.ncwbiblefellowship.com/pics/line.png' class='line'>";						
					}
				}

				?>
			</div>
		</div>			
	</div>
	
	<div class="bottomspacing">
		&nbsp;
	</div>
</div>
</body>
</html>