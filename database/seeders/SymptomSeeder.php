<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Symptom;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        $symptoms = [
            ['code' => 'G01', 'name' => 'Merasa cemas, khawatir, atau tegang berlebihan.'],
            ['code' => 'G02', 'name' => 'Sulit mengendalikan rasa khawatir.'],
            ['code' => 'G03', 'name' => 'Merasa sedih, hampa, atau putus asa hampir setiap hari.'],
            ['code' => 'G04', 'name' => 'Kehilangan minat atau kesenangan dalam melakukan aktivitas.'],
            ['code' => 'G05', 'name' => 'Sulit tidur, tidur tidak nyenyak, atau justru tidur berlebihan.'],
            ['code' => 'G06', 'name' => 'Merasa lelah atau tidak punya energi hampir setiap hari.'],
            ['code' => 'G07', 'name' => 'Sulit berkonsentrasi saat kuliah atau mengerjakan tugas.'],
            ['code' => 'G08', 'name' => 'Nafsu makan berubah drastis (berkurang atau bertambah).'],
            ['code' => 'G09', 'name' => 'Mudah tersinggung atau marah.'],
            ['code' => 'G10', 'name' => 'Merasa tidak berharga atau bersalah secara berlebihan.'],
        ];

        foreach ($symptoms as $symptom) {
            Symptom::create($symptom);
        }
    }
}
