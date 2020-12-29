{{-- **************************
           Slider
*************************** --}}
<link href="{{ asset('assets/vendor/skiper/glider.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/vendor/skiper/glider.min.js') }}"></script>
{{-- **************************
           Slider
*************************** --}}

<section class="section2" id="portfolio">
    <div class="scroll-left">
        <p class="bg-text2">PORTFOLIO</p>
     </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <h1 id="section-title" class="text-center " data-josh-anim-name="fadeInUp"
                    data-josh-anim-delay="0.3s">PORTFOLIO</h1>

            </div>
        </div>

        <div class="row">
            <div class="col sub-title">
                <h1 id="section-title-4" class="text-center a-title " data-josh-anim-name="fadeInUp"
                    data-josh-anim-delay="0.6s">
                    <i class="fas fa-star"></i> Featured Projects <i class="fas fa-star"></i>
                </h1>

            </div>
        </div>




    </div>


    <div class="container">
        <div class="row port-container">




            <?php
            foreach ($portfolio_raw as $pt){

            
                $featured_image_name_raw=$pt->image_name;
                $featured_image_name = pathinfo($featured_image_name_raw, PATHINFO_FILENAME); 
                $featured_image_type=$pt->image_type;
                $project_category=$pt->category;
                $style=$pt->style;
            
                $project_link="portfolio/$pt->id";
            
            // $featured_image_name_raw="thumbnaill-nomadic-1.jpg";
            // $featured_image_name = pathinfo($featured_image_name_raw, PATHINFO_FILENAME); 
            // $featured_image_type="jpg";
            // $project_category="Web Development";
            // $style="web-development-category";
            
            ?>






            <div class="col-xl-4 col-md-6 port-item filtr-item  " data-josh-anim-name="fadeInUp"
                data-josh-anim-delay="0.3s" data-category="1" data-sort="value">
                <a class="card-links" href="{{ $project_link }}">
                    <div class="image">

                        <div class="card-overlay">
                            <div>
                                <h2 class="project-category {{ $style }}">{{ $project_category }}</h2>
                            </div>
                            <div class="title-project"> {{ $pt->title }}

                            </div>
                            <div class="description-project">{{ $pt->excerpt }}

                            </div>

                            <div class="preview-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" width="47.515" height="37.019"
                                    viewBox="0 0 47.515 37.019">
                                    <g id="Group_117" data-name="Group 117" transform="translate(1759.041 -4529.655)">
                                        <g id="view" transform="translate(-1759.041 4436.82)">
                                            <g id="Group_76" data-name="Group 76" transform="translate(0 92.835)">
                                                <g id="Group_75" data-name="Group 75" transform="translate(0)">
                                                    <path id="Path_34" data-name="Path 34"
                                                        d="M47.213,110.215c-.424-.71-10.539-17.38-23.456-17.38S.726,109.5.3,110.214a2.268,2.268,0,0,0,0,2.26c.424.71,10.539,17.38,23.456,17.38s23.031-16.67,23.456-17.379A2.265,2.265,0,0,0,47.213,110.215ZM23.757,126.024c-9.515,0-17.756-11.064-20.2-14.681,2.436-3.62,10.66-14.679,20.2-14.679,9.515,0,17.755,11.062,20.2,14.681C41.517,114.966,33.293,126.024,23.757,126.024Z"
                                                        transform="translate(0 -92.835)" fill="#fff" />
                                                </g>
                                            </g>
                                            <g id="Group_78" data-name="Group 78" transform="translate(12.269 99.856)">
                                                <g id="Group_77" data-name="Group 77" transform="translate(0 0)">
                                                    <path id="Path_35" data-name="Path 35"
                                                        d="M166.211,154.725A11.489,11.489,0,1,0,177.7,166.214,11.5,11.5,0,0,0,166.211,154.725Zm0,19.148a7.659,7.659,0,1,1,7.659-7.659A7.668,7.668,0,0,1,166.211,173.873Z"
                                                        transform="translate(-154.722 -154.725)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </div>



                        </div>
                        <picture>
                            <source class="lazy"
                                srcset={{ asset("assets/images/portfolio/$featured_image_name.webp") }}
                                type="image/webp" alt="{{ $featured_image_name }}">
                            <source class="lazy"
                                srcset={{ asset("assets/images/portfolio/$featured_image_name.$featured_image_type") }}
                                type="image/{{ $featured_image_type }}" alt="{{ $featured_image_name }}">
                            <img class="lazy"
                                src={{ asset("assets/images/portfolio/$featured_image_name.$featured_image_type") }}
                                alt="{{ $featured_image_name }}">

                        </picture>


                    </div>


                    <div class="featured-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39.881" height="38.482"
                            viewBox="0 0 39.881 38.482">
                            <g id="feature" transform="translate(0 -8.982)">
                                <path id="Path_28" data-name="Path 28"
                                    d="M39.814,23.4a1.154,1.154,0,0,0-1.028-.818L25.8,21.739,20.99,9.636a1.144,1.144,0,0,0-1.051-.654,1.169,1.169,0,0,0-1.121.654L14,21.739l-12.9.841A1.21,1.21,0,0,0,.054,23.4,1.183,1.183,0,0,0,.427,24.66l9.931,8.318L7.134,45.595a1.165,1.165,0,0,0,1.752,1.262l11.052-6.939L30.9,46.857a1.2,1.2,0,0,0,1.332-.047,1.161,1.161,0,0,0,.444-1.215L29.448,32.978,39.464,24.66A1.133,1.133,0,0,0,39.814,23.4Z"
                                    transform="translate(0 0)" fill="#ffda2d" />
                                <path id="Path_29" data-name="Path 29"
                                    d="M275.525,24.661,265.51,32.979,268.734,45.6a1.161,1.161,0,0,1-.444,1.215,1.2,1.2,0,0,1-1.332.047L256,39.918V8.983a1.144,1.144,0,0,1,1.051.654l4.813,12.1,12.983.841a1.154,1.154,0,0,1,1.028.818A1.133,1.133,0,0,1,275.525,24.661Z"
                                    transform="translate(-236.062 -0.001)" fill="#fdbf00" />
                                <path id="Path_30" data-name="Path 30"
                                    d="M243.337,474.252a1.168,1.168,0,1,1-1.168-1.168A1.157,1.157,0,0,1,243.337,474.252Z"
                                    transform="translate(-222.23 -427.956)" fill="#979fef" />
                                <circle id="Ellipse_36" data-name="Ellipse 36" cx="1.168" cy="1.168" r="1.168"
                                    transform="translate(34.022 35.743) rotate(-72.002)" fill="#737ee6" />
                                <circle id="Ellipse_37" data-name="Ellipse 37" cx="1.168" cy="1.168" r="1.168"
                                    transform="matrix(0.588, -0.809, 0.809, 0.588, 27.92, 16.968)" fill="#737ee6" />
                                <circle id="Ellipse_38" data-name="Ellipse 38" cx="1.168" cy="1.168" r="1.168"
                                    transform="matrix(0.809, -0.588, 0.588, 0.809, 8.693, 16.45)" fill="#979fef" />
                                <circle id="Ellipse_39" data-name="Ellipse 39" cx="1.168" cy="1.168" r="1.168"
                                    transform="translate(2.911 34.246) rotate(-17.998)" fill="#979fef" />
                                <path id="Path_31" data-name="Path 31"
                                    d="M257.168,474.252A1.157,1.157,0,0,1,256,475.421v-2.336A1.157,1.157,0,0,1,257.168,474.252Z"
                                    transform="translate(-236.062 -427.956)" fill="#737ee6" />
                                <path id="Path_32" data-name="Path 32"
                                    d="M169.065,176.941a1.18,1.18,0,0,0-1.028-.818l-4.229-.257-1.565-3.949a1.144,1.144,0,0,0-1.051-.654,1.1,1.1,0,0,0-1.121.654l-1.566,3.949-4.229.257a1.188,1.188,0,0,0-.677,2.079l3.271,2.71L155.818,185a1.2,1.2,0,0,0,.444,1.238,1.165,1.165,0,0,0,1.308.047l3.622-2.266,3.552,2.266a1.165,1.165,0,0,0,1.308-.047A1.2,1.2,0,0,0,166.5,185l-1.051-4.089,3.248-2.71A1.184,1.184,0,0,0,169.065,176.941Z"
                                    transform="translate(-141.253 -149.641)" fill="#fdbf00" />
                                <path id="Path_33" data-name="Path 33"
                                    d="M263.5,178.223l-3.248,2.71,1.051,4.089a1.2,1.2,0,0,1-.444,1.238,1.165,1.165,0,0,1-1.308.047L256,184.041V171.284a1.144,1.144,0,0,1,1.051.654l1.565,3.949,4.229.257a1.176,1.176,0,0,1,.654,2.079Z"
                                    transform="translate(-236.062 -149.661)" fill="#ff9100" />
                            </g>
                        </svg>


                    </div>










                </a>
            </div>
            <?php

    }
