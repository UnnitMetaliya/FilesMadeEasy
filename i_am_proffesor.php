<!DOCTYPE html>
<?php
	// Start the session
	session_start();
?>
	<html>
		<head>
			<script>
				window.alert("Invalid username");
			</script>
			<title>Online_Repository</title>
			<link href="..\Front page\css\bootstrap.css" rel='stylesheet' type='text/css' />
			<link href="..\Front page\css\style.css" rel="stylesheet" type="text\css" media="all" />
			<link rel="stylesheet" type="text/css" href="..\Front page\css\animate-custom.css" />
			<link rel="stylesheet" href="..\Front page\css\MetroJs1.css" type="text/css"/>
			<script src="..\Front page\scripts\jquery-1.11.2.js"></script>
			<script src="..\Front page\scripts\MetroJs.js"></script>
			<script src="js\jquery.min.js"></script>
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			
		</head>
			<body>
 <!-- header-section-starts -->
			<div class="header">
				<div class="header-banner">
					<div class="container">
						<div class="top-menu">							
							<span class="menu"> </span>
							<h1 style="text-align:left;font-size:30px"><a href="index.html">Online<span>_Repository</span></a></h1>
							<ul style="text-align:right">
								
								<li><a href="#ABOUT" class="scroll">ABOUT</a></li>
								<li><a href="#LOGIN" class="scroll">REGISTER\LOGIN</a><li>
								<li><a href="#CONTACT" class="scroll">CONTACT</a></li>
							</ul>
						</div>
						<!--script-nav-->
						<script>
							$("span.menu").click(function(){
							$(".top-menu ul").slideToggle("slower" , function(){
							});
						});
						</script>
						<div class="header-banner-info text-center">
							<a href="#"><img src="..\Front page\img\logo.png" alt="" /></a>
							<h3 style="color:#FFF">HELLO</h3>
							<h1 style="color:#FFF">Welcome<span style="color:#FFF">&nbspto</span> </h1>
							<h1 style="color:#FFF">The online_repository system.</h1>				 							
							
						</div>
					</div>
				</div>
			</div>
			<!-- header-section-ends -->
			<!-- content-section-starts -->
			<div class="content-section">
				<!-- about-section-starts -->
				<div class="about-section" id="ABOUT">
					<div class="container">
						<div class="about-section-head text-center">
							<img src="..\Front page\img\head.png" alt="" />
							<h3>ABOUT</h3>
							<p></p>
						</div>
						<div class="about-section-grids">
							<div class="col-md-7 about-section-grid-1">
								<h4>Insight</h4>
								<p>Birla Vishvakarma Mahavidyalaya Engineering College (BVM) is a grant-aided engineering institution located in the educational town of Vallabh Vidyanagar, Gujarat, India.
								It is affiliated to Gujarat Technological University with a NBA accreditation.
								In fact it was established before the conception of IITs. Managed by Charutar Vidya Mandal.IT department is one of few departments in the institute.</p>
								<h4>History</h4>
								<p>Birla Vishvakarma Mahavidyalaya Engineering College was established in 1948 from donations made by the Birla Education Trust on the behest of Sardar Vallabhbhai Patel, the first Home Minister of independent India. 
								The college was inaugurated by Lord Mountbatten, the Governor General of India on 14 June 1948, and rose to prominence under the stewardship of Prof. Junarkar and Prof. K.M. Dholakia. 
								It was one of the first few colleges in India that adopted the progressive credit system of relative grading in India.
								The college has awarded degrees to over 17,000 graduates, and has its alumni spread across the globe.</p>
							</div>
							<div class="col-md-5 about-section-grid-8">
							<br><br><br>
								<div class="live-tile" data-initdelay="500" data-delay="3000">
									<div><br><img src="..\Front page\img\header-banner.jpg" alt="profile2"></div>
									<div><br><img src="..\Front page\img\header-banner1.jpg" alt="profile1"></div>
								</div>
								<script type="text/javascript">
								$(document).ready(function(){
								$(".live-tile").liveTile();
								});
								</script>	
							</div>
						</div>					
					</div>
				</div>
			</div>
			<!-- about-section-ends -->
			<!-- regestration starts-->
			
			<div class="content-section">
				<div class="register" id="LOGIN" style="
													font-weight: 400;
													font-size: 15px;
													color: #1d3c41;
													text-align: center;
													">
						<div class="container" style="width: 100%;
													height: 840px;
													position: relative;
													text-align: center;
													background-color:#ff8856;
													
													">
						
								<header style="padding: 20px 30px 10px 30px;
												margin: 0px 20px 10px 20px;
												position: relative;
												display: block;
												text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
												text-align: center;">
												<br>
									<h1 style="font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
												font-size: 35px;
												line-height: 35px;
												position: relative;
												font-weight: 400;
												color: rgba(26,89,120,0.9);
												text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
												padding: 0px 0px 5px 0px;">Login and Registration</h1>
								</header>
								<section>				
									<div id="container_demo"  style="text-align: left;
																	margin: 0;
																	padding: 0;
																	margin: 0 auto;
																	font-family: "Trebuchet MS","Myriad Pro",Arial,sans-serif;">
										<!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
										<a class="hiddenanchor" id="toregister" style="display: none;"></a>
										<a class="hiddenanchor" id="tologin" style="display: none;"></a>
										<a class="hiddenanchor" id="toforget" style="display: none;"></a>
										<a class="hiddenanchor" id="tologin" style="display: none;"></a>
										<div id="wrapper">
											<div id="login" class="animate form">
												<form  action="..\Front page\php\proffesor_logindb.php" autocomplete="on" method="POST"> 
													<h1>Log in</h1> 
													<p> 
														<label for="username" class="uname" data-icon="u" > Your email  </label>
														<input id="username" name="emailloginup" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
													</p>
													<p> 
														<label for="password" class="youpasswd" data-icon="p"> Your password </label>
														<input id="password" name="passwordlogin" required="required" type="password" placeholder="eg. X8df!90EO" /> 
													</p>
													<p class="keeplogin"> 
														<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
														<label for="loginkeeping">Keep me logged in</label>
													</p>
													<p class="login button"> 
														<input type="submit" value="Login" name="login"/> 
													</p>
													<p class="change_link1" >
														Forgot something?
														<a href="#toforget" class="to_forget" >Reterive it!!</a>
													</p>
													<br>
													<p class="change_link" style="text-align:left;">
														Not a member yet ?
														<a href="#toregister" class="to_register" >Join us</a>
													</p>
												</form>
											</div>
											<div id="forget" class="animateform">
													<form  action="..\Front page\php\proffesor_forgot.php" autocomplete="on" method="POST">
														<h1>Forgot</h1> 
													<p>Enter any one of field mentioned below</p>
													<p> 
														<label for="username" class="uname" data-icon="u" > Your email  </label>
														<input id="username" name="email" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
													</p>
													<p> 
														<label for="password" class="youpasswd" data-icon="p"> Your password </label>
														<input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
													</p>
													<p class="signin button"> 
														<input type="submit" value="Retrive it" name="forgot"/> 
													</p>
													<p class="change_link">  
														Login again!!
														<a href="#tologin" class="to_login"> Go and log in </a>
													</p>
													</form>
												
											</div>
											<div id="register" class="animate form">
												<form  action="..\Front page\php\proffesor_signupdb.php" autocomplete="on" method="POST"> 
													<h1> Sign up </h1> 
													<p> 
														<label for="usernamesignup" class="uname" data-icon="u">Your username</label>
														<input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
													</p>
													<p> 
														<label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
														<input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
													</p>
													<p> 
														<label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
														<input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
													</p>
													<p> 
														<label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
														<input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
													</p>
													<p class="signin button"> 
														<input type="submit" value="Sign up" name="signup"/> 
													</p>
													<p class="change_link">  
														Already a member ?
														<a href="#tologin" class="to_register"> Go and log in </a>
													</p>
												</form>												
											</div>											
										</div>
									</div>  
								</section>
						</div>									
				</div><!-- Register -->							  
			</div> <!-- /content-section -->
						
		<!-- contact-sectiont-starts -->
				<div class="contact-section text-center" id="CONTACT" style="background:#559e83;">
					<div class="container" style="height:660px;">
						<div class="contact-section-head">
							<br>
							<h3> Contact Us</h3>
							<p> Online_Repository</p>
						</div>
						<div class="contact-info" style="display:inline-block">
							<ul>
								<li>&nbsp <img src="img/mail.png" alt="" /></li>
								<li>&nbsp <a href="#">admin@gmail.com</a></li>
							</ul>
							<form>
								<input type="text"  class="text" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}"/>
								<input type="text" class="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}"/>
								<textarea   onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" rows="6" >Your Message</textarea>
								<p><input class="b1" type="button" value="SEND MESSAGE"/></p>
							</form>
						</div>	
					</div>
				</div>
    <!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
	    <div class="container">
			<div class="copy-rights text-center">
				<p><h4 style="color:#FFF">Devloped By Arvind and Unnit</h4></p>
			</div>
		</div>
	</div>
	<!-- footer-section-ends -->
				  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>