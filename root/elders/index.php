<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<title>Elders Panel - Newcastle West Bible Fellowship</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="Author" content="Grzegorz Rekowski" />
	<meta name='robots' content='noindex, nofollow, noarchive, notranslate, noimageindex' />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/styles/style.css" rel="stylesheet" />
	<script type="text/javascript" src="http://www.ncwbiblefellowship.com/scripts/uploadify/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://www.ncwbiblefellowship.com/scripts/uploadify/swfobject.js"></script>
	<script type="text/javascript" src="http://www.ncwbiblefellowship.com/scripts/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
	<link rel="SHOTRTCUT ICON" href="http://www.ncwbiblefellowship.com/favicon.ico" />
	<link rel="ICON" href="http://www.ncwbiblefellowship.com/favicon.ico" type="image/x-icon" />
	<script type="text/javascript">
	// <![CDATA[
	$(document).ready(function() {
	$('#file_upload').uploadify({
		'uploader'		: '../scripts/uploadify/uploadify.swf',
		'script'		: '../scripts/uploadify/uploadifyb.php',
		'cancelImg'		: '../scripts/uploadify/cancel.png',
        'folder'    	: '../resources',
		'auto'			: true,
		'fileExt'       : '*.pdf;*.PDF',
		'fileDesc'   	: 'Only PDF File',
		'multi'			: false,
		'sizeLimit'		: 2500000,
		'wmode'       	: 'transparent',
		'buttonText'  	: 'SELECT FILE'
	});
	$('#audio_upload').uploadify({
		'uploader'		: '../scripts/uploadify/uploadify.swf',
		'script'		: '../scripts/uploadify/uploadifym.php',
		'cancelImg'		: '../scripts/uploadify/cancel.png',
        'folder'    	: '../messages',
		'auto'			: false,
		'fileExt'       : '*.mp3;;*.MP3',
		'fileDesc'   	: 'Only mp3 audio files',
		'multi'			: false,
		'sizeLimit'		: 26214400,
		'wmode'       	: 'transparent',
		'buttonText'  	: 'SELECT FILE',
		'width'       	: 120
	});
	});
	// ]]>
	</script>
	<style type="text/css">
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
			max-width: 350px;
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
		.audiofiles {
			font-size: 0.7em;
		}
		.cancel a {
			border:none;
		}
		.links {
			border: none;
			text-decoration: none;
			display: block;
			width: 120px;
			background-color: #505050;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			color: #FFF;
			font: 12px Arial, Helvetica, sans-serif;
			padding: 8px 0;
			text-align: center;
		}
		.links:hover {
			border: none;
			text-decoration: none;
			color: #FFF;
			background: -webkit-gradient(linear, left top, left bottom, from(#606060), to(#505050));
			background: -moz-linear-gradient(top,  #606060,  #505050);
		}
		.newsbox {
			background: url(http://www.ncwbiblefellowship.com/pics/line.png) no-repeat bottom center #222521;;
			font-size: 0.9em;
			width: 838px;
			float: left;
			padding-bottom: 0.8em;
			padding-top: 0.2em;
		}
		.closing {
			width: 20px;
			background: #222521;
			float: right;
			text-align: center;
		}
		.clear {
			height:1px;
			font-size:1px;
			float:none;
			clear:both;
		}
		.closing a{
			font-family: "Century Gothic", "Lucida Sans Unicode", Arial, Helvetica, sans-serif;
			text-decoration: none;
			border: none;
			font-weight: 700;
			padding: 0px 4px;
			size: 1.3em;
			line-height: 0.8em;
		}
		.closing a:hover{
			border: 1px dotted #d9718b;
		}
	</style>
	<script type="text/javascript">

        function Ajax()
        {
            var
                $http,
                $self = arguments.callee;

            if (window.XMLHttpRequest) {
                $http = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                try {
                    $http = new ActiveXObject('Msxml2.XMLHTTP');
                } catch(e) {
                    $http = new ActiveXObject('Microsoft.XMLHTTP');
                }
            }

            if ($http) {
                $http.onreadystatechange = function()
                {
                    if (/4|^complete$/.test($http.readyState)) {
                        document.getElementById('ReloadThis').innerHTML = $http.responseText;
                        setTimeout(function(){$self();}, 1000);
                    }
                };
                $http.open('GET', 'loadtxt.php' + '?' + new Date().getTime(), true);
                $http.send(null);
            }

        }

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
					<li id="menu5"><a href="map.php" onmouseover="this.innerHTML = '{ Map }';" onmouseout="this.innerHTML = 'Map';">Map</a></li>
				</ul>
			</div>
		</div>
		<div class="midwrap">
			<div class="fullsizepage">
				<h1>Elders Panel</h1>
				As each one has received a gift, minister it to one another, as good stewards of the manifold grace of God. - 1 Peter 4:10<br /><br />
				<div id="about_tabs">
					<div class="whitebox left_box">
						<div class="wbl"><div class="wbr"><div class="wtl"><div class="wtr"> 
							<div style="height: 300px; overflow: auto; padding-right: 10px; text-align: left;">
								<h2>Upload Bulletin</h2>
								<input id="file_upload" type="file" name="file_upload" />
								<p style="margin: 2px; color: #343733; text-align: left;">Select your pdf file and it will be automatically renamed and uploaded into right location.</p>
							</div>
						</div></div></div></div>
						<div class="reflection"></div>
						<div class="clear">&nbsp;</div>
					</div>
					<div class="whitebox right_box">
						<div class="wbl"><div class="wbr"><div class="wtl"><div class="wtr"> 
							<div style="height: 300px; overflow: hidden; padding-right: 10px; text-align: left;">
								<h2>Upload Messages</h2>
								<input id="audio_upload" type="file" name="audio_upload" />
								<p style="margin: 2px; color: #343733; text-align: left;"><a class="links" href="javascript:$('#audio_upload').uploadifyUpload()">START UPLOAD</a></p>
								<p style="margin: 2px; color: #343733; text-align: left;">Select <b>mp3</b> file to upload and then click <b>start upload</b>. Remember to give proper name to the file before uploading.
								A sample file name is: <br /><b>FirstName LastName - Sample Title 1.mp3</b>
								</p>
								<iframe style="width: 99%; height: 99px; border: none;" width="99%" height="99px" src="files.php" scrolling="no" margin="0" frameborder="0"></iframe>
							</div>
						</div></div></div></div> 
						<div class="reflection"></div>
						<div class="clear">&nbsp;</div>
					</div>
				</div>
				<div class='clear'> </div>
				
				<iframe style="width: 850px; ; height: 27px; border: none;" width="850px" height="27px" src="signup.php" scrolling="no" frameborder="0"></iframe>
				
				<script type="text/javascript">
						setTimeout(function() {Ajax();}, 2000);
				</script>
				<div id='ReloadThis'>Retriving feeds ...</div>
				
				<h2>Speaking Schedule</h2>
				Come now, you who say, "Today or tomorrow we will go to such and such a city, spend a year there, buy and sell, and make a profit"; whereas you do not know what will happen tomorrow. For what is your life? It is even a vapor that appears for a little time and then vanishes away. Instead you ought to say, "If the Lord wills, we shall live and do this or that."<br />
				<div style="text-align: right">James 4:13-15</div><br />
				If you can't see it bellow, open <a href="https://docs.google.com/spreadsheet/ccc?key=0AgJxSa__nf4UdGIzTlAxLTRnVkpLU2JRYXo2YUpURmc&gid=0&range=A1%3AU27&rm=minimal#gid=0" title="Speaking Schedule" target="_blank">Editable calendar</a>. 
				or open <a href="https://docs.google.com/spreadsheet/pub?key=0AgJxSa__nf4UdGIzTlAxLTRnVkpLU2JRYXo2YUpURmc&single=true&gid=0&range=A1%3AU27&output=html" target="_blank">printer friendly</a> version.
			</div>
		</div>			
	</div>
	<iframe style="width: 100%; max-width: 1235px; height: 653px; border: none;" height="653px" src="https://docs.google.com/spreadsheet/pub?key=0AgJxSa__nf4UdGIzTlAxLTRnVkpLU2JRYXo2YUpURmc&single=true&gid=0&range=A1%3AU27&output=html" frameborder="0"></iframe>
	
	<div class="bottomspacing">


		&nbsp;
	</div>
</div>
</body>
</html>