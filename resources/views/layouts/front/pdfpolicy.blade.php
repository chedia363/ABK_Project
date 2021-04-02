
	<section id="services" class="services section-padding" style="background:#e6e6e6;">
      <div class="container" data-aos="fade-up">
	  	<div class="row">
			<div class="col-md-12">
				<div class="section-title pdfsectiontitle">
					<h2>@lang('front.Policies and procedural guides')</h2>
				</div>
			</div>
		</div>
        <div class="row">
			@foreach ($policiesmnls as $policiesmnls)
				
			
			
				<div class="col-md-6 mt-4 mt-md-0" style="margin-bottom:20px;">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
					<img src="{{ asset('img/pdf-file.svg') }}" alt="">
					<span class="downloadpdffile"><a href="{{ asset("storage/$policiesmnls->cover") }}" target="_blank"><button type="button" class="btn btn-defaultmobile"><span class="lnr lnr-download"></span></button></a></span>
					<h4><a href="#">{{$policiesmnls->name}}</a></h4>
					</div>
				</div>
				
			@endforeach
        </div>
      </div>
    </section>
