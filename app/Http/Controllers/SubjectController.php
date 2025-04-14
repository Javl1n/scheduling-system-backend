<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::with(['years'])->get();

        return response()->json($subjects);
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
            "code" => "required|string|unique:subjects,code",
            "title" => "required|string",
            "years" => "required",
            "years.*" => ["string", Rule::in(["First", "Second", "Third", "Fourth"])]
        ]);

        $subject = Subject::create([
            "code" => $request->code,
            "title" => $request->title,
        ]);

        $subject->years()->createMany(
            collect($request->years)->map(function ($year) {
                return [
                    "year" => $year,
                ];
            })->toArray()
        );

        return response()->json($subject);    
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
