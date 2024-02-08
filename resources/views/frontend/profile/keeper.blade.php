@extends('layouts.frontend.app.app')
@section('title', 'Keeper')
@section('content')

    <!-- Keeper content -->
    <div class="center-and-margin">
        <!-- Profile secion -->
        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Keeper of:</h1>

                </div>
                <div class="form-data-of-profile-page">
                    <div class="form-group-input">
                        <label for="">The profiles that {{$keeper->first_name}} manages.</label>
                        <!-- <input type="text" class="input-design" /> -->
                    </div>

                </div>
                <div class="footer-of-form-content">
                    <div class="delete-btn backcolorChanged">
                        <svg width="16px" height="16px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                             fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>plus</title>
                                <desc>Created with Sketch Beta.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                    <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-362.000000, -1037.000000)"
                                       fill="#ffffff">
                                        <path
                                            d="M390,1049 L382,1049 L382,1041 C382,1038.79 380.209,1037 378,1037 C375.791,1037 374,1038.79 374,1041 L374,1049 L366,1049 C363.791,1049 362,1050.79 362,1053 C362,1055.21 363.791,1057 366,1057 L374,1057 L374,1065 C374,1067.21 375.791,1069 378,1069 C380.209,1069 382,1067.21 382,1065 L382,1057 L390,1057 C392.209,1057 394,1055.21 394,1053 C394,1050.79 392.209,1049 390,1049"
                                            id="plus" sketch:type="MSShapeGroup"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <button onclick="window.location='{{ route('Creatememorial') }}'" class="del-btn">Create Memorial Profile</button>
                    </div>
                </div>
            </div>
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Your Keepers</h1>

                </div>
                <div class="form-data-of-profile-page">
                    <div class="form-group-input">
                        <label for="">Your Keeper can publish and manage your profile once you have passed.</label>
                        <label for="">Ghulam Dastgeer does not have a Keeper.</label>
                        <!-- <input type="text" class="input-design" /> -->
                    </div>
                </div>

            </div>
            <div class="form-of-logged-in-user linear-background-of-form">
                <div class="form-of-logged-in-user linear-background-of-form">
                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Better Mementos with Keeper Plus</h1>

                        @if(auth()->check())
                            @if(auth()->user()->account_type_id == 1)
                                <p>When you upgrade to Keeper Plus, your friends and family will be able to view all uploaded Mementos and
                                    download their own copy of these pictures in a single file. With Keeper Plus you change the order in which
                                    Memento images and videos appear. Keeper Plus also enables you to upload full HD videos directly from your
                                    phone, tablet or computer.</p>
                                <a href="https://buy.stripe.com/test_14k2a63F13IqfcYfYZ" class="black-background-btn" target="_blank">Upgrade Keeper Plus</a>
                            @elseif(auth()->user()->account_type_id == 2)
                                <p>When you upgrade to Keeper Plus, your friends and family will be able to view all uploaded Mementos and
                                    download their own copy of these pictures in a single file. With Keeper Plus you change the order in which
                                    Memento images and videos appear. Keeper Plus also enables you to upload full HD videos directly from your
                                    phone, tablet or computer.</p>
                                <button class="black-background-btn">You Already have the Package Keeper Plus</button>
                            @endif
                        @endif

                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
@section('keeperJS')
    <script>
        // Declare all variables
        var theme_i, theme_tabcontent, theme_tablinks;

        // Get all elements with class="tabcontent" and hide them
        theme_tabcontent = document.getElementsByClassName("theme-tabcontent");
        for (theme_i = 0; theme_i < theme_tabcontent.length; theme_i++) {
            theme_tabcontent[theme_i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        theme_tablinks = document.getElementsByClassName("theme-tablinks");
        for (theme_i = 0; theme_i < theme_tablinks.length; theme_i++) {
            theme_tablinks[theme_i].className = theme_tablinks[theme_i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(themeTab).style.display = "block";
        evt.currentTarget.className += " active";
        }
    </script>
@endsection
