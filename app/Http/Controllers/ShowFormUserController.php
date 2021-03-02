<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ShowFormUserController extends Controller
{
    //===========================================================
    // USER
    public function showBantin1(Request $request) {  
        $bt = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('mabt','tenbantin','hinhanh','noidungtomtat')
        ->limit(3)
        ->where('tendanhmuc','=','Góc KingLand')
        ->get();

        $bt2 = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('mabt','tenbantin','hinhanh','noidungtomtat')
        ->skip(3)->take(3)
        ->where('tendanhmuc','=','Góc KingLand')
        ->get();

        return View::make("cate_gockingland", compact('bt', 'bt2'));
    }
    public function showBantin2(Request $request) {
        $bt = \DB::table('tintuc')
        ->select('matt','tieudett','anhtt','tomtattt')
        ->limit(3)
        ->get();

        $bt2 = \DB::table('tintuc')
        ->select('matt','tieudett','anhtt','tomtattt')
        ->skip(3)->take(3)
        ->get();

        return View::make("cate_tintuc", compact('bt', 'bt2'));
    }
    public function showBantin3(Request $request) {
        $bt = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('mabt','tenbantin','hinhanh','noidungtomtat')
        ->limit(3)
        ->where('tendanhmuc','=','Kiến Thức')
        ->get();

        $bt2 = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('mabt','tenbantin','hinhanh','noidungtomtat')
        ->skip(3)->take(3)
        ->where('tendanhmuc','=','Kiến Thức')
        ->get();

        return View::make("cate_kienthuc", compact('bt', 'bt2'));
    }
    public function showBantin4(Request $request) {
        $bt = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('mabt','tenbantin','hinhanh','noidungtomtat')
        ->limit(3)
        ->where('tendanhmuc','=','Tuyển Dụng')
        ->get();

        $bt2 = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('mabt','tenbantin','hinhanh','noidungtomtat')
        ->skip(3)->take(3)
        ->where('tendanhmuc','=','Kiến Thức')
        ->get();

        return View::make("cate_tuyendung", compact('bt', 'bt2'));
    }
    public function showBantin5(Request $request) {
        $bds = \DB::table('batdongsan')
        // ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('mabds','tenbds','anhbds','motabds')
        ->limit(3)
        ->get();

        $bds2 = \DB::table('batdongsan')
        // ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('mabds','tenbds','anhbds','motabds')
        ->skip(3)->take(3)
        ->get();

        return View::make("cate_batdongsan", compact('bds', 'bds2'));
    }

    //CHITIET
    public function chitietGKL(Request $request) {
        $ma = $request->mabt;

        $bt = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('tenbantin','hinhanh','noidung')
        ->where('mabt',$ma)
        ->get();

        return View::make("ct_cate_gockingland", compact('bt'));
    }
    public function chitietTT(Request $request) {
        $ma = $request->matt;

        $bt = \DB::table('tintuc')
        ->select('tieudett','anhtt','noidungtt')
        ->where('matt',$ma)
        ->get();

        return View::make("ct_cate_tintuc", compact('bt'));
    }
    public function chitietKT(Request $request) {
        $ma = $request->mabt;

        $bt = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('tenbantin','hinhanh','noidung')
        ->where('mabt',$ma)
        ->get();

        return View::make("ct_cate_kienthuc", compact('bt'));
    }
    public function chitietTD(Request $request) {
        $ma = $request->mabt;

        $bt = \DB::table('bantin')
        ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('tenbantin','hinhanh','noidung')
        ->where('mabt',$ma)
        ->get();

        return View::make("ct_cate_tuyendung", compact('bt'));
    }
    public function chitietBDS(Request $request) {
        $ma = $request->mabds;

        $bds = \DB::table('batdongsan')
        // ->join('danhmuc', 'danhmuc.madm', '=', 'bantin.madm')
        ->select('tenbds','anhbds','motabds','tinhtrangbds')
        ->where('mabds',$ma)
        ->get();

        return View::make("ct_cate_batdongsan", compact('bds'));
    }
    public function chitietDA(Request $request) {
        $ma = $request->mada;

        $da = \DB::table('duan')
        ->select('tenda','hinhanh','noidung')
        ->where('mada',$ma)->get();

        return View::make("ct_cate_duan", compact('da'));
    }
}
