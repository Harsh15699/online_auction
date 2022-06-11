<div class="row">
  <div class="col-2 fixed-top" style="margin-left:-1%">
      @include('sidebar')
    </div>
    <div class="col-9" style="margin:2% 0% 0% 20%;">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Product_Id</th>
            <th scope="col">Auction Starts At</th>
            <th scope="col">Auction Ends At</th>
            <th scope="col">Sold</th>
          </tr>
        </thead>
        <tbody>
          @foreach($commodity_auctions as $commodity_auction)
            <tr>
              <th scope="row">{{$commodity_auction->product_id}}</th>
              <td>{{$commodity_auction->auction_starts_at}}</td>
              <td>{{$commodity_auction->auction_ends_at}}</td>
              <td>{{$commodity_auction->sold}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>
