	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style type="text/css">
	button.btn_cate {
		margin-top: 10px;
		padding: 10px;
		outline: none;
		border: none;
	}
	a {
		padding-top: 20px;
	}
</style>

<script type="text/javascript">
$(document).ready(function(){
  $("#btnNLai").click(function(){
  	$("#txtTen").val("");
  	$("#txtMKhau").val("");
  	$("#txtMKhau2").val("");
  	$("#txtSDT").val("");
  	$("#txtEmail").val("");
  });

  $("#btnTLai").click(function(){
  	window.history.back();
  });
});
</script>

<div>
	<button onclick="demo()" id="btnTLai" class="btn-success btn_cate" type="button">Trở Lại</button>
</div>

<form class="form-group" method="post" action="">
	@csrf
	<h3 align="center">KingLand</h3>
<table align="center">
	<tr>
		<td>Tên đăng nhập : <input class="form-control" type="text" id="txtTen" name="txtTen" required></td>
	</tr>
	<tr>
		<td>Mật khẩu : <input class="form-control" type="password" id="txtMKhau" name="txtMKhau" required></td>
	</tr>
	<tr>
		<td>Xác nhận mật khẩu : <input class="form-control" type="password" id="txtMKhau2" name="txtMKhau2" required></td>
	</tr>
	<tr>
		<td>Số điện thoại : <input class="form-control" type="number" min="0" id="txtSDT" name="txtSDT" required></td>
	</tr>
	<tr>
		<td>Email : <input class="form-control" type="email" id="txtEmail" name="txtEmail" required></td>
	</tr>
	<td align="center">
		<button class="btn-success btn_cate" type="submit">Đăng Ký</button>
		<button id="btnNLai" class="btn-success btn_cate" type="button">Nhập Lại</button>
	</td>
</table>	
</form>
