<!DOCTYPE html>
<html lang="en">

@include('layouts.extra.head')

<body>
<div class="main-header-funeralist-wrapper">
@include('layouts.extra.navbar')
</div>

@if(request()->is('/') || request()->is('features'))
    <div class="hero_section_home">
@elseif(request()->is('virtual-funeral'))
    <div class="hero_section_virtual_funeral">
@elseif(request()->is('faqs'))
    <div class="hero_section_faqs">
@elseif(request()->is('for-business'))
            <div class="hero_section_for_business">
@endif
        @include('layouts.extra.herosection')
    </div>


@yield('content')

@if(request()->is('/') || request()->is('faq') || request()->is('feature'))
    <div class="plan-a-tree-section">
        @include('layouts.extra.plant-tree')
    </div>

@endif
<div class="footer">
    @include('layouts.extra.footer')
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

@yield('indexJS')
@yield('faqsJS')
@yield('featuresJS')
@yield('businessJS')
@yield('virtualJS')

</body>

</html>
















