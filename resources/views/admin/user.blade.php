@extends('admin_layout')
@section('title','User')

@section('mobileView')
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner make-center">
                <div id="logoId">
                    <a class="logo" href="index.html">
                        <img src="{{asset('admin/dash/images/f2g.png')}}" alt="Food2Go" />
                    </a>
                </div>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <li class="active has-sub">
                        <a class="js-arrow" href="{{URL::to('/dashboard')}} ">
                                <i class="fas fa-tachometer-alt"></i>All Categories</a>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-list-alt"></i>Category</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href={{URL::to('/all-category')}}>All Categories</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Categories</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-hamburger"></i>Food Items</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">All Foods</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Food Items</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cart-arrow-down"></i>Orders</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">All Orders</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Orders</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Users</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">All Users</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Orders</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
@endsection


@section('table')

<div class="row" style="padding-top:20px;padding-left:88%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#useraddModal">
    Add New User
    </button>
</div>
<div class="row">
    <div class="datatable">
         <div class="table-responsive table--no-card m-b-40">
             <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                    <tbody>
                     @foreach($result as $u)
                    <tr>
                        <td>{{$u->adm_id}}</td>
                        <td>{{$u->first_name}}</td>
                        <td>{{$u->last_name}}</td>
                        <td>{{$u->username}}</td>
                        <td>{{$u->email}}</td>
                        <td>
                        <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>

                <!-- Button trigger modal -->
                <div> </div>


<!-- Modal -->
<div class="modal fade" id="useraddModal" tabindex="-1" role="dialog" aria-labelledby="useraddModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="useraddModal">Create New USer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{'userController@add_User'}}" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputFirstname">First Name</label>
                    <input type="text" class="form-control" id="inputfirstname">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputLastname">Last Name</label>
                    <input type="text" class="form-control" id="inputlastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputaddress" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control" id="inputemail" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputUsername">User Name</label>
                    <input type="text" class="form-control" id="inputusername">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>


                <div class="form-group">
                    <label for="inputConfirmpassword">Re-Enter Password</label>
                    <input type="password" class="form-control" id="confirmpassword">
                </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection