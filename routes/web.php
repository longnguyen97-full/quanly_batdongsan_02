<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//===========================================================
// USER
Route::group(['prefix'=>''], function(){
	Route::get('/', function(){
		return view('trangchu');
	});
	
	Route::get('trangchu', function(){
		return view('trangchu');
	});
	Route::get('gioithieu', function(){
		return view('cate_gioithieu');
	});
	Route::get('tintuc', function(){
		return view('cate_tintuc');
	});
	Route::get('kienthuc', function(){
		return view('cate_kienthuc');
	});
	Route::get('tuyendung', function(){
		return view('cate_tuyendung');
	});
	Route::get('lienhe', function(){
		return view('cate_lienhe');
	});
	Route::get('batdongsan', function(){
		return view('cate_batdongsan');
	});
	Route::get('cate_duan1', function(){
		return view('cate_duan1');
	});
	Route::get('cate_duan2', function(){
		return view('cate_duan2');
	});
	Route::get('cate_duan3', function(){
		return view('cate_duan3');
	});

	Route::post('trangchu', function(){
		return view('trangchu');
	})->name('user_tailai');

	Route::post('gioithieu', function(){
		return view('cate_gioithieu');
	})->name('user_gioithieu');

	Route::post('lienhe', function(){
		return view('cate_lienhe');
	})->name('user_lienhe');

	Route::post('bantin1', 'ShowFormUserController@showBantin1')->name("bantin1");
	Route::post('bantin2', 'ShowFormUserController@showBantin2')->name("bantin2");
	Route::post('bantin3', 'ShowFormUserController@showBantin3')->name("bantin3");
	Route::post('bantin4', 'ShowFormUserController@showBantin4')->name("bantin4");
	Route::post('bantin5', 'ShowFormUserController@showBantin5')->name("bantin5");

	Route::post('chitiet_gkl/{mabt}', 'ShowFormUserController@chitietGKL')->name('chitiet_gkl');
	Route::post('chitiet_tt/{matt}', 'ShowFormUserController@chitietTT')->name('chitiet_tt');
	Route::post('chitiet_kt/{mabt}', 'ShowFormUserController@chitietKT')->name('chitiet_kt');
	Route::post('chitiet_td/{mabt}', 'ShowFormUserController@chitietTD')->name('chitiet_td');
	Route::post('chitiet_bds/{mabds}', 'ShowFormUserController@chitietBDS')->name('chitiet_bds');

	Route::post('chitiet_da/{mada}', 'ShowFormUserController@chitietDA')->name('chitiet_da');
});



//===========================================================
// ADMIN
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', function() {
		return view("admin/dangnhap");
	});

	Route::post('quanly', 'AuthController@xulyDangnhap')->name('quanly');
	Route::post('tailai', 'AuthController@xulyTailai')->name('tailai');
	Route::post('dangky', 'AuthController@xulyDangky')->name('dangky');
	Route::post('dangxuat', 'AuthController@xulyDangxuat')->name('dangxuat');
	Route::post('huongdan', 'AuthController@xulyHuongdan')->name('huongdan');
	Route::post('chuyentaikhoan', 'AuthController@xulyChuyentaikhoan')->name('chuyentaikhoan');

	//XEM
	Route::post('xem/{category}', 'CRUDController@showFormXem')->name('xem');

	//THEM
	Route::post('them/{category}', 'ShowFormController@showFormThem')->name("them");
	Route::post('xulythem/{category}', 'CRUDController@xulyThem')->name("xulythem");

	//THEM2
	Route::post('them2/{category}', 'ShowFormController@showFormThem2')->name("them2");
	Route::post('xulythem2/{category}', 'CRUDController@xulyThem2')->name("xulythem2");

	//SUA
	Route::post('sua/{ma}/{category}', 'ShowFormController@showFormSua')->name("sua");
	Route::post('xulysua/{ma}/{category}', 'CRUDController@xulySua')->name("xulysua");

	//XOA
	Route::post('xulyxoa/{ma}/{category}', 'CRUDController@xulyXoa')->name("xulyxoa");

	//THONGKE
	Route::post('thongke/{category}', 'CRUDController@showFormThongKe')->name('thongke');
});

//
