<style type="text/css">
    #non-btn {
        outline: none;
        border: none;
        background: none;
    }
    #non-btn:hover {
        text-decoration: underline;
    }
</style>

@extends('admin/master')
@section('title', 'Quản Lý')
@section('main')
@php $count = 0; $bds="BDS";$kh="KH";$nv="NV";$cdt="CDT"; @endphp

<h1 class="mt-4">Quản Lý</h1>

	<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Bảng Quản Lý</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Bất Động Sản</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <form style="height: 3px;" method="post" action="{{route('xem',$bds)}}">@csrf
                        <button id="non-btn" class="small text-white stretched-link" type="submit" id="dropdown-item-btn"><a>Xem Chi Tiết</a></button>
                    </form>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Nhân Viên</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <form style="height: 3px;" method="post" action="{{route('xem',$nv)}}">@csrf
                        <button id="non-btn" class="small text-white stretched-link" type="submit" id="dropdown-item-btn"><a>Xem Chi Tiết</a></button>
                    </form>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Chủ Đầu Tư</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <form style="height: 3px;" method="post" action="{{route('xem',$cdt)}}">@csrf
                        <button id="non-btn" class="small text-white stretched-link" type="submit" id="dropdown-item-btn"><a>Xem Chi Tiết</a></button>
                    </form>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Khách Hàng</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <form style="height: 3px;" method="post" action="{{route('xem',$kh)}}">@csrf
                        <button id="non-btn" class="small text-white stretched-link" type="submit" id="dropdown-item-btn"><a>Xem Chi Tiết</a></button>
                    </form>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area mr-1"></i>
                    Mức Tăng Trưởng Tính Đến Tháng : <?php echo date("m/Y"); ?>
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar mr-1"></i>
                    Biểu Đồ Doanh Thu
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Báo Cáo Bất Động Sản
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã</th>
                            <th>Bất Động Sản</th>
                            <th>Dự Án</th>
                            <th>Loại</th>
                            <th>Mức Ưu Tiên</th>
{{--                             <th>Chủ Đầu Tư</th>
                            <th>Vốn Đầu Tư</th> --}}
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Mã</th>
                            <th>Bất Động Sản</th>
                            <th>Dự Án</th>
                            <th>Loại</th>
                            <th>Mức Ưu Tiên</th>
{{--                             <th>Chủ Đầu Tư</th>
                            <th>Vốn Đầu Tư</th> --}}
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data as $row)
                    @php $count++; @endphp
                    <tr>
                      <td>{{$count}}</td>
                      @foreach($row as $key => $value)
                      <td>
                        @php
                            if ($key == "uutien") {
                                if ($value == "1") {
                                    echo "Ưu Tiên";
                                } else {echo "Không";}
                            } else {echo $value;}               
                        @endphp
                      @endforeach
                      </td>
{{--                       @foreach($data2 as $row2)
                      @foreach($row2 as $key2 => $value2)
                      <td>@php echo $value2; @endphp</td>
                      @endforeach
                      @endforeach --}}
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
@include('admin/chart-area')
@include('admin/chart-bar')

@stop