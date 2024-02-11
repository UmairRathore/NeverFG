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

            <form method="post" action="{{route('update.user.profile',$user->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <!--Basic Information-->
                <div class="form-of-logged-in-user">
                    <div id="successMessage" class="alert alert-success" role="alert" style="display: none;">
                        Your changes have been saved successfully!
                    </div>
                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Basic Information</h1>
                    </div>

                    <div class="form-data-of-profile-page">
                        <div class="row">
                            <input type="hidden" name="user_id" value="{{$user->id}}">

                            <div class="form-group-input">
                                <label for="">First Name</label>
                                <input type="text" class="input-design" name="first_name" value="@if($user->first_name){{$user->first_name}}@endif"/>
                            </div>
                            <div class="form-group-input">
                                <label for="">Middle Name</label>
                                <input type="text" class="input-design" name="middle_name" value="@if($user->middle_name){{$user->middle_name}}@endif"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group-input">
                                <label for="">Last Name</label>
                                <input type="text" class="input-design" name="last_name" value="@if($user->last_name){{$user->last_name}}@endif"/>
                            </div>
                            <div class="form-group-input">
                                <label for="">Suffix(Mr., M.D., etc.)</label>
                                <input type="text" class="input-design" name="suffix" value="@if($user->suffix){{$user->suffix}}@endif"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group-input">
                                <label for="">Email</label>
                                <input type="email" class="input-design" name="email" value="{{ $user->email ?? '' }}" />
                            </div>
                            <div class="form-group-input">
                                <label for="">Password</label>
                                <input type="password" class="input-design" name="password" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group-input">
                                <label for="">Date of Birth</label>
                                <div class="row-of-inputs">
                                    @php
                                        $dobParts = explode('-', $user->dob);
                                        $selectedDay = $dobParts[0] ?? '';
                                        $selectedMonth = $dobParts[1] ?? '';
                                        $selectedYear = $dobParts[2] ?? '';
                                    @endphp

                                        <!-- Day Dropdown -->
                                    <select name="birth_day" id="birth_day">
                                        @for ($day = 1; $day <= 31; $day++)
                                            <option value="{{ $day }}" @if($selectedDay == $day) selected @endif>{{ $day }}</option>
                                        @endfor
                                    </select>

                                    <!-- Month Dropdown -->
                                    <select name="birth_month" id="birth_month">
                                        @for ($month = 1; $month <= 12; $month++)
                                            <option value="{{ $month }}" @if($selectedMonth == $month) selected @endif>{{ $month }}</option>
                                        @endfor
                                    </select>

                                    <!-- Year Dropdown -->
                                    <select name="birth_year" id="birth_year">
                                        @for ($year = 1970; $year <= 2023; $year++)
                                            Adjust the end year as needed
                                            <option value="{{ $year }}" @if($selectedYear == $year) selected @endif>{{ $year }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group-input">
                                <label for="">Gender</label>
                                <div class="row-of-inputs">
                                    <div class="radio-input">
                                        <input type="radio" id="male" name="gender" value="Male" @if($user->gender === 'Male') checked @endif />
                                        <label for="male">Male</label><br/>
                                    </div>
                                    <div class="radio-input">
                                        <input type="radio" id="female" name="gender" value="Female" @if($user->gender === 'Female') checked @endif />
                                        <label for="female">Female</label><br/>
                                    </div>
                                    <div class="radio-input">
                                        <input type="radio" id="other" name="gender" value="Other" @if($user->gender === 'Other') checked @endif />
                                        <label for="other">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group-input">
                                <div id="profile-image-div" class="profile-pic-wrapper-of-Picture">
                                    @if($user->profile_image)
                                        <img src="{{asset($user->profile_image) }}" alt="" class="pic-of-usr"/>
                                    @else
                                        <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="pic-of-usr"/>
                                    @endif
                                </div>
                                <div class="custom-file-chooser-wrapper">
                                    <input type="file" id="file-input" name="profile_image"/>

                                    <label id="file-input-label" for="file-input">
                                        + Select a File</label</div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-of-form-content">
                        <button class="form-btn">Save Changes</button>
                    </div>
                </div>
            </form>


        </div>


    </div>

@endsection

