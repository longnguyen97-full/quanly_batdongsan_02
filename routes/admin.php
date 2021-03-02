<?php
// CREATE TABLE
Route::get('crt_parent', function(){
	Schema::create('vanphong', function ($table) {
		$table->Increments('idvp');
		$table->string('mavp', 10)->unique();
		$table->string('ddiemvp', 50);
		$table->timestamps();
	});
	Schema::create('loai', function ($table) {
		$table->Increments('idloai');
		$table->string('maloai', 10)->unique();
		$table->string('tenloai', 50);
		$table->double('dongia');
		$table->string('loaitien', 3);
		$table->string('mausac', 50);
		$table->timestamps();
	});
	Schema::create('duan', function ($table) {
		$table->Increments('idda');
		$table->string('mada', 10)->unique();
		$table->string('tenda', 50);
		$table->boolean('uutien');
		$table->timestamps();
	});
	Schema::create('vitri', function ($table) {
		$table->Increments('idvt');
		$table->string('mavt', 10)->unique();
		$table->string('thanhpho', 50);
		$table->string('mavung', 50);
		$table->string('tenduong', 50);
		$table->timestamps();
	});
	Schema::create('chudautu', function ($table) {
		$table->Increments('idcdt');
		$table->string('macdt', 10)->unique();
		$table->string('tencdt', 50);
		$table->string('dchicdt', 50);
		$table->string('sdtcdt', 15);
		$table->timestamps();
	});
	Schema::create('khachhang', function ($table) {
		$table->Increments('idkh');
		$table->string('makh', 10)->unique();
		$table->string('hotenkh', 50);
		$table->date('ngsinhkh');
		$table->string('dchikh', 50);
		$table->string('sdtkh', 15);
		$table->timestamps();
	});
	Schema::create('chude', function ($table) {
		$table->Increments('idcd');
		$table->string('macd', 10)->unique();
		$table->string('tencd', 20);
		$table->timestamps();
	});
	Schema::create('ads', function ($table) {
		$table->Increments('idads');
		$table->string('maads', 10)->unique();
		$table->string('linkads', 50);
		$table->string('bannerads', 50);
		$table->timestamps();
	});
	Schema::create('luottruycap', function ($table) {
		$table->Increments('idltc');
		$table->string('maltc', 10)->unique();
		$table->integer('dangonline');
		$table->integer('soluot');
		$table->timestamps();
	});
	Schema::create('danhmuc', function ($table) {
		$table->Increments('iddm');
		$table->string('madm')->unique();
		$table->string('tendanhmuc');
		$table->timestamps();	
	});
	Schema::create('bantin', function ($table) {
		$table->Increments('idbt');
		$table->string('mabt', 10)->unique();
		$table->string('madm', 10);
		$table->foreign('madm')->references('madm')->on('danhmuc');
		$table->string('tenbantin', 100);
		$table->text('noidungtomtat');
		$table->text('noidung');
		$table->timestamps();
	});
	Schema::create('taikhoan', function ($table) {
		$table->string('taikhoan');
		$table->string('matkhau');
		$table->string('phanquyen');
		$table->timestamps();	
	});
	return ("create parent-table successfully!");
});
//===========================================================
Route::get('crt_child', function(){
	Schema::create('nhanvien', function ($table) {
		$table->Increments('idnv');
		$table->string('manv', 10)->unique();
		$table->string('mavp', 10);
		$table->foreign('mavp')->references('mavp')->on('vanphong');
		$table->string('hotennv', 50);
		$table->date('ngsinhnv');
		$table->string('dchinv', 50);
		$table->string('sdtnv', 15);
		$table->timestamps();
	});
	Schema::create('batdongsan', function ($table) {
		$table->Increments('idbds');
		$table->string('mabds', 10)->unique();
		$table->string('mavt', 10);
		$table->foreign('mavt')->references('mavt')->on('vitri');
		$table->string('mada', 10);
		$table->foreign('mada')->references('mada')->on('duan');
		$table->string('maloai', 10);
		$table->foreign('maloai')->references('maloai')->on('loai');
		$table->string('tenbds', 50);
		$table->string('anhbds');
		$table->string('motabds', 50);
		$table->string('tinhtrangbds', 5);
		$table->timestamps();
	});
	Schema::create('hopdongdautu', function ($table) {
		$table->Increments('idhddt');
		$table->string('mahddt', 10)->unique();
		$table->string('macdt', 10);
		$table->foreign('macdt')->references('macdt')->on('chudautu');
		$table->string('manv', 10);
		$table->foreign('manv')->references('manv')->on('nhanvien');
		$table->string('mabds', 10);
		$table->foreign('mabds')->references('mabds')->on('batdongsan');
		$table->datetime('ngaylaphddt');
		$table->string('tinhtranghddt', 5);
		$table->timestamps();
	});
	Schema::create('ct_hopdongdautu', function ($table) {
		$table->string('mahddt', 10);
		$table->foreign('mahddt')->references('mahddt')->on('hopdongdautu');
		$table->double('tongvon');
		$table->integer('soluong');
		$table->integer('thoihan');
		$table->timestamps();
	});
	Schema::create('hopdongmuaban', function ($table) {
		$table->Increments('idhdmb');
		$table->string('mahdmb', 10)->unique();
		$table->string('manv', 10);
		$table->foreign('manv')->references('manv')->on('nhanvien');
		$table->string('makh', 10);
		$table->foreign('makh')->references('makh')->on('khachhang');
		$table->string('mabds', 10);
		$table->foreign('mabds')->references('mabds')->on('batdongsan');
		$table->datetime('ngaylaphdmb');
		$table->string('tinhtranghdmb', 5);
		$table->timestamps();
	});
	Schema::create('ct_hopdongmuaban', function ($table) {
		$table->string('mahdmb', 10);
		$table->foreign('mahdmb')->references('mahdmb')->on('hopdongmuaban');
		$table->integer('soluong');
		$table->double('tongtien');
		$table->double('tratruoc');
		$table->double('conlai');
		$table->timestamps();	
	});
	Schema::create('tintuc', function ($table) {
		$table->Increments('idtt');
		$table->string('matt', 10)->unique();
		$table->string('macd', 10);
		$table->foreign('macd')->references('macd')->on('chude');
		$table->string('tieudett', 20);
		$table->datetime('ngdangtt');
		$table->string('tomtattt', 20);
		$table->string('noidungtt', 50);
		$table->string('anhtt', 50);
		$table->timestamps();
	});
	Schema::create('danhsach', function ($table) {
		$table->Increments('idds');
		$table->string('mads', 10)->unique();
		$table->string('mavp', 10);
		$table->foreign('mavp')->references('mavp')->on('vanphong');
		$table->string('mabds', 10);
		$table->foreign('mabds')->references('mabds')->on('batdongsan');
		$table->timestamps();
	});
	Schema::create('danhgia', function ($table) {
		$table->Increments('iddg');
		$table->string('madg', 10)->unique();
		$table->string('makh', 10);
		$table->foreign('makh')->references('makh')->on('khachhang');
		$table->string('mabds', 10);
		$table->foreign('mabds')->references('mabds')->on('batdongsan');
		$table->integer('sao');
		$table->string('tieudedg', 20);
		$table->string('noidungdg', 50);
		$table->datetime('ngdg');
		$table->timestamps();
	});
	Schema::create('phanhoidanhgia', function ($table) {
		$table->Increments('idph');
		$table->string('maph', 10)->unique();
		$table->string('madg', 10);
		$table->foreign('madg')->references('madg')->on('danhgia');
		$table->string('manv', 10);
		$table->foreign('manv')->references('manv')->on('nhanvien');
		$table->string('noidungph', 50);
		$table->datetime('ngph');
		$table->timestamps();
	});
	return ("create child-table successfully!");
});

?>