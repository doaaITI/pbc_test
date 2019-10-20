<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name');

    public function services()
    {
        return $this->hasOne('Service');
    }

    public function club()
    {
        return $this->belongsTo('Club');
    }

    public function scopeIndex(){
        return  DB::table('categories')
        ->join('types', 'types.id', '=', 'categories.type_id')
        ->select('categories.Name','categories.id', 'types.name as type')
        ->get();
    }


    public function scopeStore($request){
      foreach($request->outer_list as $outer ){
        $id=DB::table('categories')->insertGetId(
            ['name' => $outer['cate_name'], 'type_id' => $outer['type']]
        );

        foreach($outer['inner_list'] as $inner){
            DB::table('services')->insert([
                ['name' =>  $inner['title'], 'cate_id' => $id]
            ]);
        }
      }
    }

    public function scopeFind($id){
        return $this->findOrFail($id);
    }


   public function scopeUpdate($request,$id){

   $category=$this->scopeFind($id);
   $category->Name =$request->name;
   $category->type_id =$request->type_id;
   $category->save();

   }

}
