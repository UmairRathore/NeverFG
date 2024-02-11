<div class="main-header-funeralist" id="header">
    <div class="main-header-funeralist-left-items">
{{--         <img--}}
{{--            src="{{asset('assets/images/logo.jpg')}}"--}}
{{--            alt=""--}}
{{--            class="logo-funeralist"--}}
{{--            id="large-screen-funeralist-logo"--}}
{{--          />--}}

    </div>
    <div class="main-header-funeralist-right-items">
        <div class="simple-items">
            <ul class="list">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('forbusiness')}}">For Business</a></li>
                <li><a href="{{route('virtualfuneral')}}">Virtual funerals</a></li>
                <li><a href="{{route('faqs')}}">Faq </a></li>
                <li><a href="{{route('features')}}">Features</a></li>
                @if(auth()->check())
                    <?php
                    $userROLE = \App\Models\User::where('id', auth()->user()->id)->where('role_id', '1')->first();
                    ?>
                @isset($userROLE)
                    @if($userROLE->role_id == 1)
                        <li><a href="{{route('backend.index')}}">Dashboard</a></li>
                    @endif
                    @endisset
                @endif
                @if(!auth()->check())
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('usersignup')}}"> Signup</a></li>
                    <li><a href="{{route('memorialsignup')}}">Memorial Signup</a></li>
                @endif
            </ul>
        </div>
        {{--            <div class="funeralist-header-search-box" id="search-box-div">--}}
        {{--                <svg width="22px" viewBox="0 0 24 24">--}}
        {{--                    <circle cx="9.54" cy="9.51" r="9.08" fill="none" stroke="currentColor" stroke-miterlimit="10"--}}
        {{--                            stroke-width="1.4px"></circle>--}}
        {{--                    <path d="m17.87 17.83 5.88 5.89" fill="none" stroke="currentColor" stroke-miterlimit="10"--}}
        {{--                          stroke-width="1.4px"></path>--}}
        {{--                </svg>--}}
        {{--            </div>--}}
        <!-- User Profile -->
        @if(auth()->check())

            <?php
            $user = \App\Models\User::where('id', auth()->user()->id)->first();
            //                dd($user);
            $checkMemorial = \App\Models\UserMemorial::select('users.first_name as first_name ',
                'users.last_name as last_name', 'users.id as user_id', 'user_memorials.memorial_user_id as id')
                ->where('keeper_id', $user->id)
                ->join('users', 'users.id', '=', 'user_memorials.memorial_user_id')
                ->get();


            ?>
            <div class="funeralist-header-user-box" id="user-icon-div">
                <svg style="width: 22px" id="user-img-svg" viewBox="0 0 24 24">
                    <circle cx="12" cy="6.47" r="5.92" fill="none" stroke="currentColor" stroke-miterlimit="10"
                            stroke-width="1.4px"></circle>
                    <path d="M.43 23.86c0-4.19 2.17-7.62 7.15-7.62h8.84c5 0 7.15 3.43 7.15 7.62" fill="none"
                          stroke="currentColor" stroke-miterlimit="10" stroke-width="1.4px"></path>
                </svg>
                <div class="user-dropdown-of-funeralist" id="user-options">
                    <ul class="user-unorderedlist-dropdown">
                        <h3 style="margin: 10px 0 5px; padding: 5px 16px; background-color: #ddd;">Profile</h3>
                        <li><a href="{{route('edit.user.profile',$user->id)}}">{{$user->first_name.' '.$user->last_name}}</a></li>

                        @foreach($checkMemorial  as $memorial)
                            @if ($loop->first)
                                <h3 style="margin: 10px 0 5px; padding: 5px 16px; background-color: #ddd;">Memorial</h3>
                            @endif
                            <li><a href="{{route('edit.memorial.profile',$memorial->id)}}">{{$memorial->first_name.' '.$memorial->last_name}}</a></li>
                        @endforeach
                        <li class="dropdown-menu-footer">

                            <a role="button" class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>

                    </ul>
                </div>
            </div>
        @endif
    </div>
</div>

{{--<div class="small-and-medium-size-navigation-menu" id="sidebar-menu">--}}
{{--    <div class="small-nav-bar-logo-div">--}}
{{--        <img id="logo_image" src="{{asset('assets/images/logo.jpg')}}" alt="" class="my-small-nav-logo" id="my-small-nav-logo"/>--}}
{{--    </div>--}}
{{--    <div class="funeralist_sidebar_menu-btn" id="menu-btn">--}}
{{--        <i class="fas fa-bars"></i>--}}
{{--    </div>--}}


{{--</div>--}}
<!-- Sub menu -->
<div class="side-bar-of-funeralist">
    <header class="side-bar-of-funeralist-header-of-funeralist">
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <img src="{{asset('frontend/assets/images/funeralist_black_logo.png')}}" alt="" class="small-sidebar-funeralist-logo"/>
    </header>
    <div class="funeralist_sidebar_menu">
        <div class="funeralist_sidebar_menu_item">
            <a href="#">HOME</a>
        </div>
        <div class="funeralist_sidebar_menu_item">
            <a class="glamora-sidebar-sub-btn">COLLECTION<i class="fas fa-angle-right dropdown"></i></a>
            <div class="funeralist_sidebar_menu_item_sub-menu">
                <a href="#" class="sub-item">Sub Item 01</a>
                <a href="#" class="sub-item">Sub Item 02</a>
                <a href="#" class="sub-item">Sub Item 03</a>
            </div>
        </div>
        <div class="funeralist_sidebar_menu_item">
            <a href="#">HOME SERVICE</a>
        </div>
        <div class="funeralist_sidebar_menu_item">
            <a href="#">THE BRAND</a>
        </div>
        <div class="funeralist_sidebar_menu_item" id="search-of-sidebar-of-funeralist">
            <a href="#">Search</a>
        </div>

        <div class="funeralist_sidebar_menu_item">
            <a href="#">WISHLIST</a>
        </div>
    </div>
</div>

<!-- SearchBox Large -->
<div class="search-box-funeralist-large" id="searchBarSection">
    <div class="group">
        <svg class="search-icon-funeralist" aria-hidden="true" viewBox="0 0 24 24">
            <g>
                <path
                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                </path>
            </g>
        </svg>
        <input placeholder="Search" type="search" class="search-input-funeralist"/>
    </div>
    <div class="cross-icon-search-of-funeralist-wrapper" id="closing-button-of-search">
        <svg class="cross-icon-searchs" xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 329.26933 329"
             width="16px">
            <path
                d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/>
        </svg>
    </div>
</div>

