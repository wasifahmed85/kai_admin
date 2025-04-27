<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('backend.admin.dashboard');
    }
    public function home(){
        return view('backend.admin.pages.home');
    }
    public function about(){
        return view('backend.admin.pages.about');
    }
}
