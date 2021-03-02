<head>
	<title>Chi Tiết</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
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
	function back() {
		window.history.back();
	}
</script>

<div>
	<button onclick="back()" id="btnTLai" class="btn-success btn_cate" type="button">Trở Lại</button>
</div>

@foreach($bt as $row)

	<div align="center">
		<div> {{$row->tenbantin}} </div>
		<div> <image width="800" src="../{{$row->hinhanh}}"> </div>
		<div> {{$row->noidung}} </div>
	</div>
@endforeach