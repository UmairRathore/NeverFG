
{{--@extends('layouts.frontend.pageslayout.main')--}}
{{--@section('title','Home')--}}
{{--@section('content')--}}
{{--    <style>--}}
{{--        .swiper {--}}
{{--            width: 100%;--}}
{{--            height: 7%;--}}
{{--            /* margin: 20px; */--}}
{{--            /* padding: 20px; */--}}
{{--        }--}}

{{--        .swiper-slide {--}}
{{--            text-align: center;--}}
{{--            width: 600px;--}}


{{--        }--}}

{{--        .swiper-slide img {--}}
{{--            padding: 20px;--}}
{{--            width: 100%;--}}
{{--            height: 500px;--}}
{{--            object-fit: cover;--}}

{{--        }--}}
{{--    </style>--}}
{{--    <div class="main-header-funeralist-wrapper">--}}
{{--        <div class="main-header-funeralist" id="header">--}}
{{--            <div class="main-header-funeralist-left-items">--}}
{{--                <!-- <img--}}
{{--                    src="./{{asset('frontend/assets/images/funeralist_white_logo.png')}}"--}}
{{--                    alt=""--}}
{{--                    class="logo-funeralist"--}}
{{--                    id="large-screen-funeralist-logo"--}}
{{--                  /> -->--}}
{{--                Keeper--}}
{{--            </div>--}}
{{--            <div class="main-header-funeralist-right-items">--}}
{{--                <div class="simple-items">--}}
{{--                    <ul class="list">--}}
{{--                        <li><a href="">For Bussiness</a></li>--}}
{{--                        <li><a href="">Virtual funerals</a></li>--}}
{{--                        <li><a href="">Faq features</a></li>--}}
{{--                        <li><a href="Login.html">Login</a></li>--}}
{{--                        <li><a href="Register.html">Signup</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="funeralist-header-search-box" id="search-box-div">--}}
{{--                    <svg width="22px" viewBox="0 0 24 24">--}}
{{--                        <circle cx="9.54" cy="9.51" r="9.08" fill="none" stroke="currentColor" stroke-miterlimit="10"--}}
{{--                                stroke-width="1.4px"></circle>--}}
{{--                        <path d="m17.87 17.83 5.88 5.89" fill="none" stroke="currentColor" stroke-miterlimit="10"--}}
{{--                              stroke-width="1.4px"></path>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <!-- User Profile -->--}}
{{--                <div class="funeralist-header-user-box" id="user-icon-div">--}}
{{--                    <svg style="width: 22px" id="user-img-svg" viewBox="0 0 24 24">--}}
{{--                        <circle cx="12" cy="6.47" r="5.92" fill="none" stroke="currentColor" stroke-miterlimit="10"--}}
{{--                                stroke-width="1.4px"></circle>--}}
{{--                        <path d="M.43 23.86c0-4.19 2.17-7.62 7.15-7.62h8.84c5 0 7.15 3.43 7.15 7.62" fill="none"--}}
{{--                              stroke="currentColor" stroke-miterlimit="10" stroke-width="1.4px"></path>--}}
{{--                    </svg>--}}
{{--                    <div class="user-dropdown-of-funeralist" id="user-options">--}}
{{--                        <ul class="user-unorderedlist-dropdown">--}}
{{--                            <li><a href="">Profile</a></li>--}}
{{--                            <li><a href="">Profile 2</a></li>--}}
{{--                            <li><a href="">Profile 3</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="small-and-medium-size-navigation-menu" id="sidebar-menu">--}}
{{--            <div class="small-nav-bar-logo-div">--}}
{{--                <img src="{{asset('frontend/assets/images//dummy_logo.')}}webp" alt="" class="my-small-nav-logo" id="my-small-nav-logo" />--}}
{{--            </div>--}}
{{--            <div class="funeralist_sidebar_menu-btn" id="menu-btn">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--            </div>--}}



{{--        </div>--}}
{{--        <!-- Sub menu -->--}}
{{--        <div class="side-bar-of-funeralist">--}}
{{--            <header class="side-bar-of-funeralist-header-of-funeralist">--}}
{{--                <div class="close-btn">--}}
{{--                    <i class="fas fa-times"></i>--}}
{{--                </div>--}}

{{--                <img src="{asset{(frontend/assets/images/'funeralist_black_logo.png')}}" alt="" class="small-sidebar-funeralist-logo" />--}}
{{--            </header>--}}
{{--            <div class="funeralist_sidebar_menu">--}}
{{--                <div class="funeralist_sidebar_menu_item">--}}
{{--                    <a href="#">HOME</a>--}}
{{--                </div>--}}
{{--                <div class="funeralist_sidebar_menu_item">--}}
{{--                    <a class="glamora-sidebar-sub-btn">COLLECTION<i class="fas fa-angle-right dropdown"></i></a>--}}
{{--                    <div class="funeralist_sidebar_menu_item_sub-menu">--}}
{{--                        <a href="#" class="sub-item">Sub Item 01</a>--}}
{{--                        <a href="#" class="sub-item">Sub Item 02</a>--}}
{{--                        <a href="#" class="sub-item">Sub Item 03</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="funeralist_sidebar_menu_item">--}}
{{--                    <a href="#">HOME SERVICE</a>--}}
{{--                </div>--}}
{{--                <div class="funeralist_sidebar_menu_item">--}}
{{--                    <a href="#">THE BRAND</a>--}}
{{--                </div>--}}
{{--                <div class="funeralist_sidebar_menu_item" id="search-of-sidebar-of-funeralist">--}}
{{--                    <a href="#">Search</a>--}}
{{--                </div>--}}

