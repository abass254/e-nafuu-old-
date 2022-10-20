@extends('backend.master')
@section('content')
<div class="">
    <h1 class="display-4">System Users</h1>
    <hr/>
</div>
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-list-view.css')}}">
<style>
    td.product-action span i.feather {
        font-size: 1.3em;
    }
</style>

<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>

<script src="{{ asset('app-assets/js/users-list.js') }}"></script>

<div class="content-body">
    <section id="data-list-view" class="data-list-view-header">
        <div class="action-btns d-none">
            <div class="btn-dropdown mr-1 mb-1">
                <div class="btn-group dropdown actions-dropodown">
                    <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"><i class="feather icon-percent"></i>Donor Details</a>
                        <a class="dropdown-item"><i class="feather icon-percent"></i>Update Status</a>
                        <a class="dropdown-item"><i class="feather icon-trash"></i>Delete</a>
                        <a class="dropdown-item"><i class="feather icon-archive"></i>Archive</a>
                        <a class="dropdown-item"><i class="feather icon-file"></i>Print Donors</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTable starts -->
        <div class="table-responsive">
            <table class="table data-list-view">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>CONTACT</th>
                        <th>ROLE</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                    <tr>
                        <td></td>
                        <td><img class="round" src="https://ui-avatars.com/api/?name={{ $user->first_name }}+{{ $user->last_name }}?background=random?color=random" alt="avatar" height="40" width="40"></td>
                        <td class="text-info">{{ $user->id }}</td>
                        <td class="product-name text-uppercase">{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td class="product-name">{{ $user->email }}</td>
                        <td class="product-name text-uppercase">{{ $user->contact }}</td>
                        <td class="product-name text-uppercase">{{ $user->role }}</td>
                        <td>
                            <div class="chip chip-success">
                                <div class="chip-body">
                                    <div class="chip-text">Active</div>
                                </div>
                            </div>
                        </td>
                        <td class="product-action">
                            <span class="action-edit" data-uuid="{{ $user->uuid }}" data-idnt="{{ $user->uuid }}"><i class="feather icon-edit blue-text lighten"></i></span>
                            <span class="action-delete" data-uuid="{{ $user->uuid }}" data-idnt="{{ $user->uuid }}"><i class="feather icon-trash danger"></i></span>
                            <span class="action-view" data-uuid="{{ $user->uuid}}" data-idnt="{{ $user->uuid }}"><i class="feather icon-airplay"></i></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- DataTable ends -->
        <!-- add new sidebar starts -->
        <div class="add-new-data-sidebar">
            <div class="overlay-bg"></div>
            <div class="add-new-data">
                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                    <div>
                        <h4 class="text-uppercase">ADD USER</h4>
                    </div>
                    <div class="hide-data-sidebar">
                        <i class="feather icon-x"></i>
                    </div>
                </div>
                <div class="data-items pb-3">
                    <div class="data-fields px-2 mt-25">
                        <div class="row">
                            <div class="col-sm-12 data-field-col">
                                <label for="data-name"> Name</label>
                                <input type="hidden" class="form-control" id="donor-idnt">
                                <input type="text" class="form-control" id="donor-initial">
                            </div>
                            <div class="col-sm-12 data-field-col">
                                <label for="data-category"> Description</label>
                                <input type="text" class="form-control" id="donor-name">
                            </div>
                            <div class="col-sm-12 data-field-col">
                                <label for="data-status"> Address</label>
                                <textarea type="text" class="form-control" id="donor-address"></textarea>
                            </div>
                            <div class="col-sm-12 data-field-col">
                                <label for="data-price"> Icons</label>
                                <input type="text" class="form-control" id="donor-icon">
                            </div>
                            <div class="col-sm-12 data-field-col">
                                <label for="data-status">Notes</label>
                                <textarea type="text" class="form-control" rows="4" id="donor-notes"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                    <div class="add-data-btn">
                        <button class="btn btn-primary btn-save-donor"><i class="feather icon-save"></i>Save Donor</button>
                    </div>
                    <div class="cancel-data-btn">
                        <button class="btn btn-outline-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- add new sidebar ends -->
    </section>
</div>
@endsection
