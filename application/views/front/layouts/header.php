<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?= $title;?> | Homepage </title>
	<link rel="stylesheet" href="<?= base_url('vendor/bromine/assets');?>/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('vendor/bromine/assets');?>/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?= base_url('vendor/bromine/assets');?>/libs/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="<?= base_url('vendor/bromine/assets');?>/libs/rslides/responsiveslides.css">
	<link rel="stylesheet" href="<?= base_url('vendor/bromine/assets');?>/libs/slick/slick.css">
	<link rel="stylesheet" href="<?= base_url('vendor/bromine/assets');?>/css/main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600%7CMontserrat:300,400,600%7CRaleway:300,400,400i,600%7COpen+Sans:400,400i%7CVarela+Round">
</head>

<body id="index3" class="homepage">
<header>

	<div class="container">
		<div id="topbar">
			<div class="pull-right">
				<div class="navigation">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<i class="zmdi zmdi-menu zmdi-hc-lg"></i>
					</button>
                    <?php $this->load->view('front/layouts/nav');?>
				</div>
				<a href="#" class="blueplay login">LOGIN</a> 
				<a href="#" class="register">REGISTER</a>
 			</div>
			<h1 class="logo"><a href="index1.html"><img src="http://placehold.it/112x28" alt="Logo"></a></h1>
        </div>
        
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<p class="pretitle">ONLINE VIDEO TRAININGS</p>
				<h2>PROOF YOUR TALENT</h2>
				<p>Learn something new every day and get inspired by the diversity of online learning</p>
				<a href="#" class="bluebutton">SIGN UP AND GET A 7-DAYS FREE TRIAL</a>
			</div>
        </div>
        
    </div>
    
	<ul class="rslides-header">	
		<li><img src="<?= base_url('assets/front/slide/1.jpg');?>" style="max-width:75%; min-height: 70%;" class="resp-img" alt="Slide"></li>
		<li><img src="http://placehold.it/1920x929" class="resp-img" alt="Slide"></li>
		<li><img src="http://placehold.it/1920x929" class="resp-img" alt="Slide"></li>
	</ul>
	<a href="#" class="scrolldown"><span></span></a>	
</header>

