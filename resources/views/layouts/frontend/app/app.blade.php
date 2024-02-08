<!DOCTYPE html>
<html lang="en">

@include('layouts.frontend.app.head')

<body>
<div class="main-header-funeralist-wrapper">
    @include('layouts.frontend.app.navbar')
</div>
@if(request()->is('/') || request()->is('features')|| request()->is('faqs') || request()->is('virtual-funeral') || request()->is('for-business') )
    @if(request()->is('/') || request()->is('features'))
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
                                @if(request()->is('/') || request()->is('features')|| request()->is('faqs') || request()->is('virtual-funeral') || request()->is('for-business') )

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


        @yield('CreatememorialJS')
        @yield('footerJS')


</body>

</html>
















