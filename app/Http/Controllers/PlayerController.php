<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Player;
use App\Models\Products;
use App\Models\Team;
use App\Models\CommodityAuction;
use App\Models\CricketAuction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //
    public function getPlayerRegistrationPage(){
        return view('player_registration');
    }

    public function getPlayerLoginPage(){
        return view('player_login');
    }

    public function playerSignup(Request $request){
        $dataArray      =       array(
              "first_name"          =>          $request->fname,
              "last_name"          =>          $request->lname,
              "age"         =>          $request->age,
              "country"         =>          $request->country,
              "nationality"         =>          $request->nat,
              "skillset"         =>          $request->skill,
              "base_price"         =>          $request->bprice,
              "mobile"         =>          $request->number,
              "email"         =>          $request->email,
              "identity_proof_number"         =>          $request->uid,
              "username"         =>          $request->uname,
              "total_matches"         =>          $request->matches,
              "total_innings"         =>          $request->innings,
              "total_runs"         =>          $request->runs,
              "total_wickets"         =>          $request->wicket,
              "fifties"         =>          $request->fifties,
              "fifer"         =>          $request->fifer,
              "strike_rate"         =>          $request->strike_rate,
              "hundreds"         =>          $request->hundreds,
              "economy"         =>          $request->economy,
              "email"         =>          $request->email,
              "email"         =>          $request->email,
              "email"         =>          $request->email,
              "password"      =>          Hash::make($request->pass)
          );
          if ($request->hasFile('image')) {
                $files=$request->file('image');
                $name=$files->getClientOriginalName();
                $files->move('images/player_images',$name);
                $dataArray["image_link"]=$name;
            }
          $user=Player::create($dataArray);
          if(!is_null($user)) {
              return back()->with("success", "Success! Registration completed");
          }
          else {
              return back()->with("failed", "Alert! Failed to register");
          }
      }

    public function playerSignin(Request $request){

        $dataArray      =       array(
              "username"         =>          $request->uname,
              "password"      =>          $request->pass
          );
  
        if ($token = auth('player')->attempt($dataArray)) {
            //   $request->session()->regenerate();
              return redirect(route('player_dashboard'));
          }
        else{
          return back()->with('error', 'Wrong Login Details');
        }
      }

    public function playerLogout(Request $request){
        Auth::guard('player')->logout();
        // $request->session()->invalidate();
        return redirect(route('player_login'));
    }

    public function getPlayerDashboard(){
      if(!auth("player")->check()){
        return redirect(route('player_login'));
      }

        $id=auth('player')->id();
        $player=Player::where('id',$id)->first();
        $auction=CricketAuction::where('player_id',$id)->first();
        $flag=0;
        if($auction){
          $current = Carbon::now();
          $player["auction_details"]=$auction;
          if($auction->auction_starts_at<=$current && $auction->auction_ends_at>$current){
            $flag=1;
          }
          else if($auction->auction_starts_at>=$current)
            $flag=2;
          else
            $flag=3;
        }

        return view('player_dashboard')->with('player',$player)->with('flag',$flag);
  }


}
