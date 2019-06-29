<?php

namespace App\Http\Controllers;
use App\PostJob;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $jobs = PostJob::all();
        return view('pages.home',compact('jobs'));
    }
    public function blog(){
        return view('pages.blog');
    }
    public function jobdetail($id){
        $jobdetail = PostJob::find($id);
        return view('pages.jobdetail',compact('jobdetail'));
    }
}
