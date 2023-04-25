<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Category_Service;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::select()->get();
        return view('Dashboard.category.cat_list',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::select()->get();
        return view('Dashboard.category.category',compact('category'));

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
        if($request->has('photo')){
            $image = $request->file('photo');
            $imageName = time().'-image-'.time().rand(1,1000).'.'.$image->extension();
            $image->move(public_path('cat-img'),$imageName);

        }
        try
        {
            $new_advertising = Category::create(([

                'name' => $request['name'],
                'state' => $request['state'],
                'photo' =>$imageName


            ]));


            return redirect()->route('category') -> with(['success' => 'تم التسجيل بنجاح']);

        }
        catch(\Exception $ex)
        {
            return redirect()->route('category') -> with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
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

        $Category_sevices = Category_Service::where('categorys_id',$id)->delete('categorys_id');
        $Category = Category::with('services_cat')->find($id);
        $Category->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }
}
