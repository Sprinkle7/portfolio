<!DOCTYPE html>
<html lang="en">
<head>
<!-- Title -->
<title>Moje</title>
<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Cache-control" content="public">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Moje. - Responsive One-Page Bootstrap vCard Template.">
<meta name="keywords" content="moje, responsive, one page, resume, bootstrap, vCard, personal page, html5, css3, retina">
<meta name="author" content="Suelo">

<link rel="shortcut icon" href="<?php echo base_url();?>moje/images/favicon.png">
<link rel="apple-touch-icon" href="<?php echo base_url();?>moje/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>moje/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>moje/images/apple-touch-icon-114x114.png">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Retina Images -->
<script>if((window.devicePixelRatio===undefined?1:window.devicePixelRatio)>1)
    document.cookie='HTTP_IS_RETINA%3d1%3bpath%3d/index.html';</script>
<!-- End Retina Images -->

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/css/animations.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/css/flaticon.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/css/style.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/colors/blue.css" id="colors" />
<script>
function Load(argument) {
  $.ajax({
    url: '<?php echo base_url()?>font/Project',
    dataType: 'html',
    type:'POST',
    data: {para:argument},
  })
  .done(function(response) {
    $('.project-content').html(response);
  });
}

</script>
</head>

<body>

<!-- Facebook Source -->
<div id="fb-root"></div>
<!-- Loader -->
<div id="page-loader">	</div>
<!-- Loader / End -->

<!-- Header  -->
<header id="nav-content" class="vertical-nav nav-white">

	<!-- Logo -->
	<div class="my-logo">
    	<a href="#profile"><img src="<?php echo base_url().$profile->bg_url.$profile->picture;?>" alt="" /></a>
    </div>
    
    <!-- Navigation -->
    <ul class="menu nav me-nav">
    	<li class="menu-item active"><a href="#profile"><span>Profile</span><i class="fa fa-user"></i></a></li>
        <li class="menu-item"><a href="#resume"><span>Resume</span><i class="fa fa-pencil"></i></a></li>
        <li class="menu-item"><a href="#portfolio"><span>Portfolio</span><i class="fa fa-desktop"></i></a></li>
        <!-- <li class="menu-item"><a href="#blog"><span>Latest Posts</span><i class="fa fa-comment"></i></a></li> -->
        <li class="menu-item"><a href="#contact"><span>Contact</span><i class="fa fa-phone"></i></a></li>
        <!-- <li class="menu-item"><a href="components.html"><span>Components</span><i class="fa fa-bolt"></i></a></li> -->
    </ul>
    
    <!-- Copyright -->
    <span class="copyright hidden-md">© 2014 <b>Johnaton Doe</b>.</span>

</header>
<!-- Header / End -->

