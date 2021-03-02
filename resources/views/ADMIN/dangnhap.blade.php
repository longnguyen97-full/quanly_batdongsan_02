<!DOCTYPE html>
<html>
<head>
	<title>KingLand : Đăng Nhập</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script>
		$(document).ready(function() {
			$("#btnNLai").click(function() {
				$("#txtTKhoan").val("");
				$("#txtMKhau").val("");
			})
		})
	</script>

	<style>
		body {
		  	background-image: url("hinh/background_admin1.png");
		}
		.login-form {
			width: 340px;
	    	margin: 50px auto;
		}
	    .login-form form {
	    	margin-bottom: 15px;
	        background: #f7f7f7;
	        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	        padding: 30px;
	    }
	    .login-form h2 {
	        margin: 0 0 15px;
	    }
	    .form-control, .btn {
	        min-height: 38px;
	        border-radius: 2px;
	    }
	    .btn {
	        font-size: 15px;
	        font-weight: bold;
	        margin: 0px 15px 0px 15px;
	    }
	</style>
</head>
<body>
	
<div class="login-form">
    <form method="post" action="{{ route("quanly") }}">
    @csrf
        <h2 class="text-center">KingLand</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" required name="txtTKhoan" id="txtTKhoan">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Nhập mật khẩu" required name="txtMKhau" id="txtMKhau">
        </div>
        <div class="form-group" align="center">
            <button type="submit" class="btn btn-success">Đăng Nhập</button>
            <button type="button" class="btn btn-success" id="btnNLai">&nbsp;&nbsp;Nhập Lại&nbsp;&nbsp;</button>
        </div>
    </form>
</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>