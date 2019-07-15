<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipekamar;
use App\Http\Requests;
use App\Http\Requests\TipekamarRequest;
use Session;
use App\Helpers\Log;
use Auth;


class TipekamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipekamar_list = Tipekamar::all();
        return view('back-end/tipekamar/index', compact('tipekamar_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.tipekamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipekamarRequest $request)
    {
        Tipekamar::create($request->all());
        Session::flash('flash_message', 'Data tipekamar berhasil disimpan');
        return redirect('tipekamar');
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
    public function edit(Tipekamar $tipekamar)
    {
        return view('back-end.tipekamar.edit', compact('tipekamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tipekamar $tipekamar, TipekamarRequest $request)
    {
        $tipekamar->update($request->all());
        Session::flash('flash_message', 'Data tipekamar Berhasil Diupdate');
        return redirect('tipekamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipekamar $tipekamar)
    {
        $tipekamar->delete();
        Session::flash('flash_message', 'Data tipekamar berhasil dihapus');
        return redirect('tipekamar');
    }
}
