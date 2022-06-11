@include('header')
<main>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container rounded bg-white mt-5 mb-5">
          <form method="POST" class="register-form" action="{{ route('user_update') }}" id="register-form">
            @csrf
            <div class="row">
                <div class="col-md-3 border-right"  style="background-color:#f5bbcc;">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$user->first_name}} {{$user->last_name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
                    <a class="nav-link active" aria-current="page" href="{{ route('user_products') }}">Your Products</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('user_purchase') }}">Your Bids</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Balance</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Manage Bank Account</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('user_logout') }}">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 form-group"><label class="labels">First Name</label><input type="text" class="form-control" name="fname" placeholder="first name" value="{{$user->first_name}}"></div>
                            <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" name="lname" value="{{$user->last_name}}" placeholder="last name"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="mobile" placeholder="enter phone number" value="{{$user->mobile}}"></div>
                            <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" name="address" placeholder="enter address" value="{{$user->address}}"></div>
                            <div class="col-md-12"><label class="labels">Pincode</label><input type="text" class="form-control" name="pincode" placeholder="enter pincode" value="{{$user->pincode}}"></div>
                            <div class="col-md-12"><label class="labels">District</label><input type="text" class="form-control" name="district" placeholder="enter district" value="{{$user->district}}"></div>
                            <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" name="state" placeholder="enter state" value="{{$user->state}}"></div>
                            <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" name="email" placeholder="enter email id" value="{{$user->email}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="text-right">Additional Settings</h4>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" name="age" placeholder="age" value="{{$user->age}}"></div>
                        <div class="col-md-12"><label class="labels">Gender</label>
                          <select id="gender" class="form-control" name="gender" value="{{$user->gender}}">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="mt-5 text-center"><input type="submit" name="save_profile" id="save_profile" class="btn btn-primary profile-button" value="Save Profile"/></div>
            </div>
          </form>
        </div>
      </div>
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
          <h5 class="card-title">Ends-In: <span id="ends_in"></span></h5>
          <a type="button" class="btn btn-primary" style="width:40%;margin-left:20%;" id="bid_btn" onclick="checkBid()">Bid Now</a>
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
          <p>Base Price:<br><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$current_auction->product_detail->base_price}} </span><del><i class="fa fa-rupee"></i>{{$current_auction->product_detail->MRP}}</del><span style="color:green;font-size:120%;"> {{$current_auction->product_detail->discount}}% off</span></p>
        </div>
        <div class="col-4">
          <p style="color:red;">Current Bid:<br><span style="font-size:150%;font-weight:bold;" ><i class="fa fa-rupee"></i></span><span style="font-size:150%;font-weight:bold;" id="current_bid"></span></p>
        </div>
        <div class="col-4">
          <p style="color:Blue;">Current Bidder:<br><span style="font-size:150%;font-weight:bold;" id="current_bidder"></span></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
</main>
@include('footer')
<script>
    document.getElementById('my-profile').innerHTML="<a href='#' class='nav-link' data-bs-toggle='modal' data-bs-target='#exampleModal'>My Profile <i class='fa fa-solid fa-user-circle'></i></a>";

</script>
@if(isset($current_auction))
<script>
  deadline = new Date("{{$current_auction->auction_ends_at}}").getTime();
  x = setInterval(function() {
  t = deadline - new Date().getTime();

  document.getElementById("ends_in").innerHTML = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)) + "m " + Math.floor((t % (1000 * 60)) / 1000) + "s ";
      if (t < 0) {
          clearInterval(x);
          let url = "{{ route('complete_bidding_process', ':id') }}";
          url = url.replace(':id', {{$current_auction->product_id}});
          document.location.href=url;

      }
  }, 1000);

var check_bid=0; 
function updateCurrentBid() {
  $.ajax({
      type: "get",
      url:"{{ route('get_current_bid') }}",
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
      url:"{{ route('add_bid') }}",
    })  
  }
}
</script>
@endif
