@extends('layouts.frontend.app.app')
@section('title', 'Family')

@section('content')

    <!-- Family content -->
    <div class="center-and-margin">

        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">
                        @if(isset($memorial))
                            {{$memorial->first_name.' '.$memorial->last_name}}
                        @endif
                        's Family</h1>

                </div>
                <div class="form-data-of-profile-page">
                    <div class="family-page-images-grid">
                        <div class="family-grid-insider">
                            @if(isset($grandFatherPaternal))
                            <div class="row-of-pics">

                                <div class="family-member-div">
                                    <img src="{{asset($grandFatherPaternal->family_image)}}" alt="" class="family-member-image"/>
                                    <div class="custom-file-chooser-wrapper margin-top-0 ">
                                        <input type="file" id="file-input" name="file-input"/>
                                        <label id="file-input-svg" for="file-input">+</label</div>
                                </div>
                                <p class="family-member-name">Grand Father Paternal</p>
                            </div>
                                @else
                                <div class="row-of-pics">

                                <div class="family-member-div">
                                    <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                                    <div class="custom-file-chooser-wrapper margin-top-0 ">
                                        <input type="file" id="file-input" name="file-input"/>
                                        <label id="file-input-svg" for="file-input">+</label</div>
                                </div>
                                <p class="family-member-name">Grand Father Paternal</p>
                            </div>
                            @endif
                            @if(isset($grandMotherPaternal))
                            <div class="family-member-div">
                                <img src="{{asset($grandMotherPaternal->family_image)}}" alt="" class="family-member-image"/>
                                <div class="custom-file-chooser-wrapper margin-top-0 ">
                                    <input type="file" id="file-input" name="file-input"/>
                                    <label id="file-input-svg" for="file-input">+</label</div>
                            </div>
                            <p class="family-member-name">Grand Mother Paternal</p>
                        </div>
                        @else
                            <div class="family-member-div">
                                <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                                <div class="custom-file-chooser-wrapper margin-top-0 ">
                                    <input type="file" id="file-input" name="file-input"/>
                                    <label id="file-input-svg" for="file-input">+</label</div>
                            </div>
                            <p class="family-member-name">Grand Mother Paternal</p>
                        </div>
                        @endif
                    @if(isset($grandMotherPaternal))
                        <div class="family-member-div">
                            <img src="{{asset($grandMotherPaternal->family_image)}}" alt="" class="family-member-image"/>
                            <div class="custom-file-chooser-wrapper margin-top-0 ">
                                <input type="file" id="file-input" name="file-input"/>
                                <label id="file-input-svg" for="file-input">+</label</div>
                        </div>
                        <p class="family-member-name">Grand Father Maternal</p>
                    </div>
                @else
                    <div class="family-member-div">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                            <div class="custom-file-chooser-wrapper margin-top-0 ">
                                <input type="file" id="file-input" name="file-input"/>
                                <label id="file-input-svg" for="file-input">+</label</div>
                        </div>
                        <p class="family-member-name">Grand Father Maternal</p>
                    </div>

                @endif
            @if(isset($grandMotherMaternal))
                <div class="family-member-div">
                        <img src="{{asset($grandMotherMaternal->family_image)}}" alt="" class="family-member-image"/>
                        <div class="custom-file-chooser-wrapper margin-top-0 ">
                            <input type="file" id="file-input" name="file-input"/>
                            <label id="file-input-svg" for="file-input">+</label</div>
                    </div>
                    <p class="family-member-name">Grand Mother Maternal</p>
                </div>
            @else
            <div class="family-member-div">
                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                        <div class="custom-file-chooser-wrapper margin-top-0 ">
                            <input type="file" id="file-input" name="file-input"/>
                            <label id="file-input-svg" for="file-input">+</label</div>
                    </div>
                    <p class="family-member-name">Grand Mother Maternal</p>
                </div>
            </div>
    @endif

            <div class="row-of-pics">
                @if(isset($Father))
                <div class="family-member-div">
                    <img src="{{asset($Father->family_image)}}" alt="" class="family-member-image"/>
                    <div class="custom-file-chooser-wrapper margin-top-0 ">
                        <input type="file" id="file-input" name="file-input"/>
                        <label id="file-input-svg" for="file-input">+</label</div>
                </div>
                <p class="family-member-name">Father</p>
            </div>
    @else
        <div class="family-member-div">
                    <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                    <div class="custom-file-chooser-wrapper margin-top-0 ">
                        <input type="file" id="file-input" name="file-input"/>
                        <label id="file-input-svg" for="file-input">+</label</div>
                </div>
                <p class="family-member-name">Father</p>
            </div>
        @endif
    @if(isset($Father))
            <div class="family-member-div">
                <img src="{{asset($Mother->family_image)}}" alt="" class="family-member-image"/>
                <div class="custom-file-chooser-wrapper margin-top-0 ">
                    <input type="file" id="file-input" name="file-input"/>
                    <label id="file-input-svg" for="file-input">+</label</div>
            </div>
            <p class="family-member-name">Mother</p>
        </div>
    @else
        <div class="family-member-div">
                <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
                <div class="custom-file-chooser-wrapper margin-top-0 ">
                    <input type="file" id="file-input" name="file-input"/>
                    <label id="file-input-svg" for="file-input">+</label</div>
            </div>
            <p class="family-member-name">Mother</p>
        </div>

        @endif
    </div>
    <div class="row-of-pics">
        @if(isset($memorial))
        <div class="family-member-div">
            <img src="{{asset($memorial->profile_image)}}" alt="" class="family-member-image"/>
            <div class="custom-file-chooser-wrapper margin-top-0 ">
                <input type="file" id="file-input" name="file-input"/>
                <label id="file-input-svg" for="file-input">+</label</div>
        </div>
            <p class="family-member-name">{{$memorial->first_name.' '.$memorial->last_name}}</p>
       @else
        <div class="family-member-div">
            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="family-member-image"/>
            <div class="custom-file-chooser-wrapper margin-top-0 ">
                <input type="file" id="file-input" name="file-input"/>
                <label id="file-input-svg" for="file-input">+</label</div>
        </div>
            <p class="family-member-name">Memorial</p>
        @endif

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
                            @php
                                // Get the existing relations of the user
                                $existingRelations = $familys->pluck('relation')->toArray();
                                // Define all available relations
                                $availableRelations = [
                                    "grandfatherpaternal",
                                    "grandfathermaternal",
                                    "grandmothermaternal",
                                    "grandmotherpaternal",
                                    "father",
                                    "mother",
                                    "sister",
                                    "brother",
                                    "step-father",
                                    "step-mother",
                                    "step-sister",
                                    "step-brother",
                                    "step-uncle",
                                    "step-aunt"
                                ];
                                // Exclude existing relations from available relations
                                $availableRelations = empty($existingRelations) ? $availableRelations : array_diff($availableRelations, $existingRelations);
                            @endphp
                            @foreach($availableRelations as $relation)
                                <option value="{{ $relation }}">{{ ucfirst(str_replace('-', ' ', $relation)) }}</option>
                            @endforeach
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
            <div id="imageLoader" style="display: none;">
                <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                <p>Loading...</p>
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
                // Show loader

                var loaderId = '#imageLoader';

                $(loaderId).show();

                // Send AJAX request
                $.ajax({
                    url: '/post-family', // Specify your server endpoint
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Display success message

                        setTimeout(function() {
                            if (response.success) {
                            $(loaderId).hide();

                            console.log(response);
                            // Display success message to the user

                                $('#message').html('<div class="success-message">Family member created successfully</div>');

                            }
                        }, 3000); // 2000 milliseconds = 2 seconds

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
