@include('header')
@if(isset($player))
<main>
  <div class="shadow p-3 mb-5 bg-body rounded container" style="height:85vh;">
    <h1 style="text-align:center;" class="text-decoration-underline">Your Details and Live Bidding</h1><br>
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 25rem;height:70vh;">
          <img src="{{ url('/images/player_images/') }}/{{$player->image_link}}" class="card-img-top" alt="...">
          <div class="card-body">
            @if($flag==1)
              <h5 class="card-title">Ends-In: <span id="ends_in"></span></h5>
            @elseif($flag==2)
              <h5 class="card-title">Starts-In: <span id="starts_in"></span></h5>
            @endif
          </div>
        </div>
      </div>
      <div class="col-8">
        <p>Player Name: {{$player->first_name}} {{$player->last_name}}</p>
        <p>Age: {{$player->age}}</p>
        <p>Nationality: {{$player->country}}</p>
        <p>Skill-Set: {{$player->skillset}}</p>
        <p>Phone Number: {{$player->mobile}}</p>
        <p>Email: {{$player->email}}</p>
        <br>
        <div class="row">
          <div class="col-3">
            <p>Total Matches:<br>{{$player->total_matches}}</p>
          </div>
          <div class="col-3">
            <p>Total Runs:<br>{{$player->total_runs}}</p>
          </div>
          <div class="col-3">
            <p>Strike-rate:<br>{{$player->strike_rate}}</p>
          </div>
          <div class="col-3">
            <p>50/100:<br>{{$player->fifties}}/{{$player->hundreds}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <p>Total Innings:<br>{{$player->total_innings}}</p>
          </div>
          <div class="col-3">
            <p>Total Wickets:<br>{{$player->total_wickets}}</p>
          </div>
          <div class="col-3">
            <p>Economy:<br>{{$player->economy}}</p>
          </div>
          <div class="col-3">
            <p>Fifer:<br>{{$player->fifer}}</p>
          </div>
        </div>
        <div class="row">
          @if($flag==1)
            <div class="col-4">
              <p>Base Price:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$player->base_price}} </span></p>
            </div>
            <div class="col-4">
              <p style="color:red;">Current Bid:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i><span id="current_bid"></span></span></p>
            </div>
          @elseif($player->sold==1)
            <div class="col-4">
              <p>Base Price:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$player->base_price}} </span></p>
            </div>
            <div class="col-4">
              <p style="color:red;">Sold In:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$player->sold_price}}</span></p>
            </div>
          @else
          <div class="col-12">
              <p><br><span style="font-size:150%;font-weight:bold;">Not added for Auction yet </span></p>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</main>
@endif
@include('footer')
<script>
document.getElementById('logout-btn').innerHTML="<a href='{{ route('player_logout') }}' class='nav-link'>Logout <i class='fa fa-sign-out' aria-hidden='true'></i></a>";
</script>
@if(isset($player->auction_details))
<script>
  deadline = new Date("{{$player->auction_details->auction_ends_at}}").getTime();
  x = setInterval(function() {
  t = deadline - new Date().getTime();

  document.getElementById("ends_in").innerHTML = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)) + "m " + Math.floor((t % (1000 * 60)) / 1000) + "s ";
      if (t < 0) {
          clearInterval(x);
          let url = "{{ route('complete_cricket_bidding_process', ':id') }}";
          url = url.replace(':id', {{$player->auction_details->player_id}});
          document.location.href=url;

      }
  }, 1000);

function updateCurrentBid() {
  $.ajax({
      type: "get",
      url:"{{ route('get_current_player_bid') }}",
      success: function(result) {
        if(result.success==1){
          var x=result.data;
          document.getElementById("current_bid").innerHTML=x['current_bid'];
        }
      }
    }) 
  setTimeout(updateCurrentBid, 5000);
}

updateCurrentBid();
</script>
@endif