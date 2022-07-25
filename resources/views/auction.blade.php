@include('header')
<main>
 @if(isset($current_auction)) 
<div class="shadow p-3 mb-5 bg-body rounded container" style="height:85vh;">
    <h1 style="text-align:center;" class="text-decoration-underline">Your Details and Live Bidding</h1><br>
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 25rem;height:70vh;">
          <img src="{{ url('/images/player_images/') }}/{{$current_auction->player_detail->image_link}}" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Ends-In: <span id="ends_in"></span></h5>
          <a type="button" class="btn btn-primary" style="width:40%;margin-left:20%;" id="bid_btn" onclick="checkBid()">Bid Now</a>
          </div>
        </div>
      </div>
      <div class="col-8">
        <p>Player Name: {{$current_auction->player_detail->first_name}} {{$current_auction->player_detail->last_name}}</p>
        <p>Age: {{$current_auction->player_detail->age}}</p>
        <p>Nationality: {{$current_auction->player_detail->country}}</p>
        <p>Skill-Set: {{$current_auction->player_detail->skillset}}</p>
        <p>Phone Number: {{$current_auction->player_detail->mobile}}</p>
        <p>Email: {{$current_auction->player_detail->email}}</p>
        <br>
        <div class="row">
          <div class="col-3">
            <p>Total Matches:<br>{{$current_auction->player_detail->total_matches}}</p>
          </div>
          <div class="col-3">
            <p>Total Runs:<br>{{$current_auction->player_detail->total_runs}}</p>
          </div>
          <div class="col-3">
            <p>Strike-rate:<br>{{$current_auction->player_detail->strike_rate}}</p>
          </div>
          <div class="col-3">
            <p>50/100:<br>{{$current_auction->player_detail->fifties}}/{{$current_auction->player_detail->hundreds}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <p>Total Innings:<br>{{$current_auction->player_detail->total_innings}}</p>
          </div>
          <div class="col-3">
            <p>Total Wickets:<br>{{$current_auction->player_detail->total_wickets}}</p>
          </div>
          <div class="col-3">
            <p>Economy:<br>{{$current_auction->player_detail->economy}}</p>
          </div>
          <div class="col-3">
            <p>Fifer:<br>{{$current_auction->player_detail->fifer}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <p>Base Price:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$current_auction->player_detail->base_price}} </span></p>
          </div>
          <div class="col-4">
            <p style="color:red;">Current Bid:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i><span id="current_bid"></span></span></p>
          </div>
          <div class="col-4">
            <p style="color:blue;">Bidding Team:<br><span style="font-size:150%;font-weight:bold;"><span id="current_bidder"></span></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
  @if(isset($cricket_auctions))
  <div class="shadow p-3 mb-5 bg-body rounded container">
    <h1 style="text-align:center;" class="text-decoration-underline">Upcoming Auction</h1>
    @php
    $count=0;
    @endphp
    @foreach($cricket_auctions as $cricket_auction)
      @if($count%4==0)
        <div class="row" style="margin-top:5%;">
      @endif
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/player_images/') }}/{{$cricket_auction->player_detail->image_link}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$cricket_auction->player_detail->base_price}} </span></p>
              <h3>{{$cricket_auction->player_detail->first_name}}</h3>
              <h5 class="card-title">Starts-In: <span id="timer{{$cricket_auction->player_id}}"><script></script></span></h5>
            </div>
          </div>
        </div>
        @if(($count+1)%4==0)
        </div>
        @endif
        @php
        $count++;
        @endphp
      @endforeach
      @if($count==0)
        <br><br>
        <h3>No Upcoming Auction as of now</h3>
      @endif
  </div>
  @else
  @endif
</main>
@include('footer')
<script>
  var x=[];
  var deadline=[];
  var t=[];
</script>
@if(isset($cricket_auctions))
@foreach($cricket_auctions as $cricket_auction)
<script>
    deadline[{{$cricket_auction->player_id}}] = new Date("{{$cricket_auction->auction_starts_at}}").getTime();
    x[{{$cricket_auction->player_id}}] = setInterval(function() {
    t[{{$cricket_auction->player_id}}] = deadline[{{$cricket_auction->player_id}}] - new Date().getTime();
    document.getElementById("timer{{$cricket_auction->player_id}}").innerHTML =  Math.floor((t[{{$cricket_auction->player_id}}] % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) + "h " + Math.floor((t[{{$cricket_auction->player_id}}] % (1000 * 60 * 60)) / (1000 * 60)) + "m " + Math.floor((t[{{$cricket_auction->player_id}}] % (1000 * 60)) / 1000) + "s ";
        if (t[{{$cricket_auction->player_id}}] < 0) {
            clearInterval(x[{{$cricket_auction->player_id}}]);

        }
    }, 1000);

</script>
@endforeach
@endif

@if(isset($current_auction))
<script>
  deadline = new Date("{{$current_auction->auction_ends_at}}").getTime();
  x = setInterval(function() {
  t = deadline - new Date().getTime();

  document.getElementById("ends_in").innerHTML = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)) + "m " + Math.floor((t % (1000 * 60)) / 1000) + "s ";
      if (t < 0) {
          clearInterval(x);
          let url = "{{ route('complete_cricket_bidding_process', ':id') }}";
          url = url.replace(':id', {{$current_auction->player_id}});
          document.location.href=url;

      }
  }, 1000);

var check_bid=0; 
var check_bal=0;
function updateCurrentBid() {
  $.ajax({
      type: "get",
      url:"{{ route('get_current_player_bid') }}",
      success: function(result) {
        if(result.success==1){
          var x=result.data;
          document.getElementById("current_bid").innerHTML=x['current_bid'];
          document.getElementById("current_bidder").innerHTML=x['last_bidder'];
          if(x['current_bidder']==1){
            check_bid=1;
          }
          else{
            check_bid=0;
          }
          if(x['bidding_eligibility']==1){
            check_bal=1;
          }
          else{
            check_bal=0;
          }
        }
      }
    }) 
  setTimeout(updateCurrentBid, 5000);
}

updateCurrentBid();

function checkBid(){
  if(check_bid==1){
    alert("You are the last bidder.Wait for others to bid");
    return false;
  }
  else{
    $.ajax({
      type: "get",
      url:"{{ route('add_bid_cricket') }}",
    })  
  }
}


</script>
@endif
<script>
  document.getElementById('my-profile').innerHTML="<a href='{{ route('team_dashboard') }}' class='nav-link' >Team Dashboard <i class='fa fa-solid fa-user-circle'></i></a>";
</script>