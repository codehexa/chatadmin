<?php

namespace App\Http\Controllers;

use App\Models\Notices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticesController extends Controller
{
    //
    public function getList(){
        $data = Notices::orderBy('updated_at','desc')->paginate(20);

        return view('notices',['data'=>$data]);
    }

    public function newPost(){
        return view('notice_post');
    }

    public function savePost(Request $request){
        $user = Auth::user();

        $updata = new Notices();

        $updata->us_id = $user->id;
        $updata->notice_title = $request->get("up_title");
        $updata->notice_text = $request->get("up_text");
        $updata->notice_hits = "0";
        $updata->notice_file_cnt = "0";

        try {
            $updata->save();

            return redirect("/notices");
        }catch (\Exception $exception){
            return redirect()->back()->withErrors(["msg"=>"upload failed"]);
        }
    }
}
