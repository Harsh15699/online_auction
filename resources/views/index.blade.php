@include('header')
<style>
  .container{
    margin-top:2%;
  }
</style>
<main>
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width:85%;margin:auto;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a class="nav-link" href="{{ route('cricket_auction') }}"><img src="{{ url('/images/index/') }}/cricket_auction.png" class="d-block w-100" alt="..." style=" width:100%; height: 500px !important;"></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="fw-bolder">Cricket Auction</h5>
          <p>Click now and get ready for the action</p>
        </div>
      </div>
      <div class="carousel-item">
        <a class="nav-link" href="{{ route('commodity_auction') }}"><img src="{{ url('/images/index/') }}/commodity_auction.png" class="d-block w-100" alt="..." style=" width:90%; height: 500px !important;"></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="fw-bolder">Commodity Auction</h5>
          <p>Get ready to Bid or Getting Bids for your product</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container shadow p-3 mb-5 rounded container" style="background-color:#2f6ce5;color:white">
    <div class="row">
      <div class="col-8">
        <h1 class="text-decoration-underline">Cricket Auction</h1>
        <h5>Are you a player or a team owner?<br>You are at the right place</h5>
        <p>Cricket Premier League is one the biggest T20 leagues played around the world.
          The Cricket Premier League (CPL) is a professional Twenty20 cricket league, contested by eight teams based out of eight different Indian cities.
           The CPL is the most-attended cricket league in the world Currently, with eight teams, each team plays each other twice in a home-and-away round-robin format in the league phase.
           At the conclusion of the league stage, the top four teams will qualify for the playoffs.The CPL auction is a yearly event to auction the cricket players to various franchisees. A dedicated auctioneer controls the proceedings of this multi-day event. CPL franchises fiercely bid for the listed players. The auction ends with a settled squad for every CPL team. Although the auction process happens for a couple of days, there is a lot that goes on behind the scenes for months. Teams complete the pre-auction analysis and work on the strategy to be employed during the auction. The remaining budget, the type of player needed, players’ international commitment, injuryhistory, his equation with the coach, everything matters when a franchise decides to bid for a player.</p>
        <p>Be a part of this big event and enjoy the exciting moment of auction</p>
      </div>
      <div class="col-4 text-center my-auto">
        <a href="{{ route('cricket_auction') }}" class="btn btn-light btn-lg">Get Started <i class=" fa fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
  <div class="container shadow p-3 mb-5 bg-body rounded container">
    <div class="row">
      <div class="col-4 text-center my-auto" >
        <div class="card" style="width: 18rem;margin:auto;">
          <img src="{{ url('/images/index/') }}/watch_image_index.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="{{ route('commodity_auction') }}" class="btn btn-primary btn-lg">Get Started <i class=" fa fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-8">
        <h1 class="text-decoration-underline">Commodity Auction</h1>
        <h5>Do you want to bid for a product or get bid for your product?<br>You are at the right place</h5>
        <p>An online auction (or also electronic auction or e-auction or eAuction) is an auction which is held over the internet.Like auctions in general, online auctions come in a variety of types like ascending English auctions, descending Dutch auctions, first-price sealed-bid, Vickrey auctions and others, which are sometimes not mutually exclusive.
          The scope and reach of these auctions have been propelled by the Internet to a level beyond what the initial purveyors had anticipated.This is mainly because online auctions break down and remove the physical limitations of traditional auctions such as geography, presence, time, space, and a small target audience.This influx in reachability has also made it easier to commit unlawful actions within an auction.In 2002, online auctions were projected to account for 30% of all online e-commerce due to the rapid expansion of the popularity of the form of electronic commerce.
          Web-based online commercial activity for online auctions dates back to 1995, when two auction sites were founded independently with alternative business models.The first online auction site was Onsale.com, founded by Jerry Kaplan in May 1995.In September that same year, eBay was founded by French-Iranian computer scientist Pierre Omidyar</p>
        <p>Be a part of this big event and enjoy the exciting moment of auction</p></div>
    </div>
  </div>
</main>
@include('footer')
