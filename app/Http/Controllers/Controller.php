<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert; // sweet alert

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    // cotnstract function to load sweet alert in any controller
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(session('success_message')) {
                Alert::toast( session("success_message"), 'Success!');
            }
            return $next($request);
        });
    }
}
