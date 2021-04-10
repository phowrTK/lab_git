<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\level;
use App\category;
use App\course;
use App\comment;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    function __construct()
    {
        $category = category::all();
        view()->share('category',$category);

        if(Auth::check())
        {
            view()->share('nguoidung',Auth::user());
        }


    }
    function index2()
    {
        return view('User.index2');
    }
    function courses1()
    {
        return view('User.courses1');
    }
    function logincourses1(Request $request)
    {
        $this->validate($request,
        ['email' => 'required',
        'password' => 'required|min:2|max:100',
        ],
        ['email.required' => 'Bạn chưa nhập email',
        'password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::User()->level==1)
            {
                return redirect('admin/index');
            }
            else
            {
                return redirect('user/index2');
            }
        }
        else
        {
            return redirect('admin/login')->with('thongbao', 'Đăng nhập không thành công');
        }

    }


    function level($idlevel)
    {
        $level = level::find($idlevel);
        $course = course::where('idlevel',$idlevel)->paginate(9);

        return view('User.level',['level' => $level, 'course' => $course]);
    }
    function loginlevel(Request $request)
    {
        $this->validate($request,
        ['email' => 'required',
        'password' => 'required|min:2|max:100',
        ],
        ['email.required' => 'Bạn chưa nhập email',
        'password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::User()->level==1)
            {
                return redirect('admin/index');
            }
            else
            {
                return redirect('user/index2');
            }
        }
        else
        {
            return redirect('user/index2')->with('thongbao', 'Đăng nhập không thành công');
        }

    }




    function coursesdetail($idkh)
    {
        $course = course::find($idkh);
        $courselienquan = course::where('idlevel',$course->idlevel)->take(3)->get();
        return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan]);
    }
    function logincoursesdetail(Request $request)
    {
        $this->validate($request,
        ['email' => 'required',
        'password' => 'required|min:2|max:100',
        ],
        ['email.required' => 'Bạn chưa nhập email',
        'password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::User()->level==1)
            {
                return redirect('admin/index');
            }
            else
            {
                return redirect('user/index2');
            }
        }
        else
        {
            return redirect('user/index2')->with('thongbao', 'Đăng nhập không thành công');
        }

    }




    function allcourse()
    {

        $course = course::all();


        // $category = category::find($idcategory);
        // //$course = course::where('idcategory',$idcategory)->paginate(6);
        // $course = DB::table('course')
        // ->where('level->category->idcategory', '$idcategory')
        // ->get();
        return view('User.allcourse',['course' => $course]);
        //return view('User.category');
    }


}
