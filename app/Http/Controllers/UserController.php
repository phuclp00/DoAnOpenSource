<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel as MainModel;

class UserController extends Controller
{
    public function all_list_view()
    {
        $mainModel =   new MainModel();
        $list_items = $mainModel->listItems('level',['task'=>"admin-list-items"],'=','admin');
        view()->share('list_admin',$list_items);  
    }
}
