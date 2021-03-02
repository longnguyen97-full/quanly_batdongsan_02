@extends('master')
@section('title', 'Bất Động Sản')
@section('main')

<h2 style="color: #DD940B" align="center">Bất Động Sản</h2>
<div class="container-fluid">
<table width="100%" class="table table-light">
	<tr>
	@foreach($bds as $row)
		<td class="border" style="padding: 10px;" width="33%">
		@foreach($row as $key => $value)
			@php
				if ($key == 'anhbds') {
					echo "<image width=200 height=150 src='$row->anhbds' class='rounded'>";
				} else if ($key == 'mabds'){
					echo "";
				} else {
					if ($key == "tenbds") {
						echo "<span class='show'><h5>" .$row->tenbds. '</h5></span><br>';
					} else {
						echo "<span class='show'>" .$value. '</span><br>';
					}
				}
			@endphp
		@endforeach

<style type="text/css">
	#btn-bantin:hover {
		text-decoration: underline;
	}
</style>

		<form method="post" action="{{ route('chitiet_bds', $row->mabds) }}">
			@csrf
			<button id="btn-bantin" type="submit" style="outline: none; border: none; background: none; color: blue; cursor: pointer;">Xem Thêm...</button>
		</form>
		</td>
	@endforeach
	</tr>

	<tr>
	@foreach($bds2 as $row)
		<td class="border" style="padding: 10px;">
		@foreach($row as $key => $value)
			@php
				if ($key == 'anhbds') {
					echo "<image width=200 height=150 src='$row->anhbds' class='rounded'>";
				} else if ($key == 'mabds'){
					echo "";
				} else {
					if ($key == "tenbds") {
						echo "<span class='show'><h5>" .$row->tenbds. '</h5></span><br>';
					} else {
						echo "<span class='show'>" .$value. '</span><br>';
					}
				}
			@endphp
		@endforeach

		<form method="post" action="{{ route('chitiet_bds', $row->mabds) }}">
			@csrf
			<button id="btn-bantin" type="submit" style="outline: none; border: none; background: none; color: blue; cursor: pointer;">Xem Thêm...</button>
		</form>
		</td>
	@endforeach
	</tr>
</table>
</div>
@stop