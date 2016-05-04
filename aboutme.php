<?php
if(isset($_POST['submit'])){
	$to = "aneel@yelamanchili.io"; // this is your Email address
	$from = $_POST['email']; // this is the sender's Email address
	$name = $_POST['name'];
	$subject = "Form submission";
	$subject2 = "Copy of your form submission";
	$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
	$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to,$subject,$message,$headers);
	mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
	// You can also use header('Location: thank_you.php'); to redirect to another page.
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>About Me | Aneel Yelamanchili</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->

                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
                                    </span><a href="index.php" class="logo"><span class="title">&nbsp;Aneel Yelamanchili</span>
								</a>

						</div>
					</header>
				<!-- Main -->
					<div id="main">
                        <center><img width="17%" src="assets/img/profile.jpg" alt="" /></center>
						<div class="inner">
							<center><p><br />I am an 18 year old software developer from Pleasanton, California. I have experience in many technical fields, and have worked in the technology industry.<br /><br />I am currently a student at University of Southern California's Viterbi School of Engineering majoring in computer science.<br /><br /> I had the opportunity to work as an intern in Symantec Corporation's Data Loss Prevention group in San Francisco, California. During my six month tenure at Symantec, I worked on many projects, and worked with tools such as automation frameworks, Perforce, Jenkins, and Unix. I delved into cloud computing by working closely with the SaaS team to deploy the product in the cloud. <br /><br />Currently, I am lead web developer for USC's premier newspaper, the Daily Trojan. At the Trojan, I develop for their website and work on special web-based projects. <br /><br />This summer I will be intering as a Software Engineering Intern at Salesforce.com in San Francisco.</p></center>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="text" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" name="submit" value="Send" class="special" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Links</h2>
								<ul class="icons">
                                    <li><a href="https://www.facebook.com/ayelamanchili" target="_blank" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://twitter.com/aneel_y" target="_blank" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="http://instagram.com/aneel.yelamanchili" target="_blank" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                                    <li><a href="https://www.linkedin.com/in/ayelamanchili" target="_blank" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="http://github.com/aneelyelamanchili" target="_blank" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="http://facebook.com/aneelphoto" target="_blank" class="icon style2 fa-camera-retro"><span class="label">Photography</span></a></li>
									<li><a href="resume.pdf" class="icon style2 fa-file-text-o"><span class="label">Resume</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Aneel Yelamanchili 2016</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
