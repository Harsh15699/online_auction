<div class="row">
  <div class="col-2 fixed-top" style="margin-left:-1%">
      @include('sidebar')
    </div>
    <div class="col-9" style="margin:2% 0% 0% 20%;">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Product_Id</th>
            <th scope="col">Product_Name</th>
            <th scope="col">MRP</th>
            <th scope="col">Base Price</th>
            <th scope="col">Verification Status</th>
            <th scope="col">Add to Auction</th>
            <th scope="col">Added</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
              <th scope="row">{{$product->id}}</th>
              <td>{{$product->product_name}}</td>
              <td>{{$product->MRP}}</td>
              <td>{{$product->base_price}}</td>
              @if($product->verified==1)
                <td><a type="button" href="{{ route('admin.verify-products',$product->id) }}" class="btn btn-success">Verified</a></td>
              @else
                <td><a type="button" href="{{ route('admin.verify-products',$product->id) }}" class="btn btn-danger">Unverified</a></td>
              @endif

              @if($product->added_for_auction==1)
                <td><button type="button" class="btn btn-secondary">Already Added</button></td>
              @elseif($product->sold==1)
                <td><button type="button" class="btn btn-success">Already Sold</button></td>
              @else
                <td><button type="button" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#exampleModal' onclick="addId({{$product->id}})">Add to Auction</button></td>
              @endif
              <td>{{$product->added_for_auction}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
              <h2>Add Product to auction</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" class="register-form" action="{{ route('admin.add_for_auction') }}" id="register-form">
                @csrf
                <input type="hidden" value="" id="product_id" name="product_id">
                <div class="mb-3">
                  <label for="auction_starts_at" class="form-label">Auction Start Time</label>
                  <input type="datetime-local" class="form-control" name="auction_starts_at" id="auction_starts_at">
                </div>
                <div class="mb-3">
                  <label for="auction_ends_at" class="form-label">Auction End Time</label>
                  <input type="datetime-local" class="form-control" name="auction_ends_at" id="auction_ends_at">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    <script>
    function addId(id){
      document.getElementById("product_id").setAttribute('value',id);
    }
    </script>
