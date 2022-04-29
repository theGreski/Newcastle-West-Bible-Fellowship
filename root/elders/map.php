<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<title>Evangelisation Map - Newcastle West Bible Fellowship</title>
	<meta name="robots" content="noindex,nofollow" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/styles/style.css" rel="stylesheet" />
	<link type="text/css" href="http://www.ncwbiblefellowship.com/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" media="screen" />
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/motionpack.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/jquery.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/texts.js" type="text/javascript"></script>
	<script language="JavaScript" src="http://www.ncwbiblefellowship.com/scripts/settings.js" type="text/javascript"></script>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.ncwbiblefellowship.com/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <style type="text/css">
		html { height: 100% }
		body { 
			height: 100%; margin: 0; padding: 0;
		}
		#map_canvas { height: 100%; z-index: 1; }
		.phoneytext {
			text-shadow: 0 -1px 0 #000;
			color: #fff;
			font-size: 0.7em;
			line-height: 1.1em;
			padding: 0px 5px 2px 5px;
			font-weight: bold;
			background: url(../images/arrow.png) 95% 50% no-repeat;
			text-align: left;
			overflow: hidden;
		}
		.phoney { overflow: hidden; }
		#ReloadThis { 
			position: absolute; top: 18px; right: 22px; z-index: 99;
			font-size: 0.75em;
			text-align: left;
			background: #222521;
			padding: 2px;
			border-radius: 5px;
			opacity: 0.6;
			color: #BCD18B;
		}
		#ReloadThis:hover { 
			opacity: 0.8;
		}
		.updatelink {
			position: absolute; top: 3px; left: 44%;
			font-size: 0.7em;
			z-index: 98;
		}
		.updatelink a {
			background-color: #ffffff;
			padding: 2px 5px 2px 5px;
			border-radius: 4px;
			border: 1px solid #ffffff;
		}
		.updatelink a:hover {
			border: 1px solid #bcd18b;
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
                        setTimeout(function(){$self();}, 2000);
                    }
                };
                $http.open('GET', 'mapread.php' + '?' + new Date().getTime(), true);
                $http.send(null);
            }
        }
    </script>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBASNTqKH2WGUEvCZHtd5ls_PcEyN2mhsU&sensor=false">
    </script>
	<script type="text/javascript" src="infobubble.js"></script>
	<script type="text/javascript">
		function initialize() {
			var infoBubble;
			var mapDiv = document.getElementById('map_canvas');
			var map = new google.maps.Map(mapDiv, {
				center: new google.maps.LatLng(52.45150000000000, -9.05536000000000),
				zoom: 15,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: false,
				navigationControl: true,
				navigationControlOptions: {
					style: google.maps.NavigationControlStyle.SMALL
				},
				streetViewControl: false
			});

<?php
$fp = fopen('gospel.txt','r');
while (!feof($fp)) {

$line = fgets($fp, 1024); //use 2048 if very long lines
$field = explode ('|', $line);

echo 	$field[1].' = new InfoBubble({
			map: map,
			content: \'<div class="phoneytext">'.$field[1].'<br />'.$field[0].'&nbsp;&nbsp;&nbsp;&nbsp;'.$field[3].'</div>\',
			position: new google.maps.LatLng('.$field[2].'),
			shadowStyle: 0,
			padding: 0,
			backgroundColor: \'rgb(57,57,57)\',
			borderRadius: 4,
			arrowSize: 8,
			borderWidth: 1,
			borderColor: \'#2c2c2c\',
			disableAutoPan: true,
			hideCloseButton: true,
			arrowPosition: 25,
			backgroundClassName: \'phoney\',
			arrowStyle: 0
		});
		'.$field[1].'.open();
';
}
fclose($fp);
?>
		}
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body onload="initialize()" style="background: #ffffff">
	<div id="map_canvas" style="width:100%; height:100%"></div>
	<div class='updatelink'>
		<a id="updater" href="mapupdate.php">UPDATE MAP</a> | <a id="updater" href="index.php">ELDERS PANEL</a>
	</div>
	<script type="text/javascript">
		setTimeout(function() {Ajax();}, 4000);
	</script>
	<div id='ReloadThis'>Retriving feeds ...</div>
</body>
</html>