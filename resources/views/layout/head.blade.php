<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<title>Admin</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<meta name="robots" content="noindex,nofollow">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link  rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">

{{--<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'--}}
{{--        type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">--}}

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">

{{--<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'--}}
{{--        type="text/css" href="{{ asset('assets/css/vendors/chartist.css') }}">--}}

{{--<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'--}}
{{--        type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">--}}

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/style.css') }}">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        id="color" href="{{ asset('assets/css/color-1.css') }}" media="screen">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/responsive.css') }}">

<link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
        type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">

@yield('cssdif')
<noscript>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap">

    <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/chartist.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" id="color" href="{{ asset('assets/css/color-1.css') }}" media="screen">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
    @yield('cssdifno')
</noscript>
@livewireStyles