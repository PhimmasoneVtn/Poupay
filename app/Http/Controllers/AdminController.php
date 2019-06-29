<?php

namespace App\Http\Controllers;

use App\Postjob;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view ('admin.dashboard');
    }
    public function AddJob(){
        return view('admin.job.add');
    }
    public function Postjob(Request $request){
        $this->validate($request, [
            'title'=>'required',
            'company_name'=>'required',
            'location'=>'required',
            'logo'=>'required',
            'description'=>'required'
        ]);
        $file =$request->file('logo');
        $fileExtra = strtolower($file->getClientOriginalExtension());
        $imagOriginalName = $file->getClientOriginalExtension();
        $logo_name = md5($imagOriginalName).microtime().'_upload'.$fileExtra;
        $location = public_path('/upload');
        $file->move($location,$logo_name);

        $save = new Postjob;
        $save->title = $request->title;
        $save->company_name = $request->company_name;
        $save->location = $request->location;
        $save->logo = $logo_name;
        $save->description = $request->description;
        $save->save();

        return back();
    }
}
