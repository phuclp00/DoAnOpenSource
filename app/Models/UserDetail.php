<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
        //DEFINED DATABASE TABLE
        protected $table = "user_detail";
        protected $primaryKey = "user_id";
        const CREATED_AT = 'created';
        const UPDATED_AT = 'modiffed';
        public $timestamps = false;

        public function user_account()
        {
            return $this->belongsTo('App\Models\User','user_id','user_id');

        }
        public function order_detail()
        {
            return $this->hasMany('App\Models\OrderDetail','order_id','order_id');
        }
        public function listItems($params, $options)
        {
            //Tat debugbar
            //\Debugbar::disable();
            $result = null;
            if ($options['task'] == "admin-list-items") {
                $result          =   UserDetail::where('');
            }
            if ($options['task'] == "frontend-list-items") {
                $result          = UserDetail::all();
            }
            return $result;
        }
}
