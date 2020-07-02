@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artis') }}">
	@csrf
	<h3>Daftar Artis<a id="tbh" href="{{ url('artis/create') }}">Tambah Data</a></h3>
	<table class="table table-hover">
		<tr>
			<td>ID</td>
			<td>NAMA ARTIS</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artis_id }}</td>
			<td>{{ $row->nama_artis }}</td>
			<td><a id="btn"  href="{{ url('artis/'.$row->artis_id.'/edit') }}">Edit</a></td>
			<td><form action="{{ url('/artis/'.$row->artis_id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection