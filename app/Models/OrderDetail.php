<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    //DEFINED DATABASE TABLE
    protected $table = "order_detail";
    protected $primaryKey = "order_id";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;


    public function user_detail()
        {
            return $this->belongsTo('App\Models\User','user_id','user_id');

        }
    public function order()
    {
        return $this->hasOne("App\Models\Order","order_id","order_id");
    }
}
