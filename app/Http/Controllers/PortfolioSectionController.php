<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioSection;
use App\Http\Requests\PortfolioRequest;

class PortfolioSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolioSections = PortfolioSection::all();
        return view('backend.portfolioSection.index', compact('portfolioSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolioSection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioRequest $request)
    {
        PortfolioSection::create($request->validated());
        return redirect()->route('portfolio-section.index')->with('success', 'Data create success');
    }

    /**
     * Display the specified resource.
     */
    public function show(PortfolioSection $portfolioSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PortfolioSection $portfolioSection)
    {
        return view('backend.portfolioSection.edit', compact('portfolioSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PortfolioRequest $request, PortfolioSection $portfolioSection)
    {
        $portfolioSection->update($request->validated());
        return redirect()->route('portfolio-section.index')->with('success', 'Data update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PortfolioSection $portfolioSection)
    {
        $portfolioSection->delete();
        return redirect()->route('portfolio-section.index')->with('success', 'Data delete success');
    }
}
