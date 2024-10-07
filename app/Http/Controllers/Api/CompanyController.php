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
    public function index(): Response
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   // Método para almacenar una nueva compañía
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'address' => 'required|string|max:255',
           'phone' => 'required|string|max:15',
           'email' => 'required|email|unique:companies,email',
           'website' => 'nullable|url',
           'installations' => 'array', // Asegúrate de que sea un array
           'installations.*.name' => 'required|string|max:255', // Validación para cada instalación
           'installations.*.address' => 'required|string|max:255',
       ]);
   
       // Creación de la compañía con instalaciones
       $company = Company::create($request->all());
   
       // Asignación de instalaciones
       if ($request->has('installations')) {
           foreach ($request->installations as $installation) {
               $company->installations()->create($installation);
           }
       }
   
       return response()->json($company, 201);
   }


    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return response()->json($company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
      // Método para actualizar una compañía existente
      public function update(Request $request, Company $company)
{
    $request->validate([
        'name' => 'sometimes|required|string|max:255',
        'address' => 'sometimes|required|string|max:255',
        'phone' => 'sometimes|required|string|max:15',
        'email' => 'sometimes|required|email|unique:companies,email,' . $company->id,
        'website' => 'nullable|url',
        'installations' => 'array', // Asegúrate de que sea un array
        'installations.*.name' => 'required|string|max:255',
        'installations.*.address' => 'required|string|max:255',
    ]);

    // Actualización de la compañía
    $company->update($request->all());

    // Asignación de nuevas instalaciones o actualización de las existentes
    if ($request->has('installations')) {
        foreach ($request->installations as $installation) {
            $company->installations()->updateOrCreate(
                ['id' => $installation['id'] ?? null], // Utiliza el ID para actualizar si existe
                $installation
            );
        }
    }

    return response()->json($company);
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