?>

        </div>
    </div>

    <div class="col" align=center>
        <button onclick="location.href = '/portfoliopage';" class="button-style1 effect01"> View all </button>
    </div>


    <div class="container" style="padding: 3% 0%;">
        <div class="col sub-title">
            <h1 id="section-title-4" class="text-center  b-title">
                <i class="fas fa-caret-left"></i> Recent Projects <i class="fas fa-caret-right"></i>
            </h1>

        </div>


    </div>

    <div class="container">
        <div class="row port-container">




            <?php
            foreach ($portfolio_recent_raw as $pr){

            
                $recent_image_name_raw=$pr->image_name;
                $recent_image_name = pathinfo($recent_image_name_raw, PATHINFO_FILENAME); 
                $recent_image_type=$pr->image_type;
                $project_category=$pr->category;
                $style=$pr->style;
                $project_link="portfolio/$pr->id";
        
            
            ?>






            <div class="col-xl-4 col-md-6 port-item filtr-item  " data-josh-anim-name="fadeInUp"
                data-josh-anim-delay="0.3s" data-category="1" data-sort="value">
                <a class="card-links" href="{{ $project_link }}">
                    <div class="image">

                        <div class="card-overlay">
                            <div>
                                <h2 class="project-category {{ $style }}">{{ $project_category }}</h2>
                            </div>
                            <div class="title-project"> {{ $pr->title }}

                            </div>
                            <div class="description-project">{{ $pr->excerpt }}

                            </div>

                            <div class="preview-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" width="47.515" height="37.019"
                                    viewBox="0 0 47.515 37.019">
                                    <g id="Group_117" data-name="Group 117" transform="translate(1759.041 -4529.655)">
                                        <g id="view" transform="translate(-1759.041 4436.82)">
                                            <g id="Group_76" data-name="Group 76" transform="translate(0 92.835)">
                                                <g id="Group_75" data-name="Group 75" transform="translate(0)">
                                                    <path id="Path_34" data-name="Path 34"
                                                        d="M47.213,110.215c-.424-.71-10.539-17.38-23.456-17.38S.726,109.5.3,110.214a2.268,2.268,0,0,0,0,2.26c.424.71,10.539,17.38,23.456,17.38s23.031-16.67,23.456-17.379A2.265,2.265,0,0,0,47.213,110.215ZM23.757,126.024c-9.515,0-17.756-11.064-20.2-14.681,2.436-3.62,10.66-14.679,20.2-14.679,9.515,0,17.755,11.062,20.2,14.681C41.517,114.966,33.293,126.024,23.757,126.024Z"
                                                        transform="translate(0 -92.835)" fill="#fff" />
                                                </g>
                                            </g>
                                            <g id="Group_78" data-name="Group 78" transform="translate(12.269 99.856)">
                                                <g id="Group_77" data-name="Group 77" transform="translate(0 0)">
                                                    <path id="Path_35" data-name="Path 35"
                                                        d="M166.211,154.725A11.489,11.489,0,1,0,177.7,166.214,11.5,11.5,0,0,0,166.211,154.725Zm0,19.148a7.659,7.659,0,1,1,7.659-7.659A7.668,7.668,0,0,1,166.211,173.873Z"
                                                        transform="translate(-154.722 -154.725)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </div>



                        </div>
                        <picture>
                            <source class="lazy"
                                srcset={{ asset("assets/images/portfolio/$recent_image_name.webp") }}
                                type="image/webp" alt="{{ $recent_image_name }}">
                            <source class="lazy"
                                srcset={{ asset("assets/images/portfolio/$recent_image_name.$recent_image_type") }}
                                type="image/{{ $recent_image_type }}" alt="{{ $recent_image_name }}">
                            <img class="lazy"
                                src={{ asset("assets/images/portfolio/$recent_image_name.$recent_image_type") }}
                                alt="{{ $recent_image_name }}">

                        </picture>


                    </div>











                </a>
            </div>
            <?php

    }
