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
                                    <h1 class="text-center">Data Kamar</h1>
                                </div>

                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <a href="kamar/create" class="btn btn-primary"><i class="fa fa-plus"></i>
                                        Tambah</a>
                                    </div>
                                    @include('_partial.flash_message')
                                        @if (!empty($kamar_list))
                                      
                                        
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">KODE</th>
                                                <th data-field="name" data-editable="true">Nama</th>
                                                <th data-field="company" data-editable="true">Tipe</th>
                                                <th data-field="price" data-editable="true">Harga</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1 ?>
                                            @foreach ($kamar_list as $kamar)
                                    
                                            <tr>
                                                <td></td>
                                                <td>{{ $kamar->no_kamar }}</td>
                                                <td>{{ $kamar->nama_kamar }}</td>
                                                <td>{{ $kamar->tipekamar->tipe_kamar }}</td>
                                                <td>Rp.{{ $kamar->harga }},-</td>
                                                <td><img src="{{ asset('/'. $kamar->foto) }}" style="width:100px;height:100px;"></td>
                                                <td>
                                                     <div class="box-button">
                                                        <a href="kamar/{{ $kamar->id }}" class="btn btn-success btn-sm"><img src="assets/img/eye4.png" width="15" height="15" ></a>
                                                        <a href="{{ route('kamar.edit', $kamar->id) }}" class="btn btn-warning btn-sm"><img src="assets/img/edit3.png" width="15" height="15" ></a>
                                                        <!-- <a href="{{ url('kamar/', $kamar->id) }}" class="btn btn-danger btn-sm"><img src="assets/img/delete3.png" width="15" height="15" ></a>
                                                         -->
                                                        <!-- <div class="box-button">
                                                            {{ link_to('kamar/'.$kamar->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm']) }}
                                                        </div> -->
                                                        {!! Form::open(['method' => 'DELETE', 'action' => ['KamarController@destroy', $kamar->id], 'id' => 'delete']) !!} 
                                                        <button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-danger btn-sm" type="submit"><img src="assets/img/delete3.png" width="15" height="15" ></button> 
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
                                            <!-- <div class="jumlah-data">
                                                <strong>Jumlah Kamar: {{ $jumlah_kamar }}</strong>
                                            </div> -->
                                            <div class="paging">
                                                {{ $kamar_list->links() }}
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- /////////////////////////////////////////////////////////////////
 -->    	<!-- <div id="form" style="height: fit-content;">
    		<h2>kamar</h2>
            <div class="tombol-nav" style="float:right;">    
                <a href="kamar/create" class="btn btn-primary"><i class="fa fa-plus"></i>
                    Tambah</a>
            </div>
            @include('_partial.flash_message')
    		@if (!empty($kamar_list))
    			<table class="table">
    				<thead>
    					<tr>
    						<th>No Kamar</th>
    						<th>Nama</th>
                            <th>Tipe Kamar</th>
    						<th>Harga</th>
    						<th>Foto</th> 
    						<th>Action</th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach ($kamar_list as $kamar)

    					<tr>
                       
    						<td>{{ $kamar->no_kamar }}</td>
    						<td>{{ $kamar->nama_kamar }}</td>
                            <td>{{ $kamar->tipekamar->tipe_kamar }}</td>
    						<td>Rp.{{ $kamar->harga }},-/malam</td>
    						<td>
                                <img src="{{ asset('/'. $kamar->foto) }}" style="width:100px;height:100px;">
                            </td>


    						<td>
                                <div class="box-button">
        							<a href="kamar/{{ $kamar->id }}" class="btn btn-success btn-sm"><img src="assets/img/eye4.png" width="15" height="15" ></a>
                                    <a href="{{ route('kamar.edit', $kamar->id) }}" class="btn btn-warning btn-sm"><img src="assets/img/edit3.png" width="15" height="15" ></a>
        							<!-- <a href="{{ url('kamar/', $kamar->id) }}" class="btn btn-danger btn-sm"><img src="assets/img/delete3.png" width="15" height="15" ></a>
                                     -->
                                    <!-- <div class="box-button">
                                        {{ link_to('kamar/'.$kamar->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm']) }}
                                    </div> -->
                                    <!-- {!! Form::open(['method' => 'DELETE', 'action' => ['KamarController@destroy', $kamar->id], 'id' => 'delete']) !!} 
                                    <button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-danger btn-sm" type="submit"><img src="assets/img/delete3.png" width="15" height="15" ></button> 
                                    {!! Form::close() !!}
                                </div>
    						</td>
    					</tr>
    					@endforeach
    				</tbody>
    			</table>
    		@else
    			<p>Tidak ada data kamar</p>
    		@endif --> 
    	</div>
	</div>
</div>

@stop
 