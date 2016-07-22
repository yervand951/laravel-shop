<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Http\Requests;

class PermissionController extends Controller
{
    private $model;
    public function __construct(Permission $permission)
    {
        $this->model = $permission;
    }

    public function add(){
        $createPost = new Permission();
        $createPost->name         = 'create-post';
        $createPost->display_name = 'Create Posts'; // optional
// Allow a user to...
        $createPost->description  = 'create new blog posts'; // optional
        $createPost->save();

        $editUser = new Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit Users'; // optional
// Allow a user to...
        $editUser->description  = 'edit existing users'; // optional
        $editUser->save();

//        $admin->attachPermission($createPost);
//// equivalent to $admin->perms()->sync(array($createPost->id));
//
//        $owner->attachPermissions(array($createPost, $editUser));
    }
}
