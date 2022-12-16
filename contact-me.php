<!DOCTYPE html>
<html>
<head>
    <title>usef CV</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/css.css" />
	<link rel="stylesheet" href="css/form/style.css">
	<style>
		.intro h1:before {
			content: 'yousef';
		}
		.btn-send{
			border-color: white;
			background-color: #1089ff;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<?php
	if(isset($_POST))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$sub=$_POST['subject'];
		$text=$_POST['message'];
		$directory = "mails/";
		$filecount = 0;
		$files2 = glob( $directory ."*" );
		if( $files2 )
		{
		    $filecount = count($files2);
		}
		$fp = fopen('mails/'.($filecount+1).'.txt', 'w');
		fwrite($fp, $name."\xA".$email."\xA".$sub."\xA".$text);
		fclose($fp);
	}
?>
	<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo">USEF</span>
				</div>
			    <nav id="navbar-1" class="navbar item-nav">
				    <ul>
				        <li><a href="introduction.html">Introduction</a></li>
				        <li class="active"><a href="contact-me.html">Contact me</a></li>
				        <li><a href="achivement.html">Achievements</a></li>
				        <li><a href="skill.html">Skills</a></li>
				    </ul>
				</nav>
			</header>
		</div>
	</div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<form method="POST" id="contactForm" name="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input class="btn-send" value="send" type="submit" name="submit" onclick="if(window.confirm('do you confirm your message?'))window.alert('Your message send seccessfuly');">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contact Me</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> 42 Rezaee Azadi street</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+98 939 486 6107</a></p>
					          </div>
				          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="quote">
		<div class="container text-centered">
			<h1>Thanks for watching.</h1>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="units-row">
			    <div class="unit-50">
					<ul class="social list-flat right">
						<li><a href="https://t.me/usefsdd"><i class="fa fa-send"></i></a></li>
						<li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://github.com/usefsdd"><i class="fa fa-github"></i></a></li>
					</ul>
			    </div>
			</div>
		</div>
	</footer>
	<script>
		function click()
		{
			window.confirm('do you confirm your message?');
		}
	</script>
</body>
</html>
