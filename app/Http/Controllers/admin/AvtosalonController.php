<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Avtosalon;
use Illuminate\Http\Request;

class AvtosalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Avtosalon::all();
        return view('admin.avtosalon.avtosalon',[
            'datalist'=>$datalist,
            'breadcrumb'=>'Avtosalon',
        ]);
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
     * @param  \App\Models\Avtosalon  $avtosalon
     * @return \Illuminate\Http\Response
     */
    public function show(Avtosalon $avtosalon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avtosalon  $avtosalon
     * @return \Illuminate\Http\Response
     */
    public function edit(Avtosalon $avtosalon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avtosalon  $avtosalon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avtosalon $avtosalon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avtosalon  $avtosalon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avtosalon $avtosalon)
    {
        //
    }
}
