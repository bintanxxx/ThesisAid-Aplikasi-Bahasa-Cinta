<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LoveLanguage;

class LoveLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        $languages = [
            ['name' => 'Words of Affirmation', 'description' => '...'],
            ['name' => 'Acts of Service', 'description' => '...'],
            ['name' => 'Receiving Gifts', 'description' => '...'],
            ['name' => 'Quality Time', 'description' => '...'],
            ['name' => 'Physical Touch', 'description' => '...'],
        ];

        foreach ($languages as $language) {
            LoveLanguage::create($language);
        }
    }
}
