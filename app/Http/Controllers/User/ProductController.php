<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    private $model;
    public function __construct(Product $product)
    {
        $this->model = $product;
    }
    public function index(){
        return view('user.product');
    }

    public function show($id){
        $data = $this->model->find($id);
        return view('user.single');
    }
    
}
