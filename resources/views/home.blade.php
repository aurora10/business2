@if(session('success'))
        <div class="alert alert-success" style="text-align: center">
          {{ session('success') }}  
        </div>
@endif
@include('partials.head')

<body>
@include('partials.menu')




	<section class="masthead-section bg-image-cover overlay-color-dark color-white " style=" background-image:url(files/user/kaleidico-small-unsplash.jpg); ">
	
	
	<div class="masthead-inner">
	
	<div class="container">
		<div class="row">
			<div class="col-md-11 col-md-offset-0 col-sm-10 col-sm-offset-1">
				<h1>We Build Better Apps</h1>
				<div class="textbox big">We create websites, web-apps </br>and other software solutions of any complexity  with focus on speed and quality</div>
				<div><a   class="btn btn-white"  href="{{url('/portfolio')}}">See Case Studies</a></div>
			</div>




		</div>
		
	</div>
	
</div>

<div class="clients-logos-section overlay-color-dark">
	<div class="container">
		<div>Trusted worldwide</div>

		<div id="clients-logos-slider" >

				<div class="item"><img src="files/clients/client01.png" alt="American Airlines" /></div>

				<div class="item"><img src="files/clients/client02.png" alt="IBM" /></div>

				<div class="item"><img src="files/clients/client03.png" alt="Burger King" /></div>

				<div class="item"><img src="files/clients/client04.png" alt="DELTA" /></div>


				<div class="item"><img src="files/clients/client08.png" alt="Microsoft" /></div>

				<div class="item"><img src="files/clients/client09.png" alt="Mitsubishi" /></div>

				<div class="item"><img src="files/clients/client10.png" alt="Nissan" /></div>

				<div class="item"><img src="files/clients/client11.png" alt="Samsung" /></div>

				<div class="item"><img src="files/clients/client12.png" alt="Amway" /></div>

		</div>

	</div>
</div>

</section>
<section class="content-section bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 mb-big-sm">
	<div class="home-service-wrap">
		<header class="mb">
			<div class="icon"><img class="" src="files/user/i-tech-stack.png" /></div>
			<h3>Tech Stack</h3>
		</header>
		<ul>
	<li><a href="frontend-development.html">Frontend</a></li>
	<li><a href="backend-development.html">Backend</a></li>
	<li><a href="mobile.html">Mobile</a></li>
</ul>

	</div>
</div>
<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 mb-big-sm">
	<div class="home-service-wrap">
		<header class="mb">
			<div class="icon"><img class="" src="files/user/i-expertise.png" /></div>
			<h3>Expertise</h3>
		</header>
		<ul>
	<li><a href="computer-vision.html">React/VueJs Apps</a></li>
	<li><a href="chat-apps.html">PHP/Laravel Apps</a></li>
	<li><a href="health-and-fitness-apps.html">ReactNative/Ionic</a></li>
	<!-- <li><a href="enterprise-portals.html">Enterprise Portals</a></li> -->
</ul>

	</div>
</div>
<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 mb-big-sm">
	<div class="home-service-wrap">
		<header class="mb">
			<div class="icon"><img class="" src="files/user/i-focus.png" /></div>
			<h3>Focus</h3>
		</header>
		<ul >
	<li><a href="ai-and-machine-learning.html">Enterprise Portals</a></li>
	<li><a href="architecture-and-cloud-engineering.html">Cloud Engineering</a></li>
	<li><a href="mvp-and-startups.html">MVP &amp; Startups</a></li>
	<!-- <li><a href="business-automation.html">Business Automation</a></li> -->
</ul>

	</div>
</div>

		</div>
	</div>
</section>

<section class="content-section bg-red-gradient  color-white">
	<div class="container">
		<h2 class="text-center mb-big">Core Technologies</h2>
		<div class="row">
			<div class="col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">

		<div class="tech-listing">



				<div class="item">
					<img alt="React JS" src="files/coretechnologies/i-tech-react.png" />
					<div>React JS</div>
				</div>



				<div class="item">
					<img alt="iOS" src="files/coretechnologies/i-tech-ios.png" />
					<div>iOS</div>
				</div>

				<div class="item">
					<img alt="Android" src="files/coretechnologies/i-tech-android.png" />
					<div>Android</div>
				</div>

            <div class="item">
                <img alt="Android" src="files/coretechnologies/i-tech-angular.png" />
                <div>Android</div>
            </div>

				<div class="item">
					<img alt="Azure" src="files/coretechnologies/i-tech-azure.png" />
					<div>Azure</div>
				</div>

				<div class="item">
					<img alt="AWS" src="files/coretechnologies/i-tech-aws.png" />
					<div>AWS</div>
				</div>



		</div>

			</div>
		</div>
	</div>
