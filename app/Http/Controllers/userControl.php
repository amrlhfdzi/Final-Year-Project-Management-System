<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Projek;

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

    function showDet($id)
    {
        $data=Information::find($id);

        return view('updateDetails',['x'=>$data]);
    }

    function updates (Request $req)
    {
        $test =Information::find($req->id);
        
        $test->id = $req->id;
        $test->title = $req->title;
        $test->start = $req->start;
        $test->end = $req->end;
        $test->progress = $req->dropdown;
        $test->status = $req->dropdown2;
      
        $test->save();

        return redirect('views');

    }

    function projectInform()
    {
        $value=Information::all();
      return view('updateProject',['senarai'=>$value]);  
    }

    public function projectView()
    {
        $values=Projek::all();
      return view('viewProject',['senarais'=>$values]);
    }

    //
}
