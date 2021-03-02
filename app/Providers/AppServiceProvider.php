<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        //MyData
        $duan = \DB::table('duan')->select('hinhanh', 'created_at', 'tenda', 'tomtat', 'uutien')
        ->where('uutien', 1)->orderby('created_at', 'desc')->limit(1)->get();
        $duannoibat = \DB::table('duan')->select('tenda')
        ->orderby('uutien', 'desc')->orderby('created_at', 'desc')->limit(5)->get();

        $tintuc = \DB::table('tintuc')->select('tieudett', 'ngdangtt')->orderby('ngdangtt', 'desc')->get();

        View::share('user_duan', $duan);
        View::share('user_duannoibat', $duannoibat);
        View::share('user_tintuc', $tintuc);

        //DuAn
        $duanhanoi = \DB::table('duan')->select('hinhanh', 'mada', 'tenda', 'tomtat')->where('vungmien','HANOI')->get();
        $duandanang = \DB::table('duan')->select('hinhanh', 'mada', 'tenda', 'tomtat')->where('vungmien','DANANG')->get();
        $duanhcm = \DB::table('duan')->select('hinhanh', 'mada', 'tenda', 'tomtat')->where('vungmien','HCM')->get();

        View::share('user_duan_hn', $duanhanoi);
        View::share('user_duan_dn', $duandanang);
        View::share('user_duan_hcm', $duanhcm);

    }
}
