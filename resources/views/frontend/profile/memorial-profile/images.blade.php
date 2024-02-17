@extends('layouts.frontend.app.app')
@section('title', 'Mementos')
@section('content')

    <!-- Momentos content -->
    <!-- NeverFg content -->
    <div class="center-and-margin">
        <!-- Profile section -->
        <style>
            .profile-icon-content {
                width: 100%; /* Adjust this value as needed */
                max-width: 800px; /* Set a maximum width if necessary */
                margin: 0 auto; /* Center the element horizontally */
            }

            .form-data-of-profile-page {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .profile-pic-wrapper-of-Picture {
                margin: 10px; /* Adjust margin as needed */
            }

            .profile-pic-wrapper-of-Picture img {
                width: 100%; /* Make sure images fill the container */
                height: auto; /* Maintain aspect ratio */
                max-width: 200px; /* Limit the width of each image */
            }
        </style>

        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Mementos Images</h1>
                </div>
                <div class="form-data-of-profile-page">
                    @foreach($mementos as $memorial)
                        <div class="profile-pic-wrapper-of-Picture">
                            @if($memorial->memento_image)
                                <img src="{{ asset($memorial->memento_image) }}" alt="{{ $memorial->memento_image }}" class="pic-of-usr">
{{--                               {{dd($memorial)}}--}}
                                <a href="#" class="deleteFileLink" data-user-id="{{ $memorial->id }}" data-file-path="{{ $memorial->memento_image }}">Delete</a>

                            @else
                                <img src="{{asset('frontend/assets/images/hero_background_1.jpg')}}" alt="" class="pic-of-usr"/>
                            @endif

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {
        $('.deleteFileLink').click(function (event) {
            event.preventDefault(); // Prevent the default link behavior

            var fileId = $(this).data('user-id');
            var filePath = $(this).data('file-path');

            $.ajax({
                url: '{{ route("delete.file") }}',
                type: 'POST',
                data: {
                    fileId: fileId,
                    filePath: filePath,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    // Handle success
                    console.log(response);
                    // Optionally, update the UI or display a success message
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    // Optionally, display an error message to the user
                }
            });
        });
    });

</script>
@endsection
