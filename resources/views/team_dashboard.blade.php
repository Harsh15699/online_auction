@include('header')
<main>
  
  @if(isset($players))
  <div class="shadow p-3 mb-5 bg-body rounded container">
  <h1 style="text-align:center;" class="text-decoration-underline">Your Squad</h1>
    @php
    $count=0;
    @endphp
    @foreach($players as $player)
      @if($count%4==0)
        <div class="row" style="margin-top:5%;">
      @endif
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/player_images/') }}/{{$player->image_link}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3>{{$player->first_name}} {{$player->last_name}}</h3>
              <p><span style="font-size:150%;font-weight:bold;color:green;">Bought in: <i class="fa fa-rupee"></i>{{$player->sold_price}} </span></p>
              <!-- <a href="#" class="btn btn-primary" style="width:40%;margin-left:30%;margin-top:5%;">Bid Now</a> -->
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
        <h3>You haven't purchased any player yet.Please go for auction</h3>
      @endif
  </div>
  @endif
</main>
@include('footer')
<script>
  document.getElementById('logout-btn').innerHTML="<a href='{{ route('team_logout') }}' class='nav-link'>Logout <i class='fa fa-sign-out' aria-hidden='true'></i></a>";
  document.getElementById('my-profile').innerHTML="<a href='{{ route('auction') }}' class='nav-link'>Auction <i class='fa fa-gavel' aria-hidden='true'></i></a>";
</script>
