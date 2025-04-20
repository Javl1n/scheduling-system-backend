<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $center_3 = [
            [
                "code" => "CL 1",
                "description" => "Computer Laboratory 1",
                "span" => "1.5",
                "number" => 0,
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 2",
                "description" => "Computer Laboratory 2",
                "span" => "1.5",
                "number" => 1,
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 3",
                "description" => "Computer Laboratory 3",
                "span" => "1.5",
                "number" => 2,
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 4",
                "description" => "Computer Laboratory 4",
                "span" => "1",
                "number" => 3,
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "Server Room",
                "description" => "Server Room",
                "span" => "1.5",
                "number" => 4,
                "type" => "Office",
                "available" => false,
            ],

            [
                "code" => "Stairs",
                "description" => "Third Floor Stairs",
                "span" => "2",
                "number" => 5,
                "type" => "Structure",
                "available" => false,
            ],

            [
                "code" => "CL 5",
                "description" => "Computer Laboratory 5",
                "span" => "1",
                "number" => 6,
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 6",
                "description" => "Computer Laboratory 6",
                "span" => "1",
                "number" => 7,
                "type" => "Laboratory",
                "available" => true,
            ], 
            [
                "code" => "CL 7",
                "description" => "Computer Laboratory 7",
                "span" => "1.5",
                "number" => 8,
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 8",
                "description" => "Computer Laboratory 8",
                "span" => "1.5",
                "number" => 9,
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 9",
                "description" => "Computer Laboratory 9",
                "span" => "1.5",
                "number" => 10,
                "type" => "Laboratory",
                "available" => true,
            ],
        ];

        foreach ($center_3 as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "center",
                "floor" => "3",
                "number" => $room["number"],

                "type" => $room["type"],

                "available" => $room["available"],
            ]);
        }


        $left_3 = [
            [
                "code" => "Comfort Room",
                "description" => "Third Floor Comfort Room Left Side",
                "span" => "1",
                "number" => 0,
                "type" => "Comfort Room",
                "available" => false,
            ],
            [
                "code" => "MST 304",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "number" => 1,
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 303",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "number" => 2,
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 302",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "number" => 3,
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 301",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "number" => 4,
                "type" => "Classroom",
                "available" => true,
            ],
        ];

        foreach ($left_3 as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "left",
                "floor" => "3",
                "number" => $room["number"],

                "type" => $room["type"],

                "available" => $room["available"],
            ]);
        }

        $right_3 = [
            [
                "code" => "Comfort Room",
                "description" => "Third Floor Comfort Room Right Side",
                "span" => "1",
                "number" => 0,
                "type" => "Comfort Room",
                "available" => false,
            ],
            [
                "code" => "MST 321",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "number" => 1,
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 322",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "number" => 2,
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 323",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "number" => 3,
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "MST 324",
                "description" => "MST Class Room 3rd Floor",
                "span" => "1",
                "number" => 4,
                "type" => "Classroom",
                "available" => true,
            ],
        ];

        foreach ($right_3 as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "right",
                "floor" => "3",
                "number" => $room["number"],

                "type" => $room["type"],

                "available" => $room["available"],
            ]);
        }
    }
}
