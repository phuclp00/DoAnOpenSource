<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    private $pathViewController = 'admin.dashboard';
    private $controller_name    = 'dashboard';
    public function __construct()
    {
        view()->share('controller_name', $this->controller_name);    
    }
    public function view()
    {
        return view($this->pathViewController .'.index');
    }

}
