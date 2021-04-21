@extends('housekeepers.layout')

@section('content1')
<a href               = "#home" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "{{ route('housekeepers.index') }}" style="font-family:calibri;font-size:18px;"> Maintenance Management </a>
<text> > New Housekeeper</text>

<a href               = "#useraccount" target="_blank">
<button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
</a><br><br>
<hr class             = "line2">
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
      <strong> Whoops!There were some problems with your inputs.</strong><br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif

<div class="row">
  <div class = "col-lg-12">
    <h3><u>New Housekeeper</u></h3>
    <div class="float-right">
      <div class="btn-group">
        <a class="btn btn-outline-primary" href = "{{ route('housekeepers.index') }}">List of Housekeepers</a>
        <a class="btn btn-outline-primary" href = "{{ route('tasks.index') }}">List of Task</a>
        <a class="btn btn-outline-primary">Report</a>
      </div>
    </div>
  </div>
</div>
<br><br>

<form action = "{{ route('housekeepers.store') }}" method="POST">
  @csrf

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFName" class="font-weight-bold" >First Name</label>
      <input type="text" class="form-control" name="first_Name" placeholder="Enter First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLName" class="font-weight-bold">Last Name</label>
      <input type="text" class="form-control" name="last_Name" placeholder="Enter Last Name">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress" class="font-weight-bold">Hired Agency Name</label>
    <input type="text" class="form-control" name="hired_Agency_Name" placeholder="Enter Agency Name">
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNo" class="font-weight-bold">No</label>
      <input type="text" class="form-control" name="house_Number" placeholder="Enter House No">
    </div>
    <div class="form-group col-md-4">
      <label for="inputStreet" class="font-weight-bold">Street</label>
      <input type="text" class="form-control" name="street" placeholder="Enter Street Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity" class="font-weight-bold">City</label>
      <input type="text" class="form-control" name="city" placeholder="Enter City Name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputGender" class="font-weight-bold">Gender</label>
    
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="Radios1" value="Male">
            <label class="form-check-label" for="exampleRadios1">Male</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="Radios2" value="Female">
            <label class="form-check-label" for="exampleRadios2">Female</label>
        </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNo" class="font-weight-bold">Contact Number</label>
      <input type="text" class="form-control" name="contact_Number" placeholder="Enter Contact Number">
    </div>
    <div class="form-group col-md-4">
      <label for="inputStreet" class="font-weight-bold">NIC Number</label>
      <input type="text" class="form-control" name="nic_Number" placeholder="Enter NIC Number (Ex :XXXXXXXXXV)">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br><br><br>
@endsection