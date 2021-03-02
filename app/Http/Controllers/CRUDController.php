<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Redirect;

class CRUDController extends Controller
{
	//XEM
    public function showFormXem(Request $request) {
		$cate = $request->category;

		if ($cate == "BDS") {
			$data = \DB::table('batdongsan')
			->join('vitri', 'vitri.mavt', '=', 'batdongsan.mavt')
			->join('duan', 'duan.mada', '=', 'batdongsan.mada')
			->join('loai', 'loai.maloai', '=', 'batdongsan.maloai')
			->select('mabds','tenbds','tenloai','tenduong','tenda','anhbds','motabds')
			->get();
			return View::make("admin/XEM/batdongsan", compact('data', 'cate'));

		} else if ($cate == "NV") {
			$data = \DB::table('nhanvien')
			->join('vanphong', 'vanphong.mavp', '=', 'nhanvien.mavp')
			->select('manv','hotennv','ddiemvp','ngsinhnv','dchinv','sdtnv')
			->get();
			return View::make("admin/XEM/nhanvien", compact('data', 'cate'));

		} else if ($cate == "KH") {
			$data = \DB::table('khachhang')
			->select('makh','hotenkh','ngsinhkh','dchikh','sdtkh')->get();
			return View::make("admin/XEM/khachhang", compact('data', 'cate'));

		} else if ($cate == "CDT") {
			$data = \DB::table('chudautu')
			->select('macdt','tencdt','dchicdt','sdtcdt')->get();
			return View::make("admin/XEM/chudautu", compact('data', 'cate'));

		} else if ($cate == "HDDT") {
			$data = \DB::table('hopdongdautu')
			->join('chudautu', 'chudautu.macdt', '=', 'hopdongdautu.macdt')
			->join('ct_hopdongdautu', 'ct_hopdongdautu.mahddt', '=', 'hopdongdautu.mahddt')
			->select('hopdongdautu.mahddt','tencdt','ngaylaphddt','tongvon','soluong','thoihan')
			->get();
			return View::make("admin/XEM/hopdongdautu", compact('data', 'cate'));
			
		} else if ($cate == "HDMB") {
			$data = \DB::table('hopdongmuaban')
			->join('nhanvien', 'nhanvien.manv', '=', 'hopdongmuaban.manv')
			->join('khachhang', 'khachhang.makh', '=', 'hopdongmuaban.makh')
			->join('ct_hopdongmuaban', 'ct_hopdongmuaban.mahdmb', '=', 'hopdongmuaban.mahdmb')
			->select('hopdongmuaban.mahdmb','hotennv','hotenkh','ngaylaphdmb','soluong','tongtien','tratruoc','conlai')
			->get();
			return View::make("admin/XEM/hopdongmuaban", compact('data', 'cate'));
		}
    }

