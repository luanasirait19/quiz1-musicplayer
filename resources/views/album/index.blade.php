@extends('layouts.app')
@section('content')
<div class="table table-hover">
<form action="{{ url('/artis') }}">
	@csrf
	<h3>Daftar Album<a id="tbh" href="{{ url('album/create') }}">Klik Tambah Data</a></h3>
	<table class="table table-hover">
		<tr>
			<td>ID</td>
			<td>NAMA ALBUM</td>
			<td>NAMA ARTIS</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->album_id }}</td>
			<td>{{ $row->nama_album }}</td>
			<td>{{ $row->artis->nama_artis }}</td>
			<td><a id="btn" href="{{ url('album/'.$row->album_id.'/edit') }}">Edit</a></td>
			<td><form action="{{ url('/album/'.$row->album_id) }}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection