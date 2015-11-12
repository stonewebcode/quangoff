<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class StaticPageController extends Controller
{
    /**
     * return the view to the user
     *
     * @param  char  $PageName
     * @return Response
     */
    public function index($PageName='homePage'){
        return view($PageName);   // return the content in the view defined in variable $pageName to the browser.
    }


}

