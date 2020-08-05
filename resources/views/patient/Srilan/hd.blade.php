<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>More Details</title>
   
    <!--bootstrap link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--bootstrap jscripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--sweet alert-->
    <link rel="stylesheet" href="{{ url('css/Chart.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!--chart links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="{{asset('js/jssor.slider-28.0.0.min.js')}}" type="text/javascript"></script>
          	 <script type="text/javascript">
        window.jssor_1_slider_init = function() {

   var jssor_1_SlideoTransitions = [
     [{b:500,d:1000,x:0,e:{x:6}}],
     [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
     [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
     [{b:-1,d:1,rX:20,rY:90},{b:0,d:4000,rX:0,e:{rX:1}}],
     [{b:-1,d:1,rY:-20},{b:0,d:4000,rY:-90,e:{rY:7}}],
     [{b:-1,d:1,sX:2,sY:2},{b:1000,d:3000,sX:1,sY:1,e:{sX:1,sY:1}}],
     [{b:-1,d:1,sX:2,sY:2},{b:1000,d:5000,sX:1,sY:1,e:{sX:3,sY:3}}],
     [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:3500,d:3500,tZ:0,e:{tZ:1}}],
     [{b:-1,d:1,x:20,p:{x:{o:33,r:0.5}}},{b:0,d:1000,x:0,o:0.5,e:{x:3,o:1},p:{x:{dl:0.05,o:33},o:{dl:0.02,o:68,rd:2}}},{b:1000,d:1000,o:1,e:{o:1},p:{o:{dl:0.05,o:68,rd:2}}}],
     [{b:-1,d:1,da:[0,700]},{b:0,d:600,da:[700,700],e:{da:1}}],
     [{b:600,d:1000,o:0.4}],
     [{b:-1,d:1,da:[0,400]},{b:200,d:600,da:[400,400],e:{da:1}}],
     [{b:800,d:1000,o:0.4}],
     [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
     [{b:0,d:1000,o:1,p:{o:{o:4}}}],
     [{b:1000,d:1000,o:1,p:{o:{o:4}}}]
   ];

   var jssor_1_options = {
     $AutoPlay: 0,
     $CaptionSliderOptions: {
       $Class: $JssorCaptionSlideo$,
       $Transitions: jssor_1_SlideoTransitions
     },
     $ArrowNavigatorOptions: {
       $Class: $JssorArrowNavigator$
     },
     $BulletNavigatorOptions: {
       $Class: $JssorBulletNavigator$,
       $SpacingX: 16,
       $SpacingY: 16
     }
   };

   var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

   /*#region responsive code begin*/

   var MAX_WIDTH = 980;

   function ScaleSlider() {
       var containerElement = jssor_1_slider.$Elmt.parentNode;
       var containerWidth = containerElement.clientWidth;

       if (containerWidth) {

           var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

           jssor_1_slider.$ScaleWidth(expectedWidth);
       }
       else {
           window.setTimeout(ScaleSlider, 30);
       }
   }

   ScaleSlider();

   $Jssor$.$AddEvent(window, "load", ScaleSlider);
   $Jssor$.$AddEvent(window, "resize", ScaleSlider);
   $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
   /*#endregion responsive code end*/
};
</script>
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin-ext,cyrillic-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<style>
/*jssor slider loading skin double-tail-spin css*/
.jssorl-004-double-tail-spin img {
   animation-name: jssorl-004-double-tail-spin;
   animation-duration: 1.6s;
   animation-iteration-count: infinite;
   animation-timing-function: linear;
}

@keyframes jssorl-004-double-tail-spin {
   from { transform: rotate(0deg); }
   to { transform: rotate(360deg); }
}

/*jssor slider bullet skin 031 css*/
.jssorb031 {position:absolute;}
.jssorb031 .i {position:absolute;cursor:pointer;}
.jssorb031 .i .b {fill:#000;fill-opacity:0.6;stroke:#fff;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.8;}
.jssorb031 .i:hover .b {fill:#fff;fill-opacity:1;stroke:#000;stroke-opacity:1;}
.jssorb031 .iav .b {fill:#fff;stroke:#000;stroke-width:1600;fill-opacity:.6;}
.jssorb031 .i.idn {opacity:.3;}

/*jssor slider arrow skin 051 css*/
.jssora051 {display:block;position:absolute;cursor:pointer;}
.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
.jssora051:hover {opacity:.8;}
.jssora051.jssora051dn {opacity:.5;}
.jssora051.jssora051ds {opacity:.3;pointer-events:none;}
svg {opacity:.2;background:black;}
</style>
<style>
/*jssor slider loading skin double-tail-spin css*/
.jssorl-004-double-tail-spin img {
   animation-name: jssorl-004-double-tail-spin;
   animation-duration: 1.6s;
   animation-iteration-count: infinite;
   animation-timing-function: linear;
}

@keyframes jssorl-004-double-tail-spin {
   from { transform: rotate(0deg); }
   to { transform: rotate(360deg); }
}

/*jssor slider bullet skin 031 css*/
.jssorb031 {position:absolute;}
.jssorb031 .i {position:absolute;cursor:pointer;}
.jssorb031 .i .b {fill:#000;fill-opacity:0.6;stroke:#fff;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.8;}
.jssorb031 .i:hover .b {fill:#fff;fill-opacity:1;stroke:#000;stroke-opacity:1;}
.jssorb031 .iav .b {fill:#fff;stroke:#000;stroke-width:1600;fill-opacity:.6;}
.jssorb031 .i.idn {opacity:.3;}

/*jssor slider arrow skin 051 css*/
.jssora051 {display:block;position:absolute;cursor:pointer;}
.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
.jssora051:hover {opacity:.8;}
.jssora051.jssora051dn {opacity:.5;}
.jssora051.jssora051ds {opacity:.3;pointer-events:none;}


</style>
<style>body {
  position: relative;
  background-image:url('/img/image1.jpg');
}</style>


</head>
<body>
    <!--nev bar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

        <div class="container-fluid">
       <!-- <a class="navbar-brand" href="#">--><img src="{{asset('img/h1.jpg')}}" style="width:120px; height:30px"><!--!</a>-->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
              <span class="navbar-toggler-icon"></span>
            </button>

             <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto my-2 my-lg-0">
              <li class="nav-item active">
                <a href="login.php" class="nav-link js-scroll-trigger" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <span class="glyphicon glyphicon-log-out"></span>
                    <i class="fa fa-user-secret" style="color:yellow"></i>&nbsp Log out</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
              
                <li class="nav-item ">
                <a class="nav-link js-scroll-trigger" href="/home">
                <i class='fa fa-home' style="color:yellow"></i>&nbsp Dashboard</a>
                </li>
            </ul>
             </div>
        </div>
    </nav>    
<br><br><br><br>


@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>

@endif

    @include('sweet::alert')
    </div>
    <div class="row">



       
      <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:600px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:600px;overflow:hidden;">
        <div>
        <h3><u><b>Summary Chart Blood Sugar</b></u></h3>
			        <div id="chart-containere" >
              <canvas id="myChart"></canvas>
					</div>
                   
            </div>
      

            <div>
              <h3><u><b>Summary chart Blood pressure</b></u></h3>
              <div id="chart-containere" >
              <canvas id="myChart1" ></canvas>
              </div>
            </div>
          

          <div>
              <h3><u><b>Summary chart collestrol</b></u></h3>
              <div id="chart-containere" >
              <canvas id="myChart2"></canvas>
              </div>
            </div>
            
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:13px;height:13px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>	       

    



<!--blood sugar chart-->
<script src="{{ url('js/Chart.min.js')}}"></script>
<script>
                let myChart=document.getElementById('myChart').getContext('2d');
                let masPopChart=new Chart(myChart,{
                type:'line',
                data:{
                  labels:[
                            @foreach($tasks as $v) '{{$v->created_at}}',
                            @endforeach
                          ],
                          
                  datasets:[{
                      label:'range',
                      data:[
                        @foreach($tasks as $v)
                        {{$v->rate}},
                        
                        @endforeach
                      ],
    
                     
                  backgroundColor:'rgb(255,255,255)',
                    borderWidth:5,
                    borderColor:[
                      @foreach($tasks as $v)
                      @if($v->rate<90)
                      'rgb(255,255,00,0.9)',
                      @elseif($v->rate<126)
                      'rgba(00,255,00)',
                      @elseif($v->rate>=126)
                      'rgb(255,00,00,0.9)',
                      @endif
                      @endforeach

                    ],
                    hoverBorderWidth:3,
                   // hoverBorderColor: '#000'
                }]
            },
            options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
        });
              </script>


<!--preasure chart-->
<script>
                let myChart1=document.getElementById('myChart1').getContext('2d');
                let masPopChart1=new Chart(myChart1,{
                type:'line',
                data:{
                  labels:[
                            @foreach($preasures as $v) '{{$v->created_at}}',
                            @endforeach
                          ],
                  datasets:[{
                      label:'lower_rate',
                      data:[
                        @foreach($preasures as $v)
                        {{$v->lower_rate}},
                        
                        
                        @endforeach
                      ],
                   backgroundColor:'rgb(255,255,255)'
                      ,
                    borderWidth:5,
                    borderColor:[
                      @foreach($preasures as $v)
                      @if($v->lower_rate<60)
                      'rgb(255,00,00)',
                      @elseif($v->lower_rate<90)
                      'rgb(00,255,00)',
                     
                      @endif
                      @endforeach],
                    hoverBorderWidth:3,
                  //  hoverBorderColor: '#000'
                },
                {
                      label:'upper_rate',
                      data:[
                        @foreach($preasures as $v)
                        {{$v->upper_rate}},
                        
                        
                        @endforeach
                      ],
                  backgroundColor:'rgb(255,255,255)',
                    borderWidth:5,
                    borderColor:[
                      @foreach($preasures as $v)
                      @if($v->upper_rate<90)
                      'rgb(255,00,00)',
                      @elseif($v->upper_rate<140)
                      'rgb(00,255,00)',
                     
                      @endif
                      @endforeach],
                    hoverBorderWidth:3,
                   hoverBorderColor: '#000'
                }]
            },

            options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
        });
    </script>


    <!--collestrol chart-->

    <script>
                let myChart2=document.getElementById('myChart2').getContext('2d');
                let masPopChart2=new Chart(myChart2,{
                type:'line',
                data:{
                  labels:[
                            @foreach($collestrols as $v) '{{$v->created_at}}',
                            @endforeach
                          ],
                  datasets:[{
                      label:'rate',
                      data:[
                        @foreach($collestrols as $v)
                        {{$v->rate}},
                        
                        @endforeach
                      ],
                      
                    backgroundColor:'rgb(255,255,255)',
                    borderWidth:5,
                    borderColor:[
                      @foreach($tasks as $v)
                      @if($v->rate<90)
                      'rgb(255,255,00)',
                      @elseif($v->rate<126)
                      'rgb(00,255,00)',
                      @elseif($v->rate>=126)
                      'rgb(255,00,00)',
                      @endif
                      @endforeach
                    ],
                    hoverBorderWidth:3,
                    //hoverBorderColor: '#000'
                }]
            },
            options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
        });
              </script>
   </div>
</div>
    </div>
    
</body>
</html>