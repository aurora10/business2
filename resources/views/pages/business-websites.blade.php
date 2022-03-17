@include('partials.head')


<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
        <div class="container">
            <h1>Business Website</h1>
        </div>
    </section>
    <section class="specialty-wrapper">
        <section class="content-section">
            <div class="container">
                <h2 class="text-center">Building Business Sites</h2>
                <div class="textbox text-center h4-style"><p> We build customized websites that showcase your work and help your visitors to make a buying decision.
</p>
                </div>
            </div>
        </section>

        @include('partials.completed-projects-wd')

        <section class="content-section">
            <div class="container">
                <h3 class="text-center">Sites We Can Build For Your Business</h3>
                <div class="textbox text-center h4-style"></div>

                <div class="two-column-listing article-listing">
                    <div class="item">
                        <h4 class="bold">eCommerce site/online store</h4>
                        <div class="textbox"><p> An online store is an appropriate website for your business if you sell products (or plan to) and want your customers to be able to shop for them 24/7. An online store, like an online boutique or other retail store, provides a way for you to connect with customers and list inventory for purchase.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Portfolio</h4>
                        <div class="textbox"><p> If you sell services — especially creative services — you can use a portfolio to show off your work and share information on how interested parties can get in touch with you. In fact, it should be one of your first action items when setting up your business..</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Booking website</h4>
                        <div class="textbox"><p>An online booking website enables you to easily take customer appointments through digital channels. Offering a booking website or a “book now” button on your online store page can supplement or replace your process for taking appointments in-person or via phone. You can use a booking website to accept or decline appointments and block out personal time so your availability is always up to date.</p></div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Blog website</h4>
                        <div class="textbox"><p>A blog provides you with an online platform to share written content (and sometimes images and/or videos). If you’re interested in putting your ideas out there, or you want to engage in content marketing to help drive interest in something you have to sell, a blog can be an ideal route to take.</p>
                        </div>

                    </div>


                </div>
            </div>
        </section>



        <section class="cta-section bg-red-gradient overlay-color-pattern color-white">
            <div class="container">
                <div class="content-wrapper">
                    <h2 class="mb-half">Need A Business Website?</h2>
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
