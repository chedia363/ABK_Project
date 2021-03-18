
    <section id="initiative" class="about-us-area section-padding" style="background:#fff !important;">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>@lang('front.General Assembly')</h2>
                    </div>
                </div>
            </div>
            @foreach ($teams as $teams)
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="doctor1">
                        <h3>{{$teams->name}}</h3>
                        <p>{{$teams->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </section>