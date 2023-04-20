@extends('students.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
 

  </style>
</head>
<body>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-5 text-left"> 
      <h1>Welcome</h1>
      <img src="{{ URL('img/studentpic.jpg') }}" >
      
    </div>
    <div class="col-sm-5 text-right"> 
      <h1>MLM School</h1>
      <p>Try this new database application , its still in Beta mode.<br> Edit some information about yourself and change it.<br>  Add a new second identity to the database. <br> Delete someone you dont like !<br>  Check it out , see if your name is on it!!</p>
      
    </div>
   
      
  </div>
</div>

<br>
<br>
<br>
<br>
</body>
</html>
@stop