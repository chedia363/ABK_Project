    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                    <div class="col-md-5">
                    <img src="{{ asset('img/logowhite.svg') }}" alt="" style="width:100%;">
                    </div>
                    <div class="col-md-7">
                     
                        <div class="content-footerabk">
                            <h3>{{ $contactus->addres_Name }}</h3>
                            <h4>@lang('front.Bisha Governorate')</h4>
                        </div>
                        <div class="contactmedia">
                            <ul style="list-style:none; padding:0 15px;">
                                <li>
                                @lang('front.phone :')
                                {{ $contactus->phoneNmber }}
                                </li>
                                <li>
                                @lang('front.fax :')
                                {{ $contactus->faxNmber }}
                                </li>
                                <li>
                                @lang('front.mobile :')
                                {{ $contactus->mobileNmber }}
                                </li>
                            </ul>
                        </div>
                        <div class="content-footerabk-email" style="padding:0 15px;">
                            <h3>@lang('front.email')</h3>
                            <p>  {{ $contactus->email }}</p>
                        </div>
                        <div class="content-footerabk-right">
                        <p>@lang('front.All rights reserved for Abaq Youth Association  2021 c')</p> 
                        </div>
                    </div>
            </div>
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->