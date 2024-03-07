@extends('layouts.frontend.app.app')
@section('title', 'Memorial Profile')
@section('content')

    <!-- Tabs section -->
    <section class="profile-content-wrapper">
        <div class="profile-content-wrapper-insider">
            <!-- Tabbed content -->
            <div class="top-header-of-profile-page">
                <h1 class="my-profile-name">Edit {{$profile['memorialProfile']->first_name}} 's Profile</h1>
                <div class="tabed-menu-items">
                    <button class="tab-btn-styling tab-single-link" onclick="openProfileItem(event,'Info')">
                        <div class="tabbed-single-item">
                            <svg fill="currentColor" width="32px" height="32px" viewBox="0 0 32.00 32.00" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" <!-- stroke="#000000" -->
                            stroke-width="0.00032">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>user</title>
                                <path
                                    d="M4 28q0 0.832 0.576 1.44t1.44 0.576h20q0.8 0 1.408-0.576t0.576-1.44q0-1.44-0.672-2.912t-1.76-2.624-2.496-2.144-2.88-1.504q1.76-1.088 2.784-2.912t1.024-3.904v-1.984q0-3.328-2.336-5.664t-5.664-2.336-5.664 2.336-2.336 5.664v1.984q0 2.112 1.024 3.904t2.784 2.912q-1.504 0.544-2.88 1.504t-2.496 2.144-1.76 2.624-0.672 2.912z">
                                </path>
                            </g>
                            </svg>
                            <p class="tab-btn-heading">info</p>
                        </div>
                    </button>
                    <button class="tab-btn-styling tab-single-link" onclick="openProfileItem(event,'Picture')">
                        <div class="tabbed-single-item">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>pic_line</title>
                                    <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="File" transform="translate(-912.000000, 0.000000)" fill-rule="nonzero">
                                            <g id="pic_line" transform="translate(912.000000, 0.000000)">
                                                <path
                                                    d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z"
                                                    id="MingCute" fill-rule="nonzero"></path>
                                                <path
                                                    d="M20,3 C21.0543909,3 21.9181678,3.81587733 21.9945144,4.85073759 L22,5 L22,19 C22,20.0543909 21.18415,20.9181678 20.1492661,20.9945144 L20,21 L4,21 C2.94563773,21 2.08183483,20.18415 2.00548573,19.1492661 L2,19 L2,5 C2,3.94563773 2.81587733,3.08183483 3.85073759,3.00548573 L4,3 L20,3 Z M9.87852,12.0503 L4.22166,17.7071 C4.15418,17.7746 4.07946,17.8304 4,17.8746 L4,19 L20,19 L20,17.8747 C19.9204,17.8305 19.8456,17.7747 19.778,17.7071 L16.9496,14.8787 L16.2425,15.5858 L16.4496,15.7929 C16.8401,16.1834 16.8401,16.8166 16.4496,17.2071 C16.0591,17.5976 15.4259,17.5976 15.0354,17.2071 L9.87852,12.0503 Z M20,5 L4,5 L4,15.1003 L8.99463,10.1057 C9.450246,9.65009333 10.1700264,9.61971956 10.6608969,10.0145787 L10.7624,10.1057 L14.8283,14.1716 L16.0657,12.9341 C16.5213533,12.47854 17.2411276,12.4481693 17.731997,12.842988 L17.8335,12.9341 L20,15.1007 L20,5 Z M15.5,7 C16.3284,7 17,7.67157 17,8.5 C17,9.32843 16.3284,10 15.5,10 C14.6716,10 14,9.32843 14,8.5 C14,7.67157 14.6716,7 15.5,7 Z"
                                                    id="形状" fill="currentColor"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p class="tab-btn-heading">Profile Picture</p>
                        </div>
                    </button>
                    <button class="tab-btn-styling tab-single-link" onclick="openProfileItem(event,'Theme')">
                        <div class="tabbed-single-item">
                            <svg width="32px" height="32px" viewBox="0 -2.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#1488]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-139.000000, -361.000000)" fill="currentColor">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M103.991908,206.599878 C103.779809,210.693878 100.744263,212.750878 96.9821188,215.798878 C94.9997217,217.404878 92.0324261,217.404878 90.042679,215.807878 C86.3057345,212.807878 83.1651892,210.709878 83.0045394,206.473878 C82.8029397,201.150878 89.36438,198.971878 93.0918745,203.314878 C93.2955742,203.552878 93.7029736,203.547878 93.9056233,203.309878 C97.6205178,198.951878 104.274358,201.159878 103.991908,206.599878"
                                                    id="love-[#1488]"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p class="tab-btn-heading">Cover Photos</p>
                        </div>
                    </button>
                    {{--                    <button class="tab-btn-styling tab-single-link" onclick="openProfileItem(event,'Setting')">--}}
                    {{--                        <div class="tabbed-single-item">--}}
                    {{--                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>--}}
                    {{--                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>--}}
                    {{--                                <g id="SVGRepo_iconCarrier">--}}
                    {{--                                    <path fill-rule="evenodd" clip-rule="evenodd"--}}
                    {{--                                          d="M11.0175 19C10.6601 19 10.3552 18.7347 10.297 18.373C10.2434 18.0804 10.038 17.8413 9.76171 17.75C9.53658 17.6707 9.31645 17.5772 9.10261 17.47C8.84815 17.3365 8.54289 17.3565 8.30701 17.522C8.02156 17.7325 7.62943 17.6999 7.38076 17.445L6.41356 16.453C6.15326 16.186 6.11944 15.7651 6.33361 15.458C6.49878 15.2105 6.52257 14.8914 6.39601 14.621C6.31262 14.4332 6.23906 14.2409 6.17566 14.045C6.08485 13.7363 5.8342 13.5051 5.52533 13.445C5.15287 13.384 4.8779 13.0559 4.87501 12.669V11.428C4.87303 10.9821 5.18705 10.6007 5.61601 10.528C5.94143 10.4645 6.21316 10.2359 6.33751 9.921C6.37456 9.83233 6.41356 9.74433 6.45451 9.657C6.61989 9.33044 6.59705 8.93711 6.39503 8.633C6.1424 8.27288 6.18119 7.77809 6.48668 7.464L7.19746 6.735C7.54802 6.37532 8.1009 6.32877 8.50396 6.625L8.52638 6.641C8.82735 6.84876 9.21033 6.88639 9.54428 6.741C9.90155 6.60911 10.1649 6.29424 10.2375 5.912L10.2473 5.878C10.3275 5.37197 10.7536 5.00021 11.2535 5H12.1115C12.6248 4.99976 13.0629 5.38057 13.1469 5.9L13.1625 5.97C13.2314 6.33617 13.4811 6.63922 13.8216 6.77C14.1498 6.91447 14.5272 6.87674 14.822 6.67L14.8707 6.634C15.2842 6.32834 15.8528 6.37535 16.2133 6.745L16.8675 7.417C17.1954 7.75516 17.2366 8.28693 16.965 8.674C16.7522 8.99752 16.7251 9.41325 16.8938 9.763L16.9358 9.863C17.0724 10.2045 17.3681 10.452 17.7216 10.521C18.1837 10.5983 18.5235 11.0069 18.525 11.487V12.6C18.5249 13.0234 18.2263 13.3846 17.8191 13.454C17.4842 13.5199 17.2114 13.7686 17.1083 14.102C17.0628 14.2353 17.0121 14.3687 16.9562 14.502C16.8261 14.795 16.855 15.1364 17.0323 15.402C17.2662 15.7358 17.2299 16.1943 16.9465 16.485L16.0388 17.417C15.7792 17.6832 15.3698 17.7175 15.0716 17.498C14.8226 17.3235 14.5001 17.3043 14.2331 17.448C14.0428 17.5447 13.8475 17.6305 13.6481 17.705C13.3692 17.8037 13.1636 18.0485 13.1099 18.346C13.053 18.7203 12.7401 18.9972 12.3708 19H11.0175Z"--}}
                    {{--                                          stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>--}}
                    {{--                                    <path fill-rule="evenodd" clip-rule="evenodd"--}}
                    {{--                                          d="M13.9747 12C13.9747 13.2885 12.9563 14.333 11.7 14.333C10.4437 14.333 9.42533 13.2885 9.42533 12C9.42533 10.7115 10.4437 9.66699 11.7 9.66699C12.9563 9.66699 13.9747 10.7115 13.9747 12Z"--}}
                    {{--                                          stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>--}}
                    {{--                                </g>--}}
                    {{--                            </svg>--}}
                    {{--                            <p class="tab-btn-heading">Setting</p>--}}
                    {{--                        </div>--}}
                    {{--                    </button>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Edit Profile content -->
    <div class="center-and-margin">
        <!-- Profile secion -->
        <div class="profile-icon-content tab-content" id="Info">

            <form id="basic-info-form" data-user-id="{{$profile['memorialProfile']->id}}">
                <!--Basic Information-->
                <div class="form-of-logged-in-user">

                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">who is this memorial for</h1>
                    </div>
                    <div class="form-data-of-profile-page">
                        <div class="form-group-input">
                            <label for="">First Name</label>
                            <input type="text" class="input-design" name="first_name" value="@if($profile['memorialProfile']->first_name){{$profile['memorialProfile']->first_name}}@endif"/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Middle Name</label>
                            <input type="text" class="input-design" name="middle_name" value="@if($profile['memorialProfile']->middle_name){{$profile['memorialProfile']->middle_name}}@endif"/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Last Name</label>
                            <input type="text" class="input-design" name="last_name" value="@if($profile['memorialProfile']->last_name){{$profile['memorialProfile']->last_name}}@endif"/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Suffix(Mr., M.D., etc.)</label>
                            <input type="text" class="input-design" name="suffix" value="@if($profile['memorialProfile']->suffix){{$profile['memorialProfile']->suffix}}@endif"/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Instagram</label>
                            <input type="url" class="input-design" name="instagram" value="@if($profile['memorialProfile']->instagram){{$profile['memorialProfile']->instagram}}@endif"/>
                        </div>
                        <div class="form-group-input">
                            <label for="">Facebook</label>
                            <input type="url" class="input-design" name="facebook" value="@if($profile['memorialProfile']->facebook){{$profile['memorialProfile']->facebook}}@endif"/>
                        </div>
                        <div class="form-group-input">
                            <label for="">tiktok</label>
                            <input type="url" class="input-design" name="tiktok" value="@if($profile['memorialProfile']->tiktok){{$profile['memorialProfile']->tiktok}}@endif"/>
                        </div>
                        <div class="form-group-input">
                            <label for="memorial_biography">Their Obituary/Biography</label>
                            <input name="memorial_biography" type="text" placeholder="Their Obituary/Biography" value="@if($profile['memorialAdditional']->biography){{$profile['memorialAdditional']->biography }}@endif" class="input-design @error('memorial_biography') is-invalid @enderror" />
                            @error('memorial_biography')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                            @enderror
                        </div>
                        <div class="form-group-input">
                            <label for="memorial_fav_saying">Their Favourite Saying</label>
                            <input name="memorial_fav_saying" type="text" placeholder="Their Favourite Saying" value="@if($profile['memorialAdditional']->fav_saying){{$profile['memorialAdditional']->fav_saying }}@endif" class="input-design @error('memorial_fav_saying') is-invalid @enderror" />
                            @error('memorial_fav_saying')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                            @enderror
                        </div>
                        <div class="form-group-input">
                            <label for="memorial_resting_place">Resting Place:</label>
                            <input name="memorial_resting_place" type="text" placeholder="Their Resting Place" value="@if($profile['memorialAdditional']->resting_place){{$profile['memorialAdditional']->resting_place }}@endif" class="input-design @error('memorial_resting_place') is-invalid @enderror" />
                            @error('memorial_resting_place')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                            @enderror
                        </div>
                        <div class="form-group-input">
                            <label for="">Date of Birth</label>
                            <div class="row-of-inputs">
                                @php
                                    $dobParts = explode('-', $profile['memorialProfile']->dob);
                                    $selectedYear = $dobParts[0] ?? '';
                                    $selectedMonth = $dobParts[1] ?? '';
                                    $selectedDay = $dobParts[2] ?? '';
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
                                    @for ($year = 1900; $year <= 2023; $year++)
                                        Adjust the end year as needed
                                        <option value="{{ $year }}" @if($selectedYear == $year) selected @endif>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group-input">
                            <label for="">Date of Death</label>
                            <div class="row-of-inputs">
                                @php
                                    $dodParts = explode('-', $profile['memorialAdditional']->dod);
                                    $selectedYear = $dodParts[0] ?? '';
                                    $selectedMonth = $dodParts[1] ?? '';
                                    $selectedDay = $dodParts[2] ?? '';
                                @endphp

                                    <!-- Day Dropdown -->
                                <select name="death_day" id="death_day">
                                    @for ($day = 1; $day <= 31; $day++)
                                        <option value="{{ $day }}" @if($selectedDay == $day) selected @endif>{{ $day }}</option>
                                    @endfor
                                </select>

                                <!-- Month Dropdown -->
                                <select name="death_month" id="death_month">
                                    @for ($month = 1; $month <= 12; $month++)
                                        <option value="{{ $month }}" @if($selectedMonth == $month) selected @endif>{{ $month }}</option>
                                    @endfor
                                </select>
                                <!-- Year Dropdown -->
                                <select name="death_year" id="death_year">
                                    @for ($year = 1900; $year <= 2024; $year++)
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
                                    <input type="radio" id="male" name="gender" value="Male" @if($profile['memorialProfile']->gender === 'Male') checked @endif />
                                    <label for="male">Male</label><br/>
                                </div>
                                <div class="radio-input">
                                    <input type="radio" id="female" name="gender" value="Female" @if($profile['memorialProfile']->gender === 'Female') checked @endif />
                                    <label for="female">Female</label><br/>
                                </div>
                                <div class="radio-input">
                                    <input type="radio" id="other" name="gender" value="Other" @if($profile['memorialProfile']->gender === 'Other') checked @endif />
                                    <label for="other">Other</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="basicSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                        <!-- Dynamic success message will be displayed here -->
                    </div>
                    <div id="basicErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                        <!-- Dynamic success message will be displayed here -->
                    </div>
                    <div id="basicLoader" style="display: none;">
                        <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                        <p>Loading...</p>
                    </div>

                    <div class="footer-of-form-content">
                        <button class="form-btn">Save Changes</button>
                    </div>
                </div>
            </form>

            {{--            Home City--}}
            <form id="home-city-info-form" data-user-id="{{$profile['memorialProfile']->id}}">

                <div class="form-of-logged-in-user">

                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Home Town</h1>
                    </div>
                    <div class="form-data-of-profile-page">
                        <div class="form-group-input">
                            <label for="">Search</label>
                            <input type="text" class="input-design" name="home_city" value="@if(isset($profile['memorialCity']->home_city)){{$profile['memorialCity']->home_city}}@endif"/>
                        </div>
                    </div>
                    <div id="homeSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                        <!-- Dynamic success message will be displayed here -->
                    </div>
                    <div id="homeErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                        <!-- Dynamic success message will be displayed here -->
                    </div>
                    <div id="homeLoader" style="display: none;">
                        <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                        <p>Loading...</p>
                    </div>

                    <div class="footer-of-form-content">
                        <button class="form-btn">Save Changes</button>
                    </div>
                </div>
            </form>

            {{--            Other City--}}
            <form id="other-city-info-form" data-user-id="{{$profile['memorialProfile']->id}}">
                <div class="form-of-logged-in-user">

                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Other city</h1>
                    </div>
                    <div class="form-data-of-profile-page">
                        <div class="form-group-input">
                            <label for="">The last city they resided in. If it is the same as their
                                Hometown, leave it blank.</label>
                            <input type="text" class="input-design" name="other_city" value="@if(isset($profile['memorialCity']->other_city)){{$profile['memorialCity']->other_city}}@endif"/>
                        </div>
                    </div>
                    <div id="otherSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                        <!-- Dynamic success message will be displayed here -->
                    </div>
                    <div id="otherErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                        <!-- Dynamic success message will be displayed here -->
                    </div>
                    <div id="otherLoader" style="display: none;">
                        <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                        <p>Loading...</p>
                    </div>

                    <div class="footer-of-form-content">
                        <button class="form-btn">Save Changes</button>
                    </div>
                </div>
            </form>

            {{--Occupational History--}}
            <div id="occupation-history" class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">
                        Occupational History
                    </h1>
                </div>
                <div class="form-data-of-profile-page">
                    <p class="heading-of-form-data">
                        Occupation Company From Year To Year
                    </p>
                    <div class="occupation_container">
                        <button class="add_occupation_field form-btn">
                            <span style="font-size: 16px; font-weight: bold">+ </span>
                            Add Occupation &nbsp;
                        </button>
                    </div>
                </div>
                <div id="occupationSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                    <!-- Dynamic success message will be displayed here -->
                </div>
                <div id="occupatioErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                    <!-- Dynamic success message will be displayed here -->
                </div>
                <div id="occupationLoader" style="display: none;">
                    <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                    <p>Loading...</p>
                </div>

                <div class="footer-of-form-content">
                    <button id="occupation-info-btn" data-user-id="{{$profile['memorialProfile']->id}}" class="form-btn">Save Changes</button>
                </div>
            </div>

            {{--Academic History--}}
            <div id="academic-info" class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Academic History</h1>
                </div>
                <div class="form-data-of-profile-page">
                    <p class="heading-of-form-data">Diploma School From Year To Year</p>
                    <div class="academic_container">
                        <button class="add_academic_field form-btn">
                            <span style="font-size: 16px; font-weight: bold"> + </span>
                            Add Academic &nbsp;
                        </button>
                    </div>
                </div>
                <div id="academicSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                    <!-- Dynamic success message will be displayed here -->
                </div>
                <div id="academicErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                    <!-- Dynamic success message will be displayed here -->
                </div>
                <div id="academicLoader" style="display: none;">
                    <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                    <p>Loading...</p>
                </div>

                <div class="footer-of-form-content">
                    <button id="academic-info-btn" data-user-id="{{$profile['memorialProfile']->id}}" class="form-btn">Save Changes</button>
                </div>
            </div>


            {{--Milestones--}}

            <div id="milestone-info" class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Milestones</h1>
                </div>
                <div class="form-data-of-profile-page">
                    <p class="heading-of-form-data">
                        A milestone is a significant event in a person's life. For
                        example: a wedding date or winning award!
                    </p>
                    <div class="milestone_container">
                        <button class="add_milestone_field form-btn">
                            <span style="font-size: 16px; font-weight: bold"> + </span>
                            Add Milestone &nbsp;
                        </button>
                    </div>
                </div>
                <div id="milestoneSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                    <!-- Dynamic success message will be displayed here -->
                </div>
                <div id="milestoneErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                    <!-- Dynamic success message will be displayed here -->
                </div>
                <div id="milestoneLoader" style="display: none;">
                    <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                    <p>Loading...</p>
                </div>

                <div class="footer-of-form-content">
                    <button id="milestone-info-btn" data-user-id="{{$profile['memorialProfile']->id}}" class="form-btn">Save Changes</button>
                </div>
            </div>


            {{--                        Religious Values--}}
            <form id="religion-info-form" data-user-id="{{$profile['memorialProfile']->id}}">
                <div class="form-of-logged-in-user">

                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Religious Values</h1>
                    </div>
                    <div class="form-data-of-profile-page">
                        <p class="heading-of-form-data">
                            A milestone is a significant event in a person's life. For example: a wedding date or winning award!
                        </p>

                        <div class="form-group-input">
                            <label for="">Enter Your Religion </label>
                            <div class="row-of-inputs">

                                    <input type="text" name="custom_religion" id="custom_religion" class="input-design" value="{{$profile['memorialAdditional']->religion}}" />

                            </div>
                        </div>
                    </div>
                    <div id="religionSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                        <!-- Dynamic success message will be displayed here -->
                    </div>
                    <div id="religionErrorMessage" class="alert alert-danger" role="alert" style="color: blue; display: none;">
                        <!-- Dynamic success message will be displayed here -->
                    </div>
                    <div id="religionLoader" style="display: none;">
                        <img src="{{asset('assets/loader.gif')}}" alt="  GIF">
                        <p>Loading...</p>
                    </div>

                    <div class="footer-of-form-content">
                        <button class="form-btn">Save Changes</button>
                    </div>
                </div>
            </form>
            {{--Interests--}}

            <div id="interest-info" class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Interests</h1>
                </div>
                <div class="form-data-of-profile-page">
                    <p class="heading-of-form-data">
                        A milestone is a significant event in a person's life. For
                        example: a wedding date or winning award!
                    </p>
                    <div class="interests_container">
                        <button class="add_interests_field form-btn">
                            <span style="font-size: 16px; font-weight: bold"> + </span>
                            Add Interests &nbsp;
                        </button>
                    </div>
                </div>
                <div id="interestSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                    <!-- Dynamic success message will be displayed here -->
                </div>
                <div id="ErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                    <!-- Dynamic success message will be displayed here -->
                </div>
                <div id="interestLoader" style="display: none;">
                    <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                    <p>Loading...</p>
                </div>

                <div class="footer-of-form-content">
                    <button id="interest-info-btn" class="form-btn" data-user-id="{{$profile['memorialProfile']->id}}">Save Changes</button>
                </div>
            </div>


        </div>


        <!-- Profile Picture -->
        <div class="Picture tab-content" id="Picture">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Profile Picture</h1>
                </div>
                <div class="form-data-of-profile-page">
                    <p>
                        Add a cover photo for this profile. You can change this photo at
                        any time. The maximum size is 1 MB. You can use these formats:
                        .png, .jpeg, .gif.
                    </p>
                    <form id="profile_image_form" enctype="multipart/form-data">
                        <div class="form-group-input">
                            <div id="profile-image-div" class="profile-pic-wrapper-of-Picture">
                                @if($profile['memorialProfile']->profile_image)
                                    <img src="{{asset($profile['memorialProfile']->profile_image) }}" alt="" class="pic-of-usr"/>
                                @else
                                    <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="pic-of-usr"/>
                                @endif
                            </div>
                            <div id="profileCustomSuccessMessage" class="alert alert-success" role="alert" style="color: blue; display: none;">
                                <!-- Dynamic success message will be displayed here -->
                            </div>
                            <div id="profileCustomErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                                <!-- Dynamic success message will be displayed here -->
                            </div>
                            <div id="profileCustomLoader" style="display: none;">
                                <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                                <p>Loading...</p>
                            </div>

                            <div class="custom-file-chooser-wrapper">
                                <input type="file" id="file-input" name="memento_profile_image_custom"/>

                                <label id="file-input-label" for="file-input">
                                    + Select a File</label</div>
                        </div>
                        <button id="profile_image_custom_btn" class="form-btn" data-user-id="{{$profile['memorialProfile']->id}}">Save Image</button>

                    </form>
                </div>
            </div>
        </div>


    </div>
    <div class="Memorial tab-content" id="Memorial">
        <h1>Memorial</h1>
    </div>

    <div class="Theme tab-content" id="Theme">
        <div class="form-of-logged-in-user">
            <div class="header-of-form-profile margin-top">
                <h1 class="form-top-main-heading-of-profile">Cover Photos</h1>
            </div>
            <div class="form-data-of-profile-page">

                <div class="tab-wrapper-of-theme">
                    <div class="theme-tab">
                        <button class="theme-tablinks " style="display: none" onclick="openThemeItem(event, 'theme')" id="defaultOpen">Cover Photos</button>
{{--                        <button class="theme-tablinks" onclick="openThemeItem(event, 'Custom')">Custom</button>--}}
                    </div>
                    <div id="Custom" sclass="theme-tabcontent">

                    </div>

                    <div id="theme" class="theme-tabcontent">
                        <p>You can upload your own unique picture here. For the best look, we recommend using a picture with a high resolution (1024x768 and higher, for example).</p>
                        <div class="custom-file-chooser-wrapper">
                            <div id="themeCustomSuccessMessage" class="alert alert-success" role="alert" style="display: none; color: blue">
                                <!-- Dynamic success message will be displayed here -->
                            </div>
                            <div id="themeCustomErrorMessage" class="alert alert-danger" role="alert" style="display: none;">
                                <!-- Dynamic success message will be displayed here -->
                            </div>
                            <div id="themeCustomLoader" style="display: none;">
                                <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                                <p>Loading...</p>
                            </div>

                            <form id="theme_image_form" enctype="multipart/form-data">
                                <label for="memorial_theme_image_custom" class="file-input-label">
                                    <input type="file" id="memorial_theme_image_custom" name="memorial_theme_image_custom" style="display: none;">
                                    <span class="form-btn">+ Choose a File</span>
                                </label>
                                <button type="submit" class="form-btn" id="theme_image_custom_btn" data-user-id="{{$profile['memorialProfile']->id}}">Upload Image</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection
@section('memorialProfileJS')
    <script>
        //Tabs
        //initially when it loads only info will shown and all other will hide
        tabcontent = document.getElementsByClassName("tab-content");
        document.getElementById("defaultOpen").click();
        for (i = 1; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Start here


        $(document).ready(function () {

            var max_fields_of_occupation = 10;
            var occupation_counter = 1;
            var occupation_container = $(".occupation_container");
            var add_occupation_field_btn = $(".add_occupation_field");
            appendOccupation();
            @php
                if($profile['memorialOccupation'])
                {

                    $occupationArray = explode(', ', $profile['memorialOccupation']->occupation);
                    $companyArray = explode(', ', $profile['memorialOccupation']->company);
                    $toYearArray = explode(', ', $profile['memorialOccupation']->to_year);
                    $fromYearArray = explode(', ', $profile['memorialOccupation']->from_year);

                    $data['occupations'] = [];

                    // Assuming all arrays have the same length
                    $length = count($occupationArray);

                    for ($i = 0; $i < $length; $i++) {
                        $data['occupations'][] = [
                            'occupation' => $occupationArray[$i],
                            'company' => $companyArray[$i],
                            'to_year' => $toYearArray[$i],
                            'from_year' => $fromYearArray[$i],
                        ];
                    }
                }
                if(empty($data['occupations'])) {
    // Initialize $data['occupations'] with a default empty entry
    $data['occupations'] = [['occupation' => '', 'company' => '', 'to_year' => '', 'from_year' => '']];
}
            @endphp
            $(add_occupation_field_btn).click(function(e) {
                e.preventDefault();
                console.log("inside click");
                if (occupation_counter < max_fields_of_occupation) {
                    appendEmptyOccupationField();
                    occupation_counter++;
                } else {
                    alert("You Reached the limits");
                }
            });
            function appendOccupation() {
                var occupationHTML = ``;
                @if($data['occupations'])
                    @foreach($data['occupations'] as $occupation)
                    occupationHTML += `
                <div class="row-of-dynamic-inputs">
                    <div class="form-group-input">
                            <label for="">Occupation</label>
                            <input type="text" class="input-design" name="occupation[]" value="@if($occupation['occupation']){{ $occupation['occupation']}}@endif" />
                         </div>
                         <div class="form-group-input">
                            <label for="">Company</label>
                            <input type="text" class="input-design" name="company[]" value="@if($occupation['company']){{ $occupation['company']}}@endif" />
                        </div>
                        <div class="form-group-input">
                            <label for="">From Year</label>
                            <input type="text" class="input-design" name="from_year[]" value="@if($occupation['from_year']){{ $occupation['from_year']}}@endif" />
                        </div>
                        <div class="form-group-input">
                            <label for="">To Year</label>
                            <input type="text" class="input-design" name="to_year[]" value="@if($occupation['to_year']){{ $occupation['to_year']}}@endif" />
                        </div>
                    <svg class="deleteOccupation" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                        <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                    </svg>
                </div>`;
                @endforeach
                @endif
                $(occupation_container).append(occupationHTML);
            }
            function appendEmptyOccupationField() {
                var emptyOccupationHTML = `
             <div class="row-of-dynamic-inputs">
                <div class="form-group-input">
                    <label for="">Occupation</label>
                    <input type="text" class="input-design" name="occupation[]" value="" />
                </div>
                <div class="form-group-input">
                    <label for="">Company</label>
                    <input type="text" class="input-design" name="company[]" value="" />
                </div>
                <div class="form-group-input">
                    <label for="">From Year</label>
                    <input type="text" class="input-design" name="from_year[]" value="" />
                </div>
                <div class="form-group-input">
                    <label for="">To Year</label>
                    <input type="text" class="input-design" name="to_year[]" value="" />
                </div>
                <svg class="deleteOccupation" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                </svg>
            </div>`;
                $(occupation_container).append(emptyOccupationHTML);
            }

            $(occupation_container).on("click", ".deleteOccupation", function (e) {
                e.preventDefault();
                $(this).parent("div").remove();
                occupation_counter--;
            });
        });
        $(document).ready(function () {

            var max_fields_of_academic = 10;
            var academic_counter = 1;
            var academic_container = $(".academic_container");
            var add_academic_field_btn = $(".add_academic_field");
            appendAcademic();
            @php

                if($profile['memorialAcademic'])
                                    {

                                        $diplomaArray = explode(', ', $profile['memorialAcademic']->diploma);
                                        $schoolArray = explode(', ', $profile['memorialAcademic']->school);
                                        $toYearArray = explode(', ', $profile['memorialAcademic']->to_year);
                                        $fromYearArray = explode(', ', $profile['memorialAcademic']->from_year);

                                        $data['academics'] = [];

                                        // Assuming all arrays have the same length
                                        $length = count($diplomaArray);

                                        for ($i = 0; $i < $length; $i++) {
                                            $data['academics'][] = [
                                                'diploma' => $diplomaArray[$i],
                                                'school' => $schoolArray[$i],
                                                'to_year' => $toYearArray[$i],
                                                'from_year' => $fromYearArray[$i],
                                            ];
                                        }

                                        }
                                         if(empty($profile['memorialAcademic'])) {
// Initialize $data['occupations'] with a default empty entry
$data['academics'] = [['diploma' => '', 'school' => '', 'to_year' => '', 'from_year' => '']];
}
            @endphp
            $(add_academic_field_btn).click(function(e) {
                e.preventDefault();
                console.log("inside click");
                if (academic_counter < max_fields_of_academic) {
                    appendEmptyAcademicField();
                    academic_counter++;
                } else {
                    alert("You Reached the limits");
                }
            });
            function appendAcademic() {
                var academicHTML = ``;
                @if($data['academics'])
                    @foreach($data['academics'] as $academic)
                    academicHTML += `
                <div class="row-of-dynamic-inputs">
                    <div class="form-group-input">
                            <label for="">School</label>
                            <input type="text" class="input-design" name="diploma[]" value="@if($academic['diploma']){{ $academic['diploma']}}@endif" />
                         </div>
                         <div class="form-group-input">
                            <label for="">Diploma</label>
                            <input type="text" class="input-design" name="school[]" value="@if($academic['school']){{ $academic['school']}}@endif" />
                        </div>
                        <div class="form-group-input">
                            <label for="">From Year</label>
                            <input type="text" class="input-design" name="from_year[]" value="@if($academic['from_year']){{ $academic['from_year']}}@endif" />
                        </div>
                        <div class="form-group-input">
                            <label for="">To Year</label>
                            <input type="text" class="input-design" name="to_year[]" value="@if($academic['to_year']){{ $academic['to_year']}}@endif" />
                        </div>
                    <svg class="deleteAcademic" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                        <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                    </svg>
                </div>`;
                @endforeach
                @endif
                $(academic_container).append(academicHTML);
            }
            function appendEmptyAcademicField() {
                var emptyAcademicHTML = `
             <div class="row-of-dynamic-inputs">
                <div class="form-group-input">
                    <label for="">School</label>
                    <input type="text" class="input-design" name="school[]" value="" />
                </div>
                <div class="form-group-input">
                    <label for="">Diploma</label>
                    <input type="text" class="input-design" name="diploma[]" value="" />
                </div>
                <div class="form-group-input">
                    <label for="">From Year</label>
                    <input type="text" class="input-design" name="from_year[]" value="" />
                </div>
                <div class="form-group-input">
                    <label for="">To Year</label>
                    <input type="text" class="input-design" name="to_year[]" value="" />
                </div>
                <svg class="deleteAcademic" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                </svg>
            </div>`;
                $(academic_container).append(emptyAcademicHTML);
            }

            $(academic_container).on("click", ".deleteAcademic", function (e) {
                e.preventDefault();
                $(this).parent("div").remove();
                academic_counter--;
            });
        });
        $(document).ready(function () {

            var max_fields_of_milestone = 10;
            var milestone_counter = 1;
            var milestone_container = $(".milestone_container");
            var add_milestone_field_btn = $(".add_milestone_field");
            appendMilestone();
            @php
                if ( $profile['memorialMilestone'])
                                        {
                                            $milestoneArray = explode(', ', $profile['memorialMilestone']->milestone);
                                        $yearArray = explode(', ', $profile['memorialMilestone']->year);

                                        $data['milestone'] = [];

                                        // Assuming all arrays have the same length
                                        $length = count($milestoneArray);

                                        for ($i = 0; $i < $length; $i++) {
                                            $data['milestone'][] = [
                                                'milestone' => $milestoneArray[$i],
                                                'year' => $yearArray[$i],
                                            ];
                                        }
                                        }
                 if(empty($profile['memorialMilestone'])) {
                        // Initialize $data['occupations'] with a default empty entry
                        $data['milestone'] = [['milestone' => '', 'year' => '']];
                    }
            @endphp
            $(add_milestone_field_btn).click(function(e) {
                e.preventDefault();
                console.log("inside click");
                if (milestone_counter < max_fields_of_milestone) {
                    appendEmptyMilestoneField();
                    milestone_counter++;
                } else {
                    alert("You Reached the limits");
                }
            });
            function appendMilestone() {
                var milestoneHTML = ``;
                @if($data['milestone'])
                    @foreach($data['milestone'] as $milestone)
                    milestoneHTML += `
                <div class="row-of-dynamic-inputs">
                    <div class="form-group-input">
                            <label for="">MileStone</label>
                            <input type="text" class="input-design" name="milestone[]" value="@if($milestone['milestone']){{ $milestone['milestone']}}@endif" />
                         </div>
                         <div class="form-group-input">
                            <label for="">Year</label>
                            <input type="text" class="input-design" name="year[]" value="@if($milestone['year']){{ $milestone['year']}}@endif" />
                        </div>
                    <svg class="deleteMilestone" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                        <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                    </svg>
                </div>`;
                @endforeach
                @endif
                $(milestone_container).append(milestoneHTML);
            }
            function appendEmptyMilestoneField() {
                var emptyMilestoneHTML = `
             <div class="row-of-dynamic-inputs">
                <div class="form-group-input">
                    <label for="">Milestone</label>
                    <input type="text" class="input-design" name="milestone[]" value="" />
                </div>
                <div class="form-group-input">
                    <label for="">Year</label>
                    <input type="text" class="input-design" name="year[]" value="" />
                </div>
                <svg class="deleteMilestone" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                </svg>
            </div>`;
                $(milestone_container).append(emptyMilestoneHTML);
            }

            $(milestone_container).on("click", ".deleteMilestone", function (e) {
                e.preventDefault();
                $(this).parent("div").remove();
                milestone_counter--;
            });
        });
        $(document).ready(function () {
                var max_fields_of_interests = 10;
                var interests_counter = 1;
                var interests_container = $(".interests_container");
                var add_interests_field_btn = $(".add_interests_field");

                appendInterests();
                @php
                    $interests = [];
                    if (!empty($profile['memorialInterest'])) {
                        $interests = explode(', ', $profile['memorialInterest']->interest);
                    }
                @endphp
                // Event handler for adding new interest field
                $(add_interests_field_btn).click(function(e) {
                    e.preventDefault();
                    console.log("inside click");
                    if (interests_counter < max_fields_of_interests) {
                        appendEmptyInterestField();
                        interests_counter++;
                    } else {
                        alert("You Reached the limits");
                    }
                });

                // Function to append existing interests
                function appendInterests() {
                    var interestsHTML = ``;
                    @if($interests)
                        @foreach($interests as $interest)
                        interestsHTML += `
                <div class="row-of-dynamic-inputs">
                    <div class="form-group-input">
                        <label for="">Interest Name</label>
                        <input type="text" class="input-design" name="interest[]" value="@if($interest){{$interest}}@endif" />
                    </div>
                    <svg class="deleteInterest" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="removeInterest(this)">
                        <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                    </svg>
                </div>`;
                    @endforeach
                    @endif
                    $(interests_container).append(interestsHTML);
                }

                // Function to append an empty interest field
                function appendEmptyInterestField() {
                    var emptyInterestHTML = `
            <div class="row-of-dynamic-inputs">
                <div class="form-group-input">
                    <label for="">Interest Name</label>
                    <input type="text" class="input-design" name="interest[]" value="" />
                </div>
                <svg class="deleteInterest" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="removeInterest(this)">
                    <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                </svg>
            </div>`;
                    $(interests_container).append(emptyInterestHTML);
                }

                // Event handler for deleting an interest field
                $(interests_container).on("click", ".deleteInterest", function (e) {
                    e.preventDefault();
                    $(this).parent("div").remove();
                    interests_counter--;
                });
            });

        function openProfileItem(evt, profileItem) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tab-content");
            console.log("Tab contents", tabcontent);
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tab-single-link");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(profileItem).style.display = "flex";
            document.getElementById(profileItem).style.flexDirection = "column";
            evt.currentTarget.className += " active";
        }



        function openThemeItem(evt, themeTab) {
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

        // AJAX submit forms
        $(document).ready(function () {
            //gallery img
            $(".whole-image-wrapper-with-overlay").click(function (e) {
                e.preventDefault();
                console.log('Image Click', e);
                let allElements = $(".grid-of-photos .whole-image-wrapper-with-overlay .overlay")
                for (let i = 0; i < allElements.length; i++) {
                    console.log('Single class', allElements[i].classList[1])
                    if (allElements[i].classList[1]) {
                        console.log('Yes')
                        allElements[i].classList.remove('show');
                    }
                }
                // console.log('All elements',allElements)
                console.log('ele', e.currentTarget)
                let ele = e.currentTarget.children[1];
                ele.classList.toggle('show')
                console.log('Child', ele)
            });
            $(".whole-image-wrapper-with-overlay-of-theme").click(function (e) {
                e.preventDefault();
                console.log('Image Click', e);
                let allElements = $(".grid-of-themes .whole-image-wrapper-with-overlay-of-theme .overlay")
                for (let i = 0; i < allElements.length; i++) {
                    console.log('Single class', allElements[i].classList[1])
                    if (allElements[i].classList[1]) {
                        console.log('Yes')
                        allElements[i].classList.remove('show');
                    }

                }
                // console.log('All elements',allElements)
                console.log('ele', e.currentTarget)
                let ele = e.currentTarget.children[1];

                ele.classList.toggle('show')
                console.log('Child', ele)
                // $(".overlay").show();

            })

            $('#basic-info-form').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'basic_info';
                // Serialize the form data along with user_id and form_identifier
                var formData = $(this).serialize() + '&user_id=' + userId;
                saveWithoutImageFormData(userId, formData, identifier, '#basicSuccessMessage', '#basicErrorMessage', '#basicLoader');
                return 0;
            });

            $('#home-city-info-form').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'home_info';
                // Serialize the form data along with user_id
                var formData = $(this).serialize() + '&user_id=' + userId
                saveWithoutImageFormData(userId, formData, identifier, '#homeSuccessMessage', 'homeErrorMessage', '#homeLoader');
                return 0;
            });

            $('#other-city-info-form').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'other_info';
                // Serialize the form data along with user_id
                var formData = $(this).serialize() + '&user_id=' + userId
                saveWithoutImageFormData(userId, formData, identifier, '#otherSuccessMessage', '#otherErrorMessage', '#otherLoader');
                return 0;
            });

            $('#occupation-info-btn').click(function (e) {
                e.preventDefault();
                var userId = $(this).data('user-id');
                var identifier = 'occupation_info';

                // Serialize the form data manually
                var formData = {};
                formData['occupation'] = [];
                formData['company'] = [];
                formData['from_year'] = [];
                formData['to_year'] = [];

                $('.row-of-dynamic-inputs').each(function () {
                    var occupationInput = $(this).find('[name="occupation[]"]');
                    var companyInput = $(this).find('[name="company[]"]');
                    var fromYearInput = $(this).find('[name="from_year[]"]');
                    var toYearInput = $(this).find('[name="to_year[]"]');

                    // Check if input fields exist and have values
                    if (occupationInput.length && companyInput.length && fromYearInput.length && toYearInput.length) {
                        var occupationValue = occupationInput.val().trim();
                        var companyValue = companyInput.val().trim();
                        var fromYearValue = fromYearInput.val().trim();
                        var toYearValue = toYearInput.val().trim();

                        // Push values only if they are not empty
                        if (occupationValue || companyValue || fromYearValue || toYearValue) {
                            formData['occupation'].push(occupationValue);
                            formData['company'].push(companyValue);
                            formData['from_year'].push(fromYearValue);
                            formData['to_year'].push(toYearValue);
                        }
                    }
                });

                formData['user_id'] = userId;
                formData['form_identifier'] = identifier;

                // Convert formData to a serialized string
                formData = $.param(formData);

                saveWithoutImageFormData(userId, formData, identifier, '#occupationSuccessMessage', '#occupatioErrorMessage', '#occupationLoader');
                return false; // Prevent default form submission
            });

            $('#academic-info-btn').click(function (e) {
                e.preventDefault();
                var userId = $(this).data('user-id');
                var identifier = 'academic_info';

                var formData = {};
                formData['diploma'] = [];
                formData['school'] = [];
                formData['from_year'] = [];
                formData['to_year'] = [];

                $('.row-of-dynamic-inputs').each(function () {
                    var diplomaInput = $(this).find('[name="diploma[]"]');
                    var schoolInput = $(this).find('[name="school[]"]');
                    var fromYearInput = $(this).find('[name="from_year[]"]');
                    var toYearInput = $(this).find('[name="to_year[]"]');

                    // Check if input fields exist and have values
                    if (diplomaInput.length && schoolInput.length && fromYearInput.length && toYearInput.length) {
                        var diplomaValue = diplomaInput.val().trim();
                        var schoolValue = schoolInput.val().trim();
                        var fromYearValue = fromYearInput.val().trim();
                        var toYearValue = toYearInput.val().trim();

                        // Push values only if they are not empty
                        if (diplomaValue || schoolValue || fromYearValue || toYearValue) {
                            formData['diploma'].push(diplomaValue);
                            formData['school'].push(schoolValue);
                            formData['from_year'].push(fromYearValue);
                            formData['to_year'].push(toYearValue);
                        }
                    }
                });
                // Add additional data manually (user_id and form_identifier)
                formData['user_id'] = userId;
                formData['form_identifier'] = identifier;

                // Convert formData to a serialized string
                formData = $.param(formData);

                // Send form data via AJAX
                saveWithoutImageFormData(userId, formData, identifier, '#academicSuccessMessage', '#academicErrorMessage', '#academicLoader');
                return 0;
            });


            $('#milestone-info-btn').click(function (e) {
                e.preventDefault();
                var userId = $(this).data('user-id');
                var identifier = 'milestone_info';

                // Serialize the form data manually
                var formData = {};
                formData['milestone'] = [];
                formData['year'] = [];

                $('.row-of-dynamic-inputs').each(function () {
                    var milestoneInput = $(this).find('[name="milestone[]"]');
                    var yearInput = $(this).find('[name="year[]"]');

                    if (milestoneInput.length && yearInput.length) {
                        var milestoneValue = milestoneInput.val().trim();
                        var yearValue = yearInput.val().trim();
                        if (milestoneValue || yearValue ) {
                            formData['milestone'].push(milestoneValue);
                            formData['year'].push(yearValue);
                        }
                    }
                });
                // Add additional data manually (user_id and form_identifier)
                formData['user_id'] = userId;
                formData['form_identifier'] = identifier;

                // Convert formData to a serialized string
                formData = $.param(formData);

                // Send form data via AJAX
                saveWithoutImageFormData(userId, formData, identifier, '#milestoneSuccessMessage', '#milestoneErrorMessage', '#milestoneLoader');
                return 0;
            });

            $('#religion-info-form').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'religion_info';
                // Serialize the form data along with user_id
                var formData = $(this).serialize() + '&user_id=' + userId
                saveWithoutImageFormData(userId, formData, identifier, '#religionSuccessMessage', '#religionErrorMessage', '#religionLoader');
                return 0;
            });

            $('#interest-info-btn').click(function (e) {
                e.preventDefault();
                var userId = $(this).data('user-id');
                var identifier = 'interest_info';

                // Serialize the form data manually
                var formData = {};
                formData['interest'] = [];

                $('.row-of-dynamic-inputs').each(function () {
                    var interestInput = $(this).find('[name="interest[]"]');
                    if (interestInput.length) {
                        var interestValue = interestInput.val().trim();
                        if (interestValue ) {
                            formData['interest'].push(interestValue);
                        }
                    }
                });
                formData['user_id'] = userId;
                formData['form_identifier'] = identifier;

                // Convert formData to a serialized string
                formData = $.param(formData);

                // Send form data via AJAX
                saveWithoutImageFormData(userId, formData, identifier, '#interestSuccessMessage', '#interestErrorMessage', '#interestLoader');
                return 0;
            });


            function saveWithoutImageFormData(userId, formData, formType, formSuccessMessage, formErrorMessage, loaderName) {

                var loaderId = loaderName; // Define loaderId here with the appropriate ID of your loader element
                var successMessageId = formSuccessMessage; // Assuming you have a message element with ID 'message'
                var errorMessageId = formErrorMessage; // Assuming you have a message element with ID 'message'


                // Show loader
                $(loaderId).show();
                // Hide previous message
                $(successMessageId).hide();
                $(errorMessageId).hide();
                $.ajax({
                    type: 'POST',
                    url: '/update-memorial-profile-withoutimage/' + userId + '/' + formType,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.success) {
                            setTimeout(function () {
                                $(loaderId).hide();
                                // Handle success response
                                console.log(response);
                                // Display success message to the user
                                if (response.success) {
                                    $(successMessageId).text(response.message).show();

                                } else {
                                    $(errorMessageId).text(response.message).show();
                                }
                            }, 2000); // 2000 milliseconds = 2 seconds

                        } else {
                            // Handle failure, show an error message, or take appropriate action
                            alert('Error: ' + response.message);
                        }
                    },

                    error: function (error) {
                        console.error(error);
                        setTimeout(function () {
                            $(loaderId).hide();

                        }, 2000);
                        // Access the error details sent from the server
                        var errorMessage = error.responseJSON.message;
                        var errorDetails = error.responseJSON.error_details;

                        // Display the error message to the user or log it for debugging
                        alert('Error: ' + errorMessage + '\nDetails: ' + errorDetails);
                    }
                });
            }


            $('#profile_image_custom_btn').click(function (e) {
                e.preventDefault();


                var userId = $(this).data('user-id');
                var identifier = 'profile_image_custom';

                // Create a new FormData object for file upload do not serialize
                var formData = new FormData($('#profile_image_form')[0]);

                // Add additional data manually (user_id and form_identifier)
                formData.append('user_id', userId);
                formData.append('form_identifier', identifier);
                formData.append('is_image_upload', true);

                saveFormImageData(userId, formData, 'profile_image_custom', '#profileCustomSuccessMessage', '#profileCustomErrorMessage', '#profileCustomLoader');
                return 0;
            });
            // Function for clicking the "Select" button
            $('#profile_image_library').click(function (e) {
                e.preventDefault();

                var userId = $(this).data('user-id');
                var selectedImageId = $(".overlay.show").parent().attr("id");

                if (selectedImageId) {
                    // Extract the image ID from the selected image
                    var imageId = selectedImageId.split("-")[2];
                    // Assuming you have the image URL associated with each image
                    var imageURL = $("#img-id-" + imageId + " .grid-single-img").attr("src");
                    // Perform the AJAX request to update the profile image
                    updateProfileImage(userId, imageURL);
                } else {
                    alert("Please select an image first.");
                }
            });

            // Function to update the profile image via AJAX
            function updateProfileImage(userId, imageURL) {
                var formData = new FormData();
                formData.append('user_id', userId);
                formData.append('form_identifier', 'profile_image_library');
                formData.append('is_image_upload', true);

                fetch(imageURL)
                    .then(response => response.blob())
                    .then(blob => {
                        console.log(blob);
                        formData.append('profile_image', blob);
                        console.log(formData); // Log FormData object for inspection
                        saveFormImageData(userId, formData, 'profile_image_library', '#profileSuccessMessage', '#profileErrorMessage', '#profileLoader');
                    })
                    .catch(error => console.error('Error fetching image:', error));
            }

            //Ajax function


            $('#theme_image_custom_btn').click(function (e) {
                e.preventDefault();


                var userId = $(this).data('user-id');
                var identifier = 'theme_image_custom';

                // Create a new FormData object for file upload do not serialize
                var formData = new FormData($('#theme_image_form')[0]);

                // Add additional data manually (user_id and form_identifier)
                formData.append('user_id', userId);
                formData.append('form_identifier', identifier);
                formData.append('is_image_upload', true);

                saveFormImageData(userId, formData, 'theme_image_custom', '#themeCustomSuccessMessage', '#themeCustomErrorMessage', '#themeCustomLoader');
                return 0;
            });
            $('#theme_image_library_btn').click(function (e) {
                e.preventDefault();

                var userId = $(this).data('user-id');
                var selectedImageId = $(".overlay.show").parent().attr("id");

                if (selectedImageId) {
                    // Extract the image ID from the selected image
                    var imageId = selectedImageId.split("-")[2];
                    // Assuming you have the image URL associated with each image
                    var imageURL = $("#img-id-" + imageId + " .grid-single-img").attr("src");
                    // Perform the AJAX request to update the profile image
                    updateThemeImage(userId, imageURL);
                } else {
                    alert("Please select an image first.");
                }
            });

            function updateThemeImage(userId, imageURL) {
                var formData = new FormData();
                formData.append('user_id', userId);
                formData.append('form_identifier', 'theme_image_library');
                formData.append('is_image_upload', true);

                fetch(imageURL)
                    .then(response => response.blob())
                    .then(blob => {
                        console.log(blob);
                        formData.append('theme_image', blob);

                        console.log(formData); // Log FormData object for inspection
                        saveFormImageData(userId, formData, 'theme_image_library', '#themeSuccessMessage', '#themeErrorMessage', '#themeLoader');
                    })
                    .catch(error => console.error('Error fetching image:', error));
            }

            //Ajax function

            function saveFormImageData(userId, formData, formType, formSuccessMessage, formErrorMessage, loaderName) {

                var loaderId = loaderName; // Define loaderId here with the appropriate ID of your loader element
                var successMessageId = formSuccessMessage; // Assuming you have a message element with ID 'message'
                var errorMessageId = formErrorMessage; // Assuming you have a message element with ID 'message'

                // Show loader
                $(loaderId).show();
                // Hide previous message
                $(successMessageId).hide();
                $(errorMessageId).hide();
                $.ajax({
                    type: 'POST',
                    url: '/update-memorial-profile/' + userId + '/' + formType,
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false, // Ensure the request is not cached

                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.success) {
                            setTimeout(function () {
                                $(loaderId).hide();
                                refreshProfileImageDiv(userId, formType);
                                // Handle success response
                                console.log(response);
                                // Display success message to the user
                                if (response.success) {
                                    $(successMessageId).text(response.message).show();

                                } else {
                                    $(errorMessageId).text(response.message).show();
                                }
                            }, 2000); // 2000 milliseconds = 2 seconds

                        } else {
                            // Handle failure, show an error message, or take appropriate action
                            alert('Error: ' + response.message);
                        }
                    },

                    error: function (error) {
                        console.error(error);

                        setTimeout(function () {
                            $(loaderId).hide();
                        }, 2000); // 2000 milliseconds = 2 seconds
                        // Access the error details sent from the server
                        var errorMessage = error.responseJSON.message;
                        var errorDetails = error.responseJSON.error_details;

                        // Display the error message to the user or log it for debugging
                        alert('Error: ' + errorMessage + '\nDetails: ' + errorDetails);
                    }
                });
            }


            function refreshProfileImageDiv(userId, formType) {
                // Assuming you have a unique identifier or class for the profile image div
                var profileImageDiv = $('#profile-image-div');
                var profileImageDivDp = $('#profile-image-div-dp');
                var themeImageDivDp = $('#theme-image-div-dp');
                // Make an Ajax request to get the updated profile image URL based on the form type
                $.ajax({
                    type: 'GET',
                    url: '/get-updated-image/' + userId + '/' + formType,
                    success: function (imageResponse) {
                        // Replace the content of the profile image div with the updated image
                        if (formType === 'theme_image_custom' || formType === 'theme_image_library') {
                            // Update theme image
                            themeImageDivDp.html(
                                '<img src="' + imageResponse.updatedImageURL + '" alt="" class="back-img"/>'
                            );
                        } else {
                            // Update profile images
                            profileImageDiv.html(
                                '<img src="' + imageResponse.updatedImageURL + '" alt="" class="pic-of-usr"/>'
                            );
                            profileImageDivDp.html(
                                '<img src="' + imageResponse.updatedImageURL + '" alt="" class="profile-img-user"/>'
                            );
                        }

                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            }
        });
    </script>
@endsection
