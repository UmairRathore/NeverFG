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
{{--                                    {{dd($video->id)}}--}}
                                    <video width="320" height="240" controls>
                                        <source src="{{asset($video->memento_video)}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <a href="#" class="deleteFileLink" data-user-id="{{ $video->id }}" data-file-path="{{ $video->memento_video }}">Delete</a>
                                    <div id="deleteloader" style="display: none;">
                                        <img src="{{asset('assets/loader.gif')}}" alt="Loader GIF">
                                        <p>Loading...</p>
                                    </div>
                                    <div id="deletemessage" style="display: none; color: blue"></div>

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
        $(document).ready(function() {
            $('.deleteFileLink').click(function(e) {
                e.preventDefault(); // Prevent the default link behavior

                var fileId = $(this).data('user-id');
                var filePath = $(this).data('file-path');
                var loaderId = $(this).siblings('#deleteloader');
                var messageId = $(this).siblings('#deletemessage');

                deleteMemento(fileId, filePath, loaderId, messageId);
            });
        });

        function deleteMemento(fileId, filePath, loaderId, messageId) {
            // Show loader
            loaderId.show();
            // Hide previous message
            messageId.hide();

            $.ajax({
                url: '{{ route("delete.file") }}',
                type: 'POST',
                data: {
                    fileId: fileId,
                    filePath: filePath,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    loaderId.hide();
                    messageId.text(response.message).addClass('success').show();
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    loaderId.hide();
                    messageId.text(xhr.responseJSON.message).addClass('error').show();
                    console.error(xhr.responseText);
                }
            });
        };
    </script>

@endsection

