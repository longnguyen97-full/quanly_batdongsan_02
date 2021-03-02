<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ShowFormController extends Controller
{
    //===========================================================
    // ADMIN
    //Show Form Them
    public function showFormThem(Request $request) {
        $cate = $request->category;

        //Kiem Tra Phan Quyen
        $value = session()->get('level');

        if ($cate == 'BDS' || $cate == 'NV' || $cate == 'CDT') {
            if ($value != "Quản Lý") {
                return view("admin/notallowed");
            } else {
                if ($cate == 'BDS') {
                    $vitri = \DB::table('vitri')->select('tenduong')->get();
                    $duan = \DB::table('duan')->select('tenda')->get();
                    $loai = \DB::table('loai')->select('tenloai')->get();

                    return View::make("admin/THEM/batdongsan", compact('vitri', 'duan', 'loai'));

                } else if ($cate == 'NV') {
                    $vanphong = \DB::table('vanphong')->select('ddiemvp')->get();

                    return View::make("admin/THEM/nhanvien", compact('vanphong'));

                } else if ($cate == 'CDT') {

                    return view("admin/THEM/chudautu");
                }
            }
        }

        if ($cate == 'KH') {

            return view("admin/THEM/khachhang");

        } else if ($cate == 'HDDT') {
            $nhanvien = \DB::table('nhanvien')->select('hotennv')->get();
            $chudautu = \DB::table('chudautu')->select('tencdt')->get();
            $batdongsan = \DB::table('batdongsan')->select('tenbds')->get();

            return View::make("admin/THEM/hopdongdautu", compact('nhanvien', 'chudautu', 'batdongsan'));

        } else if ($cate == 'HDMB') {
            $nhanvien = \DB::table('nhanvien')->select('hotennv')->get();
            $khachhang = \DB::table('khachhang')->select('hotenkh')->get();
            $batdongsan = \DB::table('batdongsan')->select('tenbds')->get();

            return View::make("admin/THEM/hopdongmuaban", compact('nhanvien', 'khachhang', 'batdongsan'));
        }
    }

    //Show Form Them 2
    public function showFormThem2(Request $request) {
        $cate = $request->category;

        //Kiem Tra Phan Quyen
        $value = session()->get('level');

        if ($value != "Quản Lý") {
            return view("admin/notallowed");
        } else {

            if ($cate == "VP") {
                return view("admin/THEM/t2_vanphong");

            } else if ($cate == "VT") {
                return view("admin/THEM/t2_vitri");

            } else if ($cate == "LOAI") {
                return view("admin/THEM/t2_loai");
                
            } else if ($cate == "DA") {
                return view("admin/THEM/t2_duan");

            } else if ($cate == "CD") {
                return view("admin/THEM/t2_chude");

            } else if ($cate == "DM") {
                return view("admin/THEM/t2_danhmuc");
            }

        }//KT XULY
    }

    //Show Form SUA
    public function showFormSua(Request $request) {
        $ma_sua = $request->ma;
        $cate_sua = $request->category;

        if ("bds" == $cate_sua) {
            $vitri = \DB::table('vitri')->select('tenduong')->get();
            $duan = \DB::table('duan')->select('tenda')->get();
            $loai = \DB::table('loai')->select('tenloai')->get();

			$data = \DB::table('batdongsan')
			->join('vitri', 'vitri.mavt', '=', 'batdongsan.mavt')
			->join('duan', 'duan.mada', '=', 'batdongsan.mada')
			->join('loai', 'loai.maloai', '=', 'batdongsan.maloai')
			->select('tenbds','tenduong','tenda','tenloai','motabds','anhbds')
			->where('mabds', '=', $ma_sua)
			->get();

            return View::make("admin/SUA/batdongsan", compact('ma_sua', 'cate_sua', 'vitri', 'duan', 'loai', 'data'));

        } else if ("kh" == $cate_sua) {
            $data = \DB::table('khachhang')
            ->select('hotenkh','dchikh','ngsinhkh','sdtkh')
            ->where('makh', '=', $ma_sua)
            ->get();

            return View::make("admin/SUA/khachhang", compact('ma_sua', 'cate_sua', 'data'));

        } else if ("nv" == $cate_sua) {
            $ddiemvp = \DB::table('vanphong')->select('ddiemvp')->get();

            $data = \DB::table('nhanvien')
            ->join('vanphong', 'vanphong.mavp', '=', 'nhanvien.mavp')
            ->select('hotennv','ddiemvp','dchinv','ngsinhnv','sdtnv')
            ->where('manv', '=', $ma_sua)
            ->get();

            return View::make("admin/SUA/nhanvien", compact('ma_sua', 'cate_sua', 'ddiemvp', 'data'));

        } else if ("cdt" == $cate_sua) {
            $data = \DB::table('chudautu')
            ->select('tencdt','dchicdt','sdtcdt')
            ->where('macdt', '=', $ma_sua)
            ->get();

            return View::make("admin/SUA/chudautu", compact('ma_sua', 'cate_sua', 'data'));

        } else if ("hddt" == $cate_sua) {
            $nhanvien = \DB::table('nhanvien')->select('hotennv')->get();
            $chudautu = \DB::table('chudautu')->select('tencdt')->get();

            $data = \DB::table('hopdongdautu')
            ->join('nhanvien', 'nhanvien.manv', '=', 'hopdongdautu.manv')
            ->join('chudautu', 'chudautu.macdt', '=', 'hopdongdautu.macdt')
            ->join('ct_hopdongdautu', 'ct_hopdongdautu.mahddt', '=', 'hopdongdautu.mahddt')
            ->select('tenhopdong','hotennv','tencdt','ngaylaphddt','soluong','tongvon','thoihan')
            ->where('hopdongdautu.mahddt', '=', $ma_sua)
            ->get();

            return View::make("admin/SUA/hopdongdautu", compact('ma_sua', 'cate_sua', 'nhanvien', 'chudautu','data'));

        } else if ("hdmb" == $cate_sua) {
            $nhanvien = \DB::table('nhanvien')->select('hotennv')->get();
            $khachhang = \DB::table('khachhang')->select('hotenkh')->get();
            $batdongsan = \DB::table('batdongsan')->select('tenbds')->get();

            $data = \DB::table('hopdongmuaban')
            ->join('nhanvien', 'nhanvien.manv', '=', 'hopdongmuaban.manv')
            ->join('khachhang', 'khachhang.makh', '=', 'hopdongmuaban.makh')
            ->join('batdongsan', 'batdongsan.mabds', '=', 'hopdongmuaban.mabds')
            ->join('ct_hopdongmuaban', 'ct_hopdongmuaban.mahdmb', '=', 'hopdongmuaban.mahdmb')
            ->select('tenhopdong','hotennv','hotenkh','tenbds','ngaylaphdmb','soluong','tongtien','tratruoc','conlai')
            ->where('hopdongmuaban.mahdmb', '=', $ma_sua)
            ->get();

            return View::make("admin/SUA/hopdongmuaban", compact('ma_sua', 'cate_sua', 'nhanvien', 'khachhang','batdongsan', 'data'));
        }
    }    
}
