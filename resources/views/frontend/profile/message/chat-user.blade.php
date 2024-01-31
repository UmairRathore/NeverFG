@extends('layouts.frontend.profilelayout.master')
@section('title', 'Message')
@section('content')


    @include('frontend.profile.message.chat-css')


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
                        @foreach($leftwallmessages as $data)

{{--                            @if(is_object($data) && property_exists($data, 'id'))--}}
                                <div id="chatleft" class="chat_list active_chat">
                                    <a href="{{ route('chat.text', [$data->id]) }}">
                                        <div class="chat_people">
                                            <div class="chat_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"></div>
                                            <div class="chat_ib">
                                                <h5>{{ $data->first_name.''.$data->last_name}}</h5>
                                                {{-- You might want to show the latest message here --}}
                                                 <p>{{ $data->message }}.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
{{--                            @else--}}
{{--                                <div>Invalid data format: {{ json_encode($data) }}</div>--}}
{{--                            @endif--}}
                        @endforeach
                    </div>
                </div>
        </div>
    </div>

@endsection
