<section class="section2" id="services">
    <div class="scroll-left">
        <p class="bg-text2">SERVICES</p>
     </div>
    <div class="container">

        <div class="row">
            <div class="col " data-josh-anim-name="fadeInUp" data-josh-anim-delay="0.3s">
                <h1 id="section-title" class="text-center">SERVICES</h1>

            </div>
        </div>
@php
$wordpress_link="javascript:";
$web_link="javascript:";
$custom_link="javascript:";
$web_server_link="javascript:";
$graphics_link="javascript:";
$branding_link="javascript:";
$ecommerce_link="javascript:";
$video_link="javascript:";
$musiclink="javascript:";
@endphp
        <div class="container">
            <div id="test"
                class="row d-flex row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 justify-content-center">

                <div class="col d-flex  card1-container  card-basic " style="margin: 20px;"data-josh-anim-name="fadeInUp" data-josh-anim-delay="0.3s">
                    <!--  card  -->
                    <div class="card1 " >

                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/wordpress.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">WordPress</h1>
                            <h1 class="wrd2">Development</h1>
                            <a class="wrd3" href="{{$wordpress_link}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="#00769d" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)" fill="#00769d"
                                            font-size="17" font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: #00769d;">1</div>
                    </div>
                </div><!--  card  -->




                <div class="col card2-container card-basic " style="margin: 20px;" data-josh-anim-name="fadeInUp" data-josh-anim-delay="0.6s">
                    <!--  card  -->
                    <div class="card1">
                        <?php $card2_color="#4a65ff";?>
                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/web-development.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">Web</h1>
                            <h1 class="wrd2">Development</h1>
                            <a class="wrd3" style="color: {{ $card2_color }};" href="{{$web_link}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="{{ $card2_color }}" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)" fill=" #4a65ff"
                                            font-size="17" font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: {{ $card2_color }};">2</div>
                    </div>
                </div><!--  card  -->






                <div class="col card3-container card-basic " style="margin: 20px;" data-josh-anim-name="fadeInUp" data-josh-anim-delay="0.9s">
                    <!--  card  -->
                    <div class="card1 d-flex ">
                        <?php $card3_color="#d05aff";?>
                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/custom-code.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">custom</h1>
                            <h1 class="wrd2">Coding</h1>
                            <a class="wrd3" style="color: {{ $card3_color }};" href="{{$custom_link}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="{{ $card3_color }}" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)"
                                            fill=" {{ $card3_color }}" font-size="17"
                                            font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: {{ $card3_color }};">3</div>
                    </div>
                </div><!--  card  -->





                <div class="col card4-container card-basic " style="margin: 20px;" data-josh-anim-name="fadeInUp" data-josh-anim-delay="1.2s">
                    <!--  card  -->
                    <div class="card1  d-flex   ">
                        <?php $card3_color="#53dca4";?>
                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/web-server.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">web server</h1>
                            <h1 class="wrd2">Setup (LAMP)</h1>
                            <a class="wrd3" style="color: {{ $card3_color }};" href="{{$web_server_link}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="{{ $card3_color }}" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)"
                                            fill=" {{ $card3_color }}" font-size="17"
                                            font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: {{ $card3_color }};">4</div>
                    </div>
                </div><!--  card  -->







                <div class="col card5-container card-basic " style="margin: 20px;" data-josh-anim-name="fadeInUp" data-josh-anim-delay="1.5s">
                    <!--  card  -->
                    <div class="card1">
                        <?php $card3_color="#2b8aff";?>
                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/graphics.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">Graphics</h1>
                            <h1 class="wrd2">Design</h1>
                            <a class="wrd3" style="color: {{ $card3_color }};" href="{{$graphics_link}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="{{ $card3_color }}" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)"
                                            fill=" {{ $card3_color }}" font-size="17"
                                            font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: {{ $card3_color }};">5</div>
                    </div>
                </div><!--  card  -->







                <div class="col card6-container card-basic " style="margin: 20px;" data-josh-anim-name="fadeInUp" data-josh-anim-delay="1.8s">
                    <!--  card  -->
                    <div class="card1">
                        <?php $card3_color="#fe7689";?>
                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/branding.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">Branding</h1>
                            <h1 class="wrd2">Solutions</h1>
                            <a class="wrd3" style="color: {{ $card3_color }};" href="{{$branding_link}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="{{ $card3_color }}" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)"
                                            fill=" {{ $card3_color }}" font-size="17"
                                            font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: {{ $card3_color }};">6</div>
                    </div>
                </div><!--  card  -->






                <div class="col card7-container card-basic " style="margin: 20px;" data-josh-anim-name="fadeInUp" data-josh-anim-delay="2.1s">
                    <!--  card  -->
                    <div class="card1">
                        <?php $card3_color="#1aa0ff";?>
                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/eccom.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">Ecommerce</h1>
                            <h1 class="wrd2">Solutions</h1>
                            <a class="wrd3" style="color: {{ $card3_color }};" href="{{$ecommerce_link}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="{{ $card3_color }}" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)"
                                            fill=" {{ $card3_color }}" font-size="17"
                                            font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: {{ $card3_color }};">7</div>
                    </div>
                </div><!--  card  -->



                <div class="col card8-container card-basic " style="margin: 20px;" data-josh-anim-name="fadeInUp" data-josh-anim-delay="2.4s">
                    <!--  card  -->
                    <div class="card1">
                        <?php $card3_color="#fd6100";?>
                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/video.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">video</h1>
                            <h1 class="wrd2">Editing</h1>
                            <a class="wrd3" style="color: {{ $card3_color }};" href="{{$video_link}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="{{ $card3_color }}" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)"
                                            fill=" {{ $card3_color }}" font-size="17"
                                            font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: {{ $card3_color }};">8</div>
                    </div>
                </div><!--  card  -->





                <div class="col card9-container card-basic " style="margin: 20px;" data-josh-anim-name="fadeInUp" data-josh-anim-delay="2.7s">
                    <!--  card  -->
                    <div class="card1">
                        <?php $card3_color="#fd4885";?>
                        <div class="card-image-2"><img
                                src="{{ asset('assets/svg/cards/music.svg') }}" alt=""
                                srcset=""></div>
                        <div class="card-element">
                            <h1 class="wrd1">music</h1>
                            <h1 class="wrd2">Production</h1>
                            <a class="wrd3" style="color: {{ $card3_color }};" href="{{$musiclink}}">Know more
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="24"
                                        viewBox="0 0 45.907 24">
                                        <line id="Line_8" data-name="Line 8" x2="40.431" transform="translate(0 12.295)"
                                            fill="none" stroke="{{ $card3_color }}" stroke-width="1" />
                                        <text id="_" data-name="&gt;" transform="translate(35.907 18)"
                                            fill=" {{ $card3_color }}" font-size="17"
                                            font-family="">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="card-number" style="color: {{ $card3_color }};">9</div>
                    </div>
                </div><!--  card  -->


            </div>
        </div>




    </div>
</section>
