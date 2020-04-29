<!DOCTYPE>
<?php 
session_start();
require_once '../../config/utils.php';
$loggedInUser = $_SESSION[AUTH];
$id= $_SESSION[AUTH]['id'];
$getwebsByIdQuery = "select * from web_settings ";
$webs = queryExecute($getwebsByIdQuery, false);
$getusersByIdQuery = "select * from users where id='$id'";
$users = queryExecute($getusersByIdQuery, false);
$getroom_typesByIdQuery = "select * from room_types where status < 2 ";
$room_types = queryExecute($getroom_typesByIdQuery, true);
checkmemberLoggedIn();
?>
<!--[if IE 8]> <php class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <php class="no-js" lang="en-US"> <!--<![endif]-->


<!-- Mirrored from www.cssigniter.com/themeforest/sixtyone/booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/php;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Booking Template &ndash; SixtyOne</title>
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
	<p class="mob-title">Booking Template</p>
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
								<a href="index-2.php">
									<img src="images/logo.png" alt="SixtyOne"/>
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
									<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?= $loggedInUser['email']?></a>
							<ul class="sub-menu">
                          <li> <a class="dropdown-item" href="#">Thông tin cá nhân</a></li> 
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
		<div class="col-md-4">
			<aside class="widget">
				<div class="aside-container">
					<h2>Our address</h2>
					<p>
									Số điện thoại: +84<?= $webs['phone_number'] ?><br>
									Email: <?= $webs['email'] ?><br>
									Địa chỉ: <?= $webs['address'] ?>
									</p></div>
			</aside>
		</div><!-- .four.columns -->

		<div class="col-md-8">
			<div class="entry">
				<h2>Booking</h2>

								
									<div class="full-booking booking">
						<form id="add-booking-form" action="<?= INDEX_URL .'add-booking.php' ?>" method="post">
							<div class="col-md-6">
								<div class="form-field booking-input">
									<input type="text" name="name" placeholder="Your name" value="<?= $users['name'] ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-field booking-input">
									<input type="email" required name="email" placeholder="Your e-mail"value="<?= $users['email'] ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-field arrive">
									<input type="text" name="arrive" class="datepicker" placeholder="Arrive" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-field depart">
									<input type="text" name="depart" class="datepicker" placeholder="Depart" value="">
								</div>
							</div>
						

							<div class="col-md-6">
								<div class="form-field room-select">
									<label for="room_select" class="sr-only">Room</label>
									<select name='room_select' id='room_select' class='dk'>
										<?php foreach($room_types as $room) :?>
										<option class="level-0" value="<?= $room['id'] ?>" ><?= $room['name'] ?></option>
										
										<?php endforeach ?>
									</select>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-field booking-message">
									<textarea name="the_message" cols="30" rows="10" placeholder="Message (e.g. special instructions)"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div>
									<input type="submit" class="button" name="send_booking" value="Submit">
								</div>
							</div>
						</form>
						<script>
						$('#add-booking-form').validate({
        rules:{
            name: {
                required: true,
                maxlength: 191
            },
            email: {
                required: true,
                maxlength: 191,
                email: true,
                remote: {
                    url: "<?= ADMIN_URL . 'users/verify-email-existed.php'?>",
                    type: "post",
                    data: {
                        email: function() {
                            return $( "input[name='email']" ).val();
                        }
                    }
                }
            },
            arrive:{
                required: true,
            },
            depart: {
                required: true,
              
            }
        },
        messages: {
            name: {
                required: "Hãy nhập tên người dùng",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            email: {
                required: "Hãy nhập email",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                email: "Không đúng định dạng email",
                remote: "Email đã tồn tại, vui lòng sử dụng email khác"
            },
            arrive:{
                required: "Hãy chọn ngày",
            },
            depart: {
                required: "Hãy chọn ngày",
            }
           
        }
    });</script>
					</div><!-- /contact_form -->
				
			</div> <!-- /entry -->
		</div><!-- /col-md-8 -->
	</div><!-- /row -->
</main><!-- /container -->

<footer id="footer" class="footer-page">
	<div class="container">
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
									</p>
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
							<a href="http://www.facebook.com/cssigniter" ><i class="fa fa-twitter" ></i></a>
							<a href="<?=  $webs['twitter_url']?>" ><i class="fa fa-twitter" ></i></a>
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
				<a href="https://www.cssigniter.com/" title="Premium WordPress Themes">A template by CSSIgniter.com</a><br />
				<span>Your Footer Text Here</span>
			</div>
		</div>
	</div> <!-- .container -->
</footer>
<script> 1
var today = new Date();
   var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
   var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
   var dateTime = date+' '+time;
   document.getElementById("hvn").innerHTML = dateTime;
 </script>
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

<!-- Mirrored from www.cssigniter.com/themeforest/sixtyone/booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 05:12:27 GMT -->
</php>
