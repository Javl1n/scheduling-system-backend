<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloorOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $center = [
            [
                "code" => "Property Custodian",
                "description" => "Property Custodian's Office",
                "span" => "1",
                "type" => "Office",
                "available" => false,
            ],
            [
                "code" => "Stock Room",
                "description" => "Property Custodian Stock Room",
                "span" => "1",
                "type" => "Misc.",
                "available" => false,
            ],
            [
                "code" => "MST 108",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 107",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 106",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "NSTP/ROTC",
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
                "code" => "Clinic",
                "description" => "Nurse's Clinic",
                "span" => "1",
                "type" => "Office",
                "available" => false,
            ],
            [
                "code" => "MST 105",
                "description" => "",
                "span" => "1",
                "type" => "Classroom",
                "available" => true,
            ],
            [
                "code" => "Program Head Office",
                "description" => "CTE GEN ED Program Head Office",
                "span" => "1",
                "type" => "Office",
                "available" => false,
            ],
            [
                "code" => "Faculty Office",
                "description" => "CTE GEN ED Faculty Office",
                "span" => "3",
                "type" => "Office",
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
                "floor" => "1",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }

        $left = [
            [
                "code" => "Comfort Room",
                "description" => "First Floor Comfort Room Left Side",
                "span" => "1",
                "type" => "Comfort Room",
                "available" => false,
            ],
            [
                "code" => "Tailoring",
                "description" => "",
                "span" => "square",
                "type" => "Misc.",
                "available" => false,
            ],
            [
                "code" => "CL 12 - IT DEPT",
                "description" => "",
                "span" => "1",
                "type" => "Laboratory",
                "available" => true,
            ],
            [
                "code" => "CL 12 - CBBGG",
                "description" => "",
                "span" => "1",
                "type" => "Laboratory",
                "available" => false,
            ],
            [
                "code" => "CL 4 - CBBGG",
                "description" => "",
                "span" => "1",
                "type" => "Laboratory",
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
                "floor" => "1",
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
                "code" => "Faculty Office",
                "description" => "CCJE Faculty Office",
                "span" => "square",
                "type" => "Office",
                "available" => false,
            ],
            [
                "code" => "Dean's Office",
                "description" => "CCJE Dean's Office",
                "span" => "0.5",
                "type" => "Office",
                "available" => false,
            ],
            [
                "code" => "MST 104",
                "description" => "",
                "span" => "0.5",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 103",
                "description" => "",
                "span" => "0.5",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 102",
                "description" => "",
                "span" => "0.5",
                "type" => "Classroom",
                "available" => false,
            ],
            [
                "code" => "MST 101",
                "description" => "",
                "span" => "1",
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
                "floor" => "1",
                "number" => $count,

                "type" => $room["type"],

                "available" => $room["available"],
            ]);

            $count++;
        }
    }
}
