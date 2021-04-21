@extends('housekeepers.layout')

@section('content1')
<a href               = "#home" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "{{ route('housekeepers.index') }}" style="font-family:calibri;font-size:18px;"> Maintenance Management </a>
<text> > Task List</text>

<a href               = "#useraccount" target="_blank">
<button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
</a><br><br>
<hr class             = "line2">
@endsection

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="row">
  <div class = "col-lg-12">
    <h3><u>List of Tasks</u></h3>
    <div class="float-right">
      <div class="btn-group">
        <a class="btn btn-outline-primary" href = "{{ route('housekeepers.index') }}">List of Housekeepers</a>
        <a class="btn btn-outline-primary" href = "{{ route('housekeepers.index') }}">Back</a>
      </div>
    </div>
  </div>
</div>
<br><br>

<table class="table table-bordered">
    <tr>
      <th>Housekeeper ID</th>
      <th>First Name</th>
      <th>Contact Number</th>
      <th>Gender</th>
      <th>Task ID</th>
      <th>Special Request/Description</th>
      <th>Status</th>
      <th>Room ID</th>
      <th width="156px">Action</th>
    </tr>
    @foreach ($data as $row)
    <tr>
      <td>{{ $row->housekeeper_id }}</td>
      <td>{{ $row->first_Name  }}</td>
      <td>{{ $row->contact_Number  }}</td>
      <td>{{ $row->gender  }}</td>
      <td>{{ $row->task_id }}</td>
      <td>{{ $row->description }}</td>
      <td>{{ $row->status }}</td>
      <td>{{ $row->room_ID }}</td>
      <td>
            <form action="{{ route('tasks.destroy', $row->task_id) }}" method = "POST">
                <a  class="btn btn-primary" href = "{{ route('tasks.edit',$row->task_id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button  onclick="return confirm('Are You Sure You Want to delete this task? ');" class="btn btn-danger">Delete</button>
            </form>
      </td>
    </tr>
    @endforeach
</table>
<br><br><br><br>
@endsection