@extends('layouts.master')
@section('title', "Account")

@section('content')
  <!--image-->

  <div class="mx-auto bg warning">
    <h2>Your Account</h2>

  </div>
  <!--css rounded image
img{border-radius: 50%};-->
  <img src="" alt="Avatar">
  
  <h4>Your Name</h4>
  <label id="label" for="email">email@gmail,com</label>

  <!--Account menu//block menurun-->
  <div class="accountMenu">
    
    <!--Personal Info btn-->
    <button onclick="personalInfo()" class="btn personalInfo" type="button" id="personalInfo">Personal Information</button>
    <!--receipt btn-->
    <button onclick="receipt()" class="btn receipt" type="button" id="receipt">Draft Receipt
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="25" fill="black" class="bi bi-person" viewBox="0 0 16 16">
            <!--path?-->
        </svg>
    </button>
    <!--history btn-->
    <button onclick="history()" class="btn history" type="button" id="history">History
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="25" fill="black" class="bi bi-person" viewBox="0 0 16 16">
            <!--path?-->
        </svg>
    </button>
    <!--reward btn-->
    <button onclick="reward()" class="btn reward" type="button" id="reward">Reward
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="25" fill="black" class="bi bi-person" viewBox="0 0 16 16">
            <!--path?-->
        </svg>
    </button>
  
</div>

<div class="mx-auto bg warning">
    <h2>Personal Information</h2>
</div>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css">
@endsection

@section('js')
  <script src={{asset('js/index.js')}}></script>  
@endsection