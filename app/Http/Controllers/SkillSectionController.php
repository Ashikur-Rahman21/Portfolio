<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillSectionRequest;
use App\Models\SkillSection;
use Illuminate\Http\Request;

class SkillSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skillSections = SkillSection::all();
        return view('backend.skillSection.index', compact('skillSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.skillSection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillSectionRequest $request)
    {
        SkillSection::create($request->validated());
        return redirect()->route('skill-section.index')->with('success', 'Data create success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillSection $skillSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkillSection $skillSection)
    {
        return view('backend.skillSection.edit', compact('skillSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillSectionRequest $request, SkillSection $skillSection)
    {
        $skillSection->update($request->validated());
        return redirect()->route('skill-section.index')->with('success', 'Data update success.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillSection $skillSection)
    {
        $skillSection->delete();
        return redirect()->route('skill-section.index')->with('success', 'Data delete success.');
    }
}
