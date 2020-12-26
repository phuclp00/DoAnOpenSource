<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel as MainModel;

class CategoryController extends Controller
{
    private $subpatchViewController='.page';
    private $pathViewController = 'public.';

    public function __construct()
    {
       
    }
    public function list_category()
    {
        $mainModel =  new MainModel();
        $items = $mainModel->listItems(null,['task'=>"frontend-list-items"]);
       
          view()->share('list_category', $items);
          
    }
    public function top_list_category()
    {
        $mainModel =  new MainModel();
        $top_items = $mainModel->listItems(null,['task'=>"top-list-items"],null,5);
       
          view()->share('top_list_category', $top_items);
    }
    public function get_category(Request $request)
    {
        $id=$request->cat_id;
        $mainModel= new MainModel();
        //$items=$mainModel->listItems("cat_id",['task'=>"special-list-items"],$id,"===");
        
        $items= \App\Models\ProductModel::with('category')->where("cat_id","=",$id)->paginate(6);
        
        view()->share('get_cat_items', $items);
       
        return view($this->pathViewController.$this->subpatchViewController  .'.shop',["get_cat_items"=>$items]);
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
