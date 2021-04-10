@extends('User.header4')
@section('content2')
        </header>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('User/img/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>{{ $course->namekh }}</h1>
                    <ul>
                        <li><a href="#">{{ $course->level->namelevel }} -</a>
                        <li> {{ $course->namekh }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 3 Area Start Here -->
        <div class="courses-page-area3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img style="width:900px;height: 500px" src="Admin/update/{{ $course->hinh }}" class="img-responsive" alt="course">
                                <div class="course-details-inner">
                                    <h3 class="title-default-left title-bar-high"> {!! $course->tomtac !!}</h3>
                                    <p>{!! $course->noidung !!}</p>
                                    <h4 class="sidebar-title">Chi tiết tin</h4>
                                    <ul class="course-feature">
                                        <li>Thời gian đăng: {{ $course->created_at }}</li>
                                        <li>Thời gian cập nhật: {{ $course->updated_at }}</li>
                                        <li>Số lượt xem: {{ $course->soluotxem }}</li>

                                    </ul>
                                </div>


                                <div class="section-divider"></div>
                                <div class="course-details-inner">
                                    <div class="course-details-comments">
                                        <h3 class="sidebar-title">Student Reviews</h3>
                                        @foreach($course->comment as $cm)


                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img alt="Comments" src="img/course/16.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <h3>{{ $cm->account->name }}</h3>
                                                <h4>{{ $cm->created_at }}</h4>
                                                <p>{{ $cm->content }}</p>
                                                <div class="replay-area">
                                                    <ul>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>


                                    @if(!isset($nguoidung))
                                    <div class="leave-comments">
                                        <h3 class="sidebar-title">Leave A Comment</h3>
                                        <div class="row">
                                            <div class="contact-form" id="review-form">
                                                <form>
                                                    <fieldset>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Name" class="form-control">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="email" placeholder="Email" class="form-control">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="rate-wrapper">
                                                                    <div class="rate-label">Your Rating:</div>
                                                                    <div class="rate">
                                                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endif



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Course Price</h3>
                                    <div class="sidebar-course-price">
                                        <span>FREE</span>
                                        <a href="#" class="enroll-btn">Enroll THis Course</a>
                                        <a href="#" class="download-btn">Download PDF</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Course Reviews</h3>
                                    <div class="sidebar-course-reviews">
                                        <h4>Average Rating<span>4.8</span></h4>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                        </ul>
                                        <div class="skill-area">
                                            <div class="progress">
                                                <div class="lead">5 Stars </div>
                                                <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 100%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="100%" class="progress-bar wow fadeInLeft  animated"></div><span>10</span>
                                            </div>
                                            <div class="progress">
                                                <div class="lead">4 Stars</div>
                                                <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="80%" class="progress-bar wow fadeInLeft  animated"></div><span>6</span>
                                            </div>
                                            <div class="progress">
                                                <div class="lead">3 Stars</div>
                                                <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 60%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="60%" class="progress-bar wow fadeInLeft  animated"></div><span>3</span>
                                            </div>
                                            <div class="progress">
                                                <div class="lead">2 Stars</div>
                                                <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 0%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="0%" class="progress-bar wow fadeInLeft  animated"></div><span>0</span>
                                            </div>
                                            <div class="progress">
                                                <div class="lead">1 Stars</div>
                                                <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 0%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="0%" class="progress-bar wow fadeInLeft  animated"></div><span>0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Bài viết liên quan</h3>
                                    <div class="sidebar-skilled-area">
                                        <ul>
                                            @foreach($courselienquan as $lq)


                                            <li>
                                                <div class="skilled-img">
                                                    <a href="user/course/{{ $lq->idkh }}"><img style="max-width:120px;height: 50px" src="Admin/update/{{ $lq->hinh }}" class="img-responsive" alt="skilled"></a>
                                                </div>
                                                <div class="skilled-content">
                                                    <h4><a href="user/course/{{ $lq->idkh }}">{{ $lq->namekh }}</a></h4>
                                                    <p>{!! $lq->tomtac !!}</p>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Related Courses</h3>
                                    <div class="sidebar-related-area">
                                        <ul>
                                            <li>
                                                <div class="related-img">
                                                    <a href="#"><img src="User/img/sidebar/4.jpg" class="img-responsive" alt="related"></a>
                                                </div>
                                                <div class="related-content">
                                                    <h4><a href="#">GMAT Class</a></h4>
                                                    <p>$159</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="related-img">
                                                    <a href="#"><img src="User/img/sidebar/5.jpg" class="img-responsive" alt="related"></a>
                                                </div>
                                                <div class="related-content">
                                                    <h4><a href="#">IELTS Class</a></h4>
                                                    <p>$200</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="related-img">
                                                    <a href="#"><img src="User/img/sidebar/6.jpg" class="img-responsive" alt="related"></a>
                                                </div>
                                                <div class="related-content">
                                                    <h4><a href="#">Joomla Class</a></h4>
                                                    <p>$120</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="related-img">
                                                    <a href="#"><img src="User/img/sidebar/7.jpg" class="img-responsive" alt="related"></a>
                                                </div>
                                                <div class="related-content">
                                                    <h4><a href="#">Graphic Desing</a></h4>
                                                    <p>$300</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Asked Any Question?</h3>
                                    <div class="sidebar-question-form">
                                        <form id="question-form">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea placeholder="Message*" class="textarea form-control" name="message" id="sidebar-form-message" rows="3" cols="20" data-error="Message field is required" required></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="default-full-width-btn">Send</button>
                                                </div>
                                                <div class='form-response'></div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 3 Area End Here -->
@stop()
