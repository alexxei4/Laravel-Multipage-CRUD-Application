@extends('students.layout')
@section('content')
<div class="container mt-3 pd-3">
    
        <h2 class="row justify-content-center">Student Search</h2>
    </div>
    
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="input-group">
                <input type="search" id="search" name="search" class="form-control rounded" placeholder="Search" />
                <button type="button" class="btn btn-outline-primary">search</button>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card mycard m-2 p-2" >

            </div>
        </div>
    </div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>


<script>
    // This is when you want to use the search to search something , IE using "111" to find student numbers that contain it 
    $(document).ready(function () {
        $('#search').on('keyup', function(){
            var value = $(this).val();
            $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function (data) {
                    $('.mycard').html(data);
                }
            });
        });
    });
    // This is to initially show all results before specifying via search
    $(document).each(function () {
        $('#search').each( function(){
            var value = $(this).val();
            $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function (data) {
                    $('.mycard').html(data);
                }
            });
        });
    });
</script>


@endsection