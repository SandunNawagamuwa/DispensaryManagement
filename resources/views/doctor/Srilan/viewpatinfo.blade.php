<!DOCTYPE html>
<html>
    <head>
        <title>Registrator</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

       
        <style>
    
            .bg3{
            background: url("img/h16.jpg") no-repeat;
            width: 100%;   
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            
        }

            .form-container{
                border: 1px solid #fff;
                padding: 50px 60px 50px 60px;
                margin-top: 15%;
                -webkit-box-shadow:6px 5px 29px 9px rgba(0,0,0,1) ;
                -moz-box-shadow:6px 5px 29px 9px rgba(0,0,0,1) ;
                box-shadow: 6px 5px 29px 9px rgba(0,0,0,1) ;

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

                 @foreach ($patient as $key => $object)
                <li class="nav-item ">
                <a class="nav-link js-scroll-trigger" href="/patient/index/{{$object->email}}">
                <i class='fa fa-home' style="color:yellow"></i>&nbsp Patient Medical history</a>
                </li>
                @endforeach

                </ul>
             </div>
        </div>
    </nav>    

    <div class="container-fluid bg3">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12"></div>
             <div class="col-md-6 col-sm-4 col-xs-12">
                <center>
                @foreach ($patient as $key => $object)
                <form class="form-container" method="POST" action="/patient/store">
                    @csrf 
                    <h2>Patient Info &nbsp<i class="fa fa-id-card" style="color:black"></i></h2>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value={{$object->name}} required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value={{$object->email}} required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value={{$object->first_name}} required autocomplete="first_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value={{$object->last_name}} required autocomplete="last_name">

                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC') }}</label>

                            <div class="col-md-6">
                                <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value={{$object->nic}} required autocomplete="nic">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="tel" class="form-control @error('contact') is-invalid @enderror" name="contact" value={{$object->contact}} required autocomplete="contact">

                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="male" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('male') }}" required autocomplete="gender">
                                <label for="male" class="col-md-4 col-form-label text-md-right">{{ __('Male') }}</label>

                                 <input id="female" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('female') }}" required autocomplete="gender">
                                <label for="female" class="col-md-4 col-form-label text-md-right">{{ __('Female') }}</label>
                                
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="civil_status" class="col-md-4 col-form-label text-md-right">{{ __('Civil status') }}</label>

                            <div class="col-md-6">
                                <input id="civil_status" type="text" class="form-control @error('civil_status') is-invalid @enderror" name="civil_status" value={{$object->civil_status}} required autocomplete="civil_status">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bday" class="col-md-4 col-form-label text-md-right">{{ __('BirthDay') }}</label>

                            <div class="col-md-6">
                                <input id="bday" type="text" class="form-control @error('bday') is-invalid @enderror" name="bday" value={{$object->bday}} required autocomplete="bday">

                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="blood_group" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                                <input id="blood_group" type="text" class="form-control @error('blood_group') is-invalid @enderror" name="blood_group" value={{$object->blood_group}} required autocomplete="blood_group">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value={{$object->address}} required autocomplete="address">

                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="numberof_child" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Child') }}</label>

                            <div class="col-md-6">
                                <input id="numberof_child" type="text" class="form-control @error('numberof_child') is-invalid @enderror" name="numberof_child" value={{$object->numberof_child}} required autocomplete="numberof_child">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="allergies" class="col-md-4 col-form-label text-md-right">{{ __('Allergies') }}</label>

                            <div class="col-md-6">
                                <input id="allergies" type="text" class="form-control @error('allergies') is-invalid @enderror" name="allergies" value={{$object->allergies}} required autocomplete="allergies">

                            </div>
                        </div>

                        </form>
                    @endforeach
                </center>
            </div>
         </div>
    </div>
 </body>