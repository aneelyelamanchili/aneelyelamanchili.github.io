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
		<title>Aneel Yelamanchili</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
	</head>
	<body>
        <svg class="clouds cloud1" enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M285.928,113.067c62.492,0,113.327,50.827,113.327,113.327c0,0.344-0.041,0.705-0.066,1.049  c-0.049,0.836-0.107,1.672-0.123,2.525l-0.426,17.133l17.159,0.065c41.53,0.115,75.313,34.005,75.313,75.535  c0,41.415-33.718,75.305-75.157,75.518l-3.664,0.016H104.977c-46.244-0.049-83.872-37.693-83.872-83.929  c0-35.825,22.806-67.714,56.737-79.356l9.444-3.229l1.664-9.838c4.115-24.282,24.97-41.907,49.588-41.907  c7.846,0,15.428,1.82,22.536,5.394l15.306,7.689l7.386-15.444C202.531,138.398,242.635,113.067,285.928,113.067 M285.928,96.277  c-51.778,0-96.358,30.315-117.303,74.092c-9.059-4.558-19.256-7.182-30.086-7.182c-33.233,0-60.762,24.184-66.14,55.893  C32.82,232.657,4.316,270.104,4.316,314.307c0,55.597,45.063,100.669,100.644,100.718h311.084v-0.016  c50.777-0.263,91.856-41.481,91.856-92.308c0-50.909-41.177-92.177-92.053-92.324c0.033-1.344,0.197-2.639,0.197-3.984  C416.044,154.532,357.79,96.277,285.928,96.277L285.928,96.277z" fill="#37404D"/></svg>
                <svg class="clouds cloud2" enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M285.928,113.067c62.492,0,113.327,50.827,113.327,113.327c0,0.344-0.041,0.705-0.066,1.049  c-0.049,0.836-0.107,1.672-0.123,2.525l-0.426,17.133l17.159,0.065c41.53,0.115,75.313,34.005,75.313,75.535  c0,41.415-33.718,75.305-75.157,75.518l-3.664,0.016H104.977c-46.244-0.049-83.872-37.693-83.872-83.929  c0-35.825,22.806-67.714,56.737-79.356l9.444-3.229l1.664-9.838c4.115-24.282,24.97-41.907,49.588-41.907  c7.846,0,15.428,1.82,22.536,5.394l15.306,7.689l7.386-15.444C202.531,138.398,242.635,113.067,285.928,113.067 M285.928,96.277  c-51.778,0-96.358,30.315-117.303,74.092c-9.059-4.558-19.256-7.182-30.086-7.182c-33.233,0-60.762,24.184-66.14,55.893  C32.82,232.657,4.316,270.104,4.316,314.307c0,55.597,45.063,100.669,100.644,100.718h311.084v-0.016  c50.777-0.263,91.856-41.481,91.856-92.308c0-50.909-41.177-92.177-92.053-92.324c0.033-1.344,0.197-2.639,0.197-3.984  C416.044,154.532,357.79,96.277,285.928,96.277L285.928,96.277z" fill="#37404D"/></svg>
                <svg class="clouds cloud3" enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M285.928,113.067c62.492,0,113.327,50.827,113.327,113.327c0,0.344-0.041,0.705-0.066,1.049  c-0.049,0.836-0.107,1.672-0.123,2.525l-0.426,17.133l17.159,0.065c41.53,0.115,75.313,34.005,75.313,75.535  c0,41.415-33.718,75.305-75.157,75.518l-3.664,0.016H104.977c-46.244-0.049-83.872-37.693-83.872-83.929  c0-35.825,22.806-67.714,56.737-79.356l9.444-3.229l1.664-9.838c4.115-24.282,24.97-41.907,49.588-41.907  c7.846,0,15.428,1.82,22.536,5.394l15.306,7.689l7.386-15.444C202.531,138.398,242.635,113.067,285.928,113.067 M285.928,96.277  c-51.778,0-96.358,30.315-117.303,74.092c-9.059-4.558-19.256-7.182-30.086-7.182c-33.233,0-60.762,24.184-66.14,55.893  C32.82,232.657,4.316,270.104,4.316,314.307c0,55.597,45.063,100.669,100.644,100.718h311.084v-0.016  c50.777-0.263,91.856-41.481,91.856-92.308c0-50.909-41.177-92.177-92.053-92.324c0.033-1.344,0.197-2.639,0.197-3.984  C416.044,154.532,357.79,96.277,285.928,96.277L285.928,96.277z" fill="#37404D"/></svg>
                <svg class="clouds cloud4" enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M285.928,113.067c62.492,0,113.327,50.827,113.327,113.327c0,0.344-0.041,0.705-0.066,1.049  c-0.049,0.836-0.107,1.672-0.123,2.525l-0.426,17.133l17.159,0.065c41.53,0.115,75.313,34.005,75.313,75.535  c0,41.415-33.718,75.305-75.157,75.518l-3.664,0.016H104.977c-46.244-0.049-83.872-37.693-83.872-83.929  c0-35.825,22.806-67.714,56.737-79.356l9.444-3.229l1.664-9.838c4.115-24.282,24.97-41.907,49.588-41.907  c7.846,0,15.428,1.82,22.536,5.394l15.306,7.689l7.386-15.444C202.531,138.398,242.635,113.067,285.928,113.067 M285.928,96.277  c-51.778,0-96.358,30.315-117.303,74.092c-9.059-4.558-19.256-7.182-30.086-7.182c-33.233,0-60.762,24.184-66.14,55.893  C32.82,232.657,4.316,270.104,4.316,314.307c0,55.597,45.063,100.669,100.644,100.718h311.084v-0.016  c50.777-0.263,91.856-41.481,91.856-92.308c0-50.909-41.177-92.177-92.053-92.324c0.033-1.344,0.197-2.639,0.197-3.984  C416.044,154.532,357.79,96.277,285.928,96.277L285.928,96.277z" fill="#37404D"/></svg>
                <svg class="clouds cloud5" enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M285.928,113.067c62.492,0,113.327,50.827,113.327,113.327c0,0.344-0.041,0.705-0.066,1.049  c-0.049,0.836-0.107,1.672-0.123,2.525l-0.426,17.133l17.159,0.065c41.53,0.115,75.313,34.005,75.313,75.535  c0,41.415-33.718,75.305-75.157,75.518l-3.664,0.016H104.977c-46.244-0.049-83.872-37.693-83.872-83.929  c0-35.825,22.806-67.714,56.737-79.356l9.444-3.229l1.664-9.838c4.115-24.282,24.97-41.907,49.588-41.907  c7.846,0,15.428,1.82,22.536,5.394l15.306,7.689l7.386-15.444C202.531,138.398,242.635,113.067,285.928,113.067 M285.928,96.277  c-51.778,0-96.358,30.315-117.303,74.092c-9.059-4.558-19.256-7.182-30.086-7.182c-33.233,0-60.762,24.184-66.14,55.893  C32.82,232.657,4.316,270.104,4.316,314.307c0,55.597,45.063,100.669,100.644,100.718h311.084v-0.016  c50.777-0.263,91.856-41.481,91.856-92.308c0-50.909-41.177-92.177-92.053-92.324c0.033-1.344,0.197-2.639,0.197-3.984  C416.044,154.532,357.79,96.277,285.928,96.277L285.928,96.277z" fill="#37404D"/></svg>
                <svg class="clouds cloud6" enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M285.928,113.067c62.492,0,113.327,50.827,113.327,113.327c0,0.344-0.041,0.705-0.066,1.049  c-0.049,0.836-0.107,1.672-0.123,2.525l-0.426,17.133l17.159,0.065c41.53,0.115,75.313,34.005,75.313,75.535  c0,41.415-33.718,75.305-75.157,75.518l-3.664,0.016H104.977c-46.244-0.049-83.872-37.693-83.872-83.929  c0-35.825,22.806-67.714,56.737-79.356l9.444-3.229l1.664-9.838c4.115-24.282,24.97-41.907,49.588-41.907  c7.846,0,15.428,1.82,22.536,5.394l15.306,7.689l7.386-15.444C202.531,138.398,242.635,113.067,285.928,113.067 M285.928,96.277  c-51.778,0-96.358,30.315-117.303,74.092c-9.059-4.558-19.256-7.182-30.086-7.182c-33.233,0-60.762,24.184-66.14,55.893  C32.82,232.657,4.316,270.104,4.316,314.307c0,55.597,45.063,100.669,100.644,100.718h311.084v-0.016  c50.777-0.263,91.856-41.481,91.856-92.308c0-50.909-41.177-92.177-92.053-92.324c0.033-1.344,0.197-2.639,0.197-3.984  C416.044,154.532,357.79,96.277,285.928,96.277L285.928,96.277z" fill="#37404D"/></svg>
                <svg class="clouds cloud7" enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M285.928,113.067c62.492,0,113.327,50.827,113.327,113.327c0,0.344-0.041,0.705-0.066,1.049  c-0.049,0.836-0.107,1.672-0.123,2.525l-0.426,17.133l17.159,0.065c41.53,0.115,75.313,34.005,75.313,75.535  c0,41.415-33.718,75.305-75.157,75.518l-3.664,0.016H104.977c-46.244-0.049-83.872-37.693-83.872-83.929  c0-35.825,22.806-67.714,56.737-79.356l9.444-3.229l1.664-9.838c4.115-24.282,24.97-41.907,49.588-41.907  c7.846,0,15.428,1.82,22.536,5.394l15.306,7.689l7.386-15.444C202.531,138.398,242.635,113.067,285.928,113.067 M285.928,96.277  c-51.778,0-96.358,30.315-117.303,74.092c-9.059-4.558-19.256-7.182-30.086-7.182c-33.233,0-60.762,24.184-66.14,55.893  C32.82,232.657,4.316,270.104,4.316,314.307c0,55.597,45.063,100.669,100.644,100.718h311.084v-0.016  c50.777-0.263,91.856-41.481,91.856-92.308c0-50.909-41.177-92.177-92.053-92.324c0.033-1.344,0.197-2.639,0.197-3.984  C416.044,154.532,357.79,96.277,285.928,96.277L285.928,96.277z" fill="#37404D"/></svg>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->

                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
                                    </span><a href="aboutme.php" class="logo"><span class="title">&nbsp;Aneel Yelamanchili</span>
								</a>

							<!-- Nav -->

								<nav>
									<ul>

										<li><a href="aboutme.php">about me</a></li>


									</ul>
								</nav>


						</div>
					</header>

				<!-- Menu -->
                <!--
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.html">Ipsum veroeros</a></li>
							<li><a href="generic.html">Tempus etiam</a></li>
							<li><a href="generic.html">Consequat dolor</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>
                -->

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
                                <h1>Developer. Student. Photographer.</h1>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/village.jpg" alt="" />
									</span>
									<a href="http://projects.dailytrojan.com/sp16" target="_blank">
										<h2>It Takes a Village</h2>
										<div class="content">
											<p>Supplemental piece that examines the relationship between USC and its neighbors</p>
										</div>
									</a>
								</article>
                                <article class="style5">
									<span class="image">
										<img src="images/friendbot.jpg" alt="" />
									</span>
									<a href="http://gofriendbot.com/" target="_blank">
										<h2>FriendBot</h2>
										<div class="content">
											<p>A Facebook Messenger bot that connects you with people of similar interests</p>
										</div>
									</a>
                                </article>
								<article class="style2">
									<span class="image">
										<img src="images/trees.jpg" alt="" />
									</span>
									<a href="https://www.flickr.com/photos/133143794@N07/with/21017690970/" target="_blank">
										<h2>Photography</h2>
										<div class="content">
											<p>A collection of my personal and professional photographs</p>
										</div>
									</a>
                                </article>
                                <article class="style3">
									<span class="image">
										<img src="images/code.png" alt="" />
									</span>
									<a href="http://github.com/aneelyelamanchili" target="_blank">
										<h2>GitHub</h2>
										<div class="content">
											<p>Personal projects I am working on or have worked on in the past</p>
										</div>
									</a>
                                </article>
                                <article class="style4">
									<span class="image">
										<img src="images/project.jpg" alt="" />
									</span>
									<a href="http://beta.yelamanchili.io/" target="_blank">
										<h2>Beta Site</h2>
										<div class="content">
											<p>Web-based project I am currently working on</p>
										</div>
									</a>
                                </article>
							</section>
                            <br />
                            <hr width="50%"/>
                            <h2>Education</h2>
                            <ul class="logos resume">
                                    <li style="background-image: url('assets/img/logos/cornell.png');"><a href="http://cornell.edu" target="_blank">Cornell</a></li>
                                    <li style="background-image: url('assets/img/logos/usc.png');"><a href="http://usc.edu" target="_blank">USC</a></li>
                            </ul>
                                <hr width="50%"/>
                            <h2>Experience</h2>
                            <ul class="logos resume">
                                    <li style="background-image: url('assets/img/logos/symantec.png');"><a href="http://symantec.com" target="_blank">Symantec</a></li>
                                    <li style="background-image: url('assets/img/logos/dailytrojan.png');"><a href="http://dailytrojan.com" target="_blank">Daily Trojan</a></li>
                                    <li style="background-image: url('assets/img/logos/salesforce.png');"><a href="http://salesforce.com" target="_blank">Salesforce.com</a></li>
                              </ul>

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
									<li><a href="resume.pdf" class="icon style2 fa-file-text-o" target="_blank"><span class="label">Resume</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Aneel Yelamanchili 2016</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-67206143-1', 'auto');
			  ga('send', 'pageview');

			</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
