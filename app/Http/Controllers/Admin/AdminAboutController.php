<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BaseAdminController;
use DB;
use App\Http\Requests;
use App\About;
use App\SecondAbout;
use Image;


class AdminAboutController extends BaseAdminController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCreate()
    {


        $about = DB::table('abouts')->first();
        $secondAbout = DB::table('second_abouts')->first();
        
        return view('admin.about.create', compact('about', 'secondAbout'));
        
    }

    public function indexEdit(){

        $about = DB::table('abouts')->first();
        $secondAbout = DB::table('second_abouts')->first();

        return view('admin.about.edit', compact('about', 'secondAbout'));
    }

    public function create(Request $request ){
        $about = new About();

        $about->title = $request->title;
        $about->description = $request->description;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->save($location);

            $about->image = $filename;
        }


        $about->save();

        return redirect()->route('about.create');

    }

    public function createSecond(Request $request){

        $secondAbout = new SecondAbout();

        $secondAbout->titleSecond = $request->titleSecond;
        $secondAbout->descriptionSecond = $request->descriptionSecond;
        if($request->hasFile('imageSecond')){
            $image = $request->file('imageSecond');
            $filename = time() . 'sec.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->save($location);

            $secondAbout->imageSecond = $filename;
        }

        $secondAbout->save();

        return redirect()->route('about.create');
    }

    public function edit(Request $request ){



    }

    public function editSecond(Request $request ){



    }

    public function deleteShortAbout(){

        $about = DB::table('abouts')->first();
        $about->delete();

        $secondAbout = DB::table('second_abouts')->first();

        return view('admin.about.edit', compact('secondAbout'));



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

    
}
