@extends('admin-views.layout.master')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!--  -->
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="card bg-primary card-rounded">
                        <div class="card-body pb-0">
                            <h4 class="card-title card-title-dash text-white mb-4">Total Earning</h4>
                            <h2 class="fw-bold text-white mb-4">$5800</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card bg-info card-rounded">
                        <div class="card-body pb-0">
                            <h4 class="card-title card-title-dash text-white mb-4">Total Customer</h4>
                            <h2 class="fw-bold text-white mb-4">500</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card bg-secondary card-rounded">
                        <div class="card-body pb-0">
                            <h4 class="card-title card-title-dash text-white mb-4">Total Customer</h4>
                            <h2 class="fw-bold text-white mb-4">500</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card bg-success card-rounded">
                        <div class="card-body pb-0">
                            <h4 class="card-title card-title-dash text-white mb-4">Total Vendor</h4>
                            <h2 class="fw-bold text-white mb-4">50</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row my-4">
                <div class="col-lg-8 d-flex flex-column">
                    <div class="row flex-grow">
                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="card-title card-title-dash">Earning statistics</h4>
                                            <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                        </div>
                                        <div id="performanceLine-legend"></div>
                                    </div>
                                    <div class="chartjs-wrapper mt-4">
                                        <canvas id="performanceLine" width="" height="260px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="card-title card-title-dash">Recent transactions</h4>
                                <p class="mb-0">20 finished, 5 remaining</p>
                            </div>
                            <ul class="bullet-line-list">
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>Just now</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="list align-items-center pt-3">
                                <div class="wrapper w-100">
                                    <p class="mb-0">
                                        <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Top Vendors Start -->
            <div class="row my-4">
                <div class="col-lg-8 col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Pending Booking Requests</h4>
                                    <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                                </div>
                            </div>
                            <div class="table-responsive  mt-1">
                                <table class="table select-table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false" id="check-all"><i class="input-helper"></i><i class="input-helper"></i></label>
                                            </div>
                                        </th>
                                        <th>Customer</th>
                                        <th>Company</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex ">
                                                <img src="assets/images/faces/face1.jpg" alt="">
                                                <div>
                                                    <h6>Brandon Washington</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">79%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="assets/images/faces/face2.jpg" alt="">
                                                <div>
                                                    <h6>Laura Brooks</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">65%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="assets/images/faces/face3.jpg" alt="">
                                                <div>
                                                    <h6>Wayne Murphy</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">65%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="assets/images/faces/face4.jpg" alt="">
                                                <div>
                                                    <h6>Matthew Bailey</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">65%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-opacity-danger">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="assets/images/faces/face5.jpg" alt="">
                                                <div>
                                                    <h6>Katherine Butler</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">65%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-opacity-success">Completed</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column">
                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div>
                                                    <h4 class="card-title card-title-dash">Top Vendors</h4>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                    <div class="d-flex">
                                                        <img class="img-sm rounded-10" src="assets/images/faces/face1.jpg" alt="profile">
                                                        <div class="wrapper ms-3">
                                                            <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                                            <small class="text-muted mb-0">162543</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted text-small"> 1h ago </div>
                                                </div>
                                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                    <div class="d-flex">
                                                        <img class="img-sm rounded-10" src="assets/images/faces/face2.jpg" alt="profile">
                                                        <div class="wrapper ms-3">
                                                            <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                                            <small class="text-muted mb-0">162543</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted text-small"> 1h ago </div>
                                                </div>
                                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                    <div class="d-flex">
                                                        <img class="img-sm rounded-10" src="assets/images/faces/face3.jpg" alt="profile">
                                                        <div class="wrapper ms-3">
                                                            <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                                            <small class="text-muted mb-0">162543</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted text-small"> 1h ago </div>
                                                </div>
                                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                    <div class="d-flex">
                                                        <img class="img-sm rounded-10" src="assets/images/faces/face4.jpg" alt="profile">
                                                        <div class="wrapper ms-3">
                                                            <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                                            <small class="text-muted mb-0">162543</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted text-small"> 1h ago </div>
                                                </div>
                                                <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                    <div class="d-flex">
                                                        <img class="img-sm rounded-10" src="assets/images/faces/face5.jpg" alt="profile">
                                                        <div class="wrapper ms-3">
                                                            <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                                            <small class="text-muted mb-0">Alaska, USA</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted text-small"> 1h ago </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Top Vendors End -->

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Market Overview</h4>
                                    <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" style="">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                    <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                    <h4 class="me-2">USD</h4>
                                    <h4 class="text-success">(+1.37%)</h4>
                                </div>
                                <div class="me-3">
                                    <div id="marketingOverview-legend"><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul><ul>
                                            <li>
                                                <span style="background-color: #52CDFF"></span>
                                                Last week
                                            </li>

                                            <li>
                                                <span style="background-color: #1F3BB3"></span>
                                                This week
                                            </li>
                                        </ul></div>
                                </div>
                            </div>
                            <div class="chartjs-bar-wrapper mt-3">
                                <canvas id="marketingOverview" width="1003" height="280" style="display: block; box-sizing: border-box; height: 280px; width: 1003px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
