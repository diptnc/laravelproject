<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php foreach ($achivements_page as $pp) {
 
   
    $pp_image_name_raw = $pp->doc_name;
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
                {{-- <p class="text-center text-sm-left text-md-left text-lg-left text-xl-left t2">Date : {{ $pp->date }} --}}
                </p>
                <p class="text-center text-sm-left text-md-left text-lg-left text-xl-left t4 ">
                    {{ $pp->category }}

                </p>
            </div>
            <div class="row">

                <div class="col-md-12">
                    {{-- picture 1 --}}
                    <div class="text-center text-sm-left text-md-left text-lg-left text-xl-left ">
                        <picture>
                            <source class="lazy"
                                srcset={{ asset("assets/images/achivements/$pp_image_name(original).webp") }}
                                type="image/webp" alt="{{ $pp_image_name }}">
                            <source class="lazy"
                                srcset={{ asset("assets/images/achivements/$pp_image_name(original).$pp_image_type") }}
                                type="image/{{ $pp_image_type }}" alt="{{ $pp_image_name }}">
                            <img class="lazy"
                                src={{ asset("assets/images/achivements/$pp_image_name(original).$pp_image_type") }}
                                alt="{{ $pp_image_name }}">

                        </picture>

                    </div>

                    


                </div>

                <div class="col-md-12">
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
