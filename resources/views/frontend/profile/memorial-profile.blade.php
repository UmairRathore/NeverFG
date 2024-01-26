@extends('layouts.frontend.profilelayout.master')
@section('title', 'Memorial Profile')
@section('content')

    <!-- Tabs section -->
    <section class="profile-content-wrapper">
        <div class="profile-content-wrapper-insider">
            <!-- Tabbed content -->
            <div class="top-header-of-profile-page">
                <h1 class="my-profile-name">Edit Ghulam 's Profile</h1>
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
                            <p class="tab-btn-heading">Picture</p>
                        </div>
                    </button>
                    <button class="tab-btn-styling tab-single-link" onclick="openProfileItem(event,'Memorial')">
                        <div class="tabbed-single-item">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M20.8477 1.87868C19.6761 0.707109 17.7766 0.707105 16.605 1.87868L2.44744 16.0363C2.02864 16.4551 1.74317 16.9885 1.62702 17.5692L1.03995 20.5046C0.760062 21.904 1.9939 23.1379 3.39334 22.858L6.32868 22.2709C6.90945 22.1548 7.44285 21.8693 7.86165 21.4505L22.0192 7.29289C23.1908 6.12132 23.1908 4.22183 22.0192 3.05025L20.8477 1.87868ZM18.0192 3.29289C18.4098 2.90237 19.0429 2.90237 19.4335 3.29289L20.605 4.46447C20.9956 4.85499 20.9956 5.48815 20.605 5.87868L17.9334 8.55027L15.3477 5.96448L18.0192 3.29289ZM13.9334 7.3787L3.86165 17.4505C3.72205 17.5901 3.6269 17.7679 3.58818 17.9615L3.00111 20.8968L5.93645 20.3097C6.13004 20.271 6.30784 20.1759 6.44744 20.0363L16.5192 9.96448L13.9334 7.3787Z"
                                          fill="currentColor"></path>
                                </g>
                            </svg>
                            <p class="tab-btn-heading">Memorial</p>
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
                            <p class="tab-btn-heading">Theme</p>
                        </div>
                    </button>
                    <button class="tab-btn-styling tab-single-link" onclick="openProfileItem(event,'Setting')">
                        <div class="tabbed-single-item">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0175 19C10.6601 19 10.3552 18.7347 10.297 18.373C10.2434 18.0804 10.038 17.8413 9.76171 17.75C9.53658 17.6707 9.31645 17.5772 9.10261 17.47C8.84815 17.3365 8.54289 17.3565 8.30701 17.522C8.02156 17.7325 7.62943 17.6999 7.38076 17.445L6.41356 16.453C6.15326 16.186 6.11944 15.7651 6.33361 15.458C6.49878 15.2105 6.52257 14.8914 6.39601 14.621C6.31262 14.4332 6.23906 14.2409 6.17566 14.045C6.08485 13.7363 5.8342 13.5051 5.52533 13.445C5.15287 13.384 4.8779 13.0559 4.87501 12.669V11.428C4.87303 10.9821 5.18705 10.6007 5.61601 10.528C5.94143 10.4645 6.21316 10.2359 6.33751 9.921C6.37456 9.83233 6.41356 9.74433 6.45451 9.657C6.61989 9.33044 6.59705 8.93711 6.39503 8.633C6.1424 8.27288 6.18119 7.77809 6.48668 7.464L7.19746 6.735C7.54802 6.37532 8.1009 6.32877 8.50396 6.625L8.52638 6.641C8.82735 6.84876 9.21033 6.88639 9.54428 6.741C9.90155 6.60911 10.1649 6.29424 10.2375 5.912L10.2473 5.878C10.3275 5.37197 10.7536 5.00021 11.2535 5H12.1115C12.6248 4.99976 13.0629 5.38057 13.1469 5.9L13.1625 5.97C13.2314 6.33617 13.4811 6.63922 13.8216 6.77C14.1498 6.91447 14.5272 6.87674 14.822 6.67L14.8707 6.634C15.2842 6.32834 15.8528 6.37535 16.2133 6.745L16.8675 7.417C17.1954 7.75516 17.2366 8.28693 16.965 8.674C16.7522 8.99752 16.7251 9.41325 16.8938 9.763L16.9358 9.863C17.0724 10.2045 17.3681 10.452 17.7216 10.521C18.1837 10.5983 18.5235 11.0069 18.525 11.487V12.6C18.5249 13.0234 18.2263 13.3846 17.8191 13.454C17.4842 13.5199 17.2114 13.7686 17.1083 14.102C17.0628 14.2353 17.0121 14.3687 16.9562 14.502C16.8261 14.795 16.855 15.1364 17.0323 15.402C17.2662 15.7358 17.2299 16.1943 16.9465 16.485L16.0388 17.417C15.7792 17.6832 15.3698 17.7175 15.0716 17.498C14.8226 17.3235 14.5001 17.3043 14.2331 17.448C14.0428 17.5447 13.8475 17.6305 13.6481 17.705C13.3692 17.8037 13.1636 18.0485 13.1099 18.346C13.053 18.7203 12.7401 18.9972 12.3708 19H11.0175Z"
                                          stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M13.9747 12C13.9747 13.2885 12.9563 14.333 11.7 14.333C10.4437 14.333 9.42533 13.2885 9.42533 12C9.42533 10.7115 10.4437 9.66699 11.7 9.66699C12.9563 9.66699 13.9747 10.7115 13.9747 12Z"
                                          stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <p class="tab-btn-heading">Setting</p>
                        </div>
                    </button>
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
                    <div id="successMessage" class="alert alert-success" role="alert" style="display: none;">
                        Your changes have been saved successfully!
                    </div>
                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Basic Information</h1>
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
                            <label for="">Date of Birth</label>
                            <div class="row-of-inputs">
                                @php
                                    $dobParts = explode('-', $profile['memorialProfile']->dob);
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
                            <label for="">Date of Death</label>
                            <div class="row-of-inputs">
                                @php
                                    $dobParts = explode('-', $profile['memorialAdditional']->dod);
                                    $selectedDay = $dobParts[0] ?? '';
                                    $selectedMonth = $dobParts[1] ?? '';
                                    $selectedYear = $dobParts[2] ?? '';
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
                    <div class="footer-of-form-content">
                        <button class="form-btn">Save Changes</button>
                    </div>
                </div>
            </form>

            Home City
            <form id="home-city-info-form" data-user-id="{{$profile['memorialProfile']->id}}">

                <div class="form-of-logged-in-user">
                    <div id="successMessage" class="alert alert-success" role="alert" style="display: none;">
                        Your changes have been saved successfully!
                    </div>
                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Home Town</h1>
                    </div>
                    <div class="form-data-of-profile-page">
                        <div class="form-group-input">
                            <label for="">Search</label>
                            <input type="text" class="input-design" name="home_city" value="@if($profile['memorialCity']->home_city){{$profile['memorialCity']->home_city}}@endif"/>
                        </div>
                    </div>
                    <div class="footer-of-form-content">
                        <button class="form-btn">Save Changes</button>
                    </div>
                </div>
            </form>

            Other City
            <form id="other-city-info-form" data-user-id="{{$profile['memorialProfile']->id}}">
                <div class="form-of-logged-in-user">
                    <div id="successMessage" class="alert alert-success" role="alert" style="display: none;">
                        Your changes have been saved successfully!
                    </div>
                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Other city</h1>
                    </div>
                    <div class="form-data-of-profile-page">
                        <div class="form-group-input">
                            <label for="">The last city they resided in. If it is the same as their
                                Hometown, leave it blank.</label>
                            <input type="text" class="input-design" name="other_city" value="@if($profile['memorialCity']->other_city){{$profile['memorialCity']->other_city}}@endif"/>
                        </div>
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
                <div class="footer-of-form-content">
                    <button id="milestone-info-btn" data-user-id="{{$profile['memorialProfile']->id}}" class="form-btn">Save Changes</button>
                </div>
            </div>


            {{--                        Religious Values--}}
            <form id="religion-info-form" data-user-id="{{$profile['memorialProfile']->id}}">
                <div class="form-of-logged-in-user">
                    <div id="successMessage" class="alert alert-success" role="alert" style="display: none;">
                        Your changes have been saved successfully!
                    </div>
                    <div class="header-of-form-profile margin-top">
                        <h1 class="form-top-main-heading-of-profile">Religious Values</h1>
                    </div>
                    <div class="form-data-of-profile-page">
                        <p class="heading-of-form-data">
                            A milestone is a significant event in a person's life. For example: a wedding date or winning award!
                        </p>

                        <div class="form-group-input">
                            <label for="">Religious Views:</label>
                            <div class="row-of-inputs">
                                <div class="radio-input">
                                    <input type="radio" id="religion_html" name="religion_type" value="predefined" @if($profile['memorialAdditional']->religion === 'Islam') checked @endif />
                                    <div class="row-of-inputs">
                                        <select name="predefined_religion" id="religion_select" style="display: block">
                                            <option value="Islam" @if($profile['memorialAdditional']->religion === 'Islam') selected @endif>Islam</option>
                                            <option value="Christianity" @if($profile['memorialAdditional']->religion === 'Christianity') selected @endif>Christianity</option>
                                            <option value="Hinduism" @if($profile['memorialAdditional']->religion === 'Hinduism') selected @endif>Hinduism</option>
                                            <option value="Buddhism" @if($profile['memorialAdditional']->religion === 'Buddhism') selected @endif>Buddhism</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-input">
                            <label for="">Your Religious Views are not there? Enter them here:</label>
                            <div class="row-of-inputs">
                                <div class="radio-input">
                                    <input type="radio" id="custom_religion_html" name="religion_type" value="custom"/>
                                    <input type="text" name="custom_religion" id="custom_religion" class="input-design" value="" style="display: none"/>
                                </div>
                            </div>
                        </div>
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
                            <div class="custom-file-chooser-wrapper">
                                <input type="file" id="file-input" name="memento_profile_image_custom"/>

                                <label id="file-input-label" for="file-input">
                                    + Select a File</label</div>
                        </div>
                        <button id="profile_image_custom_btn" class="form-btn" data-user-id="{{$profile['memorialProfile']->id}}">Save Image</button>

                    </form>
                </div>
            </div>
            <div class="footer-of-form-content">
                <div class="delete-btn">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                         stroke="#ffffff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M6 5H18M9 5V5C10.5769 3.16026 13.4231 3.16026 15 5V5M9 20H15C16.1046 20 17 19.1046 17 18V9C17 8.44772 16.5523 8 16 8H8C7.44772 8 7 8.44772 7 9V18C7 19.1046 7.89543 20 9 20Z"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <button class="del-btn">Delete</button>
                </div>

            </div>
        </div>

        <!-- Gallery -->
        <div class="form-of-logged-in-user">

            <div class="form-data-of-profile-page">
                <p>
                    Don't have access to a photo at the moment? Select a profile image from our library.
                </p>
                <div class="grid-of-photos">
                    <div class="whole-image-wrapper-with-overlay" id="img-id-1">
                        <div class="img-wrpper-inside-gallery">
                            <img src="{{asset('/frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                        </div>
                        <div class="overlay">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 363.025 363.024"
                                 xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <g>
                                                <path style="fill:#30562f;"
                                                      d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon style="fill:#30562f;"
                                                     points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                      </svg>
                        </div>
                    </div>
                    <div class="whole-image-wrapper-with-overlay" id="img-id-2">
                        <div class="img-wrpper-inside-gallery">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                        </div>
                        <div class="overlay">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 363.025 363.024"
                                 xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <g>
                                                <path style="fill:#30562f;"
                                                      d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon style="fill:#30562f;"
                                                     points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                      </svg>
                        </div>
                    </div>
                    <div class="whole-image-wrapper-with-overlay" id="img-id-3">
                        <div class="img-wrpper-inside-gallery">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                        </div>
                        <div class="overlay">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 363.025 363.024"
                                 xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <g>
                                                <path style="fill:#30562f;"
                                                      d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon style="fill:#30562f;"
                                                     points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                      </svg>
                        </div>
                    </div>
                    <div class="whole-image-wrapper-with-overlay" id="img-id-4">
                        <div class="img-wrpper-inside-gallery">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                        </div>
                        <div class="overlay">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 363.025 363.024"
                                 xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <g>
                                                <path style="fill:#30562f;"
                                                      d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon style="fill:#30562f;"
                                                     points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                      </svg>
                        </div>
                    </div>
                    <div class="whole-image-wrapper-with-overlay" id="img-id-4">
                        <div class="img-wrpper-inside-gallery">
                            <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                        </div>
                        <div class="overlay">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 363.025 363.024"
                                 xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <g>
                                                <path style="fill:#30562f;"
                                                      d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <polygon style="fill:#30562f;"
                                                     points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                      </svg>
                        </div>
                    </div>

                </div>


            </div>
            <div class="footer-of-form-content">
                <button class="form-btn">Select</button>

            </div>
        </div>
    </div>
    <div class="Memorial tab-content" id="Memorial">
        <h1>Memorial</h1>
    </div>

    <!-- Settings -->
    <div class="Setting tab-content" id="Setting">
        <div class="form-of-logged-in-user">
            <div class="header-of-form-profile margin-top">
                <h1 class="form-top-main-heading-of-profile">Settings</h1>
            </div>
            <div class="form-data-of-profile-page">
                <div class="form-group-input">
                    <label for="">Language</label>
                    <select name="" id="">
                        <option value="">English</option>
                        <option value="">English</option>
                        <option value="">English</option>
                        <option value="">English</option>
                    </select>
                </div>
                <div class="form-group-input">
                    <label for="">Email Notification</label>
                    <div class="row-of-inputs-checkbox">
                        <input type="checkbox">
                        Receive emails for each notification
                    </div>
                </div>
                <div class="form-group-input">
                    <label for="">Keeper News and Updates</label>
                    <div class="row-of-inputs-checkbox">
                        <input type="checkbox">
                        Receive updates on Keeper features, and more.
                    </div>
                </div>
            </div>
            <div class="footer-of-form-content">
                <button class="form-btn">Save Changes</button>
            </div>
        </div>
        <div class="form-of-logged-in-user">
            <div class="header-of-form-profile margin-top">
                <h1 class="form-top-main-heading-of-profile">Privacy Settings</h1>
            </div>
            <div class="form-data-of-profile-page">
                <div class="form-group-input ">
                    <div class="row-of-inputs-checkbox custom-checkbox-div">
                        <input type="checkbox"/>
                        <p>Public: Recommended Setting. Anyone visiting the Keeper site can view and contribute to the profile.
                        </p>
                    </div>

                </div>
            </div>
            <div class="footer-of-form-content">
                <button class="form-btn">Save Changes</button>
            </div>
        </div>
    </div>

    <div class="Theme tab-content" id="Theme">
        <div class="form-of-logged-in-user">
            <div class="header-of-form-profile margin-top">
                <h1 class="form-top-main-heading-of-profile">Theme</h1>
            </div>
            <div class="form-data-of-profile-page">
                <p>Personalize a profile easily by choosing a cover photo from our library or
                    Upload your own picture in the "Custom" Tab</p>
                <div class="tab-wrapper-of-theme">
                    <div class="theme-tab">
                        <button class="theme-tablinks" onclick="openThemeItem(event, 'theme')" id="defaultOpen">Theme</button>
                        <button class="theme-tablinks" onclick="openThemeItem(event, 'Custom')">Custom</button>
                        <button class="theme-tablinks" onclick="openThemeItem(event, 'Icon')">Icon</button>
                    </div>
                    <div id="theme" class="theme-tabcontent">
                        <div class="theme-tab-of-themes-wrapper">
                            <select name="" id="">
                                <option value="">Space</option>
                                <option value="">category-1</option>
                                <option value="">category-1</option>
                                <option value="">category-1</option>
                                <option value="">category-1</option>
                            </select>
                            <div class="grid-of-themes">
                                <div class="whole-image-wrapper-with-overlay-of-theme" id="img-id-1">
                                    <div class="img-wrpper-inside-gallery-of-theme">
                                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                                    </div>
                                    <div class="overlay">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                             viewBox="0 0 363.025 363.024" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path style="fill:#30562f;"
                                                                  d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <polygon style="fill:#30562f;"
                                                                 points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                    </svg>
                                    </div>
                                </div>
                                <div class="whole-image-wrapper-with-overlay-of-theme" id="img-id-2">
                                    <div class="img-wrpper-inside-gallery-of-theme">
                                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                                    </div>
                                    <div class="overlay">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                             viewBox="0 0 363.025 363.024" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path style="fill:#30562f;"
                                                                  d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <polygon style="fill:#30562f;"
                                                                 points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                    </svg>
                                    </div>
                                </div>
                                <div class="whole-image-wrapper-with-overlay-of-theme" id="img-id-3">
                                    <div class="img-wrpper-inside-gallery-of-theme">
                                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                                    </div>
                                    <div class="overlay">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                             viewBox="0 0 363.025 363.024" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path style="fill:#30562f;"
                                                                  d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <polygon style="fill:#30562f;"
                                                                 points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                    </svg>
                                    </div>
                                </div>
                                <div class="whole-image-wrapper-with-overlay-of-theme" id="img-id-4">
                                    <div class="img-wrpper-inside-gallery-of-theme">
                                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                                    </div>
                                    <div class="overlay">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                             viewBox="0 0 363.025 363.024" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path style="fill:#30562f;"
                                                                  d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <polygon style="fill:#30562f;"
                                                                 points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                    </svg>
                                    </div>
                                </div>


                            </div>
                            <div class="footer-of-theme">
                                <button class="form-btn">Save Changes</button>
                            </div>
                        </div>
                    </div>
                    <div id="Icon" class="theme-tabcontent">
                        <div class="theme-tab-of-themes-wrapper">
                            <div class="top-header-of-grid-wrapper">
                                <select name="" id="">
                                    <option value="">Space</option>
                                    <option value="">category-1</option>
                                    <option value="">category-1</option>
                                    <option value="">category-1</option>
                                    <option value="">category-1</option>
                                </select>
                            </div>

                            <div class="grid-of-icons">
                                <div class="whole-image-wrapper-with-overlay-of-icons" id="img-id-1">
                                    <div class="img-wrpper-inside-gallery-of-icons">
                                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                                    </div>
                                    <div class="overlay">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                             viewBox="0 0 363.025 363.024" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path style="fill:#30562f;"
                                                                  d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <polygon style="fill:#30562f;"
                                                                 points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                    </svg>
                                    </div>
                                </div>
                                <div class="whole-image-wrapper-with-overlay-of-icons" id="img-id-2">
                                    <div class="img-wrpper-inside-gallery-of-icons">
                                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                                    </div>
                                    <div class="overlay">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                             viewBox="0 0 363.025 363.024" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path style="fill:#30562f;"
                                                                  d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <polygon style="fill:#30562f;"
                                                                 points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                    </svg>
                                    </div>
                                </div>
                                <div class="whole-image-wrapper-with-overlay-of-icons" id="img-id-3">
                                    <div class="img-wrpper-inside-gallery-of-icons">
                                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                                    </div>
                                    <div class="overlay">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                             viewBox="0 0 363.025 363.024" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path style="fill:#30562f;"
                                                                  d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <polygon style="fill:#30562f;"
                                                                 points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                    </svg>
                                    </div>
                                </div>
                                <div class="whole-image-wrapper-with-overlay-of-icons" id="img-id-4">
                                    <div class="img-wrpper-inside-gallery-of-icons">
                                        <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="grid-single-img">
                                    </div>
                                    <div class="overlay">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                             viewBox="0 0 363.025 363.024" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path style="fill:#30562f;"
                                                                  d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0 c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71 C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802 S275.145,11.71,181.512,11.71z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <polygon style="fill:#30562f;"
                                                                 points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166 279.451,127.445 ">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                    </svg>
                                    </div>
                                </div>


                            </div>
                            <div class="footer-of-theme">
                                <button class="form-btn">Save Changes</button>
                            </div>
                        </div>
                    </div>
                    <div id="Custom" class="theme-tabcontent">
                        <p>You can Upload your own unique picture here. For the best look, we recommend using a picture with a
                            High Resolution (1024X768 and higher, for example).</p>
                        <div class="custom-file-chooser-wrapper">
                            <input type="file" id="file-input" name="file-input"/>

                            <label id="file-input-label" for="file-input">
                                + Choose a File
                            </label</div>
                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection
