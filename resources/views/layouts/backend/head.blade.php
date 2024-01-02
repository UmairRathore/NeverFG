<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
{{--    <title>{{ config('app.name', 'MyKeeper') }}</title>--}}
    <title>{{ config('app.name', 'MyKeeper') }}</title>

{{--    <title> MyKeeperVideo</title>--}}
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('backend/vendors/iconic-fonts/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/vendors/iconic-fonts/flat-icons/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/iconic-fonts/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css')}}">


    <!-- Bootstrap core CSS -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{asset('backend/assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{asset('backend/assets/css/slick.css')}}" rel="stylesheet">
    <!-- medboard styles -->
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">

    <!-- Page Specific CSS (Morris Charts.css) -->
    <link href="{{asset('backend/assets/css/morris.css')}}" rel="stylesheet">

    <!--DATATABLE-->
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css')}}">




    <!--SELECT2-->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css')}}" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('backend/assets/img/favicon.png')}}">


    <!--Star-Rating-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="starability-all.min.css">



</head>
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">

