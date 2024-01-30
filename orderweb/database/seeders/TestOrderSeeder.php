<?php

namespace Database\Seeders;

use App\Models\Causal;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = new Order();
        $order->legalization_date = '2024-01-29';
        $order->address = 'Cra 1 # 2 - 3';
        $order->city = 'Tulua';
        $order->odservation_id = null;

        $casual = Causal::find(2);
        $order->causal_id = $casual->id;
        $order->save();
    }
}
