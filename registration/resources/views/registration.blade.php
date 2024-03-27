<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f1f1f1;
    }

    #regForm {
      background-color: #ffffff;
      margin: 70px auto;
      font-family: Raleway;
      padding: 40px;
      width: 70%;
      min-width: 300px;
      border-radius: 20px;
    box-shadow: 2px 6px 88px;
    }

    h1 {
      text-align: center;
    }

    input {
      padding: 10px;
      width: 100%;
      font-size: 17px;
      font-family: Raleway;
      border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    button {
      background-color: #04AA6D;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 17px;
      font-family: Raleway;
      cursor: pointer;
    }

    button:hover {
      opacity: 0.8;
    }

    #prevBtn {
      background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #04AA6D;
    }
    .homebutton{
        font-weight: 700;
        font-size: 18px;
        color: #fff;
        text-decoration: none;
    }
    </style>
    <body>

    <form id="regForm" method="POST" action="{{route('stregistration.update')}}">

        @csrf
        @include('sweetalert::alert')
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>

        @endif

        <button class="btn btn-success">    <a href="{{url('/')}}" class="homebutton">Home</a></button>
        <h1>Registration Form:</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Personal Information:
          <p><input placeholder="Your Name.." oninput="this.className = ''" name="yourName"></p>
          <p><input placeholder="Your Contact Number..." oninput="this.className = ''" name="contactumber" type="number"></p>
          <p><input placeholder="Your E-mail..." oninput="this.className = ''" name="emailAddress"></p>
          <p><input placeholder="Your Address.." oninput="this.className = ''" name="address"></p>

        </div>

        <div class="tab">Emergency Contact Person:
            <p><input placeholder="Emergency Contact Person..." oninput="this.className = ''" name="contactPerson"></p>
            <p><input placeholder="Emergency Contact Number..." oninput="this.className = ''" id="contactNumber" name="contactNumber" type="number"></p>
          </div>
        <div class="tab">Nid/Birth Certificate No:
          <p><input placeholder="dd/mm/yyyy" oninput="this.className = ''" name="dbirth"></p>
          <p><input placeholder="Student Nid Number & Details(Only For Student)..." oninput="this.className = ''" name="studentNid"></p>
          <p><input placeholder="Your Academic Institution(Only For Student)..." oninput="this.className = ''" name="studentAcademic"></p>

           </div>
        <div class="tab">
            <h1>Payment Method: Bkash /Nagad /Rocket </h1>

          <input class="form-check-input" type="radio" name="gender" id="Bkash" value="Bkash"<?php if (isset($gender) && $gender=="Bkash") echo "checked";?>
            >
          <label class="form-check-label" for="Bkash">Bkash</label>
          <input class="form-check-input" type="radio" name="gender" id="Nagad" value="Nagad"<?php if (isset($gender) && $gender=="Nagad") echo "checked";?>
          >
          <label class="form-check-label" for="Nagad">Nagad</label>
          <input class="form-check-input" type="radio" name="gender" id="Rocket" value="2"<?php if (isset($gender) && $gender=="Rocket") echo "checked";?>
          >
          <label class="form-check-label" for="Rocket">Rocket</label>


          <h2>Payment Information :</h2>
          <p><input placeholder="Your Bkash/Nagad/Rocket Number..." oninput="this.className = ''" name="brnNumber" type="number"></p>
          <p><input placeholder="Transaction Id:..." oninput="this.className = ''" name="transactionId"></p>
          <p><input placeholder="Total Amount You Paid..." oninput="this.className = ''" name="toamountPaid" type="number"></p>


      </div>


        </div>
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
      </form>

      <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
      </script>

      </body>
      </html>