@section('memorial-profile')
    <script>
        //Tabs
        //initially when it loads only info will shown and all other will hide
        tabcontent = document.getElementsByClassName("tab-content");
        document.getElementById("defaultOpen").click();
        for (i = 1; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Start here

        //gallery img
        $(".whole-image-wrapper-with-overlay").click(function (e) {
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

            // $(".overlay").show();

        })

        //Theme gallery
        $(".whole-image-wrapper-with-overlay-of-theme").click(function (e) {
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

        // Icons grid
        $(".whole-image-wrapper-with-overlay-of-icons").click(function (e) {
            console.log('Image Click', e);
            let allElements = $(".grid-of-icons .whole-image-wrapper-with-overlay-of-icons .overlay")
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

        $(document).ready(function () {


            // Add Occupation
            var max_fields_of_occupation = 50;
            var occupation_container = $(".occupation_container");
            var add_occupation_button = $(".add_occupation_field");

            var occupation_counter = 1;
            $(add_occupation_button).click(function (e) {
                e.preventDefault();
                if (occupation_counter < max_fields_of_occupation) {
                    occupation_counter++;
                    $(occupation_container).append(`
@php
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
                    @endphp
                    @foreach($data['occupations'] as $occupation)
                    <div class="row-of-dynamic-inputs">
                        <div class="form-group-input">
                            <label for="">Occupation</label>
                            <input type="text" class="input-design" name="occupation[]" value="{{ $occupation['occupation'] }}" />
        </div>
        <div class="form-group-input">
            <label for="">Company</label>
            <input type="text" class="input-design" name="company[]" value="{{ $occupation['company'] }}" />
        </div>
        <div class="form-group-input">
            <label for="">From Year</label>
            <input type="text" class="input-design" name="from_year[]" value="{{ $occupation['from_year'] }}" />
        </div>
        <div class="form-group-input">
            <label for="">To Year</label>
            <input type="text" class="input-design" name="to_year[]" value="{{ $occupation['to_year'] }}" />
        </div>
    </div>

                <svg
                class="deleteOccupation"
                  width="128px"
                  height="128px"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z"
                      fill="#0F0F0F"
                    ></path>
                  </g>
                </svg>
              </div>
                @endforeach`); //add input box
                } else {
                    alert("You Reached the limits");
                }
            });

            $(occupation_container).on("click", ".deleteOccupation", function (e) {
                e.preventDefault();
                $(this).parent("div").remove();
                occupation_counter--;
            });


            //Add Academic

            var max_fields_of_academic = 10;
            var academic_counter = 1;
            var academic_container = $(".academic_container");
            var add_academic_field_btn = $(".add_academic_field");

            $(add_academic_field_btn).click(function (e) {
                e.preventDefault();
                console.log("inside click");
                if (academic_counter < max_fields_of_academic) {
                    academic_counter++;
                    $(academic_container).append(`
                     @php

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
                    @endphp

                    @foreach($data['academics'] as $academic)
                    <div class="row-of-dynamic-inputs">
            <div class="form-group-input">
                <label for="">Diploma</label>
                <input type="text" class="input-design" name="diploma[]" value="@if($academic['diploma']){{ $academic['diploma']}}@endif" />
            </div>
            <div class="form-group-input">
                <label for="">School</label>
                <input type="text" class="input-design" name="school[]" value="@if($academic['school']){{$academic['school']}}@endif" />
            </div>
            <div class="form-group-input">
                <label for="">From Year</label>
                <input type="text" class="input-design" name="from_year[]" value="@if($academic['to_year']){{$academic['to_year']}}@endif" />
            </div>
            <div class="form-group-input">
                <label for="">To Year</label>
                <input type="text" class="input-design" name="to_year[]" value="@if($academic['from_year']){{$academic['from_year']}}@endif" />
            </div>
            <svg class="deleteAcademic" width="128px" height="128px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"></path>
                </g>
            </svg>
        </div>
    @endforeach`);
                } else {
                    alert("You Reached the limits");
                }
            });
            $(academic_container).on("click", ".deleteAcademic", function (e) {
                e.preventDefault();
                $(this).parent("div").remove();
                academic_counter--;
            });

            //Milestones

            var max_fields_of_milestones = 10;
            var milestone_counter = 1;
            var milestone_container = $(".milestone_container");
            var add_milestone_field_btn = $(".add_milestone_field");
            $(add_milestone_field_btn).click(function (e) {
                e.preventDefault();
                console.log("inside click");
                if (milestone_counter < max_fields_of_milestones) {
                    milestone_counter++;
                    $(milestone_container).append(`
                    @php

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
                    @endphp
                    @foreach( $data['milestone'] as $milestone)
                    <div class="row-of-dynamic-inputs">
                                    <div class="form-group-input">
                                      <label for="">Description</label>
                                      <input type="text" class="input-design" name="milestone[]" value="@if($milestone['milestone']){{$milestone['milestone']}}@endif"  />
                </div>
                <div class="form-group-input">
                  <label for="">Year</label>
                  <input type="text" class="input-design" name="year[]" value="@if($milestone['year']){{$milestone['year']}}@endif"/>
                </div>

                <svg
                class="deleteAcademic"
                  width="128px"
                  height="128px"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z"
                      fill="#0F0F0F"
                    ></path>
                  </g>
                </svg>
              </div>
              @endforeach`);
                } else {
                    alert("You Reached the limits");
                }
            });
            $(milestone_container).on("click", ".deleteAcademic", function (e) {
                e.preventDefault();
                $(this).parent("div").remove();
                milestone_counter--;
            });

            //Interests

            var max_fields_of_interests = 10;
            var interests_counter = 1;
            var interests_container = $(".interests_container");
            var add_interests_field_btn = $(".add_interests_field");
            $(add_interests_field_btn).click(function (e) {
                e.preventDefault();
                console.log("inside click");
                if (interests_counter < max_fields_of_interests) {
                    interests_counter++;
                    $(interests_container).append(`
                    @php
                        $interests =explode(', ',$profile['memorialInterest']->interest) ;
                    @endphp
                    @foreach($interests as $interest )
                    <div class="row-of-dynamic-inputs">
            <div class="form-group-input">
                <label for="">Interest Name</label>
                <input type="text" class="input-design" name="interest[]" value="@if($interest){{$interest}}@endif" />
            </div>

                <svg
                class="deleteAcademic"
                  width="64px"
                  height="64px"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z"
                      fill="#0F0F0F"
                    ></path>
                  </g>
                </svg>
              </div>
                @endforeach`);
                } else {
                    alert("You Reached the limits");
                }
            });
            $(interests_container).on("click", ".deleteAcademic", function (e) {
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

        //religios chck button
        document.addEventListener('DOMContentLoaded', function () {
            var existingReligionRadio = document.getElementById('religion_html');
            var customReligionRadio = document.getElementById('custom_religion_html');
            var selectReligion = document.getElementById('religion_select');
            var customReligionInput = document.getElementById('custom_religion');

            existingReligionRadio.addEventListener('change', function () {
                selectReligion.style.display = 'block';
                customReligionInput.style.display = 'none';
            });

            customReligionRadio.addEventListener('change', function () {
                selectReligion.style.display = 'none';
                customReligionInput.style.display = 'block';
            });
        });

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


            $('#basic-info-form').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'basic_info';
                // Serialize the form data along with user_id
                var formData = $(this).serialize() + '&user_id=' + userId + '&form_identifier=' + identifier;
                saveFormData(userId, formData);
                return 0;
            });

            $('#home-city-info-form').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'home_info';
                // Serialize the form data along with user_id
                var formData = $(this).serialize() + '&user_id=' + userId + '&form_identifier=' + identifier;
                saveFormData(userId, formData);
                return 0;
            });

            $('#other-city-info-form').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'other_info';
                // Serialize the form data along with user_id
                var formData = $(this).serialize() + '&user_id=' + userId + '&form_identifier=' + identifier;
                saveFormData(userId, formData);
                return 0;
            });

            $('#academic-info-btn').click(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'academic_info';

                // Serialize the form data
                var formData = $('#academic-info form').serializeArray();

                // Add additional data manually (user_id and form_identifier)
                formData.push({name: 'user_id', value: userId});
                formData.push({name: 'form_identifier', value: identifier});

                // Convert formData to a serialized string
                formData = $.param(formData);
                saveFormData(userId, formData);
                return 0;
            });

            $('#occupation-info-btn').click(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'occupation_info';
                // Serialize the form data along with user_id

                // Serialize the form data
                var formData = $('#occupation-history form').serializeArray();

                // Add additional data manually (user_id and form_identifier)
                formData.push({name: 'user_id', value: userId});
                formData.push({name: 'form_identifier', value: identifier});

                // Convert formData to a serialized string
                formData = $.param(formData);
                saveFormData(userId, formData);
                return 0;
            });

            $('#milestone-info-btn').click(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'milestone_info';

                // Serialize the form data
                var formData = $('#milestone-info form').serializeArray();

                // Add additional data manually (user_id and form_identifier)
                formData.push({name: 'user_id', value: userId});
                formData.push({name: 'form_identifier', value: identifier});

                // Convert formData to a serialized string
                formData = $.param(formData);
                saveFormData(userId, formData);
                return 0;
            });

            $('#religion-info-form').submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'religion_info';
                // Serialize the form data along with user_id
                var formData = $(this).serialize() + '&user_id=' + userId + '&form_identifier=' + identifier;
                saveFormData(userId, formData);
                return 0;
            });


            $('#interest-info-btn').click(function (e) {
                e.preventDefault(); // Prevent the form from submitting in the traditional way
                // Get the user_id from the form data attribute
                var userId = $(this).data('user-id');
                var identifier = 'interest_info';

                // Serialize the form data
                var formData = $('#interest-info form').serializeArray();

                // Add additional data manually (user_id and form_identifier)
                formData.push({name: 'user_id', value: userId});
                formData.push({name: 'form_identifier', value: identifier});

                // Convert formData to a serialized string
                formData = $.param(formData);
                saveFormData(userId, formData);
                return 0;
            });

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

                saveFormData(userId, formData, 'profile_image_custom');
                return 0;
            });

            //Ajax function
            function saveFormData(userId, formData, formType) {
                console.log(formType);
                $.ajax({
                    type: 'POST',
                    url: '/update-memorial-profile/' + userId,
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.success) {
                            $('#successMessage').show();

                            // Check if the form is for image upload and refresh the profile image div
                            if (formType === 'profile_image_custom') {
                                refreshProfileImageDiv(userId, formType);
                            }

                            // Hide success message after 2 seconds
                            setTimeout(function () {
                                $('#successMessage').hide();
                            }, 2000);
                        } else {
                            // Handle failure, show an error message, or take appropriate action
                            alert('Error: ' + response.message);
                        }
                    },

                    error: function (error) {
                        console.error(error);

                        // Access the error details sent from the server
                        var errorMessage = error.responseJSON.message;
                        var errorDetails = error.responseJSON.error_details;

                        // Display the error message to the user or log it for debugging
                        alert('Error: ' + errorMessage + '\nDetails: ' + errorDetails);
                    }
                });
            };

            function refreshProfileImageDiv(userId,formType) {
                // Assuming you have a unique identifier or class for the profile image div
                if (formType === 'profile_image_custom') {
                    var profileImageDiv = $('#profile-image-div');
                }
                // Make an Ajax request to get the updated profile image URL based on the form type
                $.ajax({
                    type: 'GET',
                    url: '/get-updated-profile-image/' + userId + '/' + formType ,
                    success: function (imageResponse) {
                        // Replace the content of the profile image div with the updated image
                        profileImageDiv.html(
                            '<img src="' + imageResponse.updatedImageURL + '" alt="" class="pic-of-usr"/>'
                        );
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            }
        });
    </script>
@endsection
