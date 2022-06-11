<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CommodityAuction;
use App\Models\Products;

class LandingController extends Controller
{
    public function getIndexPage(){

      return view('index');

    }

    public function getCommodityAuctionPage(){

      $current = Carbon::now();
      $commodity_auctions=CommodityAuction::all();
      $current_auction=null;
      $i=0;
      foreach($commodity_auctions as $commodity_auction){
        $product=Products::where('id',$commodity_auction->product_id)->first();
        $commodity_auction["product_detail"]=$product;
        if($commodity_auction->auction_starts_at<$current && $commodity_auction->auction_ends_at>$current){
          $current_auction=$commodity_auction;
          unset($commodity_auctions[$i]);
        }
        $i++;
      }
      return view('commodity_auction')->with('current_auction',$current_auction)->with('commodity_auctions',$commodity_auctions);

    }

}
