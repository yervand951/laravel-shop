<?php

namespace App\Service;
use Yajra\Datatables\Facades\Datatables;
use App\Product;

class ProductService{
    private $model,$datatable;
    public function __construct(Product $product,Datatables $datatables)
    {
        $this->model = $product;
        $this->datatable = $datatables;
    }
    public function create($data){
        return $this->model->create($data);
    }
    public function edit($id,$data){
        return $this->model->where('id',$id)->update($data);
    }
    public function data ()
    {
        return Datatables::of(Product::all())
        ->addColumn('DT_RowId', '{{ $id }}')
        ->make(true);
     }

    public function show($id = false){
        if($id){

            return $this->model->find($id);
        }
        return $this->model->all();
        
    }
    public function delete($id){
        return $this->model->where('id',$id)->delete();
    }
}