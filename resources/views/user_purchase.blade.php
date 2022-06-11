@include('header')

<main>
@if(isset($products))
  <div class="shadow p-3 mb-5 bg-body rounded container">
    <h1 style="text-align:center;" class="text-decoration-underline">Your Purchase</h1>
    @php
    $count=0;
    @endphp
    @foreach($products as $product)
      @if($count%4==0)
        <div class="row" style="margin-top:5%;">
      @endif
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/images/index/') }}/watch_image_index.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p><span style="font-size:150%;font-weight:bold;"><i class="fa fa-rupee"></i>{{$product->base_price}} </span><del><i class="fa fa-rupee"></i>{{$product->MRP}}</del><span style="color:green;font-size:120%;"> {{$product->discount}}% off</span>@if($product->verified==1)<span style="color:#0da2ff;font-size:150%;float:right;"><i class="fa fa-check"></i></span>@endif</p>
              <h3>{{$product->product_name}}</h3>
              <h5 class="card-title">Purchase Price: <span id="buy_price" style="font-size:120%;font-weight:bold;color:blue;"><i class="fa fa-rupee"></i>{{$product->sold_price}} </span></h5>
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
