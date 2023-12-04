@extends('layouts.apps')
@section('content')

    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators carousel-indicators-frontend">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item active" style="background-image: url('../assets/images/slide_03.jpg');background-size: cover;">
                    <div class="container">
                        <div class="carousel-position-six text-uppercase text-center">
                                                       <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">Tree Planting</p>
                                                          <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class="carousel-btn-green" href="/tree" data-animation="animated fadeInUp">Read More!</a>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item" style="background-image: url('../assets/images/bee_slide_02.jpg');background-size: cover;">
                    <div class="container">
                      <div class="carousel-position-six text-uppercase text-center">
                                                       <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">Bee Keeping</p>
                                                          <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class="carousel-btn-green" href="/bee" data-animation="animated fadeInUp">Read More!</a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item"  style="background-image: url('../assets/images/slide_02.jpg');background-size: cover;">
                    <div class="container">
                        <div class="carousel-position-six text-uppercase text-center">
                                                       <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">Entrepreneurship</p>
                                                          <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class="carousel-btn-green" href="/entrepreneur" data-animation="animated fadeInUp">Read More!</a>
                        </div>
                    </div>
                </div>

                   <!-- Fouth slide -->
                <div class="item"  style="background-image: url('../img/photos/children.jpg');background-size: cover;">
                    <div class="container">
                         <div class="carousel-position-six text-uppercase text-center">
                                                       <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">Vulnarable Children</p>
                                                          <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class="carousel-btn-green" href="/children" data-animation="animated fadeInUp">Read More!</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
         <div class="request-form" style="background-color:#3A8045;">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="color:yellow;">
            <span>Kazuramimba Catchment Conservation and Education (KACCE)</span>
          </div>
          <!-- <div class="col-md-2">
            <a href="donate.php" class="border-button btn-success">Donate</a>
          </div> -->
        </div>
      </div>
    </div>
    </div>

                 


  <div class="main">
      <div class="container-fluid">

 <div class="comments">
                    <div class="media">                    
                      <a href="javascript:;" class="pull-left">
                      <img src="img/logo/logo.png" alt="" class="media-object" style="width: auto; height: 52px;">
                      </a>
                      <div class="media-body">                     
                        <div class="media">                          
                          <div class="media-body">
                            <h4 class="media-heading">KACCE <span>Welcomed <a href="javascript:;">you</a></span></h4>
                            <p>Kacce global Moto to attract the Donor </p>
                          </div>
                        </div>
                     
                        <!--end media-->
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
                <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
                <a href="/tree" class="filled-button">Read More</a>
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
             <img src="img/photos/mise.jpg" alt="" style="height:34vh;">           
      <!--  -->
              <div class="down-content">
                <span>Vulnarable Children</span>
                <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
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
   
     <div class="pre-footer" style="background-color:#d5d5f4;">
      <div class="container-fluid">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col additional-nav">
                <h4 style="color:black">PARTINERS</h4>    
             
            <div class="photo-stream">
              <ul class="list-unstyled">
                <li><a href="javascript:;"><img alt="" src="img/partiners/tegonet-logo.png"></a></li>
                <li><a href="javascript:;"><img alt="" src="img/partiners/twam-logo.png"></a></li>
                <li><a href="javascript:;"><img alt="" src="img/partiners/eecg-logo.png"></a></li>
              
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
        </div>
      </div>
    </div>
     </div>
    </div>
@endsection