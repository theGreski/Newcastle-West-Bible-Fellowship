<?php include "common.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="robots" content="index, follow" />
	<meta name="Description" content="Newcastle West Bible Fellowship is the assembly of Born Again Christians, followers of Jesus Christ, who look to the Bible for our spiritual teaching. Church is situated in Co.Limerick Ireland." />
	<meta name="keywords" content="Christian, Bible, Jesus, Christ, Newcastle West, Newcastlewest, God, salvation, church, fellowship, assembly, Ireland" />
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Quicksand:400,300|Open+Sans+Condensed:300,700,300italic|PT+Sans:400,700,400italic,700italic" />
	<link type="text/css" rel="stylesheet" href="css+js/style.css" />
	<link type="text/css" rel="stylesheet" href="css+js/jquery.countdown.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="css+js/jquery.plugin.min.js"></script>
	<script type="text/javascript" src="css+js/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="css+js/scripts.js"></script>
	<script type="text/javascript" src="css+js/votd.js"></script>
	<link rel="SHOTRTCUT ICON" href="favicon.ico" />
	<link rel="ICON" href="favicon.ico" type="image/x-icon" />
	<script type="text/javascript">
		$(document).ready(function () {
	
			"use strict";
			//var quo, cdnum, ref;
			//$('#verse').text(quo[cdnum]);
			$('#verse').html(quo[cdnum]);
			$('#ref').text(ref[cdnum]);
			
			if (quo[cdnum].length > 130) {
				$("#verse").css("font-size", "1.3em");
			}
			if (quo[cdnum].length > 160) {
				$("#verse").css("font-size", "1.20em");
				$("#votd_container").css("margin", "60px 90px");
			}
			if (quo[cdnum].length > 200) {
				$("#verse").removeAttr("style");
				$("#ref").removeAttr("style");
				$("#votd_container").css({"margin" : "50px 75px", "font-size" : "1.05em"});
			}
			if (quo[cdnum].length > 300) {
				$("#verse").removeAttr("style");
				$("#ref").removeAttr("style");
				$("#votd_container").css({"margin" : "60px 85px", "font-size" : "0.9em"});
			}
			if (quo[cdnum].length > 600) {
				$("#verse").removeAttr("style");
				$("#ref").removeAttr("style");
				$("#votd_container").css({"margin" : "40px 50px", "font-size" : "0.8em"});
			}
	
		});
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
		<div style="text-align: center; margin-top: 20px;">
			<style>
				div#slider { width: 80%; max-width: 615px; overflow: hidden; margin: auto;}
				#slider ul {
					position: relative; width: 500%;
					margin: 0; padding: 0; font-size: 0; text-align: left;
					list-style:none;
					-webkit-animation: 25s slidy infinite; /* Chrome, Safari, Opera */					
					animation: 25s slidy infinite;
				}
				#slider li { 
					display:inline;
					width: 20%; height: auto; float: left;
					position:relative;
					padding: 0; margin: 0;
				}
				#slider li div {
						display: inline-block;
				}
				@keyframes slidy { 
					0% { left: 0%; }
					18% { left: 0%; }
					
					/* 2% for animation */
					20% { left: -100%; }
					38% { left: -100%; }
					
					/* 2% for animation */
					40% { left: -200%; }
					58% { left: -200%; } 
					
					/* 2% for animation */
					60% { left: -300%; }
					78% { left: -300%; }
					
					/* 2% for animation */
					80% { left: -400%; }
					99% { left: -400%; }
					
					/* rewind animation */
					100% { left: 0%; }
				}
				@-webkit-keyframes slidy {
					0% { left: 0%; }
					18% { left: 0%; }
					
					/* 2% for animation */
					20% { left: -100%; }
					38% { left: -100%; }
					
					/* 2% for animation */
					40% { left: -200%; }
					58% { left: -200%; } 
					
					/* 2% for animation */
					60% { left: -300%; }
					78% { left: -300%; }
					
					/* 2% for animation */
					80% { left: -400%; }
					99% { left: -400%; }
					
					/* rewind animation */
					100% { left: 0%; }
				}
				div.mainpage { margin: 20px auto; overflow: auto; }
				.mainpage img { display: inline; width: 195px; border: none;}
				.mainpage img.icon { vertical-align: bottom; height: 125px; }
				.mainpage img.shaddow { vertical-align: top; height: 8px; }
				.mainpage img.middle { margin: 0 11px; }
				
				.popinfo {
					display: none;
					position: fixed;
					top: 50%;
					left: 50%;
					-webkit-transform: translate(-50%, -50%);
					transform: translateX(-50%) translateY(-50%);
					z-index: 1;
					border: solid thin #000;
					padding: 3px;
					/*background-color: rgba(255,255,255,0.7);*/
					background-color: rgba(0,0,0,0.6);
					box-shadow: 1px 1px 17px rgba(0,0,0,0.8);
					max-width: 90%;
					max-height: 90%;
				}
                .close-icon {
                    display: none;
                    position: fixed;
                    width: 3em;
                    height: 3em;
                    cursor: pointer;
                    transform: translate(-50%, -50%);
                    z-index: 999;
                }
			</style>
			<div id="slider">
				<ul>
					<li>
						<div style="
									font-family: 'Quicksand', sans-serif;
									font-size: 15pt; 
									background: -webkit-linear-gradient(top, #d80000 0%,#930000 100%);
									background: -webkit-gradient(linear, left top, left bottom, from(#d80000), to(#930000));									
									background: linear-gradient(to bottom, #d80000 0%,#930000 100%);
									width: 615px; height: 346px; 
									color: #fff;
									text-shadow: #777 0px 0px 1px;
									text-align: justify;
									">
							<p style="margin: 70px 100px;">
								<span style="font-size:2em">EVERYBODY WANTS</span>
								<span style="font-size:1.5em">TO CHANGE THE WORLD</span>
								<span style="font-size:1.9em">BUT NOBODY WANTS</span>
								<span style="font-size:3.4em">TO CHANGE</span>
							</p>
						</div>
					</li>
					<li>
						<div style="
									font-family: 'Quicksand', sans-serif;
									font-size: 15pt;
									background: -webkit-linear-gradient(top, #00d800 0%,#009300 100%);
									background: -webkit-gradient(linear, left top, left bottom, from(#00d800), to(#009300));									
									background: linear-gradient(to bottom, #00d800 0%,#009300 100%);
									width: 615px; height: 346px; 
									color: #fff;
									text-shadow: #777 0px 0px 1px;
									text-align: justify;
									">
							<div id='votd_container' style="margin: 70px 100px;">
								<span id="verse" style="font-size:1.4em"></span>
								<p style="font-size:1.2em; text-align: right;"><span id="ref"></span>&nbsp;&nbsp;NKJV</p>
							</div>
						</div>
					</li>
					<li><a href='#'><img src="pics/personal-bible-study1.jpg" alt style='width: 615px; height: 346px;' /></a></li>
					<li><a href="http://www.facebook.com/ncwbf" target="_blank"><img src="pics/facebook.jpg" alt style='width: 615px; height: 346px;' /></a></li>
					<li><img src="pics/evangelism1.jpg" alt style='width: 615px; height: 346px;' /></li>
				</ul>
			</div>
			<img src="pics/hp_slider_shadow.jpg" style="margin: 0 auto; padding: 0px; display:block">
			
			<div class="mainpage">
					<a href='newhere.php'><img class="icon" src="pics/newhere.jpg" /></a>
					<a href='messages.php'><img class="icon middle" src="pics/teachings.jpg" /></a>
					<a href='about.php'><img class="icon" src="pics/getinvoved.jpg" /></a>
					<img class="shaddow" src="pics/hp_bucket_shadow.jpg" />
					<img class="shaddow middle" src="pics/hp_bucket_shadow.jpg" />
					<img class="shaddow" src="pics/hp_bucket_shadow.jpg" />
			</div>
			
		</div>
		<div style="clear:both;"></div>
	</div>
</div>

<!--<img class="popinfo" src="summer_kids_2016.jpg">-->
<iframe class="popinfo" width="1280" height="720" src="https://www.youtube.com/embed/8_ulOG97Teo?rel=0" frameborder="0" allowfullscreen></iframe>
<div class="close-icon">
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
        <circle style="fill:#777777;" cx="25" cy="25" r="25"/>
        <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,34 25,25 34,16 "/>
        <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,16 25,25 34,34 "/>
    </svg>
</div>
<script>
	var posterStartDate = "December 24, 2016",
		posterEndDate = "December 31, 2016";
		
	if (Date.parse(posterStartDate) <= Date.now() && (Date.parse(posterEndDate) + 86400000) >= Date.now()) {
		console.log("Display poster in this period");
		$('.popinfo').show();
        
        //$('.popinfo').show().click(function(){
		//	$(".popinfo").hide();
        //    $(".close-icon").hide();
		//});
        function adjustPosition(){
            var p = $( ".popinfo" );
            var position = p.position();
            var closetop = position.top;
            var closeright = position.left + p.width();
            $(".close-icon").css({top: closetop + "px", left: closeright + "px"}).show().click(function(){
                $(".popinfo").hide();
                $(".close-icon").hide();
            });
        }
        adjustPosition();
        $(window).on("resize orientationchange", function() {
            console.log('Event: Resize or Orientation');
            adjustPosition();		
        });
	} else {
		console.log("Do not display poster in this period");
		$('.popinfo').remove();
	}
    
    
</script>

</body>
</html>