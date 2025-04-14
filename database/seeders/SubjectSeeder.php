<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Subject::create([
        //     "code" => "IT 223",
        //     "title" => "Intro to Programming",
        // ])->years()->createMany([
        //     [
        //         "year" => "First"
        //     ],
        // ]);

        foreach (Subject::factory(10)->create() as $subject) {
            $subject->years()->createMany([
                [
                    "year" => "First"
                ],
            ]);
        }

        foreach (Subject::factory(5)->create() as $subject) {
            $subject->years()->createMany([
                [
                    "year" => "Second"
                ],
            ]);
        }

        foreach (Subject::factory(14)->create() as $subject) {
            $subject->years()->createMany([
                [
                    "year" => "Third"
                ],
                [
                    "year" => "Second"
                ],
            ]);
        }

        foreach (Subject::factory(7)->create() as $subject) {
            $subject->years()->createMany([
                [
                    "year" => "Fourth"
                ],
            ]);
        }

        // $subjects = Subject::factory(3)->create();

        
    }
}
