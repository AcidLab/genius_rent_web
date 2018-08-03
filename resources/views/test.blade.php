@extends('welcome')
@section('content')

    <div class="container-fluid">

        <!--Section: Inputs-->
        <div class="container-fluid mb-5">

            <!--Section: Basic examples-->
            <section>

                <div class="row">

                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <table id="datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>
                                            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                                                <!-- Dropdown -->


                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profil</span></a>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-center" aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#modalLRFormDemo"><i class="fa fa-plus"></i>&nbsp;add</a>
                                                        <a class="dropdown-item" ><i class="fa fa-remove"></i>&nbsp;delete</a>
                                                    </div>
                                                </li>

                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </section>
            <!--Section: Basic examples-->

        </div>

    </div>
    <div  class="modal fade" id="modalLRFormDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div  class="modal-dialog modal-lg cascading-modal modal-info" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel18" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel18" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel17" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel18" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel18" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 17-->
                        <div class="tab-pane fade in show active" id="panel17" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Your email</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form3" class="form-control">
                                    <label for="form3">Your password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 18-->
                        <div class="tab-pane fade" id="panel18" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body">
                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form14" class="form-control">
                                    <label for="form14">Your email</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form5" class="form-control">
                                    <label for="form5">Your password</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form6" class="form-control">
                                    <label for="form6">Repeat password</label>
                                </div>

                                <div class="text-center form-sm mt-2">
                                    <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
@endsection