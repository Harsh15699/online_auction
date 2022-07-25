@include('header')
<style>
  .container{
    margin-top:2%;
  }
</style>
<main>
  <div id="carouselExampleIndicators" class="carousel slide container carousel-fade" data-bs-ride="carousel" style="width:85%;margin:auto;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('/images/commodity_auction/') }}/cricket_auction.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/images/commodity_auction/') }}/cricket_auction_old.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container shadow p-3 mb-5 rounded container" style="background-color:#2f6ce5;color:white;height:70vh;">
      <h1 style="text-align:center;" class="text-decoration-underline">Why Us?</h1>
      <h2 class="text-decoration-underline">Benefits for players</h2><br>
      <div class="row">
        <div class="col-3">
          <span class="btn btn-light">Best League in the World <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-3">
          <span class="btn btn-light">Biggest stage to Perform <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-3">
          <span class="btn btn-light">Best bid for you <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-3">
          <span class="btn btn-light">Experience <i class="fa fa-tags"></i></span>
        </div>
      </div>
      <div class="row" style="margin-top:3%;">
        <div class="col-3">
          <span class="btn btn-light">Stage to get into Int. Team <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-3">
          <span class="btn btn-light">Competitive Matches  <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-3">
          <span class="btn btn-light">Hassle Free Bidding <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-3">
          <span class="btn btn-light">Live Update <i class="fa fa-tags"></i></span>
        </div>
      </div>
      <br>
        <h2>Why are you still thinking?</h2>
      <br>
      <div class="row">
        <div class="col-6">
          <h4>If you haven't registered for the upcoming auction yet</h4>
          <br>
          <a href="{{ route('player_registration') }}" class="btn btn-lg" style="background-color:#F5F5DC;">Register Now <i class=" fa fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="col-6">
          <h4>If you have already registered and want to see the update</h4>
          <br>
          <a href="{{ route('player_login') }}" class="btn btn-lg" style="background-color:#F5F5DC;">Log In Now <i class=" fa fa-solid fa-arrow-right"></i></a>
        </div>
      </div>


</div>

</main>
@include('footer')
<script>
  document.getElementById('my-profile').innerHTML="<a href='{{ route('team_login') }}' class='nav-link'>Team Login <i class='fa fa-sign-in' aria-hidden='true'></i></a>";
</script>
