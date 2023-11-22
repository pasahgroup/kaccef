@extends('layouts.apps')
@section('content')
<style type="text/css">
  img {
  max-width: 100%;
  height: auto;
}
</style>


   <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Activities</h1>
            <span>We are over 20 years of experience</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
       <h4 align="center"><span>Activities</span></h4>
      <div class="container">
        <div class="row" id="tabs">
          
          <div class="col-md-3">
            <ul>
              <li><a href='#tabs-1'>Tree Planting<i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Bee Keeping<i class="fa fa-angle-right"></i></a></li>
               <li><a href='#tabs-3'>Entrepreneurship<i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'>Vulnarable Children<i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>

          <div class="col-md-9">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="img/photos/tree-watering.jpg" alt="">
                <h4>Small tree watering</h4>
                <p>Praparing small tree for palnting.
                <br><br></p>
              
           <p><a href="/tree" class="btn btn-primary float-right">Tree Read More</a></p>        
              </article>

              <article id='tabs-2'>
                 <img src="img/photos/bee1.jpg" alt="">
                <h4>Bee Keeping</h4>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet
                <br><br>Pellentesque pretium, massa at placerat vehicula, neque turpis pulvinar tortor, eget convallis lorem odio non tortor. Donec massa est, fermentum sit amet felis ac, maximus luctus elit. Vivamus aliquet, dolor id imperdiet imperdiet, dui diam aliquet dui, a euismod metus enim ac velit. Vivamus eu tristique odio, vel tristique quam.</p>

 <p><a href="/bee" class="btn btn-primary float-right">Bee Read More</a></p>


              </article>

              <article id='tabs-3'>
                   <img src="img/photos/cooking.jpg" alt="">
                <h4>Entrepreneurship</h4>
                <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget. 
                <br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vel ultrices nulla, ac tincidunt eros. Aenean quis tellus velit. Praesent pretium justo non auctor condimentum.</p>

             <p><a href="/entrepreneur" class="btn btn-primary float-right">Entrepreneurship Read More</a></p>
              </article>

                <article id='tabs-4'>
                   <img src="img/photos/children.jpg" alt="">
                <h4>Vulnarable Children</h4>
                <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget. 
                <br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vel ultrices nulla, ac tincidunt eros. Aenean quis tellus velit. Praesent pretium justo non auctor condimentum.</p>

             <p><a href="/children" class="btn btn-primary float-right">Children Read More</a></p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
@endsection