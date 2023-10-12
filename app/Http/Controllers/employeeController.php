<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    //metodos para retornar los empleados activos de la BD
    public function index(){

        //retornar todos los empleados activos
        $employee = Employee::select('*')->where('id_estado', '=', '1')->get();

        //retornar la vista con los datos de los empleados
        return view('pages.lista_empleados', array("employee" => $employee));
    }
}
