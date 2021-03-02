@extends('admin/master')
@section('title', 'Nhân Viên')
@section('main')
@php $category = "NV"; @endphp

<h1 class="mt-4">Thêm : Nhân Viên</h1>
<form method="post" action="{{ route('xulythem',$category) }}">
@csrf
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Nhân Viên
    </div>
    <div class="card-body">
		<form>
			<div class="form-group form">
				<div class="form-row align-items-center">
					<div class="col col-3">
					    <label for="InputName">Mã Nhân Viên</label>
						<input type="number" class="form-control" min="0" placeholder="Nhập số" id="txtMa" name="txtMa">
					</div>
					<div class="col col-3">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Văn Phòng</label>
						<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sltVPhong">
							@foreach($vanphong as $row)
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
					    <label for="InputName">Họ Tên</label>
						<input type="text" class="form-control" placeholder="Nhập tên" value="" id="txtTen" name="txtTen">
					</div>
					<div class="col">
					    <label for="InputDescription">Địa Chỉ</label>
						<input type="text" class="form-control" placeholder="Đường, Quận/Huyện, Phường/Xã..." value="" id="txtDchi" name="txtDchi">
					</div>
				</div>
			</div>
			<div class="form-group form">
				<div class="form-row">
					<div class="col">
					    <label for="InputName">Ngày Sinh</label>
						<input type="date" class="form-control" value="" id="txtNgSinh" name="txtNgSinh">
					</div>
					<div class="col">
					    <label for="InputName">Số Điện Thoại</label>
						<input type="number" min="0" class="form-control" placeholder="Nhập số" value="" id="txtSDT" name="txtSDT">
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
  	$("#txtDchi").val("");
  	$('#txtSDT[type=number]').val("");
  	$("#txtNgSinh[type=date]").val("");
  });
});

$("#SelectImage").change(function() {
  filename = this.files[0].name
  console.log(filename);
});
</script>

@stop