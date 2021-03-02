@extends('admin/master')
@section('title', 'Nhân Viên')
@section('main')

<h1 class="mt-4">Hiệu Chỉnh : Nhân Viên</h1>
<form method="post" action="{{ route('xulysua', [$ma_sua, $cate_sua]) }}">
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
            <input type="text" class="form-control" value="{{$ma_sua}}" readonly name="txtMa">
          </div>
          <div class="col col-3">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Văn Phòng</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sltVPhong">
              @foreach($data as $row)
                <option hidden value="{{$row->ddiemvp}}">{{$row->ddiemvp}}</option>   
              @endforeach
              @foreach($ddiemvp as $row)
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
            <input type="text" class="form-control" placeholder="Nhập tên" value="@foreach($data as $row) {{$row->hotennv}} @endforeach" id="txtTen" name="txtTen">
          </div>
          <div class="col">
              <label for="InputDescription">Địa Chỉ</label>
            <input type="text" class="form-control" placeholder="Đường, Quận/Huyện, Phường/Xã..." value="@foreach($data as $row) {{$row->dchinv}} @endforeach" id="txtDchi" name="txtDchi">
          </div>
        </div>
      </div>
      <div class="form-group form">
        <div class="form-row">
          <div class="col">
              <label for="InputName">Ngày Sinh</label>
            <input type="date" class="form-control" placeholder="@foreach($data as $row)
            {{$row->ngsinhnv}} @endforeach" id="txtNgSinh" name="txtNgSinh">
          </div>
          <div class="col">
              <label for="InputName">Số Điện Thoại</label>
            <input type="text" class="form-control" placeholder="Nhập số" value="@foreach($data as $row) {{$row->sdtnv}} @endforeach" id="txtSDT" name="txtSDT">
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
    $('#txtSDT').val("");
    $("#txtNgSinh[type=date]").val("");
  });
});

$("#SelectImage").change(function() {
  filename = this.files[0].name
  console.log(filename);
});
</script>

@stop