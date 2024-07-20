<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function list(){
        $employees = Employer::all();

        return view('',compact($employees));
    }

    public function create(){
        $employee = new Employer();
        $employee->save();


    }

    public function store(){

    }

    public function edit($id){
        $employee=Employer::find($id);
        return view('',compact($employee));

    }

    public function update(EmployeeRequest $req, $id){
        $employee=Employer::find($id);
        $employee->save();
        return view('',compact($employee));
    }

    public function delete($id){
        $employee=Employer::find($id);
        $employee->delete();

    }
}
