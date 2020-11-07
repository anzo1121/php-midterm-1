<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function wellFunc(){
        $applicants = Applicant::all();
        return view("applicant_list")->with("applicants", $applicants);
    }
    public function edit($id) {
        $applicant = Applicant::findOrFail($id);
        return view ('edit_applicant') -> with('applicant', $applicant);
    }

    public function update(Request $request, $id) {

        $this -> validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'position' => 'required',
            'phone' => 'required'
        ]);

        $applicant = Applicant::findOrFail($id);

        $applicant -> name = $request -> name;
        $applicant -> surname = $request -> surname;
        $applicant -> position = $request -> position;
        $applicant -> phone = $request -> phone;
        $applicant -> is_hired = $request -> is_hired;

        $applicant -> save();
        return redirect('/applicantlist');
    }

}
