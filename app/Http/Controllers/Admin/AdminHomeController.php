<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Feature;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCarousel()
    {
        $carousel = Carousel::all();
        
        return view('admin.pages.home',compact('carousel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCarousel(Request $request)
    {
        $input['carousell_image'] = time() . '.' . $request->carousell_image->getClientOriginalExtension();
        $request->carousell_image->move(public_path('image/carousel/'), $input['carousell_image']);
        $input['carousell_title'] = $request->carousell_title;
        $input['carousell_desc'] = $request->carousell_desc;
        Carousel::create($input);
        return back()->with('Success', 'Successfully added data!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCarousel(Request $request)
    {
        $carousel = Carousel::find($request->id);

        if ($request->carousell_image != '') {
            $path = public_path() . '/image/carousel/';

            //code for remove old file
            if ($carousel->carousell_image != ''  && $carousel->carousell_image != null) {
                $file_old = $path . $carousel->carousell_image;
                unlink($file_old);
            }

            //upload new file
            $file = $request->carousell_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['carousell_image'] = $filename;
            $input['carousell_title'] = $request->carousell_title;
            $input['carousell_desc'] = $request->carousell_desc;
            $carousel->update($input);
        } else {
            $carousel->update($request->all());
        }


        return redirect('../home-admin')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCarousel($id)
    {
        Carousel::find($id)->delete();


        return back()->with('Success', 'Successfully delete data!');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editCarousel($id)
    {
        $carousel = Carousel::find($id);
        return view('admin.pages.edit-carousel',compact('carousel'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFeature()
    {
        $feature = Feature::all();
        return view('admin.pages.home-feature',compact('feature'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editFeature()
    {
        return view('admin.pages.edit-feature');
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
        //
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
    }
}
