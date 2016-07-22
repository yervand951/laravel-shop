<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role;
use App\Permission;

class RoleController extends Controller
{
    private $model;
    public function __construct(Role $role)
    {
        $this->model = $role;
    }

    public function add(){
        $createPost = Permission::where('id', 1)->first();
//        $createPost->name         = 'create-post';
//        $createPost->display_name = 'Create Posts'; // optional
//// Allow a user to...
//        $createPost->description  = 'create new blog posts'; // optional
//        $createPost->save();
//
//        $editUser = new Permission();
//        $editUser->name         = 'edit-user';
//        $editUser->display_name = 'Edit Users'; // optional
//// Allow a user to...
//        $editUser->description  = 'edit existing users'; // optional
//        $editUser->save();


//        $owner = new Role();
//        $owner->name         = 'owner';
//        $owner->display_name = 'Project Owner'; // optional
//        $owner->description  = 'User is the owner of a given project'; // optional
//        $owner->save();

        $admin = Role::where('id', 9)->first();
//        $admin->name         = 'admin';
//        $admin->display_name = 'User Administrator'; // optional
//        $admin->description  = 'User is allowed to manage and edit other users'; // optional
//        $admin->save();
        $admin->attachPermission($createPost);
// equivalent to $admin->perms()->sync(array($createPost->id));

//        $owner->attachPermissions(array($createPost, $editUser));

    }

}
