<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/Home.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/footer.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"
    ></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
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
<body>
<div class="main-header-funeralist-wrapper">
    <div class="main-header-funeralist" id="header">
        <div class="main-header-funeralist-left-items">
            <!-- <img
              src="./funeralist_white_logo.png"
              alt=""
              class="logo-funeralist"
              id="large-screen-funeralist-logo"
            /> -->
            Keeper
        </div>
        <div class="main-header-funeralist-right-items">
            <div class="simple-items">
                <ul class="list">
                    <li><a href="">For Bussiness</a></li>
                    <li><a href="">Virtual funerals</a></li>
                    <li><a href="">Faq features</a></li>
                    <li><a href="Login.html">Login</a></li>
                    <li><a href="Register.html">Signup</a></li>
                </ul>
            </div>
            <div class="funeralist-header-search-box" id="search-box-div">
                <svg width="22px" viewBox="0 0 24 24">
                    <circle
                        cx="9.54"
                        cy="9.51"
                        r="9.08"
                        fill="none"
                        stroke="currentColor"
                        stroke-miterlimit="10"
                        stroke-width="1.4px"
                    ></circle>
                    <path
                        d="m17.87 17.83 5.88 5.89"
                        fill="none"
                        stroke="currentColor"
                        stroke-miterlimit="10"
                        stroke-width="1.4px"
                    ></path>
                </svg>
            </div>
            <!-- User Profile -->
            <div class="funeralist-header-user-box" id="user-icon-div">
                <svg style="width: 22px" id="user-img-svg" viewBox="0 0 24 24">
                    <circle
                        cx="12"
                        cy="6.47"
                        r="5.92"
                        fill="none"
                        stroke="currentColor"
                        stroke-miterlimit="10"
                        stroke-width="1.4px"
                    ></circle>
                    <path
                        d="M.43 23.86c0-4.19 2.17-7.62 7.15-7.62h8.84c5 0 7.15 3.43 7.15 7.62"
                        fill="none"
                        stroke="currentColor"
                        stroke-miterlimit="10"
                        stroke-width="1.4px"
                    ></path>
                </svg>
                <div class="user-dropdown-of-funeralist" id="user-options">
                    <ul class="user-unorderedlist-dropdown">
                        <li><a href="">Profile</a></li>
                        <li><a href="">Profile 2</a></li>
                        <li><a href="">Profile 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="small-and-medium-size-navigation-menu" id="sidebar-menu">
        <div class="small-nav-bar-logo-div">
            <img
                src="./assets//dummy_logo.webp"
                alt=""
                class="my-small-nav-logo"
                id="my-small-nav-logo"
            />
        </div>
        <div class="funeralist_sidebar_menu-btn" id="menu-btn">
            <i class="fas fa-bars"></i>
        </div>



    </div>
    <!-- Sub menu -->
    <div class="side-bar-of-funeralist">
        <header class="side-bar-of-funeralist-header-of-funeralist">
            <div class="close-btn">
                <i class="fas fa-times"></i>
            </div>

            <img
                src="funeralist_black_logo.png"
                alt=""
                class="small-sidebar-funeralist-logo"
            />
        </header>
        <div class="funeralist_sidebar_menu">
            <div class="funeralist_sidebar_menu_item">
                <a href="#">HOME</a>
            </div>
            <div class="funeralist_sidebar_menu_item">
                <a class="glamora-sidebar-sub-btn"
                >COLLECTION<i class="fas fa-angle-right dropdown"></i
                    ></a>
                <div class="funeralist_sidebar_menu_item_sub-menu">
                    <a href="#" class="sub-item">Sub Item 01</a>
                    <a href="#" class="sub-item">Sub Item 02</a>
                    <a href="#" class="sub-item">Sub Item 03</a>
                </div>
            </div>
            <div class="funeralist_sidebar_menu_item">
                <a href="#">HOME SERVICE</a>
            </div>
            <div class="funeralist_sidebar_menu_item">
                <a href="#">THE BRAND</a>
            </div>
            <div
                class="funeralist_sidebar_menu_item"
                id="search-of-sidebar-of-funeralist"
            >
                <a href="#">Search</a>
            </div>

            <div class="funeralist_sidebar_menu_item">
                <a href="#">WISHLIST</a>
            </div>
        </div>
    </div>

    <!-- SearchBox Large -->
    <div class="search-box-funeralist-large" id="searchBarSection">
        <div class="group">
            <svg
                class="search-icon-funeralist"
                aria-hidden="true"
                viewBox="0 0 24 24"
            >
                <g>
                    <path
                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"
                    ></path>
                </g>
            </svg>
            <input
                placeholder="Search"
                type="search"
                class="search-input-funeralist"
            />
        </div>
        <div
            class="cross-icon-search-of-funeralist-wrapper"
            id="closing-button-of-search"
        >
            <svg
                class="cross-icon-searchs"
                xmlns="http://www.w3.org/2000/svg"
                height="16px"
                viewBox="0 0 329.26933 329"
                width="16px"
            >
                <path
                    d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"
                />
            </svg>
        </div>
    </div>
