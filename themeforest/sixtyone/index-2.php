<!DOCTYPE php>
<?php 
session_start();
require_once '../../config/utils.php';
$loggedInUser = $_SESSION[AUTH];
checkmember();
$getwebsByIdQuery = "select * from web_settings ";
$webs = queryExecute($getwebsByIdQuery, false);
$getslidersByIdQuery = "select * from sliders where id=3 ";
$sliders = queryExecute($getslidersByIdQuery, false);
$getroomByIdQuery = "select * from room_types where status= '1' ";
$room = queryExecute($getroomByIdQuery, true);
$getroom1ByIdQuery = "select * from room_types where price= '124' ";
$room1 = queryExecute($getroom1ByIdQuery, false);
$getamenitlesByIdQuery = "select * from amenitles ";
$amenitles = queryExecute($getamenitlesByIdQuery, true);
?>
<!--[if IE 8]> <php class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <php class="no-js" lang="en-US"> <!--<![endif]-->


<!-- Mirrored from www.cssigniter.com/themeforest/sixtyone/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/php;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Home &ndash; SixtyOne</title>
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
	<p class="mob-title">Home</p>
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
								<nav class="nav">
									
								</nav>
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
									<li><a href="index-2.php">Home</a></li>
									<li><a href="listing-3cols-2.php">Rooms</a>
										<ul class="sub-menu">
											<li><a href="listing-2cols-2.php">Listing 2 Columns</a></li>
											<li><a href="listing-3cols-2.php">Listing 3 Columns</a></li>
											<li><a href="listing-4cols-2.php">Listing 4 Columns</a></li>
										</ul>
									</li>
									<li><a href="gallery-single-2.php">Gallery</a></li>
									<li><a href="blog-2.php">Blog</a>
									<li><a href="booking.php">Booking</a></li>

								</ul>
							</nav>
						</div>
						<div id="logo-wrap" class="col-md-2 col-sm-12">
							<h1 class="imglogo">
								<a href="index-2.php">
									<img src="images/logo.png" alt="SixtyOne"/>
								</a>
							</h1>
						</div>
						<div class="col-md-5">
							<nav class="nav">
								<ul id="main-nav-right" class="navigation group">
										<ul>
											<li><a href="single-2.php">Article</a></li>
										</ul>
									</li>
									<li><a href="location-2.php">Location</a></li>
									<li><a href="contact-2.php">Contact</a></li>
						<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?= $loggedInUser['email']?></a>
							<ul class="sub-menu">
                          <li> <a class="dropdown-item" href="<?= BASE_URL .'member/home.php' ?>">Thông tin cá nhân</a></li> 
						  <li> <a class="dropdown-item" href="#">Đổi mật khẩu</a></li> 
						  <li> <a class="dropdown-item" href="#">Thông tin phòng đã đặt</a></li> 
						  <li> <div class="dropdown-divider"></div>
						  <li> <a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php'?>">Đăng xuất</a></li> 
						  </ul>
                       
                    </li>
						
                   
               
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
			<div class="col-md-12">
				<div id="home-slider" class="flexslider">
					<ul class="slides">
						<li>
							<img  src="../../<?= $webs['background_img'] ?>" alt=""/>
							<div class="slide-description">
								<div class="slide-text">
									<h2><?= $webs['introduce_content'] ?></h2>
								<p><?= $sliders['slide_content'] ?></p>								
</div>
								<a href="listing-2cols.php" class="button">Read More »</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="booking">
	
</div>			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<div class="welcome">
					<a href="<?= $sliders['readmore_url'] ?>"><img width="270" height="125" src="images/welcome.jpg" class="alignleft" alt=""></a>
					<h2><?= $webs['introduce_content'] ?></h2>
					<p><?= $sliders['slide_content'] ?>
</p>
				</div>

				<div class="amenities">
					<h2>Amenities</h2>
					<ul>
					<?php foreach ( $amenitles as $amen ) :?>
						<li><i class="fa fa-star-o"></i> <?= $amen['name'] ?></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<aside class="widget widget_ci_room_widget group">
					<div class="aside-container">
						<div class="ci_widget_room">
							<h3 class="widget-title"><?= $room1['name'] ?></h3> <h5 class="room-from">from $<?= $room1['price'] ?> per night</h5>
							<figure class="room-thumb"><a href="listing-2cols.php"><img width="640" height="400" src="../../<?= $room1['feature_image'] ?>" alt=""></a></figure>
							<a class="button" href="listing-2cols.php">Read More »</a>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</main>

	<div id="drop-in">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-title">Our famous rooms</h3>
				</div>
			</div>
			<div class="row">
			<?php foreach ($room as $ro) : ?>
				<div class="col-md-4">
					<aside class="widget widget_ci_room_widget group">
						<div class="aside-container">
							<div class="ci_widget_room">
								<h3 class="widget-title"><?= $ro['name'] ?></h3>
								<h5 class="room-from">from $<?= $ro['price'] ?> per night</h5>

								<figure class="room-thumb">
										<img width="640" height="400px" src="../../<?= $ro['feature_image'] ?>" alt=""></a>
								</figure>
								<a class="button" href="<?php echo INDEX_URL . 'room.php?id=' . $ro['id'] ?>">Read More »</a>
							</div>
						</div>
					</aside>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div><!-- /drop-in -->

		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<aside class="widget widget_text group">
							<div class="aside-container">
								<h4 class="widget-title">Nguyễn Công Nga</h4>
								<p>
									Số điện thoại: +84<?= $webs['phone_number'] ?><br>
									Email: <?= $webs['email'] ?><br>
									Địa chỉ: <?= $webs['address'] ?>
									</p>
								<div class="textwidget">
								</div>
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

<!-- Mirrored from www.cssigniter.com/themeforest/sixtyone/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:20 GMT -->
</php>
