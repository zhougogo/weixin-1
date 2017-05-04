<?php

namespace App\Http\Controllers\Hs;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {
//      随机抽取4道问题
        $questions = Question::all()->random(4);
        return view('hs/index', compact('questions'));
    }

    public function result($quantity)
    {
        $user = session('wechat.oauth_user');
        $openid=Result::where('openid', $user['id']);
        if ($openid !==null){
//            已经答过题了
            return view('hs/fail');
        }
//        保存信息

        $prize_code = str_random(5);
        $result = new Result;
        $result->openid =$user['id'];
        $result->nickname=$user['nickname'];
        $result->headimgurl=$user['headimgurl'];
        $result->quantity=$quantity;
        $result->prize_code=$prize_code;
        $result->save();

//        根据答对数量返回不同页面
        switch ($quantity) {
            case 0:
                return view('hs/result0');
                break;
            case 1:
            case 2:
            case 3:
                return view('hs/result1');
                break;
            case 4:
                return view('hs/result2');
                break;
            default:
                return '请按流程答题！！';
                break;
        }
    }
}
