<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, nofollow"/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- PLUGINS CSS STYLE -->
        <link rel="stylesheet" href="/theme/plugins/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="/theme/plugins/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="/theme/plugins/slick/slick.css">
        <link rel="stylesheet" href="/theme/plugins/slick/slick-theme.css">
        <link rel="stylesheet" href="/theme/plugins/fancybox/jquery.fancybox.min.css">
        <link rel="stylesheet" href="/theme/plugins/aos/aos.css">

        <!-- CUSTOM CSS -->
        <link href="/theme/css/style.css" rel="stylesheet">

        @production
            @include('layouts.integrations')
        @endproduction
    </head>
    <body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
        @yield('content')
    </body>
</html>
