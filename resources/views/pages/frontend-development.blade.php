@include('partials.head')
@if(session('success'))
        <div class="alert alert-success" style="text-align: center">
          {{ session('success') }}  
        </div>
@endif
<body>
@include('partials.menu')


	<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
	
	<div class="container">
		<h1>Tech Stack</h1>
	</div>
</section>
<section class="specialty-wrapper">
	<section class="content-section">
	<div class="container">
		<h2 class="text-center">Frontend Development Services</h2>
		<div class="textbox text-center h4-style"><p> Does your website need a facelift? Or you just need a well-designed user-friendly project? <br>Our experienced team of designers and front-end engineers will do all the magic and deliver you an eye-candy website.</p>
</div>
	</div>
</section>

<section class="content-section">
	<div class="container">
		<h3 class="text-center">Frontend Custom Services</h3>
		<div class="textbox text-center h4-style"></div>

		<div class="two-column-listing article-listing">
			<div class="item">
	<h4 class="bold">Custom Web Apps</h4>
	<div class="textbox"><p>Our high-performing, intuitive and secure web aps are built with modern fronted frameworks will help you solve complex business requirements</p>
</div>

</div>

<div class="item">
	<h4 class="bold">UI/UX Design</h4>
	<div class="textbox"><p>Your product may be complex, but UI must be simple. We help businesses to design a great experience for their users on the web and mobile platforms</p>
</div>

</div>

<div class="item">
	<h4 class="bold">Cross-Platform Development</h4>
	<div class="textbox">Using cross-platform frameworks, we develop systems that provide a native experience on multiple platforms at the same time</div>

</div>

<div class="item">
	<h4 class="bold">Full Stack Web Development</h4>
	<div class="textbox"><p>We are experts at combining rich responsive frontends with complex and effective backends under a single window web interface</p>
</div>

</div>


		</div>
	</div>
</section>

<section class="content-section">
	<div class="container">
		<h3 class="text-center">Technologies</h3>
<div class="framework-icons-wrap"><div class="icons-item">
	<div class="icon-block"><img src="files/content/techicons/html.png" alt="1"></div>
	<div class="text-block">HTML</div>
</div>
<div class="icons-item">
	<div class="icon-block"><img src="files/content/techicons/css.png" alt="1"></div>
	<div class="text-block">CSS</div>
</div>
<div class="icons-item">
	<div class="icon-block"><img src="files/content/techicons/javascript.png" alt="1"></div>
	<div class="text-block">Javascript</div>
</div>
<div class="icons-item">
	<div class="icon-block"><img src="files/content/techicons/nodejs.png" alt="1"></div>
	<div class="text-block">Node.js</div>
</div>
<div class="icons-item">
	<div class="icon-block"><img src="files/content/techicons/angularjs.png" alt="1"></div>
	<div class="text-block">Angular.js</div>
</div>
<div class="icons-item">
	<div class="icon-block"><img src="files/content/techicons/react-native.png" alt="2"></div>
	<div class="text-block">React.js</div>
</div>
</div>


	</div>
</section>

<section class="cta-section bg-red-gradient overlay-color-pattern color-white">
	<div class="container">
		<div class="content-wrapper">
			<h2 class="mb-half">Need Custom Software?</h2>
			<div class="textbox h4-style"><p>Get an estimate within 72 hours.</p>
</div>
		</div>
		<a   title="Get A Quote" class="btn btn-white"  href="{{url('/contact')}}">Get A Quote</a>
	</div>
</section>

<section class="content-section">
	<div class="container">
		<h3 class="text-center">Why Front-end Development is Our Expertise</h3>
		<div class="textbox text-center h4-style"><p>A user-friendly interface should be built by an artist.  Our designers follow the latest trends in the field and work with modern technologies to build you a software with no limit of creativity.</p>
</div>
		<div class="textbox"><p><strong>User-friendly</strong></p>

<p>We leverage the knowledge of our designers with years of experience in web and who know what users want to see and how they want to interact with applications.</p>

