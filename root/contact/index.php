<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Contact - Newcastle West Bible Fellowship</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="Author" content="Grzegorz Rekowski" />
	<meta name='robots' content='noindex, nofollow, noarchive, notranslate, noimageindex' />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/styles/style.css" rel="stylesheet" />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/styles/rssstyle.css" rel="stylesheet" />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" media="screen" />
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/motionpack.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/jquery.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/texts.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/settings.js" type="text/javascript"></script>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.ncwbiblefellowship.com/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="SHOTRTCUT ICON" href="http://www.ncwbiblefellowship.com/favicon.ico" />
	<link rel="ICON" href="http://www.ncwbiblefellowship.com/favicon.ico" type="image/x-icon" />
</head>
<body>
<!-- http://fancybox.net/home used script and tips -->
<div id="pagewraper">
	<div class="midwrap">
		<div id="toplogo">
			<img src="http://www.ncwbiblefellowship.com/pics/slides_tl.png" style="position: absolute; top: 0px; left: 0px; z-index: 9" alt="" />
			<img src="http://www.ncwbiblefellowship.com/pics/slides_tr.png" style="position: absolute; top: 0px; right: 0px; z-index: 9" alt="" />
			<img src="http://www.ncwbiblefellowship.com/pics/slides_bl.png" style="position: absolute; bottom: 0px; left: 0px; z-index: 9" alt="" />
			<img src="http://www.ncwbiblefellowship.com/pics/slides_br.png" style="position: absolute; bottom: 0px; right: 0px; z-index: 9" alt="" />
			<div id="slideshow">
				<img src="http://www.ncwbiblefellowship.com/resources/slide1.jpg" width="860px" height="200px" alt="" class="active" />
				<img src="http://www.ncwbiblefellowship.com/resources/slide2.jpg" alt="" />
				<img src="http://www.ncwbiblefellowship.com/resources/slide3.jpg" alt="" />
				<img src="http://www.ncwbiblefellowship.com/resources/slide4.jpg" alt="" />
				<img src="http://www.ncwbiblefellowship.com/resources/slide5.jpg" alt="" />
			</div>
		</div>
		<div id="menuwraper">
			<div style="float: right; padding-right: 10px;">
				<ul>
					<li id="menu1"><a href="http://www.ncwbiblefellowship.com/" onmouseover="this.innerHTML = '{ Home }';" onmouseout="this.innerHTML = 'Home';">Home</a></li>
					<li id="menu2"><a href="http://www.ncwbiblefellowship.com/whatwedo" onmouseover="this.innerHTML = '{ What we do }';" onmouseout="this.innerHTML = 'What we do';">What we do</a></li>
					<li id="menu3"><a href="http://www.ncwbiblefellowship.com/aboutus" onmouseover="this.innerHTML = '{ About Us }';" onmouseout="this.innerHTML = 'About Us';">About Us</a></li>
					<li id="menu4"><a href="http://www.ncwbiblefellowship.com/gospel" onmouseover="this.innerHTML = '{ Gospel }';" onmouseout="this.innerHTML = 'Gospel';">Gospel</a></li>
					<li id="menu7"><a href="http://www.ncwbiblefellowship.com/ultimate" onmouseover="this.innerHTML = '{ Outreach }';" onmouseout="this.innerHTML = 'Outreach';">Outreach</a></li>
					<li id="menu5"><a href="http://www.ncwbiblefellowship.com/news" onmouseover="this.innerHTML = '{ News }';" onmouseout="this.innerHTML = 'News';">News</a></li>
					<li id="menu6" class="active"><a href="http://www.ncwbiblefellowship.com/contact" onmouseover="this.innerHTML = '{ Contact }';" onmouseout="this.innerHTML = 'Contact';">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="midwrap">
			<div class="fullsizepage">
				<h1>Contact</h1>
				Fill out the form below to get in touch with us<br /><br />
				<div style="display: table;">
					<div style="display: table-row">
						<div class="ctl"></div><div class="cmw"></div><div class="ctm"></div><div class="cmg"></div><div class="ctr"></div>
					</div>
					<div style="display: table-row">
						<div class="cmw"></div>
						<div class="cmw">
							<div style="width: 440px; padding-left: 8px; margin: 0px;">
