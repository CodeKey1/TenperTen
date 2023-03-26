<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('Dashboard.dashboard');
    }
    public function login(){
        return view('Dashboard.login');
    }
    public function category(){
        return view('Dashboard.category.category');
    }
    public function list_category(){
        //return view('Dashboard.category.cat_list');
    }
    public function appointment_service(){
        return view('Dashboard.booking.appointment_service');
    }
    public function appointment_product(){
        return view('Dashboard.booking.appointment_product');
    }
    public function store(Request $request)
    {
        //

    }
}
