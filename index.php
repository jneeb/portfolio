<?php
	session_start();
	function generateFormToken($form) {
			$token = sha1(uniqid(microtime(), true));
			$_SESSION[$form.'_token'] = $token;
			return $token;
}
function verifyFormToken($form) {
if (!isset($_SESSION[$form.'_token'])) {
	return false;
	}	if (!isset($_POST['token'])) {
		return false;
	} if ($_SESSION[$form.'_token'] !== $_POST['token']) {
		return false;
	}
	return true;
}
if (verifyFormToken)('form1')) {
	if (issit($_POST["message"])) {
		$whitelist = array("token", "name", "email", "message");
		foreach ($_POST as $key => $value) {
			if (!in_array($key, $whitelist)) {
				die();
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<title>Justin Neeb | Toronto Front-End Developer</title>
			<link rel="stylesheet" href="/css/main.css" media="screen" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="icon" href="img/favicon.ico">
			<link href="https://fonts.googleapis.com/css?family=Montserrat:500|Open+Sans|Pacifico" rel="stylesheet">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<?php
		$newToken = generateFormToken('form1');
	?>
	<body>
		<div class="flexWrap">
			<div class="mobileNav" id="mobileNav">
				<ul>
					<li><a id="mobilePortfolioLink" href="#portfolio">Portfolio</a></li>
					<li><a id="mobileAboutLink" href="#about">About</a></li>
					<li><a id="mobileContactLink" href="#contact">Contact</a></li>
				</ul>
			</div>
			<div class="navPosistion">
				<a href="#landing"><img class="navLogo" src="img/siteLogoJN.png" alt="sitelogo"></a>
				<div class="desktopNav">
					<ul>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
				<div class="mobileNavBurger" id="mobileNavBurger">
					<span></span>
				</div>
			</div>
			<section class="sections">
				<div id="landing" class="homeFlex">
					<div class="col-1">
						<img src="img/homeTextGrey.png" />
						<!-- <span></span> -->
						<h4>Front-End Developer.</h4>
					</div>
				 <img src="img/background.png" alt="Skyline" class="parallax">
				</div>
				<section id="portfolio" class="portfolio">
					<h2>Portfolio</h2>
					<div class="workFlex">
						<div class="col-2">
							<img src="img/Responsive Design.png" alt="Responsive Design">
						</div>
						<div class="col-2">
							<h4>Responsive Web Design</h4>
							<p>
								Websites that are made to look good on any device.
							</p>
							<a href="#" class="btn">Visit Website</a>
						</div>
					</div>
					<div class="workFlexReverse">
						<div class="col-3">
							<img src="img/Responsive Design.png" alt="Responsive Design">
						</div>
						<div class="col-3">
							<h4>Responsive Web Design</h4>
							<p>
								Websites that are made to look good on any device.
							</p>
							<a href="#" class="btn">Visit Website</a>
						</div>
					</div>
				</section>
				<section id="about" class="about">
					<h2>About Me</h2>
					<div class="aboutFlex">
						<span></span>
						<div class="col-4">
							<p>
								Hi, I'm Justin Neeb, a freelance Front-End Developer based out of Toronto, Ontario. When I am not working for clients in Toronto, I'm working for online agencies or on my side projects.
							</p>
							<p>
								I have a diverse skillset when it comes to Front-End (HTML, CSS3, Javascript, Responsive Web Design) which allows me to create modern, mobile-first websites.
							</p>
						</div>
					</div>
				</section>
				<section id="contact" class="contact">
					<h2>Contact</h2>
					<div class="contactFlex">
						<div class="contactLinks">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> Toronto, ON</p>
							<p><i class="fa fa-envelope-o" aria-hidden="true"></i> mail@justinneeb.com</p>
							<a href="https://github.com/jneeb"><img src="img/github.png" alt="Github"></a>
						</div>
						<form id="contactForm" action="form.php" method="post">
							<input type="hidden" name="token" value="<?php echo $newToken; ?>" />
							<div class="row-1">
								<input type="text" id="contactName" placeholder="Name" name="name"/>
								<input type="text" placeholder="Email" name="Email"/>
							</div>
							<div class="row-2">
								<textarea placeholder="Message" rows="6" name="message"></textarea>
							</div>
							<div class="row-3">
								<input type="submit" class="btn"/>
							</div>
						</form>
					</div>
					<div id="map"></div>
				</section>
			</section>
		</div>
	</body>
	<script type="text/javascript" src="functions.js"></script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtOHi-D41sqHHFyKormXrD3gmeM8vIbXs&callback=initMap">
    </script>
</html>
