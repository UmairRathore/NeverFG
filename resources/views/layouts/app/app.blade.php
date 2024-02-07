<!DOCTYPE html>
<html lang="en">

@include('layouts.app.head')

<body>
<div class="main-header-funeralist-wrapper">
    @include('layouts.app.navbar')
</div>

{{--(frontend pages in if) (profile pages in else)--}}
@if(request()->is('/') || request()->is('features')|| request()->is('faqs')|| request()->is('for-business')|| request()->is('virtual-funeral'))
    @if(request()->is('/') || request()->is('features'))
        <div class="hero_section_home">
            @elseif(request()->is('virtual-funeral'))
                <div class="hero_section_virtual_funeral">
                    @elseif(request()->is('faqs'))
                        <div class="hero_section_faqs">
                            @elseif(request()->is('for-business'))
                                <div class="hero_section_for_business">
                                    @endif
                                    @include('layouts.app.herosection')
                                </div>

                            @else
                                {{--Profile--}}
                                <!-- Top section -->
                                <section class="profileWrapper">
                                    @include('layouts.frontend.app.DpCover')
                                </section>
                                <!-- Tabs section -->
                                <section class="profile-content-wrapper">
                                    @include('layouts.frontend.app.tabs')
                                </section>
                            @endif
                            @yield('content')

                            @if(request()->is('/') || request()->is('faq') || request()->is('feature'))
                                <div class="plan-a-tree-section">
                                    @include('layouts.app.plant-tree')
                                </div>Z
                            @endif


                            <div class="footer">
                                @include('layouts.app.footer')
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        @yield('indexJS')
        @yield('faqJS')
        @yield('featuresJS')
        @yield('businessJS')
        @yield('virtualJS')
        @yield('memorialProfile')

</body>

</html>


<!-- Top section -->
<section class="profileWrapper">
    @include('layouts.frontend.app.DpCover')
</section>
<!-- Tabs section -->
<section class="profile-content-wrapper">
    @include('layouts.frontend.app.tabs')
</section>
@yield('content')

@include('layouts.app.footer')














