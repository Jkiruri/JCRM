<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \App\Models\Company::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $company = Company::create([
            ... $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'industry' => 'required|string|max:255',
            'phone_number' => 'required|int'
            ]),
        'contact_id' => 2
        ]);

        return $company;
    }


    /**
     * Display the specified resource.
     */
    public function show(\App\Models\Company $company)
    {
        return $company;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}