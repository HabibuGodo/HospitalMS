@extends('dashboard.components.app')

@section('title', 'All Doctors | Hospital Management Systems')
@section('pages')

    <!-- row -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Doctors</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>

                                        <th>Doctor ID</th>
                                        <th>Doctor Name</th>
                                        <th>Department</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        {{-- <th>Room no</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>DR-0001</td>
                                    <td>Dr. John Doe</td>
                                    <td>Cardiology</td>
                                    <td>0123456789</td>
                                    <td>
                                        <a href="mailto:hhaha@gmail.com">jdoe@gmail.com</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    {{-- <td>101</td> --}}
                                    <td>
                                        <div class="dropdown ms-auto text-end">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                    version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24"></rect>
                                                        <circle fill="#000000" cx="5" cy="12"
                                                            r="2"></circle>
                                                        <circle fill="#000000" cx="12" cy="12"
                                                            r="2"></circle>
                                                        <circle fill="#000000" cx="19" cy="12"
                                                            r="2"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>DR-0002</td>
                                    <td>Dr. Jane Doe</td>
                                    <td>Cardiology</td>
                                    <td>0123456789</td>
                                    <td>
                                        <a href="mailto:hhaha@gmail.com">jdoe@gmail.com</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    {{-- <td>101</td> --}}
                                    <td>
                                        <div class="dropdown ms-auto text-end">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                    version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24"></rect>
                                                        <circle fill="#000000" cx="5" cy="12"
                                                            r="2"></circle>
                                                        <circle fill="#000000" cx="12" cy="12"
                                                            r="2"></circle>
                                                        <circle fill="#000000" cx="19" cy="12"
                                                            r="2"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>



                            
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
