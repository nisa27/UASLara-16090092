@extends('back-end/template')

@section('main')
	<div style="margin:50px;">
		<h2 class="text-center">User</h2>

		@include('_partial.flash_message')

		@if(count($user_list) > 0)
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Level</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0 ?>
					<?php foreach($user_list as $user): ?>
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->level }}</td>
						<td>
							<div class="box-button">
								{{ link_to('user/'.$user->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm']) }}
							</div>
							@if(Auth::user()->email != $user->email)
							<div class="box-button">
								{!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) !!}
								{!! Form::submit('Delete!', ['class' => 'btn btn-danger btn-sm']) !!}
								{!! Form::close() !!}
							</div>
							@endif
						</td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		@else
			<p>Tidak ada data user.</p>
		@endif
		<div class="tombol-nav">
			<a href="user/create" class="btn btn-primary">Tambah User</a>
		</div>
	</div>
@stop
@section('footer')
	@include('footer')
@stop