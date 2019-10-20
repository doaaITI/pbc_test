<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use NotificationChannels\WebPush\HasPushSubscriptions;
use Laravel\Passport\HasApiTokens;
use DB;
class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','type_id','club_id',  'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function services()
    {
        return $this->hasMany('Service');
    }


    public function scopeIndex(){
      return  $this->orderBy('name', 'desc')->get();
    }

    public function scopeFindUser($user_id)
    {
        return  $this->find($user_id);

    }

    public function scopeDestroy($id){
        $this->scopeFindUser($id)->delete();
    }

    public function scopeStore($request){


        $this->name = $request->name;
        $this->password = bcrypt($request->password);
        $this->email=$request->email;
        $this->type_id = $request->type_id;
        $this->club_id = $request->club_id;
        $this->save();
        }

        public function scopeUpdate($request ,$id){
            $user=$this->scopeFindUser($id);

            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();
        }


}
