@extends('layouts.frontend.app.app')
@section('title', 'Mementos')
@section('content')

    <!-- Momentos content -->
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
            <div class="momentos-section">
                <div class="insider">


                </div>

            </div>
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Photos and videos</h1>
                    {{--                    <p>With NeverFg, anyone that visits the page will only be able to view the 5 photos and videos you've selected--}}
                    {{--                        below. When you get NeverFg Plus, all photos and videos will become visible to the public.</p>--}}
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

                    <form id="imageUploadForm">
                        <div class="form-group-input">
                            <label for="imageFile">Upload Image:</label>
                            <input type="file" id="imageFile" name="memento_image" class="input-design"/>
                        </div>
                        <input type="hidden" name="userID" value="{{$id}}" class="input-design"/>
                        <div class="footer-of-form-content">
                            <button type="button" id="uploadImageButton" class="form-btn">Upload Image</button>
                        </div>
                        <div id="imageLoader" style="display: none;">
                            <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                            <p>Loading...</p>
                        </div>
                        <div id="imageMessage" style="display: none;"></div>
                    </form>

                    <form id="videoUploadForm">
                        <div class="form-group-input">
                            <label for="videoFile">Upload Video:</label>
                            <input type="file" id="videoFile" name="memento_video" class="input-design"/>
                        </div>
                        <input type="hidden" name="userID" value="{{$id}}" class="input-design"/>
                        <div class="footer-of-form-content">
                            <button type="button" id="uploadVideoButton" class="form-btn">Upload Video</button>
                        </div>
                        <div id="videoLoader" style="display: none;">
                            <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                            <p>Loading...</p>
                        </div>
                        <div id="videoMessage" style="display: none;"></div>
                    </form>



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
            $('#uploadImageButton').click(function () {
                uploadMemento('imageUploadForm', '#imageLoader', '#imageMessage');
            });

            $('#uploadVideoButton').click(function () {
                uploadMemento('videoUploadForm', '#videoLoader', '#videoMessage');
            });
        });

        function uploadMemento(formId, loaderId, messageId) {
            // Show loader
            $(loaderId).show();
            // Hide previous message
            $(messageId).hide();

            // Get form data
            var formData = new FormData($('#' + formId)[0]);
            formData.append('_token', '{{ csrf_token() }}');

            // Send AJAX request
            $.ajax({
                url: '/store-memento', // Replace with your endpoint
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    // Hide loader on success
                    $(loaderId).hide();

                    // Show success message
                    $(messageId).text(response.message).addClass('success').show();

                    // Handle success
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    // Hide loader on error
                    $(loaderId).hide();

                    // Show error message
                    $(messageId).text(xhr.responseJSON.message).addClass('error').show();

                    // Handle error
                    console.error(xhr.responseText);
                }
            });
        }




    </script>
@endsection
