@extends('students.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About US</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>



#container  {margin:0px auto; text-align:center; width:760px; }
#holder    {width:100%; padding:20px 20px 5px 20px; background:#FFFFFF; text-align:left; }
#content  {float:left; width:400px; padding:20px 10px 0 0; line-height:160%; }
#news    {float:right; width:250px; padding:20px 0; line-height:140%; text-align:justify; }
.newsItem  {padding:20px 20px 5px 20px; background:#FEFFD5; border:1px solid #FFEB70; font-size:90%; margin-bottom:20px; }


.clearfix:after {content:"."; display:block; height:0; clear:both; visibility:hidden; }
.clearfix {display:inline-block; }
* html .clearfix {height:1%; }
.clearfix {display:block; }
  </style>
</head>
<body id="home">
<div id="container">
  <div id="holder" class="clearfix">
      <h1>About Us</h1>
    <div id="content">
      <p>This is a Student Management Application amde by our brilliant CompSci Students at MLM School</p>
      <p>The Whole point of this program is to provide access to student records and to manage them with ease , without the typical beaurecratic headache!</p>
    </div>
    <div id="news">
      <div class="newsItem">
        <h3>IT Support</h3>
        <p> Need any help? Is it related to technology? Then Please email us at  <a href="mlmschool@ITsupport.com">mlmschool@ITsupport.com</a>.</p>
        <img src="{{ URL('img/ITSUPPORTv2.jpg') }}" >
      </div>
    </div>
  </div>
</div>
</body>
</html>
@stop