    //THEM
	public function xulyThem(Request $request) {
		$cate = $request->category;

		if ($cate == "BDS") {
			$ma = $request->txtMa;
			$ten = $request->txtTen;
			$mota = $request->txtMTa;
			$hinhanh = $request->imgUpload;
			$tenduong = $request->sltVTri;
			$tenduan = $request->sltDAn;
			$tenloai = $request->sltLoai;

			$mabds = "BDS".$ma;
			$mavts = \DB::table('vitri')->select('mavt')->where('tenduong','=',$tenduong)->get();
			foreach ($mavts as $row) {foreach ($row as $key=>$value) {$mavt = $value;}}

			$madas = \DB::table('duan')->select('mada')->where('tenda','=',$tenduan)->get();
			foreach ($madas as $row) {foreach ($row as $key=>$value) {$mada = $value;}}

			$maloais = \DB::table('loai')->select('maloai')->where('tenloai','=',$tenloai)->get();
			foreach ($maloais as $row) {foreach ($row as $key=>$value) {$maloai = $value;}}			

			\DB::table('batdongsan')->insert([
				['mabds'=>$mabds, 'mavt'=>$mavt, 'mada'=>$mada, 'maloai'=>$maloai,
				 'tenbds'=>$ten, 'motabds'=>$mota, 'tinhtrangbds'=>"Mới", 'anhbds'=>$hinhanh]
			]);

		} else if ($cate == "NV") {
			$ma = $request->txtMa;
			$ten = $request->txtTen;
			$ngsinh = $request->txtNgSinh;
			$dchi = $request->txtDchi;
			$sdt = $request->txtSDT;
			$ddiemvp = $request->sltVPhong;

			$manv = "NV".$ma;
			$mavps = \DB::table('vanphong')->select('mavp')->where('ddiemvp','=',$ddiemvp)->get();
			foreach ($mavps as $row) {foreach ($row as $key=>$value) {$mavp = $value;}}

			\DB::table('nhanvien')->insert([
				['manv'=>$manv, 'mavp'=>$mavp, 'hotennv'=>$ten, 'ngsinhnv'=>$ngsinh, 'dchinv'=>$dchi,
				 'sdtnv'=>$sdt]
			]);

		} else if ($cate == "CDT") {
			$ma = $request->txtMa;
			$ten = $request->txtTen;
			$dchi = $request->txtDchi;
			$sdt = $request->txtSDT;

			$macdt = "CDT".$ma;

			\DB::table('chudautu')->insert([
				['macdt'=>$macdt, 'tencdt'=>$ten, 'dchicdt'=>$dchi, 'sdtcdt'=>$sdt]
			]);

		} else if ($cate == "KH") {
			$ma = $request->txtMa;
			$ten = $request->txtTen;
			$ngsinh = $request->txtNgSinh;
			$dchi = $request->txtDchi;
			$sdt = $request->txtSDT;

			$makh = "KH".$ma;

			\DB::table('khachhang')->insert([
				['makh'=>$makh, 'hotenkh'=>$ten, 'ngsinhkh'=>$ngsinh, 'dchikh'=>$dchi, 'sdtkh'=>$sdt]
			]);

		} else if ($cate == "HDDT") {
			$ma = $request->txtMa;
			$ten = $request->txtTen;
			$nglap = $request->txtNLap;

			$tennv = $request->sltNV;
			$tencdt = $request->sltCDT;
			$tenbds = $request->sltBDS;

			$soluong = $request->txtSLuong;
			$tongvon = $request->txtTVon;
			$thoihan = $request->txtTHan;

			$mahddt = "HDDT".$ma;
			$manvs = \DB::table('nhanvien')->select('manv')->where('hotennv','=',$tennv)->get();
			foreach ($manvs as $row) {foreach ($row as $key=>$value) {$manv = $value;}}

			$macdts = \DB::table('chudautu')->select('macdt')->where('tencdt','=',$tencdt)->get();
			foreach ($macdts as $row) {foreach ($row as $key=>$value) {$macdt = $value;}}		

			$mabdss = \DB::table('batdongsan')->select('mabds')->where('tenbds','=',$tenbds)->get();
			foreach ($mabdss as $row) {foreach ($row as $key=>$value) {$mabds = $value;}}	

			\DB::table('hopdongdautu')->insert([
				['mahddt'=>$mahddt, 'manv'=>$manv, 'macdt'=>$macdt, 'mabds'=>$mabds,
				'ngaylaphddt'=>$nglap, 'tinhtranghddt'=>"Mới", 'tenhopdong'=>$ten]
			]);

			\DB::table('ct_hopdongdautu')->insert([
				['mahddt'=>$mahddt, 'soluong'=>$soluong, 'tongvon'=>$tongvon, 'thoihan'=>$thoihan]
			]);

		} else if ($cate == "HDMB") {
			$ma = $request->txtMa;
			$ten = $request->txtTen;
			$nglap = $request->txtNLap;

			$tennv = $request->sltNV;
			$tenkh = $request->sltKH;
			$tenbds = $request->sltBDS;

			$soluong = $request->txtSLuong;
			$tongtien = $request->txtTTien;
			$tratruoc = $request->txtTTruoc;
			$conlai = $request->txtCLai;

			$mahdmb = "HDMB".$ma;
			$manvs = \DB::table('nhanvien')->select('manv')->where('hotennv','=',$tennv)->get();
			foreach ($manvs as $row) {foreach ($row as $key=>$value) {$manv = $value;}}

			$makhs = \DB::table('khachhang')->select('makh')->where('hotenkh','=',$tenkh)->get();
			foreach ($makhs as $row) {foreach ($row as $key=>$value) {$makh = $value;}}		

			$mabdss = \DB::table('batdongsan')->select('mabds')->where('tenbds','=',$tenbds)->get();
			foreach ($mabdss as $row) {foreach ($row as $key=>$value) {$mabds = $value;}}	

			\DB::table('hopdongmuaban')->insert([
				['mahdmb'=>$mahdmb, 'manv'=>$manv, 'makh'=>$makh, 'mabds'=>$mabds,
				'ngaylaphdmb'=>$nglap, 'tinhtranghdmb'=>"Mới", 'tenhopdong'=>$ten]
			]);

			\DB::table('ct_hopdongmuaban')->insert([
				['mahdmb'=>$mahdmb, 'soluong'=>$soluong, 'tongtien'=>$tongtien, 'tratruoc'=>$tratruoc, 
				'conlai'=>$conlai]
			]);
		}

		echo '<script type="text/javascript">
			alert("Thêm Thành Công!");
			window.history.back();
		</script>';
	}

