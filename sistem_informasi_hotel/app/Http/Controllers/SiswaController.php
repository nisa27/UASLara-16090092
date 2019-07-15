<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;//untuk memanggil Model Siswa.php
use App\Telepon;
use App\Kelas;
use App\Hobi;
//use Validator;
use App\Http\Requests\SiswaRequest;
use Storage;
use Session;
class SiswaController extends Controller
{
    public function index()
    {
    	$siswa_list	 = Siswa::orderBy('nama_siswa', 'asc')->paginate(2);//class Siswa (Model) u/ mendpt data dr tabel siswa.
    	$jumlah_siswa= Siswa::count();
    	return view('siswa.index', compact('siswa_list', 'jumlah_siswa'));
    }
   	public function create()
    {
    	return view('siswa.create');
    }
    public function store(SiswaRequest $request)
    {

        $input = $request->all();

        if($request->hasFile('foto')){
                $input['foto'] = $this->uploadFoto($request);
        }
        

        //simpan data siswa
        $siswa = Siswa::create($input);

        //simpan data telepon
        $telepon = new Telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $siswa->telepon()->save($telepon);

        //simpan hobi
        $siswa->hobi()->attach($request->input('hobi_siswa'));

        Session::flash('flash_message', 'Data siswa berhasil disimpan.');

        return redirect('siswa');

    }
    public function show(Siswa $siswa)
    {
    	//$siswa 	 = Siswa::findOrFail($id);//mendapat data berdasar id
    	return view('siswa.show', compact('siswa')); 
    }
    public function edit(Siswa $siswa)
    {
        //$siswa = Siswa::findOrFail($id);
        $siswa->nomor_telepon = $siswa->telepon->nomor_telepon;
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Siswa $siswa, SiswaRequest $request)
    {
        //$siswa = Siswa::findOrFail($id);
        $input = $request->all();

        //cek apalah ada foto baru .
        if($request->hasFile('foto')){

            //hapus foto lama jika ada foto baru
            $this->hapusFoto($siswa);

            //upload foto baru
            $input['foto'] = $this->uploadFoto($request);
                
        }

        //update data siswa
        $siswa->update($input);

        //update telepon
        $telepon = $siswa->telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $siswa->telepon()->save($telepon);

        //sync tabel hobi_siswa untuk siswa ini
        $siswa->hobi()->sync($request->input('hobi_siswa'));

        Session::flash('flash_message', 'Data berhasil diupdate.');
        return redirect('siswa');

    }
    public function destroy(Siswa $siswa)
    {
        //$siswa = Siswa::findOrFail($id);
        $this->hapusFoto($siswa);
        $siswa->delete();
        Session::flash('flash_message', 'Data berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('siswa');
    }
    public function dateMutator()
    {
        $siswa = Siswa::findOrFail(1);
        $str = 'Tanggal Lahir : '.$siswa->tanggal_lahir->format('d-m-Y').'<br>'.
                'Ulang tahun ke 30 akan jatuh pada tanggal : '.'<strong>'.
                $siswa->tanggal_lahir->addYear(30)->format('d-m-Y').'</strong>';
        return $str;
    }
    public function uploadFoto(SiswaRequest $request)
    {
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();
        if($request->file('foto')->isValid()){
                $foto_name = date('YmdHis').".$ext";
                $upload_path = 'fotoupload';
                $request->file('foto')->move($upload_path, $foto_name);
            
                return $foto_name;
        }
        return false;
    }
    public function hapusFoto(Siswa $siswa)
    {
         $exist = Storage::disk('foto')->exists($siswa->foto);
            if(isset($siswa->foto) && $exist){
                $delete = Storage::disk('foto')->delete($siswa->foto);
                if($delete){
                    return true;
                }
                return false;
            }
    }
    public function cari(Request $request)
    {
        // $kata_kunci = $request->input('kata_kunci');
        // $query      = Siswa::where('nama_siswa', 'LIKE', '%' .$kata_kunci.'%');
        // $siswa_list = $query->paginate(2);
        // $pagination = $siswa_list->appends($request->except('page'));
        // $jumlah_siswa = $siswa_list->total();
        // return view('siswa.index', compact('siswa_list', 'kata_kunci', 'pagination', 'jumlah_siswa'));


        $kata_kunci = trim($request->input('kata_kunci'));
        if(!empty($kata_kunci)){
            $jenis_kelamin = $request->input('jenis_kelamin');
            $id_kelas      = $request->input('id_kelas');


            //Query
            $query      = Siswa::where('nama_siswa', 'LIKE', '%' .$kata_kunci.'%');
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin): '';
            (!empty($id_kelas)) ? $query->Kelas($id_kelas): '';
             $siswa_list = $query->paginate(2);

             //URL Links Pagination
            $pagination = (!empty($jenis_kelamin)) ? $siswa_list->appends(['jenis_kelamin' => $jenis_kelamin]) : '';
            $pagination = (!empty($id_kelas)) ? $siswa_list->appends(['id_kelas' => $id_kelas]) : '';
            $pagination = $siswa_list->appends(['kata_kunci' => $kata_kunci]);
            $jumlah_siswa = $siswa_list->total();
            return view('siswa.index', compact('siswa_list', 'kata_kunci', 'pagination', 'jumlah_siswa',
            'id_kelas', 'jenis_kelamin'));

        }
        return redirect('siswa');
    }


}
