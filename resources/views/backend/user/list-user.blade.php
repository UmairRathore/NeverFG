@extends('layouts.backend.master')


@section('head.bannerlist')
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css')}}">
@endsection

@section('content')

    <link href="{{asset('backend/vendors/toastr/css/toastr.min.css')}}" rel="stylesheet">
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 24px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>



    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ps-0">
                            <li class="breadcrumb-item"><a href="{{route('backend.index')}}"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>User List</h6>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                <table id="userlist" class="table table-striped thead-primary w-100">
                                    @if(Session('info_deleted'))
                                        <div class="alert alert-danger" role="alert">
                                            {{Session('info_deleted')}}
                                        </div>

                                    @endif
                                    <thead>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Joined Date</th>
                                    <th>Role</th>
{{--                                    <th>Status</th>--}}
                                    <th>Action</th>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)

                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->first_name}}</td>
                                            <td>{{$user->last_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->dob}}</td>
                                            <td>{{$user->gender}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$user->name}}</td>
{{--                                            <td>--}}
{{--                                                <label class="switch">--}}
{{--                                                    <input type="checkbox" id="status" class="checkbox checkbox_list" data-id="{{ $user->id }}" value="{{ ($user->status == 1) ? 0 : 1 }}" data-url="{{route('status-user',$user->id)}}" name="status" {{ ($user->status == 1) ? 'checked' : '' }}>--}}
{{--                                                    <span class="slider round" ></span>--}}
{{--                                                </label>--}}
{{--                                                <span style="display: none">{{ ($user->status == 1) ? 'Active' : 'false' }}</span>--}}
{{--                                            </td>--}}
                                            <td>
                                                    <a href="{{route('backend.delete-user',[$user->id])}}"onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="top" title="delete" class="far fa-trash-alt ms-text-danger"></a>
{{----}}
{{--                                                    <a href="{{route('backend.edit-user',[$user->id])}}" data-toggle="tooltip" data-placement="top" title="Edit" class="fas fa-pencil-alt ms-text-primary"></a>--}}
                                            </td>


                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>




@endsection

@section('userlist')
    <script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>

    <script src="{{asset('backend/vendors/toastr/js/toastr.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#userlist').DataTable();
        } );
        $(document).on("click", ".checkbox_list", function () {


            var is_checked_obj = $(this);
            var is_checked = $(this).val(); // this gives me null
            let token = $('meta[name="csrf-token"]').attr('content');

            {{--add this in head
                        "<meta name="csrf-token" content="{{ csrf_token() }}" />"
            when token mismatches --}}

            if (is_checked != null) {
                var url = $(this).attr('data-url'); // this gives me null
                var dltUrl = url;
                $.ajax({
                    url: dltUrl,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'status': is_checked,
                        '_token': token
                    },
                    success: function (response) {
                        if (response.statusCode == 200) {
                            is_checked = 1 - Math.abs(is_checked);
                            is_checked_obj.val(is_checked); // this gives me null
                            toastr.success(response.message);
                        } else {
                            if(is_checked){
                                is_checked_obj.removeAttribute('checked');
                            }
                            else{
                                is_checked_obj.attr('checked');
                            }
                            // toastr.error("Oops something went wrong");
                        }
                    }, error: function () {
                        toastr.success("Status updated Successfully");
                        // toastr.error("Oops something went wrong");

                    },
                });
            }


        });
        $('#inputStateRes').on('change', function () {
            if (this.value == 'Active') {
                $(".dataTable").DataTable().column(9).search('Active').draw();
            } else if (this.value == 'InActive') {
                $(".dataTable").DataTable().column(9).search('false').draw();
            } else if (this.value == 'All') {
                $(".dataTable").DataTable().column(9).search('').draw();
            } else {
                $(".datatable").DataTable().search(this.value).draw();
            }
        });
    </script>
@endsection


