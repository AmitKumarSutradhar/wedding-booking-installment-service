@extends('seller-views.layout.master')

@section('title', 'Add new campaign')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!--  -->
            <div class="row">
                <div class="col-lg-12 py-3">
                    <h3 class="text-black fw-bold">Add new discount</h3>
                </div>

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Discount type</label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Category wise <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check me-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Service wise <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check me-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Mixed <i class="input-helper"></i></label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Discount title *</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Discount title *">
                                </div>
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="js-example-basic-multiple w-100" multiple="multiple">
                                        <option value="AL">Alabama</option>
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="AM">America</option>
                                        <option value="CA">Canada</option>
                                        <option value="RU">Russia</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Zone</label>
                                    <select class="js-example-basic-multiple w-100" multiple="multiple">
                                        <option value="AL">Alabama</option>
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="AM">America</option>
                                        <option value="CA">Canada</option>
                                        <option value="RU">Russia</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Discount amount type *</label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Percentage <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check me-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Fixed amount <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Amount ($)</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Start date *</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">End date *</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Min purchase amount ($) *</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
@endsection
