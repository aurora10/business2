@csrf
		<div style="display:none;" class="form_status alert mb"></div>

		<input type="hidden" name="some_data" value='frontend-development'>

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
		

			<div class="g-recaptcha" data-sitekey="{{config('services.recapcha.key')}}"></div>
			@if(Session::has('g-recaptcha-response'))
			<p class="alert {{Session::get('alet-class', 'alert-info')}}">
					{{Session::get('g-recaptcha-response')}}
			</p>
			
			@endif
		</div>