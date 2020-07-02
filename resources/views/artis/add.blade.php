@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Artis</h3>
<form method="post" action="{{ url('/artis') }}">
	@csrf
	<table class="table table-hover">
		<tr>
			<td>NAMA ARTIS</td>
			<td><input type="text" name="nama_artis"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
@endsection