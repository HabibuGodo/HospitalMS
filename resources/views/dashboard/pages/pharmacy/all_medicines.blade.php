@extends('dashboard.components.app')

@section('title', 'All Medicines | Hospital Management Systems')
@section('pages')

    <!-- row -->
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Medicines</h4>
                        {{-- //dispense button at right --}}
                        <div class="d-flex align-items-center pull-right">
                            <a href="#" class="btn btn-primary">Add
                                Medicine</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>In-Stock</th>
                                        <th>Price per unit</th>
                                        <th>Manufacture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paracetamol</td>
                                        <td>Tablet</td>
                                        <td>For fever</td>
                                        <td>10</td>
                                        <td>100</td>
                                        <td>TESSALONE</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Benzonatate</td>
                                        <td>Capsule</td>
                                        <td>For fever</td>
                                        <td>1560</td>
                                        <td>100</td>
                                        <td>Apotex</td>

                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paracetamol</td>
                                        <td>Tablet</td>
                                        <td>For fever</td>
                                        <td>100</td>
                                        <td>100</td>
                                        <td>TESSALONE</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paracetamol</td>
                                        <td>Tablet</td>
                                        <td>For fever</td>
                                        <td>100</td>
                                        <td>100</td>
                                        <td>Company Cipla</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paracetamol</td>
                                        <td>Tablet</td>
                                        <td>For fever</td>
                                        <td>100</td>
                                        <td>100</td>
                                        <td>Company Cipla</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paracetamol</td>
                                        <td>Tablet</td>
                                        <td>For fever</td>
                                        <td>100</td>
                                        <td>100</td>
                                        <td>Company Cipla</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
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