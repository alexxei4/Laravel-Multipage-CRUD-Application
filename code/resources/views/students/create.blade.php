@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
        <label>LastName</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>StudentID</label></br>
        <input type="text" name="studentid" id="studentid" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop