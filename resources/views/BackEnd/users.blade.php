<div class="row">
  <div class="col-2 fixed-top" style="margin-left:-1%">
      @include('sidebar')
    </div>
    <div class="col-9" style="margin:2% 0% 0% 20%;">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">User_Id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Verification Status</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->first_name}} {{$user->last_name}}</td>
              <td>{{$user->age}}</td>
              <td>{{$user->gender}}</td>
              @if($user->verified==1)
                <td><a type="button" href="{{ route('admin.verify-users',$user->id) }}" class="btn btn-success">Verified</a></td>
              @else
                <td><a type="button" href="{{ route('admin.verify-users',$user->id) }}" class="btn btn-danger">Unverified</a></td>
              @endif
              <td>{{$user->email}}</td>
              <td>{{$user->mobile}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>

