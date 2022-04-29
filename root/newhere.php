<?php include "common.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="robots" content="index,follow" />	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300|Wire+One|Quicksand:400,300|Open+Sans+Condensed:300,700,300italic|PT+Sans:400,700,400italic,700italic|Vollkorn:400,400italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css+js/jquery.countdown.css"> 
	<script type="text/javascript" src="css+js/jquery.plugin.min.js"></script>
	<script type="text/javascript" src="css+js/jquery.countdown.min.js"></script>
	<link rel="stylesheet" href="css+js/style.css" />
	
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
			
			<h2 class="new">new Here</h2>
			<h3>Visiting a church for the first time can be a bit intimidating.</h3>
			<p>We’ve made it our priority to make you feel welcome, comfortable and loved. Having an idea of what to expect can help.</p>
			
			<h5 class='new'>Welcome to Newcastle West Bible Fellowship</h5>
			<p>Newcastle West Bible Fellowship is made of ordinary people who worship an extraordinary God. As followers of Jesus we seek to know the Love of God, Learn of Him, and Live a life committed to serving Him and others.
			<br /><br />People from all walks of life are welcome here, regardless of where they are in their spiritual journey.</p>
			
			<h5 class='new'>What to Expect</h5>
			<p><span class="new" style="font-weight: bold;">What's It Like</span> - Our worship services are all about Jesus, and we worship Him through many expressions. From studying the Word of God, singing, music, prayer and breaking bread together, the whole service is focused on worshiping Him.</p>
			<p><span class="new" style="font-weight: bold;">What's Happening</span> - Coming through the doors you will be greeted by friendly welcoming people. Don’t worry, they won't hassle you or make you sign up for something. The greeters will answer any questions you may have, and help direct you to where you are trying to go.</p>
			<p><span class="new" style="font-weight: bold;">What Do I Wear</span> - What do I wear? - Honestly, whatever you want to. Jesus clearly teaches to come to Him just as you are. Generally the people here dress casually. It doesn't matter if you prefer suits or sandals, you are welcome here!</p>
			<p><span class="new" style="font-weight: bold;">What about kids</span> - We love kids. We love them so much that we have a special service designed just for them. Our desire is to help parents raise kids who love Jesus. When you come, just ask one of our greeters at the door for information on where to take them.</p>
			<p><span class="new" style="font-weight: bold;">What time</span> - That really depends on you. We enjoy the conversation and connection before and after each service, and would like to get to know you as well. If you have kids, then we suggest that you come at least 20 minutes before the start time.</p>
			
			<h5 class='new'>Location</h5>
			<img src="pics/building.jpg" style="width: 615px; margin: 0 auto; padding: 0; display: block; border: 0;" />
			<img src="pics/hp_slider_shadow.jpg" style="margin: 0 auto; padding: 0px; display:block">
			<p>
				<b>Newcastle West Bible Fellowship.</b> Meet us at <b>North Quay</b>, Newcastle West, Co. Limerick or call<br />
				Colin 085 738 19 70<br />
				Andrew 086 874 41 82
			</p>
			
			<style type="text/css">
				#map_canvas {
					width: 620px;
					height: 400px;
					overflow: hidden;
					box-shadow: #999 0 0 5px;
					margin-bottom: 30px;
				}
			</style>
	
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBASNTqKH2WGUEvCZHtd5ls_PcEyN2mhsU&sensor=false"></script>
			<script type="text/javascript">
				function initialize() {
					var mapCanvas = document.getElementById('map_canvas');
					var mapOptions = {
						center: new google.maps.LatLng(52.450000, -9.058350),
						zoom: 17,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						mapTypeControl: false,
						navigationControl: true,
						navigationControlOptions: {
							style: google.maps.NavigationControlStyle.SMALL
						},
						streetViewControl: false
					}
					var map = new google.maps.Map(mapCanvas, mapOptions);
					
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(52.44963, -9.05816),
						title:"Hello World!"
					});
					marker.setMap(map);
				}
				google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<div id="map_canvas"></div>
		</div>
		<div style="clear:both;"></div>
	</div>
</div>
</body>
</html>