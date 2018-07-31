<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\LoaiSach;
use App\Cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loai_sach = LoaiSach::all();
        view()->share('loai_sach', $loai_sach);

        view()->composer('header',function($view){
            if (Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
         });

         // view()->composer('header',function($view){
            // if (Session::has('cart')) {
            //     $oldCart = Session::get('cart');
            //     $cart = new Cart($oldCart);

            //     // $view->with('cart',Session::get('cart'));
            //     // $view->with('products',$cart->items);
            //     // $view->with('totalPrice',$cart->totalPrice);
            //     // $view->with('totalQty',$cart->totalQty);
            //     view()->share('cart',Session::get('cart'));
            //     view()->share('products',$cart->items);
            //     view()->share('totalPrice',$cart->totalPrice);
            //     view()->share('totalQty',$cart->totalQty);
            // }
           
          // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
