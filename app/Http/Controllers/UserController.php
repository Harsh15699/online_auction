<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Products;
use App\Models\CommodityAuction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth:user',['only'=>['getUserDashboard','getUserProducts']]);
    }

    public function getUserRegistrationPage(){

        return view('user_registration');

    }

    public function getUserLoginPage(){
      if (auth('user')->check()) {
          return redirect(route('user_dashboard'));
      }
      else{
        return view('user_login');
      }

    }

    public function getUserDashboard(){
          $id=auth('user')->id();
          $user=User::where('id',$id)->first();
          $current = Carbon::now();
          $commodity_auctions=CommodityAuction::all();
          $current_auction=null;
          $i=0;
          $path = public_path() . "\json\commodity_auction.json";
          $json = json_decode(file_get_contents($path), true);
          foreach($commodity_auctions as $commodity_auction){
            $product=Products::where('id',$commodity_auction->product_id)->first();
            $commodity_auction["product_detail"]=$product;
            if($commodity_auction->auction_starts_at<=$current && $commodity_auction->auction_ends_at>$current){
              $current_auction=$commodity_auction;
              $json["auction_id"]=$current_auction->id;
              $json["product_id"]=$current_auction->product_id;
              $json["base_price"]=$current_auction->product_detail->base_price;
              $json["seller_id"]=$current_auction->product_detail->seller_id;
              break;
            }
            $i++;
          }
          $jsonString=json_encode($json);
          file_put_contents($path, $jsonString);
          return view('user_dashboard')->with('user',$user)->with('current_auction',$current_auction);
    }

    public function userSignup(Request $request){
      $dataArray      =       array(
            "first_name"          =>          $request->fname,
            "last_name"          =>          $request->lname,
            "email"         =>          $request->email,
            "password"      =>          Hash::make($request->pass)
        );
        $user=User::create($dataArray);
        if(!is_null($user)) {
            return back()->with("success", "Success! Registration completed");
        }
        else {
            return back()->with("failed", "Alert! Failed to register");
        }
    }

    public function userSignin(Request $request){

      $dataArray      =       array(
            "email"         =>          $request->email,
            "password"      =>          $request->pass
        );

      if ($token = auth('user')->attempt($dataArray)) {
            $request->session()->regenerate();
            return redirect(route('user_dashboard'));
        }
      else{
        return back()->with('error', 'Wrong Login Details');
      }
    }

    public function userLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect(route('user_login'));
    }

    public function userProfileUpdate(Request $request){
      $dataArray      =       array(
            "first_name"          =>          $request->fname,
            "last_name"          =>          $request->lname,
            "email"         =>          $request->email,
            "mobile"         =>          $request->mobile,
            "address"         =>          $request->address,
            "district"         =>          $request->district,
            "state"         =>          $request->state,
            "pincode"         =>          $request->pincode,
            "age"         =>          $request->age,
            "gender"         =>          $request->gender
        );
        $id=auth('user')->id();
        $user=User::where('id',$id)->update($dataArray);
        return back()->with("success", "Success! Registration completed");
    }

    public function getUserProducts(){
        $id=auth('user')->id();
        $products=Products::where('seller_id',$id)->get();
        foreach($products as $product){
          if($product->added_for_auction==1){
            $commodity_auction=CommodityAuction::where('product_id',$product->id)->first();
            $product["auction_details"]=$commodity_auction;
          }
        }
        return view('user_products')->with('products',$products);
    }

    public function getUserPurchase(){
      $id=auth('user')->id();
      $products=Products::where('buyer_id',$id)->get();
      return view('user_purchase')->with('products',$products);
    }

    public function addNewProduct(Request $request){
      $dataArray      =       array(
            "seller_id"       =>auth('user')->id(),
            "product_name"          =>          $request->product_name,
            "brand"          =>          $request->brand,
            "description"         =>          $request->description,
            "MRP"      =>          $request->MRP,
            "base_price"        =>$request->base_price,
            "size"        =>$request->size,
            "category"        =>$request->category,
        );
        $discount=($request->MRP-$request->base_price)*100/$request->MRP;
        $dataArray["discount"]=$discount;
        if ($request->hasFile('image')) {
            $files=$request->file('image');
            $name=$files->getClientOriginalName();
            $files->move('images/product_images',$name);
            $dataArray["product_image"]=$name;
        }
        $product=Products::create($dataArray);
        if(!is_null($product)) {
            return back()->with("success", "Success! Product added");
        }
        else {
            return back()->with("failed", "Alert! Failed to add");
        }
      }

      public function completeBiddingProcess(Request $request,$id){
          CommodityAuction::where('product_id',$id)->delete();
          $path = public_path() . "\json\commodity_auction.json";
          $json = json_decode(file_get_contents($path), true);
          $dataArray      =       array(
                "added_for_auction"         =>          '0'
            );
            if($json["current_bid"]!=0){
              $dataArray["sold"]='1';
              $dataArray["sold_price"]=$json["current_bid"];
              $dataArray["buyer_id"]=$json["last_bidder_id"];
            }
          Products::where('id',$id)->update($dataArray);
          $json["current_bid"]=0;
          $jsonString=json_encode($json);
          file_put_contents($path, $jsonString);
          
          return back()->with("success", "Success! Product deleted");
      }

      public function addBidToProduct(){
        $id=auth('user')->id();
        $path = public_path() . "\json\commodity_auction.json";
        $json = json_decode(file_get_contents($path), true);
        $json["last_bidder_id"]=$id;
        if($json["current_bid"]==0){
            $json["current_bid"]=$json["base_price"]+50;
          }
        else {
          $json["current_bid"]+=50;
        }
        $jsonString=json_encode($json);
        file_put_contents($path, $jsonString);
        return redirect(route('user_dashboard'));
      }

      public function getCurrentBid(){
        $id=auth('user')->id();
        $path = public_path() . "\json\commodity_auction.json";
        $json = json_decode(file_get_contents($path), true);
        $last_bidder_id=$json["last_bidder_id"];
        $user=User::where('id',$last_bidder_id)->first();
        $dataArray      =       array(
          "current_bid"         =>          $json["current_bid"],
          "current_bidder"         =>          0,
          "last_bidder"         =>          $user->first_name
        );
        if($id==$last_bidder_id){
          $dataArray['current_bidder']=1;
        }

        return response()->json([
          "success" => 1,
          "error" => 0,
          "data" => $dataArray
      ]);
      }

    }
