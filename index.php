<?php include "weatherdata.php"; ?>

<!DOCTYPE html>

<html lang="en">

<head>
	<title>The Weathervane</title>
	<meta charset="utf-8">
	<meta name="description" content="The Weathervane: Current weather and forecasts without all the extra stuff!">
	<meta name='viewport' content='content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
	<link href="css/main.css" rel="stylesheet" media="all">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<body>

	<div id="weather-1" class="slider-container">
		<div id="weather-2" class="slider-container">
			<div id="weather-3" class="slider-container">

				<header role="banner">

					<a href="index.php"><div id="brand"><div class="logo"><img src="images/rooster.svg" alt="The Weathervane"></div><span id="brandname">Weathervane</span></div></a>

					<div id="finder-container">
						<input type="checkbox" id="finder-toggle"/>
						<form id="finder" name="locationFinder" method="get" action="index.php">
							<label style="display:none" for="zipcode">Enter City/State or Zip Code</label>
							<input type="text" id="zipcode" name="address" placeholder="Enter City/State or Zip Code" title="Enter City/State or Zip Code">
							<button type="submit" id="findersubmit" value="">&#x27A4;</button>
						</form>
						<label class="location-finder" for="finder-toggle">Choose Location</label>
					</div>

					<nav role="navigation">
						<ul class="navbar">
							<a href="#weather-1" class="slide"><li>Today</li></a>
							<a href="#weather-2"><li>Tomorrow</li></a>
							<a href="#weather-3"><li>7 Day</li></a>
						</ul>
					</nav>

				</header>

				<div class="pages">
					<div id="w1" class="page">
						<main role="main">
							<div id="location-time">
								<h1><?php echo $fullLocation; ?></h1>
								<?php echo $currentLocLink; ?><p><?php echo date('l, F jS, Y - g:i A'); ?></p>
							</div>
							<div id="weather-grid">
								<div class="col-100 grid-temp"><?php echo $current_temp; ?>&deg;</div>
								<div class="col-100 grid-hilow">
									<span style="font-size: 13px; font-weight: normal; margin-left: -5px;">Low - High</span><br/>
									<?php echo $temp_low; ?>&deg; - <?php echo $temp_hi; ?>&deg;
								</div>
								<div class="col-100 grid-icon">
									<img src="images/wi.gif" data-src="images/icons/<?php echo $current_icon; ?>.svg" alt="<?php echo $current_desc; ?>"><noscript><style>.grid-icon img { display: none; }</style><strong>Weather is:</strong><br></noscript><span style="display: block; margin-bottom: 20px;"><?php echo $current_desc; ?></span></div><div class="grid-forecast""><?php echo $current_forecast; ?></div></div><div class="clear"></div></main></div><div id="w2" class="page"><main role="main"><div id="location-time"><h1><?php echo $fullLocation; ?></h1><?php $datetime = new DateTime('tomorrow'); ?><p><?php echo $datetime->format('l, F jS, Y'); ?></p></div><div id="weather-grid"><div class="col-100 grid-hilow"><span style="font-size: 13px; font-weight: normal; margin-left: -5px;">Low - High</span><br/><?php echo $tomorrow_temp_low; ?>&deg; - <?php echo $tomorrow_temp_hi; ?>&deg;</div><div class="col-100 grid-icon""><img src="images/wi.gif" data-src="images/icons/<?php echo $tomorrow_icon; ?>.svg" alt="<?php echo $tomorrow_weather_short; ?>"></div><div class="grid-forecast"><?php echo $tomorrow_weather; ?></div></div><div class="clear"></div></main></div><div id="w3" class="page"><main role="main" class="multiday-table"><div id="location-time"><h1><?php echo $fullLocation; ?></h1><p>7-Day Forecast</p></div><div id="weather-grid"><div class="col-100 multiday titles"><div class="period">DAY</div><div class="temp">TEMP</div><div class="pop">PREC</div><div class="weather">FORECAST</div></div><?php echo $multiday; ?></div><div class="clear"></div></main></div></div></div></div></div></div><footer role="contentinfo"><div class="center"><strong>THE WEATHERVANE</strong><br>Current weather and forecasts without all the extra stuff! <br><small>Copyright &copy; <time datetime="2016">2016</time> | Data from <a href="http://www.weather.gov" target="_blank" style="color:#fff">NWS</a></small></div></footer><script>function init() { var imgDefer = document.getElementsByTagName('img'); for (var i=0; i<imgDefer.length; i++) { if(imgDefer[i].getAttribute('data-src')) { imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src')); } } } window.onload = init;</script>

</body>


<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85228879-1', 'auto');
  ga('send', 'pageview');

</script>

</html>

