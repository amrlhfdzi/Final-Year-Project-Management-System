<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projek;

class adminControl extends Controller
{
    public function project()
    {
        return view("admin.projects");
    }

    function addData (Request $req)
    {
        $member = new Projek;
        
        $member->title = $req->title;
        $member->duration = $req->duration;
        $member->save();

        return redirect('projects');

    }
    //
}
