<?php

namespace App\Http\Controllers\Vend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vend_user;
use App\Models\Qrcode;
use EasyWeChat\Message\Image;

class WechatController extends Controller
{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        // Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $wechat = app('wechat');
        $wechat->server->setMessageHandler(function($message){
            switch ($message->MsgType) {
                case 'event':
                    if ($message->Event == 'subscribe') {
                        $weixinuser = new Vend_user;
                        $weixinuser->openid = $message->FromUserName;
                        $weixinuser->save();
                    }
                    return "欢迎关注我们的微信公众号！回复关键字 起初礼品申领 领取礼品二维码。";
                    break;
                case 'text':
                    if ($message->content == '1') {
                        $openid = $message->FromUserName;
                        $user = Vend_user::where('openid', $openid)->first();
                        $
                        if ($user->isnew == 1) {
                            $qrcode = Qrcode::where('status', 0)->first();
                            $qrcode->status = 1;
                            $qrcode->save();
                            $user->isnew = 0;
                            $user->save();
                            return new Image(['media_id' => $qrcode->media_id]);
                        }else{
                            return "您已经领取过起初礼品二维码";
                        }
                    }
                    // return "欢迎关注我们的微信公众号！回复关键字 起初礼品申领 领取礼品二维码。";
                    return $message->content;
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }
        });

        // Log::info('return response.');

        return $wechat->server->serve();
    }
}
