<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>News - Newcastle West Bible Fellowship</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="Author" content="Grzegorz Rekowski" />
	<meta name="robots" content="index,follow" />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/styles/style.css" rel="stylesheet" />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/styles/rssstyle.css" rel="stylesheet" />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" media="screen" />
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/motionpack.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/jquery.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/texts.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/settings.js" type="text/javascript"></script>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.ncwbiblefellowship.com/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link type="application/rss+xml" href="http://www.facebook.com/feeds/page.php?format=rss20&id=112513378784232" rel="alternate"  title="RSS News" />
	<link rel="SHOTRTCUT ICON" href="http://www.ncwbiblefellowship.com/favicon.ico" />
	<link rel="ICON" href="http://www.ncwbiblefellowship.com/favicon.ico" type="image/x-icon" />
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
					<li id="menu5" class="active"><a href="http://www.ncwbiblefellowship.com/news" onmouseover="this.innerHTML = '{ News }';" onmouseout="this.innerHTML = 'News';">News</a></li>
					<li id="menu6"><a href="http://www.ncwbiblefellowship.com/contact" onmouseover="this.innerHTML = '{ Contact }';" onmouseout="this.innerHTML = 'Contact';">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="leftpanel">
			<h1>News</h1>
			What has happend and will happend in future<br /><br />
<?php

$day = Date();
echo 'last sunday :  ' . date("Y-m-d",strtotime($day. " next Friday "));
function get_date_diff($date1, $date2) { 
  $holidays = 0; 
  for ($day = $date2; $day < $date1; $day += 24 * 3600) { 
    $day_of_week = date('N', $day); 
    if($day_of_week > 5) { 
      $holidays++; 
    } 
  } 
  return $date1 - $date2 - $holidays * 24 * 3600; 
} 

function test_get_date_diff() 
{ 
  $datas = array( 
    array('Fri 20 May 2011 14:00:00', 'Fri 20 May 2011 13:00:00', 1 * 3600), 
    array('Sat 21 May 2011 15:00:00', 'Fri 20 May 2011 13:00:00', 2 * 3600), 
    array('Sun 22 May 2011 16:00:00', 'Fri 20 May 2011 13:00:00', 3 * 3600), 
    array('Mon 23 May 2011 14:00:00', 'Fri 20 May 2011 13:00:00', 25 * 3600), 
    array('Fri 27 May 2011 13:00:00', 'Fri 13 May 2011 13:00:00', 24 * 10 * 3600), 
  ); 
  foreach ($datas as &$data) {  
    $actual = get_date_diff(strtotime($data[0]), strtotime($data[1])); 
    if ($actual != $data[2]) { 
      echo "Test for get_date_diff faled expected {$data[2]} but was {$actual}, date1: {$data[0]}, date2: {$data[1]}.<br>"; 
    } 
  } 
} 
test_get_date_diff($data); 
echo "<hr>";

