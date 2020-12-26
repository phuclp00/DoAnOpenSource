<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel as MainModel;

class ShopController extends Controller
{
    private $pathViewController = 'public';
    private $controller_name    = '';

    public function hot_list_view()
    {
        $mainModel =  new MainModel();
        $new_items = $mainModel->all_list_items("date_released",['task'=>"special-list-items"],"<=",20);
        
         view()->share('list_hot_items',$new_items);
        
    }
    public function paginate_list_view()
    {
        $mainModel =  new MainModel();
        $new_items = $mainModel->all_list_items(null,['task'=>"pagi-list-items"],null,6);
      
         view()->share('pagi_list_items',$new_items);    
    }
    public function all_list_view()
    {
        $mainModel =  new MainModel();
        $list_items = $mainModel->all_list_items(null,['task'=>"frontend-list-items"]);
        view()->share('list_product',$list_items);  
    }
    
    public function form(Request $request)
    {
        $id = $request->id;

        return view($this->pathViewController . '.form', ['id' => $id,]);
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        return view('public.test', ['id' => $id]);
    }
    public function status(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        return \redirect()->route('silder_view');
    }
}
