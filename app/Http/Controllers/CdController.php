<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public static function index()
    {
        //
        $cds = Cd::all();
        return view('indexCd')->with('cds', $cds);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public static function store(Request $request)
    {
        //
        $cds = new Cd();
        $cds->cdTitle = $request['title'];
        $cds->cdFirstName = $request['firstname'];
        $cds->cdMainName = $request['mainname'];
        $cds->cdPrice = $request['price'];
        $cds->cdPlayLength = $request['numpages'];


        $cds->save();
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public static function show(Cd $cd)
    {
        //

        return view('cdShow', compact('cd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function edit(Cd $cd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cd $cd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cd $cd)
    {
        //
    }
}
