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
            <h1>Website Design</h1>
        </div>
    </section>
    <section class="specialty-wrapper">
        <section class="content-section">
            <div class="container">
                <h2 class="text-center">Website Design Services.</h2>
                <div class="textbox text-center h4-style"><p> Get a high-quality custom-designed modern website to suit your company’s needs.</p>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h3 class="text-center">Website Design Services</h3>
                <div class="textbox text-center h4-style"></div>

                <div class="two-column-listing article-listing">
                    <div class="item">
                        <h4 class="bold">Building from the Ground Up</h4>
                        <div class="textbox"><p>  Appealing and innovative website design helps you get an edge over your competitors and connect your target audiences across the world. Our web designers keep your brand in mind to ensure that everything is catered properly! Everything will be prepared according to your specifications to give you a different online presence and contribute to your business’ growth.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Fully Responsive Site</h4>
                        <div class="textbox"><p>  Where there’s a phone, there’s a way. Having a fully responsive website adds elegance to your business and creates compelling user experiences that drive traffic, generate leads and ultimately, increase sales. No need to worry about crazy coding for a separate mobile site, it’s already taken care of.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Drag, Drop, and Go!</h4>
                        <div class="textbox">  The days of insane coding are in the past with our easy-to-use editor. Our one-stop-shop dashboard holds all the design specifications for you, so you don’t need high-end web designers to come to your rescue.</div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Hosting & SSL Certificate</h4>
                        <div class="textbox"><p>  Secure your data and transaction with SSL Certificate. Buckle up for the fastest hosting on the planet utilizing servers brought to you by Amazon. Every single website is fully-equipped with hosting and an SSL Certificate that can help you keep your customer’s data secure.</p>
                        </div>

                    </div>


                </div>
            </div>
        </section>

@include('partials.completed-projects-wd')

        <section class="cta-section bg-red-gradient overlay-color-pattern color-white">
            <div class="container">
                <div class="content-wrapper">
                    <h2 class="mb-half">Need Help With Website Design?</h2>
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