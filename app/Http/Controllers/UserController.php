<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;
use App\User;
use App\Type;
use App\Club;
class UserController extends Controller
{
    public $user ,$type ,$club;

        public function __construct(User $user,Type $type ,Club $club)
        {
            $this->middleware('auth:admin');
            $this->user=$user;
            $this->type=$type;
            $this->club=$club;

        }

           /**
     * Display a listing of the Users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

           $users= $this->user->scopeIndex();

            return view('admin.users.index',compact('users'));
        }
        catch(Exception $e){
            return redirect()->route('admin.users.all')->with('flash_error','Something went wrong,, please try again later');
        }
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            $types=$this->type->index();
            $clubs=$this->club->index();

            return view('admin.users.create',compact('types','clubs'));
        }
        catch(Exception $e){
            return redirect()->route('admin.users.all')->with('flash_error','Something went worng , please try again later');
        }
    }

    public function store(UserRequest $request){
        try{


                $request->validated();
            $this->user->scopeStore($request);
            return redirect()->route('admin.user.all')->with('flash_success','User inserted successfully');



            }catch(Exception $e){
            return redirect()->route('admin.user.all')->with('flash_error','something went wrong ,please try again later');
        }
    }

    public function edit($id){

            try{
                 $user=$this->user->scopeFindUser($id);
                return view('admin.users.edit',compact('user'));

            }catch(Exception $e){
                return redirect()->route('admin.user.all')->with('flash_error','user already deleted');
            }
        }

        public function update(Request $request ,$id){

            try{
                 $this->user->scopeUpdate($request,$id);

                return redirect()->route('admin.user.all')->with('flash_success','user updated successfully ');
            }catch(Exception $e){
                return redirect()->route('admin.user.all')->with('flash_error','user already deleted');
            }
        }

        public function showOrder($id){
            try{

               $orders= $this->user->scopeShow($id);

               return view('admin.users.show',compact('orders'));

           }catch(Exception $e){
               return redirect()->route('admin.user.all')->with('flash_error','user already deleted');
           }
        }
    public function destroy($id){
        try{
        $this->user->destroy($id);
        return redirect()->route('admin.user.all')->with('flash_success','User deleted successfully');
        }catch(Exception $e){
            return redirect()->route('admin.user.all')->with('flash_error','something went wrong ,please try again later');
        }
    }
}
