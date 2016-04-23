
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
        @media  screen and (max-width: 480px) {
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
                                    
                                    <?php echo $__env->make('demo.team', ['team' => 'Ambasity', 'people' => 'Alex Harding', 'logo' => 'https://s3.amazonaws.com/startuprad/img/29/1459876518.png', 'description' => 'Ambasity is a platform that helps brands hire and manage promotional staff for their events.', 'email' => 'aharding@ambasity.com', 'web' => ""], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									
									<div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div style="padding: 1.5em .5em;" class="row">
                                                <div class="col-md-3 logos">
                                                    <img height="25px" src="https://s3.amazonaws.com/startuprad/img/29/1459876518.png">
                                                </div>
                                                <div class="col-md-9 team">
                                                    Ambasity | <span class="people">Alex Harding </span>
                                                </div>
                                            </div>
										</div>
										<div>
											<p> Ambasity is a platform that helps brands hire and manage promotional staff for their events. Learn more by reaching out to <a href="mailto:aharding@ambasity.com">aharding@ambasity.com</a>.</p>
										</div>	
									</div>


									<div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div style="padding: 1.5em .5em;" class="row">
                                                <div class="col-md-3 logos">
                                                    <img height="25px" src="https://s3.amazonaws.com/startuprad/img/29/1459876518.png">
                                                </div>
                                                <div class="col-md-9 team">
                                                    Ambasity | <span class="people">Alex Harding </span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="fh5co-accordion-toggle"><span class="team">Capsul</span> | <a>Nicki Liang, Kazuma Makihara, & Conor Quinn</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/23/1459968360.png"></h3>
										</div>
										<div>
											<p>Capsul is a location-based video sharing app that allows you to both view and contribute to the visual history of a location.</p>
                                            
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Captia</span> | <a>Evan Brown & Cameron Thariani</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/6/1461272203.jpg"></h3>
										</div>
										<div>
											<p>Captia enables users and their friends to make high-quality videos with little effort by providing a collaborative platform where they can share, edit, and combine clips into an elegant video. </p>

										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">DaDiTea</span> | <a>Priscilla Guo</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/13/1461099202.jpg"></h3>
										</div>
										<div>
											<p>DaDiTea is a personalized, online monthly subscription service for samples of international tea. Learn more on the web at <a href="http://daditea.org/">daditea.org</a>. </p>
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Datanautix</span> | <a>Neel Patel</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/34/1461272346.png"></h3>
										</div>
										<div>
                                            <p>Datanautix builds software to find patterns in customer interactions - discover trends hidden in open-ended comments or service chats to start delivering a better customer experience today. Learn more on the web at <a href="http://datanautix.com">datanautix.com</a> or by reaching out to <a href="mailto:neel@datanautix.com">neel@datanautix.com</a>.</p>
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Doorbell</span> | <a>Aleeza Hashmi, Steven Petteruti, & Ben Pleat</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/11/1459877045.jpg"></h3>
										</div>
										<div>
											<p>Doorbell transforms your building into a community by reimagining property management software for residents. We’re creating the only mobile-first resident portal for the 28 million households in multifamily buildings in the US. Learn more on the web at <a href="http://www.doorbell.me/">doorbell.me</a>. </p>
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Drizl</span> | <a>Ryan Fortin & Leo Lim</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/22/1460059625.jpg"></h3>
										</div>
										<div>
											<p>Drizl is a web application designed to help users make more informed financial purchases using data analytics.</p>
                                        
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">FROTH</span> | <a>Catie Cole</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/5/1459877760.jpg"></h3>
										</div>
										<div>
											<p>FROTH is a drinks subscription membership and community of young professionals in NYC. Learn more on the web at <a href="http://froth.nyc /">froth.nyc </a> or by reaching out to <a href="mailto:catie@froth.nyc">catie@froth.nyc</a></p>

										</div>
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Keepspace</span> | <a>Rashaad Hossain & Aman Kandola</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/1/1460058157.png"></h3>
										</div>
										<div>
											<p>Keepspace is a journaling revolution that guides people in their journey to discover and save the unique moments present in every day. Learn more on the web at <a href="http://thekeepspace.com/">thekeepspace.com</a>.</p>
                            
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Kynplex</span> | <a>Raul Jordan</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/2/1460057889.png"></h3>
										</div>
										<div>
											<p>Kynplex is an online network designed for scientific innovation that brings together research labs, companies, and influential scientists to identify and form collaborations.</p>
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Lunos</span> | <a>Andrew Jin & Dhaivat Pandya</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/21/1461179727.png"></h3>
										</div>
										<div>
											<p>Lunos allows artists to gain large-scale, highly targeted exposure for new music releases at live venues, such as nightclubs, where music spreads the fastest.  Learn more on the web at <a href="http://lunosmusic.com/">lunosmusic.com</a>.</p>
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">luvagent.com</span> | <a>Adnan Zaib</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/27/1460667552.png"></h3>
										</div>
										<div>
                                            <p>Luv Agent is an online application allowing individuals to create a profile for their friends, find them potential matches, and then setup actual blind dates. Learn more on the web at <a href="http://luvagent.com">luvagent.com</a>.</p>
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">MedKit</span> | <a>Simone Abegunrin, Tim Bryant & Deven Hurt</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/26/1459977669.png"></h3>
										</div>
										<div>
											<p>MedKit is the most efficient system that combines an innovative scheduling system, customizable visit templates, and a revolutionary UX design to assist primary care physicians to efficiently keep medical records and deliver the ultimate care to the patient. Learn more by reaching out to <a href="mailto:dhurt@college.harvard.edu">dhurt@college.harvard.edu</a>.</p>
                                    
										</div>


									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">MindTime</span> | <a> Matt Carter & Rory Glover</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/25/1460039801.png"></h3>
										</div>
										<div>
											<p>MindTime is a mobile software that guides the user through mindfulness exercises to help people lead positive and thoughtful lives.</p>
                                    
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Prudence</span> | <a>Rohan Pavuluri & Milton Syed</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/31/1461272247.png"></h3>
										</div>
										<div>
											<p>Legal aid reinvented. </p>
                                    
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Shackleton</span> | <a>Evan Gastman, Greg Hewett, & Antuan Tran</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/42/1461274061.png"></h3>
										</div>
										<div>
											<p></p>
                                    
										</div>	
									</div>
                                    
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Students of Strength</span> | <a>Rahsaan King</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/36/1461022301.png"></h3>
										</div>
										<div>
											<p>Students of Strength is a community of scholars from Ivy League and top tier Universities who serve as online academic coaches and mentors for students nationwide. Learn more on the web at <a href="http://www.studentsofstrength.com">studentsofstrength.com</a> or by reaching out to <a href="mailto:rking@studentsofstrength.com">rking@studentsofstrength.com</a>.</p>
                                    
										</div>	
									</div>
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">The Wolfe</span> | <a>Chase Davis, Christian Ondaatje, & Dino Rodriguez</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/39/1461276708.png"></h3>
										</div>
										<div>
                                            <p>A portable device that gives your laptop the power of a desktop. Learn more on the web at <a href="http://www.thewolfe.io">thewolfe.io</a>.</p>
                                    
										</div>	
									</div>
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Trignis</span> | <a>Jordan DeGraaf, Jimmy Martter, & Matt Perry</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/38/1459918240.png"></h3>
										</div>
										<div>
											<p>Next-generation smoker-grill. Scientifically optimized BBQ. Learn more on the web at <a href="http://www.trignis.com">trignis.com</a> or by reaching out to <a href="mailto:founders@trignis.com">founders@trignis.com</a>.</p>
                                    
										</div>	
									</div>
                                                                        <div class="fh5co-accordion to-animate">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">Twerch</span> | <a>Benjy Levin</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/7/1461251456.png"></h3>
										</div>
										<div>
											<p>Twerch is an online e-commerce platform that will provide video game streamers on Twitch.tv an easy way to sell merchandise directly to their viewers while live streaming.</p>
                                    
										</div>	
									</div>
                                    <div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div class="fh5co-accordion-toggle"><span class="team">VocoChat</span> | <a>Atallah Atallah</a></div>
											<h3><img height="25px" src="https://s3.amazonaws.com/startuprad/img/4/1461272291.png"></h3>
										</div>
										<div>
											<p>Book group activities from your group chat. Learn more on the web at <a href="http://www.vocochat.com">vocochat.com</a> or by reaching out to <a href="mailto:support@vocochat.com">support@vocochat.com</a>.</p>
                                    
										</div>	
									</div>
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
