<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Requests\ExperienceRequest;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('backend.experienceSection.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.experienceSection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $request)
    {
        Experience::create($request->validated());
        return redirect()->route('experience-section.index')->with('success', 'Data create success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experienceSection)
    {
        return view('backend.experienceSection.edit', compact('experienceSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceRequest $request, Experience $experienceSection)
    {
        $experienceSection->update($request->validated());
        return redirect()->route('experience-section.index')->with('success', 'Data update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experienceSection)
    {
        $experienceSection->delete();
        return redirect()->route('experience-section.index')->with('success', 'Data delete success');
    }
}
