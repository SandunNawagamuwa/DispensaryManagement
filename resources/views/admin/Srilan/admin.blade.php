<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <style>
    
        .bg1{
        background: url("img/h16.jpg") no-repeat; 
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        
        } 
         </style>

    </head>
    <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

        <div class="container-fluid">
       <!-- <a class="navbar-brand" href="#">--><img src="img/h1.jpg" style="width:120px; height:30px"><!--!</a>-->
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

   <div class="container-fluid bg1">
   
   <div class="container">
        <!--Success Alert-->
      
       <br>
       <br>
       <br>
       <div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
    </div> 
        <h2>Doctors &nbsp<i class="fas fa-user-md" style="color:black"></i></h2>           
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Join Date</th>
                        <th>Edit</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($doctors as $user)
                    <tr>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->contact}}</td>
                        <td>{{$user->created_at}}</td>
                        
                        <td>
                                        <button type="button" class="btn"><a href="/doctor/{{$user->email}}/edit">Edit</a></button>
                        </td>
                        <td>@if($user->status=='1')
                                        <button type="button" class="btn"><a href="/doctor/{{$user->email}}/deactivate">Deactivate</a></button>
                                        @elseif($user->status=='0')
                                        <button type="button" class="btn"><a href="/doctor/{{$user->email}}/activate">Activate</a></button>
                            @endif
                        </td>
                    </tr>
                 @endforeach
                </tbody>
            </table>

            <h2>Registrators &nbsp<i class="fas fa-chalkboard-teacher" style="color:black"></i></h2>   
                
            <table class="table">
                <thead>
                <tr>
                     <tr>
                         <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Join Date</th>
                        <th>Edit</th>
                        <th>Status</th>
                    </tr>
                </tr>
                </thead>
                <tbody>
                 @foreach($registrar as $user)
                            <tr>
                                <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->contact}}</td>
                        <td>{{$user->created_at}}</td>
                        
                        <td>
                                        <button type="button" class="btn"><a href="/registrar/{{$user->email}}/edit">Edit</a></button>
                        </td>
                        <td>@if($user->status=='1')
                                        <button type="button" class="btn"><a href="/registrar/{{$user->email}}/deactivate">Deactivate</a></button>
                                        @elseif($user->status=='0')
                                        <button type="button" class="btn"><a href="/registrar/{{$user->email}}/activate">Activate</a></button>
                            @endif
                        </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
                <br>
                <br>
            
            <a href="/doctor/create"><button type="button" class="btn btn-success btn-lg btn-block">Add Doctor</button></a><br>
            <a href="/registrar/create"><button type="button" class="btn btn-success btn-lg btn-block">Add Registrator</button></a>
            
            
            <br>
            <br>
            <br>
           
    </div>
    </div>
  
   
    </body>