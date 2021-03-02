@extends('master')
@section('title', 'Dự Án')
@section('main')
@php $i = 0; @endphp

 <div class="container" align="center" width="100%">

	<!-- div 4 MAINT CONTENT -->
	<h2 style="color: #DD940B">DỰ ÁN HỒ CHÍ MINH</h2>
	
	<table class="table table-light" border="0" width="1248" cellpadding="0" cellspacing="0">
		<tr>
			<th width="35%">Hình Ảnh</th>
			<th width="10%">Mã</th>
			<th width="20%">Dự Án</th>
			<th width="30%">Miêu Tả</th>
			<th>Tìm Hiểu Thêm</th>
		</tr>

		@foreach($user_duan_hcm as $row)
		<tr>
			@foreach($row as $key => $value)
			<td class="border">
			@php
				if ($key == "hinhanh") {
					echo "<image class='rounded' width='400' height='230' src='$row->hinhanh'><br><br>";
				} else if ($key == "tenda") {
					echo "<span class=''><h6>". $row->tenda ."</h6></span>";
				} else if ($key == "tomtat"){
					echo "<i>''". $row->tomtat ."''</i>";
				} else {
					echo $value;
				}
			@endphp
			@endforeach
			</td>

			<td>

		<form method="post" action="{{route('chitiet_da', $row->mada)}}">
			@csrf
			<button id="btn_duan" style="background-color: #28a745;" class="btn btn-success" type="submit">Thông Tin Thêm</button>
		</form>

			</td>
			
		</tr>
		@endforeach

	</table>
</div>

@stop