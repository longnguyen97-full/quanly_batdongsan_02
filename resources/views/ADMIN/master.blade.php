<style type="text/css">
    #dropdown-item-btn {
      background: none!important;
      padding: 0!important;
      border: none;
      outline: none;
      bottom: 0;
    }
</style>

<!DOCTYPE html>
<html lang="vn">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KingLand : Quản Lý</title>
        <link href="css/styles.css" rel="stylesheet" />@include('admin/css') @include('admin/mycss')
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a style="cursor: pointer;" class="navbar-brand" onclick="reload()">KingLand</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tìm theo..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        {{-- DROPDOWN-BUTTON-ADMIN --}}
                        <form style="height: 20px;" method="post" action="{{route('dangky')}}">@csrf
                            <button class="dropdown-item" type="submit" id="dropdown-item-btn"><a class="dropdown-item">Thêm Tài Khoản</a></button>
                        </form>
                        <form style="height: 20px;" method="post" action="{{route('chuyentaikhoan')}}">@csrf
                            <button class="dropdown-item" type="submit" id="dropdown-item-btn"><a class="dropdown-item">Chuyển Tài Khoản</a></button>
                        </form>
                        <form style="height: 20px;" method="post" action="{{route('huongdan')}}">@csrf
                            <button class="dropdown-item" type="submit" id="dropdown-item-btn"><a class="dropdown-item">Hướng Dẫn</a></button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <form style="height: 20px;" method="post" action="{{route('dangxuat')}}">@csrf
                            <button class="dropdown-item" type="submit" id="dropdown-item-btn"><a class="dropdown-item">Đăng Xuất</a></button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        
        {{-- SIDEBARMENU --}}
        @include('admin/sidebarmenu')


        {{-- MAIN_CONTENT --}}
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('main')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; KingLand 2020</div>
                            <div>
                                <a href="#">Thỏa Thuận Riêng Tư</a>
                                &middot;
                                <a href="#">Điều Khoản &amp; Luật Lệ</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>@include('admin/js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
