<!DOCTYPE html>
<html lang="de">
<head>
    <!-- Page Title -->
    <title>{{$title}} - Tridhyatech GmbH</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$citymeta}} ">
    <meta name="keywords" content="Appentwicklung, {{$city}}, App Development, iOS Apps, Android Apps">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli%7CRubik:400,400i,500,700">

    <!-- ======= Bootstrap CSS ======= -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    <!-- ======= Font Awesome CSS ======= -->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">

    <!-- ======= Owl Carousel CSS ======= -->
    <link rel="stylesheet" href="{{asset('/plugins/owlcarousel/owl.carousel.min.css')}}">

    <!-- ======= Magnific Popup CSS ======= -->
    <link rel="stylesheet" href="{{asset('/plugins/magnific-popup/magnific-popup.min.css')}}">

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <!-- ======= Custom Stylesheet ======= -->
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
@include('sweet::alert')