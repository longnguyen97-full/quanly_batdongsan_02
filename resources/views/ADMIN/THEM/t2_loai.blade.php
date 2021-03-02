@extends('admin/master')
@section('title', 'Loại')
@section('main')
@php $category = "LOAI"; @endphp

<h1 class="mt-4">Thêm : Loại</h1>
<form method="post" action="{{ route('xulythem2',$category) }}">
@csrf
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Loại
    </div>
    <div class="card-body">
		<form>
			<div class="form-group form">
				<div class="form-row align-items-center">
					<div class="col col-3">
					    <label for="InputName">Mã Loại</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" id="txtMa" name="txtMa">
					</div>
				</div>
			</div>
			<div class="form-group form">
				<div class="form-row">
					<div class="col col-6">
					    <label for="InputName">Tên Loại</label>
						<input type="text" class="form-control" placeholder="Nhập tên" value="" id="txtTen" name="txtTen">
					</div>
				</div>
			</div>
			<div class="form-group form">
				<div class="form-row">
					<div class="col col-3">
					    <label for="InputName">Đơn Giá</label>
						<input type="number" min="0" class="form-control" placeholder="Nhập số" value="" id="txtTen" name="txtTen">
					</div>
					<div class="col col-3">
					    <label for="InputName">Loại Tiền</label>
						<input type="text" class="form-control" readonly value="VNĐ" id="txtTen" name="txtTen">
					</div>
					<div class="col col-3">
					    <label for="InputName">Màu Sắc</label>
						<input type="text" class="form-control" placeholder="Nhập màu" value="" id="txtTen" name="txtTen">
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