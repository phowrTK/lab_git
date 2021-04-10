@extends('User.header2')
@section('content2')
</header>
<!-- Header Area End Here -->
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Personal Account</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Account</li>
            </ul>
        </div>
    </div>
</div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Account Page Start Here -->
        <div class="section-space accent-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <ul class="profile-title">
                            <li class="active"><a href="#Personal" data-toggle="tab" aria-expanded="false">Profile</a></li>
                            <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Courses</a></li>
                            <li><a href="#Badges" data-toggle="tab" aria-expanded="false">Orders</a></li>
                            <li><a href="#E-mail" data-toggle="tab" aria-expanded="false">Wishlist</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <form class="form-horizontal" id="checkout-form">
                            <div class="profile-details tab-content">
                                <div class="tab-pane fade active in" id="Personal">
                                    <h3 class="title-section title-bar-high mb-40">Personal Information</h3>
                                    <div class="personal-info">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Biographical Info</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="first-name" type="text" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="first-name" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="last-name" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nick Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="nick-name" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Display Name</label>
                                            <div class="col-sm-9">
                                                <div class="custom-select">
                                                    <select id="country" class='select2'>
                                                        <option value="0">Name 1</option>
                                                        <option value="1">Name 2</option>
                                                        <option value="2">Name 3</option>
                                                        <option value="3">Name 4</option>
                                                        <option value="4">Name 5</option>
                                                        <option value="5">Name 6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Avatar</label>
                                            <div class="col-sm-9 public-profile-content">
                                                <img class="img-responsive" src="img/team/12.jpg" alt="Avatar">
                                                <div class="file-title">Upload a new avatar:</div>
                                                <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                                <div class="file-size">JPEG 80x80px</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Change Password</label>
                                            <div class="col-sm-9">
                                                <input class="form-control mb-10" id="last-name" type="password" placeholder="Current Password">
                                                <input class="form-control mb-10" id="last-name" type="password" placeholder="New Password">
                                                <input class="form-control mb-10" id="last-name" type="password" placeholder="Repeat Password">
                                            </div>
                                        </div>
                                        <div class="form-group mb-none">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button class="view-all-accent-btn disabled col-sm-9" type="submit" value="Login">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Profile">
                                    <h3 class="title-section title-bar-high mb-40">Courses</h3>
                                    <div class="course-info">
                                        <img src="img/course/20.jpg" alt="course">
                                        <h3>This is a Paid course</h3>
                                        <div class="skill-area">
                                            <div class="progress">
                                                <div class="lead">90% Complete</div>
                                                <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="80%" class="progress-bar wow fadeInLeft  animated"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Badges">
                                    <h3 class="title-section title-bar-high mb-40">Orders</h3>
                                    <div class="orders-info">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
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
                                                        <th>#00024564875</th>
                                                        <td>August 22, 2017</td>
                                                        <td>Completed</td>
                                                        <td>$70.00</td>
                                                        <td>
                                                            <a href="#" title="view" class="btn-view">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>#00024562451</th>
                                                        <td>March 01, 2017</td>
                                                        <td>Completed</td>
                                                        <td>$90.00</td>
                                                        <td>
                                                            <a href="#" title="view" class="btn-view">View</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="E-mail">
                                    <h3 class="title-section title-bar-high mb-40">Wishlist</h3>
                                    <div class="wishlist-info">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Thumb</th>
                                                        <th>Name</th>
                                                        <th>Duration</th>
                                                        <th>Classes</th>
                                                        <th>Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><img src="img/course/24.jpg" alt="course" class="img-responsive"></th>
                                                        <td>Mathematics</td>
                                                        <td>7 Months</td>
                                                        <td>60</td>
                                                        <td>10 pm - 11 pm</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account Page End Here -->
@stop()