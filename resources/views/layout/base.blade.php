<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/images/logo.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Portal SPBE merupakan web informasi seputar Sistem Pemerintah Berbasis Elekronik milik Pemerintah Kabupaten Madiun.">
    <meta name="keywords" content="Kabupaten Madiun, SPBE, portal SPBE, Kampung Pesilat, Diskominfo Kab.Madiun, Web">
    <meta name="author" content="Yan">

    @yield('head')

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
    @yield('css')
</head>
<!-- END: Head -->

@yield('body')

</html>