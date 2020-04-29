<!DOCTYPE php>
<?php 
session_start();
require_once '../../config/utils.php';
$getwebsByIdQuery = "select * from web_settings ";
$webs = queryExecute($getwebsByIdQuery, false);
$getroomByIdQuery = "select * from room_types where status < '2' ";
$room = queryExecute($getroomByIdQuery, true);
?>
<!--[if IE 8]> <php class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <php class="no-js" lang="en-US"> <!--<![endif]-->


<!-- Mirrored from www.cssigniter.com/themeforest/sixtyone/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/php;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Contact &ndash; SixtyOne</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS
	================================================== -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lora%3A400%2C700%2C400italic%2C700italic&amp;ver=3.9.2' type='text/css' media='all' />
	<link rel='stylesheet' href='css/normalize.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/bootstrap.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/flexslider.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
	<link rel='stylesheet' href='js/fancybox/jquery.fancybox.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/mmenu.css' type='text/css' media='all' />
	<link rel='stylesheet' href='style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/jquery-ui.css' type='text/css' media='all' />
	<link rel='stylesheet' href='colors/default.css' type='text/css' media='all' />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="#">
	<link rel="apple-touch-icon" href="#">
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<link rel="apple-touch-icon" sizes="114x114" href="#">
</head>

<body>
<div id="page">

	<div id="mobile-bar">
	<a class="menu-trigger" href="#mobilemenu"><i class="fa fa-bars"></i></a>
	<p class="mob-title">Contact</p>
</div>
	<div id="panel">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Contact us</h2>
					<p>Pointblank Str. 14, 54321, California</p>
					<div id="panel-map" style="width:100%; height:300px"></div>
				</div>
			</div>
		</div>
	</div><!-- /panel -->

	<header id="top-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="top" class="group">
						<div class="row">
							<div class="col-md-5">
								<p>Voted "Best resort" of the year</p>
							</div>
							<div class="col-md-2">
								<p class="text-center">
									<a href="#" title="See the map" id="map-icon">
										<i class="fa fa-map-marker"></i>
									</a>
								</p>
							</div>
							<div class="col-md-5">
							<ul id="misc"><li><?=  $webs['address']?></li><li><?= $webs['email']?></li></ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-5">
							<nav class="nav">
								<ul id="main-nav-left" class="navigation group">
									<li><a href="index.php">Home</a></li>
									<li><a href="listing-3cols.php">Rooms</a>
										<ul class="sub-menu">
											<li><a href="listing-2cols.php">Listing 2 Columns</a></li>
											<li><a href="listing-3cols.php">Listing 3 Columns</a></li>
											<li><a href="listing-4cols.php">Listing 4 Columns</a></li>
										</ul>
									</li>
									<li><a href="gallery-single.php">Gallery</a></li>
									<li><a href="blog.php">Blog</a>
									<li><a href="booking.php">Booking</a></li>

								</ul>
							</nav>
						</div>
						<div id="logo-wrap" class="col-md-2 col-sm-12">
							<h1 class="imglogo">
								<a href="index2.php">
									<img src="<?= BASE_URL . $webs['logo']?>" alt="SixtyOne"/>
								</a>
							</h1>
						</div>
						<div class="col-md-5">
							<nav class="nav">
								<ul id="main-nav-right" class="navigation group">
										<ul>
											<li><a href="single.php">Article</a></li>
										</ul>
									</li>
									<li><a href="location.php">Location</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="<?= BASE_URL . 'login.php' ?>">Đăng nhập</a></li>
									<li><a href="<?= BASE_URL . 'registration.php' ?>">Đăng ký</a></li>
								</ul>
							</nav>
						</div>
					</div><!-- /row -->

					<div id="mobilemenu"></div>

				</div><!-- /col-md-12 -->
			</div><!-- /col-md-12 -->
		</div><!-- /container -->
	</header><!-- /top-wrap -->
