<!DOCTYPE html>
<html>
    <head>
        <title>Doctor</title>

        <style>

        .bg2
        {
            background-image:url("img/h18.jpg");
            width: 100%;
            height: 100vh;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;     
        }
        .form-container {
                    border: 1px solid #fff;
                    padding: 50px 60px 50px 60px;
                    margin-top: 15%;
                    -webkit-box-shadow: 6px 5px 29px 9px rgba(0, 0, 0, 1);
                    -moz-box-shadow: 6px 5px 29px 9px rgba(0, 0, 0, 1);
                    box-shadow: 6px 5px 29px 9px rgba(0, 0, 0, 1);
                }
     

        </style>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    </head>
    
    <body>
    <div class="container-fluid bg2">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <img src="img/h1.jpg" style="width:120px; height:30px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item ">
                <a class="nav-link js-scroll-trigger" href="/">
                <i class='fa fa-home' style="color:yellow"></i>&nbsp Welcome</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </li>
              
                <li class="nav-item ">
                <a class="nav-link js-scroll-trigger" href="/home">
                <i class='fa fa-home' style="color:yellow"></i>&nbsp Home</a>
                </li>
                    </ul>
                </div>
            </div>
        </nav>        
    
        
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12"></div>
                <div class="col-md-6 col-sm-4 col-xs-12">

                    <center>
                        <form class="form-container" method="POST" action="/patient/index">
                         @csrf   
                            <table class="table"> 
                                <h2>Find Your Patient &nbsp<i class="fas fa-portrait" style="color:black"></i></h2>
                                <tr>
                                    <td>Patient Medical Number:</td>
                                    <td><input type="text" class="form-control" id="regid" name="regid"></td>
                                </tr>
                            </table>
                                
                            <button type="submit" class="btn btn-outline-dark">Submit</button>
                            <button type="reset" class="btn btn-outline-dark">Clear</button>
                        </form>
                    </center>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12"></div>
            </div>
        </div>
    </body>
</html>