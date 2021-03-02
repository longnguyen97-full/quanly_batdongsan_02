@extends('master')
@section('title', 'Kiến Thức')
@section('main')

<h2 style="color: #DD940B" align="center">Kiến Thức</h2>
<div class="container-fluid">
<table width="100%" class="table table-light">
	<tr>
	@foreach($bt as $row)
		<td class="border" style="padding: 10px;" width="33%">
		@foreach($row as $key => $value)
			@php
				if ($key == 'hinhanh') {
					echo "<image width=200 height=150 src='$row->hinhanh' class='rounded'>";
				} else if ($key == 'mabt'){
					echo "";
				} else {
					if ($key == "tenbantin") {
						echo "<span class='show'><h5>" .$row->tenbantin. '</h5></span><br>';
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

		<form method="post" action="{{ route('chitiet_kt', $row->mabt) }}">
			@csrf
			<button id="btn-bantin" type="submit" style="outline: none; border: none; background: none; color: blue; cursor: pointer;">Xem Thêm...</button>
		</form>
		</td>
	@endforeach
	</tr>

	<tr>
	@foreach($bt2 as $row)
		<td class="border" style="padding: 10px;" width="33%">
		@foreach($row as $key => $value)
			@php
				if ($key == 'hinhanh') {
					echo "<image width=200 height=150 src='$row->hinhanh' class='rounded'>";
				} else if ($key == 'mabt'){
					echo "";
				} else {
					if ($key == "tenbantin") {
						echo "<span class='show'><h5>" .$row->tenbantin. '</h5></span><br>';
					} else {
						echo "<span class='show'>" .$value. '</span><br>';
					}
				}
			@endphp
		@endforeach

		<form method="post" action="{{ route('chitiet_kt', $row->mabt) }}">
			@csrf
			<button id="btn-bantin" type="submit" style="outline: none; border: none; background: none; color: blue; cursor: pointer;">Xem Thêm...</button>
		</form>
		</td>
	@endforeach
	</tr>
</table>
</div>
@stop