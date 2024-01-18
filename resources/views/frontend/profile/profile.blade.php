@extends('layouts.frontend.profilelayout.master')
@section('title', 'Profile')
@section('content')

    <!-- Top section -->
    <section class="profileWrapper">
        <div class="profile-common-top-wrapper">
            <div class="background-img-wrapper">
                <img src="{{asset('frontend/assets/images/profileBackground.jpg')}}" alt="" class="back-img"/>
            </div>
            <div class="user-profile-section-2-wrapper">
                <div class="profile-img-of-user">
                    <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="profile-img-user"/>
                    <div class="edit-profile-wrapper">
                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M18 9.99982L14 5.99982M2.5 21.4998L5.88437 21.1238C6.29786 21.0778 6.5046 21.0549 6.69785 20.9923C6.86929 20.9368 7.03245 20.8584 7.18289 20.7592C7.35245 20.6474 7.49955 20.5003 7.79373 20.2061L21 6.99982C22.1046 5.89525 22.1046 4.10438 21 2.99981C19.8955 1.89525 18.1046 1.89524 17 2.99981L3.79373 16.2061C3.49955 16.5003 3.35246 16.6474 3.24064 16.8169C3.14143 16.9674 3.06301 17.1305 3.00751 17.302C2.94496 17.4952 2.92198 17.702 2.87604 18.1155L2.5 21.4998Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <label for="" class="label-of-edit-profile">
                            Edit profile
                            <input type="file" class="edit-profile-file"/>
                        </label>
                    </div>
                </div>
                <div class="user-content">
                    <div class="user-content-top-row">
                        <h1 class="user-name-main-heading">User Name with last name</h1>
                        <div class="section-social-links">
                            <div class="parent">
                                <div class="child child-1">
                                    <button class="button btn-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                             fill="#1e90ff">
                                            <path
                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="child child-2">
                                    <button class="button btn-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                             fill="#ff00ff">
                                            <path
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="child child-3">
                                    <button class="button btn-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512">
                                            <path
                                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="child child-4">
                                    <button class="button btn-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"
                                             fill="#4267B2">
                                            <path
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-content-bottom-row">
                        <div class="navigation-of-logged-in-profile">
                            <div class="single-item">
                                <a href="LoggedIn_Profile.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/xzalkbkz.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Profile
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="MementosPage.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/rehjpyyh.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Mementos
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="Keeper.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/khheayfj.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>

                                    Keeper
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="Family.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/kndkiwmf.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Family
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="Events.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/qvyppzqz.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Events
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="Message.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/aycieyht.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Messages
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="KeeperPlusPage.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/zrkkrrpl.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Keeper plus
                                </a>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <button class="black-background-btn">
                                + Create a Memorial
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Edit Profile content -->
    <div class="margin-all">
        <!-- Profile section -->
        <div class="grid-of-not-logged-in-profile">
            <div class="profile-icon-content ">
                <div class="form-of-unlogged-in-user width-800px">
                    <!-- Header -->
                    <div class="header-of-form-profile margin-top no-border">
                        <div class="profile-header-without-logged-in ">
                            <div class="profile-header-without-logged-in-image-wrapper">
                                <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="profile-without-logged-in-image">

                            </div>
                            <h1>Ghulam Dastgeer</h1>
                            <h2>September 12th, 1970 - November 1st, 2013</h2>
                            <p>Always In Our Thoughts, Forever In Our Hearts.</p>
                        </div>

                    </div>
                    <!-- Biography -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">Biography</h1>
                        <p>Linda Hughes was born on September 12, 1970, in the vibrant city of Chicago, Illinois. She was a
                            kind-hearted soul who
                            always had a smile on her face and a willingness to help others in need. Her favorite saying,
                            "It is nice to be
                            important, but it's more important to be nice," truly embodied the essence of her personality.
                        </p>
                        <p>She completed her high school education at Chicago High from 1982 to 1988. In 1992, she welcomed
                            her loving son Jeffrey
                            into the world, followed by the birth of her beautiful daughter Sara in 1996. Her love for her
                            family was boundless, and
                            her children served as her motivation to excel in her career.</p>
                    </div>
                    <!-- About -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">About</h1>
                        <div class="cols-of-unlogged-in-two-cols">
                            <div class="cols-of-unlogged-in-two-cols-left">
                                <svg width="90px" height="90px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M16 5L18 7L22 3M22 12V17.2C22 18.8802 22 19.7202 21.673 20.362C21.3854 20.9265 20.9265 21.3854 20.362 21.673C19.7202 22 18.8802 22 17.2 22H6.8C5.11984 22 4.27976 22 3.63803 21.673C3.07354 21.3854 2.6146 20.9265 2.32698 20.362C2 19.7202 2 18.8802 2 17.2V6.8C2 5.11984 2 4.27976 2.32698 3.63803C2.6146 3.07354 3.07354 2.6146 3.63803 2.32698C4.27976 2 5.11984 2 6.8 2H12M2.14551 19.9263C2.61465 18.2386 4.16256 17 5.99977 17H12.9998C13.9291 17 14.3937 17 14.7801 17.0769C16.3669 17.3925 17.6073 18.6329 17.9229 20.2196C17.9998 20.606 17.9998 21.0707 17.9998 22M14 9.5C14 11.7091 12.2091 13.5 10 13.5C7.79086 13.5 6 11.7091 6 9.5C6 7.29086 7.79086 5.5 10 5.5C12.2091 5.5 14 7.29086 14 9.5Z"
                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="cols-of-unlogged-in-two-cols-right">

                                <div class="nested-two-cols">
                                    <p class="row-heading">Name</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Date of Birth</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Date of Death</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Home Town</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading-1">Other City</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading-1">Interests</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading-1">Favourite Saying</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading-1">In Memoriam Donation</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- Memorial -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">Memorial</h1>
                        <div class="cols-of-unlogged-in-two-cols">
                            <div class="cols-of-unlogged-in-two-cols-left">
                                <svg height="90px" width="90px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                                     fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <style type="text/css">
                                            .st0 {
                                                fill: #000000;
                                            }
                                        </style>
                                        <g>
                                            <path class="st0"
                                                  d="M405.972,62.12c-82.83-82.826-217.114-82.826-299.94,0c-82.815,82.811-82.815,217.11,0,299.929L255.999,512 l149.972-149.952C488.782,279.23,488.782,144.93,405.972,62.12z M255.999,83.79c32.118,0,58.156,26.039,58.156,58.16 c0,32.129-26.039,58.16-58.156,58.16c-32.126,0-58.164-26.031-58.164-58.16C197.835,109.829,223.874,83.79,255.999,83.79z M172.552,305.423c0-46.084,37.36-83.448,83.448-83.448c46.08,0,83.444,37.364,83.444,83.448H172.552z">
                                            </path>
                                        </g>
                                    </g>
                            </svg>
                            </div>

                            <div class="cols-of-unlogged-in-two-cols-right">

                                <div class="nested-two-cols">
                                    <p class="row-heading">Funeral Home</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Cemetery</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Address</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Location</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading-1">Geolocation</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- Google Maps -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <div id="googleMap" style="width:100%;height:200px;"></div>
                    </div>
                    <!-- Family -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">Family</h1>
                        <div class="cols-of-unlogged-in-two-cols">
                            <div class="cols-of-unlogged-in-two-cols-left">
                                <svg height="90px" width="90px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                                     fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <style type="text/css">
                                            .st0 {
                                                fill: #000000;
                                            }
                                        </style>
                                        <g>
                                            <path class="st0"
                                                  d="M78.641,118.933c22.88,0,41.416-18.551,41.416-41.414c0-22.887-18.536-41.423-41.416-41.423 c-22.887,0-41.422,18.536-41.422,41.423C37.218,100.382,55.754,118.933,78.641,118.933z">
                                            </path>
                                            <path class="st0"
                                                  d="M255.706,228.73v0.062c0.101,0,0.194-0.031,0.294-0.031c0.101,0,0.194,0.031,0.294,0.031v-0.062 c15.562-0.317,28.082-12.976,28.082-28.601c0-15.648-12.52-28.299-28.082-28.616v-0.063c-0.101,0-0.194,0.031-0.294,0.031 c-0.1,0-0.193-0.031-0.294-0.031v0.063c-15.563,0.317-28.082,12.968-28.082,28.616C227.623,215.754,240.143,228.413,255.706,228.73 z">
                                            </path>
                                            <path class="st0"
                                                  d="M433.359,118.933c22.887,0,41.423-18.551,41.423-41.414c0-22.887-18.536-41.423-41.423-41.423 c-22.88,0-41.416,18.536-41.416,41.423C391.944,100.382,410.48,118.933,433.359,118.933z">
                                            </path>
                                            <path class="st0"
                                                  d="M470.097,138.553h-36.312h-18.404c-21.106,0-40.432,11.831-50.033,30.622l-33.494,97.967 c-1.154,2.246-3.298,3.84-5.792,4.282c-2.493,0.442-5.048-0.309-6.914-2.036l-20.836-18.04c-6.233-5.769-14.408-8.973-22.902-8.973 H256h-19.41c-8.494,0-16.669,3.204-22.902,8.973l-20.835,18.04c-1.866,1.727-4.421,2.478-6.914,2.036 c-2.492-0.442-4.637-2.036-5.791-4.282l-33.495-97.967c-9.6-18.791-28.926-30.622-50.032-30.622H78.215H41.902 C21.834,138.553,0,160.387,0,180.464v139.211c0,10.034,8.13,18.171,18.164,18.171c4.939,0,0,0,12.682,0l6.906,118.725 c0,10.676,8.664,19.332,19.34,19.332c4.506,0,12.814,0,21.122,0c8.308,0,16.616,0,21.122,0c10.676,0,19.34-8.656,19.34-19.332 l6.906-118.725l-0.085-84.766c0-1.339,0.914-2.493,2.222-2.818c1.309-0.31,2.648,0.309,3.26,1.502l26.572,65.401 c3.206,6.256,9.152,10.654,16.074,11.885c6.922,1.231,14.022-0.844,19.186-5.613l25.426-18.729 c0.852-0.782,2.083-0.984,3.136-0.542c1.061,0.473,1.743,1.518,1.743,2.663l0.093,73.508l4.777,82.187 c0,7.387,6.001,13.379,13.395,13.379c3.113,0,8.865,0,14.618,0c5.753,0,11.506,0,14.618,0c7.394,0,13.394-5.992,13.394-13.379 l4.778-82.187l0.093-73.508c0-1.146,0.681-2.19,1.742-2.663c1.053-0.442,2.284-0.24,3.136,0.542l25.427,18.729 c5.164,4.769,12.264,6.844,19.186,5.613c6.922-1.231,12.868-5.629,16.073-11.885l26.573-65.401 c0.611-1.192,1.951-1.812,3.259-1.502c1.309,0.325,2.222,1.478,2.222,2.818l-0.085,84.766l6.906,118.725 c0,10.676,8.664,19.332,19.341,19.332c4.507,0,12.814,0,21.122,0c8.308,0,16.616,0,21.121,0c10.677,0,19.342-8.656,19.342-19.332 l6.906-118.725c12.682,0,7.742,0,12.682,0c10.034,0,18.164-8.137,18.164-18.171V180.464 C512,160.387,490.166,138.553,470.097,138.553z">
                                            </path>
                                        </g>
                                    </g>
                            </svg>
                            </div>

                            <div class="cols-of-unlogged-in-two-cols-right">

                                <div class="nested-two-cols">
                                    <p class="row-heading">Significant Other</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Parents</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Grand-Parents</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- Family tree link -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <div class="align-items-to-end">
                            <a href="" class="famil-tree-right-align">View Family tree</a>
                        </div>
                    </div>
                    <!-- Milestone -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">MileStones</h1>
                        <div class="cols-of-unlogged-in-two-cols">
                            <div class="cols-of-unlogged-in-two-cols-left">
                                <svg width="90px" height="90px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M5.75 1C6.16421 1 6.5 1.33579 6.5 1.75V3.6L8.22067 3.25587C9.8712 2.92576 11.5821 3.08284 13.1449 3.70797L13.3486 3.78943C14.9097 4.41389 16.628 4.53051 18.2592 4.1227C19.0165 3.93339 19.75 4.50613 19.75 5.28669V12.6537C19.75 13.298 19.3115 13.8596 18.6864 14.0159L18.472 14.0695C16.7024 14.5119 14.8385 14.3854 13.1449 13.708C11.5821 13.0828 9.8712 12.9258 8.22067 13.2559L6.5 13.6V21.75C6.5 22.1642 6.16421 22.5 5.75 22.5C5.33579 22.5 5 22.1642 5 21.75V1.75C5 1.33579 5.33579 1 5.75 1Z"
                                            fill="#000000"></path>
                                    </g>
                                </svg>
                            </div>

                            <div class="cols-of-unlogged-in-two-cols-right">

                                <div class="nested-two-cols">
                                    <p class="row-heading">1982 - 1988</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">1982 - 1988</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">1982 - 1988</p>
                                    <p class="row-heading">Lorem ipsum dolor sit amet consectetur
                                    </p>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>


            </div>
            <div class="momentos-section">
                <div class="insider">
                    <div class="div-1">
                        <h1 class="mem-heading-main">Momentos</h1>
                        <div class="pics-wrapper">
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                            <div class="image-wrapper-of-not-logged-in-profile">
                                <img src="{{asset('frontend/assets/images/bird.webp')}}" alt="" class="mem-pic">
                            </div>
                        </div>
                    </div>
                    <div class="div-centent-center">
                        <h1>Celebration of Life</h1>
                        <p>November 10th, 2021 at 1:00pm</p>
                        <button class="black-background-btn">Event Detail & VSP</button>
                    </div>
                    <div class="div-centent-center">
                        <h1>Linda's Virtual Memorial Service</h1>
                        <p>December 30th, 2023 at 5:30pm
                            Funeral Home
                            Austin</p>
                        <button class="black-background-btn">Event Detail & VSP</button>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- Comment and Replies -->
    <div class="margin-all">
        <div class="comments-and-replies">
            <div class="comment-wrapper">
                <div class="two-cols-of-comment-and-replies">
                    <div class="two-cols-of-comment-and-replies-left">
                        <div class="img-wrapper-of-comment">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="comment-img">
                        </div>
                    </div>
                    <div class="two-cols-of-comment-and-replies-right">
                        <p class="c-r-user-name">username published a tribute <span class="time-of-comment">4 years
                            ago</span></p>
                        <p class="c-r-comment-data">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
                            doloremque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quasi, fugit impedit
                            ea dolorem, nihil distinctio dignissimos excepturi, iusto sapiente tenetur quas necessitatibus
                            accusantium minima voluptate sint fuga placeat ipsum?</p>
                    </div>
                </div>
            </div>
            <div class="reply-wrapper">
                <div class="two-cols-of-comment-and-replies">
                    <div class="two-cols-of-comment-and-replies-left">
                        <div class="img-wrapper-of-comment">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="comment-img">
                        </div>
                    </div>
                    <div class="two-cols-of-comment-and-replies-right">
                        <p class="c-r-user-name">username published a tribute <span class="time-of-comment">4 years
                            ago</span></p>
                        <p class="c-r-comment-data">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
                            doloremque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quasi, fugit impedit
                            ea dolorem, nihil distinctio dignissimos excepturi, iusto sapiente tenetur quas necessitatibus
                            accusantium minima voluptate sint fuga placeat ipsum?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-section">

            <div class="chat-wrapper">
                <div class="two-cols-of-chat-wrapper">
                    <div class="chat-left-section">
                        <div class="chat-usr-img-wrapper">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="chat-usr-photo">
                        </div>
                    </div>

                    <div class="chat-right-section">
                    <textarea class="txt-area-design" name="" id="" cols="50" rows="8"
                              placeholder="Write your comment here" class="input-design"></textarea>
                        <button class="black-background-btn btn-width">Post comment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Comment -->
    <div class="margin-all">
        <div class="chat-section">

            <div class="chat-wrapper">
                <div class="two-cols-of-chat-wrapper">
                    <div class="chat-left-section">
                        <div class="chat-usr-img-wrapper">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="chat-usr-photo">
                        </div>
                    </div>

                    <div class="chat-right-section">
                    <textarea class="txt-area-design" name="" id="" cols="50" rows="8"
                              placeholder="Write your comment here" class="input-design"></textarea>
                        <button class="black-background-btn btn-width">Post comment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('profile')
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>
@endsection
