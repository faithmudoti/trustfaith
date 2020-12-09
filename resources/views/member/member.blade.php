@extends('layout/layout')

@section('navigationbar')
    @include('layout/navigation')
@endsection

@section('contents')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="text-right text-red-700 pr-4">
                                        <button type="button" class="btn btn-primary text-2xl"
                                            data-target="#edit_member" data-toggle="modal" aria-expanded="false">
                                            <span aria-hidden="true"> <i class="fas fa-edit"></i></span>
                                        </button>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <h3 class="user-name m-t-0 mb-0">Name:  Trust Musikiri </h3>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h6 class="text-muted">Gender:</h6>
                                                                <h6 class="text-muted">Date of Birth:</h6>
                                                                <h6 class="text-muted">National ID:</h6>
                                                                <h6 class="text-muted">Nationality:</h6>
                                                                <h6 class="text-muted">Religion:</h6>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h6 class="text-muted">
                                                                     Male </h6>
                                                                <h6 class="text-muted"> 19 9999 29</h6>
                                                                <h6 class="text-muted"> 67 6767676 E34</h6>
                                                                <h6 class="text-muted">Zimbabwean </h6>
                                                                <h6 class="text-muted"> Christianity</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <h3 class="user-name m-t-0 mb-0">Contact Information</h3>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6 class="text-muted">Phone:</h6>
                                                        <h6 class="text-muted">Email:</h6>
                                                        <h6 class="text-muted">Address:</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 class="text-muted">0777777777</h6>
                                                        <h6 class="text-muted"> tmusikiri43@gmail.com</h6>
                                                        <h6 class="text-muted"> 1963 bhohnn  Mutare</h6>
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
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header p-2">

                    </div><!-- /.card-header -->
                </div><!-- /.card -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="general">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-footer mb-0">
                                            <div class="text-right text-red-700 pr-4">
                                                <button type="button" class="btn btn-primary text-2xl"
                                                    data-target="#edit_member_nok" data-toggle="modal"
                                                    aria-expanded="false">
                                                    <span aria-hidden="true"> <i class="fas fa-edit"></i></span>
                                                </button>
                                            </div>
                                            <h5>Education and Hobies </h5> <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h6 class="text-muted">Current School</h6>
                                                            <h6 class="text-muted">Current Year</h6>
                                                            <h6 class="text-muted">Interests</h6>
                                                            <h6 class="text-muted">Degree Name</h6>
                                                        </div>

                                                            <div class="col-md-6">
                                                                <h6 class="text-muted"> Harare Institute Of Technology
                                                                      </h6>
                                                                <h6 class="text-muted"> Part 4 Final Year</h6>
                                                                <h6 class="text-muted"> Coding Bloging Playing Soccer </h6>
                                                                <h6 class="text-muted"> Open Source Projects</h6>
                                                                <h6 class="text-muted"> B TECH Computer Science </h6>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-footer mb-0">
                                            <div class="text-right text-red-700 pr-4">
                                                <button type="button" class="btn btn-primary text-2xl"
                                                    data-target="#edit_dependants" data-toggle="modal"
                                                    aria-expanded="false">
                                                    <span aria-hidden="true"> <i class="fas fa-edit"></i></span>
                                                </button>
                                            </div>
                                            <h5>Skills Accquired </h5> <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Name</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                            <td> Coding</td>
                                                                            <td> Data Scientist </td>
                                                                        </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-footer mb-0">
                                            <div class="text-right text-red-700 pr-4">
                                                <button type="button" class="btn btn-primary text-2xl"
                                                    data-target="#edit_member_documents" data-toggle="modal"
                                                    aria-expanded="false">
                                                    <span aria-hidden="true"> <i class="fas fa-edit"></i></span>
                                                </button>
                                            </div>
                                            <h5>Qualifications </h5> <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Qualification</th>
                                                                    <th>File</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                    <tr>
                                                                        <td> Certificate </td>
                                                                        <td><a
                                                                                href=" "><i
                                                                                    class="fa fa-download"></i></a> &nbsp
                                                                            &nbsp
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

                            </div>
                            <!-- /Bank Statutory Tab -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- Edit member Modal -->
    <div id="edit_member" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action=" ">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="firstname"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" name="lastname"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" name="phone_number"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" name="email"
                                        type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address </label>
                                    <input class="form-control" name="address"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nationality <span class="text-danger">*</span></label>
                                    <input type="text"                                         class="form-control floating">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Joining Date <span
                                            class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control"
                                             type="text" readonly></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Religion</label>
                                    <select onload="initialDispay(this)" onchange="displayTypes()" id="accountCategory"
                                        name="department" class="form-control">

                                            <option>Christianity</option>
                                            <option>Athesist</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit member Modal -->

    <!-- /Edit member Info Modal -->
    <!-- Edit member Info Modal -->
    <div id="edit_member_bank" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Personal Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action=" ">
                        @csrf
                        <input type="hidden" value=" $member->id " name="id">
                        <input type="hidden" value="member_bank" name="data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Bank Name: </label>
                                        <input class="form-control" name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Branch Code: </label>
                                        <input class="form-control" name="branch_code" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Branch Name: </label>
                                        <input class="form-control" name="branch" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Account Name: </label>
                                        <input class="form-control" name="account_name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Account Number: </label>
                                        <input class="form-control" name="account_number" type="text">
                                    </div>
                                </div>
                            </div>

                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit member Info Modal -->
    <!-- Edit dependants Modal -->
    <div id="edit_dependants" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Skills</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- dependants -->
                    <form method="POST" action="  ">
                         {{ csrf_field() }}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="btn btn-success" type="button" value="Add Row"
                                            onclick="addRow('dataTable')" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="btn btn-danger" type="button" value="Delete Row"
                                            onclick="deleteRow('dataTable')" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="counter" id="counter" value="0">
                                <div class="col-md-12">

                                    <table class="table table-bordered " id="dataTableFacilities" width="80%"
                                        border="1">
                                        <thead>
                                            <tr>
                                                <th style="font-size:9px;"></th>
                                                <th style="font-size:9px;">FULL NAME</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit dependants Modal -->
    <!-- Edit member Contact Modal -->
    <div id="edit_member_nok" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Education and Hobbies</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="  ">
                        @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Current School <span class="text-danger">*</span></label>
                                        <input class="form-control" name="firstname" required type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Current School</label>
                                        <input class="form-control" name="lastname" required type="text">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Degree Name </label>
                                        <input class="form-control" name="national_id" required type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Hobby /Interest  <span
                                                class="text-danger">*</span></label>
                                        <textarea type="text" required name="relationship" class="form-control floating" placeholder="Enter your hobbies and Interest"></textarea>
                                    </div>
                                </div>
                            </div>

                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit member Contact Modal -->
    <!-- Edit member Qualifications Modal -->
    <div id="edit_member_documents" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Documents/Qualification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Qualifications -->
                    <form method="POST" action="  "
                        enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="btn btn-success" type="button" value="Add Row"
                                            onclick="addRow1('dataTable1')" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="btn btn-danger" type="button" value="Delete Row"
                                            onclick="deleteRow1('dataTable1')" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="counter" id="counter" value="0">
                                <div class="col-md-12">

                                    <table class="table table-bordered " id="dataTableFacilities1" width="80%"
                                        border="1">
                                        <thead>
                                            <tr>
                                                <th style="font-size:9px;"></th>
                                                <th style="font-size:9px;">Document Type</th>
                                                <th style="font-size:9px;">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Promotion Modal -->
    <div id="edit_member_promotion" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Promotion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action=" ">
                        @csrf
                        <input type="hidden" value=" $member->id " name="id">
                        <input type="hidden" value="member_promotion" name="data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Position <span class="text-danger">*</span></label>
                                    <select class="form-control" name="designation" required>

                                            <option value=" $position->id "> $position->title </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Effective From <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="effective_from" type="date">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Notes <span class="text-danger">*</span> </label>
                                    <textarea type="text" class="form-control" name="notes" required>
                                        </textarea>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Demotion Modal -->
    <div id="edit_member_demotion" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Demotion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action=" ">
                        @csrf
                        <input type="hidden" value=" $member->id " name="id">
                        <input type="hidden" value="member_demotion" name="data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Position <span class="text-danger">*</span></label>
                                    <select class="form-control" name="designation" required>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Effective From <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="effective_from" type="date">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Notes <span class="text-danger">*</span> </label>
                                    <textarea type="text" class="form-control" name="notes" required>
                                        </textarea>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Demotion Modal -->
    <div id="edit_member_resignation" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Resignation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action=" ">
                        @csrf
                        <input type="hidden" value=" $member->id " name="id">
                        <input type="hidden" value="member_resignation" name="data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Effective From <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="effective_from" type="date">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Reason for Resignation <span
                                            class="text-danger">*</span> </label>
                                    <textarea type="text" class="form-control" name="notes" required>
                                        </textarea>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Demotion Modal -->
    <div id="edit_member_termination" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Termination</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action=" ">
                        @csrf
                        <input type="hidden" value=" $member->id " name="id">
                        <input type="hidden" value="member_termination" name="data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Effective From <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="effective_from" type="date">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Reason for Termination <span
                                            class="text-danger">*</span> </label>
                                    <textarea type="text" class="form-control" name="notes" required>
                                        </textarea>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var c = 0;

        function addRow(tableID) {
            var table = document.getElementById("dataTableFacilities");
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name = "chkbox[]";
            cell1.appendChild(element1);



            var cell2 = row.insertCell(1);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = `dependant[${c}][depname]`;
            element2.setAttribute("required", "true");
            element2.style.border = "none";
            cell2.appendChild(element2);


            var cell4 = row.insertCell(3);
            var element4 = document.createElement("select");
            element4.option = "date";
            element4.name = `dependant[${c}][deprelationship]`;
            element4.setAttribute("required", "true");
            element4.style.border = "none";
            cell4.appendChild(element4);
            var myParent = document.body;
            //Create and append the options
            for (var i = 0; i < array.length; i++) {
                var option = document.createElement("option");
                option.value = array[i];
                option.text = array[i];
                element4.appendChild(option);
            }

            var cell5 = row.insertCell(4);
            var element5 = document.createElement("input");
            element5.type = "text";
            element5.name = `dependant[${c}][depnatid]`;
            element5.setAttribute("required", "true");
            element5.style.border = "none";
            cell5.appendChild(element5);

            c += 1;
        }

        function deleteRow(tableID) {
            try {
                var table = document.getElementById("dataTableFacilities");
                var rowCount = table.rows.length;

                for (var i = 0; i < rowCount; i++) {
                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];
                    if (null != chkbox && true == chkbox.checked) {
                        table.deleteRow(i);
                        rowCount--;
                        i--;
                    }


                }
            } catch (e) {
                alert(e);
            }
        }

    </SCRIPT>
    <script>
        var c = 0;

        function addRow1(tableID) {


            var table = document.getElementById("dataTableFacilities1");
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name = "chkbox1[]";
            cell1.appendChild(element1);

            var cell2 = row.insertCell(1);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = `documents[${c}][document_type]`;
            element2.setAttribute("required", "true");
            element2.style.border = "none";
            cell2.appendChild(element2);

            var cell3 = row.insertCell(2);
            var element3 = document.createElement("input");
            element3.type = "file";
            element3.name = `documents[${c}][path]`;
            element3.setAttribute("required", "true");
            element3.style.border = "none";
            cell3.appendChild(element3);

            c += 1;
        }

        function deleteRow1(tableID) {
            try {
                var table = document.getElementById("dataTableFacilities1");
                var rowCount = table.rows.length;

                for (var i = 0; i < rowCount; i++) {
                    var row = table.rows[i];
                    var chkbox1 = row.cells[0].childNodes[0];
                    if (null != chkbox1 && true == chkbox1.checked) {
                        table.deleteRow(i);
                        rowCount--;
                        i--;
                    }


                }
            } catch (e) {
                alert(e);
            }
        }

    </SCRIPT>
    <script>
        window.onload = function(e) {
            displayTypes();
        }

        function displayTypes() {
            try {
                document.querySelector('.active-category').classList.add('d-none')
                document.querySelector('.active-category').setAttribute("disabled", "disabled");
                document.querySelector('.active-category').classList.remove('active-category')
            } catch (error) {
                console.warn(error)
            }

            let categoryClass = document.querySelector('#accountCategory').value
            document.querySelector(`#category${categoryClass}`).classList.remove('d-none')
            document.querySelector(`#category${categoryClass}`).removeAttribute("disabled")
            document.querySelector(`#category${categoryClass}`).classList.add('active-category')
        }

    </script>



@endsection

@section('modals')
@endsection

@section('pagejs')
@endsection

