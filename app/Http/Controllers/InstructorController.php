<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor::with(["days", "subjects.years"])->get();

        return response()->json($instructors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "school_id" => ["string", "required", "unique:instructors,school_id"],
            "name" => ["string", "required"],
            "subjects" => ["required"],
            "subjects.*" => ["numeric", "exists:subjects,id"],
            "days" => ["required"],
            "days.*" => ["string", Rule::in(["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"])],
        ], [
            "subjects" => [
                "required" => "Must select at least one subject",
            ],
            "subjects.*" => [
                "exists" => "This subject does not exist in the database",
            ],
            "days" => [
                "required" => "Must select at least on preferred day",
            ]
        ]);

        $instructor = Instructor::create([
            "school_id" => $request->school_id,
            "name" => $request->name,
        ]);

        $instructor->subjects()->attach($request->subjects);

        $instructor->days()->createMany(
            collect($request->days)
            ->map(fn ($day) => ["day" => $day])
            ->toArray()
        );

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
