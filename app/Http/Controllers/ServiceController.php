<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('backend.serviceSection.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.serviceSection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        Service::create($request->validated());
        return redirect()->route('service-section.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $serviceSection)
    {
        return view('backend.serviceSection.edit', compact('serviceSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $serviceSection)
    {
        $serviceSection->update($request->validated());
        return redirect()->route('service-section.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $serviceSection)
    {
        $serviceSection->delete();
        return redirect()->route('service-section.index');
    }
}
