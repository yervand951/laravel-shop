<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;

class RollTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Admin';
        $admin->description  = '';
        $admin->save();

        $user = new Role();
        $user->name         = 'user';
        $user->display_name = 'User';
        $user->description  = '';
        $user->save();



        $usermodel = User::where('name', 'admin')->first();
        $usermodel->attachRole($admin);

        $all = new Permission();
        $all->name         = 'all';
        $all->display_name = 'All';

        $all->description  = '';
        $all->save();

        $buy = new Permission();
        $buy->name         = 'buy';
        $buy->display_name = 'Buy';

        $buy->description  = '';
        $buy->save();

        $user->attachPermission($buy);
        $admin->attachPermissions([$all, $buy]);
    }
}
