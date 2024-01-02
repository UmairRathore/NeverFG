
<!-- Setting Panel -->

<!-- Preloader -->
<div id="preloader-wrap">
    <div class="spinner spinner-8">
        <div class="ms-circle1 ms-child"></div>
        <div class="ms-circle2 ms-child"></div>
        <div class="ms-circle3 ms-child"></div>
        <div class="ms-circle4 ms-child"></div>
        <div class="ms-circle5 ms-child"></div>
        <div class="ms-circle6 ms-child"></div>
        <div class="ms-circle7 ms-child"></div>
        <div class="ms-circle8 ms-child"></div>
        <div class="ms-circle9 ms-child"></div>
        <div class="ms-circle10 ms-child"></div>
        <div class="ms-circle11 ms-child"></div>
        <div class="ms-circle12 ms-child"></div>
    </div>
</div>

<!-- Overlays -->
<div class="ms-aside-overlay ms-overlay-left ms-toggler" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft"></div>
<div class="ms-aside-overlay ms-overlay-right ms-toggler" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"></div>
<!-- Sidebar Navigation Left -->

<!-- Navigation-bar -->
<nav class="navbar ms-navbar">
    <div class="ms-aside-toggler ms-toggler ps-0" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
    </div>
    <div class="docfind-logo d-none d-xl-block">
        <a class="sigma_logo" href="{{route('frontend.doctor-clinic')}}">
            <img src="{{asset('/backend/assets/img/dov-logo.png')}}" alt="logo">
        </a>
    </div>
    <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="ps-0 ms-0 text-center navbar-brand me-0" href="{{route('backend.index')}}"><img src="{{asset('/backend/assets/img/medboard-logo-84x41.png')}}" alt="logo"> </a>
    </div>
    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">


        <!--BOOK APPOINTMENT-->
{{--        <li class="ms-nav-item  ms-d-none">--}}
{{--            <a href="{{url('backend.add-appointment')}}" class="text-white" data-bs-toggle="modal"><i class="flaticon-spreadsheet me-2"></i> Make an appointment</a>--}}
{{--        </li>--}}
        <!-- Modal -->
{{--        <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--            <div class="modal-dialog ms-modal-dialog-width">--}}
{{--                <div class="modal-content ms-modal-content-width">--}}
{{--                    <div class="modal-header  ms-modal-header-radius-0">--}}
{{--                        <h4 class="modal-title text-white">Make An Appointment</h4>--}}
{{--                        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-hidden="true">x</button>--}}

