@extends('master')
@section('title', 'Góc KingLand')
@section('main')

<h2 style="color: #DD940B" align="center">Góc KingLand</h2>
<div class="container-fluid">
<table width="100%" class="table table-light">
	<tr>
	@foreach($bt as $row)
		<td class="border" style="padding: 10px;">
		@foreach($row as $key => $value)
			@php
				if ($key == 'hinhanh') {
					echo "<image width=200 height=150 src='$row->hinhanh' class='rounded'>";
				} else if ($key == 'mabt'){
					echo "";
				} else {
					echo "<span class='show'>" .$value. '</span><br>';
				}
			@endphp
		@endforeach

<style type="text/css">
	#btn-bantin:hover {
		text-decoration: underline;
	}
</style>

		<form method="post" action="{{ route('chitiet_gkl', $row->mabt) }}">
			@csrf
			<button id="btn-bantin" type="submit" style="outline: none; border: none; background: none; color: blue; cursor: pointer;">Xem Thêm...</button>
		</form>
		
		</td>
	@endforeach
	</tr>

	<tr>
	@foreach($bt2 as $row)
		<td class="border" style="padding: 10px;">
		@foreach($row as $key => $value)
			@php
				if ($key == 'hinhanh') {
					echo "<image width=200 height=150 src='$row->hinhanh' class='rounded'>";
				} else if ($key == 'mabt'){
					echo "";
				} else {
					echo "<span class='show'>" .$value. '</span><br>';
				}
			@endphp
		@endforeach

		<form method="post" action="{{ route('chitiet_gkl', $row->mabt) }}">
			@csrf
			<button id="btn-bantin" type="submit" style="outline: none; border: none; background: none; color: blue; cursor: pointer;">Xem Thêm...</button>
		</form>
		</td>
	@endforeach
	</tr>
</table>
</div>



{{-- <?php
	echo "<table border=0 width=1248 cellpadding=0 cellspacing=0>";
	while($rows = mysqli_fetch_array($result)) {
		echo "<tr>";
			for($i = 1; $i <= 2; $i++) {
				echo "<td width='620'>";
						if($rows != false) {
							echo "<div class='dv-tb'>";
								echo('<img src="data:image/png; base64, '.base64_encode($rows['HINH']).'" width="200" height="133" /> <br /> ');
								echo "<a href='linhvuc.php?MACT={$rows['MABTIN']}'><strong>{$rows['TENBTIN']}</strong></a>";
								echo "<br /><br />";
								echo "<span style='color: #575757'>{$rows['NOIDUNG_TT']}</span>";
							echo "</div>";
						}
				echo "</td>";
				if($i != 2) {
					$rows = mysqli_fetch_array($result);
				}
			}//KT for
		echo "</tr>";
	}
	echo "</table>";
?> --}}

@stop