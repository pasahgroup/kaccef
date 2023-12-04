@extends('layouts.apps')
@section('content')
<style type="text/css">
  img {
  max-width: 100%;
  height: auto;
}
</style>

      <!-- Page Content -->
      <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>Official Mobile No.</p>
              <a href="#">+255 718 606 019</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Official Email</p>
              <a href="#">info@kacce.or.tz</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <p>Kasulu,Kigoma-Tanzania</p>
              <a href="#">View on Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </div>

         <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h4>Team <em>members</em></h4>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team_01.jpg" alt="">
              <div class="down-content">
                <h4>William Smith</h4>
                <span>Co-Founder</span>
                <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team_02.jpg" alt="">
              <div class="down-content">
                <h4>Mary Houston</h4>
                <span>Chief Marketing Officer</span>
                <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team_03.jpg" alt="">
              <div class="down-content">
                <h4>Paul Walker</h4>
                <span>Financial Analyst</span>
                <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>

       <div id="map">
<!-- How to change your own map point
  1. Go to Google Maps
  2. Click on your location point
  3. Click "Share" and choose "Embed map" tab
  4. Copy only URL and paste it within the src="" field below
-->
      <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>  
  @endsection