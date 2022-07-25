<div class="row">
  <div class="col-2 fixed-top" style="margin-left:-1%">
      @include('sidebar')
    </div>
    <div class="col-9" style="margin:2% 0% 0% 20%;">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Player_Id</th>
            <th scope="col">Player_Name</th>
            <th scope="col">Age</th>
            <th scope="col">Base Price</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Skill-Set</th>
            <th scope="col">Country</th>
            <th scope="col">Verification Status</th>
            <th scope="col">Add to Auction</th>
            <th scope="col">Added</th>
            <th scope="col">Sold</th>
          </tr>
        </thead>
        <tbody>
          @foreach($players as $player)
            <tr>
              <th scope="row">{{$player->id}}</th>
              <td>{{$player->first_name}} {{$player->last_name}}</td>
              <td>{{$player->age}}</td>
              <td>{{$player->base_price}}</td>
              <td>{{$player->email}}</td>
              <td>{{$player->mobile}}</td>
              <td>{{$player->skillset}}</td>
              <td>{{$player->country}}</td>
              @if($player->verified==1)
                <td><a type="button" href="{{ route('admin.verify-players',$player->id) }}" class="btn btn-success">Verified</a></td>
              @else
                <td><a type="button" href="{{ route('admin.verify-players',$player->id) }}" class="btn btn-danger">Unverified</a></td>
              @endif

              @if($player->added_for_auction==1)
                <td><button type="button" class="btn btn-secondary">Already Added</button></td>
              @elseif($player->sold==1)
                <td><button type="button" class="btn btn-success">Already Sold</button></td>
              @else
                <td><button type="button" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#exampleModal' onclick="addId({{$player->id}})">Add to Auction</button></td>
              @endif
              <td>{{$player->added_for_auction}}</td>
              <td>{{$player->sold}}</td>
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
              <h2>Add player to auction</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" class="register-form" action="{{ route('admin.add_player_for_auction') }}" id="register-form">
                @csrf
                <input type="hidden" value="" id="player_id" name="player_id">
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
      document.getElementById("player_id").setAttribute('value',id);
    }
    </script>
