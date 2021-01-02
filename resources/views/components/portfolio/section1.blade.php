<main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
        <div class="container">
            <div class="row mb-5 align-items-center">
                {{-- <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2>Hey, I'm Johan Stanworth</h2>
                    <p class="mb-0">Freelance Creative &amp; Professional Graphics Designer</p>
                </div> --}}
                <div class="col-md-12 col-lg-12 col-xl-12 text-center text-lg-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <div id="filters" class="filters">
                        <a href="#" data-filter="*" class="active">All</a>
                        <a href="#" data-filter=".featured">Featured</a>
                        <a href="#" data-filter=".web-development-category">Web projects</a>
                        <a href="#" data-filter=".custom-category">Coding</a>
                        <a href="#" data-filter=".ui-ux-category">Ui/Ux</a>
                        <a href="#" data-filter=".graphics-category">Graphics Design</a>
                        <a href="#" data-filter=".video-music-category">Video & Music</a>
                    </div>
                </div>
            </div>
            <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">

                <?php
               foreach( $pg_portfolio_items  as $pr){
                    $recent_image_name_raw=$pr->image_name;
                    $recent_image_name = pathinfo($recent_image_name_raw, PATHINFO_FILENAME); 
                    $recent_image_type=$pr->image_type;
                    $project_category=$pr->category;
                    if (($pr->isfeatured)=='yes'){
                        $style=$pr->style.' featured';
                    }
                    elseif (($pr->style)=='music-category' or ($pr->style)=='video-category') {
                            $style='video-music-category';
                        }else {
                                 $style=$pr->style;
                        }
                   
                  
                    $project_link="portfolio/$pr->id";
                  
?>
                <div class="item {{ $style }} col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="{{ $project_link }}" class="item-wrap fancybox ">
                        <div class="work-info">
                            <h3>{{ $pr->title }}</h3>
                            {{-- <span>Web</span> --}}
                        </div>
                        <picture>
                            <source class="lazy"
                                srcset={{ asset("assets/images/portfolio/$recent_image_name.webp") }}
                                type="image/webp" alt="{{ $recent_image_name }}">
                            <source class="lazy"
                                srcset={{ asset("assets/images/portfolio/$recent_image_name.$recent_image_type") }}
                                type="image/{{ $recent_image_type }}" alt="{{ $recent_image_name }}">
                            <img class="lazy img-fluid"
                                src={{ asset("assets/images/portfolio/$recent_image_name.$recent_image_type") }}
                                alt="{{ $recent_image_name }}">

                        </picture>


                    </a>
                </div>
                <?php
            }
               ?>


            </div>
            <div align=center class="page-load-status">
                <p class="infinite-scroll-request loader"></p>
                <p class="infinite-scroll-last">End of Content</p>
                <p class="infinite-scroll-error">No more pages to load</p>
            </div>
        </div>
    </section>



</main><!-- End #main -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
