@extends('layouts.frontend.pageslayout.main')
@section('title','Home')
@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/Home.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/footer.css')}}"/>
@endsection

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

<div class="hero_section_home">
    <div class="hero_wrapper">
        <img src="{{asset('frontend/assets/images/dummy_logo.webp')}}" alt="" class="hero_logo" />
        <h1 class="heading_primary">KEEPING MEMORIES ALIVE</h1>
        <h2 class="heading_secandary">
            Beautiful, Free Online Memorials & Tributes
        </h2>
        <h2 class="heading_ternary">Keeper online tributes are a simple way</h2>
        <h2 class="heading_ternary">
            to preserve, celebrate and share a loved one's legacy.
        </h2>
        <button class="custom-button">Click here to create a memorial</button>
    </div>
</div>
<div class="craft-cermony-home-section">
    <div class="craft-cermony-home-section-wrapper">
        <h4 class="craft-cermony-main-heading heading-color">
            Virtual & Hybrid Memorial Services
        </h4>
        <h1 class="craft-cermony-secandary-heading heading-color">
            Craft the Perfect Ceremony for Your Loved One
        </h1>
        <div class="cermonyTwocolumns">
            <div class="cermony-left-section">
                <p>
                    Keeper’s team of experts make it easy to host a virtual or hybrid
                    memorial service to honor the memory of your loved one. When you
                    partner with us, you’ll have access to our:
                </p>
                <ul class="cermony-list">
                    <li>
                        <span>Virtual or Hybrid Technology - </span>We provide hybrid,
                        livestream, or fully virtual ceremony options to fit with your
                        needs
                    </li>

                    <li>
                        <span>Memorial Coordinators -</span>We’ll help you plan the
                        event structure, coordinate speakers, and craft personalized,
                        meaningful words.
                    </li>
                    <li>
                        <span>Technical Assistants -</span>We’ll host and manage your
                        Zoom, planned media, and guest support day-of so you can be
                        fully present.
                    </li>
                </ul>
                <p>
                    And more! We’re honored to work alongside you to help you craft a
                    personalized and heartfelt celebration of life for your loved one.
                </p>
                <div class="row bottom-section">
                    <button class="black-background-btn">Learn more</button>
                    <button class="white-background-btn">
                        <a href="https://calendly.com/maniwyatt29/30min">Book free consultation</a>
                    </button>
                </div>
            </div>
            <div class="cermony-right-section">
                <video src="{{asset('frontend/assets/images/dummy-video')}}.mp4" class="video-item"></video>
            </div>
        </div>
    </div>
</div>
<div class="our-free-swipe">
    <div class="swiper-heading-wrapper">
        <h1 class="swipers-main-heading">Our Free Memorials
            Allow You to:</h1>
        <h2 class="swipers-secandary-heading">Send and Receive Tribute Messages
        </h2>
    </div>

    <div class="memorial-swiper-wrapper">
        <div class="swiper">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" loading="lazy" alt="" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" loading="lazy" alt="" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" loading="lazy" alt="" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" loading="lazy" alt="" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" loading="lazy" alt="" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" loading="lazy" alt="" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" loading="lazy" alt="" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" loading="lazy" alt="" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" loading="lazy" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

</div>
<div class="our-free-memorials">
    <h1 class="heading-color font-heading-large">Our Free Memorials</h1>
    <ul class="main-box">
        <li class="box active"><span>Store & share a life story</span>

            <div class="detail active">
                <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="image-of-slide">
            </div>
        </li>
        <li class="box"><span>Add Pictures & Videos</span>
            <div class="detail">
                <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="image-of-slide">
            </div>
        </li>
        <li class="box"><span>Send & Receive tribute Messages</span>

            <div class="detail">
                <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="image-of-slide">
            </div>
        </li>
        <li class="box"><span>Build your family tree</span>
            <div class="detail">
                <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="image-of-slide">
            </div>
        </li>

        <li class="box"><span>Share with world and keep it private</span>
            <div class="detail">
                <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="image-of-slide">
            </div>
        </li>
        <li class="box"><span>Receive Direction</span>
            <div class="detail">
                <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="image-of-slide">
            </div>
        </li>
    </ul>
    <button class="black-background-btn half-width">All Features</button>
</div>
<div class="online-memorial-site-section">
    <h1>Creating an Online Memorial Site is Simple</h1>
    <div class="online-memorial-site-section-list">
        <div class="single-item-of-online-memorial">
            <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="online-memorial-img">
            <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>
            <p class="online-memorial-paragraph">by adding basic or detailed information</p>
        </div>
        <div class="single-item-of-online-memorial">
            <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="online-memorial-img">
            <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>
            <p class="online-memorial-paragraph">by adding basic or detailed information</p>
        </div>
        <div class="single-item-of-online-memorial">
            <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="online-memorial-img">
            <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>
            <p class="online-memorial-paragraph">by adding basic or detailed information</p>
        </div>
        <div class="single-item-of-online-memorial">
            <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="online-memorial-img">
            <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>
            <p class="online-memorial-paragraph">by adding basic or detailed information</p>
        </div>
    </div>
    <button class="black-background-btn half-width">View Sample Memorial</button>
</div>
<div class="share-memorial-section">
    <div class="share-memorial-insider">
        <h1>Create a Memorial Website</h1>
        <h2>Preserve and share memories of your loved one.</h2>
        <div class="share-memorial-form">
            <h1>I WANT TO SHARE MEMORIES OF</h1>
            <div class="row full-width">
                <input placeholder="Enter first name" class="input-style" type="text">
                <input placeholder="Enter last name" class="input-style" type="text">

            </div>
            <div class="row">
                <button class="black-background-btn full-width">Get Started</button>
            </div>
            <p><a href="">Learn more</a> about our memorial website</p>
        </div>
    </div>
