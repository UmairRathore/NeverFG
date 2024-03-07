@extends('layouts.frontend.app.app')
@section('title', 'Profile')
@section('content')
<style>
    @media screen and (max-width: 600px) {
        .profile-icon-content {
            width: 100%;
            float: left;
        }
        .momentos-section {
            width: 100%;
            float: left;
        }
    }
</style>
    <!-- Edit Profile content -->
    <div class="margin-all">
        <!-- Profile section -->

        <div class="grid-of-not-logged-in-profile">
            <div class="profile-icon-content ">
                <div class="form-of-unlogged-in-user width-800px">
                    <!-- Header -->
                    <div class="header-of-form-profile margin-top no-border">
                        <div class="momentos-section">
                            <div class="insider">
                                <div class="div-1">
                                    <h1 class="mem-heading-main">Momentos</h1>
                                    <h3 class="mem-heading-main">Images</h3>
                                    @php $hasImage = false; @endphp
                                    <div class="pics-wrapper">
                                        @php $firstVideoDisplayed = false; @endphp
                                        {{--                            {{dd($mementos)}}--}}
                                        <?php
//                                        dd($mementos);
                                        $count = $mementos->whereNotNull('memento_image')->count();
//                                        dd($count);

                                        ?>
                                        @if($count < 1)


                                            <div class="image-wrapper-of-not-logged-in-profile">

                                                <img src="{{ asset('assets/images/blacklogo.jpg') }}" alt="" class="mem-pic">


                                            </div>

                                        @endif

                                        @foreach($mementos as $memento)
                                                @if($memento->memento_image )
                                                    <?php
                                                $datai[] = $memento->memento_image;
                                                ?>
                                            <div class="image-wrapper-of-not-logged-in-profile">
{{--                                                @php $hasImage = true; @endphp--}}
                                                    <img src="{{ asset($memento->memento_image) }}" alt="" class="mem-pic">

                                            </div>
                                                @endif
                                            @if($memento->memento_video && !$firstVideoDisplayed)
                                                <?php
                                                $data = $memento->memento_video;
                                                ?>
                                            @endif
                                        @endforeach

                                    </div>
                                    @if(isset($datai))
                                        <a href="{{ route('all_images',$memorial->memorial_user_id) }}">See All Images</a>
                                    @endif
                                </div>

                            </div>
                            <div class="insider">
                                <div class="div-1">
                                    <h3 class="mem-heading-main">VIDEOS</h3>

                                    @if(isset($data))
                                        <div class="pics-wrapper">

                                            <video width="260" height="200" controls>
                                                <source src="{{ asset($data) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            @php $firstVideoDisplayed = true; @endphp


                                        </div>
                                        <p><a href="{{ route('all_videos',$memorial->memorial_user_id) }}">See All Videos</a></p>
                                    @endif

                                    @php $firstVideoDisplayed = true; @endphp
                                </div>
                            </div>

                        </div>
                        <div class="profile-header-without-logged-in ">

                            <h2>Always In Our Thoughts, Forever In Our Hearts.</h2>
                        </div>

                    </div>
                    <!-- Biography -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">Biography</h1>
                        <p>{{isset($memorial->biography) ? $memorial->biography :' ' }}</p>

                    </div>
                    <!-- About -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">About</h1>
                        <div class="cols-of-unlogged-in-two-cols">
                            <div class="cols-of-unlogged-in-two-cols-left">
                                <svg width="90px" height="90px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M16 5L18 7L22 3M22 12V17.2C22 18.8802 22 19.7202 21.673 20.362C21.3854 20.9265 20.9265 21.3854 20.362 21.673C19.7202 22 18.8802 22 17.2 22H6.8C5.11984 22 4.27976 22 3.63803 21.673C3.07354 21.3854 2.6146 20.9265 2.32698 20.362C2 19.7202 2 18.8802 2 17.2V6.8C2 5.11984 2 4.27976 2.32698 3.63803C2.6146 3.07354 3.07354 2.6146 3.63803 2.32698C4.27976 2 5.11984 2 6.8 2H12M2.14551 19.9263C2.61465 18.2386 4.16256 17 5.99977 17H12.9998C13.9291 17 14.3937 17 14.7801 17.0769C16.3669 17.3925 17.6073 18.6329 17.9229 20.2196C17.9998 20.606 17.9998 21.0707 17.9998 22M14 9.5C14 11.7091 12.2091 13.5 10 13.5C7.79086 13.5 6 11.7091 6 9.5C6 7.29086 7.79086 5.5 10 5.5C12.2091 5.5 14 7.29086 14 9.5Z"
                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="cols-of-unlogged-in-two-cols-right">

                                <div class="nested-two-cols">
                                    <p class="row-heading">Name</p>
                                    <p class="row-heading">{{ isset($memorial->first_name) && isset($memorial->last_name) ? $memorial->first_name . ' ' . $memorial->last_name : 'JOHN DOE' }}</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Date of Birth</p>
                                    <p class="row-heading">{{ isset($memorial->dob) ? date('F jS, Y', strtotime($memorial->dob)) : 'DATE OF BIRTH' }} </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Date of Death</p>
                                    <p class="row-heading">{{ isset($memorial->dod) ? date('F jS, Y', strtotime($memorial->dod)) : 'DATE OF DEATH' }} </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading">Home Town</p>
                                    <p class="row-heading">{{  isset($memorial->city->home_city) ? $memorial->city->home_city : 'no home city added  '  }}</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading-1">Other City</p>
                                    <p class="row-heading">{{  isset($memorial->city->other_city) ? $memorial->city->other_city : ' no other city added'  }}</p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading-1">Interests</p>
                                    <p class="row-heading">
                                        @isset($memorial->interests->interest)
                                            @php
                                                $interests = explode(',', $memorial->interests->interest);
                                                $interestsString = implode(', ', $interests);
                                            @endphp
                                            {{ $interestsString }}
                                        @else
                                            no interest added
                                        @endisset
                                    </p>
                                </div>
                                <div class="nested-two-cols">
                                    <p class="row-heading-1">Favourite Saying</p>
                                    <p class="row-heading">{{  isset($memorial->fav_saying) ? $memorial->fav_saying : ' no favourite saying added '  }}</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- Memorial -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">Memorial</h1>
                        <div class="cols-of-unlogged-in-two-cols">
                            <div class="cols-of-unlogged-in-two-cols-left">
                                <svg height="90px" width="90px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                                     fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <style type="text/css">
                                            .st0 {
                                                fill: #000000;
                                            }
                                        </style>
                                        <g>
                                            <path class="st0"
                                                  d="M405.972,62.12c-82.83-82.826-217.114-82.826-299.94,0c-82.815,82.811-82.815,217.11,0,299.929L255.999,512 l149.972-149.952C488.782,279.23,488.782,144.93,405.972,62.12z M255.999,83.79c32.118,0,58.156,26.039,58.156,58.16 c0,32.129-26.039,58.16-58.156,58.16c-32.126,0-58.164-26.031-58.164-58.16C197.835,109.829,223.874,83.79,255.999,83.79z M172.552,305.423c0-46.084,37.36-83.448,83.448-83.448c46.08,0,83.444,37.364,83.444,83.448H172.552z">
                                            </path>
                                        </g>
                                    </g>
                            </svg>
                            </div>

                            <div class="cols-of-unlogged-in-two-cols-right">

                                <div class="nested-two-cols">
                                    <p class="row-heading">Cemetery</p>
                                    <p class="row-heading">{{  isset($memorial->resting_place) ? $memorial->resting_place : 'no resting place added'  }}</p>
                                </div>


                            </div>


                        </div>
                    </div>


                    <!-- Milestone -->
                    <div class="without-logged-in-form-data-of-profile-page">
                        <h1 class="heading-of-unlogged-profile">MileStones</h1>
                        <div class="cols-of-unlogged-in-two-cols">
                            <div class="cols-of-unlogged-in-two-cols-left">
                                <svg width="90px" height="90px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M5.75 1C6.16421 1 6.5 1.33579 6.5 1.75V3.6L8.22067 3.25587C9.8712 2.92576 11.5821 3.08284 13.1449 3.70797L13.3486 3.78943C14.9097 4.41389 16.628 4.53051 18.2592 4.1227C19.0165 3.93339 19.75 4.50613 19.75 5.28669V12.6537C19.75 13.298 19.3115 13.8596 18.6864 14.0159L18.472 14.0695C16.7024 14.5119 14.8385 14.3854 13.1449 13.708C11.5821 13.0828 9.8712 12.9258 8.22067 13.2559L6.5 13.6V21.75C6.5 22.1642 6.16421 22.5 5.75 22.5C5.33579 22.5 5 22.1642 5 21.75V1.75C5 1.33579 5.33579 1 5.75 1Z"
                                            fill="#000000"></path>
                                    </g>
                                </svg>
                            </div>

                            <div class="cols-of-unlogged-in-two-cols-right">
                                <div class="nested-two-cols">
                                    @isset($memorial->milestone->milestone, $memorial->milestone->year)
                                        @php
                                            $milestones = explode(',', $memorial->milestone->milestone);
                                            $milestonesString = implode(', ', $milestones);
                                        @endphp
                                                <p class="row-heading-1">{{ $memorial->milestone->year }}</p>
                                                <p class="row-heading">{{$milestonesString }}</p>
                                        @else
                                            <p class="row-heading-1">no year added</p>
                                            <p class="row-heading">no milestones added</p>

                                    @endisset
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <!-- Comment  -->
@if(auth()->user()->id != $memorial->keeper_id)

    <?php

    $Comments = \App\Models\Comment::where('receiver_id', $memorial->memorial_user_id)
        ->where('status','approved')
        ->join('users', 'users.id', '=', 'comments.sender_id')->get();

    ?>
