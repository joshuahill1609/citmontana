<!DOCTYPE html>
<html>
    <head>
        <title>C.I.T. Montana</title>
        
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        
    <div class="container">
        <div class="header">
            <nav>
                 <ul class="nav nav-pills pull-right">
                   <li role="presentation" class="active"><a href="http://thecommunity.citmontana.com/" target="_blank">The Community</a></li>
                 </ul>
            </nav>
        <h3><img id='logo' src="/img/logo.png"></h3>
        </div>
    </div>
                  
           
    <div class="container">
       @yield('content')
   
       <!-- footer -->
       <hr class="divider">
       <div class="row marketing footer">
           <div class="col-lg-6">
             <h5><a href="http://www.cit.site/download/w9" target="_blank">Download W-9</a></h5>

             <!-- <h5><a href="#">Upcoming Academies</a></h5> -->
         
             <!-- <h5><a href="#">About Us</a></h5> -->
         
             <a href="http://www.cit.site/facebook" target="_blank"><i class="fa fa-facebook-official"></i></a>
             
             <a href="http://www.cit.site/instagram" target="_blank"><i class="fa fa-instagram"></i></a>
           </div>
        </div>
    </div>
        
    </body>
</html>

<script>

    $(".county-selection").on('click', function(){
        var county = $(this).attr('rel');
        // alert('here');
        $.ajax({
            url: "/info",
            type: 'POST',
            data: {_token:'<?php echo csrf_token(); ?>', county:county},
            success: function (data) {
                $('#dropdownMenu-text').replaceWith("<span id='dropdownMenu-text'>" + data.county + "</span>");
                
                $('#le-name').replaceWith("<li id='le-name'>" + data.le['name'] + "</li>");
                $('#le-number').replaceWith("<li id='le-number'>" + data.le['number'] + "</li>");
                $('#le-email').replaceWith("<li id='le-email'>" + data.le['email'] + "</li>");
                
                $('#mh-name').replaceWith("<li id='mh-name'>" + data.mh['name'] + "</li>");
                $('#mh-number').replaceWith("<li id='mh-number'>" + data.mh['number'] + "</li>");
                $('#mh-email').replaceWith("<li id='mh-email'>" + data.mh['email'] + "</li>");
                
                $('#class-location').replaceWith("<li id='class-location'>" + data.class['location'] + "</li>");
                $('#class-date').replaceWith("<li id='class-date'>" + data.class['date'] + "</li>");
            }
        });
    });
</script>
