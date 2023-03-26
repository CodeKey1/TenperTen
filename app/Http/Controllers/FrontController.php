<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Dashboard\ServiceController as ServiceController;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Str;
use Illuminate\Support\Facades\Session;
class FrontController extends Controller
{
    //
    public function front(){
        $services = Service::select()->with('service_cat')->get();
        $category = Category::select()->get();
        return view('Front.welcome',compact('services','category'));
    }
    public function index(){

        return view('Front.home-shop');
    }
    public function about(){
        return view('Front.aboutus');
    }
    public function services($id,$name){
        $services = Service::select()->find($id);
        $date = Session::has('date') ? Session::get('date') : Carbon::now(env('timezone'))->format('Y-m-d');
        $timeslots = (new ServiceController)->timeSlot($services->id,$date);
        $today_timeslots = (new ServiceController)->timeSlot($id,Carbon::today(env('timezone'))->format('Y-m-d'));
        $tomorrow_timeslots = (new ServiceController)->timeSlot($id,Carbon::tomorrow()->format('Y-m-d'));
        return view('Front.services',compact('services','date','timeslots','today_timeslots','tomorrow_timeslots'));
    }
    public function set_time(Request $request)
    {
        Session::put('date',$request->date);
        Session::put('time',$request->time);
        Session::put('provider_id',$request->provider_id);
        $services = Service::find($request->provider_id);
        return view('Front.services'.$services->id.''::slug($services->name));
    }
    public function service_list(){
        return view('Front.booking.service_list');
    }
    public function service_profile(){
        return view('Front.booking.service-profile');
    }
}
