<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;
    //DEFINED DATABASE TABLE
    protected $table = "user_account";
    protected $primaryKey = "user_id";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function user_detail()
    {
        return $this->hasOne('App\Models\UserDetail');

    }
    public function listItems($params, $options,$stament=null,$number_stament=null)
        {
            //Tat debugbar
            //\Debugbar::disable();
            $result = null;
            if ($options['task'] == "admin-list-items") {
                $result          =   UserModel::where($params,$stament,$number_stament)->get();
            }
            if ($options['task'] == "frontend-list-items") {
                $result          = UserModel::all();
            }
            return $result;
        }
}
