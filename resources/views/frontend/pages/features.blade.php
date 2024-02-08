@extends('layouts.frontend.app.app')
@section('title', ' Features')

@section('content')


    <div class="concept-of-websiteName-section">
        <div class="concept-of-websiteName-section-wrapper">
            <div class="cermonyTwocolumns">
                <div class="cermony-left-section">
                    <h1 class="craft-cermony-main-heading heading-color">
                        The concept of Keeper
                    </h1>
                    <p>
                        You become the Keeper of your loved one’s memorial page when you
                        create your account. Keep your loved one’s memory alive by sharing
                        their life story, uploading photographs and videos, creating their
                        family tree and inviting others to collaborate with you. As their
                        Keeper, you can change, add or hide any content at any time.
                        Keepers also have total control over who can visit and post on
                        their loved one’s memorial page and delete any posts and images
                        added by others.
                    </p>
                </div>
                <div class="cermony-right-section">
                    <div class="share-memorial-insider">
                        <div class="share-memorial-form">
                            <div class="form-headin-wrapper">
                                <h2 class="form-main-heading">I WANT TO SHARE MEMORIES OF</h2>
                            </div>

                            <div class="input-sections-col full-width">
                                <input id="firstNameInput" placeholder="Enter first name" class="input-style" type="text">
                                <input id="lastNameInput" placeholder="Enter last name" class="input-style" type="text">
                            </div>
                            <div class="row">
                                <button onclick="redirectToCorrectPage()" class="black-background-btn full-width">Get Started</button>

                            </div>
                            <p><a href="">Learn more</a> about our memorial website</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features-page-first-grid">
        <div class="features-section-header">
            <div class="features-section-header-insider">
                <h1 class="features-section-header-insider-primary-heading">
                    More than an Online Obituary - An Interactive Memorial
                </h1>
                <h1 class="features-section-header-insider-secandry-heading">
                    All Keeper memorials come with these features:
                </h1>
            </div>
        </div>
        @foreach($features as $key => $item)
        <div class="div-{{$key}}">
            <div class="features-div-top">
                <img src="{{asset($item->frontend_feature_image)}}" alt="" class="feature-div-image" />
                <h2 class="feature-div-heading-primary">{{$item->frontend_feature_title}}</h2>
            </div>

            <p>
                {{$item->frontend_feature_description}}
            </p>
        </div>

        @endforeach
        <div class="div-13">
            <button onclick="window.location.href='{{ route('profile') }}'" class="black-background-btn half-width">View Sample Memorial</button>

        </div>
        <div class="div-14">
            <div class="create-a-true-celebaration">
                <h1>
                    Create a true celebration of life with Keeper
                    <span class="highlighted-section">Pro</span>
                </h1>
            </div>
        </div>
        <div class="bird-flying-section">
            <div class="form-of-flying-bird-wrapper">
                <p class="most-popular-top-heading">Most popular</p>
                <h1 class="form-of-flying-bird-wrapper-main-heading">
                    Keeper<sup class="sup-tm-text">TM</sup>
                    <span class="plus-title">Plus</span>
                </h1>
                <p class="form-of-flying-bird-wrapper-paragrpah-heading">
                    A true celebration of life. Online forever.
                </p>
                <div class="row-of-bird-flying-price">
                    <div class="left-col-of-price">
                        <h1 class="price-row-main-heading">
                            $74<sup class="price-row-main-heading-sup">99</sup>
                        </h1>
                    </div>
                    <div class="right-col-of-price">
                        <h2>one time payment</h2>
                    </div>
                </div>
                <p class="form-of-flying-bird-wrapper-paragrpah-heading-2">
                    View unlimited images in a gallery, download local copies of images,
                    create a full family tree, create unlimited memorial pages, and
                    more. <a>Learn more</a>
                </p>
                    @if(auth()->check())
                        <button onclick="window.location.href='{{ route('Creatememorial',auth()->user()->id) }}'" class="black-background-btn half-width create-memorial-btn"> Create Memorial</button>

                    @else
                        <button onclick="window.location.href='{{ route('memorialsignup') }}'" class="black-background-btn half-width create-memorial-btn"> Create Memorial</button>
                    @endif

            </div>
        </div>
    </div>
    <div class="concept-of-websiteName-section">
        <div class="concept-of-websiteName-section-wrapper">
            <div class="cermonyTwocolumns">
                <div class="cermony-left-section">
                    <h1 class="craft-cermony-main-heading heading-color">
                        The concept of Keeper
                    </h1>
                    <p>
                        You become the Keeper of your loved one’s memorial page when you
                        create your account. Keep your loved one’s memory alive by sharing
                        their life story, uploading photographs and videos, creating their
                        family tree and inviting others to collaborate with you. As their
                        Keeper, you can change, add or hide any content at any time.
                        Keepers also have total control over who can visit and post on
                        their loved one’s memorial page and delete any posts and images
                        added by others.
                    </p>
                    <button class="black-background-btn margin-top-30 half-width">
                        Get Started
                    </button>
                </div>
                <div class="cermony-right-section">
                    <div class="share-memorial-insider">
                        <img src="./assets/hero_2_backgound.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="are-you-funeral-service-provider-section">
        <div class="service-provider-insider">
            <h1>FUNERAL HOME, CEMETERY OR OTHER DEATH CARE SERVICE PROVIDER?</h1>
            <h2>Offer Keeper Memorials to your families.</h2>
            <button class="white-background-btn">
                Learn more about keeper partnership
            </button>
        </div>
    </div>
    <div class="tablet-and-form-section-of-features">
        <div class="tablet-and-form-section-of-features-insider">
            <div class="two-cols-of-phone-and-tablet">
                <div class="two-cols-of-phone-and-tablet-left-col">
                    <img src="./assets/tablet-and-phone-removebg.png" alt="" class="phone-tab-img" />
                </div>
                <div class="two-cols-of-phone-and-tablet-right-col">
                    <img src="./assets/dummy_logo.webp" alt="" class="two-cols-of-phone-and-tablet-right-col-logo" />
                    <h1 class="two-cols-of-phone-and-tablet-right-col-heading-main">
                        Create a Memorial Website
                    </h1>
                    <h2 class="two-cols-of-phone-and-tablet-right-col-heading-sub">
                        Preserve and share memories of your loved one.
                    </h2>
                    <div class="share-memorial-form">
                        <div class="form-headin-wrapper">
                            <h2 class="form-main-heading">I WANT TO SHARE MEMORIES OF</h2>
                        </div>

                        <div class="input-sections-col full-width">
                            <input id="firstNameInput" placeholder="Enter first name" class="input-style" type="text">
                            <input id="lastNameInput" placeholder="Enter last name" class="input-style" type="text">
                        </div>
                        <div class="row">
                            <button class="black-background-btn full-width">
                                Get Started
                            </button>
                        </div>
                        <p><a href="">Learn more</a> about our memorial website</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('featuresJS')
<script>
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
@endsection