{{--                <div class="funeralist_sidebar_menu_item">--}}
{{--                    <a href="#">WISHLIST</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- SearchBox Large -->--}}
{{--        <div class="search-box-funeralist-large" id="searchBarSection">--}}
{{--            <div class="group">--}}
{{--                <svg class="search-icon-funeralist" aria-hidden="true" viewBox="0 0 24 24">--}}
{{--                    <g>--}}
{{--                        <path--}}
{{--                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">--}}
{{--                        </path>--}}
{{--                    </g>--}}
{{--                </svg>--}}
{{--                <input placeholder="Search" type="search" class="search-input-funeralist" />--}}
{{--            </div>--}}
{{--            <div class="cross-icon-search-of-funeralist-wrapper" id="closing-button-of-search">--}}
{{--                <svg class="cross-icon-searchs" xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 329.26933 329"--}}
{{--                     width="16px">--}}
{{--                    <path--}}
{{--                        d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0" />--}}
{{--                </svg>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="hero_section_home">--}}
{{--        <div class="hero_wrapper">--}}
{{--            <img src="{{asset('frontend/assets/images/dummy_logo.webp')}}" alt="" class="hero_logo" />--}}
{{--            <h1 class="heading_primary">KEEPING MEMORIES ALIVE</h1>--}}
{{--            <h2 class="heading_secandary">--}}
{{--                Beautiful, Free Online Memorials & Tributes--}}
{{--            </h2>--}}
{{--            <h2 class="heading_ternary">Keeper online tributes are a simple way</h2>--}}
{{--            <h2 class="heading_ternary">--}}
{{--                to preserve, celebrate and share a loved one's legacy.--}}
{{--            </h2>--}}
{{--            <button class="custom-button">Click here to create a memorial</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="craft-cermony-home-section">--}}
{{--        <div class="craft-cermony-home-section-wrapper">--}}
{{--            <h4 class="craft-cermony-main-heading heading-color">--}}
{{--                Virtual & Hybrid Memorial Services--}}
{{--            </h4>--}}
{{--            <h1 class="craft-cermony-secandary-heading heading-color">--}}
{{--                Craft the Perfect Ceremony for Your Loved One--}}
{{--            </h1>--}}
{{--            <div class="cermonyTwocolumns">--}}
{{--                <div class="cermony-left-section">--}}
{{--                    <p>--}}
{{--                        NeverFg’s team of experts make it easy to host a virtual or hybrid--}}
{{--                        memorial service to honor the memory of your loved one. When you--}}
{{--                        partner with us, you’ll have access to our:--}}
{{--                    </p>--}}
{{--                    <ul class="cermony-list">--}}
{{--                        <li>--}}
{{--                            <span>Virtual or Hybrid Technology - </span>We provide hybrid,--}}
{{--                            livestream, or fully virtual ceremony options to fit with your--}}
{{--                            needs--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <span>Memorial Coordinators -</span>We’ll help you plan the--}}
{{--                            event structure, coordinate speakers, and craft personalized,--}}
{{--                            meaningful words.--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <span>Technical Assistants -</span>We’ll host and manage your--}}
{{--                            Zoom, planned media, and guest support day-of so you can be--}}
{{--                            fully present.--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <p>--}}
{{--                        And more! We’re honored to work alongside you to help you craft a--}}
{{--                        personalized and heartfelt celebration of life for your loved one.--}}
{{--                    </p>--}}
{{--                    <div class="row bottom-section">--}}
{{--                        <button class="black-background-btn">Learn more</button>--}}
{{--                        <button class="white-background-btn">--}}
{{--                            Book free consultation--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="cermony-right-section">--}}
{{--                    <video src="{{asset('frontend/assets/images/dummy-video')}}.mp4" class="video-item"></video>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="our-free-swipe">--}}
{{--        <div class="swiper-heading-wrapper">--}}
{{--            <h1 class="swipers-main-heading">Our Free Memorials--}}
{{--                Allow You to:</h1>--}}
{{--            <h2 class="swipers-secandary-heading">Send and Receive Tribute Messages--}}
{{--            </h2>--}}
{{--        </div>--}}

{{--        <div class="memorial-swiper-wrapper">--}}
{{--            <div class="swiper">--}}
{{--                <div class="swiper mySwiper">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" loading="lazy" alt="" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" loading="lazy" alt="" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" loading="lazy" alt="" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" loading="lazy" alt="" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" loading="lazy" alt="" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" loading="lazy" alt="" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" loading="lazy" alt="" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" loading="lazy" alt="" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" loading="lazy" />--}}
{{--                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-button-next"></div>--}}
{{--                    <div class="swiper-button-prev"></div>--}}
{{--                    <div class="swiper-pagination"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="our-free-memorials">--}}
{{--        <h1 class="heading-color font-heading-large">Our Free Memorials</h1>--}}
{{--        <ul class="main-box">--}}
{{--            <li class="box active"><span>Store & share a life story</span>--}}

{{--                <div class="detail active">--}}
{{--                    <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="image-of-slide">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="box"><span>Add Pictures & Videos</span>--}}
{{--                <div class="detail">--}}
{{--                    <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="image-of-slide">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="box"><span>Send & Receive tribute Messages</span>--}}

{{--                <div class="detail">--}}
{{--                    <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="image-of-slide">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="box"><span>Build your family tree</span>--}}
{{--                <div class="detail">--}}
{{--                    <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="image-of-slide">--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="box"><span>Share with world and keep it private</span>--}}
{{--                <div class="detail">--}}
{{--                    <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="image-of-slide">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="box"><span>Receive Direction</span>--}}
{{--                <div class="detail">--}}
{{--                    <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="image-of-slide">--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <button class="black-background-btn half-width">All Features</button>--}}
{{--    </div>--}}
{{--    <div class="online-memorial-site-section">--}}
{{--        <h1>Creating an Online Memorial Site is Simple</h1>--}}
{{--        <div class="online-memorial-site-section-list">--}}
{{--            <div class="single-item-of-online-memorial">--}}
{{--                <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="online-memorial-img">--}}
{{--                <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>--}}
{{--                <p class="online-memorial-paragraph">by adding basic or detailed information</p>--}}
{{--            </div>--}}
{{--            <div class="single-item-of-online-memorial">--}}
{{--                <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="online-memorial-img">--}}
{{--                <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>--}}
{{--                <p class="online-memorial-paragraph">by adding basic or detailed information</p>--}}
{{--            </div>--}}
{{--            <div class="single-item-of-online-memorial">--}}
{{--                <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="online-memorial-img">--}}
{{--                <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>--}}
{{--                <p class="online-memorial-paragraph">by adding basic or detailed information</p>--}}
{{--            </div>--}}
{{--            <div class="single-item-of-online-memorial">--}}
{{--                <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="online-memorial-img">--}}
{{--                <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>--}}
{{--                <p class="online-memorial-paragraph">by adding basic or detailed information</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button class="black-background-btn half-width">View Sample Memorial</button>--}}
{{--    </div>--}}
{{--    <div class="share-memorial-section">--}}
{{--        <div class="share-memorial-insider">--}}
{{--            <h1>Create a Memorial Website</h1>--}}
{{--            <h2>Preserve and share memories of your loved one.</h2>--}}
{{--            <div class="share-memorial-form">--}}
{{--                <h1>I WANT TO SHARE MEMORIES OF</h1>--}}
{{--                <div class="row full-width">--}}
{{--                    <input placeholder="Enter first name" class="input-style" type="text">--}}
{{--                    <input placeholder="Enter last name" class="input-style" type="text">--}}

{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <button class="black-background-btn full-width">Get Started</button>--}}
{{--                </div>--}}
{{--                <p><a href="">Learn more</a> about our memorial website</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="are-you-funeral-service-provider-section">--}}
{{--        <div class="service-provider-insider">--}}
{{--            <h1>ARE YOU A CEMETERY OR FUNERAL SERVICE PROVIDER?</h1>--}}
{{--            <button class="custom-button">--}}
{{--                Learn more about NeverFg partnership--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>--}}




{{--    <script>--}}
{{--        var getslide = $('.main-box li').length - 1;--}}
{{--        var slidecal = 30 / getslide + '%';--}}

{{--        $('.box').css({ "width": slidecal });--}}

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
{{--                    "{{asset('frontend/assets/images/funeralist_white_logo.png')}}";--}}
{{--                //change the logo small logo--}}
{{--                document.getElementById("my-small-nav-logo").src =--}}
{{--                    "{{asset('frontend/assets/images/funeralist_white_logo.png')}}";--}}

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
{{--                    "{{asset('frontend/assets/images/funeralist_black_logo.png')}}";--}}
{{--                // changing small logo--}}
{{--                document.getElementById("my-small-nav-logo").src =--}}
{{--                    "{{asset('frontend/assets/images/funeralist_black_logo.png')}}";--}}

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
{{--                    "{{asset('frontend/assets/images/funeralist_white_logo.png')}}";--}}
{{--                //changing the small screen logo--}}
{{--                document.getElementById("my-small-nav-logo").src =--}}
{{--                    "{{asset('frontend/assets/images/funeralist_white_logo.png')}}";--}}

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
{{--        $(document).on("click", function (a) {--}}

{{--            //user image on click--}}
{{--            if ($(a.target).is("#user-img-svg") === false) {--}}
{{--                console.log("User click outside");--}}
{{--                $("#user-options").removeClass("show-user-profile");--}}
{{--            }--}}
{{--        });--}}
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
{{--    </script>--}}
{{--@endsection--}}
