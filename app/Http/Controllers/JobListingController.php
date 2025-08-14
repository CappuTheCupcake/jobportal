<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobListingRequest;
use App\Http\Requests\UpdateJobListingRequest;
use App\Models\JobListing;
use App\Models\Company;
use App\Models\Category;

class JobListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobListings = JobListing::with(['company', 'category'])->get();
        return view('job-listings.index', compact('jobListings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        $categories = Category::all();
        return view('job-listings.create', compact('companies', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobListingRequest $request)
    {
        JobListing::create($request->validated());
        return redirect('/jobListings')->with('success', 'Stellenanzeige erfolgreich erstellt');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobListing $jobListing)
    {
        return view('job-listings.show', compact('jobListing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobListing $jobListing)
    {
        $companies = Company::all();
        $categories = Category::all();
        return view('job-listings.edit', compact('jobListing', 'companies', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobListingRequest $request, JobListing $jobListing)
    {
        $jobListing->update($request->validated());
        return redirect('/jobListings')->with('success', 'Stellenanzeige erfolgreich aktualisiert');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobListing $jobListing)
    {
        $jobListing->delete();
        return redirect('/jobListings')->with('success', 'Stellenanzeige erfolgreich gelöscht');
    }
}
