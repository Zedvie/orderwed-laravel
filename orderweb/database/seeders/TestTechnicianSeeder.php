<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Technician;
use App\Models\TypeActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Node\Block\Document;

class TestTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $technician = new Technician();
        $technician->document = 9898989;
        $technician->name ='Arnulfo Archundia';
        $technician->especiality = 'Medicion de redes';
        $technician->phone = '315312';
        $technician->save();
    }
}
