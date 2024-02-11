
<section class="profileWrapper">
    <div class="profile-common-top-wrapper">
        <div class="background-img-wrapper">
            <img src="{{asset('frontend/assets/images/profileBackground.jpg')}}" alt="" class="back-img"/>
        </div>
        <div class="user-profile-section-2-wrapper">
            <div class="profile-img-of-user">
                <img src="{{asset('frontend/assets/images/bird.jpg')}}" alt="" class="profile-img-user"/>
                <div class="edit-profile-wrapper">
                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M18 9.99982L14 5.99982M2.5 21.4998L5.88437 21.1238C6.29786 21.0778 6.5046 21.0549 6.69785 20.9923C6.86929 20.9368 7.03245 20.8584 7.18289 20.7592C7.35245 20.6474 7.49955 20.5003 7.79373 20.2061L21 6.99982C22.1046 5.89525 22.1046 4.10438 21 2.99981C19.8955 1.89525 18.1046 1.89524 17 2.99981L3.79373 16.2061C3.49955 16.5003 3.35246 16.6474 3.24064 16.8169C3.14143 16.9674 3.06301 17.1305 3.00751 17.302C2.94496 17.4952 2.92198 17.702 2.87604 18.1155L2.5 21.4998Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                    <label for="" class="label-of-edit-profile">
                        Edit profile
                        <input type="file" class="edit-profile-file"/>
                    </label>
                </div>
            </div>
            <div class="user-content">
                <div class="user-content-top-row">
                    <?php
                    $user = \App\Models\UserMemorial::where('keeper_id',auth()->user()->id)
                    ->join('users','users.id','=','user_memorials.memorial_user_id')
                    ->first()
                    ?>
                    <h1 class="user-name-main-heading">{{$user->first_name.' '.$user->last_name}}</h1>
                    <div class="section-social-links">
                        <div class="parent">
                            <div class="child child-1">
                                <button class="button btn-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                         fill="#1e90ff">
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="child child-2">
                                <button class="button btn-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                         fill="#ff00ff">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="child child-4">
                                <button class="button btn-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"
                                         fill="#4267B2">
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @if(auth()->check())
                <div class="user-content-bottom-row">
                    <div class="navigation-of-logged-in-profile">
                        <div class="single-item">
                            @php
                                $memorialAccount = \App\Models\UserMemorial::where('keeper_id',auth()->user()->id)->first();
                            @endphp
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
                                Mementos
                            </a>
                        </div>
                        <div class="single-item">
                            <a href="{{route('keeper-memorial',$memorialAccount->memorial_user_id)}}" class="single-item-insider">
                                <lord-icon src="https://cdn.lordicon.com/khheayfj.json" trigger="loop" delay="1000"
                                           style="width: 48px; height: 48px">
                                </lord-icon>

                                NeverFg
                            </a>
                        </div>
                        <div class="single-item">
                            <a href="{{route('family',$memorialAccount->memorial_user_id)}}" class="single-item-insider">
                                <lord-icon src="https://cdn.lordicon.com/kndkiwmf.json" trigger="loop" delay="1000"
                                           style="width: 48px; height: 48px">
                                </lord-icon>
                                Family
                            </a>
                        </div>
                        <div class="single-item">
                            <a href="{{route('chat.show')}}" class="single-item-insider">
                                <lord-icon src="https://cdn.lordicon.com/aycieyht.json" trigger="loop" delay="1000"
                                           style="width: 48px; height: 48px">
                                </lord-icon>
                                Messages
                            </a>
                        </div>
                        <div class="single-item">
                            <a href="{{route('keeperplus',$memorialAccount->memorial_user_id)}}" class="single-item-insider">
                                <lord-icon src="https://cdn.lordicon.com/zrkkrrpl.json" trigger="loop" delay="1000"
                                           style="width: 48px; height: 48px">
                                </lord-icon>
                                NeverFg plus
                            </a>
                        </div>
                    </div>
                    <div class="btn-wrapper">

                        <button onclick="window.location='{{ route('Creatememorial',auth()->user()->id) }}'" class="black-background-btn">Create Memorial</button>

                    </div>
                </div>
                @else
                    <div class="user-content-bottom-row">
                        <div class="navigation-of-logged-in-profile">
                            <div class="single-item">
                                <a href="LoggedIn_Profile.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/xzalkbkz.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Profile
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="MementosPage.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/rehjpyyh.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Mementos
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="Keeper.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/khheayfj.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>

                                    NeverFg
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="Family.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/kndkiwmf.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Family
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="Events.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/qvyppzqz.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Events
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="Message.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/aycieyht.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    Messages
                                </a>
                            </div>
                            <div class="single-item">
                                <a href="KeeperPlusPage.html" class="single-item-insider">
                                    <lord-icon src="https://cdn.lordicon.com/zrkkrrpl.json" trigger="loop" delay="1000"
                                               style="width: 48px; height: 48px">
                                    </lord-icon>
                                    NeverFg plus
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

