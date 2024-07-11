<?php

namespace App\Http\Controllers;

use App\Models\CompanyAsset;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyAssets = CompanyAsset::all();
        return view('company_assets.index', compact('companyAssets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view('company_assets.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serial_code' => 'required|max:250|unique:company_assets',
            'trademark' => 'required|max:250',
            'reference' => 'required|max:250',
            'description' => 'nullable',
            'employee_id' => 'nullable|exists:employees,id',
        ]);

        CompanyAsset::create($validated);
        return redirect()->route('company_assets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companyAsset = CompanyAsset::findOrFail($id);
        return view('company_assets.show', compact('companyAsset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyAsset = CompanyAsset::findOrFail($id);
        $employees = Employee::all();
        return view('company_assets.edit', compact('companyAsset', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $companyAsset = CompanyAsset::findOrFail($id);

        $validated = $request->validate([
            'serial_code' => 'required|max:250|unique:company_assets,serial_code,' . $companyAsset->id,
            'trademark' => 'required|max:250',
            'reference' => 'required|max:250',
            'description' => 'nullable',
            'employee_id' => 'nullable|exists:employees,id',
        ]);

        $companyAsset->update($validated);
        return redirect()->route('company_assets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companyAsset = CompanyAsset::findOrFail($id);
        $companyAsset->delete();
        return redirect()->route('company_assets.index');
    }
}
