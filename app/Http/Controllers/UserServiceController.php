<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;
use Auth;
class UserServiceController extends Controller
{
    public  $service  ;
    public function __construct( Service $service  )
    {
        $this->middleware('auth');
        $this->service=$service;
    }

    public function addService(){

        try{

            $services= $this->service->getServices(Auth::id());
                    return view('user.services.add',compact('services'));
            }
            catch(Exception $e){
                return redirect()->back()->with('flash_error','Something went wrong,, please try again later');
            }

    }


    public function index()
    {
        try{

           $services= $this->service->getUserServices(Auth::id());

            return view('user.services.index',compact('services'));
        }
        catch(Exception $e){
            return redirect()->back()->with('flash_error','Something went wrong,, please try again later');
        }
    }

    public function storeService(Request $request)
    {
        try{

           $this->service->storeService($request ,Auth::id());
           return redirect()->route('user.services.all')->with('flash_success','Service Added successfully ');
        }catch(Exception $e){
            return redirect()->back()->with('flash_error','Something went wrong,, please try again later');
        }
    }
}
