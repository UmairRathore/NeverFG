@extends('layouts.frontend.profilelayout.master')
@section('title', 'Family')

@section('content')

    <!-- Family content -->
    <div class="center-and-margin">

        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">User Name's Family</h1>

                </div>
                <div class="form-data-of-profile-page">
                    <div class="family-page-images-grid">
                        <div class="family-grid-insider">
                            <div class="row-of-pics">

                                <div class="family-member-div">
                                    <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                                    <div class="custom-file-chooser-wrapper margin-top-0 ">
                                        <input type="file" id="file-input" name="file-input"/>
                                        <label id="file-input-svg" for="file-input">+</label</div>
                                </div>
                                <p class="family-member-name">Grand Father</p>
                            </div>
                            <div class="family-member-div">
                                <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                                <div class="custom-file-chooser-wrapper margin-top-0 ">
                                    <input type="file" id="file-input" name="file-input"/>
                                    <label id="file-input-svg" for="file-input">+</label</div>
                            </div>
                            <p class="family-member-name">Grand Mother</p>
                        </div>
                        <div class="family-member-div">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                            <div class="custom-file-chooser-wrapper margin-top-0 ">
                                <input type="file" id="file-input" name="file-input"/>
                                <label id="file-input-svg" for="file-input">+</label</div>
                        </div>
                        <p class="family-member-name">Grand Father</p>
                    </div>
                    <div class="family-member-div">
                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                        <div class="custom-file-chooser-wrapper margin-top-0 ">
                            <input type="file" id="file-input" name="file-input"/>
                            <label id="file-input-svg" for="file-input">+</label</div>
                    </div>
                    <p class="family-member-name">Grand Mother</p>
                </div>
            </div>
            <div class="row-of-pics">

                <div class="family-member-div">
                    <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                    <div class="custom-file-chooser-wrapper margin-top-0 ">
                        <input type="file" id="file-input" name="file-input"/>
                        <label id="file-input-svg" for="file-input">+</label</div>
                </div>
                <p class="family-member-name">Father</p>
            </div>
            <div class="family-member-div">
                <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                <div class="custom-file-chooser-wrapper margin-top-0 ">
                    <input type="file" id="file-input" name="file-input"/>
                    <label id="file-input-svg" for="file-input">+</label</div>
            </div>
            <p class="family-member-name">Mother</p>
        </div>

    </div>
    <div class="row-of-pics">
        <div class="family-member-div">
            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
            <div class="custom-file-chooser-wrapper margin-top-0 ">
                <input type="file" id="file-input" name="file-input"/>
                <label id="file-input-svg" for="file-input">+</label</div>
        </div>
        <p class="family-member-name">User name</p>
    </div>
    </div>
    </div>
    </div>
    <div class="form-add-member-link-right-align">
        <div class="link-with-icon">
            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M6 12H18M12 6V18" stroke="#000000" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </g>
            </svg>
            <p>Add a Child,Sibling or Family Member</p>
        </div>
    </div>
    </div>

    </div>
    <div class="form-of-logged-in-user">
        <div class="header-of-form-profile margin-top">
            <h1 class="form-top-main-heading-of-profile">Invite Family Member</h1>

        </div>
        <div class="form-data-of-profile-page">
            <div class="two-cols-flex">
                <div class="input-wrapper">
                    <div class="form-group-input">
                        <input type="text" class="input-design">
                    </div>

                </div>

                <div class="icon-btn-wrapper">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M6 12H18M12 6V18" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <button class="btn-of-add-family">Add family member</button>
                </div>
            </div>
        </div>

    </div>
    <div class="form-of-logged-in-user">
        <div class="header-of-form-profile margin-top">
            <h1 class="form-top-main-heading-of-profile">Send Email Invitation</h1>
            <p>Can't find the person you would like to add? Send them an email invitation!</p>
        </div>

        <div class="footer-of-form-content">
            <div class="delete-btn backcolorChanged">
                <svg width="24px" height="24px" viewBox="0 0 48 48" id="Layer_2" data-name="Layer 2"
                     xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #ffffff;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                }
                            </style>
                        </defs>
                        <path class="cls-1"
                              d="M40.83,8.48c1.14,0,2,1,1.54,2.86l-5.58,26.3c-.39,1.87-1.52,2.32-3.08,1.45L20.4,29.26a.4.4,0,0,1,0-.65L35.77,14.73c.7-.62-.15-.92-1.07-.36L15.41,26.54a.46.46,0,0,1-.4.05L6.82,24C5,23.47,5,22.22,7.23,21.33L40,8.69a2.16,2.16,0,0,1,.83-.21Z">
                        </path>
                    </g>
                </svg>
                <button class="del-btn">Send Email Invitation</button>
            </div>
        </div>
    </div>

@endsection

