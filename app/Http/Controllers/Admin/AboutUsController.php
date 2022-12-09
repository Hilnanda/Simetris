<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us = AboutUs::first();
        
        return view('admin.pages.home-about_us', compact('about_us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input['about_us_image'] = time() . '.' . $request->about_us_image->getClientOriginalExtension();
        $request->about_us_image->move(public_path('image/about_us/'), $input['about_us_image']);
        $input['about_us_desc'] = $request->about_us_desc;
        AboutUs::create($input);
        return back()->with('Success', 'Successfully added data!');
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
        $about_us = AboutUs::find($id);
        return view('admin.pages.edit-about_us', compact('about_us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $about_us = AboutUs::find($request->id);

        if ($request->about_us_image != '') {
            $path = public_path() . '/image/about_us/';

            //code for remove old file
            if ($about_us->about_us_image != ''  && $about_us->about_us_image != null) {
                $file_old = $path . $about_us->about_us_image;
                unlink($file_old);
            }

            //upload new file
            $file = $request->about_us_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['about_us_image'] = $filename;
            $input['about_us_desc'] = $request->about_us_desc;
            $about_us->update($input);
        } else {
            $about_us->update($request->all());
        }


        return redirect('../home-about_us')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AboutUs::find($id)->delete();

        return back()->with('Success', 'Successfully delete data!');
    }
}