<main class="container">
	<div class="row">
		<div class="col-md-8 col-md-push-4">
			<h2>Contact</h2>
			<p class="excerpt">Vivamus id mollis quam. <a href="#">Morbi ac commodo nulla</a>. In condimentum orci <strong>id nisl volutpat</strong> bibendum. Quisque commodo quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat consectetur, nisl orci bibendum elit.</p>
			<div class="contact-form">
	<div id="done" style="display:none;"><div class="wrap"><h3>Thank you for your message! We'll get back to you as soon as possible!</h3></div></div>
	<form id="cform" class="contact" action="contact.php" method="POST" enctype="multipart/form-data">
		<p>
			<label for="name">Your Name:</label>
			<input type="text" id="name" name="name"/>
		</p>

		<p>
			<label for="email">Your Email:</label>
			<input type="email" id="email" name="email"/>
		</p>

		<p>
			<label for="subject">Subject:</label>
			<input type="text" id="subject" name="subject"/>
		</p>

		<p>
			<label for="message">Message</label>
			<textarea name="messages" id="messages" cols="30" rows="10"></textarea>
		</p>

		<input type="submit" name="luu" value="Gửi" class="btn btn-primary">&nbsp;

		<?php
		
		if(isset($_POST['luu'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$messages = $_POST['messages'];
			$sql = "insert into contacts 
					(name, email, subject, messages,status)
			values 
					('$name','$email','$subject','$messages','0')";
			//dd($sql);
			queryExecute($sql, false);
			echo 'Phản hồi thành công';
			die;
			}
	?>
	</form>
	
	
</div>		</div><!-- /col-md-8 -->

		<div class="col-md-4 col-md-pull-8">
			<aside class="widget">
				<div class="aside-container">
				<p>Welcome Hotel</p>
				<p>
									Số điện thoại: +84<?= $webs['phone_number'] ?><br>
									Email: <?= $webs['email'] ?><br>
									Địa chỉ: <?= $webs['address'] ?>
									</p>
				</div>
			</aside>
		</div>
	</div><!-- /row -->
</main><!-- /container -->

			<footer id="footer" class="footer-page">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="booking">
	<form action="https://www.cssigniter.com/themeforest/sixtyone/booking.php" method="post">
		<div class="booking-field booking-arrive">
			<input type="text" class="datepicker" name="arrive" placeholder="Arrive">
		</div>

		<div class="booking-field booking-depart">
			<input type="text" class="datepicker" name="depart" placeholder="Depart">
		</div>

		<div class="booking-field booking-guests">
			<label for="guest_no" class="sr-only"></label>
			<select id="guest_no" name="guests" class="dk">
				<option value="">Guests</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>

		<div class="booking-field booking-room">
			<label for="room_select" class="sr-only"></label>
			<select name='room_select' id='room_select' class='dk'>
			<?php foreach ($room as $ro) : ?>
				<option ><?= $ro['name'] ?></option>
				<?php endforeach ?>
			</select>
		</div>

		<div class="booking-field booking-action">
			<button type="submit">Check Availability</button>
		</div>

	</form>
</div>						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<aside class="widget widget_text group">
								<div class="aside-container">
									<h4 class="widget-title">Nguyễn Công Nga</h4>
									<div class="textwidget">
									<p>
									Số điện thoại: +84<?= $webs['phone_number'] ?><br>
									Email: <?= $webs['email'] ?><br>
									Địa chỉ: <?= $webs['address'] ?>
									</p>									</div>
								</div>
							</aside>
						</div>

						<div class="col-md-4">
							<aside class="widget widget_ci_flickr_widget group">
								<div class="aside-container">
									<h4 class="widget-title">Flickr</h4>
									<div class="f group">
										<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=9&amp;display=random&amp;&amp;layout=x&amp;source=user&amp;user=12313997@N00&amp;size=s"></script>
									</div>
								</div>
							</aside>
						</div>

						<div class="col-md-4">
							<aside class="widget widget_socials_ignited group">
								<div class="aside-container">
									<h4 class="widget-title">Find us online</h4>
									<div class="ci-socials-ignited ci-socials-ignited-fa">
									<a href="<?=  $webs['facebook_url']?>" ><i class="fa fa-facebook" ></i></a>
									<a href="<?=  $webs['twitter_url']?>" ><i class="fa fa-twitter" ></i></a>
										<a href="http://dribbble.com/tsiger" ><i class="fa fa-dribbble" ></i></a>
										<a href="https://www.flickr.com/" ><i class="fa fa-flickr" ></i></a>
									</div>
								</div>
							</aside>

							<aside class="widget widget_text group">
								<div class="aside-container">
									<div class="textwidget">
									<p>
									Số điện thoại: +84<?= $webs['phone_number'] ?><br>
									Email: <?= $webs['email'] ?><br>
									Địa chỉ: <?= $webs['address'] ?>
									</p>
									</div>
								</div>
							</aside>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 credits">
							<a href="http://www.cssigniter.com/" title="Hotel Site Templates">Hotel Site Template by CSSIgniter</a><br />
							<span>Your Footer Text Here</span>
						</div>
					</div>
				</div> <!-- .container -->
			</footer>

			<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false'></script>
			<script type='text/javascript' src='js/jquery-1.10.1.min.js'></script>
			<script type='text/javascript' src='js/fancybox/jquery.fancybox.pack.js'></script>
			<script type='text/javascript' src='js/jquery.ui.core.min.js'></script>
			<script type='text/javascript' src='js/jquery.ui.datepicker.min.js'></script>
			<script type='text/javascript' src='js/jquery.hoverIntent.r7.min.js'></script>
			<script type='text/javascript' src='js/superfish.js'></script>
			<script type='text/javascript' src='js/jquery.dropkick-min.js'></script>
			<script type='text/javascript' src='js/jquery.mmenu.min.all.js'></script>
			<script type='text/javascript' src='js/jquery.flexslider.js'></script>
			<script type='text/javascript' src='js/jquery.fitvids.js'></script>
			<script type='text/javascript' src='js/scripts.js'></script>
			<script type='text/javascript' src='js/retina.1.3.0.min.js'></script>
			<script type='text/javascript' src='js/contact.js'></script>
			<script type='text/javascript' src='js/placeholders.min.js'></script>

		</div><!-- #page -->
	</body>

<!-- Mirrored from www.cssigniter.com/themeforest/sixtyone/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:27 GMT -->
</php>
