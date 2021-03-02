<style>
div.scrollmenu {
  background-color: #333;
  white-space: nowrap;
  text-align: center;
}

div.scrollmenu a {
  display: inline-block;
  color: #f2f2f2;
  font-weight: 500;
  font-family: -webkit-animation: name duration timing-function delay iteration-count direction fill-mode;
  -o-animation: name duration timing-function delay iteration-count direction fill-mode;
  animation: name duration timing-function delay iteration-count direction fill-mode;
  text-align: center;
  padding: 7px 14px 7px 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}

</style>

<style type="text/css">
  .dropdown {
    position: relative;
    display: inline-block;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    z-index: 1;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  }

div.scrollmenu a.droptitle {
  background-color: #333;
  color: #f2f2f2;
  padding: 16px;
  font-size: 16px;
  border: none;
  font-weight: 500;
  font-family: -webkit-animation: name duration timing-function delay iteration-count direction fill-mode;
  -o-animation: name duration timing-function delay iteration-count direction fill-mode;
  animation: name duration timing-function delay iteration-count direction fill-mode;
}

div.scrollmenu a.droptitle:hover {color:#f2f2f2;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #777;}

#btnBT {
  display: inline-block;
  border: none;
  outline: none;
  margin: 0;
  padding: 0;
  line-height: 1;
  background: transparent;
  -webkit-appearance: none;

  font-family: -webkit-animation: name duration timing-function delay iteration-count direction fill-mode;
  -o-animation: name duration timing-function delay iteration-count direction fill-mode;
  animation: name duration timing-function delay iteration-count direction fill-mode;
  text-align: center;
  padding: 7px 0px 7px 0px;
  text-decoration: none;

  color: #f2f2f2;  font-weight: 500;
}
#btnBT:hover {
  color:#f2f2f2;
  background-color: #777;
  cursor: pointer;
}

</style>

<script type="text/javascript">
  $(document).ready(function() {
    $('#logo').click(function(){
      location.reload();
     });
  });
</script>

@php $da1 = 'bac'; $da2 = 'trung'; $da3 = 'nam';
$gkl = 'gkl'; $tt = 'gkl'; $kt = 'gkl'; $td = 'gkl'; $bds = 'gkl';
@endphp

<div class="scrollmenu">

  <a href="trangchu"><img id="logo" src="hinh/logo.png" width="97" height="36"></a>
  <a href="gioithieu">Giới Thiệu</a>

  <div class="dropdown">
    <a class="droptitle">Dự Án</a>
    <div class="dropdown-content">

      <a href="{{url('cate_duan1')}}">Miền Bắc</a>
      <a href="{{url('cate_duan2')}}">Miền Trung</a>
      <a href="{{url('cate_duan3')}}">Miền Nam</a>

    </div>
  </div>

{{-- <button id="btnBT" type="button">
  <form method="post" action="{{route('bantin1')}}">@csrf
    <button id="btnBT" type="submit"><a>Góc KingLand</a></button>
  </form>
</button> --}}

<button id="btnBT" type="button">
  <form method="post" action="{{route('bantin2')}}">@csrf
    <button id="btnBT" type="submit"><a>Tin Tức</a></button>
  </form>
</button>

<button id="btnBT" type="button">
  <form method="post" action="{{route('bantin3')}}">@csrf
    <button id="btnBT" type="submit"><a>Kiến Thức</a></button>
  </form>
</button>

<button id="btnBT" type="button">
  <form method="post" action="{{route('bantin4')}}">@csrf
    <button id="btnBT" type="submit"><a>Tuyển Dụng</a></button>
  </form>
</button>

  <a href="lienhe">Liên Hệ</a>
<button id="btnBT" type="button">
  <form method="post" action="{{route('bantin5')}}">@csrf
    <button id="btnBT" type="submit"><a>Bất Động Sản</a></button>
  </form>
</button>
  {{-- <a href="thongtinthem">Thông Tin Thêm</a> --}}

</div>