</section>
<section class="content-section overlay-color-pattern">
	<div class="container">
		<h2 class="text-center mb-big">Recent Case Studies</h2>

		<div class="portfolio-listing">

				<div class="item">

						<div class="image-block">
							<img src="files/casestudies/22/social-media-caption-generation-app---landing.jpg" alt="Social Media Caption Generation AI" />
						</div>

					<div class="content-block">
						<div class="date small color-gray">May 2021</div>
						<h5>Social Media Caption Generation AI</h5>
						<a href="case-studies/social-media-caption-generation-ai.html" class="more-link">Read More</a>
					</div>
					<a title="Social Media Caption Generation AI" href="case-studies/social-media-caption-generation-ai.html" class="area-link"></a>
				</div>

				<div class="item">

						<div class="image-block">
							<img src="files/casestudies/21/landing-min.jpg" alt="AI-powered Digital Media Recommendation System" />
						</div>

					<div class="content-block">
						<div class="date small color-gray">Apr 2021</div>
						<h5>AI-powered Digital Media Recommendation System</h5>
						<a href="case-studies/ai-powered-digital-media-recommendation-system.html" class="more-link">Read More</a>
					</div>
					<a title="AI-powered Digital Media Recommendation System" href="case-studies/ai-powered-digital-media-recommendation-system.html" class="area-link"></a>
				</div>

				<div class="item">

						<div class="image-block">
							<img src="files/casestudies/20/gtp-3-landing-min.jpg" alt="Marketing Content Generation System Using GPT-3" />
						</div>

					<div class="content-block">
						<div class="date small color-gray">Apr 2021</div>
						<h5>Marketing Content Generation System Using GPT-3</h5>
						<a href="case-studies/marketing-content-generation-system-using-gpt-3.html" class="more-link">Read More</a>
					</div>
					<a title="Marketing Content Generation System Using GPT-3" href="case-studies/marketing-content-generation-system-using-gpt-3.html" class="area-link"></a>
				</div>


</section>



<section class="content-section bg-red-gradient overlay-color-pattern color-white">
	<div class="container">
		<h2 class="text-center mb-big">About Us</h2>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<div class="textbox big text-center"><p>Marketorix Media Solutions is providing custom software development and online marketing services to businesses who need cutting edge technology and great customer experience.
Our core values are <br>high quality, transparency and effective communication.
</p>
</div>
				<div class="text-center"><a   class="btn btn-white"  href="{{url('/portfolio')}}">Learn More</a></div>
			</div>
		</div>
	</div>
</section>
<div class="content-section overlay-color-pattern">
	<a class="anchor-link" data-skip-hash="true" name="contact"></a>
	<div class="container">
		<!-- tabs -->
		<div class="tabs-wrap footer-tabs">
			<!-- Nav tabs -->
			<div class="nav-tabs-wrapper">
				<ul class="nav nav-tabs" role="tablist">

	<li id="tab24" role="presentation" class="active">
		<a href="#tab-panel24" aria-controls="tab-panel24" role="tab" data-toggle="tab">Contact Us</a>
	</li>


				</ul>
			</div>
			<!-- Tab panes -->
			<div class="tab-content">


<div role="tabpanel" class="tab-pane fade in active" id="tab-panel24" aria-labelledby="tab24">
	<h4 class="text-center">Belgium Office </h4>
	<div class="row mb-big">   
		<div class="col-md-5 col-md-offset-1 col-sm-6 mb-big-xs">
			<div class="textbox">  Working on a diverse range of projects has proven our ability to meet time frames, budgets and deliver high quality solutions that satisfy clients&#39; needs. Marketorix Media Solutions is a trusted vendor.</div>
		</div>
		<div class="col-md-5 col-sm-6 form-contact-block">
			<address>
				<span class="fa fa-building"></span>
				<span>Franslaan 150<br/>Nieuwpoort, 8620</span>
			</address>
			<div class="contact-block">
				<span class="fa fa-phone"></span>
				<a   class=""  href="tel:+1-512-782-9977">+1-512-782-9977</a>
			</div>
			<div class="contact-block">
				<span class="fa fa-envelope"></span>
				<a   class=""  href="mailto:sales@marketorix.com">sales@marketorix.com</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<link href="web/assets/js/intltelinput/css/intltelinput.min.css" type="text/css" rel="stylesheet" />
<script src="web/assets/js/intltelinput/intltelinput-jquery.min.js"></script>
<script src="web/modules/quickcontactform/js/main3860.js?v=1"></script>


<div id="quick-contact-app" class="form-wrap flex-form">
	<a data-skip-hash="true" class="anchor-link" name="quick_contact_app_form"></a>
	
	<form  method="POST" action="contact">
	@csrf
		<div style="display:none;" class="form_status alert mb"></div>
		<div class="row mb">
		<div class="col-sm-6 mb-big-xs col-xs-12">

		   <div class="form-group mb embed-label">
						
				<label for="email" >Email address</label>
                <input name="email" type="email" class="form-control" id="email" 
                    >
                <span class="text-danger">{{ $errors->first('email') }}</span>
			</div>

			<div class="form-group mb embed-label">
						
				<label for="name" >Name</label>
                <input name="name" type="text" class="form-control" id="name" 
                    >
                <span class="text-danger">{{ $errors->first('name') }}</span>
			</div>

			<div class="form-group mb embed-label">
						<input id="fld_phone" title="Phone Number" name="phone" class="form-control" type="text" />
						<label for="fld_phone">Phone</label>
					</div>
			</div>
            <div class="form-group col-sm-6 col-xs-12 stretch-block">
                
				<div class="form-group mb embed-label textarea-block">
						<textarea id="" name="comment" title="Message" class="form-control"></textarea>
						<label for="fld_comments">Message*</label>
					</div>
            </div>
</div>
			


		<div  style="text-align: center !important;">
			<button class="btn btn-default frm_submit_btn" type="submit"><span>Submit</span></button>
			<button style="display:none;" type="button" class="btn btn-default frm_loading_btn" onClick="javascript:void(0)"><span>Processing</span><span class="fa fa-spinner fa-spin"></span></button>
		</div>

	</form>
</div>

		</div>
	</div>
</div>
			</div>
		</div>
	</div>
</div>



</section>

@include('partials.footer')