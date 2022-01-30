
@include('partials.head')


<section class="internal-header bg-red-gradient  color-white">
	<div class="container">
		<h1>Contact</h1>
	</div>
</section>
<section class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-big-sm">
	<h2>Our Office</h2>
	<div class="textbox big">Working on a diverse range of projects has proven our ability to meet time frames, budgets and deliver high quality solutions that satisfy clients&#39; needs. Marketorix Media Solutions has become a trusted vendor for many partners.</div>
	<div class="form-contact-block big">
		<address>
			<span class="fa fa-building"></span>
			<span>Franslaan 150<br/>
Nieuwpoort, 8620, BE</span>
		</address>
		<div class="contact-block">
			<span class="fa fa-phone"></span>
			<a   class=""  href="tel:+1-512-782-9977">+32-465-811 031</a>
		</div>
		<div class="contact-block">
			<span class="fa fa-envelope"></span>
			<a   class=""  href="mailto:sales@marketorix.com">sales@marketorix.com</a>
		</div>
	</div>
</div>

<div class="col-lg-5 col-sm-6 col-lg-offset-1 content-block">
	<h2>Contact Us</h2>
	<link href="web/assets/js/intltelinput/css/intltelinput.min.css" type="text/css" rel="stylesheet" />
<script src="web/assets/js/intltelinput/intltelinput-jquery.min.js"></script>

<script src="web/modules/quickcontactform/js/main3860.js?v=1"></script>



<div id="quick-contact-app" class="form-wrap flex-form">
<!-- <div class="container"> -->
        
        <form name="frmQuickContact" method="POST" action="/contact">
            @csrf
            <div style="display:none;" class="form_status alert mb"></div>
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

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="exampleInputPassword1">Comment</label>
                <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <!-- <span class="text-danger">{{ $errors->first('comment') }}</span> -->
            </div>

            <div class="text-right">
			<button class="btn btn-default frm_submit_btn" type="submit"><span>Submit</span></button>
			<button style="display:none;" type="button" class="btn btn-default frm_loading_btn" onClick="javascript:void(0)"><span>Processing</span><span class="fa fa-spinner fa-spin"></span></button>
		</div>
           
        </form>
    </div>

  
        </div> 

	</form> 
    
</div>


</div>

</div>

				
		</div>
	</div>
</section>



@include('partials.footer')