?>

        </div>
    </div>





    <div class="col" align=center>
        <button onclick="location.href = '/portfoliopage';" class="button-style1 effect01"> View all </button>
    </div>
    <div class="scroll-left">
        <p class="bg-text2">CERTIFICATES & RECOMMENDATIONS</p>
     </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <h1 id="section-title" class="text-center " data-josh-anim-name="fadeInUp"
                    data-josh-anim-delay="0.3s">ACHIVEMENTS</h1>

            </div>
        </div>

    </div>
    <div class="container-fluid achivement">
        <div class="blur-bg">
            <div class="container">


                <div id="slider-container" class="glider-contain">
                    <div class="glider">


                        <?php

                        foreach ($achivements as $ac){
                        $achivements_image_name_raw=$ac->doc_name;
                        $achivements_image_name = pathinfo($achivements_image_name_raw, PATHINFO_FILENAME); 

                    ?>



                        <div>
                            <div class="innerslider-block">






                                <div class="view-recent-project"><a href="achivements/{{ $ac->id }}">Know More</a></div>


                            </div>


                            <div class="slider-image">

                                <picture>

                                    <source class="lazy"
                                        srcset={{ asset("assets/images/achivements/$achivements_image_name.webp") }}
                                        type="image/webp" alt="{{ $ac->title }}">
                                    <source class="lazy"
                                        srcset={{ asset("assets/images/achivements/$achivements_image_name.$ac->image_type") }}
                                        type="image/{{ $ac->image_type }}" alt="{{ $ac->title }}">
                                    <img class="lazy"
                                        src={{ asset("assets/images/achivements/$achivements_image_name.$ac->image_type") }}
                                        alt="{{ $ac->title }}">

                                </picture>


                            </div>




                        </div>

                        <?php 
  }
?>
                        {{-- <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button> --}}
                        {{-- <div role="tablist" class="dots"></div> --}}
                    </div>

                </div>
            </div>
        </div>


    </div>

    </div>
</section>


<style>
    .image img {
        width: 100%;
        border-radius: 25px;
    }

    .port-container {
        overflow: hidden;
    }

    .achivement {

     
        /* background-size: cover; */

    }

    .glider-slide img {
        border-radius: 10px;
    }

</style>
<script>
    // new Glider(document.querySelector('.glider'), {
    //   slidesToShow: 1,
    //   dots: '.dots',
    //   draggable: true,
    //   arrows: {
    //     prev: '.glider-prev',
    //     next: '.glider-next'
    //   }
    // });
  
</script>