{{--                    </div>--}}
{{--                    <div class="modal-body p-0 text-start">--}}
{{--                        <div class="col-xl-12 col-md-12">--}}
{{--                            <div class="ms-panel ms-panel-bshadow-none">--}}
{{--                                <div class="ms-panel-header">--}}
{{--                                    <h6>Patient Information</h6>--}}
{{--                                </div>--}}
{{--                                <div class="ms-panel-body">--}}
{{--                                    <form class="needs-validation" novalidate>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-4 mb-3">--}}
{{--                                                <label for="validationCustom01">Patient Name</label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Name" required>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4 mb-3">--}}
{{--                                                <label for="validationCustom02">Date Of Birth</label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="number" class="form-control" id="validationCustom02" required>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4 mb-3">--}}
{{--                                                <label for="validationCustom03">Disease</label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Disease" required>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-4 mb-2">--}}
{{--                                                <label for="validationCustom04">Address</label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Add Address" required>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4 mb-3">--}}
{{--                                                <label for="validationCustom05">Phone no.</label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Enter Phone No." required>--}}

{{--                                                </div>--}}

{{--                                            </div>--}}

{{--                                            <div class="col-md-4 mb-3">--}}
{{--                                                <label for="validationCustom06">Department Name</label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="text" class="form-control" id="validationCustom06" placeholder="Enter Department Name" required>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}



{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-4 mb-3">--}}
{{--                                                <label for="validationCustom07">Appointment With</label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="text" class="form-control" id="validationCustom07" placeholder="Enter Doctor Name" required>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4 mb-3">--}}
{{--                                                <label for="validationCustom08">Appointment Date</label>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="text" class="form-control" id="validationCustom08" placeholder="Enter Appointment Date" required>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4 mb-3">--}}
{{--                                                <label>Sex</label>--}}
{{--                                                <ul class="ms-list d-flex">--}}
{{--                                                    <li class="ms-list-item ps-0">--}}
{{--                                                        <label class="ms-checkbox-wrap">--}}
{{--                                                            <input type="radio" name="radioExample" value="">--}}
{{--                                                            <i class="ms-checkbox-check"></i>--}}
{{--                                                        </label>--}}
{{--                                                        <span> Male </span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="ms-list-item">--}}
{{--                                                        <label class="ms-checkbox-wrap">--}}
{{--                                                            <input type="radio" name="radioExample" value="" checked="">--}}
{{--                                                            <i class="ms-checkbox-check"></i>--}}
{{--                                                        </label>--}}
{{--                                                        <span> Female </span>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>--}}
{{--                                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Add Appointment</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!--BOOK APPOINTMENT-->

{{--        <!--Prescription-->--}}
{{--        <li class="ms-nav-item ms-d-none">--}}
{{--            <a href="#prescription" class="text-white" data-bs-toggle="modal"><i class="flaticon-pencil me-2"></i> Write a prescription</a>--}}
{{--        </li>--}}
{{--        <!--Prescription-->--}}

{{--        <!--Report-->--}}
{{--        <li class="ms-nav-item ms-d-none">--}}
{{--            <a href="#report1" class="text-white" data-bs-toggle="modal"><i class="flaticon-list me-2"></i> Generate Report</a>--}}
{{--        </li>--}}
{{--        <!--Report-->--}}


        <!--NOTIFICATIONS-->
{{--        <li class="ms-nav-item dropdown">--}}
{{--            <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>--}}
{{--            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">--}}
{{--                <li class="dropdown-menu-header">--}}
{{--                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>--}}
{{--                    <span class="badge rounded-pill badge-info">4 New</span>--}}
{{--                </li>--}}
{{--                <li class="dropdown-divider"></li>--}}
{{--                <li class="ms-scrollable ms-dropdown-list">--}}
{{--                    <a class="media p-2" href="#">--}}
{{--                        <div class="media-body">--}}
{{--                            <span>12 ways to improve your crypto dashboard</span>--}}
{{--                            <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="media p-2" href="#">--}}
{{--                        <div class="media-body">--}}
{{--                            <span>You have newly registered users</span>--}}
{{--                            <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="media p-2" href="#">--}}
{{--                        <div class="media-body">--}}
{{--                            <span>Your account was logged in from an unauthorized IP</span>--}}
{{--                            <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="media p-2" href="#">--}}
{{--                        <div class="media-body">--}}
{{--                            <span>An application form has been submitted</span>--}}
{{--                            <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="dropdown-divider"></li>--}}
{{--                <li class="dropdown-menu-footer text-center">--}}
{{--                    <a href="#">View all Notifications</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <!--NOTIFICATIONS-->

        <!--LOGOUT/PROFIlE DROPDOWN-->
        <li class="ms-nav-item ms-nav-user dropdown">
            <a href="#" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-end" src="{{asset('/backend/assets/img/dashboard/doctor-3.jpg')}}" alt="people"> </a>
            <ul class="dropdown-menu dropdown-menu-end user-dropdown" aria-labelledby="userDropdown">
                <li class="dropdown-menu-header">
                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, {{ Auth::user()->first_name }}</span></h6>
                </li>
                <li class="dropdown-divider"></li>
                <li class="ms-dropdown-list">
                    <a class="media fs-14 p-2" href="{{route('backend.update-profile')}}"> <span><i class="flaticon-user me-2"></i> Profile</span> </a>
                    <a class="media fs-14 p-2" href="{{route('backend.update-password')}}"> <span><i class="flaticon-gear me-2"></i> Account Settings</span> </a>
                </li>
                <li class="dropdown-divider"></li>

                <li class="dropdown-menu-footer">

                        <a role="button"  class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <div class="ms-toggler ms-d-block-sm pe-0 ms-nav-toggler" data-bs-toggle="slideDown" data-bs-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
    </div>
    <!--LOGOUT/PROFIlE DROPDOWN-->

</nav>


