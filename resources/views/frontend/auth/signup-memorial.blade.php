<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/SignUp.css')}}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<div id="svg_wrap"></div>

<h1>Add a Memorial</h1>
<!-- First form -->
<form method="POST" action="{{ route('memorialregistration') }}" enctype="multipart/form-data">
    @csrf

    {{--   MEMORIAL PROFILE  --}}
    <section>
        <p class="step-1-top-heading">ABOUT YOUR LOVED ONE</p>
        <div class="form-group-input">
            <label for="memorial_first_name">Their First Name</label>
            <input name="memorial_first_name" type="text" placeholder="First Name" class="input-design"/>
        </div>
        <div class="form-group-input">
            <label for="memorial_last_name">Their Last Name</label>
            <input name="memorial_last_name" type="text" placeholder="Last Name" class="input-design"/>
        </div>

        <!-- Date of Birth -->
        <div class="form-group-input">
            <label for="memorial_dob">Date of birth</label>
            <div class="row-of-select">
                <select name="memorial_dob_year">
                    @for ($year = 1999; $year <= 2024; $year++)
                        <option {{ $year == 2024 ? 'selected' : '' }} value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
                <select name="memorial_dob_month">
                    @for ($month = 1; $month <= 12; $month++)
                        <option {{ $month == 1 ? 'selected' : '' }} value="{{ $month }}">
                            @php
                                echo date('F', mktime(0, 0, 0, $month, 1));
                            @endphp
                        </option>
                    @endfor
                </select>
                <select name="memorial_dob_day">
                    @for ($day = 1; $day <= 31; $day++)
                        <option {{ $day == 1 ? 'selected' : '' }} value="{{ sprintf("%02d", $day) }}">{{ sprintf("%02d", $day) }}</option>
                    @endfor
                </select>
            </div>
        </div>


        <div class="form-group-input">
            {{--                <label for="memorial_passed">Passed</label>--}}
            <H2>Passed
                <input type="checkbox" name="memorial_passed" id="memorialPassedCheckbox" ></H2>

        </div>

        <!-- Email input for when "Passed" checkbox is checked -->
        <div class="form-group-input" id="memorialEmailContainer" style="display: none; text-align: left;">
            <label for="memorial_email">Email</label>
            <input type="email" name="memorial_email" placeholder="Email Address" class="input-design"/>
        </div>

        <!-- Date of Death -->
        <div class="form-group-input" id="memorialDodContainer" style="display: none; text-align: left;">
            <label for="">Their Date Of Death</label>
            <div class="row-of-select">
                <select name="memorial_dod_year">
                    @for ($year = 1999; $year <= 2024; $year++)
                        <option {{ $year == 2024 ? 'selected' : '' }} value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
                <select name="memorial_dod_month">
                    @for ($month = 1; $month <= 12; $month++)
                        <option {{ $month == 1 ? 'selected' : '' }} value="{{ $month }}">
                            @php
                                echo date('F', mktime(0, 0, 0, $month, 1));
                            @endphp
                        </option>
                    @endfor
                </select>
                <select name="memorial_dod_day">
                    @for ($day = 1; $day <= 31; $day++)
                        <option {{ $day == 1 ? 'selected' : '' }} value="{{ sprintf("%02d", $day) }}">{{ sprintf("%02d", $day) }}</option>
                    @endfor
                </select>
            </div>
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
                    <input type="radio" name="memorial_gender" value="female" checked=""/>
                    <span class="name">Female</span>
                </label>
                <label class="radio">
                    <input type="radio" name="memorial_gender" value="male"/>
                    <span class="name">Male</span>
                </label>
                <label class="radio">
                    <input type="radio" name="memorial_gender" value="other"/>
                    <span class="name">Other</span>
                </label>
            </div>
        </div>

    </section>

    {{--    BIOGRAPHY       --}}
    <section>
        <p class="step-1-top-heading">ADD MORE DETAILS</p>
        <p class="step-2-secondary-heading">You can add more information about your love one.</p>
        <div class="form-group-input">
            <label for="memorial_biography">Their Obituary/Biography</label>
            <input name="memorial_biography" type="text" placeholder="Their Obituary/Biography" class="input-design"/>
        </div>
        <div class="form-group-input">
            <label for="memorial_fav_saying">Their Favourite Saying</label>
            <input name="memorial_fav_saying" type="text" placeholder="Their Favourite Saying" class="input-design"/>
        </div>
        <div class="form-group-input">
            <label for="memorial_resting_place">Resting Place:</label>
            <input name="memorial_resting_place" type="text" placeholder="Last Name" class="input-design"/>
        </div>
    </section>

    {{--    KEEPER PROFILE  --}}
    <section>
        <p class="step-1-top-heading">ABOUT YOU</p>
        <p class="step-2-secondary-heading">You will become the "Keeper" (the administrator) of your loved one's memorial.</p>
        <div class="form-group-input">
            <label for="keeper_first_name">First Name</label>
            <input name="keeper_first_name" type="text" placeholder="First Name" class="input-design"/>
        </div>
        <div class="form-group-input">
            <label for="keeper_last_name">Last Name</label>
            <input name="keeper_last_name" type="text" placeholder="Last Name" class="input-design"/>
        </div>
        <div class="form-group-input">
            <label for="keeper_email">Email</label>
            <input type="email" name="keeper_email" placeholder="Email Address" class="input-design"/>
        </div>
        <div class="form-group-input">
            <label for="keeper_password">Password</label>
            <input type="password"  name="keeper_password" placeholder="Enter Password" class="input-design"/>
        </div>
        <div class="form-group-input">
            <label for="">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" class="input-design"/>
        </div>


        <!-- Date of Birth -->
        <div class="form-group-input">
            <label for="keeper_dob">Date of birth</label>
            <div class="row-of-select">
                <select name="keeper_dob_year">
                    @for ($year = 1999; $year <= 2024; $year++)
                        <option {{ $year == 2024 ? 'selected' : '' }} value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
                <select name="keeper_dob_month">
                    @for ($month = 1; $month <= 12; $month++)
                        <option {{ $month == 1 ? 'selected' : '' }} value="{{ $month }}">
                            @php
                                echo date('F', mktime(0, 0, 0, $month, 1));
                            @endphp
                        </option>
                    @endfor
                </select>
                <select name="keeper_dob_day">
                    @for ($day = 1; $day <= 31; $day++)
                        <option {{ $day == 1 ? 'selected' : '' }} value="{{ sprintf("%02d", $day) }}">{{ sprintf("%02d", $day) }}</option>
                    @endfor
                </select>
            </div>
        </div>
        </div>


        <div class="gender-container">
            <label class="gender-label">Gender</label>
            <div class="radio-inputs">
                <label class="radio">
                    <input type="radio" name="keeper_gender" value="female" checked=""/>
                    <span class="name">Female</span>
                </label>
                <label class="radio">
                    <input type="radio" name="keeper_gender" value="male"/>
                    <span class="name">Male</span>
                </label>
                <label class="radio">
                    <input type="radio" name="keeper_gender" value="other"/>
                    <span class="name">Other</span>
                </label>
            </div>
        </div>
        <div class="row-of-form">
            <input type="checkbox">
            <p class="agree-term-p">I agree to the Terms and Conditions of the site.</p>
        </div>
    </section>

    {{--    ACCOUNT TYPE    --}}
    <section>
        <div class="wrapper-of-cards-section">
            <div class="rows-of-cards">
                <div class="form-of-flying-bird-wrapper-outsider">
                    <div class="form-of-flying-bird-wrapper">

                        <h1 class="form-of-flying-bird-wrapper-main-heading">
                            Keeper<sup class="sup-tm-text">TM</sup>

                        </h1>
                        <p class="form-of-flying-bird-wrapper-paragrpah-heading">
                            A quick way to start


                        </p>
                        <div class="row-of-bird-flying-price">
                            <div class="left-col-of-price">
                                <h1 class="price-row-main-heading">
                                    Free
                                </h1>
                            </div>

                        </div>
                        <p class="form-of-flying-bird-wrapper-paragrpah-heading-2">
                            Post thoughtful tributes and view up to five non-downloadable images in a photo gallery. Memorial pages do not expire.
                        </p>
                        <button class="black-background-btn half-width create-memorial-btn">
                            Create Memorial
                        </button>
                    </div>
                    <div class="bottom-of-card">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <a href="">All Free Features</a>
                    </div>
                </div>
                <div class="form-of-flying-bird-wrapper-outsider">
                    <div class="form-of-flying-bird-wrapper form-bg-second">
                        <p class="most-popular-top-heading">Most popular</p>
                        <h1 class="form-of-flying-bird-wrapper-main-heading">
                            Keeper<sup class="sup-tm-text">TM</sup>
                            <span class="plus-title">Plus</span>
                        </h1>
                        <p class="form-of-flying-bird-wrapper-paragrpah-heading">
                            A true celebration of life. Online forever.
                        </p>
                        <div class="row-of-bird-flying-price">
                            <div class="left-col-of-price">
                                <h1 class="price-row-main-heading">
                                    $74<sup class="price-row-main-heading-sup">99</sup>
                                </h1>
                            </div>
                            <div class="right-col-of-price"><h2>one time payment</h2></div>
                        </div>
                        <p class="form-of-flying-bird-wrapper-paragrpah-heading-2">
                            View unlimited images in a gallery, download local copies of images,
                            create a full family tree, create unlimited memorial pages, and
                            more. <a>Learn more</a>
                        </p>
                        <button class="black-background-btn half-width create-memorial-btn">
                            Create Memorial
                        </button>
                    </div>
                    <div class="bottom-of-card">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <a href="">All Keeper Plus Features</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    const memorialPassedCheckbox = document.getElementById('memorialPassedCheckbox');
    const memorialEmailContainer = document.getElementById('memorialEmailContainer');
    const memorialDodContainer = document.getElementById('memorialDodContainer');

    memorialPassedCheckbox.addEventListener('change', function () {
        if (this.checked) {
            // If "Passed" checkbox is checked, show email input and hide Date of Birth
            memorialEmailContainer.style.display = 'block';
            memorialDodContainer.style.display = 'none';
        } else {
            // If "Passed" checkbox is unchecked, hide email input and show Date of Birth
            memorialEmailContainer.style.display = 'none';
            memorialDodContainer.style.display = 'block';
        }
    });
</script>
</body>
</html>
