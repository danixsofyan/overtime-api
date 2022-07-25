<?php

namespace Database\Seeders;

use App\Models\Reference;
use Illuminate\Database\Seeder;

class ReferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reference::create([
            'code'          => 'overtime_method',
            'name'          => 'Salary / 173',
            'expression'    => '(salary / 173) * overtime_duration_total',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Reference::create([
            'code'          => 'overtime_method',
            'name'          => 'Fixed',
            'expression'    => '10000 * overtime_duration_total',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
