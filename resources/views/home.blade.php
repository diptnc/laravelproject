<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    
    <link href="{{ asset('assets/css/home.min.css') }}" rel="stylesheet">
</head>
@component('components.splash-screen')
@endcomponent



@component('components.header',['social_links_raw'=>$social_links_raw])
@endcomponent

<body class="html" >


@component('components.section1',['social_links_raw'=>$social_links_raw])
@endcomponent

@component('components.section2',['about_raw'=>$about_raw])
@endcomponent


    <x-section3 />

    <x-section4 />
 
    @component('components.section5',[
        'portfolio_raw'=>$portfolio_raw,
        'portfolio_recent_raw'=>$portfolio_recent_raw,
        'achivements'=>$achivements
        ])
    @endcomponent
    <x-wcu />
    <x-section6 />
 
@component('components.section7')
    
@endcomponent
    
@component('components.footer',[
    'social_links_raw'=>$social_links_raw
])
    
@endcomponent


@component('components.scripthome')
@endcomponent

</body>
</html>