<main>
	
	<div class="container index-3-categories text-center">	
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h3>Explore Bromine Video Platform</h3>
				<p>
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
					no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, coniam voluptua.
				</p>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-4 col-sm-6">
				<div class="category-with-bg cat1">
					<h5>Content-Management-Systems(CMS)</h5>
					<p>IT-Service for CMS like WordPress</p>
					<a href="#" class="goto"><i class="zmdi zmdi-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="category-with-bg cat2">
					<h5>User Experience / UX Design</h5>
					<p>Workshop for UX Design</p>
					<a href="#" class="goto"><i class="zmdi zmdi-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="category-with-bg cat3">
					<h5>Typography &amp; Writing</h5>
					<p>Work with InDesign</p>
					<a href="#" class="goto"><i class="zmdi zmdi-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6"> 
				<div class="category-with-bg cat4">
					<h5>Digital Publication</h5>
					<p>Learn how to publish online</p>
					<a href="#" class="goto"><i class="zmdi zmdi-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="category-with-bg cat5">
					<h5>Layouts for Print Design</h5>
					<p>Illustrations for Print</p>
					<a href="#" class="goto"><i class="zmdi zmdi-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="category-with-bg cat6">
					<h5>Digital Marketing (SEO)</h5>
					<p>Tutorial to use Search Engines</p>
					<a href="#" class="goto"><i class="zmdi zmdi-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="container pros">
		<div class="row">	
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h3>Check some of our professionals</h3>
				<p>
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
					no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, coniam voluptua.
				</p>
				<a href="#" class="blueplay">CHECK ALL TEACHERS</a>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-2 col-sm-4 col-xs-6">	
				<div class="teacher">
					<div class="imgcontainer">
						<img src="http://placehold.it/130x310" alt="Avatar">
						<div class="overlay">
							<img src="http://placehold.it/18x17" alt="Profile">
							<p>8 VIDEOS</p>
						</div>
					</div>
					<a href="#">Kevin Mcfield</a>
					<p>SCIENTIST</p>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">	
				<div class="teacher">
					<div class="imgcontainer">
						<img src="http://placehold.it/130x310" alt="Avatar">
						<div class="overlay">
							<img src="http://placehold.it/18x17" alt="Profile">
							<p>8 VIDEOS</p>
						</div>
					</div>
					<a href="#">Jonathan Creon</a>
					<p>DESIGNER</p>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">	
				<div class="teacher">
					<div class="imgcontainer">
						<img src="http://placehold.it/130x310" alt="Avatar">
						<div class="overlay">
							<img src="http://placehold.it/18x17" alt="Profile">
							<p>8 VIDEOS</p>
						</div>
					</div>
					<a href="#">Peter Griffin</a>
					<p>LANGUAGE TEACHER</p>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">	
				<div class="teacher">
					<div class="imgcontainer">
						<img src="http://placehold.it/130x310" alt="Avatar">
						<div class="overlay">
							<img src="http://placehold.it/18x17" alt="Profile">
							<p>8 VIDEOS</p>
						</div>
					</div>
					<a href="#">Vanessa Dilmor</a>
					<p>MARKETING MANAGER</p>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">	
				<div class="teacher">
					<div class="imgcontainer">
						<img src="http://placehold.it/130x310" alt="Avatar">
						<div class="overlay">
							<img src="http://placehold.it/18x17" alt="Profile">
							<p>8 VIDEOS</p>
						</div>
					</div>
					<a href="#">Lydia Bennolt</a>
					<p>DEVELOPER</p>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">	
				<div class="teacher">
					<div class="imgcontainer">
						<img src="http://placehold.it/130x310" alt="Avatar">
						<div class="overlay">
							<img src="http://placehold.it/18x17" alt="Profile">
							<p>8 VIDEOS</p>
						</div>
					</div>
					<a href="#">Marcus Winter</a>
					<p>DIGITAL ARTIST</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container popular">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>Popular online tutorials</h3>
				<div class="scrolldown-placeholder">
					<a href="#" class="popular-scrolldown"><i class="zmdi zmdi-chevron-down zmdi-hc-lg"></i></a>
				</div>
			</div>
		</div>
		<div class="row tutorials">
			<div class="col-md-4">
				<div class="tutorial">
					<img src="http://placehold.it/370x220" class="resp-img" alt="Tutorial">
					<div class="tutorial-details">
						<h6>How to become an UX Designer</h6>
						<p><span class="lessons"><i class="zmdi zmdi-assignment"></i>12 LESSONS</span><span class="duration"><i class="zmdi zmdi-time"></i>3:15h</span></p>
						<p class="abs">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</p>
						<a href="#" class="greybutton">VIEW COURSE</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="tutorial">
					<img src="http://placehold.it/370x220" class="resp-img" alt="Tutorial">
					<div class="tutorial-details">
						<h6>8 steps to your own startup</h6>
						<p><span class="lessons"><i class="zmdi zmdi-assignment"></i>8 LESSONS</span><span class="duration"><i class="zmdi zmdi-time"></i>4:32h</span></p>
						<p class="abs">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</p>
						<a href="#" class="greybutton">VIEW COURSE</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="tutorial">
					<img src="http://placehold.it/370x220" class="resp-img" alt="Tutorial">
					<div class="tutorial-details">
						<h6>Business communication for marketers</h6>
						<p><span class="lessons"><i class="zmdi zmdi-assignment"></i>15 LESSONS</span><span class="duration"><i class="zmdi zmdi-time"></i>6:04h</span></p>
						<p class="abs">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</p>
						<a href="#" class="greybutton">VIEW COURSE</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid signup text-center">
		<div class="row">
			<div class="col-sm-12">
				<p>ONLINE LEARNING FROM EVERYWHERE</p>
				<h4>Are you ready to start learning?</h4>
				<a href="#" class="bluebutton">SIGN UP TODAY</a>
			</div>
		</div>
	</div>

	<div class="container pricings">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>Plans &amp; Pricings</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="plan">
					<p class="ribbon">MOST POPULAR</p>
					<p class="price">45</p>
					<p class="crew">1-5 PROFESSIONALS</p>
					<div class="plan-details">
						<p>Unlimited Courses</p>
						<p>Online pass purchases</p>
						<p>Online class reservations</p>
						<p>Full Library Entry</p>
						<p>Promo Code feature</p>
					</div>
					<a href="#"><i class="zmdi zmdi-arrow-right"></i>FREE TRIAL</a>
					<a href="#"><i class="zmdi zmdi-arrow-right"></i>ORDER NOW</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="plan mostpopular">
					<p class="ribbon">MOST POPULAR</p>
					<p class="price">59</p>
					<p class="crew">6-10 PROFESSIONALS</p>
					<div class="plan-details">
						<p>Unlimited Courses</p>
						<p>Online pass purchases</p>
						<p>Online class reservations</p>
						<p>Full Library Entry</p>
						<p>Promo Code feature</p>
					</div>
					<a href="#"><i class="zmdi zmdi-arrow-right"></i>FREE TRIAL</a>
					<a href="#"><i class="zmdi zmdi-arrow-right"></i>ORDER NOW</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="plan">
					<p class="ribbon">MOST POPULAR</p>
					<p class="price">99</p>
					<p class="crew">11-15 PROFESSIONALS</p>
					<div class="plan-details">
						<p>Unlimited Courses</p>
						<p>Online pass purchases</p>
						<p>Online class reservations</p>
						<p>Full Library Entry</p>
						<p>Promo Code feature</p>
					</div>
					<a href="#"><i class="zmdi zmdi-arrow-right"></i>FREE TRIAL</a>
					<a href="#"><i class="zmdi zmdi-arrow-right"></i>ORDER NOW</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="plan">
					<p class="ribbon">MOST POPULAR</p>
					<p class="price">119</p>
					<p class="crew">OVER 15 PROFESSIONALS</p>
					<div class="plan-details">
						<p>Unlimited Courses</p>
						<p>Online pass purchases</p>
						<p>Online class reservations</p>
						<p>Full Library Entry</p>
						<p>Promo Code feature</p>
					</div>
					<a href="#"><i class="zmdi zmdi-arrow-right"></i>FREE TRIAL</a>
					<a href="#"><i class="zmdi zmdi-arrow-right"></i>ORDER NOW</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container whyus">
		<div class="row text-center">
			<div class="col-sm-12">
				<h3>Why to choose us</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h6>More than 1000+ video tutorials in our library</h6>
				<p>
					Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
					nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
					vulputate velit esse molestie consequat.
				</p>
			</div>
			<div class="col-md-4">
				<h6>Learn form our professional teachers </h6>
				<p>
					Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
					nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
					vulputate velit esse molestie consequat.
				</p>
			</div>
			<div class="col-md-4">
				<h6>Become an expert in your business</h6>
				<p>
					Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
					nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
					vulputate velit esse molestie consequat.
				</p>
			</div>
		</div>
	</div>




</main>