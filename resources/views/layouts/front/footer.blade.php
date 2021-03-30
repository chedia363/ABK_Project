    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                @if(!empty($contactus))
                        <div class="col-md-4">
                            <ul style="background: #fff; border-radius: 10px; padding: 0; margin: auto;">
                                <div class="contactcontentaq" style="border-radius: 10px; padding: .5rem; background: url(../img/map.png); background-repeat: no-repeat; background-position: center 0; width: 100%; background-size: cover;">
                                    <li class="contact-abaqsocial1">
                                        <p class="contabeqscial" style="color:#0c233f;">@lang('front.Connect with us')</p>
                                    </li>
                                    
                                    <li class="contact-abaqsocial">
                                        <i class="icon bx bxl-twitter"></i>
                                        <i class="icon bx bxl-instagram"></i>
                                        <p class="contabeqscial" style="color: #0c233f; font-weight: bold;">{{ $contactus->email }}</p>
                                    </li>
                                    <li class="contact-abaqsocial" style="margin: 0 2.4rem;">
                                        <i class="icon icofont-phone"></i>
                                        <p class="contabeqscial" style="color: #0c233f; font-weight: bold;">{{ $contactus->phoneNmber }}</p>
                                    </li>
                                    <li class="contact-abaqsocial" style="margin: 0 2.4rem;">
                                        <i class="icon icofont-envelope"></i>
                                        <p class="contabeqscial" style="color: #0c233f; font-weight: bold;">@abeq2020</p>
                                    </li>
                                </div>
                            </ul>
                        </div>
                @endif 
                  
                        <div class="col-md-4">
                            <img src="{{ asset('img/logowhite.svg') }}" alt="" style="width:100%;">
                            <div class="content-footerabk-right">
                            <p style="text-align:center;">@lang('front.All rights reserved for Abaq Youth Association  2021 c')</p> 
                            </div>
                        </div>
                @if(!empty($contactus))
                        <div class="col-md-4">
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
                        </div>
                @endif        
            </div>
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->