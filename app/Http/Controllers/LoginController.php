<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as MainModel;

class LoginController extends Controller
{
    private $pathViewController = 'public.login';
    public function signin_view()
    {
        return view($this->pathViewController . '.sign-in');
    }
    
    public function signup_view()
    {
        $mainModel = new MainModel();
        $items = $mainModel::find(1);
        
        return view($this->pathViewController . '.sign-up',['item'=>$items]);
    }

}
