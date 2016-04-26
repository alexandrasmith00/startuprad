
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Startup RAD &mdash; Demo Day</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Startup RAD" />



	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
        
        <Style>
        body {
            color: #5F666C;   
        }
        a {
            color: #0D74FE;   
        }
        a:hover {
            color: #005BE5;
            text-decoration: none;
            font-weight: bold;
        }

        .team {
            text-align: right;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            font-size: 12px;
        }
        .people {
            color: #0D74FE;
        }
        @media screen and (max-width: 480px) {
            .team {
                text-align: center;
            }
            .logos {
                display: none;
            }
        }
        </Style>

	</head>
	<body>
		<header style="height: 300px" role="banner" id="fh5co-header" style="background-image: url(images/hero-4.jpg);" data-stellar-background-ratio="0.5">
			<div style="background: #0D74FE;" class="fh5co-overlay"></div>
			<div class="container">
				<div style="height: 300px" class="fh5co-intro-wrap">
					<div class="fh5co-intro">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<h1 class="fh5co-intro-lead animate-1 to-animate">You're invited</h1>
								<h2 style="margin-bottom: 0px;" class="fh5co-intro-sub animate-2 to-animate">to Startup RAD Demo Day!</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<main role="main" id="fh5co-main">
			<div class="container" id="bio-animate">
				<div id="details" class="row row-padded">
					<div class="col-md-3">
						<h2 class="fh5co-section-heading to-animate">About<span style="background: #0D74FE;" class="fh5co-border"></span></h2>
					</div>
					<div class="col-md-8 col-md-push-1">
						<div class="row">
							<div class="col-md-6 to-animate">
                                <b>WHEN?</b>
									<ul style="color: #5F666C;" class="fh5co-contact">
										<li><i class="icon-clock"></i>Thursday, April 28 4:15pm - 6:00pm</li>
									</ul>
                                <b>WHERE?</b>
                                    <ul style="color: #5F666C;" class="fh5co-contact">
										<li class="fh5co-contact-address">
											<i class="icon-location-pin"></i>
                                            <a href="https://www.google.com/maps/place/Ticknor+Lounge/@42.3733302,-71.117289,15z/data=!4m2!3m1!1s0x0:0xdcebac0c6c897f64?sa=X&ved=0ahUKEwjH_sfcyaDMAhULPD4KHQ2CDKIQ_BIIcTAK">Ticknor Lounge</a><br>Boylston Hall<br>Harvard Yard<br>Cambridge, MA
										</li>
                                    </ul>
							</div>
							<div class="col-md-6 to-animate">
								<p>Startup R&D is a class at the John A. Paulson School of Engineering and Applied Sciences.  Students in the course are founders working on their own companies.</p>
								<p>This year, we are excited to introduce our Demo Day.  The teams will be showcasing their products.  We invite you to join us for food, drinks, and an opportunity to see what students are working on.  Learn more about the teams <a href="#teams">here</a>.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- END .row -->
			</div>


			<div class="container" id="services-animate">
				<div id="teams" class="row row-padded">
					<div class="col-md-3">
						<h2 class="fh5co-section-heading to-animate">Meet the Teams<span style="background: #0D74FE;" class="fh5co-border"></span></h2>
						<p class="to-animate">Meet the student teams who will be showcasing their companies. </p>
					</div>
					<div class="col-md-8 col-md-push-1">
						<div class="row">
							<div class="col-md-12 to-animate">
								<div class="fh5co-accordion-wrap">
                                    
                                    @include('demo.team', ['team' => 'Ambasity', 'people' => 'Alex Harding', 'logo' => 'https://s3.amazonaws.com/startuprad/img/29/1459876518.png', 'description' => 'Ambasity is a platform that helps brands hire and manage promotional staff for their events.', 'email' => 'aharding@ambasity.com', 'web' => ""])
                                    
                                    @include('demo.team', ['team' => 'Capsul', 'people' => 'Nicki Liang, Kazuma Makihara, & Conor Quinn', 'logo' => 'https://s3.amazonaws.com/startuprad/img/23/1459968360.png', 'description' => 'Capsul is a location-based video sharing app that allows you to both view and contribute to the visual history of a location.', 'email' => '', 'web' => ""])
									
                                  
                                    
                                    @include('demo.team', ['team' => 'Captia', 'people' => 'Evan Brown & Cameron Thariani', 'logo' => 'https://s3.amazonaws.com/startuprad/img/6/1461272203.jpg', 'description' => 'Captia enables users and their friends to make high-quality videos with little effort by providing a collaborative platform where they can share, edit, and combine clips into an elegant video. ', 'email' => '', 'web' => ""])
									
                                        
                                    @include('demo.team', ['team' => 'DaDiTea', 'people' => 'Priscilla Guo', 'logo' => 'https://s3.amazonaws.com/startuprad/img/13/1461099202.jpg', 'description' => 'DaDiTea is a personalized, online monthly subscription service for samples of international tea.', 'email' => '', 'web' => "daditea.org"])

                                    @include('demo.team', ['team' => 'Datanautix', 'people' => 'Neel Patel', 'logo' => 'https://s3.amazonaws.com/startuprad/img/13/1461099202.jpg', 'description' => 'Datanautix builds software to find patterns in customer interactions - discover trends hidden in open-ended comments or service chats to start delivering a better customer experience today.', 'email' => 'neel@datanautix.com', 'web' => "datanautix.com"])                              

              @include('demo.team', ['team' => 'Doorbell', 'people' => 'Aleeza Hashmi, Steven Petteruti, & Ben Pleat', 'logo' => 'https://s3.amazonaws.com/startuprad/img/11/1459877045.jpg', 'description' => 'Doorbell transforms your building into a community by reimagining property management software for residents. We’re creating the only mobile-first resident portal for the 28 million households in multifamily buildings in the US.', 'email' => '', 'web' => "doorbell.me"])

                                    @include('demo.team', ['team' => 'Drizl', 'people' => 'Ryan Fortin & Leo Lim', 'logo' => 'https://s3.amazonaws.com/startuprad/img/22/1460059625.jpg', 'description' => 'Drizl is a web application designed to help users make more informed financial purchases using data analytics', 'email' => '', 'web' => ""])                     

            @include('demo.team', ['team' => 'FROTH', 'people' => 'Catie Cole', 'logo' => 'https://s3.amazonaws.com/startuprad/img/5/1459877760.jpg', 'description' => 'FROTH is a drinks subscription membership and community of young professionals in NYC.', 'email' => 'catie@froth.nyc', 'web' => "froth.nyc"])    
                 @include('demo.team', ['team' => 'Keepspace', 'people' => 'Rashaad Hossain & Aman Kandola', 'logo' => 'https://s3.amazonaws.com/startuprad/img/1/1460058157.png', 'description' => 'Keepspace is a journaling revolution that guides people in their journey to discover and save the unique moments present in every day.', 'email' => '', 'web' => "thekeepspace.com"])    
                                
