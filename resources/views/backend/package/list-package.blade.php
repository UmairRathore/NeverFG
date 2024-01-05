@extends('layouts.backend.master')

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
                            <li class="breadcrumb-item"><a href="{{route('backend.index')}}"><i class="material-icons">home</i>
                                    Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Package List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Package List</h6>
                            <a href="{{route('backend.add-package')}}" class="btn btn-primary">Add Package </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>
                                @endif
                                    @if(Session('required_fields_empty'))
                                        <div class="alert alert-danger" role="alert">
                                            {{Session('required_fields_empty')}}

                                        </div>
                                    @endif
                                <table id="packagelist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>Account Type</th>
                                    <th>Memento Images</th>
                                    <th>Guestbook And Tributes</th>
                                    <th>Biography and Orbiuary</th>
                                    <th>Memorial Donation Link</th>
                                    <th>Online Forever</th>
                                    <th>Unlimited Milestones</th>
                                    <th>Share Cemetery/Grave Location</th>
                                    <th>Full Privacy</th>
                                    <th>Download images</th>
                                    <th>Video Uploading</th>
                                    <th>Customizable Url</th>
                                    <th>Keeper Administrators</th>
                                    <th>Events Pages</th>
                                    <th>Family Tree</th>
                                    <th>Memorial PAges</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>{{$package->id}}</td>
                                            <td>{{$package->account_name}}</td>

                                            @foreach (['memento_images', 'guestbook_and_tributes', 'biography_and_obituary', 'in_memoriam_donation_link', 'online_forever', 'unlimited_milestones', 'share_cemetery_and_grave_location', 'full_privacy_settings', 'downloading_images', 'video_uploading', 'customizable_url', 'keeper_administrators', 'events_pages', 'family_tree', 'memorial_pages'] as $field)
                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox" id="{{ $field }}_{{ $package->id }}"
                                                               class="checkbox checkbox_list" data-id="{{ $package->id }}"
                                                               value="{{ ($package->$field == 1) ? 0 : 1 }}"
                                                               data-url="{{ route('backend.status-package', ['id' => $package->id, 'field' => $field]) }}"
                                                               name="{{ $field }}" {{ ($package->$field == 1) ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <span style="display: none">{{ ($package->$field == 1) ? 'Active' : 'Inactive' }}</span>
                                                </td>
                                            @endforeach
                                            <td>
                                                <a class="fas fa-trash-alt" href="{{ route('backend.delete-package',$package->id) }}">Delete Package</a>
                                            </td>
                                        </tr>
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
@section('packagelist')


    <script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}"></script>

    <script src="{{asset('backend/vendors/toastr/js/toastr.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>
    <script>

        $(document).ready(function () {
            $('#packagelist').DataTable();
        });


        $(document).ready(function () {
            $('.checkbox_list').change(function () {
                var checkbox = $(this);
                var id = checkbox.data('id');
                var field = checkbox.attr('name');
                var value = checkbox.is(':checked') ? 1 : 0;
                var url = checkbox.data('url');

                // Send AJAX request
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        id: id,
                        field: field,
                        value: value,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        // Handle success if needed
                        console.log(data);
                    },
                    error: function (error) {
                        // Handle error if needed
                        console.log(error);
                    }
                });
            });
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