<?php
if (count($_POST))
{
	////////// USTAWIENIA //////////
	$email = 'info@ncwbiblefellowship.com';	// Adres e-mail adresata
	$subject = 'Message from WWW';	// Temat listu
	$message = 'Thank you for your email. We will get back to You as soon as we can.';	// Komunikat
	$error = 'Sorry. We are experiencing some technical difficulties. Please try again later or use direct link on right hand site.';	// Komunikat bledu
	$charset = 'iso-8859-1';	// Strona kodowa
	//////////////////////////////
	
	$head =
		"MIME-Version: 1.0\r\n" .
		"Content-Type: text/plain; charset=$charset\r\n" .
		"Content-Transfer-Encoding: 8bit";
	$body = '';
	foreach ($_POST as $name => $value)
	{
		if (is_array($value))
		{
			for ($i = 0; $i < count($value); $i++)
			{
				$body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value[$i]) : $value[$i]) . "\r\n";
			}
		}
		else $body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value) : $value) . "\r\n";
	}
	echo mail($email, "=?$charset?B?" . base64_encode($subject) . "?=", $body, $head) ? $message : $error;
}
else
{
?>
								<form action="?" method="post" style="margin-top: 0px; padding-top: 0px;">
									<p class="formik"><input name="Your Name" value="" size="40" maxlength="40" id="formik" style="margin-top: 8px;" type="text">&nbsp;&nbsp;Your Name*</p>
									<p class="formik"><input name="Email" value="" size="40" maxlength="40" id="formik" type="text">&nbsp;&nbsp;Email*</p>
									<p class="formik"><input name="Phone" value="" size="40" maxlength="40" id="formik" type="text">&nbsp;&nbsp;Phone no.</p>
									<p class="formik"><input name="Subject" value="" size="40" maxlength="40" id="formik" type="text">&nbsp;&nbsp;Subject</p>
									<p class="formik">&nbsp;&nbsp;&nbsp;Message*<br>
									<textarea name="Message" id="formik"></textarea></p>
									<button id="formbutton" type="submit" value=" ">Send</button><br>
								</form>
<?php
}
?>
							</div>
						</div>
						<div class="cmw"></div>
						<div class="cmg">
							<div style="width: 400px; margin-top: 0px; padding-top: 0px;">
								<div style="padding-left: 15px; padding-right: 10px; padding-bottom: 12px; padding-top: 0px; margin-top: 0px;">
									Don't feel like filling out web forms? Contact us <a href="mailto:info@ncwbiblefellowship.com">directly</a> using your favorite e-mail client
								</div>
								<div class="contactbox"> 
									<div class="wbl"><div class="wbr"><div class="wtl"><div class="wtr"> 
										<div class="contact_tab_content"> 
											<img src="http://www.ncwbiblefellowship.com/contact/colin.jpg" alt="" border="0px" /> 
											<p><b>Colin<br />Natalie<br />Burnett</b><br />Serving the Lord in Newcastle West, Ireland since 1999</p><br />
											<div class="facebook_profile">
												<p>Email me directly: 
												<a href="mailto:colin@ncwbiblefellowship.com" class="facebook_profile"> 
													colin@ncwbiblefellowship.com</a></p>
											</div> 
										</div> 
									</div></div></div></div>
									<div class="clear">&nbsp;</div> 
								</div>
								<div class="contactbox"> 
									<div class="wbl"><div class="wbr"><div class="wtl"><div class="wtr"> 
										<div class="contact_tab_content"> 
											<img src="http://www.ncwbiblefellowship.com/contact/andy1.jpg" alt="" border="0px" /> 
											<p><b>Andrew<br />Gilian<br />Shanks</b><br />Serving the Lord in Newcastle West, Ireland since 2007</p><br />
											<div class="facebook_profile">
												<p>Email me directly: 
												<a href="mailto:andy@ncwbiblefellowship.com" class="facebook_profile"> 
													andy@ncwbiblefellowship.com</a></p>
											</div> 
										</div> 
									</div></div></div></div>
									<div class="clear">&nbsp;</div> 
								</div>
							</div>
						</div>
						<div class="cmg"></div>
					</div>
					<div style="display: table-row">
						<div class="cbl"></div><div class="cmw"></div><div class="cbm"></div><div class="cmg"></div><div class="cbr"></div>
					</div>
				</div>
				<div class="reflection"></div>		
			</div>
		</div>
	</div>
	<div class="footerwrap"> 
		<div class="midwrap"> 
			<a href="javascript:;" onmousedown="toggleSlide('extrasdiv');" style="border: none;"><img src="http://www.ncwbiblefellowship.com/pics/extras.gif" style="border: none; margin-top: 1px; margin-left: 0px;" alt="" /></a>
		</div> 
		<div id="extrasdiv" style="display:none; overflow:hidden; height:438px;">
			<div class="midwrap">
				<script type="text/javascript" language="JavaScript">
					<!-- 
					document.write("&nbsp;"+ t1 +"&nbsp;"+ t2 + t3 + t4 + t5 + t6 + t7 + t8 +"&nbsp;"); 
					//--> 
				</script>
			</div>
		</div>
	</div>
	<div class="bottomspacing">
		&nbsp;
	</div>
</div>	
</body>
</html>