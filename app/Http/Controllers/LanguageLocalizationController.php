<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageLocalizationController extends Controller
{
    public function index($lang){
        // dd($lang);
        if(app()->getLocale() == "en")
        {
            app()->setLocale("ar");
            dd(app()->getLocale());
        }
        if(app()->getLocale() =="ar")
        {
            app()->setLocale("en");
            dd(app()->getLocale());
        }
        // if($lang <> ''){
        //     app()->setLocale("en");
        // }
        return back();
        //echo trans('admin.mobile');
    }




    public function switchLang($lang)
    {

        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);

                        if(Session::get('applocale')=='en'){

                        Session::put('direction','ltr');


                       }else{
                        Session::put('direction','rtl');
                        //dd(Session::get('direction'));
                       }

        }
        return Redirect::back();
    }

}