</div>
<div class="are-you-funeral-service-provider-section">
    <div class="service-provider-insider">
        <h1>ARE YOU A CEMETERY OR FUNERAL SERVICE PROVIDER?</h1>
        <button class="custom-button">
            Learn more about keeper partnership
        </button>
    </div>
</div>

@endsection
@section('index')
<script>
    var getslide = $('.main-box li').length - 1;
    var slidecal = 30 / getslide + '%';

    $('.box').css({ "width": slidecal });

    $('.box').click(function () {
        $('.box').removeClass('active');
        $(this).addClass('active');
    });

    var swiper = new Swiper(".mySwiper", {
        lazy: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    document.addEventListener("scroll", () => {
        const header = document.getElementById("header");

        console.log("Scroll y value", window.window.scrollY);
        history.scrollRestoration = "manual";

        if (window.scrollY == 0) {
            header.classList.remove("scrolled");

            header.style.color = "white";
            header.style.backgroundColor = "#00000080";
            //change the logo large logo
            document.getElementById("large-screen-funeralist-logo").src =
                "funeralist_white_logo.png";
            //change the logo small logo
            document.getElementById("my-small-nav-logo").src =
                "funeralist_white_logo.png";

            document.getElementById("sidebar-menu").style.backgroundColor =
                "#00000080";

            document.getElementById("sidebar-menu").style.color = "white";
        }
        if (window.scrollY > 0) {
            console.log("Scroll y value", window.scrollY);
            console.log("scroll");

            header.style.color = "white";
            header.style.backgroundColor = "black";
            //changing the logo on scroll of large item
            document.getElementById("large-screen-funeralist-logo").src =
                "funeralist_black_logo.png";
            // changing small logo
            document.getElementById("my-small-nav-logo").src =
                "funeralist_black_logo.png";

            document.getElementById("sidebar-menu").style.backgroundColor =
                "white";
            document.getElementById("sidebar-menu").style.color = "black";

            //Here we change the background color of small scrren nav bar <960px

            const navLinkHome = document.getElementById("home");
            const navLinkHomeService = document.getElementById("homeService");
            const navLinkBrand = document.getElementById("brand");
            navLinkHome.style.color = "black";
            navLinkHomeService.style.color = "black";
            navLinkBrand.style.color = "black";
            header.classList.add("scrolled");
        } else {
            header.style.color = "white";
            header.style.backgroundColor = "#00000080";
            //changing the large screen logo
            document.getElementById("large-screen-funeralist-logo").src =
                "funeralist_white_logo.png";
            //changing the small screen logo
            document.getElementById("my-small-nav-logo").src =
                "funeralist_white_logo.png";

            document.getElementById("sidebar-menu").style.backgroundColor =
                "#00000080";
            document.getElementById("sidebar-menu").style.color = "white";

            header.classList.remove("scrolled");
        }
    });

    //cart box close
    $("#close-img").click(function () {
        let cart = document.getElementById("cart-items");
        // cart.classList.remove("slide-from-left");

        cart.style.display = "none";
    });
    $("#search-box-div").click(function () {
        let search = document.getElementById("searchBarSection");
        search.style.display = "flex";
    });
    $("#search-of-sidebar-of-funeralist").click(function () {
        let search = document.getElementById("searchBarSection");
        search.style.display = "flex";
    });
    $("#closing-button-of-search").click(function () {
        let search = document.getElementById("searchBarSection");
        search.style.display = "none";
    });
    $("#user-icon-div").click(function () {
        console.log(
            "this",
            $(this).children("div.user-dropdown-of-funeralist")
        );

        $(this)
            .children("div.user-dropdown-of-funeralist")
            .toggleClass("show-user-profile");
    });
    $("#user-img-svg").click(function () {
        console.log(
            "this",
            $(this).children("div.user-dropdown-of-funeralist")
        );

        $(this)
            .children("div.user-dropdown-of-funeralist")
            .toggleClass("show-user-profile");
    });
    $(document).on("click", function (a) {

        //user image on click
        if ($(a.target).is("#user-img-svg") === false) {
            console.log("User click outside");
            $("#user-options").removeClass("show-user-profile");
        }
    });
    //resizing window
    $(window).resize(function () {
        if ($(window).width() < 960) {
            console.log("Width is <900");
            $("#sidebar-menu").show();
            $("#header").hide();
        } else {
            console.log("Width is >=960");
            $("#sidebar-menu").hide();
            $("#header").show();
        }
    });

    $(document).ready(function () {
        if ($(window).width() < 960) {
            console.log("Width is <900");
            $("#sidebar-menu").show();
            $("#header").hide();
        } else {
            console.log("Width is >=960");
            $("#sidebar-menu").hide();
            $("#header").show();
        }
        //jquery for toggle sub menus
        $(".glamora-sidebar-sub-btn").click(function () {
            $(this).next(".funeralist_sidebar_menu_item_sub-menu").slideToggle();
            $(this).find(".dropdown").toggleClass("rotate");
        });

        //jquery for expand and collapse the sidebar
        $(".funeralist_sidebar_menu-btn").click(function () {
            $(".side-bar-of-funeralist").addClass("active");
            $(".funeralist_sidebar_menu-btn").css("visibility", "hidden");
        });

        $(".close-btn").click(function () {
            $(".side-bar-of-funeralist").removeClass("active");
            $(".funeralist_sidebar_menu-btn").css("visibility", "visible");
        });
    });
</script>
@endsection
