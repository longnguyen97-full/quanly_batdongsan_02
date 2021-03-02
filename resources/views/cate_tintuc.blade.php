@extends('master')
@section('title', 'Tin Tức')
@section('main')

<h2 style="color: #DD940B" align="center">Tin Tức</h2>
<div class="container-fluid">
<table width="100%" class="table table-light">
	<tr>
	@foreach($bt as $row)
		<td class="border" style="padding: 10px;" width="33%">
		@foreach($row as $key => $value)
			@php
				if ($key == 'anhtt') {
					echo "<image width=200 height=150 src='$row->anhtt' class='rounded'>";
				} else if ($key == 'matt'){
					echo "";
				} else {
					if ($key == "tieudett") {
						echo "<span class='show'><h5>" .$row->tieudett. '</h5></span><br>';
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

		<form method="post" action="{{ route('chitiet_tt', $row->matt) }}">
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
				if ($key == 'anhtt') {
					echo "<image width=200 height=150 src='$row->anhtt' class='rounded'>";
				} else if ($key == 'matt'){
					echo "";
				} else {
					if ($key == "tieudett") {
						echo "<span class='show'><h5>" .$row->tieudett. '</h5></span><br>';
					} else {
						echo "<span class='show'>" .$value. '</span><br>';
					}
				}
			@endphp
		@endforeach

		<form method="post" action="{{ route('chitiet_tt', $row->matt) }}">
			@csrf
			<button id="btn-bantin" type="submit" style="outline: none; border: none; background: none; color: blue; cursor: pointer;">Xem Thêm...</button>
		</form>
		</td>
	@endforeach
	</tr>
</table>
</div>
@stop