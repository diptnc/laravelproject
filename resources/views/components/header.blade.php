<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('assets/css/header.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/footer.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    --}}
    <script src="https://kit.fontawesome.com/e12b6c8850.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>

</head>

</head>

<header id="header" class="fixed-top d-flex align-items-center">
    {{-- // <button type="button" class="mobile-nav-toggle d-lg-none"><i
            class="icofont-navigation-menu"></i></button> --}}
    <div class="container d-flex align-items-center">

        <div id="logo-placement" class="logo mr-auto">
            {{-- <h1 class="text-light"><a href="index.html"><span>Vesperr</span></a></h1>
            --}}
            <!-- Uncomment below if you prefer to use an image logo -->

            <a href="/"><img src="{{ asset('assets/svg/logo.svg') }}" alt="diptnc" class="img-fluid"></a>
        </div>



        <div class="menu-text-container inactive">
            <div class="menu-text-low-opacity noselect ">MENU</div>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul id="navigation-ul">
                <li class="active"><a class="menu-item-mobile" href="/#home">Home</a></li>
                <li><a class="menu-item-mobile" href="/#about">About</a></li>
                <li class="menu-menu-bar"><a class="menu-item-mobile" href="/#services">Services</a></li>
                <li class="menu-menu-bar"><a class="menu-item-mobile" href="/#portfolio">Portfolio</a></li>
                <li class="menu-menu-bar"><a class="menu-item-mobile" href="/#testimonials">Testimonials</a></li>
                <li class="menu-menu-bar"><a class="menu-item-mobile" href="/#contact">Contact</a></li>
                <li class="drop-down"><a class="menu-item-mobile" href="javascript:">Pages</a>
                    <ul>
                        <li><a class="sub-menu-item-mobile" href="javascript:">Faq</a></li>
                </li>
                <li><a class="sub-menu-item-mobile" href="javascript:">Blogs</a></li>
                <li><a class="sub-menu-item-mobile" href="https://crm.diptanuchakraborty.in">CRM</a></li>
                <li><a class="sub-menu-item-mobile" href="/termsandconditions">Terms & Condition</a></li>
                <li><a class="sub-menu-item-mobile" href="/privacyPolicy">Privacy Policy</a></li>

            </ul>
            </li>


            {{-- <li class="get-started"><a href="#about">Get Started</a></li>
            --}}
            </ul>
        </nav><!-- .nav-menu -->
        <div class="social-links inactive ">
            <ul class="container-two">
                <li class="followus">Follow us on</li>
                <li class="social-item-icons container ">
                    <a class="social-icons-nav" id="si1" href="{{ $social_links_raw[0]->facebook }}" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a class="social-icons-nav" id="si2" href="{{ $social_links_raw[0]->instagram }}" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a class="social-icons-nav" id="si3" href="{{ $social_links_raw[0]->linkedin }}" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <a class="social-icons-nav" id="si4" href="{{ $social_links_raw[0]->soundcloud }}"
                        target="_blank"><i class="fab fa-soundcloud"></i></a>
                    <a class="social-icons-nav" id="si5" href="{{ $social_links_raw[0]->youtube }}" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>

    </div>
</header><!-- End Header -->
