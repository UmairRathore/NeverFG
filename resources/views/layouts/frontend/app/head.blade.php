<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyKeeper - @yield('title')</title>
    <head>
        <title>Your Website</title>

        @if(Str::contains(request()->url(), 'profile'))
            <link rel="stylesheet" href="{{asset('frontend/assets/css/LoggedIn_Profile.css')}}"/>
        @else
        @if(request()->is('features'))
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/Features.css') }}"/>
        @elseif(request()->is('virtual-funeral'))
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/VirtualFuneral.css') }}"/>
        @elseif(request()->is('faqs'))
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/FAQS.css') }}"/>
        @elseif(request()->is('for-business'))
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/ForBussiness.css') }}"/>
        @else
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/Home.css') }}"/>
        @endif
        @endif


        <link rel="stylesheet" href="{{ asset('frontend/assets/css/header.css') }}"/>
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}"/>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

        <script src="https://cdn.lordicon.com/lordicon.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <style>
            .swiper {
                width: 100%;
                height: 7%;
                /* margin: 20px; */
                /* padding: 20px; */
            }

            .swiper-slide {
                text-align: center;
                width: 600px;


            }

            .swiper-slide img {
                padding: 20px;
                width: 100%;
                height: 500px;
                object-fit: cover;

            }
        </style>

    </head>
