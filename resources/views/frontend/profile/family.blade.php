@extends('layouts.frontend.app.app')
@section('title', 'Family')

@section('content')

    <!-- Family content -->
    <div class="center-and-margin">

        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">
{{--                        {{$family->first_name.' '.$family->last_name}}--}}
                        's Family</h1>

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
        <p class="family-member-name"></p>
    </div>
    </div>
    </div>
    </div>

    </div>

    </div>
    <div class="form-of-logged-in-user">
        <div class="header-of-form-profile margin-top">
            <h1 class="form-top-main-heading-of-profile">Add Family Member</h1>

        </div>
        <div class="form-data-of-profile-page">
            <div id="message" class="message"></div> <!-- Add this div for displaying messages -->
            <div class="two-cols-flex">
                <div class="input-wrapper">
                    <div class="form-group-input">
                        <input type="text" name="name" class="input-design" placeholder="Enter name">
                        <input type="hidden" name="memorialID"  class="input-design" value="{{$id}}" placeholder="Enter name">
                    </div>
                </div>

                <div class="input-wrapper">
                    <div class="form-group-input">
                        <select name="relation" class="input-design">
                            <option value="grandfather">Grandfather</option>
                            <option value="grandmother">Grandmother</option>
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="sister">Sister</option>
                            <option value="brother">Brother</option>
                            <option value="step-father">Step-Father</option>
                            <option value="step-mother">Step-Mother</option>
                            <option value="step-sister">Step-Sister</option>
                            <option value="step-brother">Step-Brother</option>
                            <option value="step-uncle">Step-Uncle</option>
                            <option value="step-aunt">Step-Aunt</option>
                            <option value="step-father">Step-Father</option>
                        </select>
                    </div>
                </div>

                <div class="input-wrapper">
                    <div class="form-group-input">
                        <input type="file" name="family_image" class="input-design"  >
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

@endsection
@section('familyJS')
    <script>

        $(document).ready(function() {
            $('.btn-of-add-family').click(function() {
                // Get CSRF token
                var token = $('meta[name="csrf-token"]').attr('content');

                // Get form data
                var name = $('.input-design[name="name"]').val();
                var relationship = $('.input-design[name="relation"]').val(); // Corrected the input name
                var image = $('.input-design[name="family_image"]')[0].files[0]; // Corrected the input name
                var memorialId = $('.input-design[name="memorialID"]').val();

                // Create FormData object to send form data
                var formData = new FormData();
                formData.append('_token', token); // Include CSRF token
                formData.append('name', name);
                formData.append('relation', relationship);
                formData.append('family_image', image);
                formData.append('memorialID', memorialId);

                // Send AJAX request
                $.ajax({
                    url: '/post-family', // Specify your server endpoint
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Display success message
                        $('#message').html('<div class="success-message">Family member created successfully</div>');
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Display error message
                        $('#message').html('<div class="error-message">Failed to create family member</div>');


                        console.error(xhr.responseText);
                    },

                    });
                });
            });


    </script>

@endsection
