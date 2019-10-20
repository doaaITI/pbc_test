<?php

namespace App\Http\Controllers;
use App\Service;
use App\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public $category,$service  ;
    public function __construct( Service $service ,Category $category)
    {
        $this->middleware('auth:admin');
        $this->category=$category;
        $this->service=$service;


    }

    public function index()
    {
        try{

           $services= $this->service->scopeIndex();

            return view('admin.services.index',compact('services'));
        }
        catch(Exception $e){
            return redirect()->route('admin.services.all')->with('flash_error','Something went wrong,, please try again later');
        }
    }

    public function edit($id){

                    try{
                         $service=$this->service->scopeFind($id);
                         $categories=$this->category->scopeIndex();
                        return view('admin.services.edit',compact('categories','service'));

                    }catch(Exception $e){
                        return redirect()->route('admin.services.all')->with('flash_error','something went wrong');
                    }
                }


    public function update(Request $request ,$id){

                    try{
                         $this->service->scopeUpdate($request,$id);

                        return redirect()->route('admin.services.all')->with('flash_success','Service updated successfully ');
                    }catch(Exception $e){
                        return redirect()->route('admin.services.all')->with('flash_error','Service already deleted');
                    }
                }


            public function destroy($id){
                try{
                    $this->service->scopeDestroy($id);
                return redirect()->route('admin.services.all')->with('flash_success','Service deleted successfully');
                }catch(Exception $e){
                    return redirect()->route('admin.services.all')->with('flash_error','something went wrong ,please try again later');
                }
            }
}
