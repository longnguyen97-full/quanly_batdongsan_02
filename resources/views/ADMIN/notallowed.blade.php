@extends('admin/master')
@section('title', 'Quản Lý')
@section('main')

<h1 class="mt-4">Quản Lý : </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><form style="height: 12px;" method="post" action="{{route('tailai')}}">@csrf<button id="non-button" type="submit">Bảng Quản Lý</button></form>&nbsp;/ </li>
    </ol>

<div class="alert alert-danger" role="alert">
  Bạn không có quyền thực hiện chức năng này!
</div>
<div class="alert alert-danger" role="alert">
  Vui lòng đăng nhập với quyền quản lý hoặc nhờ hỗ trợ!
</div>
@stop