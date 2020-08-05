<!DOCTYPE html>
<html>
    <head>
        <title>Front</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

       
        <style>
    
                html, body
            {
                height: 100%;
                width:100%;
                font-family: 'Poppins', sans-serif;
                color: #222;
                font: size 100;
            }
            .card{
                padding:30px ;
                box-shadow: black;
            }
            .contact{
                background-image: url("img/h9.jpg");
                background-position: center;
                background-attachment: fixed;
                background-size:cover ;
            }
            .navbar{
                padding: .8rem
                
            }
            .navbar-nav li{
                padding-right: 20px;
            }
            .nav-link{
                font-size: 1.1em !important;
            }
            .carousel-inner img{
                height: 100vh;
                min-height: 300px;
                background: no-repeat center center scroll;
                -webkit-background-size: cover;
                background-size: cover;
            }
            .carousel-caption{
                position: absolute;
                top: 55%;
                transform: translateY(-50%); 
            }
            .carousel-caption h1{
                
                font-size: 500%;
                text-transform: uppercase;
                text-shadow:1px 1px 10px  #222;
            }
            .carousel-caption h4{
                
                color: #222;
                font-size: 200%;
                font-weight: 500%;
                text-shadow: 1px 1px 10px #222;
            }
            .carousel-caption h5{
                top: 25%;
                font-size:200%;
                font-weight: 500%;
                    
            }

            footer{
                background-color:#222;
                color: #d5d5d5;
                padding-top: 2rem;
            }
            hr.light{
                border-top: 1px solid #d5d5d5;
                width: 100%;
                margin-top: .8rem;
                margin-bottom: 1rem;
            }

            .carousel-item{
                transition:-webkit-transfrom 4s ease;
                transition: transfrom 2s ease;
                transition: transfrom 2s ease,-webkit-transfrom 2s ease;
                -webkit-backface-visibility: visible;
                backface-visibility: visible;
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
              <a class="nav-link js-scroll-trigger" href="#carouselExampleIndicators">
              <i class='fa fa-home' style='color:Lime'></i>&nbsp Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">
              <i class="fa fa-heartbeat" style="color:Lime"></i>&nbsp Services</a>
             </li>
              
             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="#about">
               <i class="fa fa-eye"  style="color:Lime"></i>&nbsp About</a>
             </li>

             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">
              <i class="fa fa-phone" style="color:Lime"></i>&nbsp Contact</a>
             </li>

             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#location">
              <i class='fas fa-map-marker-alt' style="color:Lime"></i>&nbsp Location</a>
             </li>

             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="#info">
               <i class="fa fa-plus-circle" style="color:Lime"></i>&nbsp Info</a>
             </li>

             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="login.php">
               <i class="fas fa-portrait" style="color:Lime"></i>&nbsp Login</a>
             </li>
        </ul>

      </div>
    </div>
    </nav>    


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/h6.jpg" alt="First slide">
            <div class="carousel-caption">
                        <h1 class="display-2">My Family Clinic</h1>
                        <br>
                        <br>
                        <h4>login here</h4>
                        <br>
                        <a href="login.php"><button type="button" class="btn btn-success btn-lg">Get Start</button></a>
            </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="img/h5.jpg" alt="Second slide">
              <div class="carousel-caption" style="color:black">
                      <h5>If you want to be a Hero, please STAY AT HOME.</h5>
                                         
              </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="img/h17.jpg" alt="Third slide">
            <div class="carousel-caption" style="color:black">
                      <h5>Health is a state of body. Wellness is a state of being. </h5>
                                         
            </div>
          </div>

      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>

<div id="services" class="container-fluid" style="padding-top:100px;" >
       
        <div class="row text-center padding">   
            <div class="col-12">
             <hr class="dark">
                <h2>Services</h2>
             <hr class="dark">   
            </div>
        </div>
        <div class="row">
        <div class="col-md-3 text-center card">
             <h4><i class="fa fa-user-plus" style="color:black"></i>&nbsp Get an appointment</h4>
                <p>If you need get an appointment You can also book appointments
             <br> online via the patients registration.</p>
        </div>

        <div class="col-md-3 text-center card">
            <h4><i class="fa fa-medkit" style='color:black'></i>&nbsp Check Your Medical History</h4>
            <p>You can check your old Medical notes, medical history<br>
                what madicenes you took your paines and other medical checkups.</p>
        </div>

        <div class="col-md-3 text-center card">
           <h4><i class="fa fa-plus-circle" style='color:black'></i>&nbsp Emergency Notices</h4>
             <p>When we closed our medical center special case,<br>
             you can get Notice about before we closed.</p>
        </div>

        <div class="col-md-3 text-center card">
          <h4><i class='fab fa-medrt' style='color:black'></i>&nbsp Government Medical Notices</h4>
             <p>When Government Issued special Notices about diseases<br>
             you can get a massege to your mobile or it will display on thise website. </p>
       </div>
    </div>
        <div class="col-md-12">
            <img src="img/m2.jpg" class="img-fluid">
        </div>
</div>

    <div id="about" class="about container-fluid" style="padding-top:100px;">
    <div class="row text-center">
            <div class="col-12">
            <hr class="dark">
                <h2>About us</h2>  
            <hr class="dark">
            </div>

        <div class="col-md-6">
           <p>If your physician office has not scheduled your appointment, you may contact our Central Scheduling department<br>
           to make an appointment for your diagnostic testing. The Central Scheduling department will gather personal, employment,<br>
          and insurance information from you at the time you make your appointment to expedite your registration upon arrival.
          <br>Please have your insurance cards available during the call.</p>
         <p>To register for scheduled services,<br>
         you will enter Dallas Medical Center through Registration entrance on the west end of the building.<br>
          Parking is available for easy access to this location. The Registration Lobby is open from 5:30 am to 4:30 pm Monday through Friday.<br>
          During all other hours, patients should use the Emergency Department registration area.</p>

          
        </div>

        <div class="col-md-6">
            <img src="img/h10.jpg" class="img-fluid">
        </div>
    </div>
    </div>

    <div>
        <hr class="my-4">
        <figure>
            <div class="fixed-wrap">
                <div id="fixed">
                </div>
            </div>
        </figure>
    </div>

    <div id="contact" class="contact container-fluid" style="padding-top:100px;" >
    <div class="row text-center padding">

            <div class="col-12">
            <hr class="dark">
                <h2>Contact</h2>
            <hr class="dark">   
            </div>

        <div class="col-12 text-left padding">
        <br>
            <p><b>(+094) 0412265287</b></p>
            <p><b>(+094) 0701985642</b></p>

            <p>If you want more details about our Medical center service or other things
             you can contact our contact number.<br>
             We are committed to improving our service and scaling new heghts each year.<br>
             In order to serve you better we welcome your valuable advice and feed-back.<br>
             </p>
             <p> If you need get an appointment You can also book appointments online via the patients registration.<br>
            If you need an interpreter, please ask for one at the time of booking the appointment.</p>
            <br>
            <p> <b>Telephone Appointments</b>
            <br>
            If you would like an appointment within 48 hours, we provide a telephone consultation service.<br>
            You will be asked for your name, contact details and a brief description of the problem.<br>
            You will be put on the consultation list and a doctor will call you back.  

            If an appointment is still needed, the doctor will be able to book one<br>
            for you at your convenience.

            It is strongly recommended that you telephone as close to 08:30 as possible,<br>
            as the Doctor will decided at their own discretion when the list is full for that morning.<br>
            If you telephone after the list has closed, you may be advised to go to the Walk-in Centre. </p>
            <p>Family members can make appointments or inquire about appointment times for their children, parents and spouses.<br>
             If you do not want appointment information shared with family members,
              please notify us at the time of your registration or visit.</p>

              <p><b>myfamilyclinic@gmail.com</b></p>

            <br>
            
        </div>

    </div>
    </div>

    <div id="location" class="container-fluid" style="padding-top:100px;" > 
        <div class="row text-center padding">   
            <div class="col-12">
             <hr class="dark">
                <h2>Location</h2>
             <hr class="dark">   
            </div>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63494.97013063004!2d80.55089802338635!3d5.9345304458957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65efefb64a60292b!2sAsiri%20Hospital%20Matara!5e0!3m2!1sen!2slk!4v1581333574764!5m2!1sen!2slk"
             width="1520" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
        </div>
    </div>

    <div id="info" class="container-fluid" style="padding-top:100px;" >
            <div class="row text-center padding">
                <div class="col-12">
                  <hr class="light">
                  <h2>Information</h2>
                  <hr class="light">   
                </div>
                <div class="col-md-4">
                     <p><i class='fa fa-envelope' style='color:black'></i>&nbsp  No 4, Meddawaththa, Matara<p>
                    
                </div>

                <div class="col-md-4">
                    
                    <h5><i class="fa fa-clock-o" style="color:black"></i>&nbsp Our Hours</h5>
                    
                    <p>Monday - Saturday: 4pm-9pm</p>
                    <p>Sunday Closed</p>
                    <p>Poyaday Closed</p>
                </div>

                <div class="col-md-4">
                    
                    <p><i class='fas fa-at' style='color:black'></i>&nbsp myfamily@gmail.com<p>
                    
                </div>

            </div>
        </div>

    <footer>
        <div class="row text-center padding">       
        <div class=" col-12">
        
                    <hr class="light">
                    <h5><i>&copy; myfamilyclinic</i></h5>
        </div>            
        </div>
    </footer>



</body>