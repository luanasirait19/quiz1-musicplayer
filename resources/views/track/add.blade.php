@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Track</h3>
<form method="post" action="{{ url('/track') }}" enctype="multipart/form-data">
	@csrf
	<table class="table table-hover">
		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="nama_track"></td>
		</tr>
		<tr>
			<td>ALBUM & ARTIS</td>
			<td>
				<select name="album_id">
					@foreach($lst as $row)
					<option value="{{ $row->album_id }}">{{ $row->nama_album }} - {{ $row->artis->nama_artis }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<td>FILE</td>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
@endsection