@include('demo.team', ['team' => 'Kynplex', 'people' => 'Raul Jordan', 'logo' => 'https://s3.amazonaws.com/startuprad/img/2/1460057889.png', 'description' => 'Kynplex is an online network designed for scientific innovation that brings together research labs, companies, and influential scientists to identify and form collaborations.', 'email' => '', 'web' => ""])   

@include('demo.team', ['team' => 'Lunos', 'people' => 'Andrew Jin & Dhaivat Pandya', 'logo' => 'https://s3.amazonaws.com/startuprad/img/21/1461179727.png', 'description' => 'Lunos allows artists to gain large-scale, highly targeted exposure for new music releases at live venues, such as nightclubs, where music spreads the fastest.', 'email' => '', 'web' => "lunosmusic.com"])    

@include('demo.team', ['team' => 'luvagent.com', 'people' => 'Adnan Zaib', 'logo' => "https://s3.amazonaws.com/startuprad/img/27/1460667552.png", 'description' => 'Luv Agent is an online application allowing individuals to create a profile for their friends, find them potential matches, and then setup actual blind dates.', 'email' => '', 'web' => "luvagent.com"])   
                                    
@include('demo.team', ['team' => 'MedKit', 'people' => 'Simone Abegunrin, Tim Bryant & Deven Hurt', 'logo' => 'https://s3.amazonaws.com/startuprad/img/26/1459977669.png', 'description' => 'MedKit is the most efficient system that combines an innovative scheduling system, customizable visit templates, and a revolutionary UX design to assist primary care physicians to efficiently keep medical records and deliver the ultimate care to the patient. ', 'email' => 'dhurt@college.harvard.edu', 'web' => ""])   
                                    
