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

            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Mementos Videos</h1>
                </div>
                <div class="form-group-input">


                    <div class="momentos-section">
                        <style>
                            .insider {
                                display: flex;
                                flex-wrap: wrap;
                                justify-content: center; /* Center the flex items horizontally */
                            }

                            .insider video {
                                margin: 10px; /* Add some space around each video */
                            }
                        </style>

                        <div class="insider">
                            @foreach($mementos as $video)
                                <!-- Video -->
                                @if($video->memento_video)
                                    <video width="320" height="240" controls>
                                        <source src="{{asset($video->memento_video)}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <a href="#" class="deleteFileLink" data-file-id="{{ $video->id }}" data-file-path="{{ $video->memento_video }}">Delete</a>

                                @else
                                    <video width="320" height="240" controls>
                                        <source src="movie.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>


        </div>

        </section>
    </div>
    <script>
        $(document).ready(function () {
            $('.deleteFileLink').click(function (event) {
                event.preventDefault(); // Prevent the default link behavior

                var fileId = $(this).data('file-id');
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

