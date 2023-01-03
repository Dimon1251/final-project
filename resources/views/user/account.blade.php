@extends('user.parts.layout')

@section('title')
    Account
@endsection

@section('content')

        <!--== Start My Account Area Wrapper ==-->
        <section class="my-account-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="my-account-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="dashboad-tab" data-bs-toggle="tab" data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad" aria-selected="true">Dashboard</button>
                            <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false"> Orders</button>
                            <button class="nav-link" id="account-info-tab" data-bs-toggle="tab" data-bs-target="#account-info" type="button" role="tab" aria-controls="account-info" aria-selected="false">Account Details</button>
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel" aria-labelledby="dashboad-tab">
                                <div class="myaccount-content">
                                    <h3>Dashboard</h3>
                                    <img src="{{ Storage::url('users/'.$user->id.'/avatar.jpg') }}" alt="avatar">
                                    <div class="welcome">
                                        <p>Hello, <strong>{{$user->name}}</strong></p>
                                    </div>
                                    <p>From your account dashboard. you can easily check & view your recent orders and edit your password and account details.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="myaccount-content">
                                    <h3>Orders</h3>
                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Aug 22, 2018</td>
                                                <td>Pending</td>
                                                <td>$3000</td>
                                                <td><a href="shop-cart.html" class="check-btn sqr-btn ">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>July 22, 2018</td>
                                                <td>Approved</td>
                                                <td>$200</td>
                                                <td><a href="shop-cart.html" class="check-btn sqr-btn ">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>June 12, 2017</td>
                                                <td>On Hold</td>
                                                <td>$990</td>
                                                <td><a href="shop-cart.html" class="check-btn sqr-btn ">View</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                                <div class="myaccount-content">
                                    <h3>Account Details</h3>
                                    <div class="account-details-form">
                                        <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="single-input-item">
                                                <label for="display-name" class="required">Display Name</label>
                                                <input type="text" name="name" id="display-name" value="{{$user->name}}" />
                                            </div>
                                            <div class="single-input-item">
                                                <label for="email" class="required">Email Addres</label>
                                                <input type="email" name="email" id="email" value="{{$user->email}}"/>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="email" class="required">Avatar</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>

                                            <fieldset>
                                                <legend>Password change</legend>
                                                <div class="single-input-item">
                                                    <label for="current-pwd" class="required">Current Password</label>
                                                    <input type="password" name="oldpassword" id="current-pwd" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="new-pwd" class="required">New Password</label>
                                                            <input type="password" name="password1" id="new-pwd" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="confirm-pwd" class="required">Confirm Password</label>
                                                            <input type="password" name="password2" id="confirm-pwd" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="single-input-item">
                                                <button type = "submit" class="check-btn sqr-btn">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
