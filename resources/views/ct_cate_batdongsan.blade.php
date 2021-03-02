@extends('ctmaster')
@section('title', 'Bất Động Sản')
@section('ctmain')

<h2 style="color: #DD940B" align="center">Chi Tiết Bất Động Sản</h2>
<div class="container">
<table width="100%" class="table table-light">
	<tr>
		<td class="border">
@foreach($bds as $row)
	<div class="container-fluid" align="center">
		<div class="form-group"><h3> {{$row->tenbds}} </h3></div>
		<div class="form-group"> <image width="800" src="../{{$row->anhbds}}"> </div>
		<div class="form-group" align="justify"> {{$row->motabds}} </div>
	</div>
@endforeach
		</td>
	</tr>
</table>
</div>
@stop