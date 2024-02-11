@extends('layouts.frontend.app.app')
@section('title', 'Mementos')
@section('content')

    <!-- Momentos content -->
    <div class="center-and-margin">
        <!-- Profile secion -->
        <div class="profile-icon-content tab-content" id="Info">
            <div class="momentos-section">
                <div class="insider">


                </div>

            </div>
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Mementos</h1>
                    <p>With Keeper, anyone that visits the page will only be able to view the 5 photos and videos you've selected
                        below. When you get Keeper Plus, all photos and videos will become visible to the public.</p>
                </div>
                <div class="form-group-input">
{{--                    --}}{{--                    <label for="">The profiles that {{ $keeper->first_name }} manages:</label>--}}
{{--                    --}}{{--                    @foreach($memorials as $memorial)--}}
{{--                                        <div id="profile-image-div" class="profile-pic-wrapper-of-Picture">--}}
{{--                    @foreach ($mementos as $memento)--}}
{{--                        @if ($loop->iteration % 3 == 1)--}}
{{--                            <!-- Start a new row after every 3 images -->--}}
{{--                            <div class="row">--}}
{{--                                @endif--}}
{{--                                <div class="col-md-4">--}}
{{--                                    @if($memento->memento_image)--}}
{{--                                        <img src="{{ asset($memento->memento_image) }}" alt="{{ $memento->memento_image }}" class="pic-of-usr">--}}

{{--                                    @else--}}
{{--                                        <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="pic-of-usr"/>--}}

{{--                                    @endif--}}
{{--                                </div>--}}
{{--                                @if ($loop->iteration % 3 == 0 || $loop->last)--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                                        </div>--}}
{{--                    --}}{{--                        <a href="{{ route('profile', ['id' => $memorial->memorialID]) }}" class="profile-link">--}}
{{--                    --}}{{--                            <span class="profile-name">{{ $memorial->first_name.' '.$memorial->last_name }}</span>--}}
{{--                    --}}{{--                        </a>--}}
{{--                    --}}{{--                    @endforeach--}}

                    <form id="uploadForm">
                        <div class="form-group-input">
                            <label for="file">Upload Image:</label>
                            <input type="file" id="file" name="memento_image" class="input-design"/>
                            <input type="hidden" name="userID" value="{{$id}}" class="input-design"/>
                        </div>
                        <div class="footer-of-form-content">
                            <!-- Change the button type to "button" -->
                            <button type="button" id="uploadButton" class="form-btn">Save mementos</button>
                        </div>
                    </form>


                </div>
            </div>

            <div class="form-of-logged-in-user linear-background-of-form">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Better Mementos with Keeper Plus</h1>

                    @if(auth()->check())
                        @if(auth()->user()->account_type_id == 1)
                            <p>When you upgrade to Keeper Plus, your friends and family will be able to view all uploaded Mementos and
                                download their own copy of these pictures in a single file. With Keeper Plus you change the order in which
                                Memento images and videos appear. Keeper Plus also enables you to upload full HD videos directly from your
                                phone, tablet or computer.</p>
                            <a href="https://buy.stripe.com/test_14k2a63F13IqfcYfYZ" class="black-background-btn" target="_blank">Upgrade Keeper Plus</a>
                        @elseif(auth()->user()->account_type_id == 2)
                            <p>You already have the package</p>
                            <button class="black-background-btn" onclick="showAlert('You already have the package.');">Upgrade Keeper Plus</button>
                        @endif
                    @endif
                </div>
            </div>


        </div>

        </section>
    </div>

@endsection
@section('mementosJS')
    <script>

        function showAlert(message) {
            alert(message);
        }

        $(document).ready(function () {
            $('#uploadButton').click(function () {
                // Get form data
                var formData = new FormData($('#uploadForm')[0]);
                formData.append('_token', '{{ csrf_token() }}');

                // Send AJAX request
                $.ajax({
                    url: '/store-memento', // Replace with your endpoint
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // Handle success
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            });
        });


    </script>
@endsection
