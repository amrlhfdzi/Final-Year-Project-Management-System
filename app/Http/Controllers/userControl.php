<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class userControl extends Controller
{
    public function baru()
    {
        return view("updateProject");
    }

    public function latest()
    {
        return view("addDetails");
    }

    function addDet (Request $req)
    {
        $member = new Information;
        
        $member->id = $req->id;
        $member->title = $req->title;
        $member->start = $req->start;
        $member->end = $req->end;
        $member->progress = $req->dropdown;
        $member->status = $req->dropdown2;
      
        $member->save();

        return redirect('details');

    }
    //
}
