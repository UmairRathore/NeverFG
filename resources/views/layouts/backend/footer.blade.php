
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="{{asset('backend/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('backend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/perfect-scrollbar.js')}}"> </script>
<script src="{{asset('backend/assets/js/jquery-ui.min.js')}}"> </script>

<!-- Global Required Scripts End -->
<script src="{{asset('backend/assets/js/d3.v3.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/topojson.v1.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/datamaps.all.min.js')}}"> </script>


<!-- Page Specific Scripts Start -->
<script src="{{asset('backend/assets/js/slick.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/moment.js')}}"> </script>
<script src="{{asset('backend/assets/js/jquery.webticker.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/Chart.bundle.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/index-chart.js')}}"> </script>

<!-- Page Specific Scripts Finish -->
<script src="{{asset('backend/assets/js/calendar.js')}}"></script>
<!-- medboard core JavaScript -->
<script src="{{asset('backend/assets/js/framework.js')}}"></script>
<!-- Settings -->
<script src="{{asset('backend/assets/js/settings.js')}}"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.2.1.js')}}"></script>

<!--DATATABLE-->
<script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>


<!--SELECT2-->
<script src="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')}}"></script>

{{------------------------------------------------Tool_tips-------------------------------------------------}}

<script>
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>

{{-----------------------------------------------DATA-TABLES-------------------------------------------------}}
{{--Time-Slots Tables--}}
@yield('timeslotslist')


{{--Appointments Tables--}}
@yield('appointmentlist')
        @yield('appointmentdocumentlist')
        @yield('prescriptionlist')
                @yield('prescriptionlabtestlist')
                        @yield('labtestdocumentlist')
                @yield('medicationlist')
@yield('appointmentassessmentlist')


{{--Doctor Tables--}}
@yield('favdoctorlist')
@yield('bannerlist')
@yield('ratingdoctorlist')
@yield('doctorlist')
@yield('specializationlist')

@yield('issuelist')
@yield('issuelist')

@yield('transactionlist')
@yield('userwalletlist')
@yield('reviewslist')

{{--Patient Tables--}}
@yield('labtestlist')
@yield('patientlist')
@yield('symptomlist')

{{--User Table--}}
@yield('userlist')

{{--Roles and Permission Table--}}
@yield('rolelist')
@yield('permissionslist')


{{--Select2--}}
@yield('select2labtest')
@yield('specializationselect2')
@yield('symptomsselect2')








{{--<!---DATATable-->--}}

{{--<!--APPOINTMENT_LIST-->--}}
{{--@section('appointmentlist')--}}
{{--    <script>--}}
{{--        $(document).ready( function () {--}}
{{--            $('#appointmentlist').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
{{--@endsection--}}
{{--<!--APPOINTMENT_LIST-->--}}


{{--<!--DOCTOR_LIST-->--}}
{{--@section('doctorlist')--}}
{{--    <script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script>--}}
{{--        $(document).ready( function () {--}}
{{--            $('#doctorlist').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
{{--@endsection--}}
{{--<!--DOCTOR_LIST-->--}}


{{--<!--LABTEST_LIST-->--}}
{{--@section('labtestlist')--}}
{{--    <script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script>--}}
{{--        $(document).ready( function () {--}}
{{--            $('#labtestlist').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
{{--@endsection--}}

{{--<!--LABTEST_LIST-->--}}


{{--<!--PATIENT_LIST-->--}}
{{--@section('patientlist')--}}
{{--    <script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script>--}}
{{--        $(document).ready( function () {--}}
{{--            $('#patientlist').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
{{--@endsection--}}

{{--<!--PATIENT_LIST-->--}}


{{--<!--SPECIALIZATION_LIST_LIST-->--}}
{{--@section('specializationlist')--}}
{{--    <script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script>--}}
{{--        $(document).ready( function () {--}}
{{--            $('#specializationlist').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
{{--@endsection--}}
{{--<!--SPECIALIZATION_LIST_LIST-->--}}


{{--<!--SYMPTOM_LIST-->--}}
{{--@section('symptomlist')--}}
{{--    <script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script>--}}
{{--        $(document).ready( function () {--}}
{{--            $('#symptomlist').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
{{--@endsection--}}
{{--<!--SYMPTOM_LIST-->--}}


{{--<!--USER_LIST-->--}}
{{--@section('userlist')--}}
{{--    <script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script>--}}
{{--        $(document).ready( function () {--}}
{{--            $('#userlist').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
{{--@endsection--}}
{{--<!--USER_LIST-->--}}


{{--@yield('datatable-3footer')--}}
