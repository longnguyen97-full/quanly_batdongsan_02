@extends('master')
@section('title', 'Liên Hệ')
@section('main')

{{-- <?php include("frame/CONTENT_IMG_others.php");?> --}}
<html>
<body>
<div align="center" width="100%">

	<!-- div 4 MAINT CONTENT -->

	<h2 style="color: #DD940B"> Biểu Mẫu Liên Hệ </h2>
	<table border="0" width="1248" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<div style="padding-bottom: 50px" class="dv-left">
					<div style="padding-bottom: 350px" class="form">
						<input type="text" class="txtten" name="txtten" size="25" placeholder="Họ Và Tên" />
						<input type="text" class="txtemail" name="txtemail" size="25" placeholder="Email" />
						<input type="text" class="txtdth" name="txtdth" size="25" placeholder="Điện Thoại" />
						<input type="text" placeholder="Lời nhắn"></input>
						<input type="submit" class="btsm" name="btsm" value="GỬI NGAY">
					</div>
				</div>
			</td>
			<td>
				<div class="dv-right">
					<h1 style="color: #DD940B">KINGLAND</h1>
					<p><i>Đại lý chính thức phân phối sản phẩm BĐS Vinhomes</i></p>
					<p><i class="fas fa-star"></i>&nbsp;&nbsp;Xem căn hộ mẫu trực tiếp</p>
					<p><i class="fas fa-star"></i>&nbsp;&nbsp;Am hiểu sâu sắc dự án</p>
					<p><i class="fas fa-star"></i>&nbsp;&nbsp;Kinh nghiệm pháp lý vững vàng</p>
					<p><i class="fas fa-star"></i>&nbsp;&nbsp;Bảng giá gốc & Chính sách mới nhất</p>
					<p><i class="fas fa-star"></i>&nbsp;&nbsp;Tư vấn miễn phí 24/7</p>
					<p><i class="fas fa-star"></i>&nbsp;&nbsp;Hỗ trợ sau bán hàng</p>
				</div>
			</td>
		</tr>
	</table>

</div>
</body>
</html>

@stop