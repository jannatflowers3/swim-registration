@extends('backend.layouts.content')
@section('content')
<div class="row">

    <div class="col-lg-12 col-md-12 col-12 ">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Personal Information:</h4>
            </p>
            <table class="table table-hover">
              <thead>
                <tr class="table-success">
                  <th>#</th>
                  <th>Your Name</th>
                  <th>Your Number</th>
                  <th>E-mail</th>
                  <th>Address</th>
                  <th> Contact Person</th>
                  <th>Contact Number</th>
                  <th>Birth Certificate</th>
                  <th>Student Nid </th>
                  <th>Academic Institution</th>
                  <th> Payment Method </th>
                  <th>  Your Bkash/Nagad/Rocket Number </th>
                  <th>Transaction Id </th>
                  <th>Paid Amount </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @foreach ($registration as $key=>$row )


                <tr class="table-info">
                  <td> {{$key+1}} </td>
                  <td> {{$row->yourName}} </td>
                  <td> {{$row->contactumber}} </td>
                  <td> {{$row->emailAddress}} </td>
                  <td> {{$row->address}} </td>
                  <td> {{$row->contactPerson}} </td>
                  <td> {{$row->contactNumber}} </td>
                  <td> {{$row->studentNid}} </td>
                  <td> {{$row->dbirth}} </td>
                  <td> {{$row->studentAcademic}} </td>
                  <td> {{$row->gender}} </td>
                  <td> {{$row->brnNumber}} </td>
                  <td> {{$row->transactionId}} </td>
                  <td> {{$row->toamountPaid}} </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>



</div>
@endsection