<!-- Page Content -->
<div id="page-content">

	<!-- Profile -->
	<section id="profile" class="black">
    
    	<!-- Background photo -->
    	<div id="profile-bg" class="editable-alpha" data-alpha="40"><img src="<?php echo base_url().$profile->bg_url.$profile->bg_name;?>" alt="" /></div>
    
    	<div class="content padded dark">
        
        	<!-- Top Bar -->
        	<div class="top-bar">
            
            	<!-- Social media -->
            	<div class="pull-left">
                	<span class="hiddend-sm hidden-xs">Check my social media! &nbsp; &nbsp; </span>
                    <ul class="social-icons si-pull-up">
                        <li><a href="<?php echo $profile->facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $profile->github;?>" target="_blank"><i class="fa fa-github"></i></a></li>
                        <li><a href="<?php echo $profile->linkeden;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="<?php echo $profile->twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo $profile->gmail;?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?php echo $profile->yahoo;?>" target="_blank"><i class="fa fa-windows"></i></a></li>
                        <li><a href="<?php echo $profile->email;?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                
                <!-- URL -->
               <!--  <div class="pull-right">
                	<a href="#" class="hidden-xs">www.suelo.pl</a>
                </div> -->
                
            </div>
        
			<!-- Profile Content -->
            <div class="profile-content">
            	<h1 class="short"><?php echo $profile->name;?></h1>
                <h5><?php echo $profile->short_intro;?></h5>
            </div>
            
            <!-- Bottom Bar -->
            <div class="bottom-bar profile-bottom-bar hidden-xs">
            
            	<!-- Contact List -->
                <ul class="list-inline">
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-map-marker"></i><?php echo $profile->address;?></li>
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-comment"></i><a href="#"><?php echo $profile->gmail;?></a></li>
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-phone"></i><?php echo $profile->phone;?></li>
                </ul>
             
            </div>
                    
        </div>    	
        
    </section>
    <!-- Profile / End -->
    
    <!-- Resume -->
	<section id="resume">
    
    	<div class="content dimmed-effect padded-short">
        	
            <div class="row">
            
              <div class="col-lg-4">
              
              	<!-- Box - About Me -->
                <div class="resume-box animated slide-in-top">
                  <i class="title-icon text-blue flaticon-speech43"></i>
                  <h3>Who am I?</h3>
                  <?php if (!empty($who)) {?>
                  <p class="lead"><?php echo $who->header;?></p>
                  <p><?php echo $who->description;?></p>
                  <a href="#portfolio" class="btn btn-black">See my portfolio</a> <a href="#contact" class="btn btn-default">Contact me</a>
                  <?php } ?>
                </div>
                
                <!-- Box - Skills & Attributes -->
                <div class="resume-box animated slide-in-left appear-second">
                  <i class="title-icon text-green flaticon-open79"></i>
                  <h3>Skills &amp; Attributes</h3>
                  <!-- Sinlge skill -->
                  <?php if (!empty($skills)) {
                      foreach ($skills as $skill) {?>
                  <div class="skill">
                  	<span class="skill-name"><?php echo $skill->header;?></span>
                    <div class="skill-bar sb-green">
                    <?php 
                      switch ($skill->ranking) {
                        case '4':
                            echo '<div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-on"></div>';
                          break;
                        case '3':
                            echo '<div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-off"></div>';
                          break;
                        case '2':
                            echo '<div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div>';
                          break;
                        case '1':
                            echo '<div class="skill-rate-on"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div>';
                          break;
                        default:
                            echo '<div class="skill-rate-off"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div>';
                          break;
                      }
                    ?>
                    	
                    </div>
                  </div>
                <?php }} ?>
               
                </div>
                
              </div>
          	  
              <div class="col-md-6 col-lg-4">
              
              	<!-- Box - Specialities -->
                <div class="resume-box animated slide-in-right">
                  <i class="title-icon text-red flaticon-mouse19"></i>
                  <h3>My Specialities</h3>
                  <!-- Speciality -->
                  <?php if (!empty($special)) {
                      foreach ($special as $each) {?>
                  <div class="speciality">
                  	<i class="speciality-icon text-red flaticon-bulb11"></i>
                    <div class="speciality-content">
                    	<h5 class="short"><?php echo $each->title;?></h5>
                        <p class="speciaity-description"><?php echo $each->description;?></p>
                    </div>
                  </div>
                <?php }} ?>
                </div>
                
                <!-- Box - Education & Jobs -->
                <div class="resume-box animated slide-in-left">
                  <i class="title-icon text-yellow flaticon-document56"></i>
                  <h3>Education & Jobs</h3>
                  <div class="timeline">
                  	<!-- Single event -->
                  <?php if (!empty($education)) {
                      foreach ($education as $edu) {?>
                  	<div class="timeline-event te-yellow">
                      <div class="event-date"><?php echo date("D M Y",strtotime($edu->from));?> - <?php echo date("D M Y",strtotime($edu->to));?></div>
                      <div class="event-name"><?php echo $edu->title;?></div>
                      <div class="event-description"><?php echo $edu->name;?></div>
                    </div>
                <?php }} ?>
                  </div>
                </div>
                
              </div>
              
              <div class="col-md-6 col-lg-4">
              
              	<!-- Box - Languages -->
                <div class="resume-box animated slide-in-right appear-second">
                  <i class="title-icon text-orange flaticon-chat25"></i>
                  <h3>Languages</h3>
                  <!-- Single skill -->
                  <?php if (!empty($language)) {
                      foreach ($language as $lang) {?>
                  <div class="skill">
                    <span class="skill-name"><?php echo $lang->title;?></span>
                    <div class="skill-bar sb-green">
                    <?php 
                      switch ($lang->fluency) {
                        case '4':
                            echo '<div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-on"></div>';
                          break;
                        case '3':
                            echo '<div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-off"></div>';
                          break;
                        case '2':
                            echo '<div class="skill-rate-on"></div><div class="skill-rate-on"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div>';
                          break;
                        case '1':
                            echo '<div class="skill-rate-on"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div>';
                          break;
                        default:
                            echo '<div class="skill-rate-off"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div><div class="skill-rate-off"></div>';
                          break;
                      }
                    ?>
                      
                    </div>
                  </div>
                <?php }} ?>
                </div>
                
                <!-- Box - Hobbies -->
                <div class="resume-box animated slide-in-bottom">
                  <i class="title-icon text-violet flaticon-joystick4"></i>
                  <h3>Hobbies &amp; Interests</h3>
                  <!-- List group -->
                  <ul class="list-group">
                  <?php if (!empty($hobbies)) {
                      foreach ($hobbies as $hob) {?>
                    <li class="list-group-item"><?php echo $hob->title;?></li>
                  <?php }} ?>
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section id="portfolio">
    	<!-- Projects Holder -->
    	<div class="projects-holder black dark clearfix">
          <!-- Single Project --> 
          <?php if (!empty($portfolio)) {
          foreach ($portfolio as $port) {?>
          <div class="single-project animated fade-in appear-second">
            <div class="project-image">
                <img src="<?php echo base_url().'assets/upload/'.$port->mpic;?>" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title"> <?php echo $port->title;?></div>
                <div class="project-caption text-orange"> <?php echo $port->title;?></div>
                <div class="project-buttons"><a onclick="Load(<?php echo $port->pfid;?>);" class="btn btn-orange btn-sm">View it</a>
                 <a href="<?php echo $port->onlinelink;?>" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
          <?php }} ?>
        <!-- Ajax Project Details -->
        <div class="clearfix"></div>
        <div class="project-content"></div>
    </section>
    <!-- Contact -->
    <section id="contact" class="black">
    	<!-- Google Map -->
    	<div id="google-map" class="animated zoom-out"></div>
        <!-- Contact Content -->
        <div class="content contact-content padded dark animated slide-in-left">
        	<i class="title-icon text-primary flaticon-speech43"></i>
        	<h2>Do you want to hire me?</h2>
            <!-- Contact List -->
            <ul class="list-unstyled list-unstyled-icons">
              <li><i class="inline-icon icon-before-and-after text-primary fa fa-map-marker"></i><?php echo $profile->address;?></li>
              <li><i class="inline-icon icon-before-and-after text-primary fa fa-comment"></i><a href="#"><?php echo $profile->gmail;?></a></li>
              <li><i class="inline-icon icon-before-and-after text-primary fa fa-phone"></i><?php echo $profile->phone;?></li>
            </ul>
            <br/><br/>
            <p><a href="#" class="btn btn-primary">Download my CV</a></p>
            <!-- Bottom Bar -->
            <div class="bottom-bar contact-bottom-bar">
            	<div class="row">
                	<div class="col-md-12 col-lg-6">
                    	<h5>Check my social media!</h5>
                        <!-- Social Icons -->
                        <ul class="social-icons medium">
                        <li><a href="<?php echo $profile->facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $profile->github;?>" target="_blank"><i class="fa fa-github"></i></a></li>
                        <li><a href="<?php echo $profile->linkeden;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="<?php echo $profile->twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo $profile->gmail;?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?php echo $profile->yahoo;?>" target="_blank"><i class="fa fa-windows"></i></a></li>
                        <li><a href="<?php echo $profile->email;?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
       	<div id="contact-form-holder" class="dark">
          <div class="contact-form-trigger animated slide-in-right appear-second"><i class="flaticon-mail21"></i></div>
          <form role="form" id="contact-form" method="post">
            <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" id="name"  name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" id="email"  name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label>Message:</label>
              <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit <i class="icon-after fa fa-chevron-right"></i></button>
          </form>
        </div>
        
    </section>
    <!-- Contact / End -->
	
</div>
<!-- Page Content / End -->

<!-- Scripts -->
<script type="text/javascript" src="<?php echo base_url();?>moje/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/page-loader.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/jquery.easing.min.html"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<!-- Custom Script -->
<script type="text/javascript" src="<?php echo base_url();?>moje/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>moje/js/GoogleMap-dark.js"></script>

<!-- Styleswitcher -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>moje/styleswitcher/styleswitcher.css" />
<script type="text/javascript" src="<?php echo base_url();?>moje/styleswitcher/styleswitcher.js"></script>

</body>


</html>
