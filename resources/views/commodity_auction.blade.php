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
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('/images/commodity_auction/') }}/sale1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/images/commodity_auction/') }}/fashionSale1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/images/commodity_auction/') }}/headphone_sale1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/images/commodity_auction/') }}/sale1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/images/commodity_auction/') }}/fashionSale1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/images/commodity_auction/') }}/headphone_sale1.jpg" class="d-block w-100" alt="...">
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
      <h2 class="text-decoration-underline">Benefits for you</h2><br>
      <div class="row">
        <div class="col-2">
          <span class="btn btn-light">Best Price for You <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-2">
          <span class="btn btn-light">Global Community <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-2">
          <span class="btn btn-light">Better Reach for bid <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-2">
          <span class="btn btn-light">Convenience <i class="fa fa-tags"></i></span>
        </div>
      </div>
      <div class="row" style="margin-top:3%;">
        <div class="col-2">
          <span class="btn btn-light">Longer bidding Time <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-2">
          <span class="btn btn-light">Large Exposure <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-2">
          <span class="btn btn-light">Less onsite activity <i class="fa fa-tags"></i></span>
        </div>
        <div class="col-2">
          <span class="btn btn-light">Provide more details <i class="fa fa-tags"></i></span>
        </div>
      </div>
      <br>
        <h2>Why are you still thinking?</h2>
      <br>
      <div class="row">
        <div class="col-6">
          <h4>If you haven't joined Our faster growing community yet</h4>
          <br>
          <a href="{{ route('user_registration') }}" class="btn btn-lg" style="background-color:#F5F5DC;">Sign Up Now <i class=" fa fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="col-6">
          <h4>If you have already joined Our faster growing community</h4>
          <br>
          <a href="{{ route('user_login') }}" class="btn btn-lg" style="background-color:#F5F5DC;">Log In Now <i class=" fa fa-solid fa-arrow-right"></i></a>
        </div>
      </div>


</div>

  @if(isset($current_auction))
  <div class="shadow p-3 mb-5 bg-body rounded container" style="height:80vh;">
    <h1 style="text-align:center;" class="text-decoration-underline">Ongoing Auction</h1>
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 25rem;height:70vh;">
          <img src="{{ url('/images/index/') }}/watch_image_index.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ends-In: <span id="timer{{$current_auction->product_id}}"></span></h5>
            <a href="{{ route('user_dashboard') }}" class="btn btn-primary" style="width:40%;margin-left:20%;">Go To Dashboard</a>
          </div>
        </div>
      </div>
      <div class="col-8">
        <h3>Product Name: {{$current_auction->product_detail->product_name}}</h3>
        <h3>Description</h3>
        <p>{{$current_auction->product_detail->description}}</p>
        <h2>Wanna Bid!</h2>
        <h3>Don't Wait else bid will be over.Bid Now</h3>
        <br><br>
        <div class="row">
          <div class="col-4">
            <p>Base Price:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$current_auction->product_detail->base_price}} </span><del><i class="fa fa-rupee"></i>{{$current_auction->product_detail->MRP}}</del><span style="color:green;font-size:120%;"> 90% off</span></p>
          </div>
          <div class="col-4">
            <p style="color:red;">Current Bid:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>1500</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
  @if(isset($commodity_auctions))
  <div class="shadow p-3 mb-5 bg-body rounded container">
    <h1 style="text-align:center;" class="text-decoration-underline">Upcoming Auction</h1>
    @php
    $count=0;
    @endphp
    @foreach($commodity_auctions as $commodity_auction)
      @if($count%4==0)
        <div class="row" style="margin-top:5%;">
      @endif
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/index/') }}/watch_image_index.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$commodity_auction->product_detail->base_price}} </span><del><i class="fa fa-rupee"></i>{{$commodity_auction->product_detail->MRP}}</del><span style="color:green;font-size:120%;"> 90% off</span></p>
              <h3>{{$commodity_auction->product_detail->product_name}}</h3>
              <h5 class="card-title">Starts-In: <span id="timer{{$commodity_auction->product_id}}"><script></script></span></h5>
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
  </div>
  @endif
</main>
@include('footer')
<script>
  var x=[];
  var deadline=[];
  var t=[];
</script>
@if(isset($commodity_auctions))
@foreach($commodity_auctions as $commodity_auction)
<script>
    deadline[{{$commodity_auction->product_id}}] = new Date("{{$commodity_auction->auction_starts_at}}").getTime();
    x[{{$commodity_auction->product_id}}] = setInterval(function() {
    t[{{$commodity_auction->product_id}}] = deadline[{{$commodity_auction->product_id}}] - new Date().getTime();

    document.getElementById("timer{{$commodity_auction->product_id}}").innerHTML = Math.floor((t[{{$commodity_auction->product_id}}] % (1000 * 60 * 60)) / (1000 * 60)) + "m " + Math.floor((t[{{$commodity_auction->product_id}}] % (1000 * 60)) / 1000) + "s ";
        if (t[{{$commodity_auction->product_id}}] < 0) {
            clearInterval(x[{{$commodity_auction->product_id}}]);
            let url = "{{ route('complete_bidding_process', ':id') }}";
            url = url.replace(':id', {{$commodity_auction->product_id}});
            document.location.href=url;

        }
    }, 1000);

</script>
@endforeach
@endif

@if(isset($current_auction))
<script>
    deadline[{{$current_auction->product_id}}] = new Date("{{$current_auction->auction_ends_at}}").getTime();
    x[{{$current_auction->product_id}}] = setInterval(function() {
    t[{{$current_auction->product_id}}] = deadline[{{$current_auction->product_id}}] - new Date().getTime();

    document.getElementById("timer{{$current_auction->product_id}}").innerHTML = Math.floor((t[{{$current_auction->product_id}}] % (1000 * 60 * 60)) / (1000 * 60)) + "m " + Math.floor((t[{{$current_auction->product_id}}] % (1000 * 60)) / 1000) + "s ";
        if (t[{{$current_auction->product_id}}] < 0) {
            clearInterval(x[{{$current_auction->product_id}}]);
            let url = "{{ route('complete_bidding_process', ':id') }}";
            url = url.replace(':id', {{$current_auction->product_id}});
            document.location.href=url;

        }
    }, 1000);

</script>
@endif
