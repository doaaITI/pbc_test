<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Service;
use App\Type;
use DB;
class CategoryController extends Controller
{
    public $category,$service ,$type;
    public function __construct(Category $category,Service $service ,Type $type)
    {
        $this->middleware('auth:admin');
        $this->category=$category;
        $this->service=$service;
        $this->type=$type;

    }

               /**
     * Display a listing of the Users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

           $categories= $this->category->scopeIndex();

            return view('admin.categories.index',compact('categories'));
        }
        catch(Exception $e){
            return redirect()->route('admin.categories.all')->with('flash_error','Something went wrong,, please try again later');
        }
    }



    public function create()
    {
        try{

            $types=$this->type->index();

            return view('admin.categories.create',compact('types'));
        }
        catch(Exception $e){
            return redirect()->route('admin.category.all')->with('flash_error','Something went worng , please try again later');
        }
    }

    public function store(Request $request){
        try{

            $this->category->scopeStore($request);
            return redirect()->route('admin.category.all')->with('flash_success','Category inserted successfully');

            }catch(Exception $e){
            return redirect()->route('admin.category.all')->with('flash_error','something went wrong ,please try again later');
        }
    }

    public function edit($id){

            try{
                 $category=$this->category->scopeFind($id);
                 $types=$this->type->index();
                return view('admin.categories.edit',compact('category','types'));

            }catch(Exception $e){
                return redirect()->route('admin.category.all')->with('flash_error','Category already deleted');
            }
        }

        public function update(Request $request ,$id){

            try{
                 $this->category->scopeUpdate($request,$id);

                return redirect()->route('admin.category.all')->with('flash_success','Category updated successfully ');
            }catch(Exception $e){
                return redirect()->route('admin.category.all')->with('flash_error','Category already deleted');
            }
        }


    public function destroy($id){
        try{
            DB::table('categories')->where('id', '=',$id)->delete();
        return redirect()->route('admin.category.all')->with('flash_success','Category deleted successfully');
        }catch(Exception $e){
            return redirect()->route('admin.category.all')->with('flash_error','something went wrong ,please try again later');
        }
    }

}

?>
