<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryPortofolio;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_portofolio = CategoryPortofolio::all();
        $portofolio = Portofolio::all();
        // dd($portofolio);
        
        return view('admin.pages.home-portofolio',compact('portofolio','category_portofolio'));
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
        $input['portofolio_image'] = time() . '.' . $request->portofolio_image->getClientOriginalExtension();
        $request->portofolio_image->move(public_path('image/portofolio/'), $input['portofolio_image']);
        $input['portofolio_title'] = $request->portofolio_title;
        $input['portofolio_category_id'] = $request->portofolio_category_id;
        $input['portofolio_desc'] = $request->portofolio_desc;
        Portofolio::create($input);
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
        $portofolio = Portofolio::find($id);
        $category_portofolio = CategoryPortofolio::all();
        
        return view('admin.pages.edit-portofolio',compact('portofolio','category_portofolio'));
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
        $portofolio = Portofolio::find($request->id);

        if ($request->portofolio_image != '') {
            $path = public_path() . '/image/portofolio/';

            //code for remove old file
            if ($portofolio->portofolio_image != ''  && $portofolio->portofolio_image != null) {
                $file_old = $path . $portofolio->portofolio_image;
                unlink($file_old);
            }

            //upload new file
            $file = $request->portofolio_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['portofolio_image'] = $filename;
            $input['portofolio_title'] = $request->portofolio_title;
            $input['portofolio_desc'] = $request->portofolio_desc;
            $portofolio->update($input);
        } else {
            $portofolio->update($request->all());
        }


        return redirect('../home-portofolio')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portofolio::find($id)->delete();

        return back()->with('Success', 'Successfully delete data!');
    }
}
