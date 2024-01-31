@extends('layouts.frontend.profilelayout.master')
@section('title', 'Message')
@section('content')

    <!-- Family content -->
    <div class="center-and-margin">

        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Messages</h1>


                </div>
                <div class="form-data-of-profile-page">
                    <div class="form-group-input">
                       


                        <div class="container">
                            <h2 class=" text-center" style="font-weight: bold;">Messaging</h2>
                            <div class="messaging">
                                <div class="inbox_msg">
                                    <div class="inbox_people">
                                        <div class="headind_srch">
                                            <div class="recent_heading">
                                                <h4>Recent</h4>
                                            </div>
                                            {{--                        <div class="srch_bar">--}}
                                            {{--                            <div class="stylish-input-group">--}}
                                            {{--                                <input type="text" class="search-bar" placeholder="Search">--}}
                                            {{--                                <span class="input-group-addon">--}}
                                            {{--                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>--}}
                                            {{--                </span></div>--}}
                                            {{--                        </div>--}}
                                        </div>
                                        <div class="inbox_chat">
                                            @foreach($leftwallmessages as $data)
                                                <div id="chatleft" class="chat_list active_chat">
                                                    <a href="{{route('chat.text',[$data->id])}}">
                                                        <div class="chat_people">
                                                            <div class="chat_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"></div>
                                                            <div class="chat_ib">
                                                                <h5>{{$data->username}} </h5>
                                                                {{--                                            <p>{{$data->message}}.</p>--}}
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mesgs" id="mesgs">
                                        <div class="msg_history" id="chat">
                                            @foreach($messages as $message)
                                                @if(Auth::user()->id == $message->sender_id)
                                                    <div class="outgoing_msg">
                                                        <div class="sent_msg">
                                                            <p style="color:black">{{$message->message}}</p>
                                                            <time datetime="2009-11-13T20:00">{{$message->created_at->diffForHumans()}}</time>

                                                        </div>
                                                    </div>

                                                @else
                                                    <div class="incoming_msg" >
                                                        <div class="incoming_msg_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                        </div>
                                                        <div class=" received_msg">
                                                            <div class="received_withd_msg">
                                                                <p style="color:white">{{$message->message}}</p>
                                                                <time datetime="2009-11-13T20:00">{{$message->created_at->diffForHumans()}}</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="type_msg">
                                            <div class="input_msg_write">
                                                <form id="chatmodalform">
                                                    {{--                                        @csrf--}}
                                                    <div class="input_msg_write">
                                                        <input id="receiver_id" type="hidden" value="{{$reciever_id}}">
                                                        <input id="sender_id" type="hidden" value="{{Auth::user()->id}}">
                                                        <input type="text" class="write_msg form-control input-sm chat_input @error('messsage') is-invalid @enderror"
                                                               value="{{ old('message') }}" id="message" placeholder="Write your message here..."/>
                                                        <button class="msg_send_btn" id="btn-chat" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            {{--                                <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>--}}
                                        </div>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
                                        <script type="text/javascript">
                                            $('#chatmodalform').on('submit', function (e) {
                                                e.preventDefault();
                                                // alert('ok')

                                                let message = $('#message').val();
                                                let receiver = $('#receiver_id').val();
                                                let sender = $('#sender_id').val();

                                                $.ajax({
                                                    url: "/storechat",
                                                    type: "POST",
                                                    data: {
                                                        "_token": "{{ csrf_token() }}",
                                                        message: message,
                                                        receiver_id: receiver,
                                                        sender_id: sender,
                                                    },

                                                    success: function (response) {

                                                        console.log(response);
                                                        $('#chatmodalform')[0].reset(); // Clear the form
                                                        $("#chat").load(location.href + " #chat");

                                                    },
                                                });
                                            });
                                            $("#btn-chat").click(function (e) {
                                                // $("#repliesdiv").toggleClass("d-none");
                                                $("#mesgs").animate({
                                                    scrollTop: ($('#chat').offset().top)
                                                }, 200);

                                            });


                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
