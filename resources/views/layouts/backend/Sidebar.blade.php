<!-- Sidebar Navigation Left -->

<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
<!-- Sidebar Navigation Left -->

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="ps-0 ms-0 text-center" href="{{route('backend.index')}}"> <img src="{{asset('/backend/assets/img/medboard-logo-216x62.png')}}" alt="logo"> </a>

    </div>
    <!-- Navigation -->

    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">

        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{route('backend.index')}}">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
            </a>
        </li>


        <!-- User -->
        <li class="menu-item">
            <a href="{{route('backend.list-user')}}">
                <span><i class="far fa-user-circle"></i>User </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.library-list')}}">
                <span><i class="far fa-user-circle"></i>Library </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('backend.relation-list')}}">
                <span><i class="far fa-user-circle"></i>Relation </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('chat.show')}}">
                <span><i class="far fa-user-circle"></i>Messages </span>
            </a>
        </li>

        <!-- Roles -->
        <li class="menu-item">
            <a href="{{route('backend.role-list')}}">
                <span><i class="material-icons">group</i>Roles </span>
            </a>
        </li>


        <li class="menu-item">
            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#patient" aria-expanded="false" aria-controls="patient">
                <span><i class="fas fa-user"></i>Frontend</span>
            </a>
            <ul id="patient" class="collapse" aria-labelledby="patient" data-bs-parent="#side-nav-accordion">
                <li> <a href="{{route('frontend_index.index')}}">Index</a> </li>
                <li> <a href="{{route('backend.faq-list')}}">FAQ</a> </li>
                <li> <a href="{{route('frontend_feature.index')}}">Feature</a> </li>
                <li> <a href="{{route('frontend_feature.index')}}">Virtual Funerals</a> </li>
                <li> <a href="{{route('backend.privacyandterms-list')}}">Privacy & terms</a> </li>
            </ul>
        </li>
        <!-- /Patient -->



{{--        <!-- Roles -->--}}

{{--        <!-- Appointment -->--}}

