<?php

namespace Database\Seeders;

use App\Models\ThinkingTraps;
use Illuminate\Database\Seeder;

class ThinkingTrapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThinkingTraps::truncate();

        // Use the 'thinking_traps.csv' file to populate the DB with the original values
        $csv = array_map('str_getcsv', file(resource_path('/spreadsheets/thinking_traps.csv')));
        array_walk($csv, function (&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
        });
        array_shift($csv); // remove column header

        foreach ($csv as $row) {
            ThinkingTraps::create([
                'title' => $row['title'],
                'description' => $row['description'],
                'image' => $row['image'],
            ]);
        }
    }
}
