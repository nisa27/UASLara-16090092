<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fasilitas;
use App\Http\Requests;
use App\Http\Requests\FasilitasRequest;
use Session;
use App\Helpers\Log;
use Auth;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas_list = Fasilitas::all();
        return view('back-end/fasilitas/index', compact('fasilitas_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FasilitasRequest $request)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'create fasilitas');
        $input = $request->all();
        if($request->hasFile('foto')){
                $input['foto'] = $this->uploadFoto($request);
        }
        $fasilitas = Fasilitas::create($input);
        Session::flash('flash_message', 'Data fasilitas berhasil disimpan');
        return redirect('fasilitas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas= Fasilitas::findOrFail($id);
        return view('back-end.fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, FasilitasRequest $request)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'update fasilitas');
        if($request->hasFile('foto')){
                $input['foto'] = $this->uploadFoto($request);
        }
        $fasilitas= Fasilitas::findOrFail($id);   
        $fasilitas->update($request->all());
        Session::flash('flash_message', 'Data fasilitas Berhasil Diupdate');
        return redirect('fasilitas');   
    }

    public function uploadFoto(FasilitasRequest $request)
    {
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();
        if($request->file('foto')->isValid()){
                $foto_name = 'fotoupload/'.date('YmdHis').".$ext";
                $upload_path = 'fotoupload';
                $request->file('foto')->move($upload_path, $foto_name);
            
                return $foto_name;
        }
        return false;
    }
    public function hapusFoto(Fasilitas $fasilitas)
    {
         $split   = explode("/", $fasilitas->foto);
         $data    = $split[1];
         $exist = Storage::disk('foto')->exists($data);
            if(isset($data) && $exist){
                $delete = Storage::disk('foto')->delete($data);
                if($delete){
                    return true;
                }
                return false;
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'hapus fasilitas');
        $fasilitas= Fasilitas::findOrFail($id);
        $fasilitas->delete();
        Session::flash('flash_message', 'Data fasilitas berhasil dihapus');
        return redirect('fasilitas');
    }
}

    