@extends('layouts.frontend.app.app')
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

@endsection

