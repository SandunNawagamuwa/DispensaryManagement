<!DOCTYPE html>
<html>
    <head>
        <title>RegiApp</title>

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
                    <li class="nav-item active">
                        <a href="login.php" class="nav-link js-scroll-trigger">
                        <span class="glyphicon glyphicon-log-out"></span>
                        <i class="fa fa-user-secret" style="color:DeepSkyBlue"></i>&nbsp Log out</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="Front.php">
                        <i class='fa fa-home' style="color:DeepSkyBlue"></i>&nbsp Home</a>
                    </li>

                    
                </ul>
             </div>
        </div>
    </nav>    

    <div class="container-fluid bg3">
        <div class="row">
            <div class="col-md-1 col-sm-4 col-xs-12"></div>
             <div class="col-md-10 col-sm-4 col-xs-12">
                <center>
                <form class="form-container">
                <table class="table"> 
                    <h2>Patients Appoinments List &nbsp<i class="fa fa-id-card" style="color:black"></i></h2>
                    <br>
                    <tr>
                        <th>Name</th>
                        <th>Appoinment Number</th>
                        <th>Time</th>
                        <th>Doctor Availability</th>
                    </tr>

                    <tr>
                        <td>Chanaka Sandaruwan</td>
                        <td>001</td>
                        <td>6.30pm </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Nimesh Lakshitha</td>
                        <td>002</td>
                        <td>6.40pm </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Naveen Bandara</td>
                        <td>003</td>
                        <td>6.50pm </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Nuwan Sameera</td>
                        <td>004</td>
                        <td>7.00pm </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Kamal pathirana</td>
                        <td>005</td>
                        <td>7.10pm </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Ashen Rathnayaka</td>
                        <td>006</td>
                        <td>7.20pm </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Lakshitha Kumara</td>
                        <td>007</td>
                        <td>7.30pm </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Ishan Sudarshana</td>
                        <td>008</td>
                        <td>7.40pm </td>
                        <td></td>
                    </tr>
                            
                </table>
                         <button type="button" class="btn btn-success btn-lg btn-block">Send Appoinment Details</button>
                                
                </form>
                </center>
            </div>
              <div class="col-md-1 col-sm-6 col-xs-12"></div>
        </div>
    </div>
   
</body>