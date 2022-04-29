<?php include "common.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<meta name="robots" content="index, follow, noarchive" />
	<link href="http://fonts.googleapis.com/css?family=Quicksand:400,300|Open+Sans+Condensed:300,700,300italic|PT+Sans:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css+js/jquery.countdown.css"> 
	<script type="text/javascript" src="css+js/jquery.plugin.min.js"></script>
	<script type="text/javascript" src="css+js/jquery.countdown.min.js"></script>
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
	</style>
	<script type="text/javascript" src="css+js/scripts.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function () {
			$("#BooksSelect").hide();
			
			$.ajax({
				type: "GET",
				url: "resources/nkjv.xml",
				dataType: "xml",
				success: function (xml) {
					$("#loading").hide();
					$("#BooksSelect").append("<option>Select a book</option>");
					$("#BooksSelect").show();
					$(xml).find("book").each(function() {
						$("#BooksSelect").append("<option onclick=\"reading('"+$(this).attr("name")+"','1');\">"+$(this).attr("name")+"</option>");
					});
				}
			});
		
		});
		
		function reading(book,chapter) {
			var GoNext = "", GoBack = "", BookName = "";
			$('#reading').html("");
			$.ajax({
				type: "GET",
				url: "resources/nkjv.xml",
				dataType: "xml",
				success: function (xml) {
					$(xml).find("book[name='"+book+"']").each(function() {
						// Book name
						//$("#reading").append($(this).attr("name") + "<br />");
						BookName = $(this).attr("name");
						
						var prevchapter = Number(chapter) - 1;
						$(this).find("chapter[name='"+prevchapter+"']").each(function() {
							//$("#reading").append("prev is " + $(this).attr("name") + "<br />");
							GoBack = "<a onclick=\"reading('"+book+"','" + $(this).attr("name") + "');\"><</a>";
						});
						
						var nextchapter = Number(chapter) + 1;
						$(this).find("chapter[name='"+nextchapter+"']").each(function() {
							//$("#reading").append("next is " + $(this).attr("name") + "<br />");
							GoNext = "<a onclick=\"reading('"+book+"','" + $(this).attr("name") + "');\">></a>";
							
						});
						$(this).find("chapter[name='"+chapter+"']").each(function() {
							// Chapter number
							$("#reading").append("<h5 class='about'>" + GoBack + "<span>" + BookName + " " + $(this).attr("name") + "</span>" + GoNext + "</h5>");
							
							$(this).find("verse").each(function() {
								// Verse number
								
								$("#reading").append("<b class='about'>" + $(this).attr("name") + "</b>");
								$("#reading").append($(this).text());
						
							
							});
							
						
						});
						
					});
				}
				
			});
			
		}
		
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
			<h2 class="about" style='text-transform: none;'>the Bible <span style="font-size:small;">NKJV</span></h2>
			<div id="loading">
				Please wait while the files are loading.
				<div class='progress-bar'>&nbsp;</div>
			</div>
			
			<select id="BooksSelect"></select>
			<div id="reading"></div>
		
		</div>
		<div style="clear:both;"></div>
	</div>
</div>
</body>
</html>