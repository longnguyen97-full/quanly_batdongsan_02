<style type="text/css">
    #nav-link-btn {
        outline: none;
        border: none;
        background-color: #212529;
    }
</style>

@php $bds="BDS";$kh="KH";$nv="NV";$cdt="CDT";$hddt="HDDT";$hdmb="HDMB";
$vp="VP";$vt="VT";$loai="LOAI";$da="DA";$cd="CD";$dm="DM"; @endphp

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Trang Chính</div>
                            <form style="height: 20px;" method="post" action="{{ route('tailai') }}">@csrf
                                <button id="nav-link-btn" type="submit"><a class="nav-link"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Quản Lý</a></button>
                            </form>
                            <div class="sb-sidenav-menu-heading">Tác Vụ Chính</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Xem
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <form style="height: 30px;" method="post" action="{{route('xem',$bds)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Bất Động Sản</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('xem',$nv)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Nhân Viên</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('xem',$cdt)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Chủ Đầu Tư</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('xem',$kh)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Khách Hàng</a></button>
                                    </form>
                                    <div class="sb-sidenav-menu-heading">Hợp Đồng</div>
                                    <form style="height: 30px;" method="post" action="{{route('xem',$hddt)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Đầu Tư</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('xem',$hdmb)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Mua Bán</a></button>
                                    </form>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Thêm 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <div class="sb-sidenav-menu-heading">Quản Lý</div>
                                    <form style="height: 30px;" method="post" action="{{route('them',$bds)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Bất Động Sản</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them',$nv)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Nhân Viên</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them',$cdt)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Chủ Đầu Tư</a></button>
                                    </form>

                                    <div class="sb-sidenav-menu-heading">Nhân Viên</div>
                                    <form style="height: 30px;" method="post" action="{{route('them',$kh)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Khách Hàng</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them',$hddt)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">HĐ Đầu Tư</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them',$hdmb)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">HĐ Mua Bán</a></button>
                                    </form>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Thêm 2
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <div class="sb-sidenav-menu-heading">Quản Lý</div>
                                    <form style="height: 30px;" method="post" action="{{route('them2',$vp)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Văn Phòng</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them2',$vt)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Vị Trí</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them2',$loai)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Loại</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them2',$da)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Dự Án</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them2',$cd)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Chủ Đề</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('them2',$dm)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Danh Mục</a></button>
                                    </form>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Thống Kê
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <div class="sb-sidenav-menu-heading">Quản Lý</div>
                                    <form style="height: 30px;" method="post" action="{{route('thongke',$bds)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Bất Động Sản</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('thongke',$nv)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Nhân Viên</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('thongke',$cdt)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Chủ Đầu Tư</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('thongke',$kh)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Khách Hàng</a></button>
                                    </form>
                                    <div class="sb-sidenav-menu-heading">Hợp Đồng</div>
                                    <form style="height: 30px;" method="post" action="{{route('thongke',$hddt)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Đầu Tư</a></button>
                                    </form>
                                    <form style="height: 30px;" method="post" action="{{route('thongke',$hdmb)}}">@csrf
                                        <button type="submit" id="nav-link-btn"><a class="nav-link">Mua Bán</a></button>
                                    </form>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Xin chào:</div>
                        <?php $value = session()->get('level'); echo $value; ?>
                    </div>
                </nav>
            </div>