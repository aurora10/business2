@include('partials.head')


<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
        <div class="container">
            <h1>Landing Pages</h1>
        </div>
    </section>
    <section class="specialty-wrapper">
        <section class="content-section">
            <div class="container">
                <h2 class="text-center">Landing Pages For Your Business</h2>
                <div class="textbox text-center h4-style"><p> Our marketing and graphic design experts on our team will created high-preformance langind page for your business.</p>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h3 class="text-center">Landing Page Creation</h3>
                <div class="textbox text-center h4-style"></div>

                <div class="two-column-listing article-listing">
                    <div class="item">
                        <h4 class="bold">Lead Generation Landing Page</h4>
                        <div class="textbox"><p>We will build a lead-capture landing page that is intended to collect leads by means of a data capture form. Whenever you need “middle of the sales” funnel, where customers are evaluating your offerings and are on the cusp of moving towards the intent to either convert or walk away, you need a high-converting design and seamless UI.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Squeeze Page</h4>
                        <div class="textbox"><p> Like a lead-generation page, a squeeze page is used to collect data. Unlike a lead-generation page, however, it is generally employed near the top of the sales funnel and its only goal is to gather email addresses to add potential leads to a general mailing list. It have bold headlines and minimal content with clear call to action.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Sales Page</h4>
                        <div class="textbox"><p>This page you would use right at the bottom of the funnel, and it has to convince people to buy. The creation of the page, from the copy to the design, requires a touch of delicacy and a complete understanding of your customers’ needs and their position in the funnel. This is where good old-fashioned salesmanship must be incorporated into your design and communication tactics.

</p></div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Microsites</h4>
                        <div class="textbox"><p>A microsite is, as the name suggests, a dedicated, miniature website. It is created for a specific campaign or with one targeted sales goal in mind. It is more than a single page, but it is still described as a kind of landing page since it is set aside for one specific aspect of sales and promotional efforts. Microsites are driven by online ads or work alongside TV ad campaigns.</p>
                        </div>

                    </div>


                </div>
            </div>
        </section>



        <section class="cta-section bg-red-gradient overlay-color-pattern color-white">
            <div class="container">
                <div class="content-wrapper">
                    <h2 class="mb-half">Need A Landing Page?</h2>
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

                                <form name="frmQuickContact" method="POST" action="contact">
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
