<?php

use Illuminate\Database\Seeder;
use App\WorkType;
class WorkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_types')->truncate();
        WorkType::create([
            'id'            => 1,
            'name'          => 'Full Day'
            
        ]);
        WorkType::create([
            'id'            => 2,
            'name'          => 'Half Day'
            
         ]); 
        WorkType::create([
            'id'            => 3,
            'name'          => 'Work From Home'
          
        ]);

    }
}
