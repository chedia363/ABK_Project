
    <section id="faq" class="faq section-padding" style="margin-top:5rem; background:#e6e6e6;">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>@lang('front.We shared the pay')</h2>
                    </div>
                </div>
            </div>
            
                <div class="row paddingrow">
                   @foreach ($investus as $investus)    
                        <div class="col-md-8 mx-auto">
                            <div class="invest2">
                                <span class="investnumero">{{$investus->file_name}}</span>
                                @if(isset($investus->cover))
                                 <img src="{{ asset("storage/$investus->cover") }}" alt="" style="border: 3px solid #144098; padding: 4px;">
                                @endif
                                
                            </div>
                        </div>
                    @endforeach
                </div>
            
        
        </div>
    </section>