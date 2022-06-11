@include('header')
<main>
  <h1 style="text-align:center;" class="text-decoration-underline">Your Squad</h1>
    <div class="shadow p-3 mb-5 bg-body rounded container">
      <h2 class="text-decoration-underline">Batsman</h2>
      <div class="row" style="margin-top:5%;">
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="shadow p-3 mb-5 bg-body rounded container">
      <h2 class="text-decoration-underline">All-Rounder</h2>
      <div class="row" style="margin-top:5%;">
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="shadow p-3 mb-5 bg-body rounded container">
      <h2 class="text-decoration-underline">Bowler</h2>
      <div class="row" style="margin-top:5%;">
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>Harsh Gautam</h3>
              <h5 class="card-title"> <span class="demo"></span></h5>

            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@include('footer')
<script>
  document.getElementById('my-profile').innerHTML="<a href='{{ route('auction') }}' class='nav-link'>Auction <i class='fa fa-gavel' aria-hidden='true'></i></a>";
</script>
