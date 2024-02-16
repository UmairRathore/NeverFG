@extends('layouts.frontend.app.app')
@section('title', 'Message')
@section('content')

    @include('frontend.profile.message.chat-css')

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
                    <h1 class="form-top-main-heading-of-profile">NeverFg of:</h1>

                </div>
                <div class="form-data-of-profile-page">

                    <div class="container">
                        <h2 class=" text-center" style="font-weight: bold;">Messaging</h2>
                        <div class="messaging">
                            <div class="inbox_msg">
                                <div class="inbox_people">
                                    <div class="headind_srch">
                                        <div class="recent_heading">
                                            <h4>Recent</h4>
                                        </div>
                                    </div>
                                    <div class="inbox_chat">
{{--                                        @foreach($leftwallmessages as $leftwallmessages)--}}

                                            {{--                            @if(is_object($leftwallmessages) && property_exists($leftwallmessages, 'id'))--}}
                                            <div id="chatleft" class="chat_list active_chat">
                                                <a href="{{ route('chat.text', [$leftwallmessages->id]) }}">
                                                    <div class="chat_people">
                                                        <div class="chat_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"></div>
                                                        <div class="chat_ib">
                                                            <h5>{{ $leftwallmessages->first_name.''.$leftwallmessages->last_name}}</h5>
                                                            {{-- You might want to show the latest message here --}}
                                                            <p>{{ $leftwallmessages->message }}.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            {{--                            @else--}}
                                            {{--                                <div>Invalid data format: {{ json_encode($leftwallmessages) }}</div>--}}
                                            {{--                            @endif--}}
{{--                                        @endforeach--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
