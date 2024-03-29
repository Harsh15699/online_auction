<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('sidebar/css') }}/style.css">
  </head>
  <body>
			<nav id="sidebar">
				<div class="p-4">
          <div class="row">
            <div class="col-10">
              <h1 style="color:white;font-size:180%;">Admin Panel</h1>
            </div>
            <div class="col-1">
              <a href="{{ route('admin.logout') }}" style="color:white;font-size:250%;"><i class="fa fa-solid fa-power-off"></i></a>
            </div>
          </div>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{ route('admin.dashboard') }}"> Home</a>
	          </li>
	          <li>
	              <a href="{{ route('admin.users') }}"> Users</a>
	          </li>
	          <li>
              <a href="{{ route('admin.products') }}"> Products</a>
	          </li>
	          <li>
              <a href="{{ route('admin.commodity_auction') }}"> Commodity Auction</a>
	          </li>
	          <li>
              <a href="{{ route('admin.players') }}"> Players</a>
	          </li>
	          <li>
              <a href="{{ route('admin.teams') }}"> Teams</a>
	          </li>
	          <li>
              <a href="{{ route('admin.cricket_auction') }}"> Cricket Auction</a>
	          </li>
	        </ul>
	        <div class="footer">
	        </div>
	      </div>
    	</nav>

  </body>
</html>
