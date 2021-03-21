    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients" style="padding:2rem;">
      <div class="container-fluid" data-aos="zoom-in">
      <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>@lang('front.Our partners')</h2>
                    </div>
                </div>
            </div>
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="owl-carousel clients-carousel">
           
            @foreach($partners as $partners)
               
                @if(isset($partners->cover))
                    <img src="{{ asset("storage/$partners->cover") }}" alt="">
                @endif
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->