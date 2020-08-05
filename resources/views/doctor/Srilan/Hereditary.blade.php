<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--sweet alert-->
    <link rel="stylesheet" href="{{ url('css/Chart.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
    body {
      position: relative;
      background-image:url('img/image1.jpg');
    }
    .affix {
      top: 20px;
      z-index: 9999 !important;
    }
     
    
    
  
    </style>


</head>
<body>
    <div>
     <!--nev bar-->
     <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

        <div class="container-fluid">
       <!-- <a class="navbar-brand" href="#">--><img src="img/h1.jpg" style="width:120px; height:30px"><!--!</a>-->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
              <span class="navbar-toggler-icon"></span>
            </button>

             <div class="collapse navbar-collapse" id="navbarResponsive">

            
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item ">
                     <a class="nav-link js-scroll-trigger" href="/MD">
                     <i class='fa fa-home' style="color:yellow"></i>&nbsp More Info</a>
                     </li>

            <ul class="navbar-nav ml-auto my-2 my-lg-0">
               <li class="nav-item ">
                <a class="nav-link js-scroll-trigger" href="/">
                <i class='fa fa-home' style="color:yellow"></i>&nbsp Welcome</a>
                </li>
                
              
                <li class="nav-item ">
                <a class="nav-link js-scroll-trigger" href="/home">
                <i class='fa fa-home' style="color:yellow"></i>&nbsp Home</a>
                </li>
            </ul>
             </div>
        </div>
    </nav> 
</div>   

    <div  style="color:#0B6623;height:100px;">
        
                <h1>The Family Clinic</h1>
                <h3>Hereditary Diseases Update Section </h3>

            
    </div>


<hr style="border: 2px solid #0B6623;">
<br><br><br><br><br>
<div class="container">
    <div class="row">
        
        <nav class="col-md-12" id="myScrollspy" >
            <ul class="nav nav-pills flex-column"  data-spy="affix" data-offset-top="100">
                
                <li class="nav-item btn btn-outline-success" type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#b" style="padding-top:30px;padding-bottom:30px">
                Blood Sugar
                   
                </li>
                <li class="nav-item btn btn-outline-success" type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#p" style="padding-top:30px;padding-bottom:30px">
               Preasure
                   
                </li>
                <li class="nav-item btn btn-outline-success"type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#c" style="padding-top:30px;padding-bottom:30px">
                Collestrol
                    
                </li>
               
            </ul>
        </nav>
        <!--show errors-->
        @if (count($errors) > 0)
                          <div class="alert alert-danger">
                              <strong>Whoops!</strong> There were some problems with your input.
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif



        <form method="post" action="{{'/U'}}">
            @csrf 
            <div class="modal fade" id="b" tabindex="-1" role="dialog" aria-labelledby="Label" aria-hidden="true">
    
          
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Label">Blood Sugar Update</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                      
    
                        <div class="modal-body">
    
                        <!--show errors-->
      
            @foreach($errors->all() as $error)

            $id=(session()->get('pid'))
                                <div class="alert alert-danger" role="alert">
                                    
                                    {{$error}}
                                
                                </div>
    
                            @endforeach
    
                            <label >Medical ID</label>
                            <input type="text" class="form-control" id="p_id" value={{ Session::get('pid')}} name="p_id" readonly="readonly">
                             <br>  
                            <label>Blood Sugar Level</label>
                            <input type="text" class="form-control" id="rate" name="rate" placeholder="Enter Blood sugar level">
                            
                        </div>
    
                        <div class="modal-footer">
    
                            <button type="submit" class="btn btn-outline-success" id="submit" name="submit">Submit</button>
                            <button type="reset" class="btn btn-outline-success" name="Reset">Reset</button>
                            
                        </div>
                       
                    </div>
                </div>
            </div>   
            </form>

            <!--pressure-->    
                
                    <form method="post" action="{{'/p'}}">
                    @csrf

                    <div class="modal fade" id="p" tabindex="-1" role="dialog" aria-labelledby="Label2" aria-hidden="true">

      
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="Label2">Preasure Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
      

                      
   <!--show errors-->
    
                        

                        <div class="modal-body">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                
                                {{$error}}
                            
                            </div>

                        @endforeach
                        <label >Medical ID</label>
                        <input type="text" class="form-control" id="pr_id" name="pr_id" value={{ Session::get('pid')}} readonly="readonly">
                        
                      <br>
                        <label>Blood Preasure Level</label>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" id="lower" name="lower" placeholder="Lower level">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" id="upper" name="upper" placeholder="Upper level">
                            </div>
                        </div>
                        
                        </div>

                        <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success" name="Save" value="Submit">Submit</button>
                        <button type="reset" class="btn btn-outline-success" name="Reset">Reset</button>
                        </div>
                        </div>
            </div>
        </div>   
        </form>

         <!--collestrol-->  
                
         <form method="post" action="{{'/c'}}">
            {{csrf_field()}}
               

            <div class="modal fade" id="c" tabindex="-1" role="dialog" aria-labelledby="Label3" aria-hidden="true">


<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="Label3">Collestrol Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>



                <div class="modal-body">

                   
<!--show errors-->

@foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        
                        {{$error}}
                    
                    </div>

                @endforeach
                <label >Medical ID</label>
                <input type="text" class="form-control" id="c_id" name="c_id"  value={{ Session::get('pid')}} readonly="readonly">
                
              <br>
                <label>Collestrol Level</label>
                <input type="text" class="form-control" id="rate" name="rate" placeholder="Enter rate">
                
                </div>

                <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success" name="Save">Submit</button>
                <button type="reset" class="btn btn-outline-success" name="Reset">Reset</button>
                </div>
                </div>
    </div>
</div>   
</form>




            
</body>
</html>