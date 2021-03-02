<table style="margin: 0px 20px 20px 20px;" width="100%">
	<tr>
		<td width="50%">
			@include('ctfilter_element')
		</td>
		<td width="25%" rowspan="2">
			<ul style="margin-bottom: 182px;" class="list-group list-group-flush">
				<li class="list-group-item">
				<h3 style="color: #DD940B" align="center" class="container">Dự Án Nổi Bật</h3></li>

				@php $i = 0; @endphp
				@foreach($user_duannoibat as $row)
					@php $i++; @endphp
					@foreach($row as $key => $value)
						@php
							if ($i == 1) {
								echo "
									<li class='list-group-item p-3 mb-2 bg-warning text-dark'>
										$value
									</li>
								";
							} else if ($i == 2) {
								echo "
									<li class='list-group-item p-3 mb-2 bg-secondary text-white'>
										$value
									</li>
								";
							} else {
								echo "
									<li class='list-group-item p-3 mb-2 bg-light text-dark'>
										$value
									</li>
								";
							}
						@endphp
						
					@endforeach
				@endforeach

			</ul>
		</td>
		<td width="25%">
			<div class="container">
				<a href=""><img style="margin-bottom: 20px;" src="../hinh/ads/qc1.jpg"></a>
				<a href=""><img src="../hinh/ads/qc2.png"></a>
			</div>
		</td>
	</tr>
</table>