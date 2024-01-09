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
                            <li class="breadcrumb-item active" aria-current="page">Feature List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Feature List</h6>
                            <a href="{{route('backend.add-feature')}}" class="btn btn-primary">Add Feature  </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>

                                @endif
                                <table id="featurelist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
{{--                                    <th>Service</th>--}}
                                    <th>Title</th>
                                    <th>Feature</th>
                                    <th>Permission</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($features as $feature)
                                            <tr>
                                                <td>{{$feature->id}}</td>
{{--                                                <td>{{$feature->service_name}}</td>--}}
                                                <td>{{$feature->title}}</td>
                                                <td>{{$feature->feature}}</td>
                                                <td>
                                                    <select name="permission" class="form-control">
                                                        <option value="" disabled selected>Select Permission based on service</option>
                                                        @foreach($services as $service)
                                                            <option value="{{$service->id}}">{{$service->service}}</option>
                                                        @endforeach
                                                    </select>
{{--                                                    ajax for this tomorrow--}}
                                                </td>
                                                <td>
{{--                                                    <a class="fa fa-edit" href="{{ route('backend.edit-feature',$feature->id) }}">Edit Faq</a>--}}
                                                    <a class="fas fa-trash alt" href="{{ route('backend.delete-feature',$feature->id) }}">Delete Feature</a>
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
@section('featurelist')
    <script>
        $(document).ready(function () {
            $('#featurelist').DataTable();
        });
        // Handle change event on the select element
        $('#permissionSelect').change(function () {
            // Get the selected value
            var selectedValue = $(this).val();

            // Make an AJAX request
            $.ajax({
                type: 'GET',
                url: '/changepermission', // Replace with your actual API endpoint
                data: { serviceId: selectedValue },
                success: function (data) {
                    // Update the result div with the data from the server
                    $('#result').html('Result: ' + data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        });

    </script>
@endsection

