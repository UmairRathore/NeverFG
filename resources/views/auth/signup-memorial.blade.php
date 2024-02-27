<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/SignUp.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
<div id="svg_wrap"></div>
<style>
    /* Style for selected button */
    .selected {
        background-color: #ff9900; /* Change to desired color */
        color: #ffffff; /* Change to desired text color */
    }
</style>
<h1>Add a Memorial</h1>
<!-- First form -->
@if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-error" role="alert">
        {{ Session::get('error') }}
    </div>
@endif

<form method="POST" action="{{ route('memorialregistration') }}" enctype="multipart/form-data">

        @csrf
        {{-- MEMORIAL PROFILE --}}
        <section>
    {{-- Display general error message --}}
{{--            @if($errors->any())--}}
{{--                <div class="alert alert-danger" style="color: red;">--}}
{{--{{$message}}--}}
{{--                            <p>Some Fields are not entered. They are {{$message}}</p>--}}

{{--                </div>--}}
{{--            @endif--}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <p class="step-1-top-heading">ABOUT YOUR LOVED ONE</p>
            <div class="form-group-input">
                <label for="memorial_first_name">Their First Name</label>
                <input name="memorial_first_name" type="text" placeholder="Their First Name" class="input-design @error('memorial_first_name') is-invalid @enderror" value="{{ isset($firstName) ? $firstName : old('memorial_first_name') }}" required/>
                @error('memorial_first_name')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>Required Field</strong>
                </span>
                @enderror
            </div>
            <div class="form-group-input">
                <label for="memorial_last_name">Their Last Name</label>
                <input name="memorial_last_name" type="text" placeholder="Their Last Name" class="input-design @error('memorial_last_name') is-invalid @enderror" value="{{ isset($lastName) ? $lastName : old('memorial_last_name') }}" required/>
                @error('memorial_last_name')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <!-- Date of Birth -->
            <div class="form-group-input">
                <label for="memorial_dob">Date of birth</label>
                <div class="row-of-select">
                    <select name="memorial_dob_year">
                        @for ($year = 1900; $year <= 2024; $year++)
                            <option {{ $year == old('memorial_dob_year') ? 'selected' : ($year == 2024 ? 'selected' : '') }} value="{{ $year }}">{{ $year }}</option>
                        @endfor
                    </select>
                    <select name="memorial_dob_month">
                        @for ($month = 1; $month <= 12; $month++)
                            <option {{ $month == old('memorial_dob_month') ? 'selected' : ($month == 1 ? 'selected' : '') }} value="{{ $month }}">
                                @php
                                    echo date('F', mktime(0, 0, 0, $month, 1));
                                @endphp
                            </option>
                        @endfor
                    </select>
                    <select name="memorial_dob_day">
                        @for ($day = 1; $day <= 31; $day++)
                            <option {{ $day == old('memorial_dob_day') ? 'selected' : ($day == 1 ? 'selected' : '') }} value="{{ sprintf("%02d", $day) }}">{{ sprintf("%02d", $day) }}</option>
                        @endfor
                    </select>
                </div>
            </div>



            <!-- Date of Death -->
            <div class="form-group-input" id="memorialDodContainer" style="display: block; text-align: left;">
                <label for="">Their Date Of Death</label>
                <div class="row-of-select">
                    <select name="memorial_dod_year" class="@error('memorial_dod_year') is-invalid @enderror">
                        @for ($year = 1900; $year <= 2024; $year++)
                            <option {{ $year == old('memorial_dod_year') ? 'selected' : '' }} value="{{ $year }}">{{ $year }}</option>
                        @endfor
                    </select>
                    <select name="memorial_dod_month" class="@error('memorial_dod_month') is-invalid @enderror">
                        @for ($month = 1; $month <= 12; $month++)
                            <option {{ $month == old('memorial_dod_month') ? 'selected' : '' }} value="{{ $month }}">
                                @php
                                    echo date('F', mktime(0, 0, 0, $month, 1));
                                @endphp
                            </option>
                        @endfor
                    </select>
                    <select name="memorial_dod_day" class="@error('memorial_dod_day') is-invalid @enderror">
                        @for ($day = 1; $day <= 31; $day++)
                            <option {{ $day == old('memorial_dod_day') ? 'selected' : '' }} value="{{ sprintf("%02d", $day) }}">{{ sprintf("%02d", $day) }}</option>
                        @endfor
                    </select>
                </div>
            </div>



            <div class="form-group-input">
                <label for="memorial_city_of_birth">Their City of Birth</label>
                <input name="memorial_city_of_birth" type="text" placeholder="Their City of Birth " value="{{ old('memorial_city_of_birth') }}" class="input-design @error('memorial_city_of_birth') is-invalid @enderror" required/>
                @error('memorial_city_of_birth')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="user-img-container">
                <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="user-avatar">
                <label for="memorial_image" class="input-file-type-design">
                    Add a photo
                    <input id="memorial_image" type="file" name="memorial_image"/>
                </label>
            </div>

            <div class="gender-container">
                <label class="gender-label">Gender</label>
                <div class="radio-inputs">
                    <label class="radio">
                        <input type="radio" name="memorial_gender" value="female" {{ old('memorial_gender') == 'female' ? 'checked' : '' }}>
                        <span class="name">Female</span>
                    </label>
                    <label class="radio">
                        <input type="radio" name="memorial_gender" value="male" {{ old('memorial_gender') == 'male' ? 'checked' : 'checked' }}>
                        <span class="name">Male</span>
                    </label>
                    <label class="radio">
                        <input type="radio" name="memorial_gender" value="other" {{ old('memorial_gender') == 'other' ? 'checked' : '' }}>
                        <span class="name">Other</span>
                    </label>
                </div>
            </div>


            @error('memorial_gender')
            <span class="invalid-feedback" role="alert" style="color: red;">
        <strong>{{ $message }}</strong>
    </span>
            @enderror


        </section>

        {{-- BIOGRAPHY --}}
        <section>
            <p class="step-1-top-heading">ADD MORE DETAILS</p>
            <p class="step-2-secondary-heading">You can add more information about your love one.</p>
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
        </section>

        {{-- KEEPER PROFILE --}}
        <section>
            <p class="step-1-top-heading">ABOUT YOU</p>
            <p class="step-2-secondary-heading">You will become the "Keeper" (the administrator) of your loved one's memorial.</p>
            <div class="form-group-input">
                <label for="keeper_first_name">First Name</label>
                <input name="keeper_first_name" type="text" placeholder="First Name" value="{{ old('keeper_first_name') }}" class="input-design @error('keeper_first_name') is-invalid @enderror" required/>
                @error('keeper_first_name')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group-input">
                <label for="keeper_last_name">Last Name</label>
                <input name="keeper_last_name" type="text" placeholder="Last Name" value="{{ old('keeper_last_name') }}" class="input-design @error('keeper_last_name') is-invalid @enderror" required/>
                @error('keeper_last_name')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <!-- Date of Birth -->
            <div class="form-group-input">
                <label for="keeper_dob">Date of birth</label>
                <div class="row-of-select">
                    <select name="keeper_dob_year">
                        @for ($year = 1900; $year <= 2024; $year++)
                            <option {{ $year == old('keeper_dob_year') ? 'selected' : ($year == 2024 ? 'selected' : '') }} value="{{ $year }}">{{ $year }}</option>
                        @endfor
                    </select>
                    <select name="keeper_dob_month">
                        @for ($month = 1; $month <= 12; $month++)
                            <option {{ $month == old('keeper_dob_month') ? 'selected' : ($month == 1 ? 'selected' : '') }} value="{{ $month }}">
                                @php
                                    echo date('F', mktime(0, 0, 0, $month, 1));
                                @endphp
                            </option>
                        @endfor
                    </select>
                    <select name="keeper_dob_day">
                        @for ($day = 1; $day <= 31; $day++)
                            <option {{ $day == old('keeper_dob_day') ? 'selected' : ($day == 1 ? 'selected' : '') }} value="{{ sprintf("%02d", $day) }}">{{ sprintf("%02d", $day) }}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="form-group-input">
                <label for="keeper_email">Email</label>
                <input type="email" name="keeper_email" placeholder="Email Address" value="{{ old('keeper_email') }}" class="input-design @error('keeper_email') is-invalid @enderror" required/>
                @error('keeper_email')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group-input">
                <label for="keeper_password">Password</label>
                <input type="password"  name="keeper_password" placeholder="Enter Password" class="input-design @error('keeper_password') is-invalid @enderror" required/>
                @error('keeper_password')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group-input">
                <label for="">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" class="input-design @error('confirm_password') is-invalid @enderror" required/>
                @error('confirm_password')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="gender-container">
                <label class="gender-label">Gender</label>
                <div class="radio-inputs">
                    <label class="radio">
                        <input type="radio" name="keeper_gender" value="female" {{ old('keeper_gender') == 'female' ? 'checked' : '' }}>
                        <span class="name">Female</span>
                    </label>
                    <label class="radio">
                        <input type="radio" name="keeper_gender" value="male" {{ old('keeper_gender') == 'male' ? 'checked' : 'checked' }}>
                        <span class="name">Male</span>
                    </label>
                    <label class="radio">
                        <input type="radio" name="keeper_gender" value="other" {{ old('keeper_gender') == 'other' ? 'checked' : '' }}>
                        <span class="name">Other</span>
                    </label>
                </div>
            </div>

        </section>



    {{--    ACCOUNT TYPE    --}}
{{--    <section>--}}
{{--        <div class="wrapper-of-cards-section">--}}
{{--            <div class="rows-of-cards">--}}
{{--                <div class="form-of-flying-bird-wrapper-outsider">--}}
{{--                    <div class="form-of-flying-bird-wrapper">--}}

{{--                        <h1 class="form-of-flying-bird-wrapper-main-heading">--}}
{{--                            Keeper<sup class="sup-tm-text">TM</sup>--}}

{{--                        </h1>--}}
{{--                        <p class="form-of-flying-bird-wrapper-paragrpah-heading">--}}
{{--                            A quick way to start--}}


{{--                        </p>--}}
{{--                        <div class="row-of-bird-flying-price">--}}
{{--                            <div class="left-col-of-price">--}}
{{--                                <h1 class="price-row-main-heading">--}}
{{--                                    Free--}}
{{--                                </h1>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <p class="form-of-flying-bird-wrapper-paragrpah-heading-2">--}}
{{--                            Post thoughtful tributes and view up to five non-downloadable images in a photo gallery. Memorial pages do not expire.--}}
{{--                        </p>--}}
{{--                        <!-- Other card details -->--}}
{{--                        <button class="black-background-btn half-width create-memorial-btn" onclick="selectCard('Free')">--}}
{{--                            Create Memorial--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="bottom-of-card">--}}
{{--                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>--}}
{{--                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>--}}
{{--                            <g id="SVGRepo_iconCarrier">--}}
{{--                                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                            </g>--}}
{{--                        </svg>--}}
{{--                        <a href="">All Free Features</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-of-flying-bird-wrapper-outsider">--}}
{{--                    <div class="form-of-flying-bird-wrapper form-bg-second">--}}
{{--                        <p class="most-popular-top-heading">Most popular</p>--}}
{{--                        <h1 class="form-of-flying-bird-wrapper-main-heading">--}}
{{--                            Keeper<sup class="sup-tm-text">TM</sup>--}}
{{--                            <span class="plus-title">Plus</span>--}}
{{--                        </h1>--}}
{{--                        <p class="form-of-flying-bird-wrapper-paragrpah-heading">--}}
{{--                            A true celebration of life. Online forever.--}}
{{--                        </p>--}}
{{--                        <div class="row-of-bird-flying-price">--}}
{{--                            <div class="left-col-of-price">--}}
{{--                                <h1 class="price-row-main-heading">--}}
{{--                                    $74<sup class="price-row-main-heading-sup">99</sup>--}}
{{--                                </h1>--}}
{{--                            </div>--}}
{{--                            <div class="right-col-of-price"><h2>one time payment</h2></div>--}}
{{--                        </div>--}}
{{--                        <p class="form-of-flying-bird-wrapper-paragrpah-heading-2">--}}
{{--                            View unlimited images in a gallery, download local copies of images,--}}
{{--                            create a full family tree, create unlimited memorial pages, and--}}
{{--                            more. <a href="{{route('privacyTerms')}}">Learn more</a>--}}
{{--                        </p>--}}
{{--                        <button class="black-background-btn half-width create-memorial-btn" onclick="selectCard('Plus')">--}}
{{--                            Create Memorial--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="bottom-of-card">--}}
{{--                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>--}}
{{--                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>--}}
{{--                            <g id="SVGRepo_iconCarrier">--}}
{{--                                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                            </g>--}}
{{--                        </svg>--}}
{{--                        <a href="">All Keeper Plus Features</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <input type="hidden" id="selectedCardInput" name="selectedCard">



    <div class="button" id="prev">&larr; Previous</div>
    <div class="button" id="next">Next &rarr;</div>
    <div class="button" id="submit">Publish Memorial</div>
</form>

<script>
    $(document).ready(function () {
        var base_color = "rgb(230,230,230)";
        var active_color = "rgb(237, 40, 70)";

        var child = 1;
        var length = $("section").length - 1;
        $("#prev").addClass("disabled");
        $("#submit").addClass("disabled");

        $("section").not("section:nth-of-type(1)").hide();
        $("section")
            .not("section:nth-of-type(1)")
            .css("transform", "translateX(100px)");

        var svgWidth = length * 200 + 24;
        $("#svg_wrap").html(
            '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
            svgWidth +
            ' 24" xml:space="preserve"></svg>'
        );

        function makeSVG(tag, attrs) {
            var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
            for (var k in attrs) el.setAttribute(k, attrs[k]);
            return el;
        }

        for (i = 0; i < length; i++) {
            var positionX = 12 + i * 200;
            var rect = makeSVG("rect", {
                x: positionX,
                y: 9,
                width: 200,
                height: 6
            });
            document.getElementById("svg_form_time").appendChild(rect);
            // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
            var circle = makeSVG("circle", {
                cx: positionX,
                cy: 12,
                r: 12,
                width: positionX,
                height: 6
            });
            document.getElementById("svg_form_time").appendChild(circle);
        }

        var circle = makeSVG("circle", {
            cx: positionX + 200,
            cy: 12,
            r: 12,
            width: positionX,
            height: 6
        });
        document.getElementById("svg_form_time").appendChild(circle);

        $("#svg_form_time rect").css("fill", base_color);
        $("#svg_form_time circle").css("fill", base_color);
        $("circle:nth-of-type(1)").css("fill", active_color);

        $(".button").click(function () {
            $("#svg_form_time rect").css("fill", active_color);
            $("#svg_form_time circle").css("fill", active_color);
            var id = $(this).attr("id");
            if (id == "next") {
                $("#prev").removeClass("disabled");
                if (child >= length) {
                    $(this).addClass("disabled");
                    $("#submit").removeClass("disabled");
                }
                if (child <= length) {
                    child++;
                }
            } else if (id == "prev") {
                $("#next").removeClass("disabled");
                $("#submit").addClass("disabled");
                if (child <= 2) {
                    $(this).addClass("disabled");
                }
                if (child > 1) {
                    child--;
                }
            }
            var circle_child = child + 1;
            $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
                "fill",
                base_color
            );
            $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
                "fill",
                base_color
            );
            var currentSection = $("section:nth-of-type(" + child + ")");
            currentSection.fadeIn();
            currentSection.css("transform", "translateX(0)");
            currentSection
                .prevAll("section")
                .css("transform", "translateX(-100px)");
            currentSection
                .nextAll("section")
                .css("transform", "translateX(100px)");
            $("section").not(currentSection).hide();
        });
    });




    });
    function selectCard(cardType) {
        // Update selected card input value
        document.getElementById('selectedCardInput').value = cardType;

        // Remove 'selected' class from all buttons
        document.querySelectorAll('.create-memorial-btn').forEach(btn => {
            btn.classList.remove('selected');
        });
    }

    // Add event listener to the form submit button
    document.getElementById('submit').addEventListener('click', function(event) {
        // Prevent default form submission behavior
        event.preventDefault();

        // Manually submit the form using JavaScript
        document.querySelector('form').submit();
    });

</script>
</body>
</html>
