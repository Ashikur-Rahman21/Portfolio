<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationRequest;
use App\Models\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view('backend.educationSection.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.educationSection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request)
    {
        Education::create($request->validated());
        return redirect()->route('education-section.index')->with('success', 'Data create success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $educationSection)
    {
        return view('backend.educationSection.edit', compact('educationSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationRequest $request, Education $educationSection)
    {
        $educationSection->update($request->validated());
        return redirect()->route('education-section.index')->with('success', 'Data update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $educationSection)
    {
        $educationSection->delete();
        return redirect()->route('education-section.index')->with('success', 'Data delete success');
    }
}
