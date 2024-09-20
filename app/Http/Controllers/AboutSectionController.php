<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use App\Http\Requests\AboutSectionRequest;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutSections = AboutSection::all();
        return view('backend.aboutSection.index', compact('aboutSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.aboutSection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutSectionRequest $request)
    {
        $aboutSection = AboutSection::create($request->validated());
        return redirect()->route('about-section.index')->with('success', 'Data create success');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSection $aboutSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSection $aboutSection)
    {
        return view('backend.aboutSection.edit', compact('aboutSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutSectionRequest $request, AboutSection $aboutSection)
    {
        $aboutSection->update($request->validated());
        return redirect()->route('about-section.index')->with('success', 'Data update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSection $aboutSection)
    {
        $aboutSection->delete();
        return redirect()->route('about-section.index')->with('success', 'Data delete success');
    }
}
