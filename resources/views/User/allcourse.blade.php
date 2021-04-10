@extends('User.header3')
@section('content2')
        </header>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('User/img/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>ALL COURSE</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Courses</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 2 Area Start Here -->
        <div class="courses-page-area2">
            <div class="container" id="inner-isotope">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="isotop-classes-tab isotop-btn">
                            <a href="#" data-filter="*" class="current">All</a>
                            @foreach($category as $ca)
                                <a href="#" data-filter=".diploma">{{ $ca->namecategory }}</a>
                            @endforeach



                        </div>
                    </div>
                </div>
                <div class="row featuredContainer">
                    @foreach($course as $kh)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse english">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img style="width:250px;height: 200px" class="img-responsive" src="Admin/update/{{ $kh->hinh }}" alt="courses">
                                    <a href="user/course/{{ $kh->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="user/course/{{ $kh->idkh }}">{{ $kh->namekh }}</a></h3>
                                    <p class="item-content">{!! $kh->tomtac !!}</p>
                                    <ul class="courses-info">
                                        <li>Ngày đăng bài
                                            <br><span> {{ $kh->created_at }}</span></li>
                                        <li>Số lượt xem
                                            <br><span> {{ $kh->soluotxem }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach






                </div>

            </div>
        </div>

        <!-- Courses Page 2 Area End Here -->
@stop()
