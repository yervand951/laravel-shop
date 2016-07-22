<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    private $model;
    public function __construct(Order $order)
    {
        $this->model = $order;
    }
    public function create(){
        
    }
}
