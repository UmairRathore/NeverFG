@extends('layouts.frontend.app.app')
@section('title', 'Mementos')
@section('content')

    <!-- Momentos content -->
    <div class="center-and-margin">
        <!-- Profile secion -->
        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Public Mementos</h1>
                    <p>With Keeper, anyone that visits the page will only be able to view the 5 photos and videos you've selected
                        below. When you get Keeper Plus, all photos and videos will become visible to the public.</p>
                </div>
                <div class="form-data-of-profile-page">
                    <div class="form-group-input">
                        <label for="">There are no mementos for this profile</label>
                        <!-- <input type="text" class="input-design" /> -->
                    </div>

                </div>
                <div class="footer-of-form-content">
                    <button class="form-btn">Select Public Mementos</button>
                </div>
            </div>
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">All Mementos</h1>
                    <p>Until you upgrade to Keeper Plus, only you will be able to see all of these photos and videos.</p>
                </div>
                <div class="form-data-of-profile-page">
                    <div class="form-group-input">
                        <label for="">There are no mementos for this profile</label>
                        <!-- <input type="text" class="input-design" /> -->
                    </div>
                </div>
                <div class="footer-of-form-content">
                    <div class="delete-btn backcolorChanged">
                        <svg width="20px" height="20px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
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
                        <button class="del-btn">Add & Edit Mementos</button>
                    </div>
                    <div class="delete-btn backcolorChanged">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M7 10.0288C7.47142 10 8.05259 10 8.8 10H15.2C15.9474 10 16.5286 10 17 10.0288M7 10.0288C6.41168 10.0647 5.99429 10.1455 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C18.0057 10.1455 17.5883 10.0647 17 10.0288M7 10.0288V8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8V10.0288"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <button class="del-btn">Change Image Order</button>
                    </div>
                    <div class="delete-btn backcolorChanged">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M7 10.0288C7.47142 10 8.05259 10 8.8 10H15.2C15.9474 10 16.5286 10 17 10.0288M7 10.0288C6.41168 10.0647 5.99429 10.1455 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C18.0057 10.1455 17.5883 10.0647 17 10.0288M7 10.0288V8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8V10.0288"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <button class="del-btn">Download All Photos</button>
                    </div>
                </div>
            </div>
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
                            <p>You already have the package</p>
                            <button class="black-background-btn" onclick="showAlert('You already have the package.');">Upgrade Keeper Plus</button>
                        @endif
                    @endif
                </div>
            </div>





        </div>

        </section>
    </div>

@endsection
@section('mementosJS')
    <script>

        function showAlert(message) {
            alert(message);
        }
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
