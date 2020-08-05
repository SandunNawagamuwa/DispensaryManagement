<!DOCTYPE html>
<html>
    <head>
        <title>Docpre</title>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            
        <style>
            .bg21{
            background: url("img/h18.jpg") no-repeat;
            width: 100%;
            height: 100vh;
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
                    <li class="nav-item active">
                        <a href="login.php" class="nav-link js-scroll-trigger">
                        <span class="glyphicon glyphicon-log-out"></span>
                        <i class="fa fa-user-secret" style="color:pink"></i>&nbsp Log out</a>
                    </li>

                <li class="nav-item ">
                <a class="nav-link js-scroll-trigger" href="Front.php">
                <i class='fa fa-home' style="color:pink"></i>&nbsp Home</a>
                </li>

            </ul>
             </div>
        </div>
    </nav>    

    
   <div class="container-fluid bg21">
   <div class="container">
       <br>
       <br>
       <br>
      
       
       <div class="row">

            {{-- <div class="col-md-3 col-sm-4 col-xs-12">
                        <center>
                        <h2>Patient Details &nbsp<i class="fa fa-user" style="color:black"></i></h2>
                        </center>
                        <br>
                        <table>
                            <tr>
                                <td>Name:</td>
                            </tr>
                            <tr>
                                <td>Age:</td>
                            </tr>
                            <tr>
                                <td>Blood Group:</td>
                            </tr>
                            <tr>
                                <td>Allegeies:</td>
                            </tr>
                            
                        </table>
                        
                        
            </div> --}}

            <div class="col-md-9 col-sm-4 col-xs-12">
                   <center>
                    <h2>Medical History &nbsp<i class="fa fa-edit" style="color:black"></i></h2>
                    <br>
                    <div class="panel panel-success">
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
                        </div>
                    <table>

                            <tr>
                                <th></th>
                                <th>Drug</th>
                                <th></th>
                                <th>Strangth</th>
                                <th></th>
                                <th>Dose</th>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1.</td>

                                <td>
                                    <select id="drug">
                                        <option value="a1">Peracetamol</option>
                                        <option value="a2">Piriton</option>
                                        <option value="a3">Vit C</option>
                                        <option value="a4">Amoxicillin</option>
                                        <option value="a5">Omeprazole</option>
                                        <option value="a6">Domperidon</option>
                                        
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="strangth">
                                        <option value="b1">1tab</option>
                                        <option value="b2">2tab</option>
                                        <option value="b3">10mg</option>
                                        <option value="b4">20mg</option>
                                        <option value="b5">25mg</option> 
                                    </select>            
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="dose">
                                        <option value="c1">once 6hrs</option>
                                        <option value="c2.">once 8hrs</option>
                                        <option value="c3">After meal</option>
                                        <option value="c4">Before meal</option>
                                        <option value="c5">Only night </option>    
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td><button type="button" class="btn btn-outline-success">Ok</button></td>

                            </tr>

                            <tr>
                            <td>2.</td>

                                <td>
                                    <select id="drug">
                                        <option value="a1">Peracetamol</option>
                                        <option value="a2">Piriton</option>
                                        <option value="a3">Vit C</option>
                                        <option value="a4">Amoxicillin</option>
                                        <option value="a5">Omeprazole</option>
                                        <option value="a6">Domperidon</option>
                                        
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="strangth">
                                        <option value="b1">1tab</option>
                                        <option value="b2">2tab</option>
                                        <option value="b3">10mg</option>
                                        <option value="b4">20mg</option>
                                        <option value="b5">25mg</option> 
                                    </select>            
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="dose">
                                        <option value="c1">once 6hrs</option>
                                        <option value="c2.">once 8hrs</option>
                                        <option value="c3">After meal</option>
                                        <option value="c4">Before meal</option>
                                        <option value="c5">Only night </option>    
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td><button type="button" class="btn btn-outline-success">Ok</button></td>

                            </tr>

                            <tr>
                                <td>3.</td>

                                <td>
                                    <select id="drug">
                                        <option value="a1">Peracetamol</option>
                                        <option value="a2">Piriton</option>
                                        <option value="a3">Vit C</option>
                                        <option value="a4">Amoxicillin</option>
                                        <option value="a5">Omeprazole</option>
                                        <option value="a6">Domperidon</option>
                                        
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="strangth">
                                        <option value="b1">1tab</option>
                                        <option value="b2">2tab</option>
                                        <option value="b3">10mg</option>
                                        <option value="b4">20mg</option>
                                        <option value="b5">25mg</option> 
                                    </select>            
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="dose">
                                        <option value="c1">once 6hrs</option>
                                        <option value="c2.">once 8hrs</option>
                                        <option value="c3">After meal</option>
                                        <option value="c4">Before meal</option>
                                        <option value="c5">Only night </option>    
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td><button type="button" class="btn btn-outline-success">Ok</button></td>

                            </tr>

                            <tr>
                                <td>4.</td>

                                <td>
                                    <select id="drug">
                                        <option value="a1">Peracetamol</option>
                                        <option value="a2">Piriton</option>
                                        <option value="a3">Vit C</option>
                                        <option value="a4">Amoxicillin</option>
                                        <option value="a5">Omeprazole</option>
                                        <option value="a6">Domperidon</option>
                                        
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="strangth">
                                        <option value="b1">1tab</option>
                                        <option value="b2">2tab</option>
                                        <option value="b3">10mg</option>
                                        <option value="b4">20mg</option>
                                        <option value="b5">25mg</option> 
                                    </select>            
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="dose">
                                        <option value="c1">once 6hrs</option>
                                        <option value="c2.">once 8hrs</option>
                                        <option value="c3">After meal</option>
                                        <option value="c4">Before meal</option>
                                        <option value="c5">Only night </option>    
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td><button type="button" class="btn btn-outline-success">Ok</button></td>

                            </tr>

                            <tr>
                                <td>5.</td>

                                <td>
                                    <select id="drug">
                                        <option value="a1">Peracetamol</option>
                                        <option value="a2">Piriton</option>
                                        <option value="a3">Vit C</option>
                                        <option value="a4">Amoxicillin</option>
                                        <option value="a5">Omeprazole</option>
                                        <option value="a6">Domperidon</option>
                                        
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="strangth">
                                        <option value="b1">1tab</option>
                                        <option value="b2">2tab</option>
                                        <option value="b3">10mg</option>
                                        <option value="b4">20mg</option>
                                        <option value="b5">25mg</option> 
                                    </select>            
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="dose">
                                        <option value="c1">once 6hrs</option>
                                        <option value="c2.">once 8hrs</option>
                                        <option value="c3">After meal</option>
                                        <option value="c4">Before meal</option>
                                        <option value="c5">Only night </option>    
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td><button type="button" class="btn btn-outline-success">Ok</button></td>

                            </tr>

                            <tr>
                                <td>6.</td>

                                <td>
                                    <select id="drug">
                                        <option value="a1">Peracetamol</option>
                                        <option value="a2">Piriton</option>
                                        <option value="a3">Vit C</option>
                                        <option value="a4">Amoxicillin</option>
                                        <option value="a5">Omeprazole</option>
                                        <option value="a6">Domperidon</option>
                                        
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="strangth">
                                        <option value="b1">1tab</option>
                                        <option value="b2">2tab</option>
                                        <option value="b3">10mg</option>
                                        <option value="b4">20mg</option>
                                        <option value="b5">25mg</option> 
                                    </select>            
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>
                                    <select id="dose">
                                        <option value="c1">once 6hrs</option>
                                        <option value="c2.">once 8hrs</option>
                                        <option value="c3">After meal</option>
                                        <option value="c4">Before meal</option>
                                        <option value="c5">Only night </option>    
                                    </select>
                                </td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td><button type="button" class="btn btn-outline-success">Ok</button></td>

                            </tr>
                            
                        </table>
                        </center>
                 
            </div> 
        </div>
        <br>
        <br>
        <br>
           
        <button type="button" class="btn btn-outline-dark btn-lg btn-block">Submit Prescription  </button>
        </div> 
    </div>
    </div>        

    </body>