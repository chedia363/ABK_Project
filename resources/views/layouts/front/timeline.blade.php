
    <section id="initiative" class="about-us-area section-padding" style="background:#fff !important;">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>@lang('front.Board of Directors')</h2>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="timeline1" style="box-shadow: 0px 6px 0px 0px #0190c1;">
                        <h3>{{$teamsfrst->description}}</h3>
                        <p>{{$teamsfrst->name}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="timelineimg">
                       <img src="{{ asset('img/timeline/img01.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top:1rem">
                <div class="col-md-4 mx-auto">
                    <div class="timeline1 imgtime2" style="box-shadow: 0px 6px 0px 0px #24d195;">
                        <h3>{{$teamssecnd->description}}</h3>
                        <p>{{$teamssecnd->name}}</p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto">
                    <div class="timeline1" style="box-shadow: 0px 6px 0px 0px #ff8517;">
                       <h3>{{$teamsthrd->description}}</h3>
                        <p>{{$teamsthrd->name}}</p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top:1rem">
                <div class="col-md-4 mx-auto">
                    <div class="timeline1 imgtime3" style="box-shadow: 0px 6px 0px 0px #00cbe1;">
                        <h3>{{$teamsfrth->description}}</h3>
                        <p>{{$teamsfrth->name}}</p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto">
                    <div class="timeline1" style="box-shadow: 0px 6px 0px 0px #f5b91c;">
                        <h3>{{$teamsfve->description}}</h3>
                        <p>{{$teamsfve->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>