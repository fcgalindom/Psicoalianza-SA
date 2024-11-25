<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\City;

class EmployeeController extends Controller
{
    public function login (){

        return view('login');
    }
    public function home (){

        return view('home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
         $search = $request->get('search');
         
         // Cargar usuarios con la relación city.country y aplicar el filtro de búsqueda
         $users = [
            (object) [
                'name' => 'Felipe',
                'document' => '1000377168',
                'address' => 'Calle 83 #75b-21',
                'phone' => '3182627014',
                'city' => 'Bogotá',
                'departament' => 'Cundinamarca'
            ],
            (object) [
                'name' => 'Laura',
                'document' => '1000456789',
                'address' => 'Carrera 45 #22-19',
                'phone' => '3123456789',
                'city' => 'Medellín',
                'departament' => 'Antioquia'
            ],
            (object) [
                'name' => 'Andrés',
                'document' => '1000123456',
                'address' => 'Avenida 68 #19-45',
                'phone' => '3198765432',
                'city' => 'Cali',
                'departament' => 'Valle del Cauca'
            ],
            (object) [
                'name' => 'Marta',
                'document' => '1000786534',
                'address' => 'Calle 19 #45-23',
                'phone' => '3006543210',
                'city' => 'Barranquilla',
                'departament' => 'Atlántico'
            ],
            (object) [
                'name' => 'David',
                'document' => '1000567889',
                'address' => 'Calle 33 #56-12',
                'phone' => '3059876543',
                'city' => 'Bucaramanga',
                'departament' => 'Santander'
            ],
            (object) [
                'name' => 'Sofía',
                'document' => '1000678901',
                'address' => 'Carrera 15 #8-7',
                'phone' => '3012345678',
                'city' => 'Cartagena',
                'departament' => 'Bolívar'
            ],
            (object) [
                'name' => 'Carlos',
                'document' => '1000234567',
                'address' => 'Calle 11 #33-5',
                'phone' => '3188765432',
                'city' => 'Santa Marta',
                'departament' => 'Magdalena'
            ],
            (object) [
                'name' => 'José',
                'document' => '1000345678',
                'address' => 'Avenida 15 #23-45',
                'phone' => '3203456789',
                'city' => 'Pereira',
                'departament' => 'Risaralda'
            ],
            (object) [
                'name' => 'Lucía',
                'document' => '1000891234',
                'address' => 'Calle 7 #11-9',
                'phone' => '3102345678',
                'city' => 'Manizales',
                'departament' => 'Caldas'
            ],
            (object) [
                'name' => 'Pablo',
                'document' => '1000456780',
                'address' => 'Carrera 50 #3-12',
                'phone' => '3019876543',
                'city' => 'Ibagué',
                'departament' => 'Tolima'
            ]
        ];
      
     
         return view('employees.index', compact('users'));
     }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
  
}
