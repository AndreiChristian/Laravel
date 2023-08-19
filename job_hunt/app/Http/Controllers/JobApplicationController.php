<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(JobApplication::all());
        return view('applications.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'position' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'channel' => 'required|in:linkedin,bestjobs,ebjobs,company_website,other',
            'applied_on' => 'required|date',
            'status' => 'required|in:applied,interviewed,rejected,hired',
            'notes' => 'nullable|string',
            'recruiter_name' => 'nullable|string|max:255',
            'experience_level' => 'required|in:interview,junior,mid,senior',
            'contact_email' => 'nullable|email|max:255',
        ]);

        $request->user()->jobApplications()->create($validated);

        return redirect(route('applications.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(JobApplication $jobApplication)
    {
        //
        return view('applications.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobApplication $jobApplication)
    {
        //
        return view('applications.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobApplication $jobApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $jobApplication)
    {

        $this->authorize('delete', $jobApplication);

        $jobApplication->delete();

        return redirect(route('application.index'));
    }
}
