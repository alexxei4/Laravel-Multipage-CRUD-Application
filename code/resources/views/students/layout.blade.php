@include('students.includes.header')
<!DOCTYPE html>
<html>
<head>

    <title>A4 Student App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <style>
        a:hover {
            background-color: yellow;
        }
    </style>
<div class="row">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link  text-dark">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/students') }}" class="nav-link  text-dark">Manage</a>
                        </li>
                        <li class="nav-item">
                            <a   href="{{ route('students.search') }}" class="nav-link text-dark">Search</a>
                        </li>    
                        <li class="nav-item">
                            <a href="{{ url('/about') }}"class="nav-link  text-dark">About Us</a>
                        </li>
                        
                    </ul>
                </div>
  
<div class="container">
    @yield('content')
</div>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    
</body>
<footer>
@include('students.includes.footer')    
</footer>
