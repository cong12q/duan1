<!DOCTYPE php>
<?php
session_start();
require_once '../../config/utils.php';
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getroomByIdQuery = "select * from room_types where id= '$id' ";
$room = queryExecute($getroomByIdQuery, false);
$getamenitlesIdQuery = "select * from amenitles";
$amenitles = queryExecute($getamenitlesIdQuery, true);
?>
<!--[if IE 8]> <php class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <php class="no-js" lang="en-US"> <!--<![endif]-->


<!-- Mirrored from www.cssigniter.com/themeforest/sixtyone/room.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/php;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Room Template &ndash; SixtyOne</title>
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
	<p class="mob-title">Room Template</p>
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
								<ul id="misc"><li>Need assistance?</li><li>555-HOTEL-61</li><li><a href="https://www.cssigniter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6cfc8c0c9e6d5cfded2dfc9c8c388cec9d2">[email&#160;protected]</a></li></ul>
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
<main class="container single">
	<div class="row">
		<div class="col-md-12">
			<div id="item-media" class="row">
				<div class="col-md-12">
					<div id="slider" class="flexslider">
						<ul class="slides">
							<li>
								<a href="images/room_big3.jpg" class="fancybox" data-fancybox-group="g90">
									<img width="1140" height="450" src="../../<?= $room['feature_image'] ?>" class="attachment-gallery_full" alt="" >
								</a>
							</li>
						</ul><!-- /slides -->
					</div><!-- /slider -->

					<!-- /carousel -->
				</div><!-- /col-md-12 -->
			</div><!-- /row -->

			<div class="row">
				<div class="col-md-4">
					<aside id="ci_book_room_widget-2" class="widget widget_ci_book_room_widget group">
						<div class="aside-container">
							<p class="book-now-price">From <strong>$<?= $room['price'] ?></strong> per night</p>
							<p class="book-now-action">
								<a href="booking.php" class="button book-now-link">Book this room</a>
							</p>
						</div>
					</aside>

					<aside id="ci_room_widget-3" class="widget widget_ci_room_widget group">
						<div class="aside-container">
							<div class="ci_widget_room">
								<h3 class="widget-title"><?= $room['name'] ?></h3>
								<h5 class="room-from">from $<?= $room['price'] ?> pernight</h5>
								<figure class="room-thumb">
								<a href="room.php">
									<img width="640" height="400" src="../../<?= $room['feature_image'] ?>" alt="">
								</a>
								</figure>
								<a class="button" href="room.php">Read More »</a>
							</div>
						</div>
					</aside>
				</div><!-- /col-md-4 -->

				<div class="col-md-8">
					<div class="amenities">
						<h2>Amenities</h2>
						<ul>
						<?php foreach ($amenitles as $amen) :?>
							<li><i class="fa fa-star-o"></i> <?= $amen['name'] ?></li>
							
							<?php endforeach ?>
						</ul>
					</div><!-- /amenities -->
					<p class="excerpt">Iibendum elit, eu euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio.</p>
					<blockquote class="alignleft six columns alpha">
						<p>This is a blockquote style example. It stands out, but is awesome. Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum.</p>
						<p><cite>Dave Gamache, Skeleton Creator</cite></p>
					</blockquote>
					<p>Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat consectetur, nisl orci bibendum elit, eu euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio.</p>
					<table>
						<tr>
							<th>Header</th>
							<th>Header</th>
							<th>Header</th>
							<th>Header</th>
						</tr>
						<tr>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
						</tr>
						<tr>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
						</tr>
						<tr>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
						</tr>
						<tr>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
						</tr>
						<tr>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
						</tr>
						<tr>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
							<td>Some cell</td>
						</tr>
					</table>
					<p>Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat consectetur, nisl orci bibendum elit, eu euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio.</p>
				</div><!-- /col-md-8 -->
			</div><!-- /row -->
		</div><!-- /col-md-12 -->
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
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
		</div>

		<div class="booking-field booking-room">
			<label for="room_select" class="sr-only"></label>
			<select name='room_select' id='room_select' class='dk'>
				<option value="">Room</option>
				<option value="90">Suite III</option>
				<option value="82">Three Bedroom</option>
				<option value="72">Suite II</option>
				<option value="64">Single Room</option>
				<option value="56">Two Bedroom</option>
				<option value="46">Our suite</option>
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
									<h4 class="widget-title">Text Widget</h4>
									<div class="textwidget">
										<p>Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Curabitur vulputate, ligula lacinia scelerisque tempor.</p>
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
										<a href="http://www.facebook.com/cssigniter" ><i class="fa fa-facebook" ></i></a>
										<a href="http://www.facebook.com/cssigniter" ><i class="fa fa-twitter" ></i></a>
										<a href="http://dribbble.com/tsiger" ><i class="fa fa-dribbble" ></i></a>
										<a href="https://www.flickr.com/" ><i class="fa fa-flickr" ></i></a>
									</div>
								</div>
							</aside>

							<aside class="widget widget_text group">
								<div class="aside-container">
									<div class="textwidget">
										<p>
											CSSIgniter Info Str.<br />
											63100<br />
											California, SA<br />
											Tel: +66 555-HOTEL-161
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

<!-- Mirrored from www.cssigniter.com/themeforest/sixtyone/room.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:24 GMT -->
</php>
