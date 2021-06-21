<?php

namespace App\Http\Controllers;

use App\Diving;
use App\Clef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class ClefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clefs = Clef::get();
        return view('Clef/list', ['clefs' => $clefs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clef/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clef = Clef::find($id);
        return view('Clef/update', ['clef' => $clef]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clef = Clef::find($id);
        $clefData = array(
            'positions' => $request->input('positions'),
            'a_with_16th' => $request->input('a_with_16th'),
        );
        $clef->update($clefData);

        return redirect('/clefs')->with('info', 'Clef saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $clef = Clef::find($id);
        $clef->diving()->detach();
        $clef->waterslide()->detach();
        $clef->feature()->detach();
        $clef->delete();
        return redirect('/admin/clef')->with('info', 'Clef deleted!');
    }
    public function getClefsData()
    {
        return Clef::all();
//        dd($request);
    }
}
