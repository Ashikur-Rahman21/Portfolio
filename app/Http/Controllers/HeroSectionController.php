<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroSectionRequest;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroSections = HeroSection::all();
        return view('backend.herosection.index', compact('heroSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.herosection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeroSectionRequest $request)
    {
        HeroSection::create($request->validated());
        return redirect()->route('hero-section.index')->with('success', 'Data create success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroSection $heroSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroSection $heroSection)
    {
        return view('backend.herosection.edit', compact('heroSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HeroSectionRequest $request, HeroSection $heroSection)
    {
        $heroSection->update($request->validated());
        return redirect()->route('hero-section.index')->with('success', 'Data update success.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection)
    {
        $heroSection->delete();
        return redirect()->route('hero-section.index')->with('success', 'Data delete success.');
    }
}
