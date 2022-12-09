<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        
        return view('admin.pages.home-team', compact('team'));
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
        $input['team_image'] = time() . '.' . $request->team_image->getClientOriginalExtension();
        $request->team_image->move(public_path('image/team/'), $input['team_image']);
        $input['team_name'] = $request->team_name;
        $input['team_posisi'] = $request->team_posisi;
        $input['team_desc'] = $request->team_desc;
        Team::create($input);
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
        $team = Team::find($id);
        return view('admin.pages.edit-team', compact('team'));
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
        $team = Team::find($request->id);

        if ($request->team_image != '') {
            $path = public_path() . '/image/team/';

            //code for remove old file
            if ($team->team_image != ''  && $team->team_image != null) {
                $file_old = $path . $team->team_image;
                unlink($file_old);
            }

            //upload new file
            $file = $request->team_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['team_image'] = $filename;
            $input['team_name'] = $request->team_name;
            $input['team_posisi'] = $request->team_posisi;
            $input['team_desc'] = $request->team_desc;
            $team->update($input);
        } else {
            $team->update($request->all());
        }


        return redirect('../home-team')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::find($id)->delete();

        return back()->with('Success', 'Successfully delete data!');
    }
}
