<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //DEFINED DATABASE TABLE
    protected $table = "order";
    protected $primaryKey = "order_id";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;

    public function order_detail()
    {
        return $this->belongsTo("App\Models\OrderDetail","order_id","order_id");
    }
    public function book()
    {
        return $this->hasOne("App\Models\Book","book_id","book_id");
    }
}
