<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideModel as MainModel;

class SilderController extends Controller
{
    private $pathViewController = 'admin.slider';
    private $controller_name    = 'slider';

    public function __construct()
    {
        //view()->share('controller_name', $this->controller_name);
    }
    public function slide_homepage()
    {
        $mainModel =  new MainModel();
        $slide_items = $mainModel->listItems(null,['task'=>"frontend-list-items"]);
        
         view()->share('slide_items', $slide_items);
        
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
