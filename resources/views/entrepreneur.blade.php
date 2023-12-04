@extends('layouts.apps')
@section('content')
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <!-- <li><a href="javascript:;">Blog</a></li> -->
            <li class="active">Entrepreneurship Activities</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
              <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Entrepreneurship Activities</h3>
          </div>
        </div>
      </div>
    </div>
    <hr>
            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-12 col-sm-12 blog-posts">
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <!-- BEGIN CAROUSEL -->            
                      <div class="front-carousel">
                        <div class="carousel slide" id="myCarousel">
                          <!-- Carousel items -->
                          <div class="carousel-inner">
                            <div class="item">
                              <img alt="" src="img/photos/tree-watering.jpg">
                            </div>
                            <div class="item">
                              <img alt="" src="img/photos/tree-watering2.jpg">
                            </div>
                            <div class="item active">
                              <img alt="" src="img/photos/tree-watering4.jpg">
                            </div>
                          </div>
                          <!-- Carousel nav -->
                          <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a data-slide="next" href="#myCarousel" class="carousel-control right">
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>                
                      </div>
                      <!-- END CAROUSEL -->             
                    </div>
                    <div class="col-md-8 col-sm-8">
                      <h2><a href="#">Entrepreneurship Activities</a></h2>
                      <ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                        <li><i class="fa fa-comments"></i> 17</li>
                        <li><i class="fa fa-tags"></i> Kasulu,Kigoma,Tanzania</li>
                      </ul>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
                    </div>
                  </div>
                  <hr class="blog-post-sep">
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <img class="img-responsive" alt="" src="img/photos/tree-watering2.jpg">
                    </div>
                    <div class="col-md-8 col-sm-8">
                      <h2><a href="#">Activities 2</a></h2>
                      <ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                        <li><i class="fa fa-comments"></i> 17</li>
                       <li><i class="fa fa-tags"></i> Kasulu,Kigoma,Tanzania</li>
                      </ul>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
                     
                    </div>
                  </div>
                  <hr class="blog-post-sep">
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <!-- BEGIN VIDEO -->   
                      <iframe height="205" allowfullscreen="" style="width:100%; border:0" src="http://player.vimeo.com/video/56974716?portrait=0"></iframe>
                      <!-- END VIDEO -->   
                    </div>
                    <div class="col-md-8 col-sm-8">
                      <h2><a href="#">Activities 3</a></h2>
                      <ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                        <li><i class="fa fa-comments"></i> 17</li>
                        <li><i class="fa fa-tags"></i>Kasulu,Kigoma,Tanzania</li>
                      </ul>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>                     
                    </div>
                  </div>                                           
                </div>
                <!-- END LEFT SIDEBAR -->           
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>  
@endsection