@extends('layouts.apps')
@section('content')

<!-- 
 <link href="../../testpage/css/vendor/bootstrap.css" rel="stylesheet" />
    <link href="../../testpage/css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="../../testpage/css/vendor/slick.css" rel="stylesheet" />
    <link href="../../testpage/css/vendor/slick-theme.css" rel="stylesheet" />
    <link href="../../testpage/css/vendor/odometer-theme-default.css" rel="stylesheet" /> -->
    <link href="../../testpage/css/main.css" rel="stylesheet" />


<style>
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #04AA6D;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}
</style>




<style type="text/css">
 .wawa{

   max-height: 83vh;
  min-height: 65vh !important;
  /*background-size: auto  auto;*/
   background-size: 100% 100%;
   background-position: center;
  width: 100%;
 } 


 .images {
     height:auto;
     width:100% background-repeat: no-repeat;
                     background-size:100% 100%;
                       background-position: center;
    } 

.img {
min-width: 80%;
width: 200px; // assume this is the default size
background-size: 100% 100%;
}

</style>




<style type="text/css">
    @media only screen and (min-width: 1025px) {
        .mobile-only {
            display:none !important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .desktop-only {
            display:none !important;
        }
    } 
</style>


<style>
.vl {
  border-left: 1px solid green;
  height: 20px;
}
</style>
<style type="text/css">
    .wrapper {
  padding: 5px;
   background-color: rgba(0,0,0,0.00001);
  max-width: 140px;
  margin: 2px auto;
}

.demo-1 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
}

.demo-2 {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  max-width: 140px;
}

.demo-3 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
}
</style>


  <div class="home-slider">
        <div class="home-slider--wrapper">
          
               <div>
                <div class="home-slider--wrapper__inner" style="background-image: url('../img/tree/mazungwe_pupil_plant_tree.jpg')">
                    <div class="container">
                                               <span class="dot-dash">Mazungwe primary School</span>
                            <!-- <h3 class=""><p>Mazungwe primary School</p></h3>                    -->
                        <p style="background-color:#237b37">
                        KACCE team training Teachers and pupils of Mazungwe primary school how to plant and care the palm oil trees(Plant trees save the wolrd).</p>
                        <div class="slider-buttons">
                             <a class="button button1" href="/tree" data-animation="animated fadeInUp">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
           
    <div>
                <div class="home-slider--wrapper__inner" style="background-image: url('../img/vul/ch1.jpg')">
                    <div class="container">
                                               <span class="dot-dash">Vulnarable Children</span>
                            <!-- <h3 class=""><p>Mazungwe primary School</p></h3>                    -->
                        <p style="background-color:#237b37;">
                       Some of the pupils of Kazuramimba primary school were given books by KACCE Team..</p>
                        <div class="slider-buttons">
                             <a class="button button1" href="/tree" data-animation="animated fadeInUp">Read More</a>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        <div class="home-slider--nav">
            <div class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>
        <div class="home-slider--anchor">
            <span><i class="fa fa-anchor" aria-hidden="true"></i></span>
        </div>
    </div>













      <div class="container-fluid">                

                      <div class="row">
          <div class="col-md-6">                         
                          <div class="media-body">
                            <h4 class="media-heading">Kazuramimba Catchment Conservation and Education <span>Welcomed <a href="javascript:;">(KACCE)</a></span></h4>
                          </div>
                       
                    </div> 
         
          <div class="col-md-6 text-right">
             <div class="media">                    
                      <a href="javascript:;" class="pull-right">
                      <img src="img/logo/logo.png" alt="" class="media-object" style="width: auto; height: 52px;">
                      </a>
                      <div class="media-body">                     
                        <div class="media">                          
                          <div class="media-body">
                            <p>A giving hand is blessed</p>
                          </div>
                        </div>
                     
                      </div>
                    </div> 
          </div>
        </div>
      </div>


                  <hr>
                  <br>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container-fluid">
        <!-- BEGIN SERVICE BOX -->   
             <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row quote-v1 margin-bottom-30">
          <div class="col-md-4">
            <span>Our Activities</span>
          </div>
          <div class="col-md-8 text-right">
            <a class="btn-transparent" href="/tree" target="#"><i class="">Tree Planting</i></a>
             <a class="btn-transparent" href="/bee" target="#"><i class="">Bee Keeping</i></a>
              <a class="btn-transparent" href="/entrepreneur" target="#"><i class="">Entrepreneurship</i></a>
              <a class="btn-transparent" href="/children" target="#"><i class="">Vulnarable Children</i></a>
          </div>
        </div>


       
        <!-- BEGIN STEPS -->
        <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
          <div class="col-md-3 col-sm-3 front-step-col">
            <div class="front-step front-step1" style="background-color:#3A8045">
                <h2><span>Tree Planting</span></h2>             
          <div class="service-item"> 
             <img src="img/photos/tree-watering4.jpg" alt="" style="height:34vh;">           
      <!--  -->
              <div class="down-content">
                <span>Tree Planting</span>
                <p>KACCE tree nurseries. KACCE prepare young tree more than 1000 a year to plant all over the Kasulu Distirct,We started with Kazuramimba ward</p>
                <a href="/tree" class="filled-button">Read More</a>


                   <div class="col-sm-4">
          <!-- Tooltips, you can also use the class 'enable-tooltip' instead of data-toggle attribute -->
          <div class="block-section text-center">
            <h4 class="sub-header">Tooltips</h4>
            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="tooltip" title="his is an information popup! Use it easily with the content you want!">Tooltip</a>
           
          </div>
          <!-- END Tooltips -->
        </div>
              </div>
            </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 front-step-col">
            <div class="front-step front-step2">
              <h2>Bee Keeping</h2>              
          <div class="service-item"> 
             <img src="img/photos/bee2.jpg" alt="" style="height:34vh;">           
      <!--  -->
              <div class="down-content">
                <span>Bee Keeping</span>
                <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
                <a href="/bee" class="filled-button">Read More</a>
              </div>
            </div>
            </div>
          </div>
            <div class="col-md-3 col-sm-3 front-step-col">
            <div class="front-step front-step3">
              <h2>Entrepreneurship</h2>
                <div class="service-item"> 
             <img src="img/photos/mise.jpg" alt="" style="height:34vh;">           
      <!--  -->
              <div class="down-content">
                <span>Entrepreneurship</span>
                <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
                <a href="/entrepreneur" class="filled-button">Read More</a>
              </div>
            </div>
            </div>
          </div>

           <div class="col-md-3 col-sm-3 front-step-col">
            <div class="front-step front-step3"  style="background-color:#3A8045">
            <div class="service-item"> 
              <h2>Vulnarable Children</h2>
             <img src="img/vul/ch1.jpg" alt="" style="height:34vh;">           
      <!--  -->
              <div class="down-content">
                <span>Vulnarable Children</span>
                <p>Some of Vulnarable Pupils of Raba primary school were given exercise books by KACCE Team(Save children save the world).</p>
                <a href="/children" class="filled-button">Read More</a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <!-- END STEPS -->

       </div>
    </div>
