<!DOCTYPE html>
<html lang="vn">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KingLand : Chi Tiết</title>
	  	<link href="../css/style.css" rel="stylesheet">
	  	<link href="../css/stylesheet.css" rel="stylesheet">
	  	<link href="../css/stylesheet_backup.css" rel="stylesheet">
	  	<link href="../css/footer.css" rel="stylesheet">
	  	<link href="../fontawesome/css/all.css" rel="stylesheet">
	  	<link href="../fontawesome/css/fontawesome.min.css" rel="stylesheet">
	  	<link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
	  	<script src="../jquery/jquery-3.5.1.min.js"></script>
	  	<script src="../jquery/bootstrap.min.js"></script>
{{-- 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
</head>
<body>
	@include('ctmenu_social')
	@include('ctmenu')
	@include('ctheader')
	<hr>
	@yield('ctmain')
	@include('ctfooter')
</body>
</html>