    //SUA
	public function xulySua(Request $request) {
		$cate_sua = $request->category;
		$ma_sua = $request->txtMa;
		$ten = $request->txtTen;

		if ("bds" == $cate_sua) {
			$tenduong = $request->sltVTri;
			$tenduan = $request->sltDAn;
			$tenloai = $request->sltLoai;

			$mavts = \DB::table('vitri')->select('mavt')->where('tenduong',$tenduong)->get();
			foreach ($mavts as $row) {foreach ($row as $key=>$value) {$mavt = $value;}}

			$madas = \DB::table('duan')->select('mada')->where('tenda',$tenduan)->get();
			foreach ($madas as $row) {foreach ($row as $key=>$value) {$mada = $value;}}

			$maloais = \DB::table('loai')->select('maloai')->where('tenloai',$tenloai)->get();
			foreach ($maloais as $row) {foreach ($row as $key=>$value) {$maloai = $value;}}

			$data = \DB::table('batdongsan')->where('mabds',$ma_sua)
			->update(['tenbds'=>$ten, 'mavt'=>$mavt, 'mada'=>$mada, 'maloai'=>$maloai, 'motabds'=>$request->txtMTa, 'anhbds'=>$request->imgUpload]);

		} else if ("nv" == $cate_sua) {
			$ddiemvp = $request->sltVPhong;

			$mavps = \DB::table('vanphong')->select('mavp')->where('ddiemvp',$ddiemvp)->get();
			foreach ($mavps as $row) {foreach ($row as $key=>$value) {$mavp = $value;}}

			$data = \DB::table('nhanvien')->where('manv',$ma_sua)
			->update(['hotennv'=>$ten, 'mavp'=>$mavp, 'dchinv'=>$request->txtDchi, 'ngsinhnv'=>$request->txtNgSinh, 'sdtnv'=>$request->txtSDT]);

		} else if ("cdt" == $cate_sua) {

			$data = \DB::table('chudautu')->where('macdt',$ma_sua)
			->update(['tencdt'=>$ten, 'dchicdt'=>$request->txtDchi, 'sdtnv'=>$request->txtSDT]);

		} else if ("kh" == $cate_sua) {

			$data = \DB::table('khachhang')->where('makh',$ma_sua)
			->update(['hotenkh'=>$ten, 'dchicdt'=>$request->txtDchi, 'ngsinhkh'=>$request->txtNgSinh, 'sdtnv'=>$request->txtSDT]);

		} else if ("hddt" == $cate_sua) {
			$tennv = $request->sltNV;
			$tencdt = $request->sltCDT;

			$manvs = \DB::table('nhanvien')->select('manv')->where('hotennv',$tennv)->get();
			foreach ($manvs as $row) {foreach ($row as $key=>$value) {$manv = $value;}}

			$macdts = \DB::table('chudautu')->select('macdt')->where('tencdt',$tencdt)->get();
			foreach ($macdts as $row) {foreach ($row as $key=>$value) {$macdt = $value;}}

			$data = \DB::table('hopdongdautu')->where('mahddt',$ma_sua)
			->update(['tenhopdong'=>$ten, 'manv'=>$manv, 'macdt'=>$macdt, 'ngaylaphddt'=>$request->txtNLap]);

			$data2 = \DB::table('ct_hopdongdautu')->where('mahddt',$ma_sua)
			->update(['soluong'=>$request->txtSLuong, 'tongvon'=>$request->txtTVon, 'thoihan'=>$request->txtTHan]);

		} else if ("hdmb" == $cate_sua) {
			$tennv = $request->sltNV;
			$tenkh = $request->sltKH;
			$tenbds = $request->sltBDS;

			$manvs = \DB::table('nhanvien')->select('manv')->where('hotennv',$tennv)->get();
			foreach ($manvs as $row) {foreach ($row as $key=>$value) {$manv = $value;}}

			$makhs = \DB::table('khachhang')->select('makh')->where('hotenkh',$tenkh)->get();
			foreach ($makhs as $row) {foreach ($row as $key=>$value) {$makh = $value;}}

			$mabdss = \DB::table('batdongsan')->select('mabds')->where('tenbds',$tenbds)->get();
			foreach ($mabdss as $row) {foreach ($row as $key=>$value) {$mabds = $value;}}

			$data = \DB::table('hopdongmuaban')->where('mahdmb',$ma_sua)
			->update(['tenhopdong'=>$ten, 'manv'=>$manv, 'makh'=>$makh, 'mabds'=>$mabds, 'ngaylaphdmb'=>$request->txtNLap]);

			$data2 = \DB::table('ct_hopdongmuaban')->where('mahdmb',$ma_sua)
			->update(['soluong'=>$request->txtSLuong, 'tongtien'=>$request->txtTTien, 'tratruoc'=>$request->txtTTruoc, 'conlai'=>$request->txtCLai]);
		}

		echo '<script type="text/javascript">
			alert("Cập Nhật Thành Công!");
			window.history.go(-2);
		</script>';
	}

