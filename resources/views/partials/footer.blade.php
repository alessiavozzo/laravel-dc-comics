<!-- footer -->
<footer>
    <div class="footer-top py-4">
        <div class="container d-flex">

            <!-- left: links -->
            <div class="footer-left w-50">
                <div class="footer-links d-flex gap-3">

                    <!-- foreach per i vari array dentro footer_links, da cui posso recuperare title e links -->
                    @foreach ($footer_links as $list)
                        <div class="list">
                            <h5 class="text-white text-uppercase">{{ $list['title'] }}</h5>
                            <ul class="list-unstyled">
                                <!-- foreach dentro links per stampare il singolo link -->
                                @foreach ($list['links'] as $link)
                                    <li class="footer-link">{{ $link }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach

                </div>
                <p class="footer-link">All Site Content TM and 2020 DC Entertainment, unless otherwise
                    <span><a href="#" class="text-decoration-none">noted here</a></span>.
                    All rights reserved.
                    <span><a href="#" class="text-decoration-none">Cookies Settings</a></span>
                </p>

            </div>

            <!-- right: logo -->
            <div class="footer-right w-50">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- footer bottom -->
    <div class="footer-bottom py-4">
        <div class="container d-flex justify-content-between">
            <!-- left button -->
            <a href="#" class="btn btn-outline-primary rounded-0 text-white text-uppercase">sign-up now!</a>
            <!-- right: social icons -->
            <div class="socials d-flex gap-3 align-items-center">
                <div class="text text-uppercase text-primary fw-bold">follow us</div>
                <!-- foreach to loop into icons -->
                @foreach ($icons as $icon)
                    <div class="icon">
                        <img src="{{ Vite::asset('resources/img/' . $icon) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</footer>