<p><strong>Prototyping</strong></p>

<p>Before we launch your project into production you will be able to give a critical input into design process. Our designers will capture your vision and transfer it into stunning graphics that will just right on the screen.</p>

<p><strong>Beautiful designs</strong></p>

<p> We bridge the gap between visual and technical implementation of the product. Our designers have great technical expertise they previously acquired in hundreds of projects. They know what is needed for best result and will realize your idea.</p>
</div>
	</div>
</section>

<section class="content-section bg-light-gray">
	<div class="container">
		<h3 class="text-center mb-big">Completed Projects</h3>
		<div class="textbox text-center h4-style"></div>

		<div class="specialty-related-projects-slider">

				<div class="item">
					<div class="image-block">
						<img src="files/casestudies/4/activ5-small-pic.jpg" alt="Fitness App that Pairs with a Portable Custom Device" />
					</div>
					<div class="content-block">
						<h5>Fitness App that Pairs with a Portable Custom Device</h5>
						<a href="case-studies/activ5.html" class="more-link">Read More</a>
					</div>
					<a href="case-studies/activ5.html" title="Fitness App that Pairs with a Portable Custom Device" class="area-link"></a>
				</div>

				<div class="item">
					<div class="image-block">
						<img src="files/casestudies/9/event-management-system-landing-1.jpg" alt="Event Management System" />
					</div>
					<div class="content-block">
						<h5>Event Management System</h5>
						<a href="case-studies/event-management-system.html" class="more-link">Read More</a>
					</div>
					<a href="case-studies/event-management-system.html" title="Event Management System" class="area-link"></a>
				</div>

				<div class="item">
					<div class="image-block">
						<img src="files/casestudies/7/trash-landing4.jpg" alt="A Complex Uber-Like Ecosystem That Helps You Get Rid of Trash" />
					</div>
					<div class="content-block">
						<h5>A Complex Uber-Like Ecosystem That Helps You Get Rid of Trash</h5>
						<a href="case-studies/trash-hauling-startup.html" class="more-link">Read More</a>
					</div>
					<a href="case-studies/trash-hauling-startup.html" title="A Complex Uber-Like Ecosystem That Helps You Get Rid of Trash" class="area-link"></a>
				</div>

				<div class="item">
					<div class="image-block">
						<img src="files/casestudies/18/microsoftteams-image-(21).png" alt="Mobile Banking App" />
					</div>
					<div class="content-block">
						<h5>Mobile Banking App</h5>
						<a href="case-studies/mobile-banking-app.html" class="more-link">Read More</a>
					</div>
					<a href="case-studies/mobile-banking-app.html" title="Mobile Banking App" class="area-link"></a>
				</div>

		</div>

	</div>
</section>


</section>

<section class="bg-image-fixed overlay-color-pattern" style=" background-image:url(files/user/contact-us-overlay.jpg); ">
	<div class="overlay-color-dark content-section color-white">
		<div class="container">
			<div class="row">
				<div class="col-md-5 mb-big-sm">
					<h2>Let's Work Together!</h2>
					<div class="textbox h4-style"><p>Do you want to know the total cost of development and realization of the project? Tell us about your requirements, our specialists will contact you as soon as possible.</p>
</div>
				</div>
				<div class="col-md-7">
					<div class="white-form">
						<link href="web/assets/js/intltelinput/css/intltelinput.min.css" type="text/css" rel="stylesheet" />
<script src="web/assets/js/intltelinput/intltelinput-jquery.min.js"></script>

<script src="web/modules/quickcontactform/js/main3860.js?v=1"></script>
<!-- form -->
<div id="quick-contact-app" class="form-wrap flex-form">
	<a data-skip-hash="true" class="anchor-link" name="quick_contact_app_form"></a>
       <!--here  pass name of the view to the contact controller -->
	<form name="frmQuickContact" method="POST" action="">
		
	
	@include('partials.form-under-page')
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')