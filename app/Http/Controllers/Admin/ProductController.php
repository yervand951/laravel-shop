<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service\ProductService;

class ProductController extends Controller
{
    private $service;
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index(){
        
        $data['data'] = $this->service->show();
        return view('admin.product.all-prod',$data);
    }

    public function data()
    {        
        return $this->service->data();
    }

    public function create(){
        $data = $this->service->model()->prod_type();
        dd($data);
        return view('admin.product.create-prod');
    }

    public function show($id){
        $data['data'] = $this->service->show($id);
        return view('admin.product.single-prod',$data);
    }

    public function store(){
        $request = request()->except('_token');
        $this->service->create($request);
        return redirect()->back();
    }
    public function edit($id){
        $model['model'] = $this->service->show($id);
        return view('admin.product.edit-prod',$model);
    }
    public function update($id){
        $request = request()->except('_token','_method');
        $this->service->edit($id,$request );
        return redirect()->back();
    }
    public function destroy($id){
        dd($id);
        $this->service->delete($id);
        return redirect()->back();
    }
}
