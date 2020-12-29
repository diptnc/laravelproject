<section class="section1" id="home">
    <div class="">

        <!-- parallax layers -->
        {{-- <div class="parallax" id="particles-js"> --}}
        <div  class="parallax" id="scene" data-hover-only="true" data-relative-input="true">
            {{-- <div data-depth="0.1"><img class="layerimg" src="{{ asset('assets/svg/el1.svg') }}" alt=""></div> --}}
            <div data-depth="0.1" class="layers l5 "></div> 
            <div data-depth="0.2" class="layers l1 "></div> 
            <div data-depth="0.4" class="layers l2 "></div> 
            <div data-depth="0.6" class="layers l3  "></div> 
            <div data-depth="0.8" class="layers l4 "></div> 
          
 
        </div>

    </div>
    <style>


    </style>
    <div class="container">
        <div class="blurr-bg2">
            <div class="blurr-bg">

                <div class="row text-center">
                    <div class="col" class="">
                        <div class="main_box ">
                            <picture>
                                <source
                                    srcset="{{ asset('assets/images/diptanuchakraborty.webp') }}"
                                    type="image/webp">
                                <source
                                    srcset="{{ asset('assets/images/diptanuchakraborty.png') }}"
                                    type="image/png">
                                <img id="Diptanu-image-profile" class="lazy "
                                    src="{{ asset('assets/images/diptanuchakraborty.png') }}"
                                    alt="Diptanu chakraborty profile image" />
                            </picture>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 id="title" class="text-center " >Diptanu Chakraborty</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-wrapper-container" align="center">
                        <div id="typed-strings">
                            <p id="text-wrapper-1">I am a <strong>Web Developer</strong> <span style="color:#1561f3;"><i
                                        class="fas fa-code"></i></span></p>
                            <p id="text-wrapper-2">I am a <strong>Video Editor </strong><span style="color:#1561f3;"><i
                                        class="far fa-file-video"></i></span></p>
                            <p id="text-wrapper-3">I am a <strong>Graphic Designer </strong><span
                                    style="color:#1561f3;"><i class="fas fa-crop"></i></span></p>
                            <p id="text-wrapper-4">I am a <strong>Music Producer </strong><span
                                    style="color:#1561f3;"><i class="fas fa-music"></i></span></p>
                            <p id="text-wrapper-5">More skills coming soon <span style="color:#1561f3;"><i
                                        class="far fa-smile-wink"></i></span> </p>

                        </div>
                        <span id="typed"></span>

                        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

                        <script>
                            var a = document.getElementById('text-wrapper-1').innerHTML;
                            var b = document.getElementById('text-wrapper-2').innerHTML;
                            var c = document.getElementById('text-wrapper-3').innerHTML;
                            var d = document.getElementById('text-wrapper-4').innerHTML;
                            var e = document.getElementById('text-wrapper-5').innerHTML;
                            var options = {
                                strings: [a, b, c, d, e],
                                typeSpeed: 70,
                                loop: 'infinite'
                            };

                            var typed = new Typed('#typed', options);

                        </script>
                    </div>
                </div>


                <div class="row">
                    <div class="col ">
                        <li class="social-icons">
                            <a data-toggle="tooltip" title="visit Facebook" class="social-icons-list" id="si1"
                                href="{{ $social_links_raw[0]->facebook }} " target="_blank"><i
                                    class="fab fa-facebook"></i></a>
                            <a data-toggle="tooltip" title="visit Instagram" class="social-icons-list" id="si2"
                                href="{{ $social_links_raw[0]->instagram }}" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a data-toggle="tooltip" title="visit Linkedin" class="social-icons-list" id="si3"
                                href="{{ $social_links_raw[0]->linkedin }}" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a data-toggle="tooltip" title="visit Soundcloud" class="social-icons-list" id="si4"
                                href="{{ $social_links_raw[0]->soundcloud }}" target="_blank"><i
                                    class="fab fa-soundcloud"></i></a>
                            <a data-toggle="tooltip" title="visit Youtube" class="social-icons-list" id="si5"
                                href="{{ $social_links_raw[0]->youtube }}" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                        </li>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col button-container "
                        align=center>
                        <button onClick="document.getElementById('contact').scrollIntoView();" data-toggle="tooltip"
                            title="You took the right decision !" class="button-style1 effect01"> Hire me </button>
                    </div>
                </div>

            
            <div id="scroll-container" class="row">
                <div class="col scroll-animation " data-josh-anim-name="fadeInUpBig" data-josh-anim-delay="1s">
                    {{-- <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div> --}}
                    <svg width="25px" height="100%" viewBox="0 0 247 390" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                        <path id="wheel" d="M123.359,79.775l0,72.843"
                            style="fill:none;stroke:#22292f;stroke-width:20px;" />
                        <path id="mouse"
                            d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                            style="fill:none;stroke:#22292f;stroke-width:20px;" />
                    </svg><br>

                </div>
            </div>
        </div>
    </div>
</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
{{-- 
<script src="{{ asset('/assets/vendor/particles/particles.js') }}"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.18.8/dist/tsparticles.min.js"></script> --}}
{{-- <script src="{{ asset('assets/vendor/particles/app-min.js') }}"></script> --}}
<script>


var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
</script>