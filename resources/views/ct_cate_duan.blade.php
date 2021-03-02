@extends('ctmaster')
@section('title', 'Tin Tức')
@section('ctmain')

<h2 style="color: #DD940B" align="center">Chi Tiết Dự Án</h2>
<div class="container">
<table width="100%" class="table table-light">
	<tr>
		<td class="border">
@foreach($da as $row)
	<div class="container-fluid" align="center">
		<div class="form-group"><h3> {{$row->tenda}} </h3></div>
		<div class="form-group"> <image width="800" src="../{{$row->hinhanh}}"> </div>
		<div class="form-group" align="justify"> {{$row->noidung}} </div>
	</div>
@endforeach
		</td>
	</tr>
</table>
</div>
@stop