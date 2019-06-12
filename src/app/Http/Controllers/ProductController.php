<?php

namespace App\Http\Controllers;

use App\Model\categorie;
use App\Model\product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class ProductController extends Controller
{
    //
    public function see()
    {
        return view('product');
    }

    public function index(product $product)
    {
        return view('product', compact('product'));
    }

    public function search(int $id)
    {
        $table = categorie::all();

        $name = $table->find($id)->name;

        return $name;
    }
}
