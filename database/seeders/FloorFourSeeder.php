<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloorFourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $center = [
            [
                "code" => "MST 412",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 411",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 410",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 409",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 408",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 407",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],

            [
                "code" => "Stairs",
                "description" => "Third Floor Stairs",
                "span" => "1",
                "type" => "Structure",
                "available" => false,
            ],

            [
                "code" => "MST 406",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 405",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 404",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 403",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 402",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 401",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
        ];

        $count = 0;

        foreach ($center as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "center",
                "floor" => "4",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }


        $left = [
            [
                "code" => "MST 413",
                "description" => "",
                "span" => "square",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 414",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 415",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 216",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 217",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
        ];

        $count = 0;

        foreach ($left as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "left",
                "floor" => "4",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }

        $right = [
            [
                "code" => "College Library",
                "description" => "",
                "span" => "full wing",
                "type" => "Misc.",
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
                "floor" => "4",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }
    }
}
