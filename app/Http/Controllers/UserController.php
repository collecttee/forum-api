<?php
namespace App\Http\Controllers;
use App\Groups;
use App\Members;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function getUserInfo($address) {
        $ret = Members::where('address',$address)->first(['posts','id_group']);
        if ($ret->id_group == 0) {
            $ret->id_group = 4;
        }
        $group = Groups::where('id_group',$ret->id_group)->first(['group_name']);
        return response()
            ->json(['status'=>0,'data'=>['posts'=>$ret->posts,'group_name'=>$group->group_name]]);
    }
}
