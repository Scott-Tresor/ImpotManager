<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'admin',
            'firstname' => 'admin',
            'email' => 'admin@admin.comm',
            'adresse_id' => 1,
            'password' => \Illuminate\Support\Facades\Hash::make('123456789')
        ]);

        $admin = Role::where('name', 'admin')->first();
        $admin->roles()->attach($admin);
    }
}
