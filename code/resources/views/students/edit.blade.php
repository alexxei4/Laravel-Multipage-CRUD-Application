@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" value="{{$students->firstname}}" class="form-control"></br>
        <label>LastName</label></br>
        <input type="text" name="name" id="lastname" value="{{$students->lastname}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
        <label>Student ID</label></br>
        <input type="text" name="studentid" id="studentid" value="{{$students->studentid}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$students->age}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn"></br>
    </form>
  
  </div>
</div>
@stop