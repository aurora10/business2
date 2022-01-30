@include('partials.head')


<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
        <div class="container">
            <h1>Social Media Marketing</h1>
        </div>
    </section>
    <section class="specialty-wrapper">
        <section class="content-section">
            <div class="container">
                <h2 class="text-center">Social Media Marketing Services.</h2>
                <div class="textbox text-center h4-style"><p> Dominate social platforms with expert social media marketing services.</p>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h3 class="text-center">Social Media Marketing</h3>
                <div class="textbox text-center h4-style"></div>

                <div class="two-column-listing article-listing">
                    <div class="item">
                        <h4 class="bold">Schedule Without a Hitch</h4>
                        <div class="textbox"><p>   Our new all-in-one marketing dashboard just made your marketing better and easier! With our dash, customizing, and editing your business profile is just like a cake walk! Every change and addition you make are saved, saving you time, effort, and money.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Unique Posts for Your Business</h4>
                        <div class="textbox"><p> Having curated specific posts for your industry help promote your business overall. Captions with hashtags, popular keywords, and trends that are more searched will show up on the timeline of your target demographic.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Get Noticed on Several Platforms</h4>
                        <div class="textbox"> Facebook, Twitter, Pinterest, and LinkedIn give your business incredible exposure and creates your brand’s identity at the global level. The possibilities for images, captions, and any hashtags are virtually boundless!</div>

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
                    <h2 class="mb-half">Need Help With Social Media Marketing?</h2>
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