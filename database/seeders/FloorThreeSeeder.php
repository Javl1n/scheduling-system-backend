<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloorThreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $center = [
            [
                "code" => "CL 1",
                "description" => "Computer Laboratory 1",
                "span" => "1.5",
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 2",
                "description" => "Computer Laboratory 2",
                "span" => "1.5",
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 3",
                "description" => "Computer Laboratory 3",
                "span" => "1.5",
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "Server Room",
                "description" => "Server Room",
                "span" => "0.5",
                "type" => "Office",
                "available" => false,
            ],
            [
                "code" => "CL 4",
                "description" => "Computer Laboratory 4",
                "span" => "1",
                "type" => "Laboratory",
                "available" => true,
            ],
            

            [
                "code" => "Stairs",
                "description" => "Third Floor Stairs",
                "span" => "1",
                "type" => "Structure",
                "available" => false,
            ],

            [
                "code" => "CL 5",
                "description" => "Computer Laboratory 5",
                "span" => "1",
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 6",
                "description" => "Computer Laboratory 6",
                "span" => "1",
                "type" => "Laboratory",
                "available" => true,
            ], 
            [
                "code" => "CL 7",
                "description" => "Computer Laboratory 7",
                "span" => "1",
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 8",
                "description" => "Computer Laboratory 8",
                "span" => "1.5",
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 9",
                "description" => "Computer Laboratory 9",
                "span" => "1.5",
                "type" => "Laboratory",
                "available" => true,
            ],
        ];

        $count = 0;

        foreach ($center as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "center",
                "floor" => "3",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }


        $left = [
            [
                "code" => "Comfort Room",
                "description" => "Third Floor Comfort Room Left Side",
                "span" => "1",
                "type" => "Comfort Room",
                "available" => false,
            ],
            [
                "code" => "MST 304",
                "description" => "MST Class Room 3rd Floor",
                "span" => "square",
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 303",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 302",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 301",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "type" => "Classroom",
                "available" => true,
            ],
        ];

        $count = 0;

        foreach ($left as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "left",
                "floor" => "3",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }

        $right = [
            [
                "code" => "Comfort Room",
                "description" => "Third Floor Comfort Room Right Side",
                "span" => "1",
                "type" => "Comfort Room",
                "available" => false,
            ],
            [
                "code" => "CE Com Lab",
                "description" => "",
                "span" => "1 square",
                "type" => "Laboratory",
                "available" => false,
            ],
            [
                "code" => "Speech Laboratory",
                "description" => "",
                "span" => "2",
                "type" => "Classroom",
                "available" => false,
            ],
        ];

        $count = 0;

        foreach ($right as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "right",
                "floor" => "3",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }
    }
}
