@extends('layouts.frontend.app.app')
@section('title', 'User Profile')
@section('content')
    <!-- Edit Profile content -->
    <div class="center-and-margin">
        <!-- Profile secion -->
        <style>
            .profile-icon-content {
                width: 100%; /* Adjust this value as needed */
                max-width: 800px; /* Set a maximum width if necessary */
                margin: 0 auto; /* Center the element horizontally */
            }

        </style>
        <div class="profile-icon-content tab-content" id="Info">

            <form id="basic-info-form" >
                <!--Basic Information-->
                <div class="form-of-logged-in-user">

                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">who is this memorial for</h1>
                    </div>
                    <div class="form-data-of-profile-page">
                        <div class="form-group-input">
                            <label for="">First Name</label>
                            <input type="text" class="input-design" name="first_name" value=""/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Middle Name</label>
                            <input type="text" class="input-design" name="middle_name" value=""/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Last Name</label>
                            <input type="text" class="input-design" name="last_name" value=""/>
                        </div>

                        <div class="form-group-input">
                            <label for="">Suffix(Mr., M.D., etc.)</label>
                            <input type="text" class="input-design" name="suffix" value=""/>
                            <input type="hidden" name="keeperID" value="{{$user_id}}">

                        </div>
                        <div class="form-group-input">
                            <label for="">City of birth</label>
                            <input type="text" class="input-design" name="city_of_birth" value=""/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Email </label>
                            <input type="email" class="input-design" name="email" value=""/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Date of Birth</label>
                            <div class="row-of-inputs">
                                    <!-- Day Dropdown -->
                                <select name="dob_year">
                                    @for ($year = 1900; $year <= 2024; $year++)
                                        <option {{ $year == old('dob_year') ? 'selected' : ($year == 2024 ? 'selected' : '') }} value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                <select name="dob_month">
                                    @for ($month = 1; $month <= 12; $month++)
                                        <option {{ $month == old('dob_month') ? 'selected' : ($month == 1 ? 'selected' : '') }} value="{{ $month }}">
                                            @php
                                                echo date('F', mktime(0, 0, 0, $month, 1));
                                            @endphp
                                        </option>
                                    @endfor
                                </select>
                                <select name="dob_day">
                                    @for ($day = 1; $day <= 31; $day++)
                                        <option {{ $day == old('dob_day') ? 'selected' : ($day == 1 ? 'selected' : '') }} value="{{ sprintf("%02d", $day) }}">{{ sprintf("%02d", $day) }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group-input">
                            <label for="">Date of Death</label>
                            <div class="row-of-inputs">
                                <select name="dod_year">
                                    @for ($year = 1900; $year <= 2024; $year++)
                                        <option {{ $year == old('dod_year') ? 'selected' : ($year == 2024 ? 'selected' : '') }} value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                <select name="dod_month">
                                    @for ($month = 1; $month <= 12; $month++)
                                        <option {{ $month == old('dod_month') ? 'selected' : ($month == 1 ? 'selected' : '') }} value="{{ $month }}">
                                            @php
                                                echo date('F', mktime(0, 0, 0, $month, 1));
                                            @endphp
                                        </option>
                                    @endfor
                                </select>
                                <select name="dod_day">
                                    @for ($day = 1; $day <= 31; $day++)
                                        <option {{ $day == old('dod_day') ? 'selected' : ($day == 1 ? 'selected' : '') }} value="{{ sprintf("%02d", $day) }}">{{ sprintf("%02d", $day) }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group-input">
                            <label class="gender-label">Gender</label>
                            <div class="row-of-inputs">
                                <label class="radio">
                                    <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                    <span class="name">Female</span>
                                </label>
                                <label class="radio">
                                    <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : 'checked' }}>
                                    <span class="name">Male</span>
                                </label>
                                <label class="radio">
                                    <input type="radio" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : '' }}>
                                    <span class="name">Other</span>
                                </label>
                            </div>
                        </div>
                    <div class="form-group-input">
                            <label for="memorial_biography">Their Obituary/Biography</label>
                            <input name="memorial_biography" type="text" placeholder="Their Obituary/Biography" value="{{ old('memorial_biography') }}" class="input-design @error('memorial_biography') is-invalid @enderror" required/>
                            @error('memorial_biography')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                            @enderror
                        </div>
                        <div class="form-group-input">
                            <label for="memorial_fav_saying">Their Favourite Saying</label>
                            <input name="memorial_fav_saying" type="text" placeholder="Their Favourite Saying" value="{{ old('memorial_fav_saying') }}" class="input-design @error('memorial_fav_saying') is-invalid @enderror" required/>
                            @error('memorial_fav_saying')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                            @enderror
                        </div>
                        <div class="form-group-input">
                            <label for="memorial_resting_place">Resting Place:</label>
                            <input name="memorial_resting_place" type="text" placeholder="Their Resting Place" value="{{ old('memorial_resting_place') }}" class="input-design @error('memorial_resting_place') is-invalid @enderror" required/>
                            @error('memorial_resting_place')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                            @enderror
                        </div>


                        <div id="imageLoader" style="display: none;">
                            <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                            <p>Loading...</p>
                        </div>
                        <div id="formMessage" style="display: none;"></div>
                        <div class="form-group-input">

                            <div class="custom-file-chooser-wrapper">
                                <input type="file" id="file-input" name="profile_image"/>

                                <label id="file-input-label" for="file-input">
                                    + Select a File</label</div>
                        </div>

                    </div>
@if(!$check)
                    <div id="divmemorial" class="footer-of-form-content ">
                        <button class="form-btn">Create memorial</button>
                    </div>
@endif

                </div>

            </form>

            <div id="divalready" class="footer-of-form-content" style="display: none;">
                        <button class="form-btn" type="button">You have Already Created a Memorial</button>
                    </div>
@if($check)
            <div id="divalready" class="footer-of-form-content" ">
                <button class="form-btn" type="button">You have Already Created a Memorial</button>
            </div>
          @endif
        </div>


    </div>
@endsection

@section('CreatememorialJS')
    <script>



        $(document).ready(function() {
            $('#basic-info-form').submit(function(e) {
                e.preventDefault();
                var loaderId = '#imageLoader'; // Define loaderId here with the appropriate ID of your loader element
                var messageId = '#formMessage'; // Assuming you have a message element with ID 'message'

                // Show loader
                $(loaderId).show();
                // Hide previous message
                $(messageId).hide();
                var formData = new FormData($(this)[0]);

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                $.ajax({
                    url: '/store-memorial',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {

                        // Hide loader on success
                        setTimeout(function() {
                            $(loaderId).hide();

                        // Handle success response
                        console.log(response);
                        // Display success message to the user
                        if (response.success) {
                            $('#successMessage').text(response.message).show();

                            $('#divmemorial').hide();
                            $('#divalready').show();

                        } else {
                            $('#errorMessage').text(response.message).show();
                        }
                        }, 2000); // 2000 milliseconds = 2 seconds

                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        // Hide loader on success
                        setTimeout(function() {
                            $(loaderId).hide();


                        console.error(xhr.responseText);
                        // Display error message to the user
                        // You can customize this based on your error handling logic
                        alert('An error occurred. Please try again.');
                        }, 2000); // 2000 milliseconds = 2 seconds
                    }
                });
            });
        });



    </script>
@endsection
