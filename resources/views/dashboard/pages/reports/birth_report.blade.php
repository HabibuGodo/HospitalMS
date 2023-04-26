@extends('dashboard.components.app')

@section('title', 'Birth Report | Hospital Management Systems')
@section('pages')

    <!-- row -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Birth Reports</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Mother Name</th>
                                        <th>Father Name</th>
                                        <th>Date of Birth</th>
                                        <th>Status</th>
                                        {{-- <th>Room no</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">#MR-01</a>
                                        </td>
                                        <td>John Doe</td>
                                        <td>Male</td>
                                        <td>Jane Doe</td>
                                        <td>Doe Steven</td>
                                        <td>12/12/2020</td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        {{-- <td>101</td> --}}
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Print</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Send to email</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">#MR-02</a>
                                        </td>
                                        <td>Aisha Doe</td>
                                        <td>Female</td>
                                        <td>Jane Doe</td>
                                        <td>Doe Steven</td>
                                        <td>12/12/2020</td>
                                        <td>
                                            <span class="badge badge-danger">Deceased</span>
                                        </td>
                                        {{-- <td>101</td> --}}
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Print</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Send to email</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
