<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="header-top-left">
                <ul>
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> + 123 456 78910 </a></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@academics.com</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="header-top-right">
                <ul>
                    <li>




                            @if (session('thongbao'))
                                <div class="alert alert-success">
                                    {{ session('thongbao') }}
                                </div>
                            @endif
                        <a class="login-btn-area" href="#" id="login-button"><i class="fa fa-lock" aria-hidden="true"></i> Login</a>
                        <div class="login-form" id="login-form" style="display: none;">
                            <div class="title-default-left-bold">Login</div>
                            <form class="login100-form validate-form" role="form" action="{{asset('admin/login')}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                @csrf
                                <label>Username or email address *</label>
                                <input type="text" name="email" placeholder="Name or E-mail" />
                                <label>Password *</label>
                                <input type="password" name="password" placeholder="Password" />
                                <label class="check">Lost your password?</label>
                                <span><input type="checkbox" name="remember"/>Remember Me</span>
                                <button class="default-big-btn" type="submit" value="Login">Login</button>
                                <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="apply-btn-area">
                            <a href="#" class="apply-now-btn">Apply Now</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
