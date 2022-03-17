@include('partials.head')


<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
        <div class="container">
            <h1>E-Commerce</h1>
        </div>
    </section>
    <section class="specialty-wrapper">
        <section class="content-section">
            <div class="container">
                <h2 class="text-center">E-Commerce on Wordpress/WooCommerce</h2>
                <div class="textbox text-center h4-style"><p> Fast And Cheap Way To Launch An E-Commerce Store.</p>
                </div>
            </div>
        </section>

        @include('partials.completed-projects-wd')

        <section class="content-section">
            <div class="container">
                <h3 class="text-center">What we can create with WooCommerce</h3>
                <div class="textbox text-center h4-style"></div>

                <div class="two-column-listing article-listing">
                    <div class="item">
                        <h4 class="bold">Dropshipping Store</h4>
                        <div class="textbox"><p> Dropshipping is a rising online industry. The idea behind this is simple – the eCommerce store does not hold the goods in stock. What it does instead is it fills the order by buying from dealers. And, then it ships them to buyers. This is an excellent way if you want to make money quickly.

It is also an excellent start for online selling. You can quickly learn how to run an eCommerce store. But, this time, you minimize the risks.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Digital Stores</h4>
                        <div class="textbox"><p> WooCommerce is a fantastic tool for creating websites. There, you can place products that can be both downloaded and shipped. This type of model may be applied if you sell online courses or tutorials. In exchange for knowledge, you get revenue. You can’t run out of supplies, and you continuously get profit. This is why more and more people buy online courses, books, pdfs, and even images and videos.</p>
                        </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Affiliate  Stores</h4>
                        <div class="textbox">Have other business owners pay you commissions every time someone buys their product while they handle product fulfillment to you directly. Thus, you are making more profit and revenue. What’s unique about Affiliate products is that you have to link the original creators when building the website. Paste the URL from that business onto the merch you’re selling. Then all of their purchases are transported to your site. The buyers return to your site to buy and order the product. </div>

                    </div>

                    <div class="item">
                        <h4 class="bold">Subscription Store</h4>
                        <div class="textbox"><p> One common type of subscription is a service subscription. And they work best for online services and goods. When user signs up to a website, you can offer a starting subscription pack. Then they select the payment method, and good to go. Some services allow being renewed automatically. When the subscription period is over, you can choose whether you want the service to be automatically renewed or not.</p>
                        </div>

                    </div>


                </div>
            </div>
        </section>



        <section class="cta-section bg-red-gradient overlay-color-pattern color-white">
            <div class="container">
                <div class="content-wrapper">
                    <h2 class="mb-half">Need Help Building E-Commerce Site?</h2>
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
