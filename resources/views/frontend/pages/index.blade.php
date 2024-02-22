@extends('layouts.frontend.app.app')
@section('title', 'Home')
@section('content')

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



{{--        <div class="our-free-memorials">--}}
{{--            <h1 class="heading-color font-heading-large">Our Free Memorials</h1>--}}
{{--            <ul class="main-box">--}}
{{--                @isset($indexImage)--}}
{{--                @foreach($indexImage as $item)--}}
{{--                    <li class="box {{ $loop->first ? 'active' : '' }}">--}}
{{--                        <span>{{ $item->index_image_heading }}</span>--}}
{{--                        <div class="detail {{ $loop->first ? 'active' : '' }}">--}}
{{--                            <img src="{{ asset($item->index_image) }}" alt="" class="image-of-slide">--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--                    @endisset--}}
{{--            </ul>--}}
{{--            <button onclick="window.location.href='{{ route('features') }}'" class="black-background-btn half-width">All Features</button>--}}
{{--        </div>--}}
        <div class="online-memorial-site-section">
            <h1>Creating an Online Memorial Site is Simple</h1>
            <div class="online-memorial-site-section-list">

                @isset($indexCard)
                @foreach($indexCard as $item)

                <div class="single-item-of-online-memorial">
                    <img src="{{ asset($item->index_card_image) }}" alt="" class="online-memorial-img">
                    <h3 class="online-memorial-main-heading">{{ $item->index_card_image_heading }}</h3>
                    <p class="online-memorial-paragraph">{{ $item->index_card_image_description }}</p>
                </div>
                @endforeach
@endisset
            </div>

            @if(auth()->check())
<?php
$user = \App\Models\UserMemorial::where('keeper_id',auth()->user()->id)->first()
?>
    @if($user)
            <button onclick="window.location.href='{{ route('profile',$user->memorial_user_id) }}'" class="black-background-btn half-width">View Sample Memorial</button>
    @else
 <button onclick="window.location.href='{{ route('sampleProfile') }}'" class="black-background-btn half-width">View Sample Memorial</button>
@endif
@else
            <button onclick="window.location.href='{{ route('sampleProfile') }}'" class="black-background-btn half-width">View Sample Memorial</button>
            @endif
        </div>
        <div class="share-memorial-section">
            <div class="share-memorial-insider">
                <h1>Create a Memorial Website</h1>
                <h2>Preserve and share memories of your loved one.</h2>
                <div class="share-memorial-form">
                    <h3>I WANT TO SHARE MEMORIES OF</h3>
                    <div class="row full-width">
                        <input id="firstNameInput" placeholder="Enter first name" class="input-style" type="text">
                        <input id="lastNameInput" placeholder="Enter last name" class="input-style" type="text">
                    </div>
                    <div class="row">
                        <button onclick="redirectToCorrectPage()" class="black-background-btn full-width">Get Started</button>
                    </div>
                    <p><a href="{{route('privacyTerms')}}">Learn more</a> about our memorial website</p>
                </div>
            </div>
        </div>

        <div class="are-you-funeral-service-provider-section">
            <div class="service-provider-insider">
                <h1>ARE YOU A CEMETERY OR FUNERAL SERVICE PROVIDER?</h1>
                <button onclick="window.location.href='{{ route('privacyTerms') }}'" class="custom-button">
                    Learn more about Neverfg partnership
                </button>
            </div>
        </div>

@endsection
{{--@section('indexJS')--}}
{{--    <script>--}}
{{--        var getslide = $('.main-box li').length - 1;--}}
{{--        var slidecal = 30 / getslide + '%';--}}

{{--        $('.box').css({"width": slidecal});--}}

{{--        $('.box').click(function () {--}}
{{--            $('.box').removeClass('active');--}}
{{--            $(this).addClass('active');--}}
{{--        });--}}

