<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloorTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $center = [
            [
                "code" => "MST 216",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 215",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 214",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 213",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 212",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 211",
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
                "code" => "MST 210",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 209",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 208",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 207",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 206",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 205",
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
                "floor" => "2",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }


        $left = [
            [
                "code" => "MST 217",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 218",
                "description" => "",
                "span" => "square",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 219",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 220",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 221",
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
                "floor" => "2",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }

        $right = [
            [
                "code" => "???",
                "description" => "",
                "span" => "square",
                "type" => "Misc.",
                "available" => false,
            ],
            [
                "code" => "MST 204",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 203",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "Office Department",
                "description" => "Senior High Office Department",
                "span" => "1",
                "type" => "Office",
                "available" => false,
            ],
            [
                "code" => "CL 10",
                "description" => "",
                "span" => "1",
                "type" => "Laboratory",
                "available" => true,
            ],
        ];

        $count = 0;

        foreach ($right as $room) {
            Room::create([
                "code" => $room["code"],
                "description" => $room["description"],

                "span" => $room["span"],

                "placement" => "right",
                "floor" => "2",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }
    }
}
