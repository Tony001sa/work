<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Selfy Pay - Касса нового поколения</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="HTML landing page for website apps">
		
		<!-- Favicon -->
		<link rel="icon" href="{{URL::asset('img/static/favicon.ico')}}">
		
		<!-- Icons -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Plugin CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/static/bootstrap.min.css')}}">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/static/template.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/static/custom.css')}}">
	</head>
	
	<body>
		
		<!-- Loader -->
		<div class="loader">
			<div class="cp-spinner cp-skeleton"></div>
		</div>
		
		
		<!-- Navigation -->
		<div class="container">
			<nav id="navigation" class="navigation">
				<div class="nav-header">
					<a href="#" class="nav-logo"><div class="nav-logo-image"></div></a>
					<div class="nav-toggle"></div>
				</div>
				
				<div class="nav-search">
					<div class="nav-search-button">
						<i class="nav-search-icon"></i>
					</div>
					<form>
						<div class="nav-search-inner">
							<input type="search" name="search" placeholder="Type and hit ENTER"/>
						</div>
					</form>
				</div>
				
				<div class="nav-menus-wrapper">
					<ul class="nav-menu nav-menu-centered">
						<li class="active"><a href="#home">Домой</a></li>
						<li><a href="#advantages">Примущества</a></li>
						<li><a href="#case">Кейс</a></li>
						<li><a href="#clients">Клиенты</a></li>
						<li><a href="#plans">Наша касса</a></li>
						<li><a href="#team">Команда</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div>
			</nav>
		</div>
		
		
		<!-- Header -->
		<header id="home" class="animated text-center text-lg-left">
			<div class="cover"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-flex align-items-center">
						<div>
							<h1 class="display-4">Make your business reach the highest level with AppX</h1>
							<p class="lead mt-4">
								Our app can help your business grow, improve your process and make your customers more satisfied
							</p>
							<a class="btn btn-primary btn-lg btn-rounded btn-xlg btn-light mt-4" href="#" role="button">
								<i class="fa fa-apple fa-2x" aria-hidden="true"></i>
								App Store
							</a>
							<a class="btn btn-primary btn-lg btn-rounded btn-xlg btn-light mt-4" href="#" role="button">
								<i class="fa fa-android fa-2x" aria-hidden="true"></i>
								Google Play
							</a>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="{{URL::asset('img/static/phone-01.png')}}" class="mt-5 mt-lg-0 mx-auto float-lg-right" alt="image">
					</div>
				</div>
			</div>
		</header>
		
		
		<!-- Main -->
		<div class="main">
			
			<!-- Advantages -->
			<section id="advantages" class="advantages section section-gray">
				<div class="container section-header text-center">
					<h2>Many Advantages</h2>
					<p class="lead mx-auto mt-5">
						Our app can bring many benefits to you. See below some of them.
					</p>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="advantage-box mx-auto w-100 mb-4 mb-lg-5">
								<div class="advantage-box-icon mb-4">
									<i class="fa fa-usd fa-3x" aria-hidden="true"></i>
								</div>
								<h4 class="mb-3">Cost Saving</h4>
								<p>
									Everyone likes to save money and we built the app thinking about it. 
									Our app is sure to help you save money.
								</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="advantage-box mx-auto w-100 mb-4 mb-lg-5">
								<div class="advantage-box-icon mb-4">
									<i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
								</div>
								<h4 class="mb-3">Speed up</h4>
								<p>
									Time is money. AppX optimizes your time making things more accurate. 
									Do not waste time, know our application.
								</p>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-lg-6">
							<div class="advantage-box mx-auto w-100 mb-4 mb-lg-0">
								<div class="advantage-box-icon mb-4">
									<i class="fa fa-pie-chart fa-3x" aria-hidden="true"></i>
								</div>
								<h4 class="mb-3">Productivity</h4>
								<p>
									Make your company produce more and better. Monitor your production 
									to control flow, the speed and quality.
								</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="advantage-box mx-auto w-100 mb-4 mb-md-0">
								<div class="advantage-box-icon mb-4">
									<i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i>
								</div>
								<h4 class="mb-3">Satisfaction</h4>
								<p>
									The customer satisfaction is important to you? Make your 
									customers happier with a direct communication channel
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- Case -->
			<section id="case" class="case section">
				<div class="container section-header text-center">
					<h2>A Case of Success</h2>
					<p class="lead mx-auto mt-5">
						See what one of our happy customers has to say
					</p>
				</div>
				<div class="container px-0">
					<div class="row w-100 m-0 p-0">
						<div class="col-lg-6 p-0 d-flex align-items-center">
							<img class="w-100" src="{{URL::asset('img/static/office.jpg')}}" alt="image">
						</div>
						<div class="col-lg-6 p-0 d-flex align-items-stretch">
							<div class="d-flex align-items-center">
								<div class="card border-0 text-left text-white rounded-0 mb-lg-0 p-5">
									<div class="card-block">
										<p class="card-text lead mb-3">
											The app is awesome! It helps my company accelerate processes, help lower costs, 
											and increase the quality of our products. It is very easy to use, lightweight 
											application and runs smoothly on various devices. The adoption of AppX has resulted 
											in overall improvement for the company and customer satisfaction. AppX is an essential part 
											of our company now.
										</p>
										<h4 class="text-left">John Doe</h4>
										<p class="mb-0 text-left">CEO - Company X</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- Info -->
			<section class="info section section-gray text-center text-lg-left">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 d-flex align-items-center">
							<div>
								<h2>Simple and Powerful</h2>
								<p class="lead mt-4">
									AppX is simple and powerful at the same time. While it has a simple and beautiful 
									interface, it provides abundant functionality, is customizable and very easy to use. 
									Let AppX help your business grow.
								</p>
								<a class="btn btn-primary btn-rounded btn-xlg btn-custom mt-3" href="#" role="button">Learn More</a>
							</div>
						</div>
						<div class="col-lg-6">
							<img class="mx-auto mt-5 mt-lg-0 float-lg-right" src="{{URL::asset('img/static/screens.png')}}" alt="image">
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- Clients -->
			<section id="clients" class="clients section">
				<div class="container section-header text-center">
					<h2>Our Clients</h2>
					<p class="lead mx-auto mt-5">
						Here are some of our valued clients
					</p>
				</div>
				<div class="container text-center">
					<div class="row">
						<div class="col-lg-4">
							<img class="my-5 m-lg-0" src="{{URL::asset('img/static/client-01.png')}}" alt="image">
						</div>
						<div class="col-lg-4">
							<img class="mb-5 mb-lg-0" src="{{URL::asset('img/static/client-02.png')}}" alt="image">
						</div>
						<div class="col-lg-4">
							<img class="mb-5 mb-lg-0" src="{{URL::asset('img/static/client-03.png')}}" alt="image">
						</div>
					</div>
					<div class="row mt-lg-5">
						<div class="col-lg-4">
							<img class="mb-5 mb-lg-0" src="{{URL::asset('img/static/client-04.png')}}" alt="image">
						</div>
						<div class="col-lg-4">
							<img class="mb-5 mb-lg-0" src="{{URL::asset('img/static/client-05.png')}}" alt="image">
						</div>
						<div class="col-lg-4">
							<img class="mb-5 mb-lg-0" src="{{URL::asset('img/static/client-06.png')}}" alt="image">
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- Plans -->
			<section id="plans" class="plans section section-gray">
				<div class="container section-header text-center">
					<h2>Our Plans</h2>
					<p class="lead mx-auto mt-5">
						See which of our plans is best for you
					</p>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="card border-0 mb-5 mb-lg-0 p-5">
								<div class="card-block text-muted">
									<p class="card-text mb-3">$49</p>
									<h4 class="card-title m-0">Startup</h4>
								</div>
								<ul class="list-group py-4">
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										All main features
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										16hs training
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										Analytics dashboard
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										Support 24hs
									</li>
								</ul>
								<div class="card-block">
									<a class="btn btn-primary btn-block btn-rounded btn-xlg btn-custom" href="#" role="button">Get started</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card border-0 mb-5 mb-lg-0 p-5">
								<div class="card-block text-muted">
									<p class="card-text mb-3">$129</p>
									<h4 class="card-title m-0">Business</h4>
								</div>
								<ul class="list-group py-4">
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										All main features
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										32hs training
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										Analytics dashboard
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										Support 24hs
									</li>
								</ul>
								<div class="card-block">
									<a class="btn btn-primary btn-block btn-rounded btn-xlg btn-custom" href="#" role="button">Get started</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card border-0 mb-5 mb-lg-0 p-5">
								<div class="card-block text-muted">
									<p class="card-text mb-3">$199</p>
									<h4 class="card-title m-0">Enterprise</h4>
								</div>
								<ul class="list-group py-4">
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										All features unlocked
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										80hs training
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										Analytics dashboard
									</li>
									<li class="list-group-item">
										<i class="fa fa-check" aria-hidden="true"></i>
										Personal support 24hs
									</li>
								</ul>
								<div class="card-block">
									<a class="btn btn-primary btn-block btn-rounded btn-xlg btn-custom" href="#" role="button">Get started</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- Team -->
			<section id="team" class="team section text-center">
				<div class="container section-header text-center">
					<h2>Our Team</h2>
					<p class="lead mx-auto mt-5">
						These are the people who make things happen
					</p>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="card border-0 mb-5 mb-lg-0">
								<img class="card-img-top" src="{{URL::asset('img/static/person-01.jpg')}}" alt="Card image cap">
								<div class="card-body">
									<span class="name w-100 d-block">Jack Doe</span>
									<span class="position mb-3 w-100 d-block">Senior Developer</span>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-linkedin" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="card border-0 mb-5 mb-lg-0">
								<img class="card-img-top" src="{{URL::asset('img/static/person-02.jpg')}}" alt="Card image cap">
								<div class="card-body">
									<span class="name w-100 d-block">Mary Doe</span>
									<span class="position mb-3 w-100 d-block">Senior Developer</span>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-linkedin" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="card border-0 mb-5 mb-lg-0">
								<img class="card-img-top" src="{{URL::asset('img/static/person-03.jpg')}}" alt="Card image cap">
								<div class="card-body">
									<span class="name w-100 d-block">Mark Doe</span>
									<span class="position mb-3 w-100 d-block">Senior Developer</span>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-linkedin" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="card border-0 mb-5 mb-lg-0">
								<img class="card-img-top" src="{{URL::asset('img/static/person-04.jpg')}}" alt="Card image cap">
								<div class="card-body">
									<span class="name w-100 d-block">Jessica Doe</span>
									<span class="position mb-3 w-100 d-block">Senior Developer</span>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<a class="social-link d-inline-block" href="#">
										<i class="fa fa-linkedin" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- Newsletter -->
			<section id="newsletter" class="newsletter section text-center text-white">
				<div class="container section-header mb-5">
					<h2>Newsletter</h2>
					<p class="lead mx-auto mt-5">
						Subscribe to our newsletter and stay informed about our news
					</p>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<form class="form-inline d-flex justify-content-center">
								<input class="form-control form-control-lg mr-lg-3" type="text" placeholder="Your email adress">
								<button type="submit" class="btn btn-primary btn-xlg btn-light mt-3 mt-lg-0">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- FAQ -->
			<section id="faq" class="faq section section-gray">
				<div class="container section-header mb-5 text-center">
					<h2>FAQ</h2>
					<p class="lead mx-auto mt-5">
						Some questions you may have
					</p>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div id="accordion" class="mx-auto" role="tablist">
								<div class="card mb-1 border-0">
									<div class="card-header p-0" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												How does AppX support work?
											</a>
										</h5>
									</div>
									<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
										<div class="card-body">
											Our support center runs 24 hours a day, 7 days a week, 365 days a year. You can contact us by email or phone. 
											Contact us any time you wish. We have a team fully qualified to help with any questions or difficulties. 
											Our goal is your complete satisfaction.
										</div>
									</div>
								</div>
								<div class="card mb-1 border-0">
									<div class="card-header p-0" role="tab" id="headingTwo">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Is there a trial period?
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
										<div class="card-body">
											There is a 30 day trial period. In this period all the features are active and you can use the application 
											completely. After this period the charges begin to be made.
										</div>
									</div>
								</div>
								<div class="card mb-1 border-0">
									<div class="card-header p-0" role="tab" id="headingThree">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												What frequency of updates?
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
										<div class="card-body">
											Monthly updates will be released for performance improvements, bug fixes, and the addition of new features. 
											Security updates will be made as soon as possible after identification.
										</div>
									</div>
								</div>
								<div class="card mb-1 border-0">
									<div class="card-header p-0" role="tab" id="headingFour">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												Under what circumstances is refund allowed?
											</a>
										</h5>
									</div>
									<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
										<div class="card-body">
											Refund will be granted within 7 business days after the trial period. After this period refunds will 
											not be granted. For periods of application inoperability due to maintenance and upgrades, the refund will 
											be proportional to the period of inactivity.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- Contact -->
			<section id="contact" class="contact section pb-0 text-center">
				<div class="container section-header">
					<h2>Contact Us</h2>
					<p class="lead mx-auto mt-5">
						Call us or send a message
					</p>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="card border-0">
								<div class="card-body">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									appx@appx.com
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card border-0">
								<div class="card-body">
									<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
									+33 12 1234 5678
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card border-0">
								<div class="card-body">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									26 Rue Saint-Martin, Paris, France
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-lg-12">
							<form id="contact-form" method="post" action="{{URL::asset('php/static/contact.php')}}">
								<div class="row">
									<div class="col-lg-6">
										<input class="form-control form-control-lg mb-3" id="name" name="name" type="text" placeholder="Your name" required>
										<input class="form-control form-control-lg mb-3" id="email" name="email" type="email" placeholder="Your email adress" required>
										<input class="form-control form-control-lg mb-3" id="subject" name="subject" type="text" placeholder="Subject" required>
									</div>
									<div class="col-lg-6 d-flex align-items-stretch">
										<textarea class="form-control form-control-lg mb-3 w-100" name="message" rows="5" placeholder="Your message" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 d-flex justify-content-end">
										<button class="btn btn-primary btn-rounded btn-xlg btn-custom" name="submit" type="submit">Send the message</button>
									</div>
								</div>
							</form>
							<div id="error-container"></div>
						</div>
					</div>
				</div>
				<div id="map" class="mt-5"></div>
			</section>
			
		</div>
		
		
		<!-- Footer -->
		<footer class="text-center text-lg-left">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						© Selfy Pay - 2017 Все права защищены
					</div>
					<div class="col-lg-6 mt-5 mt-lg-0">
						<ul class="list-inline mb-0 d-flex justify-content-around">
							<li class="list-inline-item"><a href="#">FAQ's</a></li>
							<li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
							<li class="list-inline-item"><a href="#">Privacy</a></li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-google" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		
		
		<!-- jQuery -->
		<script src="{{URL::asset('js/static/jquery-3.0.0.min.js')}}"></script>
		
		<!-- Loader -->
		<script src="{{URL::asset('js/static/imagesloaded.pkgd.min.js')}}"></script>
		
		<!-- Maps -->
		<script src="http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyBu1ynGGNGOgWGprPgHz9uRwCBP2Eh0Vrc"></script>
		<script src="{{URL::asset('js/static/locationpicker.jquery.min.js')}}"></script>
		
		<!-- Bootstrap -->
		<script src="{{URL::asset('js/static/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Form validation -->
		<script src="{{URL::asset('js/static/jquery.validate.min.js')}}"></script>
		<script src="{{URL::asset('js/static/additional-methods.min.js')}}"></script> 
		
		<!-- Navigation -->
		<script src="{{URL::asset('js/static/navigation.js')}}"></script>
		<script src="{{URL::asset('js/static/navigation.fixed.js')}}"></script>
		<script src="{{URL::asset('js/static/navigation.scrollspy.js')}}"></script>
		
		<!-- Animation -->
		<script src="{{URL::asset('js/static/jquery.particleground.min.js')}}"></script>
		
		<!-- Main script -->
		<script src="{{URL::asset('js/static/main.js')}}"></script>
		<script src="{{URL::asset('js/static/custom.js')}}"></script>
	</body>
	
</html>