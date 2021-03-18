
    <section id="fields" class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>@lang('front.Our fields')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="counts" class="counts">
                        <div class="container" data-aos="fade-up">
                            <div class="row">

                            
                            @foreach ($fields as $fields)   
                                <div class="col mx-auto">
                                     
                                    <div class="plr-box alim wow noanim" data-wow-duration="1s">
                                        @if(isset($fields->cover))
                                         <img src="{{ asset("storage/$fields->cover") }}" alt="" >
                                        @endif 
                                        <div class="pilr-info"><h4 itemprop="headline">{{ $fields->name }}</h4></div>
                                    </div>
                                </div>
                            @endforeach    
                            </div>
                            <div class="row" style="padding-top:3rem;">

                                @foreach ($fieldsScnd as $fieldsScnd)
                                    <div class="col mx-auto">
                                         <div class="plr-box alim wow noanim" data-wow-duration="1s">
                                            @if(isset($fieldsScnd->cover))
                                             <img src="{{ asset("storage/$fieldsScnd->cover") }}" alt="" >
                                            @endif 
                                            <div class="pilr-info"><h4 itemprop="headline">{{ $fieldsScnd->name }}</h4></div>
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