@include('demo.team', ['team' => 'MindTime', 'people' => 'Matt Carter & Rory Glover', 'logo' => "https://s3.amazonaws.com/startuprad/img/25/1460039801.png", 'description' => 'MindTime is a mobile software that guides the user through mindfulness exercises to help people lead positive and thoughtful lives.', 'email' => '', 'web' => ""])   

@include('demo.team', ['team' => 'Prudence', 'people' => 'Rohan Pavuluri & Milton Syed', 'logo' => "https://s3.amazonaws.com/startuprad/img/31/1461272247.png", 'description' => 'Legal aid reinvented.', 'email' => '', 'web' => ""])   
                                    
@include('demo.team', ['team' => 'Shackleton', 'people' => 'Evan Gastman, Greg Hewett, & Antuan Tran', 'logo' => "https://s3.amazonaws.com/startuprad/img/42/1461274061.png", 'description' => 'We love adventure cyclists.', 'email' => '', 'web' => ""])   
                                    
@include('demo.team', ['team' => 'Students of Strength', 'people' => 'Rahsaan King', 'logo' => "https://s3.amazonaws.com/startuprad/img/36/1461022301.png", 'description' => 'Students of Strength is a community of scholars from Ivy League and top tier Universities who serve as online academic coaches and mentors for students nationwide.', 'email' => 'rking@studentsofstrength.com', 'web' => "studentsofstrength.com"])   
   
@include('demo.team', ['team' => 'The Wolfe', 'people' => 'Chase Davis, Christian Ondaatje, & Dino Rodriguez', 'logo' => "https://s3.amazonaws.com/startuprad/img/39/1461276708.png", 'description' => 'A portable device that gives your laptop the power of a desktop.', 'email' => '', 'web' => "thewolfe.io"])  
                                    
@include('demo.team', ['team' => 'Trignis', 'people' => 'Jordan DeGraaf, Jimmy Martter, & Matt Perry', 'logo' => "https://s3.amazonaws.com/startuprad/img/38/1459918240.png", 'description' => 'Next-generation smoker-grill. Scientifically optimized BBQ.', 'email' => 'founders@trignis.com', 'web' => "trignis.com"])  
                                   
@include('demo.team', ['team' => 'Twerch', 'people' => 'Benjy Levin', 'logo' => "https://s3.amazonaws.com/startuprad/img/7/1461251456.png", 'description' => 'Twerch is an online e-commerce platform that will provide video game streamers on Twitch.tv an easy way to sell merchandise directly to their viewers while live streaming.', 'email' => '', 'web' => ""])        
                              
@include('demo.team', ['team' => 'VocoChat', 'people' => 'Atallah Atallah', 'logo' => "https://s3.amazonaws.com/startuprad/img/4/1461272291.png", 'description' => 'Book group activities from your group chat.', 'email' => 'support@vocochat.com', 'web' => "vocochat.com"])   
                                    
                
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END .row -->

			</div>
			<!-- END .container -->


		</main>


		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Stellar -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	
	</body>
</html>
