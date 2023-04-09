<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\WorkingHour;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::select()->with('service_cat')->get();
        return view('Dashboard.services.service_list',compact('services'));
    }

    public function service()
    {
        //
        $category = Category::select()->get();
        return view('Dashboard.services.create',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //


            $services =  Service::create(([

                'name' => $request['name'],
                'categorys_id' => $request['categorys_id'],
                'state' => $request['state'],
                'start_time' => $request['start_time'],
                'end_time' => $request['end_time'],
                'timeslot' => $request['timeslot'],

            ]));
        $start_time = strtolower($services->start_time);
        $end_time = strtolower($services->end_time);
        $days = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        for($i = 0; $i < count($days); $i++)
        {
            $master = array();
            $temp2['start_time'] = $start_time;
            $temp2['end_time'] = $end_time;
            array_push($master,$temp2);
            $work_time['provider_id'] = $services->id;
            $work_time['period_list'] = json_encode($master);
            $work_time['day_index'] = $days[$i];
            $work_time['status'] = 1;
            WorkingHour::create($work_time);
        }


            return redirect()->route('service_add') -> with(['success' => 'تم التسجيل بنجاح']);

        }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function timeslot($provider_id,$date)
    {
        $services = Service::find($provider_id);
        $workingHours = WorkingHour::where('provider_id',$services->id)->get();
        $master = [];
        $timeslot = $services->timeslot == 'other' ? $services->custom_timeslot : $services->timeslot;
        $dayname = Carbon::parse($date)->format('l');
        foreach ($workingHours as $hours)
        {
            if($hours->day_index == $dayname)
            {
                if($hours->status == 1)
                {
                    foreach (json_decode($hours->period_list) as $value)
                    {
                        $start_time = new Carbon($date . ' ' . $value->start_time);
                        if ($date == Carbon::now(env('timezone'))->format('Y-m-d')) {
                            $t = Carbon::now(env('timezone'));
                            $minutes = date('i', strtotime($t));
                            if ($minutes <= 30) {
                                $add = 30 - $minutes;
                            } else {
                                $add = 60 - $minutes;
                            }
                            $add += 60;
                            $d = $t->addMinutes($add)->format('h:i a');
                            $start_time = new Carbon($date . ' ' . $d);
                        }
                        $end_time = new Carbon($date . ' ' . $value->end_time);
                        $diff_in_minutes = $start_time->diffInMinutes($end_time);
                        for ($i = 0; $i <= $diff_in_minutes; $i += intval($timeslot))
                        {
                            if ($start_time >= $end_time)
                            {
                                break;
                            }
                            else
                            {
                                $temp['start_time'] = $start_time->format('h:i a');
                                $temp['end_time'] = $start_time->addMinutes($timeslot)->format('h:i a');
                                $time = strval($temp['start_time']);

                            }
                        }
                    }
                }
            }
        }
        return $master;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $services =  Service::with('service_cat')->find($id);
        $services->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }
}