@if($Comments)
    @foreach($Comments as $comment)
        <div class="margin-all">
            <div class="comments-and-replies">
                <div class="comment-wrapper" id="commentWrapper">
                    <div class="two-cols-of-comment-and-replies">
                        <div class="two-cols-of-comment-and-replies-left">
                            <div class="img-wrapper-of-comment">
                                @if(isset($comment->profile_image))
                                    <img src="{{asset($comment->profile_image)}}" alt="" class="comment-img">
                                @else
                                    <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="comment-img">
                                @endif
                            </div>
                        </div>
                        <div class="two-cols-of-comment-and-replies-right">
                            <p class="c-r-user-name">
                                {{$comment->first_name.' '.$comment->last_name}} published a tribute
                                <span class="time-of-comment">
                            {{-- Carbon\Carbon::parse($comment->created_at)->diffForHumans() --}}
                        </span>
                            </p>
                            <p class="c-r-comment-data">{{  $comment->content  }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endforeach
@endif
    @endif
@if(auth()->user()->id == $memorial->keeper_id)


<?php

$Comments = \App\Models\Comment::select('users.first_name','users.last_name','users.profile_image',
    'comments.id as commentID','comments.content','comments.status')
    ->where('receiver_id', $memorial->memorial_user_id)
    ->join('users', 'users.id', '=', 'comments.sender_id')->get();

?>
@if($Comments)
    @foreach($Comments as $comment)

<div class="margin-all">
            <div class="comments-and-replies">
                <div class="comment-wrapper" id="commentWrapper">
                    <div class="two-cols-of-comment-and-replies">
                        <div class="two-cols-of-comment-and-replies-left">
                            <div class="img-wrapper-of-comment">
                                @if(isset($comment->profile_image))
                                    <img src="{{asset($comment->profile_image)}}" alt="" class="comment-img">
                                @else
                                    <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="comment-img">
                                @endif
                            </div>
                        </div>
                        <div class="two-cols-of-comment-and-replies-right">
                            <p class="c-r-user-name">
                                {{$comment->first_name.' '.$comment->last_name}} published a tribute
                                <span class="time-of-comment">
                            {{-- Carbon\Carbon::parse($comment->created_at)->diffForHumans() --}}
                        </span>
                            </p>
                            <p class="c-r-comment-data">{{  $comment->content  }}</p>
                            @if(strtolower($comment->status) == 'pending')
                               <style>
                                   .button-row {
                                       display: flex;

                                   }
                               </style>
                                <div class="button-row">
                                    <form action="{{ route('approve.comment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="comment_id" value="{{ $comment->commentID }}">
                                        <input type="hidden" name="approve" value="approved">
                                        <button type="submit" class="black-background-btn btn-width">Approve</button>
                                    </form>
                                    <div style="width: 10px;"></div> <!-- Adjust width for desired space -->

                                    <form action="{{ route('deny.comment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="comment_id" value="{{ $comment->commentID }}">
                                        <input type="hidden" name="deny" value="denied">
                                        <button type="submit" class="black-background-btn btn-width">Deny</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endforeach
@endif
@endif



<!-- Comment -->
    <div class="margin-all">
        <div class="chat-section">
            <div id="message-container" class="mt-3"></div>

            <div class="chat-wrapper">
                <div id="success-chat" class="two-cols-of-chat-wrapper">
                    <div class="chat-left-section">
                        <div class="chat-usr-img-wrapper">

                            <?php
                            $user = \App\Models\User::where('id', auth()->user()->id)->first();
                            ?>
                            @if($user->profile_image)
                                <img src="{{asset($user->profile_image)}}" alt="" class="chat-usr-photo">
                            @else
                                <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="chat-usr-photo">

                            @endif</div>

                    </div>

                    <div class="chat-right-section">
                        <textarea class="txt-area-design" name="content" id="commentContent" cols="50" rows="8" placeholder="Write your comment here"></textarea>
                        <button id="postCommentBtn" class="black-background-btn btn-width">Post comment</button>
                        <input type="hidden" id="senderId" value="{{ auth()->user()->id }}">
                        <input type="hidden" id="receiverId" value="{{ $memorial->memorial_user_id }}">

                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection

@section('profileJS')
    <script>

        $(document).ready(function () {
            $('#postCommentBtn').click(function () {
                // Get the input values
                var content = $('#commentContent').val();
                var senderId = $('#senderId').val();
                var receiverId = $('#receiverId').val();

                // Create the data object
                var formData = {
                    content: content,
                    sender_id: senderId,
                    receiver_id: receiverId,
                    _token: '{{ csrf_token() }}' // Add CSRF token
                };

                // Send the AJAX request
                $.ajax({
                    url: '/post-comment',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        // Handle success response
                        console.log(response);
                        // Clear textarea after successful post
                        $('#commentContent').val('');
                        // Refresh the comment section
                        refreshCommentSection();
                    },
                    error: function (xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                });
            });
        });
        // Function to show the success message
        function showSuccessMessage(message) {
            // Create a new element for the success message
            var successMessage = $('<div class="success-message"></div>').text(message);
            // Append the success message to the chat div
            $('#success-chat').prepend(successMessage);
            // Automatically remove the success message after 5 seconds
            setTimeout(function () {
                successMessage.remove();
            }, 5000);
        }

        function refreshCommentSection() {
            // Get the updated comment content via AJAX or directly from the server
            var updatedCommentContent = ''; // Update this variable with the new comment content

            // Replace the content of the comment-wrapper div with the updated content
            $('#commentWrapper').html(updatedCommentContent);
        }
    </script>

@endsection
