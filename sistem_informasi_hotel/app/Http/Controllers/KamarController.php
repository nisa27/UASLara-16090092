<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;
use App\Http\Requests\KamarRequest;
use App\Kamar;
use App\Tipekamar;
use Storage;
use Session;
use App\Helpers\Log;
use Auth;
use App\Fasilitas;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kamar_list  = Kamar::where('deleted', '0')->orderBy('id', 'desc')->paginate(10);
        $jumlah_kamar= Kamar::count();
        return view('back-end.kamar.index',compact('kamar_list', 'jumlah_kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipekamar_list = Tipekamar::pluck('tipe_kamar', 'id');
        $list_fasilitas = Fasilitas::pluck('nama_fasilitas', 'id');
        return view('back-end.kamar.create', compact('tipekamar_list', 'list_fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KamarRequest $request)
    { 
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'create kamar');
        $input = $request->all();

        // $input = $request->validate([
        //     'no_kamar' => 'required|string|size:3',
        //     'nama_kamar' => 'required|string|max:30',
        //     'harga' => 'required',
        //     ''
        //     'keterangan' => 'sometimes',
        //     'foto' => 'required|image|max:500|mimes:jpeg,jpg,bmp,png',
        //     ]);
        if($request->hasFile('foto')){
                $input['foto'] = $this->uploadFoto($request);
        }
        

        //simpan data kamar
        $kamar = Kamar::create($input);
        $kamar->fasilitas()->attach($request->input('fasilitas_hotel'));

        Session::flash('flash_message', 'Data kamar berhasil disimpan.');

        return redirect('kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //$kamar = Kamar::findOrFail($id);
        return view('back-end.kamar.show', compact('kamar')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        //$kamar = Kamar::findOrFail($id);

        $tipekamar_list = Tipekamar::pluck('tipe_kamar', 'id');
        $list_fasilitas = Fasilitas::pluck('nama_fasilitas', 'id');
        return view('back-end.kamar.edit', compact('kamar', 'tipekamar_list', 'list_fasilitas' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $input = request()->except(['_token', '_method']);
    //     if($request->hasFile('foto')){
    //             $input['foto'] = $this->uploadFoto($request);
    //     }
        

    //     //simpan data kamar
    //     Kamar::whereId($id)->update($input);
    //     Session::flash('flash_message', 'Data kamar berhasil diedit.');

    //     return redirect('kamar');
    // }

    public function update(KamarRequest $request,Kamar $kamar)
    {
        //$kamar = kamar::findOrFail($id);
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'update kamar');
        $input = $request->all();

        //validasi
         // $input = $request->validate([
         //    'no_kamar' => 'required|string|size:3',
         //    'nama_kamar' => 'required|string|max:30',
         //    'harga' => 'required',
         //    'keterangan' => 'sometimes',
         //    'foto' => 'required|image|max:500|mimes:jpeg,jpg,bmp,png',
         //    ]);
        //cek apalah ada foto baru .
        if($request->hasFile('foto')){

            //hapus foto lama jika ada foto baru
            $this->hapusFoto($kamar);

            //upload foto baru
            $input['foto'] = $this->uploadFoto($request);
                
        }

        //update data kamar
        $kamar->update($input);

        Session::flash('flash_message', 'Data berhasil diupdate.');
        return redirect('kamar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {

        //$kamar = kamar::findOrFail($id);
        // $this->hapusFoto($kamar);
        // $kamar=Kamar::findOrFail($id);
        // $kamar->delete();
        // Session::flash('flash_message', 'Data berhasil dihapus.');
        // Session::flash('penting', true);
        // return redirect('kamar');
        // $kamar->deleted='1';
        // $this->hapusFoto($kamar);
        // $kamar->delete();
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'hapus kamar');
        $kamar->update(['deleted' => '1']);
        Session::flash('flash_message', 'Data berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('kamar');
    }
    public function uploadFoto(Request $request)
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
    public function hapusFoto(Kamar $kamar)
    {
         $split   = explode("/", $kamar->foto);
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

    //FrontEnd

    public function FrontEnd()
    {
        $kamar_list  = Kamar::orderBy('nama_kamar', 'asc')->paginate(10);
        $kamar_list = Kamar::where('deleted', '0')->get();
        return view('front-end.index',compact('kamar_list'));
    }

    public function rooms()
    {
        $kamar_list  = Kamar::orderBy('nama_kamar', 'asc')->paginate(10);
        $kamar_list = Kamar::where('deleted', '0')->get();
        return view('front-end.rooms',compact('kamar_list'));
    }
}
