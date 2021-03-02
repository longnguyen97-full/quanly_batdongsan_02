@extends('admin/master')
@section('title', 'Chủ Đầu Tư')
@section('main')
@php $category = "cdt"; $count = 0; @endphp

<body onmousemove="stopreload(event)">

<h1 class="mt-4">Quản Lý : Chủ Đầu Tư</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><form style="height: 12px;" method="post" action="{{route('tailai')}}">@csrf<button id="non-button" type="submit">Bảng Quản Lý</button></form>&nbsp;/ Chủ Đầu Tư</li>
    </ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Chủ Đầu Tư
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Địa Chỉ</th>
                        <th>Số Điện Thoại</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    
    @foreach($data as $row)
    @php $count++; @endphp
    <tr>
      <td>{{$count}}</td>
      @foreach($row as $key => $value)
      <td>
        @php
          echo $value;
        @endphp
      @endforeach
      </td>

      <td><form method="post" action="{{ route('sua', [$row->macdt, $category]) }}">@csrf<button class='btn btn-success'>Sửa</button></form></td>
      <td><form method="post" action="{{ route('xulyxoa', [$row->macdt, $category]) }}">@csrf<button class='btn btn-success'>Xóa</button></form></td>
    </tr>
    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Địa Chỉ</th>
                        <th>Số Điện Thoại</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

<script type="text/javascript">

var timer = function() {
  window.location.reload(true);
};
var timeout = setTimeout(timer, 1200);

function stopreload() {
    clearTimeout(timeout);
}

</script>

@stop