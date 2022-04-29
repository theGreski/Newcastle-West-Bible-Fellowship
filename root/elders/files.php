<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="Author" content="Grzegorz Rekowski" />
	<meta name="robots" content="noindex,nofollow" />
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
                        document.getElementById('CheckFiles').innerHTML = $http.responseText;
                        setTimeout(function(){$self();}, 1000);
                    }
                };
                $http.open('GET', 'chfiles.php' + '?' + new Date().getTime(), true);
                $http.send(null);
            }

        }
		
    </script>
	<style type="text/css">
		body {
			line-height: 14pt;
			font-weight: normal;
			font-size: 10pt;
			color: #343733;
			margin: 0px;
			padding-left: 3px;
		}
		.list {
			font-family: "Century Gothic", "Lucida Sans Unicode", Arial, Helvetica, sans-serif;
			height: 99px;
			overflow: hidden;
			font-size: 0.92em; 
			line-height: 1.37em;
			color: #949793;
		}
		.left {
			width: 367px;
		}
		.right a{
			width: 10px;
			font-family: "Century Gothic", "Lucida Sans Unicode", Arial, Helvetica, sans-serif;
			text-decoration: none;
			border: none;
			font-weight: 700;
			MARGIN: 0px 10px;
			size: 1.4em;
			line-height: 0.8em;
			color: #D9718B;
		}
	</style>
</head>
<body>
<script type="text/javascript">
	setTimeout(function() {Ajax();}, 4000);
</script>
<div id='CheckFiles' class="list">Checking files ...</div>

</body>
</html>