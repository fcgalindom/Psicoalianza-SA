<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use App\Models\Employee;
use App\Models\EmployeeCharge;
use Illuminate\Http\Request;
use App\Models\User;

class ChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       

        $charges = [
            (object) [
                'name' => 'Felipe',
                'document' => '1000377168',
                'area' => 'Recursos Humanos',
                'cargo' => 'Analista',
                'rol' => 'Empleado',
                'jefe' => 'Maria Perez'
            ],
            (object) [
                'name' => 'Laura',
                'document' => '1000456789',
                'area' => 'TI',
                'cargo' => 'Desarrolladora',
                'rol' => 'Líder',
                'jefe' => 'Carlos Rodríguez'
            ],
            (object) [
                'name' => 'Andrés',
                'document' => '1000123456',
                'area' => 'Marketing',
                'cargo' => 'Especialista',
                'rol' => 'Empleado',
                'jefe' => 'Sofia Gómez'
            ],
            (object) [
                'name' => 'Marta',
                'document' => '1000786534',
                'area' => 'Contabilidad',
                'cargo' => 'Contadora',
                'rol' => 'Empleado',
                'jefe' => 'Carlos Sánchez'
            ],
            (object) [
                'name' => 'David',
                'document' => '1000567889',
                'area' => 'Legal',
                'cargo' => 'Abogado',
                'rol' => 'Empleado',
                'jefe' => 'María López'
            ],
            (object) [
                'name' => 'Sofía',
                'document' => '1000678901',
                'area' => 'Ventas',
                'cargo' => 'Ejecutiva',
                'rol' => 'Empleado',
                'jefe' => 'Juan Martínez'
            ],
            (object) [
                'name' => 'Carlos',
                'document' => '1000234567',
                'area' => 'Finanzas',
                'cargo' => 'Asesor',
                'rol' => 'Líder',
                'jefe' => 'Marta Ruiz'
            ],
            (object) [
                'name' => 'José',
                'document' => '1000345678',
                'area' => 'TI',
                'cargo' => 'Desarrollador',
                'rol' => 'Empleado',
                'jefe' => 'Felipe García'
            ],
            (object) [
                'name' => 'Lucía',
                'document' => '1000891234',
                'area' => 'Recursos Humanos',
                'cargo' => 'Consultora',
                'rol' => 'Empleado',
                'jefe' => 'Marta Pérez'
            ],
            (object) [
                'name' => 'Pablo',
                'document' => '1000456780',
                'area' => 'Operaciones',
                'cargo' => 'Supervisor',
                'rol' => 'Empleado',
                'jefe' => 'José Martínez'
            ],
            (object) [
                'name' => 'Elena',
                'document' => '1000987654',
                'area' => 'Marketing',
                'cargo' => 'Coordinadora',
                'rol' => 'Líder',
                'jefe' => 'Andrés García'
            ]
        ];

        return view('charges.index', compact('charges'));
    }

   
}