</div>
<div class="hero_section_home">
    <div class="hero_wrapper">
        <img src="./assets/dummy_logo.webp" alt="" class="hero_logo" />
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
                        Book free consultation
                    </button>
                </div>
            </div>
            <div class="cermony-right-section">
                <video src="./assets/dummy-video.mp4" class="video-item"></video>
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
        <div  class="swiper" >
            <div  class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" loading="lazy" alt=""/>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" loading="lazy" alt=""/>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" loading="lazy" alt=""/>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" loading="lazy" alt=""/>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" loading="lazy" alt=""/>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" loading="lazy" alt=""/>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" loading="lazy" alt=""/>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" loading="lazy" alt=""/>
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
                <img src="./assets/hero_background_1.jpg" alt="" class="image-of-slide">
            </div>
        </li>
        <li class="box"><span>Add Pictures & Videos</span>
            <div class="detail">
                <img src="./assets/hero_2_backgound.jpg" alt="" class="image-of-slide">
            </div>
        </li>
        <li class="box"><span>Send & Receive tribute Messages</span>

            <div class="detail">
                <img src="./assets/hero_background_1.jpg" alt="" class="image-of-slide">
            </div>
        </li>
        <li class="box"><span>Build your family tree</span>
            <div class="detail">
                <img src="./assets/hero_2_backgound.jpg" alt="" class="image-of-slide">
            </div>
        </li>

        <li class="box"><span>Share with world and keep it private</span>
            <div class="detail">
                <img src="./assets/hero_background_1.jpg" alt="" class="image-of-slide">
            </div>
        </li>
        <li class="box"><span>Receive Direction</span>
            <div class="detail">
                <img src="./assets/hero_background_1.jpg" alt="" class="image-of-slide">
            </div>
        </li>
    </ul>
    <button class="black-background-btn half-width">All Features</button>
</div>
<div class="online-memorial-site-section">
    <h1>Creating an Online Memorial Site is Simple</h1>
    <div class="online-memorial-site-section-list">
        <div class="single-item-of-online-memorial">
            <img src="./assets/hero_2_backgound.jpg" alt="" class="online-memorial-img">
            <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>
            <p class="online-memorial-paragraph">by adding basic or detailed information</p>
        </div>
        <div class="single-item-of-online-memorial">
            <img src="./assets/hero_2_backgound.jpg" alt="" class="online-memorial-img">
            <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>
            <p class="online-memorial-paragraph">by adding basic or detailed information</p>
        </div><div class="single-item-of-online-memorial">
            <img src="./assets/hero_2_backgound.jpg" alt="" class="online-memorial-img">
            <h3 class="online-memorial-main-heading">CREATE A FREE MEMORIAL</h3>
            <p class="online-memorial-paragraph">by adding basic or detailed information</p>
        </div><div class="single-item-of-online-memorial">
            <img src="./assets/hero_2_backgound.jpg" alt="" class="online-memorial-img">
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
<div class="plan-a-tree-section">
    <div class="two-columns-of-tree">
        <div class="left-col-tree-memorial">
            <h2 class="heading-first">Plant a tree as a living tribute</h2>
            <h3 class="heading-two">Memorial Trees by Keeper</h3>
            <h6 class="heading-three">
                With our partnership with American Forests, you can donate a
                memorial tree in honor of your loved one.
            </h6>
            <div class="black-background-btn half-width">Learn More</div>
        </div>
        <div class="right-col-tree-memorial">
            <img src="./assets/dummy_logo.webp" alt="" class="tree-image-size" />
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-insider">
        <div class="row-one">
            <div class="logo-section">
                <img src="./assets/dummy_logo.webp" alt="" class="footer-logo" />
            </div>
            <div class="site-links-section">
                <div class="links-col-1">
                    <a href="">About Us</a>
                    <a href="">Virtual Funerals</a>
                    <a href="">For Business</a>
                    <a href="">Features</a>
                </div>
                <div class="links-col-2">
                    <a href="">Keeper Plus </a>
                    <a href="">Contact</a>
                    <a href="">Community</a>
                    <a href="">API ACCESS</a>
                </div>
                <div class="links-col-3">
                    <a href="">FAQs</a>
                    <a href="">Privacy</a>
                    <a href="">Terms</a>
                    <a href="">Career</a>
                </div>
            </div>
            <div class="section-social-links">
                <h2 class="footer-follow-us">Follow us on<h2>
                        <div class="parent">
                            <div class="child child-1">
                                <button class="button btn-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="1em"
                                        viewBox="0 0 512 512"
                                        fill="#1e90ff"
                                    >
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="child child-2">
                                <button class="button btn-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="1em"
                                        viewBox="0 0 448 512"
                                        fill="#ff00ff"
                                    >
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="child child-3">
                                <button class="button btn-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="1em"
                                        viewBox="0 0 496 512"
                                    >
                                        <path
                                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="child child-4">
                                <button class="button btn-4">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="1em"
                                        viewBox="0 0 320 512"
                                        fill="#4267B2"
                                    >
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row-two">
            <div class="row-two-insider">
                <h2>Excellent  </h2>
                <h4>4.3 out of 5</h4>
            </div>

        </div>
    </div>
    <div class="footer-last-heading">
        <h2>Copyright © 2023 Keeper Inc. - All Rights Reserved.</h2>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var getslide = $('.main-box li').length - 1;
    var slidecal = 30/getslide+'%';

    $('.box').css({"width": slidecal});

    $('.box').click(function(){
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
</body>
</html>