//function to retrieve posts from facebook server
function loadFB($fbID){
	//facebook feed url
    $url="http://www.facebook.com/feeds/page.php?id=".$fbID."&format=atom10";
    
    //load and setup CURL
    $c = curl_init();
    
    //set options and make it up to look like firefox
	$userAgent = "Firefox (WindowsXP) - Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6";
	curl_setopt($c, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($c, CURLOPT_URL,$url);
	curl_setopt($c, CURLOPT_FAILONERROR, true);
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_AUTOREFERER, true);
	curl_setopt($c, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($c, CURLOPT_VERBOSE, false);     
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    
    //get data from facebook and decode XML
    $page = curl_exec($c);
    $pxml= new SimpleXMLElement($page);

    //close the connection
    curl_close($c);
     
    //return the data as an object
    return $pxml->entry;
}

//BE SURE to enter your facebook id here
$fbid="112513378784232";

//how may posts to show
$fbLimit=10;
//variable used to count how many weÕve loaded
$fbCount=0;

//call the function and get the posts from facebook
$myPosts=loadFB($fbid);

//set timezone (change this to your timezone)
date_default_timezone_set("Europe/Dublin");

//loop through all the posts we got from facebook
foreach($myPosts as $dPost){
      //get the post date / time and convert to unix time
      $dTime = strtotime($dPost->published);
      //format the date / time into something human readable
      //if you want it formatted differently look up the php date function
      $myTime=date("M",$dTime);
	  $myDay=date("d",$dTime);
      //output the date / time
      echo("<table style='border:none;margin-right:15px;margin-bottom:4px;' cellpadding='0' cellspacing='0' align=left><tr><td><div style='background-color:#e8aab8;border:2px solid #e8aab8;border-radius:6px 6px 0px 0px;text-align:center;width:45px;color:#343733;'><b>".$myDay."</b></div></td></tr><tr><td><div style='background-color:#869f37; border:4px solid #869f37;border-radius:0px 0px 6px 6px; text-align:center;'><b>".$myTime."</b></div></td></tr></table>");
      //output the message body
      echo($dPost->content);
      //add a line break to separate comments
      echo("<br /><img src='http://www.ncwbiblefellowship.com/pics/line.png' style='margin: auto; margin-top:15px;margin-bottom:10px;display: block; text-align: center'><br />");    
      //increment counter
      $fbCount++;
      //if we've outputted the number set above in fblimit we're done
      if($fbCount >= $fbLimit) break;    
}

?>
<br />
			<div class="facebook_profile" style="margin-bottom: 10px"> 
				<img src="http://www.ncwbiblefellowship.com/pics/fbsmalldark.jpg" alt="Facebook icon" /> 
				<a href="http://www.facebook.com/ncwbf" class="facebook_profile" style="font-size: 0.9em; line-height: 1.5;"> 
					To read more our news and stay up to date join our facebook page.
				</a> 
			</div>
			<div class="facebook_profile" style="margin-bottom: 20px"> 
				<img src="http://www.ncwbiblefellowship.com/pics/feedsmalldark.jpg" alt="RSS icon" /> 
				<a href="http://www.facebook.com/feeds/page.php?format=rss20&id=112513378784232" class="facebook_profile" style="font-size: 0.9em; line-height: 1.5;"> 
					Subscribe to our RSS channel for updates delivered straight to you.
				</a> 
			</div>
		</div>
		<div class="rightpanel">
			<div class="pannel">
				<div class="roundtop">
					<div class="roundbottom">
						<h3>Building Project</h3>
						<p>Please pray with us, as we are looking to purchase property for the meeting. Over the past year our present location has become filled to capacity.</p>
						<p>We believe that purchasing property in Newcastle West is the best solution for our growing church.</p>
						<img src="http://www.ncwbiblefellowship.com/news/building_project.jpg" style="text-align: center; margin-top: 12px; margin-bottom: 12px;" alt="" />
					</div>
				</div>
			</div> 
			<div class="pannel">
				<div class="roundtop">
					<div class="roundbottom">
						<h3>Christian Events</h3>
						<p>Please pray with us, as we are looking to purchase property for the meeting. Over the past year our present location has become filled to capacity.</p>
						<p>We believe that purchasing property in Newcastle West is the best solution for our growing church.</p>
						<a id="calendarshow" href="https://www.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=500&amp;wkst=1&amp;hl=en_GB&amp;bgcolor=%23FFFFFF&amp;src=ga1clshc91o9e7sjam6b7b4fio%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Europe%2FDublin?iframe" style="border: none; border-width: 0; width: 800; height: 500; frameborder: 0; scrolling: no;" title="Christian Events">
							<img src="http://www.ncwbiblefellowship.com/news/calendar_icon.png" style="text-align: center; margin-top: 12px; margin-bottom: 12px; width: 165px; height: 140px" alt="" />
						</a>
					</div>
				</div>
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