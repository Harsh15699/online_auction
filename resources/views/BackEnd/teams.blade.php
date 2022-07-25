<div class="row">
  <div class="col-2 fixed-top" style="margin-left:-1%">
      @include('sidebar')
    </div>
    <div class="col-9" style="margin:2% 0% 0% 20%;">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Team_Id</th>
            <th scope="col">Team_Name</th>
            <th scope="col">Owner_Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
          </tr>
        </thead>
        <tbody>
          @foreach($teams as $team)
            <tr>
              <th scope="row">{{$team->id}}</th>
              <td>{{$team->team_name}}</td>
              <td>{{$team->owner_name}}</td> 
              <td>{{$team->email}}</td>
              <td>{{$team->mobile}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>

