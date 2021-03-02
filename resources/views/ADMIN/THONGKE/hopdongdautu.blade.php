@extends('admin/master')
@section('title', 'Hợp Đồng Đầu Tư')
@section('main')
@php $category = "hddt"; $count = 0; @endphp

<body onmousemove="stopreload(event)">
    
<h1 class="mt-4">Quản Lý : Hợp Đồng Đầu Tư</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><form style="height: 12px;" method="post" action="{{route('tailai')}}">@csrf<button id="non-button" type="submit">Bảng Quản Lý</button></form>&nbsp;/ Hợp Đồng Đầu Tư</li>
    </ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Hợp Đồng Đầu Tư
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã</th>
                        <th>Chủ Đầu Tư</th>
                        <th>Ngày Lập</th>
                        <th>Tổng Vốn</th>
                        <th>Số Lượng</th>
                        <th>Thời Hạn</th>
                        <th>In</th>
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

      <td><form method="post" action="">@csrf<button class='btn btn-success'>In</button></form></td>

    </tr>
    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Mã</th>
                        <th>Chủ Đầu Tư</th>
                        <th>Ngày Lập</th>
                        <th>Tổng Vốn</th>
                        <th>Số Lượng</th>
                        <th>Thời Hạn</th>
                        <th>In</th>
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