{{--        var swiper = new Swiper(".mySwiper", {--}}
{{--            lazy: true,--}}
{{--            pagination: {--}}
{{--                el: ".swiper-pagination",--}}
{{--                clickable: true,--}}
{{--            },--}}
{{--            navigation: {--}}
{{--                nextEl: ".swiper-button-next",--}}
{{--                prevEl: ".swiper-button-prev",--}}
{{--            },--}}
{{--        });--}}
{{--        document.addEventListener("scroll", () => {--}}
{{--            const header = document.getElementById("header");--}}

{{--            console.log("Scroll y value", window.window.scrollY);--}}
{{--            history.scrollRestoration = "manual";--}}

{{--            if (window.scrollY == 0) {--}}
{{--                header.classList.remove("scrolled");--}}

{{--                header.style.color = "white";--}}
{{--                header.style.backgroundColor = "#00000080";--}}
{{--                //change the logo large logo--}}
{{--                document.getElementById("large-screen-funeralist-logo").src =--}}
{{--                    "funeralist_white_logo.png";--}}
{{--                //change the logo small logo--}}
{{--                document.getElementById("my-small-nav-logo").src =--}}
{{--                    "funeralist_white_logo.png";--}}

{{--                document.getElementById("sidebar-menu").style.backgroundColor =--}}
{{--                    "#00000080";--}}

{{--                document.getElementById("sidebar-menu").style.color = "white";--}}
{{--            }--}}
{{--            if (window.scrollY > 0) {--}}
{{--                console.log("Scroll y value", window.scrollY);--}}
{{--                console.log("scroll");--}}

{{--                header.style.color = "white";--}}
{{--                header.style.backgroundColor = "black";--}}
{{--                //changing the logo on scroll of large item--}}
{{--                document.getElementById("large-screen-funeralist-logo").src =--}}
{{--                    "funeralist_black_logo.png";--}}
{{--                // changing small logo--}}
{{--                document.getElementById("my-small-nav-logo").src =--}}
{{--                    "funeralist_black_logo.png";--}}

{{--                document.getElementById("sidebar-menu").style.backgroundColor =--}}
{{--                    "white";--}}
{{--                document.getElementById("sidebar-menu").style.color = "black";--}}

{{--                //Here we change the background color of small scrren nav bar <960px--}}

{{--                const navLinkHome = document.getElementById("home");--}}
{{--                const navLinkHomeService = document.getElementById("homeService");--}}
{{--                const navLinkBrand = document.getElementById("brand");--}}
{{--                navLinkHome.style.color = "black";--}}
{{--                navLinkHomeService.style.color = "black";--}}
{{--                navLinkBrand.style.color = "black";--}}
{{--                header.classList.add("scrolled");--}}
{{--            } else {--}}
{{--                header.style.color = "white";--}}
{{--                header.style.backgroundColor = "#00000080";--}}
{{--                //changing the large screen logo--}}
{{--                document.getElementById("large-screen-funeralist-logo").src =--}}
{{--                    "funeralist_white_logo.png";--}}
{{--                //changing the small screen logo--}}
{{--                document.getElementById("my-small-nav-logo").src =--}}
{{--                    "funeralist_white_logo.png";--}}

{{--                document.getElementById("sidebar-menu").style.backgroundColor =--}}
{{--                    "#00000080";--}}
{{--                document.getElementById("sidebar-menu").style.color = "white";--}}

{{--                header.classList.remove("scrolled");--}}
{{--            }--}}
{{--        });--}}

{{--        //cart box close--}}
{{--        $("#close-img").click(function () {--}}
{{--            let cart = document.getElementById("cart-items");--}}
{{--            // cart.classList.remove("slide-from-left");--}}

{{--            cart.style.display = "none";--}}
{{--        });--}}
{{--        $("#search-box-div").click(function () {--}}
{{--            let search = document.getElementById("searchBarSection");--}}
{{--            search.style.display = "flex";--}}
{{--        });--}}
{{--        $("#search-of-sidebar-of-funeralist").click(function () {--}}
{{--            let search = document.getElementById("searchBarSection");--}}
{{--            search.style.display = "flex";--}}
{{--        });--}}
{{--        $("#closing-button-of-search").click(function () {--}}
{{--            let search = document.getElementById("searchBarSection");--}}
{{--            search.style.display = "none";--}}
{{--        });--}}
{{--        $("#user-icon-div").click(function () {--}}
{{--            console.log(--}}
{{--                "this",--}}
{{--                $(this).children("div.user-dropdown-of-funeralist")--}}
{{--            );--}}

{{--            $(this)--}}
{{--                .children("div.user-dropdown-of-funeralist")--}}
{{--                .toggleClass("show-user-profile");--}}
{{--        });--}}
{{--        $("#user-img-svg").click(function () {--}}
{{--            console.log(--}}
{{--                "this",--}}
{{--                $(this).children("div.user-dropdown-of-funeralist")--}}
{{--            );--}}

{{--            $(this)--}}
{{--                .children("div.user-dropdown-of-funeralist")--}}
{{--                .toggleClass("show-user-profile");--}}
{{--        });--}}
{{--        // $(document).on("click", function (a) {--}}
{{--        //--}}
{{--        //     //user image on click--}}
{{--        //     if ($(a.target).is("#user-img-svg") === false) {--}}
{{--        //         console.log("User click outside");--}}
{{--        //         $("#user-options").removeClass("show-user-profile");--}}
{{--        //     }--}}
{{--        // });--}}
{{--        //resizing window--}}
{{--        $(window).resize(function () {--}}
{{--            if ($(window).width() < 960) {--}}
{{--                console.log("Width is <900");--}}
{{--                $("#sidebar-menu").show();--}}
{{--                $("#header").hide();--}}
{{--            } else {--}}
{{--                console.log("Width is >=960");--}}
{{--                $("#sidebar-menu").hide();--}}
{{--                $("#header").show();--}}
{{--            }--}}
{{--        });--}}

{{--        $(document).ready(function () {--}}
{{--            if ($(window).width() < 960) {--}}
{{--                console.log("Width is <900");--}}
{{--                $("#sidebar-menu").show();--}}
{{--                $("#header").hide();--}}
{{--            } else {--}}
{{--                console.log("Width is >=960");--}}
{{--                $("#sidebar-menu").hide();--}}
{{--                $("#header").show();--}}
{{--            }--}}
{{--            //jquery for toggle sub menus--}}
{{--            $(".glamora-sidebar-sub-btn").click(function () {--}}
{{--                $(this).next(".funeralist_sidebar_menu_item_sub-menu").slideToggle();--}}
{{--                $(this).find(".dropdown").toggleClass("rotate");--}}
{{--            });--}}

{{--            //jquery for expand and collapse the sidebar--}}
{{--            $(".funeralist_sidebar_menu-btn").click(function () {--}}
{{--                $(".side-bar-of-funeralist").addClass("active");--}}
{{--                $(".funeralist_sidebar_menu-btn").css("visibility", "hidden");--}}
{{--            });--}}

{{--            $(".close-btn").click(function () {--}}
{{--                $(".side-bar-of-funeralist").removeClass("active");--}}
{{--                $(".funeralist_sidebar_menu-btn").css("visibility", "visible");--}}
{{--            });--}}
{{--        });--}}
{{--        function redirectToMemorialSignup() {--}}
{{--            var firstName = document.getElementById('firstNameInput').value.trim();--}}
{{--            var lastName = document.getElementById('lastNameInput').value.trim();--}}

{{--            if (firstName !== '' && lastName !== '') {--}}
{{--                var url = '{{ route("memorialsignup") }}' + '?firstName=' + encodeURIComponent(firstName) + '&lastName=' + encodeURIComponent(lastName);--}}
{{--                window.location.href = url;--}}
{{--            } else {--}}
{{--                alert('Please fill in both first name and last name.');--}}
{{--            }--}}
{{--        }--}}




{{--        function redirectToCorrectPage() {--}}
{{--            var firstName = document.getElementById('firstNameInput').value.trim();--}}
{{--            var lastName = document.getElementById('lastNameInput').value.trim();--}}

{{--            if (firstName !== '' && lastName !== '') {--}}
{{--                @if(auth()->check())--}}
{{--                    window.location.href = '{{ route('Creatememorial',auth()->user()->id) }}?firstName=' + encodeURIComponent(firstName) + '&lastName=' + encodeURIComponent(lastName);--}}
{{--                @else--}}
{{--                    window.location.href = '{{ route('memorialsignup') }}?firstName=' + encodeURIComponent(firstName) + '&lastName=' + encodeURIComponent(lastName);--}}
{{--                @endif--}}
{{--            } else {--}}
{{--                alert('Please fill in both first name and last name.');--}}
{{--            }--}}
{{--        }--}}

{{--    </script>--}}
{{--@endsection--}}
