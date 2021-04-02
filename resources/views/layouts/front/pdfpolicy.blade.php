	    <section id="faq" class="faq section-padding" style="background:#e6e6e6;">
	      <div class="container" data-aos="fade-up">
	          <hr> <br>
	      	<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>@lang('front.Policies and procedural guides')</h2>
					</div>
				</div>
			</div>
	
	        <ul class="faq-list" data-aos="fade-up">
			
			   @foreach ($policiesmnls as $policiesmnls)
					<li>
					
					
						<a data-toggle="collapse" class="collapsed" href="#faq1">{{$policiesmnls->name}}<span class="icon-show lnr lnr-chevron-left"></span><span class="icon-close lnr lnr-chevron-down"></span></a>
						<div id="faq1" class="collapse" data-parent=".faq-list">
							<div class='embed-responsive webview' style='padding-bottom:150%'>
								<object data="{{asset("storage/$policiesmnls->file_name")}}" type="application/pdf" height="300px" width="100%" class="responsive"></object>
							</div>
						
							<div class='embed-responsive mobileview' style='height:auto; padding: 0px 25px;'>
								<h3 style="font-size:20px;">{{$policiesmnls->name}}</h3>
								<span ><a href="{{asset("storage/$policiesmnls->cover")}}" target="_blank"><button type="button" class="btn btn-defaultmobile"><span class="lnr lnr-download"></span></button></a></span>
							</div>
						</div>
					</li>
				@endforeach	
	          
	        </ul>
	      </div>
	    </section>
