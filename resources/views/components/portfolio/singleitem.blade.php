<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php foreach ($portfolio_page as $pp) {
 
   
    $pp_image_name_raw = $pp->image_name;
    $pp_image_name = pathinfo($pp_image_name_raw, PATHINFO_FILENAME);
    $pp_image_type = $pp->image_type;
    } ?>

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <link href="{{ asset('assets/css/singleportfoliopage.min.css') }}" rel="stylesheet">

</head>

@component('components.header',['social_links_raw'=>$social_links_raw])
@endcomponent


<body class="html">

    <section class="main">



        <div class="container ">
            <div class="col-md-12">
                <h1 class="text-center text-sm-left text-md-left text-lg-left text-xl-left t1">{{ $pp->title }}</h1>
                <p class="text-center text-sm-left text-md-left text-lg-left text-xl-left t2">Date : {{ $pp->date }}
                </p>
                <p class="text-center text-sm-left text-md-left text-lg-left text-xl-left t4 {{ $pp->style }}">
                    {{ $pp->category }}

                </p>
            </div>
            <div class="row">

                <div class="col-md-8">
                    {{-- picture 1 --}}
                    <div class="text-center text-sm-left text-md-left text-lg-left text-xl-left ">
                        <picture>
                            <source class="lazy"
                                srcset={{ asset("assets/images/portfolio/$pp_image_name.webp") }}
                                type="image/webp" alt="{{ $pp_image_name }}">
                            <source class="lazy"
                                srcset={{ asset("assets/images/portfolio/$pp_image_name.$pp_image_type") }}
                                type="image/{{ $pp_image_type }}" alt="{{ $pp_image_name }}">
                            <img class="lazy"
                                src={{ asset("assets/images/portfolio/$pp_image_name.$pp_image_type") }}
                                alt="{{ $pp_image_name }}">

                        </picture>

                    </div>

                    @if(!empty($pp->img2))
                        {{-- picture 2 --}}
                        <div class="text-center text-sm-left text-md-left text-lg-left text-xl-left ">
                            <picture>
                                <source class="lazy"
                                    srcset={{ asset("assets/images/portfolio/$pp->img2.webp") }}
                                    type="image/webp" alt="{{ $pp->img2 }}">
                                <source class="lazy"
                                    srcset={{ asset("assets/images/portfolio/$pp->img2.$pp_image_type") }}
                                    type="image/{{ $pp_image_type }}" alt="{{ $pp_image_name }}">
                                <img class="lazy"
                                    src={{ asset("assets/images/portfolio/$pp->img2.$pp_image_type") }}
                                    alt="{{ $pp->img2 }}">

                            </picture>

                        </div>@endif

                        @if(!empty($pp->img3))
                            {{-- picture 3 --}}
                            <div class="text-center text-sm-left text-md-left text-lg-left text-xl-left ">
                                <picture>
                                    <source class="lazy"
                                        srcset={{ asset("assets/images/portfolio/$pp->img3.webp") }}
                                        type="image/webp" alt="{{ $pp->img3 }}">
                                    <source class="lazy"
                                        srcset={{ asset("assets/images/portfolio/$pp->img2.$pp_image_type") }}
                                        type="image/{{ $pp_image_type }}" alt="{{ $pp_image_name }}">
                                    <img class="lazy"
                                        src={{ asset("assets/images/portfolio/$pp->img3.$pp_image_type") }}
                                        alt="{{ $pp->img3 }}">

                                </picture>

                            </div>@endif

                </div>

                <div class="col-md-4">
                    <h1 class="text-center text-sm-left text-md-left text-lg-left text-xl-left t3">{{ $pp->title }}
                    </h1>
                    <p class="text-center text-sm-left text-md-left text-lg-left text-xl-left t5">{!!$pp->description!!}
                    </p>
                    <div class="text-center text-sm-left text-md-left text-lg-left text-xl-left">
                        {{-- <button class="btn btn-primary" type="button" ></button> --}}
                    </div>
                </div>
            </div>
        </div>



    </section>



    @component('components.footer', [
        'social_links_raw' => $social_links_raw,
        ])

    @endcomponent



    @component('components.scriptsingleportfolio')
    @endcomponent
</body>

</html>