<hr>
 
  <div class="main">
      <div class="container-fluid">
   
     <div class="pre-footer" style="background-color:#3A8045;">
      <div class="container-fluid">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col additional-nav">
                <h4 style="color:black">PARTINERS</h4>    
             
            <div class="photo-stream">
              <ul class="list-unstyled">
                <li  style="background-color:#fff;"><a href="javascript:;"><img alt="" src="img/partiners/tegonet-logo.png"></a></li>
                <li style="background-color:#fff;"><a href="javascript:;"><img alt="" src="img/partiners/twam-logo.png"></a></li>
                <li style="background-color:#fff;"><a href="javascript:;"><img alt="" src="img/partiners/eecg-logo.png"></a></li>
              
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
        </div>
      </div>
    </div>
     </div>
    </div>



    <!--   <script type="text/javascript">
        window.odometerOptions = {
            format: '(,ddd)',
        };
    </script> -->
    <script src="../../testpage/js/vendor/jquery-3.1.0.min.js"></script>
    <!-- <script src="../../testpage/js/vendor/jquery.easing.min.js"></script> -->
    <!-- <script src="../../testpage/js/vendor/tether.js"></script> -->
    <!-- <script src="../../testpage/js/vendor/bootstrap.js"></script> -->
    
    <script src="../../testpage/js/vendor/slick.js"></script>
   <script src="../../testpage/js/vendor/isotope.pkgd.min.js"></script>
    <!-- <script src="../../testpage/js/vendor/odometer.min.js"></script> -->
     <script src="../../testpage/js/main.js"></script>

@endsection