	//XOA
	public function xulyXoa(Request $request) {
		$cate_xoa = $request->category;
		$ma_xoa = $request->ma;

		if ("bds" == $cate_xoa) {
			$data = \DB::table('batdongsan')->where('mabds',$ma_xoa)->delete();
		} else if ("kh" == $cate_xoa) {
			$data = \DB::table('khachhang')->where('makh',$ma_xoa)->delete();
		} else if ("nv" == $cate_xoa) {
			$data = \DB::table('nhanvien')->where('manv',$ma_xoa)->delete();
		} else if ("cdt" == $cate_xoa) {
			$data = \DB::table('chudautu')->where('macdt',$ma_xoa)->delete();
		} else if ("hddt" == $cate_xoa) {
			$data = \DB::table('hopdongdautu')->where('mahddt',$ma_xoa)->delete();
		} else if ("hdmb" == $cate_xoa) {
			$data = \DB::table('hopdongmuaban')->where('mahdmb',$ma_xoa)->delete();
		}
		
		echo '<script type="text/javascript">
			alert("Xóa Thành Công!");
			window.history.back();
		</script>';
	}

	//THONGKE
    public function showFormThongKe(Request $request) {
		$cate = $request->category;

        //Kiem Tra Phan Quyen
        $value = session()->get('level');

        if ($value != "Quản Lý") {
            return view("admin/notallowed");
        } else {
			if ($cate == "BDS") {
				$data = \DB::table('batdongsan')
				->join('vitri', 'vitri.mavt', '=', 'batdongsan.mavt')
				->join('duan', 'duan.mada', '=', 'batdongsan.mada')
				->join('loai', 'loai.maloai', '=', 'batdongsan.maloai')
				->select('mabds','tenbds','tenloai','tenduong','tenda','anhbds','motabds')
				->get();
				return View::make("admin/THONGKE/batdongsan", compact('data', 'cate'));

			} else if ($cate == "NV") {
				$data = \DB::table('nhanvien')
				->join('vanphong', 'vanphong.mavp', '=', 'nhanvien.mavp')
				->select('manv','hotennv','ddiemvp','ngsinhnv','dchinv','sdtnv')
				->get();
				return View::make("admin/THONGKE/nhanvien", compact('data', 'cate'));

			} else if ($cate == "KH") {
				$data = \DB::table('khachhang')
				->select('makh','hotenkh','ngsinhkh','dchikh','sdtkh')->get();
				return View::make("admin/XEM/khachhang", compact('data', 'cate'));

			} else if ($cate == "CDT") {
				$data = \DB::table('chudautu')
				->select('macdt','tencdt','dchicdt','sdtcdt')->get();
				return View::make("admin/THONGKE/chudautu", compact('data', 'cate'));

			} else if ($cate == "HDDT") {
				$data = \DB::table('hopdongdautu')
				->join('chudautu', 'chudautu.macdt', '=', 'hopdongdautu.macdt')
				->join('ct_hopdongdautu', 'ct_hopdongdautu.mahddt', '=', 'hopdongdautu.mahddt')
				->select('hopdongdautu.mahddt','tencdt','ngaylaphddt','tongvon','soluong','thoihan')
				->get();
				return View::make("admin/THONGKE/hopdongdautu", compact('data', 'cate'));
				
			} else if ($cate == "HDMB") {
				$data = \DB::table('hopdongmuaban')
				->join('nhanvien', 'nhanvien.manv', '=', 'hopdongmuaban.manv')
				->join('khachhang', 'khachhang.makh', '=', 'hopdongmuaban.makh')
				->join('ct_hopdongmuaban', 'ct_hopdongmuaban.mahdmb', '=', 'hopdongmuaban.mahdmb')
				->select('hopdongmuaban.mahdmb','hotennv','hotenkh','ngaylaphdmb','soluong','tongtien','tratruoc','conlai')
				->get();
				return View::make("admin/THONGKE/hopdongmuaban", compact('data', 'cate'));
			}
        }
    }
}