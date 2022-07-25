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
            <form method="POST" class="register-form" action="{{ route('add_product') }}" id="register-form" enctype="multipart/form-data">
              @csrf
      <div class="row">
          <div class="col-md-6 border-right">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right">Basic Details</h4>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">Product Name</label><input type="text" name="product_name" class="form-control" placeholder="product name" value="" required></div>
                      <div class="col-md-12"><label class="labels">Brand</label><input type="text" class="form-control" name="brand" placeholder="brand name" value="" required></div>
                      <div class="col-md-12"><label class="labels">Description</label><textarea class="form-control" id="description" name="description" rows="4" cols="50" placeholder="description" required></textarea></div>
                      <div class="row mt-3">
                          <div class="col-md-6"><label class="labels">MRP</label><input type="number" class="form-control" name="MRP" placeholder="MRP" value="" required></div>
                          <div class="col-md-6"><label class="labels">Base Price</label><input type="number" class="form-control" name="base_price" value="" placeholder="base price" required></div>
                      </div>
                      <div class="col-md-12"><label class="labels">Size</label><input type="text" class="form-control" name="size" placeholder="enter size" value=""></div>
                      <div class="col-md-12"><label class="labels">Category</label>
                        <select id="category" class="form-control" name="category" required>
                          <option value="kitchen">Kitchen</option>
                          <option value="Electronics">Electronics</option>
                          <option value="Lifestyle">Lifestyle</option>
                        </select>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Additional Details</h4>
                </div>
                <div class="row mt-2">
                  <div class="col-md-12"><label class="labels">Product Image</label><p>Image Size must be 1200px X 1200px</p><input type="file" name="image" class="form-control" required></div>
                </div>
              </div>
          </div>
          <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Add Product</button></div>
      </div>
    </form>
  </div>
  </div>
  </div>
  </div>
</div>

  
  @if(isset($products))
  <div class="shadow p-3 mb-5 bg-body rounded container">
    <h1 style="text-align:center;" class="text-decoration-underline">Your Products</h1>
    <a href="#" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#exampleModal' style="float:right;"><i class="fa fa-plus" aria-hidden="true"></i> Add New Product</a>
    @php
    $count=0;
    @endphp
    @foreach($products as $product)
      @if($count%4==0)
        <div class="row" style="margin-top:5%;">
      @endif
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/product_images/') }}/{{$product->product_image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$product->base_price}} </span><del><i class="fa fa-rupee"></i>{{$product->MRP}}</del><span style="color:green;font-size:120%;"> {{$product->discount}}% off</span>@if($product->verified==1)<span style="color:#0da2ff;font-size:150%;float:right;"><i class="fa fa-check"></i></span>@endif</p>
              <h3>{{$product->product_name}}</h3>
              @if($product->added_for_auction==1)
              <h5 class="card-title">Starts-In: <span id="timer{{$product->id}}"><script></script></span></h5>
              @else
              <h5 class="card-title">Not yet added</h5>
              @endif
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
        <h4>You haven't added any product yet.</h4><br><br><br>
      @endif
  </div>
  @endif
<script>
  var x=[];
  var deadline=[];
  var t=[];
</script>
@if(isset($products))
@foreach($products as $product)
@if(isset($product->auction_details))
<script>
    deadline[{{$product->id}}] = new Date("{{$product->auction_details->auction_starts_at}}").getTime();
    x[{{$product->id}}] = setInterval(function() {
    t[{{$product->id}}] = deadline[{{$product->id}}] - new Date().getTime();

    document.getElementById("timer{{$product->id}}").innerHTML = Math.floor((t[{{$product->id}}] % (1000 * 60 * 60)) / (1000 * 60)) + "m " + Math.floor((t[{{$product->id}}] % (1000 * 60)) / 1000) + "s ";
        if (t[{{$product->id}}] < 0) {
            clearInterval(x[{{$product->id}}]);
        }
    }, 1000);

</script>
@endif
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
</main>
@include('footer')
<script>
  document.getElementById('my-profile').innerHTML="<a href='{{route('user_dashboard')}}' class='nav-link' >User Dashboard <i class='fa fa-solid fa-user-circle'></i></a>";
</script>