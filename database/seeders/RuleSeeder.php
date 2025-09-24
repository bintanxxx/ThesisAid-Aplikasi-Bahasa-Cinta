<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rule;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        // Aturan ini hanya contoh, bisa disesuaikan dengan data pakar
        // Gejala Kecemasan -> Butuh Quality Time / Words of Affirmation
        Rule::create(['symptom_id' => 1, 'love_language_id' => 4, 'cf_expert' => 0.8]); // G01 -> Quality Time
        Rule::create(['symptom_id' => 2, 'love_language_id' => 4, 'cf_expert' => 0.7]); // G02 -> Quality Time
        Rule::create(['symptom_id' => 1, 'love_language_id' => 1, 'cf_expert' => 0.6]); // G01 -> Words of Affirmation

        // Gejala Depresi -> Butuh Acts of Service / Words of Affirmation
        Rule::create(['symptom_id' => 3, 'love_language_id' => 2, 'cf_expert' => 0.8]); // G03 -> Acts of Service
        Rule::create(['symptom_id' => 4, 'love_language_id' => 2, 'cf_expert' => 0.9]); // G04 -> Acts of Service
        Rule::create(['symptom_id' => 6, 'love_language_id' => 1, 'cf_expert' => 0.7]); // G06 -> Words of Affirmation
        
        // Gejala Umum -> Butuh Quality Time
        Rule::create(['symptom_id' => 5, 'love_language_id' => 4, 'cf_expert' => 0.5]); // G05 -> Quality Time
        Rule::create(['symptom_id' => 7, 'love_language_id' => 4, 'cf_expert' => 0.6]); // G07 -> Quality Time
    }
}
