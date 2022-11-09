<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banner;
use DB;

class BannerController extends Controller
{
    //

    public function getBanners(){
        $banners = Banner::all();
        return view('banners.list', compact('banners'));
    }

    public function addBanners(){
        return view('banners.create');
    }

    public function storeBanners(Request $req){
        if($req->id){

             DB::table('banners')->where('id', $req->id)->update([
                'title'=>$req->title,
                'description'=>$req->description,
                'photo' => $req->photo
             ]);
             return response()->json([
                'message' => 'Successfully Updated',
                'status' => true,
            ]);
        }
        else{
            $banners = new Banner();
            $banners->title = $req->title;
            $banners->uuid = Str::random(30);
            $banners->description = $req->description;
            $banners->photo = $req->photo;
            $banners->condition = $req->conditions;
            $banners->status = $req->status;
            $banners->save();

            return response()->json([
            'message' => 'Successfully Added',
            'status' => true,
        ]);

        }
    }

    public function updateStatus(Request $req){

        if($req->mode == "true"){
            DB::table('banners')->where('id', $req->id)->update(['status'=>'active']);
        }
        else{
            DB::table('banners')->where('id', $req->id)->update(['status'=>'inactive']);
        }

        return response()->json([
            'msg' => 'Banner Successfully updated   ',
            'status' => true,
        ]);
    }

    public function getBannerId($id){
        $banner = DB::table('banners')->select(DB::RAW('id'))->where('id', $id)->get();
        return $banner;
    }
}
