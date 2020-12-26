<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideModel extends Model
{
    //DEFINED DATABASE TABLE
    protected $table = "slider";
    protected $primaryKey = "id";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;

    //FUNCTION

    public function listItems($params, $options)
    {
        //Tat debugbar
        //\Debugbar::disable();
        $result = null;
        if ($options['task'] == "admin-list-items") {
            $result          =   SlideModel::all();
        }
        if ($options['task'] == "frontend-list-items") {
            $result          = SlideModel::all();
        }
        return $result;
    }
 
}
