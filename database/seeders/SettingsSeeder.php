<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key'          => 'overtime_method',
            'value'         => 1,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
