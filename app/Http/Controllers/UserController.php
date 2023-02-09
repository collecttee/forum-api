<?php
namespace App\Http\Controllers;
use App\Members;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function getUserInfo($address) {
        $ret = Members::where('addrsss',$address)->groups();
        return response()
            ->json(['status'=>0,'data'=>$ret]);
    }
}
