<!DOCTYPE html>

<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Appoinment</title>
        <style>
h6{
    cursor: pointer;
}

 h1{
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    font-size: 90vw ;
 }   
      
 body{
    background-image: url('/img/h12.jpg');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:100% 100%;
  }

div.container {
    border-radius: 1px;
    background-color: #f2f2f2;
    width:500px;
    padding: 5px;
}

.form-container
{
    border:1px solid #fff;
    padding:50px 60px 50px 60px;
    margin-top:15%;
    -webkit-box-shadow:6px 5px 29px 9px rgba(0,0,0,1) ;
    -moz-box-shadow:1px 1px 1px 1px rgba(0,0,0,1) ;
    box-shadow: 6px 5px 29px 9px rgba(0,0,0,1) ;
}

div.Topic-container{
    border-radius: 1px;
    width:400px;
    padding: 50px;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


button[type=submit] {
    width: 49%;
    background-color: #32CD32;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button[type=submit]:hover {
    background-color: #00000F;
}

button[type=search] {
    width: 15%;
    background-color: #aaaaaa;
    color: white;
    padding: 2px 2px;
    margin: 1px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button[type=search]:hover {
    background-color: #f1f1f1;
}


button[type=reset] {
  width: 49%;
  background-color: #32CD32;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button[type=reset]:hover {
  background-color: #00000F;
}

</style>

     <!-- bootstrap -->


 
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
</head>
    

<body>

<!-- nav bar-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

        
          



        <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">--><img src="{{url('img/h1.jpg')}}" style="width:120px; height:30px"><!--!</a>-->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
              <span class="navbar-toggler-icon"></span>
            </button>

             <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto my-2 my-lg-0">
              <li class="nav-item active">
                <a href="login.php" class="nav-link js-scroll-trigger" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <span class="glyphicon glyphicon-log-out"></span>
                    <i class="fa fa-user-secret" style="color:purple"></i>&nbsp Log out</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href='/home'>
                <i class='fa fa-home' style="color:purple"></i>&nbsp Dashboard</a>
                </li>

            </ul>
             </div>
        </div>
    </nav> 

  <br> <br><br><br>

  <div class="row">
  <div class="col-md-1" >
  
  <div class="Topic-container">
    
    <h1 style="font-size:8vw">Channel Your Doctor</h1>
  
  </div>	
  </div>

  <div class="col-md-6" ></div>
  
  <div class="col-md-4" >

  @foreach($errors->all() as $error)

  <div class="alert alert-danger" role="alert">
      {{$error}}
  </div>

  @endforeach

  <center>
    @if(Session::has('notify'))
        <div style="z-index: 20000; position: absolute; margin-top: 99px; margin-left: 100px" class="alert alert-success">{{ Session::get('notify') }}</div>
    @endif
    </center>

  <form class="form-center" action="{{url('patient/set-appointment')}}" method="POST">
  {{csrf_field()}}

  <div class="form-container">
  <div class="form-group ">

  <div class="form-group row">
    <label for="inputdoctor"  class="col-sm-4 col-form-label">Doctor</label>
    <div class="col-sm-10">
        <select id="idoctor" name="doctor" required>
                <option value="" selected disabled>Select a Doctor</option>
        @if(isset($doctors))
            @foreach( $doctors as $doctor )
                <option value="{{$doctor->user_id}}">{{$doctor->first_name}} {{$doctor->last_name}}</option> 
            @endforeach
        @endif
        </select>
    </div>

  </div>
  

  <div class="form-group row">
    <label for="inputDate" class="col-sm-4 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="Date" class="form-control"  name="date" id="inputDate" required>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button> 
  <button type="reset" class="btn btn-primary">Clear</button>
</form> 
</div><div class="col-md-1" ></div>   
</div>
<div class="col-md-1" ></div>   

  </body>

    
  </html>