{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.timeslot-list')}}">--}}
{{--                <span><i class="fa fa-clock"></i>Time Slots </span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.appointment-list')}}">--}}
{{--                <span><i class="far fa-check-square"></i>Appointment </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        --}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#appointment" aria-expanded="false" aria-controls="appointment">--}}
{{--                <span><i class="far fa-check-square"></i>Appointment</span>--}}
{{--            </a>--}}
{{--            <ul id="appointment" class="collapse" aria-labelledby="appointment" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="{{route('backend.show-appointment')}}">Add Appointments</a> </li>--}}
{{--                <li> <a href="{{route('backend.appointment-list')}}">Appointment List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Appointment -->--}}

{{--        <!-- Labtest -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.labtest-list')}}">--}}
{{--                <span><i class="fas fa-file-alt"></i>Labtest </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#labtest" aria-expanded="false" aria-controls="labtest">--}}
{{--                <span><i class="fas fa-file-alt"></i>Lab Test</span>--}}
{{--            </a>--}}
{{--            <ul id="labtest" class="collapse" aria-labelledby="labtest" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="{{route('backend.show-labtest')}}">Add Lab Test</a> </li>--}}
{{--                <li> <a href="{{route('backend.labtest-list')}}">Lab Test List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- Labtest -->--}}


{{--        <!--Specialization-->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.specialization-list')}}">--}}
{{--                <span><i class="material-icons">beenhere</i>Specialization </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#specialization" aria-expanded="false" aria-controls="specialization">--}}
{{--                <span><i class="far fa-check-square"></i>Specialization</span>--}}
{{--            </a>--}}
{{--            <ul id="specialization" class="collapse" aria-labelledby="specialization" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="{{route('backend.show-specialization')}}">Add Specialization</a> </li>--}}
{{--                <li> <a href="{{route('backend.specialization-list')}}">Specialization List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!--Specialization-->--}}

{{--        <!--Symptoms-->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.symptom-list')}}">--}}
{{--                <span><i class="far fa-list-alt"></i>Symptom </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#symptom" aria-expanded="false" aria-controls="symptom">--}}
{{--                <span><i class="fas fa-list-alt"></i>Symptom</span>--}}
{{--            </a>--}}
{{--            <ul id="symptom" class="collapse" aria-labelledby="symptom" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="{{route('backend.show-symptom')}}">Add Symptom</a> </li>--}}
{{--                <li> <a href="{{route('backend.symptom-list')}}">Symptom List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!--Symptoms-->--}}

{{--        <!--Banner-->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.banner-list')}}">--}}
{{--                <span><i class="far fa-images"></i>Banner </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <!--Banner-->--}}

{{--        <!--Issue-->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.issue-list')}}">--}}
{{--                <span><i class="far fa-images"></i>Issue </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <!--Issue-->--}}
{{--        <!--Transactions-->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.transaction-list')}}">--}}
{{--                <span><i class="material-icons">payment</i>Transaction </span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.userwallet-list')}}">--}}
{{--                <span><i class="material-icons">payment</i>User Wallet </span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#transaction" aria-expanded="false" aria-controls="transaction">--}}
{{--                <span><i class="fas fa-dollar-sign"></i>Transaction</span>--}}
{{--            </a>--}}
{{--            <ul id="transaction" class="collapse" aria-labelledby="transaction" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="{{route('backend.transaction-list')}}">Transaction List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!--Transactions-->--}}

{{--        <!--Reviews-->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="{{route('backend.reviews-list')}}">--}}
{{--                <span><i class="material-icons">reviews</i>Reviews </span>--}}
{{--            </a>--}}
{{--        </li>--}}






















{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#reviews" aria-expanded="false" aria-controls="reviews">--}}
{{--                <span><i class="fas fa-dollar-sign"></i>Reviews</span>--}}
{{--            </a>--}}
{{--            <ul id="reviews" class="collapse" aria-labelledby="reviews" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="{{route('backend.reviews-list')}}">Reviews List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <!--Reviews-->

{{--        <!-- Department -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#department" aria-expanded="false" aria-controls="department">--}}
{{--                <span><i class="fas fa-sitemap"></i>Department</span>--}}
{{--            </a>--}}
{{--            <ul id="department" class="collapse" aria-labelledby="department" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="department/add-department">Add Department</a> </li>--}}
{{--                <li> <a href="department/department-list">Department List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Department -->--}}
{{--        <!-- Schedule -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#schedule" aria-expanded="false" aria-controls="schedule">--}}
{{--                <span><i class="fas fa-list-alt"></i>Doctor Schedule</span>--}}
{{--            </a>--}}
{{--            <ul id="schedule" class="collapse" aria-labelledby="schedule" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/doctor-schedule/add-schedule">Add Schedule</a> </li>--}}
{{--                <li> <a href="/doctor-schedule/schedule-list">Schedule List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Schedule -->--}}
{{--        <!-- Payment -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">--}}
{{--                <span><i class="fas fa-credit-card"></i>Payment</span>--}}
{{--            </a>--}}
{{--            <ul id="payment" class="collapse" aria-labelledby="payment" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/payment/add-payment">Add Payment</a> </li>--}}
{{--                <li> <a href="/payment/payment-list">Payment List</a> </li>--}}
{{--                <li> <a href="/payment/payment-invoice">Payment Invoice</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Payment -->--}}
{{--        <!-- Report -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#report" aria-expanded="false" aria-controls="report">--}}
{{--                <span><i class="fas fa-file-alt"></i>Report</span>--}}
{{--            </a>--}}
{{--            <ul id="report" class="collapse" aria-labelledby="report" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/report/patient-report">Patient Wise Report</a> </li>--}}
{{--                <li> <a href="/report/doctor-report">Doctor Wise Report</a> </li>--}}
{{--                <li> <a href="/report/total-report">Total Report</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Report -->--}}
{{--        <!-- Human Resource -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#human-resource" aria-expanded="false" aria-controls="human-resource">--}}
{{--                <span><i class="far fa-user-circle"></i>Human Resource</span>--}}
{{--            </a>--}}
{{--            <ul id="human-resource" class="collapse" aria-labelledby="human-resource" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/human-resource/add-employee">Add Employee</a> </li>--}}
{{--                <li> <a href="/human-resource/employee-list">Employee List</a> </li>--}}
{{--                <li> <a href="/human-resource/add-nurse">Add Nurse</a> </li>--}}
{{--                <li> <a href="/human-resource/nurse-list">Nurse List</a> </li>--}}
{{--                <li> <a href="/human-resource/add-pharmacist">Add Pharmacist</a> </li>--}}
{{--                <li> <a href="/human-resource/pharmacist-list">Pharmacist List</a> </li>--}}
{{--                <li> <a href="/human-resource/add-representative">Add Representative</a> </li>--}}
{{--                <li> <a href="/human-resource/representative-list">Representative List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Human Resource -->--}}
{{--        <!-- Bed -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#bed" aria-expanded="false" aria-controls="bed">--}}
{{--                <span><i class="fas fa-bed"></i>Bed Manager</span>--}}
{{--            </a>--}}
{{--            <ul id="bed" class="collapse" aria-labelledby="bed" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/bed-manager/add-bed">Add Bed</a> </li>--}}
{{--                <li> <a href="/bed-manager/bed-list">Bed List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Bed-->--}}
{{--        <!-- Notice -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#notice" aria-expanded="false" aria-controls="notice">--}}
{{--                <span><i class="far fa-file-alt"></i>Notice</span>--}}
{{--            </a>--}}
{{--            <ul id="notice" class="collapse" aria-labelledby="notice" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/notice/add-notice">Add Notice</a> </li>--}}
{{--                <li> <a href="/notice/notice-list">Notice List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Notice -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="/widgets">--}}
{{--                <span><i class="material-icons fs-16">widgets</i>Widgets</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <!-- Basic UI Elements -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">--}}
{{--                <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>--}}
{{--            </a>--}}
{{--            <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/ui-basic/accordions">Accordions</a> </li>--}}
{{--                <li> <a href="/ui-basic/alerts">Alerts</a> </li>--}}
{{--                <li> <a href="/ui-basic/buttons">Buttons</a> </li>--}}
{{--                <li> <a href="/ui-basic/breadcrumbs">Breadcrumbs</a> </li>--}}
{{--                <li> <a href="/ui-basic/badges">Badges</a> </li>--}}
{{--                <li> <a href="/ui-basic/cards">Cards</a> </li>--}}
{{--                <li> <a href="/ui-basic/progress-bars">Progress Bars</a> </li>--}}
{{--                <li> <a href="/ui-basic/preloaders">Pre-loaders</a> </li>--}}
{{--                <li> <a href="/ui-basic/pagination">Pagination</a> </li>--}}
{{--                <li> <a href="/ui-basic/tabs">Tabs</a> </li>--}}
{{--                <li> <a href="/ui-basic/typography">Typography</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Basic UI Elements -->--}}
{{--        <!-- Advanced UI Elements -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements">--}}
{{--                <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>--}}
{{--            </a>--}}
{{--            <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/ui-advanced/draggables">Draggables</a> </li>--}}
{{--                <li> <a href="/ui-advanced/sliders">Sliders</a> </li>--}}
{{--                <li> <a href="/ui-advanced/modals">Modals</a> </li>--}}
{{--                <li> <a href="/ui-advanced/rating">Rating</a> </li>--}}
{{--                <li> <a href="/ui-advanced/tour">Tour</a> </li>--}}
{{--                <li> <a href="/ui-advanced/cropper">Cropper</a> </li>--}}
{{--                <li> <a href="/ui-advanced/range-slider">Range Slider</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Advanced UI Elements -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="/animation">--}}
{{--                <span><i class="material-icons fs-16">format_paint</i>Animations</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <!-- Form Elements -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#form-elements" aria-expanded="false" aria-controls="form-elements">--}}
{{--                <span><i class="material-icons fs-16">input</i>Form Elements</span>--}}
{{--            </a>--}}
{{--            <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/form/form-elements">Form Elements</a> </li>--}}
{{--                <li> <a href="/form/form-layout">Form Layouts</a> </li>--}}
{{--                <li> <a href="/form/form-validation">Form Validation</a> </li>--}}
{{--                <li> <a href="/form/form-wizard">Form Wizard</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Form Elements -->--}}
{{--        <!-- Charts -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#charts" aria-expanded="false" aria-controls="charts">--}}
{{--                <span><i class="material-icons fs-16">equalizer</i>Charts</span>--}}
{{--            </a>--}}
{{--            <ul id="charts" class="collapse" aria-labelledby="charts" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/charts/chartjs">Chart JS</a> </li>--}}
{{--                <li> <a href="/charts/morris-charts">Morris Chart</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Charts -->--}}
{{--        <!-- Tables -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#tables" aria-expanded="false" aria-controls="tables">--}}
{{--                <span><i class="material-icons fs-16">tune</i>Tables</span>--}}
{{--            </a>--}}
{{--            <ul id="tables" class="collapse" aria-labelledby="tables" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/tables/basic-tables">Basic Tables</a> </li>--}}
{{--                <li> <a href="/tables/data-tables">Data tables</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Tables -->--}}
{{--        <!-- Popups -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#popups" aria-expanded="false" aria-controls="popups">--}}
{{--                <span><i class="material-icons fs-16">message</i>Popups</span>--}}
{{--            </a>--}}
{{--            <ul id="popups" class="collapse" aria-labelledby="popups" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/popups/sweet-alerts">Sweet Alerts</a> </li>--}}
{{--                <li> <a href="/popups/toast">Toast</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Popups -->--}}
{{--        <!-- Icons -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#icons" aria-expanded="false" aria-controls="icons">--}}
{{--                <span><i class="material-icons fs-16">border_color</i>Icons</span>--}}
{{--            </a>--}}
{{--            <ul id="icons" class="collapse" aria-labelledby="icons" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/icons/fontawesome">Fontawesome</a> </li>--}}
{{--                <li> <a href="/icons/flaticons">Flaticons</a> </li>--}}
{{--                <li> <a href="/icons/materialize">Materialize</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Icons -->--}}
{{--        <!-- Maps -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#maps" aria-expanded="false" aria-controls="maps">--}}
{{--                <span><i class="material-icons fs-16">map</i>Maps</span>--}}
{{--            </a>--}}
{{--            <ul id="maps" class="collapse" aria-labelledby="maps" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/maps/google-maps">Google Maps</a> </li>--}}
{{--                <li> <a href="/maps/vector-maps">Vector Maps</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Maps -->--}}
{{--        <!-- Pages -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">--}}
{{--                <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>--}}
{{--            </a>--}}
{{--            <ul id="pages" class="collapse" aria-labelledby="pages" data-bs-parent="#side-nav-accordion">--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>--}}
{{--                    <ul id="authentication" class="collapse" aria-labelledby="authentication" data-bs-parent="#pages">--}}
{{--                        <li> <a href="/prebuilt-pages/default-login">Default Login</a> </li>--}}
{{--                        <li> <a href="/prebuilt-pages/modal-login">Modal Login</a> </li>--}}
{{--                        <li> <a href="/prebuilt-pages/default-register">Default Registration</a> </li>--}}
{{--                        <li> <a href="/prebuilt-pages/modal-register">Modal Registration</a> </li>--}}
{{--                        <li> <a href="/prebuilt-pages/lock-screen">Lock Screen</a> </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a href="/prebuilt-pages/coming-soon">Coming Soon</a> </li>--}}
{{--                <li> <a href="/prebuilt-pages/error">Error Page</a> </li>--}}
{{--                <li class="menu-item"> <a href="{{route('backend.faq-list')}}"> FAQ </a> </li>--}}
{{--                <li class="menu-item"> <a href="/prebuilt-pages/portfolio"> Portfolio </a> </li>--}}
{{--                <li class="menu-item"> <a href="/prebuilt-pages/user-profile"> User Profile </a> </li>--}}
{{--                <li class="menu-item"> <a href="/prebuilt-pages/invoice"> Invoice </a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Pages -->--}}
{{--        <!-- Bonus Pages -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#bonus" aria-expanded="false">--}}
{{--                <span><i class="material-icons fs-16">dashboard</i>Bonus Pages </span>--}}
{{--            </a>--}}
{{--            <ul id="bonus" class="collapse" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/dashboard/web-analytics"> Web Analytics </a> </li>--}}
{{--                <li> <a href="/dashboard/social-media">Social Media Management</a> </li>--}}
{{--                <li> <a href="/dashboard/project-management">Department Management</a> </li>--}}
{{--                <li> <a href="/dashboard/client-management">Patient Management</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- /Bonus Pages -->--}}
{{--        <!-- Apps -->--}}
{{--        <li class="menu-item">--}}
{{--            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#apps" aria-expanded="false" aria-controls="apps">--}}
{{--                <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>--}}
{{--            </a>--}}
{{--            <ul id="apps" class="collapse" aria-labelledby="apps" data-bs-parent="#side-nav-accordion">--}}
{{--                <li> <a href="/apps/chat">Chat</a> </li>--}}
{{--                <li> <a href="/apps/email">Email</a> </li>--}}
{{--                <li> <a href="/apps/to-do-list">To-do List</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <!-- /Apps -->
    </ul>
</aside>
