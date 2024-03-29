@include('partials.head')


<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
        <div class="container">
            <h1>Content Marketing</h1>
        </div>
    </section>
    <section class="specialty-wrapper">
        <section class="content-section">
            <div class="container">
                <h2 class="text-center">Content Marketing Services.</h2>
                <div class="textbox text-center h4-style"><p> Content marketing services are one of the most beneficial components for businesses.</p>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h3 class="text-center">Content Marketing Services</h3>
                <div class="textbox text-center h4-style"></div>

                <div class="two-column-listing article-listing">
                    <div class="item">
                        <h4 class="bold">Activity Feed</h4>
                        <div class="textbox"><p>   Providing the latest activity metrics on a phone call can be difficult. The activity feed within your dashboard opens all lines of communication. No more back and forth phone tag, your feed will showcase how much effort is going into your site.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Real-Time Report</h4>
                        <div class="textbox"><p> If you want to chase down the activity of your articles, we offer a real-time report of key performance metrics to blur the line of miscommunication. Everything you'll want to know about who, when, and what is going on with your content is found in one place!</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Constant Updates</h4>
                        <div class="textbox">  An email notification with all the essential information and a necessary guideline about how to check the performance of your new article goes out when the piece is done. Inside, a link will guide you to your newest article, and from there, you can let us know how we're doing!</div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Custom-Design and Planned Posting</h4>
                        <div class="textbox"><p>With a custom posting feature, posts can be scheduled days, weeks, even months in advance to stay present in your audience’s mind. Custom posts, images, and graphics will be created to increase engagement and lead generation.</p>
                        </div>

                    </div>


                </div>
            </div>
        </section>


        <section class="cta-section bg-red-gradient overlay-color-pattern color-white">
            <div class="container">
                <div class="content-wrapper">
                    <h2 class="mb-half">Need Help With Content Marketing?</h2>
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

                                <div id="quick-contact-app" class="form-wrap flex-form">
                                    <a data-skip-hash="true" class="anchor-link" name="quick_contact_app_form"></a>

                                    <form name="frmQuickContact" method="POST" action="contact">
                                        @csrf
                                        <div style="display:none;" class="form_status alert mb"></div>

                                           
                                        <input type="hidden" name="phone_extension" value=""/>
                                        <input type="hidden" name="phone_valid" value=""/>


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