<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\level;
use App\category;
use App\course;


class ajaxController extends Controller
{
    public function getlevel($idcategory)
    {

        $level = level::where('idcategory', $idcategory)->get();
        foreach($level as $lv){

            echo "<option value='".$lv->idlevel."'>".$lv->namelevel."</option>";

        }

    }
}
?>
