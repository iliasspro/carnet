<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Pisserie;

class PisserieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pisseries = Pisserie::All();

        return $pisseries;
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
        $request->validate([
            'nom'=>'required',
            'tel'=>'required',
            'picture'=>'required',
            'codeGroup' =>'required',
            'dateConnexion' => 'required',
            'activation' => 'required',
            'type' => 'required'
        ]);

        $pisserie = new Pisserie([
            'nom' => $request->get('nom'),
            'tel' => $request->get('tel'),
            'picture' => $request->get('picture'),
            'codeGroup' => $request->get('codeGroup'),
            'dateConnexion' => $request->get('dateConnexion'),
            'activation' => $request->get('activation'),
            'type' => $request->get('type')
        ]);
        $pisserie->save();
        return 'success';
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
