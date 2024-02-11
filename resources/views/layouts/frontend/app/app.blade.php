<!DOCTYPE html>
<html lang="en">

@include('layouts.frontend.app.head')

<body>
<div class="main-header-funeralist-wrapper">
    @include('layouts.frontend.app.navbar')
</div>
@if(request()->is('/') || request()->is('Terms-and-Privacy-Policy') || request()->is('features')|| request()->is('faqs') || request()->is('virtual-funeral') || request()->is('for-business') )
    @if(request()->is('/') || request()->is('Terms-and-Privacy-Policy') || request()->is('features'))
        <div class="hero_section_home">
            @elseif(request()->is('virtual-funeral'))
                <div class="hero_section_virtual_funeral">
                    @elseif(request()->is('faqs'))
                        <div class="hero_section_faqs">
                            @else(request()->is('for-business'))
                                <div class="hero_section_for_business">
                                    @endif
                                    @include('layouts.frontend.app.pages.herosection')
                                </div>
                                @else

                                    {{--                                Profile--}}

                                    <!-- Top section -->
                                    <section class="profileWrapper">
                                        @include('layouts.frontend.app.profile.dpcover')
                                    </section>

                                @endif







                                @yield('content')
                                @if(request()->is('/') || request()->is('Terms-and-Privacy-Policy')|| request()->is('features')|| request()->is('faqs') || request()->is('virtual-funeral') || request()->is('for-business') )

                                    @if(request()->is('/') || request()->is('faq') || request()->is('feature'))
                                        <div class="plan-a-tree-section">
                                            @include('layouts.frontend.app.pages.plant-tree')
                                        </div>

                                    @endif






                                    <div class="footer">
                                        @include('layouts.frontend.app.footer')
                                    </div>
                                @endif

                                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                                <script>
                                    var getslide = $('.main-box li').length - 1;
                                    var slidecal = 30 / getslide + '%';

                                    $('.box').css({"width": slidecal});

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
                                    // $(document).on("click", function (a) {
                                    //
                                    //     //user image on click
                                    //     if ($(a.target).is("#user-img-svg") === false) {
                                    //         console.log("User click outside");
                                    //         $("#user-options").removeClass("show-user-profile");
                                    //     }
                                    // });
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
                                    function redirectToMemorialSignup() {
                                        var firstName = document.getElementById('firstNameInput').value.trim();
                                        var lastName = document.getElementById('lastNameInput').value.trim();

                                        if (firstName !== '' && lastName !== '') {
                                            var url = '{{ route("memorialsignup") }}' + '?firstName=' + encodeURIComponent(firstName) + '&lastName=' + encodeURIComponent(lastName);
                                            window.location.href = url;
                                        } else {
                                            alert('Please fill in both first name and last name.');
                                        }
                                    }




                                    function redirectToCorrectPage() {
                                        var firstName = document.getElementById('firstNameInput').value.trim();
                                        var lastName = document.getElementById('lastNameInput').value.trim();

                                        if (firstName !== '' && lastName !== '') {
                                            @if(auth()->check())
                                                window.location.href = '{{ route('Creatememorial',auth()->user()->id) }}?firstName=' + encodeURIComponent(firstName) + '&lastName=' + encodeURIComponent(lastName);
                                            @else
                                                window.location.href = '{{ route('memorialsignup') }}?firstName=' + encodeURIComponent(firstName) + '&lastName=' + encodeURIComponent(lastName);
                                            @endif
                                        } else {
                                            alert('Please fill in both first name and last name.');
                                        }
                                    }

                                </script>
        {{--Pages--}}
        @yield('indexJS')
        @yield('faqJS')
        @yield('featuresJS')
        @yield('businessJS')
        @yield('virtualJS')

        {{--Profile--}}
        @yield('memorialProfileJS')
        @yield('keeperJS')
        @yield('mementosJS')
        @yield('profileJS')
        @yield('familyJS')


        @yield('CreatememorialJS')
        @yield('footerJS')


</body>

</html>
















