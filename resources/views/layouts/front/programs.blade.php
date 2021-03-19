
    <section id="fields" class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>@lang('front.Our programs')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="team" class="team">
                        <div class="container" data-aos="fade-up">
                            <div class="row">
                            
                                @foreach ($programs as $programs)
                                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                        <div class="member" data-aos="fade-up" data-aos-delay="100"  style="box-shadow: 3px 3px 1px 0px #0c233f;">
                                            <div class="member-img">
                                                @if(isset($programs->cover))
                                                <img src="{{ asset("storage/$programs->cover") }}" class="img-fluid" alt="" style="box-shadow: 3px 3px 1px 0px #0c233f;" >
                                                @endif 
                                               
                                            </div>
                                            <div class="member-info">
                                                <h4>{{$programs->name}}</h4>
                                                <span>{!! $programs->description !!}</span>
                                            </div>
                                    
                                        </div>
                                    </div>
                                @endforeach    

                        
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </section>