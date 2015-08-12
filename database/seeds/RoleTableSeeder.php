<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        Role::create([
            'id'            => 1,
            'name'          => 'super_admin'
            
        ]);
        Role::create([
            'id'            => 2,
            'name'          => 'admin'
           
        ]);
        Role::create([
            'id'            => 3,
            'name'          => 'user'
          
        ]);
    }
}
