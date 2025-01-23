@extends('admin-views.layout.master')

@section('title', 'Booking List')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!--  -->
            <div class="row">
                <div class="col-lg-12 py-3">
                    <h3 class="text-black fw-bold">{{ $page_title }}</h3>
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
                                        <th>Booking ID</th>
                                        <th>Booking Date</th>
                                        <th>Schedule Date</th>
                                        <th>Customer Info</th>
                                        <th>Vendor Info</th>
                                        <th>Total Amount</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>10001</td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>Demo Customer</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            <p>Demo Vendor</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            305032.00$
                                        </td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-eye"></i></button>
                                            <button class="btn btn-success btn-sm rounded-1"> <i class="ti-download"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>10002</td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>Demo Customer</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            <p>Demo Vendor</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            305032.00$
                                        </td>
                                        <td><label class="badge badge-warning">In progress</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-eye"></i></button>
                                            <button class="btn btn-success btn-sm rounded-1"> <i class="ti-download"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>10003</td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>Demo Customer</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            <p>Demo Vendor</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            305032.00$
                                        </td>
                                        <td><label class="badge badge-info">Fixed</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-eye"></i></button>
                                            <button class="btn btn-success btn-sm rounded-1"> <i class="ti-download"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>10004</td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>Demo Customer</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            <p>Demo Vendor</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            305032.00$
                                        </td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-eye"></i></button>
                                            <button class="btn btn-success btn-sm rounded-1"> <i class="ti-download"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>10005</td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>28-Jan-2025</p>
                                            <p>10:50PM</p>
                                        </td>
                                        <td>
                                            <p>Demo Customer</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            <p>Demo Vendor</p>
                                            <p>+08 12354664884</p>
                                        </td>
                                        <td>
                                            305032.00$
                                        </td>
                                        <td><label class="badge badge-warning">In progress</label></td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-1 mx-2"> <i class="ti-eye"></i></button>
                                            <button class="btn btn-success btn-sm rounded-1"> <i class="ti-download"></i></button>
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
