<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Studentregistrtion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BackendRegisterController extends Controller
{

    public function index(){
        return view('backend.layouts.content');

    }
    // public function registration(){
    //     return view('registration');
    // }

   public function registrationbackend(){
    $registration = Studentregistrtion::all();
    return view('backend.registration.index',compact('registration'));
   }


   public function stregistration(Request $request){
    $data = new Studentregistrtion();
       $data->yourName = $request->yourName;
       $data->contactumber = $request->contactumber;
       $data->emailAddress = $request->emailAddress;
       $data->address = $request->address;
       $data->contactPerson = $request->contactPerson;
       $data->contactNumber = $request->contactNumber;
       $data->dbirth = $request->dbirth;
       $data->studentNid = $request->studentNid;
       $data->studentAcademic = $request->studentAcademic;
       $data->gender = $request->gender;
       $data->brnNumber = $request->brnNumber;
       $data->transactionId = $request->transactionId;
       $data->toamountPaid = $request->toamountPaid;

       $data->save();
       Alert::success(' Thank you for your Request. Our Representative will contact you shortly. Staying with us. Call +8801613399191');
       return redirect('registration');
  }
//    public function registrationform(Request $request){
//      $data = new Registration();
//         $data->firstName = $request->firstName;
//         $data->lastName = $request->lastName;
//         $data->phoneNumber = $request->phoneNumber;
//         $data->emailAddress = $request->emailAddress;
//         $data->designation = $request->designation;
//         $data->transtionNumber = $request->transtionNumber;
//         $data->save();
//         Alert::success(' Thank you for your Request. Our Representative will contact you shortly. Staying with us. Call +8801613399191 or Mail us at info@expresssolutionltd.com ');
//         return redirect()->back();
//    }
}
