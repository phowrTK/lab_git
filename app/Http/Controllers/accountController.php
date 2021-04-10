<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\level;
use App\category;
use App\course;
use App\comment;
use App\account;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\User;



class accountController extends Controller
{
    public function listall()
    {
        $account = account::all();
        return view('Admin.account.account_list',['account' => $account]);
    }



    public function create()
    {

        return view('Admin.account.account_create');
    }
    public function postcreate(Request $request)
    {

        $this->validate($request,
        ['name' => 'required|min:2|max:100',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:2|max:100',
        'againpassword' => 'required|same:password'
        ],
        ['name.required' => 'Bạn chưa nhập tên account','name.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','name.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự',
        'email.required' => 'Bạn chưa nhập email','email.email' => 'Bạn chưa nhập đúng định dạng email','email.unique' => 'email đã tồn tại',
        'password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự',
        'againpassword.required' => 'Bạn chưa nhập lại password','againpassword.same' => 'password nhập lại chưa khớp'
        ]
                        );
        $account = new account();
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = bcrypt($request->password);
        $account->save();
        return redirect('admin/account/create')->with('thongbao', 'Thêm thành công');
    }



    public function update($idaccount)
    {

        $account = account::find($idaccount);
        return view('Admin.account.account_update',['account'=>$account]);

    }
    public function postupdate(Request $request,$idaccount)
    {
        $this->validate($request,
        ['name' => 'required|min:2|max:100',


        ],
        ['name.required' => 'Bạn chưa nhập tên account','name.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','name.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự',


        ]
                        );
        $account = account::find($idaccount);
        $account->name = $request->name;

        if($request->changepassword == "on")
        {
            $this->validate($request,
                [
                'password' => 'required|min:2|max:100',
                'againpassword' => 'required|same:password'
                ],
                ['password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự',
                'againpassword.required' => 'Bạn chưa nhập lại password','againpassword.same' => 'password nhập lại chưa khớp'
                ]
                 );
            $account->password = bcrypt($request->password);
        }

        $account->save();
        return redirect('admin/account/update/'.$idaccount)->with('thongbao', 'Update thành công');
    }



    public function delete($idaccount)
    {
        $account = account::find($idaccount);
        $account->delete();
        return redirect('admin/account/listall')->with('thongbao', 'Delete thành công');
    }


    public function login()
    {
        return view('admin.login_admin');
    }
    public function postlogin(Request $request)
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

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function loginuser()
    {
        return view('user.login_admin');
    }
    public function postloginuser(Request $request)
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

                return redirect('user/index2');

        }
        else
        {
            return redirect('user/login')->with('thongbao', 'Đăng nhập không thành công');
        }


    }

}
