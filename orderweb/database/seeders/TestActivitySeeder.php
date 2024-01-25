<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Technician;
use App\Models\TypeActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $typeActivity = TypeActivity::fid(1);
       $technician = Technician::where('Document','=',989898)->first();

       $activity = new Activity();
       $activity->description = 'Test Activity';
       $activity->hours = 10;
       $activity->technician_id = $technician->document;
       $activity->type_id = $typeActivity->id;
       $activity->save(); 
    }
}
