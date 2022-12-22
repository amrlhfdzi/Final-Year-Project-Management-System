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
        
        $member->id = $req->id;
        $member->title = $req->title;
       
        $member->student = $req->student;
        $member->supervisor = $req->supervisor;
        $member->examiner1 = $req->examiner1;
        $member->examiner2 = $req->examiner2;
      
        $member->save();

        return redirect('projects');

    }

    function showProj($title)
    {
        $set=Projek::find($title);

        return view('admin.updateData',['x'=>$set]);
    }

    function update(Request $req)
    {
        $datas=Projek::find($req->id);

        $datas->student=$req->student;
        $datas->supervisor=$req->supervisor;
        $datas->examiner1=$req->examiner1;
        $datas->examiner2=$req->examiner2;

        $datas->save();

        return redirect('view');
        
    }

    public function list()
    {
        return view("admin.listDisplay");
    }

    function projectList()
    {
        $value=Projek::all();
      return view('admin.listDisplay',['senarai'=>$value]);  
    }
    
}
