<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Products;
use App\Models\User;
use App\Models\Team;
use App\Models\Player;
use App\Models\CommodityAuction;
use App\Models\CricketAuction;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function checkIfTeamLoggedIn(){
    $flag=FALSE;
    if(auth("admin")->check()){
        $flag=true;
    }
    
    return $flag;
  }
    public function getAdminLoginPage(){
      // if($this->checkIfTeamLoggedIn()){
      //   return redirect(route('admin.dashboard'));
      // }
      // else{
        return view('admin_login');
      // }
    }

    /*Not to be Used
      Will be used to create a new admin
    */

    // public function addNewAdmin(){
    //   $dataArray      =       array(
    //         "name"          =>          "admin",
    //         "user_name"          =>          "admin",
    //         "email"         =>          "admin@online.auction",
    //         "password"      =>          Hash::make("admin")
    //     );
    //     $user=Admin::create($dataArray);
    // }

    public function adminSignin(Request $request){
      $dataArray      =       array(
            "user_name"         =>          $request->user_name,
            "password"      =>          $request->password
        );

      if ($token = auth('admin')->attempt($dataArray)) {
            // $request->session()->regenerate();
            return redirect(route('admin.dashboard'));
        }
      else{
        return back()->with('error', 'Wrong Login Details');
      }
    }

    public function adminLogout(){
      Auth::guard('admin')->logout();
        // $request->session()->invalidate();
        return redirect(route('admin.login'));
    }

    public function getAdminDashboard(){
        $dataArray      =       [];
        $dataArray['user_count']=User::all()->count();
        $dataArray['player_count']=Player::all()->count();
        $dataArray['product_count']=Products::all()->count();
        $dataArray['team_count']=Team::all()->count();
        $dataArray['com_auction_count']=CommodityAuction::all()->count();
        $dataArray['cricket_auction_count']=CricketAuction::all()->count();
        $data=["User Count","Player Count","Product Count","Team Count","Commodity Auction Count","Cricket Auction Count"];
        return view('admin_dashboard')->with('dataArray',$dataArray)->with('data',$data);
        
    }

    public function getAllProducts(){
      $products=Products::all();
      return view('BackEnd/products')->with('products',$products);
    }

    public function verifyProducts($id){
      $product=Products::where('id',$id)->first();
      if($product->verified==0){
        $dataArray      =       array(
            'verified'=>'1',
          );
        }
        else{
          $dataArray      =       array(
              'verified'=>'0',
            );
        }
        $isProductUpdated=Products::where('id',$id)->update($dataArray);
        if(!is_null($isProductUpdated)) {
            return back()->with("success", "Success! Product verified");
        }
        else {
            return back()->with("failed", "Alert! Failed to verify");
        }
    }

    public function addProductForAuction(Request $request){
      $dataArray= array(
        'product_id'=>$request->product_id,
        'auction_starts_at'=>$request->auction_starts_at,
        'auction_ends_at'=>$request->auction_ends_at
      );
      $auction=CommodityAuction::create($dataArray);
      if(!is_null($auction)) {
          $dataArray      =       array(
            'added_for_auction'=>'1',
          );
          Products::where('id',$request->product_id)->update($dataArray);
          return back()->with("success", "Success! Product added to auction");
      }
      else {
          return back()->with("failed", "Alert! Failed to add");
      }

    }

    public function getAuctionProducts(){
      $commodity_auctions=CommodityAuction::all();
      return view('BackEnd/commodity_auction')->with('commodity_auctions',$commodity_auctions);
    }

    public function manipulatejson(){
      $path = public_path() . "\json\commodity_auction.json";
      $json = json_decode(file_get_contents($path), true);
      $json["product_id"]=1;
      $jsonString=json_encode($json);
      file_put_contents($path, $jsonString);
    }

    public function getAllUsers(){
      $users=User::all();
      return view('BackEnd/users')->with('users',$users);
    }

    public function verifyUsers($id){
      $user=User::where('id',$id)->first();
      if($user->verified==0){
        $dataArray      =       array(
            'verified'=>'1',
          );
        }
        else{
          $dataArray      =       array(
              'verified'=>'0',
            );
        }
        $isUserUpdated=User::where('id',$id)->update($dataArray);
        if(!is_null($isUserUpdated)) {
            return back()->with("success", "Success! Product verified");
        }
        else {
            return back()->with("failed", "Alert! Failed to verify");
        }
    }

    public function getAllTeams(){
      $teams=Team::all();
      return view('BackEnd/teams')->with('teams',$teams);
    }

    public function getAllPlayers(){
      $players=Player::all();
      return view('BackEnd/players')->with('players',$players);
    }

    public function verifyPlayers($id){
      $player=Player::where('id',$id)->first();
      if($player->verified==0){
        $dataArray      =       array(
            'verified'=>'1',
          );
        }
        else{
          $dataArray      =       array(
              'verified'=>'0',
            );
        }
        $isPlayerUpdated=Player::where('id',$id)->update($dataArray);
        if(!is_null($isPlayerUpdated)) {
            return back()->with("success", "Success! Product verified");
        }
        else {
            return back()->with("failed", "Alert! Failed to verify");
        }
    }

    public function addPlayerForAuction(Request $request){
      $dataArray= array(
        'player_id'=>$request->player_id,
        'auction_starts_at'=>$request->auction_starts_at,
        'auction_ends_at'=>$request->auction_ends_at
      );
      $auction=CricketAuction::create($dataArray);
      if(!is_null($auction)) {
          $dataArray      =       array(
            'added_for_auction'=>'1',
          );
          Player::where('id',$request->player_id)->update($dataArray);
          return back()->with("success", "Success! player added to auction");
      }
      else {
          return back()->with("failed", "Alert! Failed to add");
      }

    }

    public function getAuctionPlayers(){
      $cricket_auctions=CricketAuction::all();
      return view('BackEnd/cricket_auction')->with('cricket_auctions',$cricket_auctions);
    }
}
