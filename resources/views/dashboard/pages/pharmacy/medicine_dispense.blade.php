@extends('dashboard.components.app')

@section('title', 'Medicine Dispense | Hospital Management Systems')
@section('pages')

    <!-- row -->
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Medicine Dispense</h4>
                        {{-- //dispense button at right --}}
                        <div class="d-flex align-items-center pull-right">
                            <a href="#" class="btn btn-primary">Dispense
                                Medicine</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Issue Date</th>
                                        <th>Patient Name</th>
                                        <th>Age/Gender</th>
                                        <th>Payer</th>
                                        <th>Bill No</th>
                                        <th>Status</th>
                                        <th>Despensed By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paracetamol</td>
                                        <td>12/02/2020</td>
                                        <td>John Doe</td>
                                        <td>35/M</td>
                                        <td>Standard</td>
                                        <td>#P-00001</td>
                                        <td>
                                            <span class="badge light badge-success">
                                                <i class="fa fa-circle text-success me-1"></i>
                                                Delivered
                                            </span>
                                        </td>
                                        <td>Dr. Samantha</td>
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
                                                    <a class="dropdown-item" href="#">Print</a>
                                                    <a class="dropdown-item" href="#">Cancel Order</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paracetamol</td>
                                        <td>12/02/2020</td>
                                        <td>John Doe</td>
                                        <td>35/M</td>
                                        <td>Insurance</td>
                                        <td>#P-00001</td>
                                        <td>
                                            <span class="badge light badge-success">
                                                <i class="fa fa-circle text-success me-1"></i>
                                                Delivered
                                            </span>
                                        </td>
                                        <td>Dr. Samantha</td>
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
                                                    <a class="dropdown-item" href="#">Print</a>
                                                    <a class="dropdown-item" href="#">Cancel Order</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paracetamol</td>
                                        <td>12/02/2020</td>
                                        <td>John Doe</td>
                                        <td>35/M</td>
                                        <td>Standard</td>
                                        <td>#P-00001</td>
                                        <td>
                                            <span class="badge light badge-success">
                                                <i class="fa fa-circle text-success me-1"></i>
                                                Delivered
                                            </span>
                                        </td>
                                        <td>Dr. Samantha</td>
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
                                                    <a class="dropdown-item" href="#">Print</a>
                                                    <a class="dropdown-item" href="#">Cancel Order</a>
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