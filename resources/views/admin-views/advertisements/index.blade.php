@extends('admin-views.layout.master')

@section('title', 'Campaign List')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!--  -->
            <div class="row">
                <div class="col-lg-12 py-3">
                    <h3 class="text-black fw-bold">Discounts</h3>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search here" aria-label="Search here">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">Search</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light">Download</button>
                                        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1" style="">
                                            <h6 class="dropdown-header">Excel</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Discount type</th>
                                        <th>Zones</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>FLAT 10% OFF ON CAR SHIFTING</td>
                                        <td>category</td>
                                        <td>All over the World,</td>
                                        <td><label class="badge badge-success">Active</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-pencil-alt"></i></button>
                                            <button class="btn btn-danger btn-sm rounded-1"> <i class="ti-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>FLAT 10% OFF ON CAR SHIFTING</td>
                                        <td>category</td>
                                        <td>All over the World,</td>
                                        <td><label class="badge badge-danger">Inactive</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-pencil-alt"></i></button>
                                            <button class="btn btn-danger btn-sm rounded-1"> <i class="ti-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>15% OFF ON HOUSE SHIFTING</td>
                                        <td>category</td>
                                        <td>Test Zone 1, All over the World,</td>
                                        <td><label class="badge badge-success">Active</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-pencil-alt"></i></button>
                                            <button class="btn btn-danger btn-sm rounded-1"> <i class="ti-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>FLAT 10% OFF ON CAR SHIFTING</td>
                                        <td>category</td>
                                        <td>All over the World,</td>
                                        <td><label class="badge badge-success">Active</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-pencil-alt"></i></button>
                                            <button class="btn btn-danger btn-sm rounded-1"> <i class="ti-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>FLAT 10% OFF ON CAR SHIFTING</td>
                                        <td>category</td>
                                        <td>All over the World,</td>
                                        <td><label class="badge badge-danger">Inactive</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-pencil-alt"></i></button>
                                            <button class="btn btn-danger btn-sm rounded-1"> <i class="ti-trash"></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
@endsection
