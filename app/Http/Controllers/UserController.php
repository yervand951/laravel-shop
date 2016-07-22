<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    private $model;
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function index(){
        return view('user.profile');
    }

}
