<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Service extends Model
{

    protected $table = 'services';
    public $timestamps = true;

    public function categories()
    {
        return $this->belongsTo('Category');
    }

    public function users()
    {
        return $this->belongsToMany('User');
    }


public function scopeIndex(){
    return $this->all();
}

public function scopeFind($id){
    return $this->findOrFail($id);
}


    public function scopeUpdate($request,$id){

        $service=$this->scopeFind($id);
        $service->name =$request->name;
        $service->cate_id =$request->cate_id;
        $service->save();

    }

    public function scopeDestroy($id){
        $this->scopeFind($id)->delete();
    }

public function getServices($user_id){
 return  DB::table('users')
    ->join('categories', 'users.type_id', '=', 'categories.type_id')
    ->join('services', 'services.cate_id', '=', 'categories.id')
    ->select('services.*' )
    ->get();
}

public function getUserServices($user_id){
    return  DB::table('users')
       ->join('user_service', 'users.id', '=', 'user_service.user_id')
       ->join('services', 'services.id', '=', 'user_service.user_id')
       ->select('services.*' )
       ->get();
   }

   public function storeService($request,$user_id){
    DB::table('user_service')->insert(
        ['user_id' =>$user_id, 'service_id' =>$request->service_id]
    );
   }

}
