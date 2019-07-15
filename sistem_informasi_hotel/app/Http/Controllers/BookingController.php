<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\KamarRequest;
use App\Http\Requests\BookingRequest;
use App\Kamar;
use App\Tipekamar;
use Storage;
use Session;
use App\Helpers\Log;
use Auth;
use App\Fasilitas;
use App\Booking;
class BookingController extends Controller
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
        $booking_list  = Booking::where('deleted', '1')->orderBy('id', 'desc')->paginate(10);
        $jumlah_book= Booking::count();
        return view('back-end/booking/index', compact('booking_list', 'jumlah_book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kamar)
    {
        //$idkamar = Kamar::pluck('nama_kamar', 'id');
        $kamar = Kamar::findOrFail($id_kamar);
        return view('front-end.booking.create', compact('kamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request,Booking $booking)
    {
        $input = $request->all();
        //simpan data booking
        $book=Booking::create($input);
        $kamar = Kamar::findOrFail($request->id_kamar);
        $kamar->update(["deleted"=>"1"]);

        Session::flash('flash_message', 'Data kamar berhasil disimpan.');
        return view('front-end.booking.show', compact('book'));
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
    public function edit(Booking $booking)
    {
        //$kamar = Kamar::findOrFail($id);
        return view('back-end.kamar.edit', compact('booking', 'tipekamar_list', 'list_fasilitas' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Booking $booking)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'edit booking');
        $booking->update(['status' => 'disabled']);
        Session::flash('flash_message', 'Data berhasil diupdate.');
        Session::flash('penting', false);
        return redirect('booking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'hapus booking');
        $booking->update(['status' => 'disabled']);
        //$booking->update(['deleted' => '0']);
        $kamar = Kamar::findOrFail($request->id_kamar);
        $kamar->update(['deleted' => '1']);
        Session::flash('flash_message', 'Data berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('booking');
    }
}

    