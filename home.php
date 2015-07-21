<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>jQuery</title>
		<link href="css/reset.css" type="text/css">
		<style>
			li { display: inline-block;margin: 0 10px 0 0; }
			a { color: #000; }
			a.active { color: #f00; }
		</style>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript">jQuery.noConflict();</script>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				/* Variable to store the url of each a tag */
				var url;

				/* Get the current page from the url, split the full url name and get the
				   last item of the split and assign it to a variable (currentPage). */
				var currentPage = location.href.split("/").pop();

				/* Get all of the a tags and assign it to a variable ($aTags) */
				var $aTags = $("#main_navigation a");

				/* Create a counter to cycle through each of the a tags.  Get the url links
				   of each tag, split it and get the last item of the split and assign it to a
				   variable (url).  Compare the variable url with the currentPage variable to see if 
				   they match.  If they do then assign and active class to the a tag */
				for(var i = 0;i < $aTags.length;i++){
					url = $aTags[i].href.split("/").pop();
					if(url === currentPage){
						$($aTags[i]).addClass("active");
					}
				}
			});
		</script>
	</head>
	<body>
		<nav>
			<ul id="main_navigation">
				<li><a href="home.php">Home</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				<li><a href="about-us.php">About Us</a></li>
				<li><a href="contact-us.php">Contact Us</a></li>
			</ul>
		</nav>
	</body>
</html>