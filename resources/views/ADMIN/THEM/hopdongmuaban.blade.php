@extends('admin/master')
@section('title', 'Hợp Đồng Mua Bán')
@section('main')
@php $category = "HDMB"; @endphp

<h1 class="mt-4">Thêm : Hợp Đồng Mua Bán</h1>
<form method="post" action="{{ route('xulythem',$category) }}">
@csrf
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Hợp Đồng Mua Bán
    </div>
    <div class="card-body">
		<form>
			<div class="form-group form">
				<div class="form-row align-items-center">
					<div class="col col-3">
					    <label for="InputName">Mã Hợp Đồng</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" id="txtMa" name="txtMa">
					</div>
					<div class="col col-3">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Nhân Viên</label>
						<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sltNV">
							@foreach($nhanvien as $row)
								@foreach($row as $key => $value)
								<option value="{{ $value }}">{{ $value }}</option>
								@endforeach				
							@endforeach
					    </select>
					</div>
					<div class="col col-3">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Khách Hàng</label>
						<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sltKH">
							@foreach($khachhang as $row)
								@foreach($row as $key => $value)
								<option value="{{ $value }}">{{ $value }}</option>
								@endforeach				
							@endforeach
					    </select>
					</div>
					<div class="col col-3">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Bất Động Sản</label>
						<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sltBDS">
							@foreach($batdongsan as $row)
								@foreach($row as $key => $value)
								<option value="{{ $value }}">{{ $value }}</option>
								@endforeach				
							@endforeach
					    </select>
					</div>
				</div>
			</div>
			<div class="form-group form">
				<div class="form-row">
					<div class="col">
					    <label for="InputName">Tên Hợp Đồng</label>
						<input type="text" class="form-control" placeholder="Nhập tên" value="" id="txtTen" name="txtTen">
					</div>
					<div class="col">
					    <label for="InputDescription">Ngày Lập</label>
						<input type="date" class="form-control" value="" id="txtNLap" name="txtNLap">
					</div>
				</div>
			</div>
			<div class="form-group form">
				<div class="form-row">
					<div class="col">
					    <label for="InputName">Số Lượng Căn Hộ</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" value="" id="txtSLuong" name="txtSLuong">
					</div>
					<div class="col">
					    <label for="InputName">Tổng Tiền</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" value="" id="txtTTien" name="txtTTien">
					</div>
					<div class="col">
					    <label for="InputName">Trả Trước</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" value="" id="txtTTruoc" name="txtTTruoc">
					</div>
					<div class="col">
					    <label for="InputName">Còn Lại</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" value="" id="txtCLai" name="txtCLai">
					</div>
				</div>
			</div>
			<div class="form-group form">
				<button type="submit" class="btn btn-success">Thêm</button>
				<button id="btnNLai" type="button" class="btn btn-success">Nhập Lại</button>
			</div>
		</form>
    </div>
</div>
</form>

<script type="text/javascript">
$(document).ready(function(){
  $("#btnNLai").click(function(){
  	$("select").val("");
  	$('#txtMa[type=number]').val("");
  	$("#txtTen").val("");
  	$("#txtMTa").val("");
  	$("#imgUpload").val("");
  });
});

$("#SelectImage").change(function() {
  filename = this.files[0].name
  console.log(filename);
});
</script>

@stop