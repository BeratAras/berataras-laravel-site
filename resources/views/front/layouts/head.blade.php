<!DOCTYPE html>
<html class="no-js" lang="tr">
<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title', $settings->title)</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    
    <!-- favicons
    ================================================== -->
    <link rel="icon" href="{{url($settings->favicon)}}" type="image/x-icon" />

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset("front/css/base.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/vendor.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/main.css")}}">

    <!-- script
    ================================================== -->
    <script src="{{asset("front/js/modernizr.js")}}"></script>
    <script src="{{asset("front/js/pace.min.js")}}"></script>

</head>