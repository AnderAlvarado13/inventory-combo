<?php

namespace App\Http\Controllers;

use App\Models\CompanyAsset;
use App\Models\Employee;
use App\Models\Log;

use Illuminate\Http\Request;

class AssetAssignmentController extends Controller
{
    public function create()
    {
        $employees = Employee::all();
        $assets = CompanyAsset::whereNull('employee_id')->get();
        return view('assignments.create', compact('employees', 'assets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'asset_id' => 'required|exists:company_assets,id',
            'employee_id' => 'required|exists:employees,id',
            'assigner' => 'required|string|max:255',
        ]);

        $asset = CompanyAsset::findOrFail($request->asset_id);
        $employee = Employee::findOrFail($request->employee_id);

        // Asignar el activo al empleado
        $asset->employee_id = $employee->id;
        $asset->save();

        // Registrar la asignación en los logs
        Log::create([
            'asset_id' => $asset->id,
            'employee_id' => $employee->id,
            'assigner' => $request->assigner,
            'payload' => json_encode([
                'asset' => $asset->toArray(),
                'employee' => $employee->toArray()
            ]),
        ]);

        return redirect()->route('assignments.create')->with('success', 'Asset assigned successfully');
    }

    public function stats()
    {
        // 1. Cuantos activos tiene asignado cada empleado
        $assetsByEmployee = Employee::withCount('companyAssets')->get();

        // 2. Cual departamento de la empresa tiene menos activos asignados
        $assetsByDepartment = Employee::select('department')
            ->withCount('companyAssets')
            ->get()
            ->groupBy('department')
            ->map(function ($group) {
                return $group->sum('company_assets_count');
            });
        $departmentWithLeastAssets = $assetsByDepartment->sort()->keys()->first();

        // 3. Generación de reportes del estado general del inventario
        $inventoryReport = CompanyAsset::with('employee')->get();

        return view('welcome', compact('assetsByEmployee', 'departmentWithLeastAssets', 'inventoryReport'));
    }
}
