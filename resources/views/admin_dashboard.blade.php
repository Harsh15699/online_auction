<div class="row">
  <div class="col-2 fixed-top" style="margin-left:-1%">
      @include('sidebar')
    </div>
    <div class="col-9" style="margin:2% 0% 0% 25%;">
      <div id="content">
    @php
      $c=0;
    @endphp
    @foreach($dataArray as $count)
      @if($c%2==0)
        <div class="row" style="margin-top:5%;">
      @endif
        <div class="col-5">
          <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h5 class="card-title">Total {{$data[$c]}}</h5>
              <h3>{{$count}}</h3>
            </div>
          </div>
        </div>
        @if(($c+1)%2==0)
        </div>
        @endif
        @php
        $c++;
        @endphp
      @endforeach
      </div>
      </div>
    </div>
