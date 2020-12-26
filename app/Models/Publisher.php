<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $table = "publisher";
    protected $primaryKey = "pub_id";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;\

    public function book()
    {
        return $this->hasMany('App\Models\Book','pub_id','pub_id');

    }
}
