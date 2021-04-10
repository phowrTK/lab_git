<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use App\level;
use App\category;
use App\course;
use App\account;

class commentController extends Controller
{
    public function delete($idcomment, $idcourse)
    {
        $comment = comment::find($idcomment);
        $comment->delete();
        return redirect('admin/course/update/'.$idcourse)->with('thongbao', 'Delete comment thành công');
    }


}
