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
        return view('');
    }


    public function store(EmployeeRequest $req){
        $employee = new Employer();
        $employee->prenom = $req->prenom;
        $employee->nom = $req->nom;
        $employee->email = $req->email;
        $employee->contact = $req->contact;
        $employee->departement_id = $req->id;
        $employee->save();
        return view('',compact($employee))->with('success_msg',"Employee added successfully");

    }

    public function edit($id){
        $employee=Employer::find($id);
        return view('',compact($employee));

    }

    public function update(EmployeeRequest $req, $id){
        $employee=Employer::find($id);
        $employee->prenom = $req->prenom;
        $employee->nom = $req->nom;
        $employee->email = $req->email;
        $employee->contact = $req->contact;
        $employee->departement_id = $req->id;
        $employee->save();
        return redirect('',compact($employee))->with('success_msg',"Employee updated successfully");
    }

    public function delete($id){
        $employee=Employer::find($id);
        $employee->delete()->with('success_msg',"Employee deleted successfully");

    }
}
