@extends('dashboard.components.app')

@section('title', 'Wards | Hospital Management Systems')
@section('pages')

    <!-- row -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Wards</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Ward No</th>
                                        <th>Ward Name</th>
                                        <th> Room No</th>
                                        <th>Floor Name</th>
                                        <th>Building</th>
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
                                        <td>
                                            Wamama
                                        </td>
                                        <td>
                                            101
                                        </td>
                                        <td>
                                            Mizzanine
                                        </td>
                                        <td>
                                            Block A
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        {{-- <td>101</td> --}}
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">#MR-02</a>
                                        </td>
                                        <td>
                                            Wanaume
                                        </td>
                                        <td>
                                            102
                                        </td>
                                        <td>
                                            Ground Floor
                                        </td>
                                        <td>
                                            Block A
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        {{-- <td>101</td> --}}
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">#MR-03</a>
                                        </td>
                                        <td>
                                            Children
                                        </td>
                                        <td>
                                            103
                                        </td>

                                        <td>
                                            First Floor
                                        </td>
                                        <td>
                                            Block B
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        {{-- <td>101</td> --}}
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">#MR-04</a>
                                        </td>
                                        <td>
                                            Maternity
                                        </td>
                                        <td>
                                            104
                                        </td>
                                        <td>
                                            Second Floor
                                        </td>
                                        <td>
                                            Block C
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        {{-- <td>101</td> --}}
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
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
