<a title="Scroll Up" aria-label="Scroll Up" class="affix-top" href="#top" id="scrollup" data-spy="affix" data-offset-top="101"><span class="fa fa-long-arrow-up"></span></a>


<!-- PAGE_BODY -->
<section id="page-wrap">


	<header id="header">

	<nav class="navbar">

		<!-- navbar_header -->
		<div id="navbar-header-wrap">

			<div class="container">

				<div class="navbar-header">

					<a href="{{URL::to('/')}}" title="Home"  class="navbar-brand "><img  src="{{asset('files/user/SVG.svg')}}" alt="Home" /></a>
					<button id="mobile_nav_btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target-custom="#navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="fa fa-bars fa-lg"></span>
					</button>

			</div>
		</div>
		<!-- navbar_header -->

		<!-- main_nav -->
		<div class="collapse navbar-collapse" id="navigation">
			<div id="top-nav" class="top-section">
				<div class="container">
					<div class="menu-search-form">
	<form class="navbar-form" id="top-search" name="frmSearch" method="GET" action="https://www.Marketorixtech.com/search-results">
		<input name="sstr" type="text" placeholder="Search" title="Search" />
		<button class="btn-toggle" type="button"><span class="fa fa-search"></span></button>
		<button class="btn-close" type="button"><span class="fa fa-close"></span></button>
	</form>
</div>


<script>
	var $topmenuSearchApp = $(".menu-search-form");
	var $searchControl = $("#top-search");
	var $searchControlInput = $searchControl.find('input[name="sstr"]');

	$searchControl.submit(function(e){
		if ($searchControl.find('input[name="sstr"]').val()=="") {
			e.preventDefault();
		}
	});

	$searchControlInput.focusout(function(){
		if ($(window).width()>991)	 {
			$searchControl.removeClass("expanded");
		}
	});

	$topmenuSearchApp.find("#search-toggle-link, .btn-toggle").click(function(){
		if ($(window).width()>991)	 {
			$searchControl.addClass("expanded");
			$searchControlInput.focus();
		} else {
			$searchControl.first().submit();
		}
	});

	$searchControl.find(".btn-close").click(function(){
		$searchControl.removeClass("expanded");
	});
</script>
					<div class="phone-block"><a   class=""  href="tel:+32-465-811-031"><span class="fa fa-phone"></span>+32-465-811-031</a></div>
					<div class="social-block">
						<a   title="LinkedIn" class=""  target="_blank"  href="https://www.linkedin.com/company/75005028"><span class="fa fa-linkedin-square"></span></a>
						<a   title="Facebook" class=""  target="_blank"  href="https://www.facebook.com/Marketorix-107716277756745/"><span class="fa fa-facebook-square"></span></a>
						<a   title="YouTube" class=""  target="_blank"  href="https://www.youtube.com/channel/UCYQq1Zx8M8KhDDtlOiZzBHw"><span class="fa fa-youtube"></span></a>
					</div>
				</div>
			</div>
			<div id="main-nav">
				<div class="container">

	<ul class="nav navbar-nav">

				<li class="dropdown dropdown_split ">
					<a  class="placeholder-item" href="javascript:void(0)">Software Services</a>
					<a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-expanded="false"><span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu" role="menu">

				<li class="dropdown dropdown_split ">
					<a  class="placeholder-item" href="javascript:void(0)">Tech Stack</a>
					<a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-expanded="false"><span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu" role="menu">

				<li class=""><a  class="" href="{{url('/frontend-development')}}">Frontend</a></li>

				<li class=""><a  class="" href="{{url('/backend-development')}}">Backend</a></li>

				<li class=""><a  class="" href="{{url('/mobile')}}">Mobile</a></li>

					</ul>
				</li>

				<li class="dropdown dropdown_split ">
					<a  class="placeholder-item" href="javascript:void(0)">Expertise</a>
					<a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-expanded="false"><span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu" role="menu">

				<li class=""><a  class="" href="computer-vision.html">Computer vision</a></li>

				<li class=""><a  class="" href="chat-apps.html">Chat apps</a></li>

				<li class=""><a  class="" href="health-and-fitness-apps.html">Fitness apps</a></li>

				<li class=""><a  class="" href="enterprise-portals.html">Enterprise portals</a></li>

					</ul>
				</li>

				<li class="dropdown dropdown_split ">
					<a  class="placeholder-item" href="javascript:void(0)">Focus</a>
					<a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-expanded="false"><span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu" role="menu">

				<li class=""><a  class="" href="ai-and-machine-learning.html">AI & Machine learning</a></li>

				<li class=""><a  class="" href="architecture-and-cloud-engineering.html">Cloud engineering</a></li>

				<li class=""><a  class="" href="mvp-and-startups.html">MVP & Startups</a></li>

				<li class=""><a  class="" href="business-automation.html">Business automation</a></li>

					</ul>
				</li>

					</ul>
				</li>

				<li class="dropdown dropdown_split ">
					<a  class="placeholder-item" href="javascript:void(0)">Marketing</a>
					<a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-expanded="false"><span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu" role="menu">

                        <li  >
                            <a  class="placeholder-item"  href="{{url('/seo')}}">SEO</a>

                        </li>
                        <li  >
                            <a  class="placeholder-item"  href="{{url('/ppc')}}">PPC</a>

                        </li>

                        <li  >
                            <a  class="placeholder-item"  href="{{url('/facebook-google-ads')}}">Facebook / Google Ads</a>

                        </li>

                        <li  >
                            <a  class="placeholder-item"  href="{{url('/social-media-marketing')}}">Social Media Marketing</a>

                        </li>

                        <li  >
                            <a  class="placeholder-item"  href="{{url('/content-marketing')}}">Content Marketing</a>

                        </li>

                        <li  >
                            <a  class="placeholder-item"  href="{{url('/website-design')}}">Website Design</a>

                        </li>


					</ul>
				</li>

				<!-- <li class=""><a  class="" href="portfolio.html">Marketing</a></li> -->

				<li class=""><a  class="" href="{{url('/portfolio')}}">Potrtfolio</a></li>

				<li class=""><a  class="" href="{{url('/about-us')}}">Company</a></li>

		<li class="menu-btn-item"><a   class=""  href="{{url('/contact')}}">Contact</a></li>
	</ul>

				</div>
			</div>
		</div>
		<!-- main_nav -->

	</nav>
</header>
