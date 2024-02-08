@extends('layouts.frontend.app.app')
@section('title', 'User Profile')
@section('content')
    <!-- Edit Profile content -->
    <div class="center-and-margin">
        <!-- Profile secion -->
        <div class="profile-icon-content tab-content" id="Info">

            <form id="basic-info-form" data-user-id="{{$user_id}}">
                <!--Basic Information-->
                <div class="form-of-logged-in-user">
                    <div id="successMessage" class="alert alert-success" role="alert" style="display: none;">
                        Your changes have been saved successfully!
                    </div>
                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Basic Information</h1>
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
                        </div>
                        <div class="form-group-input">
                            <label for="">Date of Birth</label>
                            <div class="row-of-inputs">
                                    <!-- Day Dropdown -->
                                <select name="dob_year">
                                    @for ($year = 1999; $year <= 2024; $year++)
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
                                    @for ($year = 1999; $year <= 2024; $year++)
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

                            <div class="custom-file-chooser-wrapper">
                                <input type="file" id="file-input" name="profile_image"/>

                                <label id="file-input-label" for="file-input">
                                    + Select a File</label</div>
                        </div>

                    </div>
                    <div class="footer-of-form-content">
                        <button class="form-btn">Create memorial</button>
                    </div>
                </div>
            </form>

        </div>


    </div>
@endsection

@section('CreatememorialJS')
    <script>

        $('#basic-info-form').submit(function (e) {
            e.preventDefault(); // Prevent the form from submitting in the traditional way
            var userId = $(this).data('user-id');
            var formData = new FormData(this); // Create a FormData object from the form
            formData.append('user_id', userId);
            formData.append('form_identifier', 'basic_info_create');

            $.ajax({
                type: 'POST',
                url: '/update-memorial-profile/' + userId,
                data: formData,
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting the content type
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        $('#successMessage').show();
                        setTimeout(function () {
                            $('#successMessage').hide();
                        }, 2000);
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function (error) {
                    console.error(error);
                    var errorMessage = error.responseJSON.message;
                    var errorDetails = error.responseJSON.error_details;
                    alert('Error: ' + errorMessage + '\nDetails: ' + errorDetails);
                }
            });
        });



    </script>
@endsection
