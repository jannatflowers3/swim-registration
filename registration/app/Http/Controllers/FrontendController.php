<?php

namespace App\Http\Controllers;

use App\Models\Studentregistrtion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    public function frontpage(){
        return view('welcome');
    }
    public function registration(){
        return view('registration');
    }

    public function index(){
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
           return redirect('registration')->with('success','thank you for registration');
      }

}
