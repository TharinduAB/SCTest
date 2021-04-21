@extends('budgets.layout')

@section('content')
<link rel="stylesheet" href="/css/indexex.css"/>
<header>
    <div class= "header">
    <a href= "#home">
    <img src= "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" >
    </a><br>
    <font size= "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
    </div>
    </header>
    <div class            = "topnav">
    <a href             = "#RoomBooking">Room Booking</a>
    <a href             = "#Event">Event Management</a>
    <a href             = "#Emp">Employee Management</a>
    <a href             = "#RoomMana">Room Management</a>
    <a href             = "#Maint">Maintenance</a>
    <a href             = "#Dining">Dining</a>
    <a href             = "#Inv">Inventory</a>
    <a href             = "#Fin">Financial</a>
    
    </div>
    <hr class             = "line2">
    <br>
    <a href               = "#home" style="font-family:calibri;font-size:18px;"> Home  </a>
    <text> > </text>
    <a href               = "#Inv" style="font-family:calibri;font-size:18px;"> Financial Management </a>
    <text> > </text>
    <a href               = "#New" style="font-family:calibri;font-size:18px;"> Busget Records </a>
    <a href               = "#useraccount" target="_blank">
    <button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
    </a><br><br>
    <hr class             = "line2"> <br><br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('budgets.create') }}"> Create New Budget</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<h2>Budget Records</h2><br>
<div id="box3" class="box">
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Description</th>
        <th>Budget</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($budgets as $budget)
    <tr>
        <td>{{ $budget->id }}</td>
        <td>{{ $budget->category }}</td>
        <td>{{ $budget->des }}</td>
        <td>{{ $budget->budg }}</td>
        <td>
            <form action="{{ route('budgets.destroy',$budget->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('budgets.show',$budget->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('budgets.edit',$budget->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
</div>
{{ $budgets->links() }}
@endsection