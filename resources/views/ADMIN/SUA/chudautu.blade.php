@extends('admin/master')
@section('title', 'Chủ Đầu Tư')
@section('main')

<h1 class="mt-4">Hiệu Chỉnh : Chủ Đầu Tư</h1>
<form method="post" action="{{ route('xulysua', [$ma_sua, $cate_sua]) }}">
@csrf
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Chủ Đầu Tư
    </div>
    <div class="card-body">
    <form>
      <div class="form-group form">
        <div class="form-row align-items-center">
          <div class="col col-3">
              <label for="InputName">Mã Chủ Đầu Tư</label>
            <input type="text" class="form-control" value="{{$ma_sua}}" readonly name="txtMa">
          </div>
        </div>
      </div>
      <div class="form-group form">
        <div class="form-row">
          <div class="col">
              <label for="InputName">Chủ Đầu Tư</label>
            <input type="text" class="form-control" placeholder="Nhập tên" value="@foreach($data as $row) {{$row->tencdt}} @endforeach" id="txtTen" name="txtTen">
          </div>
          <div class="col">
              <label for="InputDescription">Địa Chỉ</label>
            <input type="text" class="form-control" placeholder="Đường, Quận/Huyện, Phường/Xã..." value="@foreach($data as $row) {{$row->dchicdt}} @endforeach" id="txtDchi" name="txtDchi">
          </div>
        </div>
      </div>
      <div class="form-group form">
        <div class="form-row">
          <div class="col col-6">
              <label for="InputName">Số Điện Thoại</label>
            <input type="text" class="form-control" placeholder="Nhập số" value="@foreach($data as $row) {{$row->sdtcdt}} @endforeach" id="txtSDT" name="txtSDT">
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
    $('#txtMa[type=number]').val("");
    $("#txtTen").val("");
    $("#txtDchi").val("");
    $('#txtSDT[type=number]').val("");
  });
});

$("#SelectImage").change(function() {
  filename = this.files[0].name
  console.log(filename);
});
</script>

@stop