<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class GenerateMenus {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle( $request, Closure $next ) {

        \Menu::make( 'dashboardMenu', function ( $menu ) {
            if(Auth::guard('admin')->check()){
                $menu->add( 'Dashboard', 'admin' );

                            // Users
                            $menu->add( 'Users' );



                            $menu->users->add( 'List users', 'admin/user/all' );
                            $menu->users->add( 'Create New User', 'admin/user/create' );



                            //Category
                            $menu->add( 'Categories' );
                            $menu->categories->add( 'List Category', 'admin/category/all' );
                            $menu->categories->add( 'Create New Category', 'admin/category/create' );

                            //product
                            $menu->add('Products' );
                            $menu->products->add( 'List products', 'admin/product/all' );
                            $menu->products->add( 'Create New Product', 'admin/product/create' );

                              //Driver
                              $menu->add('Drivers' );
                              $menu->drivers->add( 'List Drivers', 'admin/drivers/all' );
                              $menu->drivers->add( 'Create New Driver', 'admin/drivers/create' );


            }
            else{


            }

        } );

        return $next( $request );
    }
}
