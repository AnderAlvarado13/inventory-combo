<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\CompanyAsset;
use App\Models\Employee;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Log::all();
        return view('logs.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companyAssets = CompanyAsset::all();
        $employees = Employee::all();
        return view('logs.create', compact('companyAssets', 'employees'));
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
            'asset_id' => 'required|exists:company_assets,id',
            'employee_id' => 'required|exists:employees,id',
            'assigner' => 'required|max:255',
            'payload' => 'required|json',
        ]);

        Log::create($validated);
        return redirect()->route('logs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $log = Log::findOrFail($id);
        return view('logs.show', compact('log'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyAssets = CompanyAsset::all();
        $employees = Employee::all();
        return view('logs.edit', compact('log', 'companyAssets', 'employees'));
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
        $validated = $request->validate([
            'asset_id' => 'required|exists:company_assets,id',
            'employee_id' => 'required|exists:employees,id',
            'assigner' => 'required|max:255',
            'payload' => 'required|json',
        ]);

        $log->update($validated);
        return redirect()->route('logs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $log->delete();
        return redirect()->route('logs.index');
    }
}
