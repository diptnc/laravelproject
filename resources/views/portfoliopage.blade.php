<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <link href="{{ asset('assets/css/portfolio.min.css') }}" rel="stylesheet">
    
</head>
@component('components.header',['social_links_raw'=>$social_links_raw])
@endcomponent

<body class="html" >



    @component('components.portfolio.section1',['portfolio_raw' => $portfolio_raw,
    'pg_portfolio_items'=>$pg_portfolio_items])
    @endcomponent









    @component('components.footer',[
    'social_links_raw'=>$social_links_raw
])
    
@endcomponent


   
     







@component('components.scriptportfoliopage')
@endcomponent
</body>
</html>
