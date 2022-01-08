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
            <h1>Pay Per Click</h1>
        </div>
    </section>
    <section class="specialty-wrapper">
        <section class="content-section">
            <div class="container">
                <h2 class="text-center">PPC Marketing Services.</h2>
                <div class="textbox text-center h4-style"><p> Direct traffic straight to your website with outstanding PPC marketing services.</p>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h3 class="text-center">PPC Services</h3>
                <div class="textbox text-center h4-style"></div>

                <div class="two-column-listing article-listing">
                    <div class="item">
                        <h4 class="bold">Google & Bing Ads</h4>
                        <div class="textbox"><p> Get an ad placement in a search engine’s sponsored links when a search comes up with your designated keyword. The integration will track reporting in real-time for campaigns, ad groups, ads, and keywords.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Unbeatable Management</h4>
                        <div class="textbox"><p>Running successful social media campaigns for your business is our priority, we’re all about providing quality over quantity. Improve your marketing strategies with real data that help your business prosper and put money right into your pocket.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Search Vs. Shopping</h4>
                        <div class="textbox">Check whether your search or shopping campaign is doing well and getting the best return on investment. Guessing games are no fun, so keep up with reports that give you the necessary insight.</div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Imperative KPIs</h4>
                        <div class="textbox"><p>Find top-notch performance indicators without the tedious reporting; we’ve integrated everything you need to see the activity level of your content. Evaluate your success with the various vital metrics and activities you engage in on a regular basis.</p>
                        </div>

                    </div>


                </div>
            </div>
        </section>


        <section class="cta-section bg-red-gradient overlay-color-pattern color-white">
            <div class="container">
                <div class="content-wrapper">
                    <h2 class="mb-half">Need PPC Help?</h2>
                    <div class="textbox h4-style"><p>Get in touch to schedule a call.</p>
                    </div>
                </div>
                <a   title="Get A Quote" class="btn btn-white"  href="{{url('/contact')}}">Get In Touch</a>
            </div>
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

                                    <form name="frmQuickContact" method="POST" action="ppc">
                                        @csrf
                                        <div style="display:none;" class="form_status alert mb"></div>

                                        <div class="row mb">
				<div class="col-sm-6 mb-big-xs col-xs-12">
					<div class="form-group mb embed-label">
					  <input id="fld_name" title="Email Address" name="name" class="form-control" type="text" />
				      <label for="fld_name">Name*</label>
					</div>
					<div class="form-group mb embed-label">
					  <input id="fld_email" title="Email Address" name="email" class="form-control" type="email" />
				      <label for="fld_email">Email*</label>
					</div>
					<div class="form-group mb embed-label">
					  <input id="fld_phone" title="Phone Number" name="phone" class="form-control" type="text" />
				      <label for="fld_phone">Phone</label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 stretch-block">
					<div class="form-group mb embed-label textarea-block">
					  <label for="exampleInputPassword1">Comment</label>
                      <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
				</div>
			</div>


                                        <div class="text-right">
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
        </section>

    </section>
    @include('partials.footer')