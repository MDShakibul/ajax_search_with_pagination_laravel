<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Student</title>
    <style>
    .container, .row, .center {
        display: flex;
        justify-content: center;
}
    </style>
</head>
<body>
    <div class="container">
       <div class="row" style="width: 100%;">
          <div class="col-md-6 child" style="margin-top:40px">
             <h4>Search Students Data</h4><hr>

                <div id="search">

                    <div class="form-group">
                        <label for="">Enter Keyword</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Search here by name....." value="{{ request()->input('name') }}">

                     </div>
                     <h4 class="center">OR</h4>

                     <div class="form-group">
                         <input type="text" class="form-control" id="address" name="address" placeholder="Search here by address....." value="{{ request()->input('address') }}">

                      </div>

                </div>


             <br>
             <br>
             <h3>Results</h3>
             <hr>

              <div id="search_list">
                @include('students')
              </div>


          </div>
       </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){
            $( "#search" ).keypress(function() {
                var name = $('#name').val();
                var address = $('#address').val();
                $.ajax({
                    url:'find',
                    type:'GET',
                    data:{'search':name, 'address':address},
                    dataType: 'json',
                    success:function(data){
                        $('#search_list').html(data.names);
                        $("#pagination-block").html(data.pagination);


                    }

                });
            });
        });

    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            getPosts($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        });
    });
    function getPosts(page) {
        $.ajax({
            url: '/search?page=' + page,
            type:'GET',
            dataType: 'json',
            success:function(data){
                if(data){
                    $('#search_list').html(data);
                //console.log(data);
                }
                else{

                   // console.log(data)
                };
            }
        });
    }
</script>

</body>
</html>
