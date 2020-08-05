<!DOCTYPE html>
<html>
    <head>
        <title>Patient</title>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         <!--image gallery-->   
        <style>
            .bg4{
                background: url("img/h11.jpg") no-repeat;
                width: 100%;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
            }

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }

            /* Modal Content (image) */
            .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            }

            /* Caption of Modal Image */
            #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
            }

            /* Add Animation */
            .modal-content, #caption {  
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
            }

            @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
            }

            @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
            }

            /* The Close Button */
            .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            }

            .close:hover,
            .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
            }

            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
            }

       
         </style>

<style>
    table, th, td {
        border: 2px solid black;
    }
    th, td {
        text-align: center;
    }
</style>
    </head>
    <body>
        @csrf
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
                <a class="nav-link js-scroll-trigger" href="/patient/seemore/{{$object->email}}">
                <i class='fa fa-home' style="color:yellow"></i>&nbsp See More</a>
                </li>
                @endforeach
            </ul>
             </div>
        </div>
    </nav>    

    
   <div class="container-fluid bg4">
   <div class="container">
       <br>
       <br>
       <br>
       
       <div class="row">

            <div class="col-md-6 col-sm-4 col-xs-12">
                <center>
                <h2>Patient Details &nbsp<i class="fa fa-user" style="color:black"></i></h2>
                </center>
                <br>
                @foreach ($patient as $key => $object)
                <table>
                    <tr>
                        <td>Name:</td>
                        <td>{{$object->name}}</td>
                    </tr>
                    <tr>
                        <td>Birthday:</td>
                        <td>{{$object->bday}}</td>
                    </tr>
                    <tr>
                        <td>Blood Group:</td>
                        <td>{{$object->blood_group}}</td>
                    </tr>
                    <tr>
                        <td>Allegeies:</td>
                        <td>{{$object->allergies}}</td>
                    </tr>
                </table>

<br>
<br>
<br>
              {{-- <a href="/MD">  <button type="button" class="btn btn-success">More Details</button></a> --}}

                @endforeach
                <a href="/MD"><button type="button" class="btn btn-success btn-lg btn-block">More Details  </button></a>
                <br>
               


             {{-- <div class="panel panel-success">
                    <div class="panel-heading"><h2>Upload Medicine Prescription</h2></div>
                    <div class="panel-body">
                        
                 
                      @if ($message = Session::get('success'))
                      <div class="alert alert-success alert-block">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                              <strong>{{ $message }}</strong>
                      </div>
                      <img src="images/{{ Session::get('image.upload') }}">
                      @endif
                
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
                <div class="container" id="upload">
                      <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                
                              <div class="col-md-6">
                                  <input type="file" name="image" class="btn btn-outline-success">
                              </div>
                 
                              <div class="col-md-6">
                                  <button type="submit" class="btn btn-success">Upload</button>
                              </div>
                 
                          </div>
                      </form>
                </div> 
                    </div>
                    </div>--}}
                
            
                <a href="/DP"><button type="button" class="btn btn-success btn-lg btn-block">Add New Prescription  </button></a>
                 <br>
            </div>
          

             <div class="col-md-6 col-sm-4 col-xs-12">
                 <center>
                 <h2>Medical History &nbsp<i class="fa fa-edit" style="color:black"></i></h2>
                 <br>
                 <!--image table-->

                 <table>


                    <col width="500">
                    <col width="1500">
                        <tr height="50">
                            <th>Date</th>
                            <th>Image <p>(Click on image to download)</p> </th>
                            
                        </tr>
                     
                        @foreach($images as $images)
                        <tr>
                            <td> <font size="4"> {{$images->created_at}}</td> 
                            <td>
                                
                            <a href="" download>
                            <img src={{$images->medical_record}} alt="Image" style="width: 150px;height:50px">
                            {{-- <img src ="1595734041.png" onclick="viewImage(this)" > </a>  --}}
                            </td>
                        </tr>
                        @endforeach
                   
                    </table>
            
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                        <div id="caption"></div>
                </div>
                @section('scripts')
                <script>
            function viewImage(element)
            {
                // Get the modal
                var modal = document.getElementById("myModal");
            
                 //Get the image and insert it inside the modal - use its "alt" text as a caption
                //var img = document.getElementById("myImg");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                }
                modal.style.display = "block";
                modalImg.src = element.src;
                
                }
            
               
            }
             // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
            modal.style.display = "none";
            }
            
            </script>
            @endsection

                 </center>
                <br>
                <br>
                <br>
            </div> 
            </div>
                
            
        </div>
   
    </div>
    </div>
            

    </body>