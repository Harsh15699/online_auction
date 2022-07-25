<div class="row">
  <div class="col-2 fixed-top" style="margin-left:-1%">
      @include('sidebar')
    </div>
    <div class="col-9" style="margin:2% 0% 0% 20%;">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Player_Id</th>
            <th scope="col">Auction Starts At</th>
            <th scope="col">Auction Ends At</th>
            <th scope="col">Sold</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cricket_auctions as $cricket_auction)
            <tr>
              <th scope="row">{{$cricket_auction->player_id}}</th>
              <td>{{$cricket_auction->auction_starts_at}}</td>
              <td>{{$cricket_auction->auction_ends_at}}</td>
              <td>{{$cricket_auction->sold}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>
