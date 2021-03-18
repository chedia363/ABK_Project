    <section id="initiative" class="about-us-area section-padding" style="margin-top:5rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>@lang('front.Our activities')</h2>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">

                            @foreach ($activities as $activities)   
                                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <h4>{{ $activities->name }}</h4>
                                <p>{!! str_limit($activities->description, 400, '') !!} 
                                            
                                </div>
                            @endforeach

 

               
                        </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </div>
    </section>
