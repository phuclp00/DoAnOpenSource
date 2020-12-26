<?php

namespace App\Models;
use App\Models\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    //DEFINED DATABASE TABLE
    protected $table = "book";
    protected $primaryKey = "book_id";

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;
    //DINH NGHIA KHOA TRONG TABBLE NAY KHONG PHAI LA KHOA TU TANG VA KIEU KHOA LA STRING 
    public $incrementing = false;
    protected $keyType = 'string';

    public function category()
    {
        return $this->belongsTo("App\Models\CategoryModel","cat_id","cat_id");
    }
    public function publisher()
    {
        return $this->belongsTo("App\Models\Publisher","pub_id","pub_id");
    }
    public function all_list_items($params, $options,$stament=null,$number_stament=null)
    {
        //Tat debugbar
        //\Debugbar::disable();
        $result = null;
        if ($options['task'] == "special-list-items") {
            $result          =   ProductModel::where($params,$stament,$number_stament)->get();
            return $result;
        }
        if ($options['task'] == "admin-list-items") {
            //$result          = ProductModel::all();
            return $result;
        }        
        if ($options['task'] == "frontend-list-items") {
            $result          = ProductModel::all();
            return $result;
        }
        if ($options['task'] == "pagi-list-items") {
            $result          = ProductModel::paginate($number_stament);
            return $result;
        } 
        return  $result ;
    }
}