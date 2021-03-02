@extends('admin/master')
@section('title', 'Hợp Đồng Đầu Tư')
@section('main')
@php $category = "HDDT"; @endphp

<h1 class="mt-4">Thêm : Hợp Đồng Đầu Tư</h1>
<form method="post" action="{{ route('xulythem',$category) }}">
@csrf
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Hợp Đồng Đầu Tư
    </div>
    <div class="card-body">
		<form>
			<div class="form-group form">
				<div class="form-row align-items-center">
					<div class="col col-3">
					    <label for="InputName">Mã Hợp Đồng</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" id="txtMa" name="txtMa">
					</div>
					<div class="col col-6">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Chủ Đầu Tư</label>
						<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sltCDT">
							@foreach($chudautu as $row)
								@foreach($row as $key => $value)
								<option value="{{ $value }}">{{ $value }}</option>
								@endforeach				
							@endforeach
					    </select>
					</div>
				</div>
			</div>
			<div class="form-group form">
				<div class="form-row align-items-center">
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
					<div class="col col-6">
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
					    <label for="InputName">Số Lượng Gói</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" value="" id="txtSLuong" name="txtSLuong">
					</div>
					<div class="col">
					    <label for="InputName">Tổng Vốn</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" value="" id="txtTVon" name="txtTVon">
					</div>
					<div class="col">
					    <label for="InputName">Thời Hạn</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số năm" value="" id="txtTHan" name="txtTHan">
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