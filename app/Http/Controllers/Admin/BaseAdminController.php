<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/*
|--------------------------------------------------------------------------
| Short Explaination for BaseAdminController
|--------------------------------------------------------------------------
|
|	All admin controllers need auth middleware so I decided to make a common base class
|	for this purpose. 
|	The same thing can be achieved by simply adding all these admin routes into an auth middleware route group
|
|
*/

class BaseAdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
    	$this->middleware('auth');
    }
}