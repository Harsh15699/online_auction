@include('header')
<main>
  <div class="shadow p-3 mb-5 bg-body rounded container" style="height:85vh;">
    <h1 style="text-align:center;" class="text-decoration-underline">Your Details and Live Bidding</h1><br>
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 25rem;height:70vh;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5<a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Again</a>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Again</a>
          </div>
        </div>
      </div>
      <div class="col-8">
        <p>Player Name: Harsh Gautam</p>
        <p>Age: 22</p>
        <p>Nationality: Indian</p>
        <p>Skill-Set: All-Rounder</p>
        <p>Phone Number: 1234567890</p>
        <p>Email: abc@def.com</p>
        <br>
        <div class="row">
          <div class="col-3">
            <p>Total Matches:<br>150</p>
          </div>
          <div class="col-3">
            <p>Total Runs:<br>5625</p>
          </div>
          <div class="col-3">
            <p>Strike-rate:<br>140.5</p>
          </div>
          <div class="col-3">
            <p>50/100:<br>30/5</p>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <p>Total Innings:<br>141</p>
          </div>
          <div class="col-3">
            <p>Total Wickets:<br>105</p>
          </div>
          <div class="col-3">
            <p>Economy:<br>8.75</p>
          </div>
          <div class="col-3">
            <p>Fifer:<br>3</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <p>Base Price:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>1000 </span></p>
          </div>
          <div class="col-4">
            <p style="color:red;">Current Bid:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>1500</span></p>
          </div>
          <div class="col-4">
            <p style="color:blue;">Final Bid:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>1300</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<h1 style="text-align:center;" class="text-decoration-underline">Upcoming Auction</h1>
  <div class="shadow p-3 mb-5 bg-body rounded container">
    <h2 class="text-decoration-underline">Batsman</h2>
    <div class="row" style="margin-top:5%;">
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
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
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
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
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ url('/images/players/') }}/player.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3>Watch By Fossils</h3>
            <h5 class="card-title">Time-Left: <span class="demo"></span></h5>
            <a href="#" class="btn btn-primary" style="width:40%;margin-left:20%;">Bid Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@include('footer')
