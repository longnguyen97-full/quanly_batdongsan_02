@extends('admin/master')
@section('title', 'Dự Án')
@section('main')
@php $category = "DA"; @endphp

<h1 class="mt-4">Thêm : Dự Án</h1>
<form method="post" action="{{ route('xulythem2',$category) }}">
@csrf
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Dự Án
    </div>
    <div class="card-body">
		<form>
			<div class="form-group form">
				<div class="form-row align-items-center">
					<div class="col col-3">
					    <label for="InputName">Mã Dự Án</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" id="txtMa" name="txtMa">
					</div>
					<div class="col col-3">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Thành Phố</label>
						<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sltVTri">
							<option value="HANOI">Hà Nội</option>
							<option value="DANANG">Đà Nẵng</option>
							<option value="HCM">Hồ Chí Minh</option>
					    </select>
					</div>
					<div class="col col-1"></div>
					<div class="col col-3">
					    <label for="InputName">Đánh Dấu Ưu Tiên</label>
						<div class="switch">
						  <input type="checkbox" class="switch" id="switch-id">
						  <label for="switch-id">Ưu Tiên</label>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group form">
				<div class="form-row">
					<div class="col">
					    <label for="InputName">Tên Dự Án</label>
						<input type="text" class="form-control" placeholder="Nhập tên" value="" id="txtTen" name="txtTen">
					</div>
					<div class="col">
					    <label for="InputDescription">Tóm Tắt</label>
						<input type="text" class="form-control" placeholder="Nhập tóm tắt" value="" id="txtMTa" name="txtMTa">
					</div>
				</div>
			</div>
			<div class="form-group form">
				<div class="form-row">
					<div class="col col-6">
					    <label for="InputEmpty">Hình Ảnh</label>
						  <div class="form-group">
						    <input type="file" name="img[]" class="file">
						    <div class="input-group mb-3">
						      <div class="input-group-prepend">
						        <span class="input-group-text" id="basic-addon1"><i class="fas fa-paperclip"></i></span>
						      </div>
						      <input type="text" class="form-control" value="" aria-label="Upload File" aria-describedby="basic-addon1" accept="hinh_upload/*" id="imgUpload" name="imgUpload">
						      <div class="input-group-append">
						        <label class="browse input-group-text btn btn-primary" id="basic-addon2">Tải Lên</label>
						      </div>
						    </div>
						  </div>
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