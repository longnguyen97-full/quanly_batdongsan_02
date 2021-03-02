<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class AuthController extends Controller
{
    public function xulyDangnhap(Request $request) {
        $tendangnhap = $request -> txtTKhoan;
        $matkhau = $request -> txtMKhau;

        $tendangnhap_rep = \DB::table('taikhoan')->select('taikhoan')->where('taikhoan', $tendangnhap)->value('taikhoan');
        $matkhau_rep = \DB::table('taikhoan')->select('matkhau')->where('matkhau', $matkhau)->value('matkhau');
            
        if ($tendangnhap == $tendangnhap_rep && $matkhau == $matkhau_rep) {
            $level = \DB::table('taikhoan')->select('phanquyen')->where('taikhoan', $tendangnhap)->value('phanquyen');

            if ($level == 'quanly') {
                $request->session()->put('level','Quản Lý');
            } else {
                $request->session()->put('level','Nhân Viên');
            }

            //FILL DATA
            $data = \DB::table('batdongsan')
            ->join('duan', 'duan.mada', '=', 'batdongsan.mada')
            ->join('loai', 'loai.maloai', '=', 'batdongsan.maloai')
            ->select('mabds', 'tenbds', 'tenda', 'tenloai', 'uutien')
            ->get();

            foreach ($data as $row) {
                $ma = $row->mabds;
            }

            // $data2 = \DB::table('hopdongdautu')
            // ->join('batdongsan', 'batdongsan.mabds', '=', 'hopdongdautu.mabds')
            // ->join('chudautu', 'chudautu.macdt', '=', 'hopdongdautu.macdt')
            // ->join('ct_hopdongdautu', 'ct_hopdongdautu.mahddt', '=', 'hopdongdautu.mahddt')
            // ->select('tencdt', 'tongvon')
            // ->where('batdongsan.mabds', '=', $ma)
            // ->get();

            return View::make("admin/quanly", compact('data'));

        } else {
            return back();
        }
    }

    public function xulyTailai(Request $request) {
        if ($request->session()->has('level')) {
            $value = session()->get('level');
            if ($value == "Quản Lý") {
                $request->session()->forget('level');
                $request->session()->put('level','Quản Lý');

                //FILL DATA
                $data = \DB::table('batdongsan')
                ->join('duan', 'duan.mada', '=', 'batdongsan.mada')
                ->join('loai', 'loai.maloai', '=', 'batdongsan.maloai')
                ->select('mabds', 'tenbds', 'tenda', 'tenloai', 'uutien')
                ->get();

                foreach ($data as $row) {
                    $ma = $row->mabds;
                }

                // $data2 = \DB::table('hopdongdautu')
                // ->join('batdongsan', 'batdongsan.mabds', '=', 'hopdongdautu.mabds')
                // ->join('chudautu', 'chudautu.macdt', '=', 'hopdongdautu.macdt')
                // ->join('ct_hopdongdautu', 'ct_hopdongdautu.mahddt', '=', 'hopdongdautu.mahddt')
                // ->select('tencdt', 'tongvon')
                // ->where('batdongsan.mabds', '=', $ma)
                // ->get();

                return View::make("admin/quanly", compact('data'));
            } else {
                $request->session()->forget('level');
                $request->session()->put('level','Nhân Viên');

                //FILL DATA
                $data = \DB::table('batdongsan')
                ->join('duan', 'duan.mada', '=', 'batdongsan.mada')
                ->join('loai', 'loai.maloai', '=', 'batdongsan.maloai')
                ->select('mabds', 'tenbds', 'tenda', 'tenloai', 'uutien')
                ->get();

                foreach ($data as $row) {
                    $ma = $row->mabds;
                }

                // $data2 = \DB::table('hopdongdautu')
                // ->join('batdongsan', 'batdongsan.mabds', '=', 'hopdongdautu.mabds')
                // ->join('chudautu', 'chudautu.macdt', '=', 'hopdongdautu.macdt')
                // ->join('ct_hopdongdautu', 'ct_hopdongdautu.mahddt', '=', 'hopdongdautu.mahddt')
                // ->select('tencdt', 'tongvon')
                // ->where('batdongsan.mabds', '=', $ma)
                // ->get();

                return View::make("admin/quanly", compact('data'));
            }
        } else {
            return redirect('/admin');
        }
    }

    public function xulyDangky(Request $request) {
        $value = session()->get('level');
        if ($value != "Quản Lý") {
            return view("admin/notallowed");
        } else {
            return view("admin/dangky");      
        }
    }

    public function xulyHuongdan(Request $request) {
        return view('admin/huongdan');
    }

    public function xulyDangxuat(Request $request) {
        if ($request->session()->has('level')) {
            $request->session()->forget('level');
            return redirect("/admin");
        }
    }
}
