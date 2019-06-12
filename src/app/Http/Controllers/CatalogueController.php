<?php

namespace App\Http\Controllers;

use App\Model\product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    //
    public function see(Request $requestt)
    {
        $prd = new product();

        $catalogue = $prd::all();

        return view('catalogue')->withCata($catalogue);
    }
}
