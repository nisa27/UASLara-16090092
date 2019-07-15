@extends('back-end/template')

@section('main')


 <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1 class="text-center">Data Booking</h1>
                                </div>

                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    @include('_partial.flash_message')
                                        @if (!empty($booking_list))
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">NO</th>
                                                <th data-field="name" data-editable="true">Nama</th>
                                                <th data-field="company" data-editable="true">NOHp</th>
                                                <th data-field="price" data-editable="true">Alamat</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Status</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1 ?>
                                            @foreach ($booking_list as $book)
                                            <tr>
                                                <td></td>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $book->nama }}</td>
                                                <td>{{ $book->no_hp }}</td>
                                                <td>{{ $book->alamat }}</td>
                                                <td>{{ $book->check_in }}</td>
                                                <td>{{ $book->check_out }}</td>
                                                <td>
                                                     <div class="box-button">
                                                        <!-- <a href="book/{{ $book->id }}" class="btn btn-success btn-sm"><img src="assets/img/eye4.png" width="15" height="15" ></a> -->
                                                       <!--  <a href="{{ route('booking.edit', $book->id) }}" class="btn btn-warning btn-sm"><img src="assets/img/edit3.png" width="15" height="15" ></a> -->
                                                       <!--  {!! Form::open(['method' => 'DELETE', 'action' => ['BookingController@destroy', $book->id], 'id' => 'delete']) !!} 
                                                        <button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-danger btn-sm" type="submit"><img src="assets/img/delete3.png" width="15" height="15" ></button> 
                                                        {!! Form::close() !!} -->
                                                        {!! Form::open(['method' => 'PATCH', 'action' => ['BookingController@update', $book->id], 'id' => 'update']) !!} 
                                                        <button onclick="return confirm('Status diubah?')" class="btn btn-warning btn-sm" type="submit">{{ $book->status }}</button> 
                                                        {!! Form::close() !!}
                                                    </div>
                                                </td>
                                               
                                            </tr>
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                        <p>Tidak ada data kamar</p>
                                    @endif
                                    <div class="table-nav">
                                        <div class="jumlah-data">
                                            <strong>Jumlah Booking: {{ $jumlah_book }}</strong>
                                        </div>
                                        <div class="paging">
                                            {{ $booking_list->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    	</div>
	</div>
</div>

@stop
 