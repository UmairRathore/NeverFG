@if(!Str::contains(request()->url(), 'profile/user-profile'))

    <style>
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px; /* Adjust the maximum width as needed */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }

        .modal-heading {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .file-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .file-input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>

    @if(auth()->check())
        <?php
        $user = \App\Models\UserMemorial::where('keeper_id', auth()->user()->id)
//            ->where('user_memorials.memorial_user_id', request('id')) // Fetch the ID from the URL
            ->join('users', 'users.id', '=', 'user_memorials.memorial_user_id')
            ->first();
        ?>
        @if($user)
            <!-- Cover Picture Update Modal -->
            <div id="themeModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2 class="modal-heading">Update Cover Picture</h2>
                    <form id="coverPictureForm" action="{{ route('update.user.coverPicture') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="coverPictureInput" class="file-label">Choose a picture:</label>
                            <input type="file" name="coverPicture" id="coverPictureInput" class="file-input" accept="image/*" required>
                        </div>
                        <input type="hidden" name="memorial_id" value="{{ $user->memorial_user_id }}">
                        <button type="submit" class="form-btn">Upload</button>
                    </form>
                </div>
            </div>

            <!-- Second Modal -->
            <div id="profileModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2 class="modal-heading">Update Profile Picture</h2>
                    <form id="profilePictureForm" action="{{route('update.user.profilePicture')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="profilePictureInput" class="file-label">Choose a picture:</label>
                            <input type="file" name="profilePicture" id="profilePictureInput" class="file-input" accept="image/*" required>
                        </div>
                        <input type="hidden" name="memorial_id" value="{{$user->memorial_user_id}}">
                        <button type="submit" class="form-btn">Upload</button>
                    </form>
                </div>
            </div>
        @endif
    @endif




    <section class="profileWrapper">
        <div class="profile-common-top-wrapper">
            <div id="theme-image-div-dp" class="background-img-wrapper">
                @if(auth()->check())
                <?php
                $user = \App\Models\UserMemorial::where('keeper_id', auth()->user()->id)
                    ->where('user_memorials.memorial_user_id', request('id')) // Fetch the ID from the URL
                    ->join('users', 'users.id', '=', 'user_memorials.memorial_user_id')
                    ->first();
                //                dd($user);
                $memorial = \App\Models\UserMemorial::where('keeper_id', '!=', auth()->user()->id)
                    ->where('user_memorials.memorial_user_id', request('id')) // Fetch the ID from the URL
                    ->join('users', 'users.id', '=', 'user_memorials.memorial_user_id')
                    ->first();
                //                dd(auth()->user()->id);
                //                dd($memorial);
                ?>
                @endif
                @if(isset($user) && $user->keeper_id == auth()->user()->id)
                    @if(isset($user->theme_image))

                        <!-- Link to open the modal -->
                        <a href="javascript:void(0);" id="themeShowModal">
                            <img src="{{asset($user->theme_image)}}" alt="" class="back-img"/>
                        </a>
                    @else
                        <a href="javascript:void(0);" id="themeShowModal">

                            <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="back-img"/>
                        </a>
                    @endif
                @elseif(isset($memorial) && $memorial->keeper_id != auth()->user()->id)
                    @if(isset($memorial->theme_image))

                        <!-- Link to open the modal -->

                        <img src="{{asset($memorial->theme_image)}}" alt="" class="back-img"/>

                    @else

                        <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="back-img"/>

                    @endif
                @else
                    <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="back-img"/>

                @endif


            </div>
            <div class="user-profile-section-2-wrapper">
                <div id="profile-image-div-dp" class="profile-img-of-user">
                    @if(isset($user) && $user->keeper_id == auth()->user()->id)
                        @if(isset($user->profile_image))
                            <a href="javascript:void(0);" id="profileShowModal">
                                <img src="{{asset($user->profile_image) }}" alt="" class="profile-img-user"/>
                            </a>
                        @else
                            <a href="javascript:void(0);" id="profileShowModal">
                                <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="profile-img-user"/>
                            </a>
                        @endif
                    @elseif(isset($memorial) && $memorial->keeper_id != auth()->user()->id)
                        @if(isset($memorial->profile_image))
                            <img src="{{asset($memorial->profile_image) }}" alt="" class="profile-img-user"/>

                        @else
                            <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="profile-img-user"/>

                        @endif
                    @else
                        <img src="{{asset('assets/images/blacklogo.jpg')}}" alt="" class="profile-img-user"/>
                    @endif
                </div>

                <div class="user-content">
                    <div class="user-content-top-row">
                        @if(auth()->check())

                            @if($user)
                                <h1 class="user-name-main-heading">{{$user->first_name.' '.$user->last_name}}</h1>
                            @else
                                <h1 class="user-name-main-heading"></h1>
                            @endif
                        @else
                            <h1 class="user-name-main-heading">John Dor</h1>
                        @endif
                        <div class="section-social-links">
                            <div class="parent">
                                @if(auth()->check())
                                    <?php
                                    $user = \App\Models\UserMemorial::where('keeper_id', auth()->user()->id)
                                        ->where('user_memorials.memorial_user_id', request('id')) // Fetch the ID from the URL
                                        ->join('users', 'users.id', '=', 'user_memorials.memorial_user_id')
                                        ->first();
                                    ?>
                                @endif
                                @if(isset($user->tiktok))
                                    <div class="child child-1">
                                        <a href="{{$user->tiktok}}" class="button btn-1">
                                            <svg width="48px" height="1.5em" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Icon/Social/tiktok-color" fill="#FE2C55">
                                                    <g id="Group-7" transform="translate(8.000000, 6.000000)">
                                                        <path
                                                            d="M29.5248245,9.44576327 C28.0821306,9.0460898 26.7616408,8.29376327 25.6826204,7.25637551 C25.5109469,7.09719184 25.3493143,6.92821224 25.1928245,6.75433469 C23.9066204,5.27833469 23.209151,3.38037551 23.2336408,1.42290612 L17.3560898,1.42290612 L17.3560898,23.7086204 C17.3560898,27.7935184 15.1520082,29.9535184 12.416498,29.9535184 C11.694049,29.9611102 10.9789469,29.8107429 10.3213959,29.5124571 C9.6636,29.2144163 9.07951837,28.7758041 8.60955918,28.2272327 C8.1398449,27.6789061 7.79551837,27.0340898 7.60180408,26.3385796 C7.4078449,25.6430694 7.36890612,24.9132735 7.48743673,24.2008653 C7.60596735,23.4884571 7.87902857,22.8105796 8.28751837,22.2154776 C8.69625306,21.6198857 9.23037551,21.1212735 9.85241633,20.7546612 C10.474702,20.3878041 11.1694776,20.1617633 11.8882531,20.0924571 C12.6070286,20.023151 13.3324163,20.1122939 14.0129878,20.3535184 L14.0129878,14.3584163 C13.4889061,14.2430694 12.9530694,14.1862531 12.416498,14.1894367 L12.3917633,14.1894367 C10.2542939,14.1943347 8.16604898,14.8325388 6.39127347,16.0234776 C4.61649796,17.2149061 3.23429388,18.9051918 2.41976327,20.8812735 C1.60523265,22.8578449 1.39486531,25.0310694 1.8151102,27.1269061 C2.2351102,29.2227429 3.2671102,31.1469061 4.78033469,32.6564571 C6.29380408,34.1660082 8.22066122,35.1933551 10.3174776,35.6082122 C12.4142939,36.0230694 14.5870286,35.8073143 16.561151,34.9878857 C18.5355184,34.1682122 20.2226204,32.7820898 21.409151,31.0041306 C22.5959265,29.2264163 23.2289878,27.136702 23.228498,24.9992327 L23.228498,12.8155592 C25.5036,14.392702 28.2244163,15.134498 31.1289061,15.1886204 L31.1289061,9.68551837 C30.5869469,9.66568163 30.049151,9.5851102 29.5248245,9.44576327"
                                                            id="Fill-1" fill="#FE2C55"></path>
                                                        <path
                                                            d="M25.195102,6.75428571 C24.7946939,6.47510204 24.4148571,6.1675102 24.0587755,5.83346939 C22.8210612,4.66016327 22.0062857,3.11020408 21.7420408,1.42530612 C21.6622041,0.954367347 21.6220408,0.47755102 21.6220408,0 L15.7444898,0 L15.7444898,22.6408163 C15.7444898,27.5069388 13.5404082,28.5183673 10.804898,28.5183673 C10.0829388,28.5262041 9.36783673,28.3758367 8.71028571,28.0773061 C8.0524898,27.7792653 7.46791837,27.3406531 6.99820408,26.7920816 C6.5282449,26.2437551 6.18440816,25.5989388 5.99044898,24.9034286 C5.7964898,24.2079184 5.75755102,23.4781224 5.87583673,22.7657143 C5.99461224,22.053551 6.26767347,21.3756735 6.67640816,20.7800816 C7.08489796,20.1847347 7.61902041,19.6861224 8.24106122,19.3195102 C8.86334694,18.952898 9.55787755,18.7266122 10.276898,18.6573061 C10.9959184,18.588 11.7208163,18.6773878 12.4016327,18.9183673 L12.4016327,12.9328163 C5.40489796,11.8236735 0,17.4783673 0,23.5760816 C0.00465306122,26.4426122 1.14514286,29.1898776 3.17191837,31.216898 C5.19869388,33.2434286 7.94595918,34.3839184 10.8124898,34.3885714 C16.7730612,34.3885714 21.6220408,30.7444898 21.6220408,23.5760816 L21.6220408,11.3924082 C23.8995918,12.9795918 26.6204082,13.7142857 29.524898,13.7632653 L29.524898,8.26040816 C27.9658776,8.18914286 26.4617143,7.66604082 25.195102,6.75428571"
                                                            id="Fill-3" fill="#25F4EE"></path>
                                                        <path
                                                            d="M21.6220653,23.5764245 L21.6220653,11.392751 C23.8996163,12.9794449 26.6204327,13.7141388 29.5251673,13.7633633 L29.5251673,9.44581224 C28.0822286,9.04613878 26.7617388,8.29381224 25.6824735,7.25617959 C25.5110449,7.09724082 25.3494122,6.92826122 25.1926776,6.75438367 C24.7922694,6.4752 24.4126776,6.16736327 24.056351,5.83356735 C22.8186367,4.66026122 22.0041061,3.11030204 21.7396163,1.42540408 L17.3730857,1.42540408 L17.3730857,23.7111184 C17.3730857,27.7957714 15.1690041,29.9560163 12.4334939,29.9560163 C11.6569224,29.9538122 10.8918612,29.7681796 10.2005143,29.414302 C9.50941224,29.0601796 8.91186122,28.5476082 8.45635102,27.9182204 C7.49071837,27.3946286 6.72712653,26.5636898 6.2865551,25.5571592 C5.84573878,24.5508735 5.75341224,23.4260571 6.02377959,22.3609959 C6.29390204,21.2959347 6.91177959,20.3516082 7.77896327,19.6771592 C8.64639184,19.0027102 9.71365714,18.6365878 10.8122694,18.6365878 C11.3564327,18.6412408 11.8961878,18.7362612 12.4090041,18.9182204 L12.4090041,14.1894857 C10.304351,14.1921796 8.24647347,14.8093224 6.48786122,15.9657306 C4.72924898,17.1221388 3.3470449,18.7666286 2.51047347,20.6978939 C1.67390204,22.6291592 1.41969796,24.7627102 1.77896327,26.8362612 C2.13822857,28.9098122 3.09553469,30.8334857 4.53308571,32.3704653 C6.36271837,33.6848327 8.55945306,34.3906286 10.8122694,34.3884296 C16.7730857,34.3884296 21.6220653,30.7445878 21.6220653,23.5764245"
                                                            id="Fill-5" fill="#000000"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                @else
                                    <div class="child child-1">
                                        <a href="#" class="button btn-1">
                                            <svg width="48px" height="1.5em" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Icon/Social/tiktok-color" fill="#FE2C55">
                                                    <g id="Group-7" transform="translate(8.000000, 6.000000)">
                                                        <path
                                                            d="M29.5248245,9.44576327 C28.0821306,9.0460898 26.7616408,8.29376327 25.6826204,7.25637551 C25.5109469,7.09719184 25.3493143,6.92821224 25.1928245,6.75433469 C23.9066204,5.27833469 23.209151,3.38037551 23.2336408,1.42290612 L17.3560898,1.42290612 L17.3560898,23.7086204 C17.3560898,27.7935184 15.1520082,29.9535184 12.416498,29.9535184 C11.694049,29.9611102 10.9789469,29.8107429 10.3213959,29.5124571 C9.6636,29.2144163 9.07951837,28.7758041 8.60955918,28.2272327 C8.1398449,27.6789061 7.79551837,27.0340898 7.60180408,26.3385796 C7.4078449,25.6430694 7.36890612,24.9132735 7.48743673,24.2008653 C7.60596735,23.4884571 7.87902857,22.8105796 8.28751837,22.2154776 C8.69625306,21.6198857 9.23037551,21.1212735 9.85241633,20.7546612 C10.474702,20.3878041 11.1694776,20.1617633 11.8882531,20.0924571 C12.6070286,20.023151 13.3324163,20.1122939 14.0129878,20.3535184 L14.0129878,14.3584163 C13.4889061,14.2430694 12.9530694,14.1862531 12.416498,14.1894367 L12.3917633,14.1894367 C10.2542939,14.1943347 8.16604898,14.8325388 6.39127347,16.0234776 C4.61649796,17.2149061 3.23429388,18.9051918 2.41976327,20.8812735 C1.60523265,22.8578449 1.39486531,25.0310694 1.8151102,27.1269061 C2.2351102,29.2227429 3.2671102,31.1469061 4.78033469,32.6564571 C6.29380408,34.1660082 8.22066122,35.1933551 10.3174776,35.6082122 C12.4142939,36.0230694 14.5870286,35.8073143 16.561151,34.9878857 C18.5355184,34.1682122 20.2226204,32.7820898 21.409151,31.0041306 C22.5959265,29.2264163 23.2289878,27.136702 23.228498,24.9992327 L23.228498,12.8155592 C25.5036,14.392702 28.2244163,15.134498 31.1289061,15.1886204 L31.1289061,9.68551837 C30.5869469,9.66568163 30.049151,9.5851102 29.5248245,9.44576327"
                                                            id="Fill-1" fill="#FE2C55"></path>
                                                        <path
                                                            d="M25.195102,6.75428571 C24.7946939,6.47510204 24.4148571,6.1675102 24.0587755,5.83346939 C22.8210612,4.66016327 22.0062857,3.11020408 21.7420408,1.42530612 C21.6622041,0.954367347 21.6220408,0.47755102 21.6220408,0 L15.7444898,0 L15.7444898,22.6408163 C15.7444898,27.5069388 13.5404082,28.5183673 10.804898,28.5183673 C10.0829388,28.5262041 9.36783673,28.3758367 8.71028571,28.0773061 C8.0524898,27.7792653 7.46791837,27.3406531 6.99820408,26.7920816 C6.5282449,26.2437551 6.18440816,25.5989388 5.99044898,24.9034286 C5.7964898,24.2079184 5.75755102,23.4781224 5.87583673,22.7657143 C5.99461224,22.053551 6.26767347,21.3756735 6.67640816,20.7800816 C7.08489796,20.1847347 7.61902041,19.6861224 8.24106122,19.3195102 C8.86334694,18.952898 9.55787755,18.7266122 10.276898,18.6573061 C10.9959184,18.588 11.7208163,18.6773878 12.4016327,18.9183673 L12.4016327,12.9328163 C5.40489796,11.8236735 0,17.4783673 0,23.5760816 C0.00465306122,26.4426122 1.14514286,29.1898776 3.17191837,31.216898 C5.19869388,33.2434286 7.94595918,34.3839184 10.8124898,34.3885714 C16.7730612,34.3885714 21.6220408,30.7444898 21.6220408,23.5760816 L21.6220408,11.3924082 C23.8995918,12.9795918 26.6204082,13.7142857 29.524898,13.7632653 L29.524898,8.26040816 C27.9658776,8.18914286 26.4617143,7.66604082 25.195102,6.75428571"
                                                            id="Fill-3" fill="#25F4EE"></path>
                                                        <path
                                                            d="M21.6220653,23.5764245 L21.6220653,11.392751 C23.8996163,12.9794449 26.6204327,13.7141388 29.5251673,13.7633633 L29.5251673,9.44581224 C28.0822286,9.04613878 26.7617388,8.29381224 25.6824735,7.25617959 C25.5110449,7.09724082 25.3494122,6.92826122 25.1926776,6.75438367 C24.7922694,6.4752 24.4126776,6.16736327 24.056351,5.83356735 C22.8186367,4.66026122 22.0041061,3.11030204 21.7396163,1.42540408 L17.3730857,1.42540408 L17.3730857,23.7111184 C17.3730857,27.7957714 15.1690041,29.9560163 12.4334939,29.9560163 C11.6569224,29.9538122 10.8918612,29.7681796 10.2005143,29.414302 C9.50941224,29.0601796 8.91186122,28.5476082 8.45635102,27.9182204 C7.49071837,27.3946286 6.72712653,26.5636898 6.2865551,25.5571592 C5.84573878,24.5508735 5.75341224,23.4260571 6.02377959,22.3609959 C6.29390204,21.2959347 6.91177959,20.3516082 7.77896327,19.6771592 C8.64639184,19.0027102 9.71365714,18.6365878 10.8122694,18.6365878 C11.3564327,18.6412408 11.8961878,18.7362612 12.4090041,18.9182204 L12.4090041,14.1894857 C10.304351,14.1921796 8.24647347,14.8093224 6.48786122,15.9657306 C4.72924898,17.1221388 3.3470449,18.7666286 2.51047347,20.6978939 C1.67390204,22.6291592 1.41969796,24.7627102 1.77896327,26.8362612 C2.13822857,28.9098122 3.09553469,30.8334857 4.53308571,32.3704653 C6.36271837,33.6848327 8.55945306,34.3906286 10.8122694,34.3884296 C16.7730857,34.3884296 21.6220653,30.7445878 21.6220653,23.5764245"
                                                            id="Fill-5" fill="#000000"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                                @if(isset($user->instagram))
                                    <div class="child child-2">
                                        <a href="{{$user->instagram}}" class="button btn-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                                 fill="#ff00ff">
                                                <path
                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                </path>
                                            </svg>
                                            <a/>
                                    </div>
                                @else
                                    <div class="child child-2">
                                        <a href="#" class="button btn-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                                 fill="#ff00ff">
                                                <path
                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                </path>
                                            </svg>
                                            <a/>
                                    </div>
                                @endif
                                @if(isset($user->facebook))
                                    <div class="child child-4">
                                        <a href="{{$user->facebook}}" class="button btn-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"
                                                 fill="#4267B2">
                                                <path
                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                @else
                                    <div class="child child-4">
                                        <a href="#" class="button btn-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"
                                                 fill="#4267B2">
                                                <path
                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                @endif


                            </div>
                        </div>
                    </div>
                    @if(auth()->check())
                        @php
                            $memorialAccount = \App\Models\UserMemorial::where('keeper_id',auth()->user()->id)->first();
                        @endphp
                        @if($memorialAccount)
                            <div class="user-content-bottom-row">
                                <div class="navigation-of-logged-in-profile">
                                    <div class="single-item">
                                        <a href="{{route('edit.memorial.profile',$memorialAccount->memorial_user_id)}}" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/xzalkbkz.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>
                                            Profile
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="{{route('mementos',$memorialAccount->memorial_user_id)}}" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/rehjpyyh.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>
                                            Photos & Videos
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="{{route('profile',$memorialAccount->memorial_user_id)}}" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/khheayfj.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>

                                            Obituary
                                        </a>
                                    </div>
                                    {{--                                    <div class="single-item">--}}
                                    {{--                                        <a href="{{route('family',$memorialAccount->memorial_user_id)}}" class="single-item-insider">--}}
                                    {{--                                            <lord-icon src="https://cdn.lordicon.com/kndkiwmf.json" trigger="loop" delay="1000"--}}
                                    {{--                                                       style="width: 48px; height: 48px">--}}
                                    {{--                                            </lord-icon>--}}
                                    {{--                                            Family--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </div>--}}
                                    <div class="single-item">
                                        <?php
                                        $user = \App\Models\User::where('role_id', '1')->first();?>
                                        <a href="{{route('chat.text',$user->id)}}" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/aycieyht.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>
                                            Admin Helpdesk
                                        </a>
                                    </div>

                                </div>
                                <div class="btn-wrapper">

                                    {{--                                    <button onclick="window.location='{{ route('Creatememorial',auth()->user()->id) }}'" class="black-background-btn">Create Memorial</button>--}}

                                </div>
                            </div>
                        @else
                            <div class="user-content-bottom-row">
                                <div class="navigation-of-logged-in-profile">
                                    <div class="single-item">
                                        <a href="#" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/xzalkbkz.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>
                                            Profile
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="#" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/rehjpyyh.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>
                                            Photos & Videos
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="#" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/khheayfj.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>

                                            Obituary
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="#" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/kndkiwmf.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>
                                            Family
                                        </a>
                                    </div>
                                    {{--                                <div class="single-item">--}}
                                    {{--                                    <a href="#" class="single-item-insider">--}}
                                    {{--                                        <lord-icon src="https://cdn.lordicon.com/qvyppzqz.json" trigger="loop" delay="1000"--}}
                                    {{--                                                   style="width: 48px; height: 48px">--}}
                                    {{--                                        </lord-icon>--}}
                                    {{--                                        Events--}}
                                    {{--                                    </a>--}}
                                    {{--                                </div>--}}
                                    <div class="single-item">
                                        <a href="#" class="single-item-insider">
                                            <lord-icon src="https://cdn.lordicon.com/aycieyht.json" trigger="loop" delay="1000"
                                                       style="width: 48px; height: 48px">
                                            </lord-icon>
                                            Admin Helpdesk
                                        </a>
                                    </div>
                                    {{--                                <div class="single-item">--}}
                                    {{--                                    <a href="#" class="single-item-insider">--}}
                                    {{--                                        <lord-icon src="https://cdn.lordicon.com/zrkkrrpl.json" trigger="loop" delay="1000"--}}
                                    {{--                                                   style="width: 48px; height: 48px">--}}
                                    {{--                                        </lord-icon>--}}
                                    {{--                                        NeverFg plus--}}
                                    {{--                                    </a>--}}
                                    {{--                                </div>--}}
                                </div>
                                <div class="btn-wrapper">
                                    {{--                                    <button onclick="window.location='{{ route('Creatememorial',auth()->user()->id) }}'" class="black-background-btn">Create Memorial</button>--}}

                                </div>
                            </div>

                        @endif
                    @else
                        <div class="user-content-bottom-row">
                            <div class="navigation-of-logged-in-profile">
                                <div class="single-item">
                                    <a href="#" class="single-item-insider">
                                        <lord-icon src="https://cdn.lordicon.com/xzalkbkz.json" trigger="loop" delay="1000"
                                                   style="width: 48px; height: 48px">
                                        </lord-icon>
                                        Profile
                                    </a>
                                </div>
                                <div class="single-item">
                                    <a href="#" class="single-item-insider">
                                        <lord-icon src="https://cdn.lordicon.com/rehjpyyh.json" trigger="loop" delay="1000"
                                                   style="width: 48px; height: 48px">
                                        </lord-icon>
                                        Photos & Videos
                                    </a>
                                </div>
                                <div class="single-item">
                                    <a href="#" class="single-item-insider">
                                        <lord-icon src="https://cdn.lordicon.com/khheayfj.json" trigger="loop" delay="1000"
                                                   style="width: 48px; height: 48px">
                                        </lord-icon>

                                        Obituary
                                    </a>
                                </div>
                                <div class="single-item">
                                    <a href="#" class="single-item-insider">
                                        <lord-icon src="https://cdn.lordicon.com/kndkiwmf.json" trigger="loop" delay="1000"
                                                   style="width: 48px; height: 48px">
                                        </lord-icon>
                                        Family
                                    </a>
                                </div>

                                <div class="single-item">
                                    <a href="#" class="single-item-insider">
                                        <lord-icon src="https://cdn.lordicon.com/aycieyht.json" trigger="loop" delay="1000"
                                                   style="width: 48px; height: 48px">
                                        </lord-icon>
                                        Admin Helpdesk
                                    </a>
                                </div>

                            </div>
                            <div class="btn-wrapper">
                                <button class="black-background-btn">
                                    + Create a Memorial
                                </button>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Get the first modal
        var modal1 = document.getElementById("profileModal");
        var link1 = document.getElementById("profileShowModal");

        // Get the second modal
        var modal2 = document.getElementById("themeModal");
        var link2 = document.getElementById("themeShowModal");

        // Get the <span> elements that close the modals
        var span1 = modal1.getElementsByClassName("close")[0];
        var span2 = modal2.getElementsByClassName("close")[0];

        // Function to open the first modal
        link1.onclick = function () {
            modal1.style.display = "block";
        }

        // Function to close the first modal
        span1.onclick = function () {
            modal1.style.display = "none";
        }

        // Function to open the second modal
        link2.onclick = function () {
            modal2.style.display = "block";
        }

        // Function to close the second modal
        span2.onclick = function () {
            modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modals, close them
        window.onclick = function (event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>
@endif
