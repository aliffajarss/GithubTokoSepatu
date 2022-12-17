<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRole = new Role();
        $adminRole->name = "Admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name = "Karyawan";
        $memberRole->display_name = "karyawan";
        $memberRole->save();

        $admin = new User();
        $admin->name = "Admin Toko Sepatu";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User();
        $member->name = "Karyawan Toko Sepatu";
        $member->email = "karyawan@gmail.com";
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
