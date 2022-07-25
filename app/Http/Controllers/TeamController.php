<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;
use App\Models\CricketAuction;
use App\Models\Team;
use Carbon\Carbon;

class TeamController extends Controller
{
   

    public function checkIfTeamLoggedIn(){
        $flag=FALSE;
        if(auth("team")->check()){
            $flag=true;
        }
        return $flag;
    }

    public function teamSignin(Request $request){
        if($this->checkIfTeamLoggedIn()){
            return redirect(route('team_dashboard'));
        }
        else{
            return view('team_login');
      }
    }

    public function teamPostSignin(Request $request){

        $dataArray      =       array(
            "username"         =>          $request->username,
            "password"      =>          $request->password
        );

      if ($token = Auth('team')->attempt($dataArray)) {
            // $request->session()->regenerate();
            return redirect(route('team_dashboard'));
        }
      else{
        return back()->with('error', 'Wrong Login Details');
      }
    }

    public function getTeamDashboard(){
        if(!$this->checkIfTeamLoggedIn()){
            return redirect(route('team_login'));
        }
        $team_id=auth('team')->id();
        $players=Player::all()->where('team_id',$team_id);
        \Log::info($players);
        return view('team_dashboard')->with('players',$players);
    }

    public function teamLogout(Request $request){
        Auth::guard('team')->logout();
        // $request->session()->invalidate();
        return redirect(route('team_login'));
    }

    public function getAuctionPage(){
        if(!$this->checkIfTeamLoggedIn()){
            return redirect(route('team_login'));
        }
        $current = Carbon::now();
        $cricket_auctions=CricketAuction::all();
        $current_auction=null;
        $i=0;
        $path = public_path() . "\json\cricket_auction.json";
        $json = json_decode(file_get_contents($path), true);
        foreach($cricket_auctions as $cricket_auction){
          $player=Player::where('id',$cricket_auction->player_id)->first();
          $cricket_auction["player_detail"]=$player;
          if($cricket_auction->auction_starts_at<=$current && $cricket_auction->auction_ends_at>$current){
            $current_auction=$cricket_auction;
            $json["auction_id"]=$current_auction->id;
            $json["player_id"]=$current_auction->player_id;
            $json["base_price"]=$current_auction->player_detail->base_price;
            unset($cricket_auctions[$i]);
            break;
          }
          $i++;
        }
        $jsonString=json_encode($json);
        file_put_contents($path, $jsonString);
        return view('auction')->with('current_auction',$current_auction)->with('cricket_auctions',$cricket_auctions);
    }
    public function addBidToPlayer(){
        $id=auth('team')->id();
        $path = public_path() . "\json\cricket_auction.json";
        $json = json_decode(file_get_contents($path), true);
        $json["last_bidder_id"]=$id;
        if($json["current_bid"]==0){
            $json["current_bid"]=$json["base_price"]+5000000;
          }
        else {
          $json["current_bid"]+=5000000;
        }
        $jsonString=json_encode($json);
        file_put_contents($path, $jsonString);
        return redirect(route('auction'));
      }

    public function completeCricketBiddingProcess(Request $request,$id){
        CricketAuction::where('player_id',$id)->delete();
          $path = public_path() . "\json\cricket_auction.json";
          $json = json_decode(file_get_contents($path), true);
          $dataArray      =       array(
                "added_for_auction"         =>          '0'
            );
            if($json["current_bid"]!=0){
              $dataArray["sold"]='1';
              $dataArray["sold_price"]=$json["current_bid"];
              $dataArray["team_id"]=$json["last_bidder_id"];
            //   $player=PLayer::where('id',$dataArray["buyer_id"])->decrement('wallet_balance',$dataArray["sold_price"]);
            }
          Player::where('id',$id)->update($dataArray);
          $json["current_bid"]=0;
          $json["last_bidder_id"]=0;
          $jsonString=json_encode($json);
          file_put_contents($path, $jsonString);
          
          return back()->with("success", "Success! player deleted");
    }

    public function getCurrentPlayerBid(){
      $id=auth('team')->id();
      $path = public_path() . "\json\cricket_auction.json";
      $json = json_decode(file_get_contents($path), true);
      $last_bidder_id=$json["last_bidder_id"];
      $current_team=Team::where('id',$id)->first();
      if($last_bidder_id!=0){
        $team=Team::where('id',$last_bidder_id)->first();
        $dataArray      =       array(
          "current_bid"         =>          $json["current_bid"],
          "current_bidder"         =>          0,
          "last_bidder"         =>          $team->team_name
        );
        if($id==$last_bidder_id){
          $dataArray['current_bidder']=1;
        }
      }
      else{
        $dataArray      =       array(
          "current_bid"         =>          $json["current_bid"],
          "current_bidder"         =>          0,
          "last_bidder"         =>          "You are first one"
        );
      }
      return response()->json([
        "success" => 1,
        "error" => 0,
        "data" => $dataArray
    ]);
  }
}
