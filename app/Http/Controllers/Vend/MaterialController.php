<?php

namespace App\Http\Controllers\Vend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use App\Models\Qrcode as Code;
class MaterialController extends Controller
{
    public $material;

    public function __construct(Application $material)
    {
    	$this->material = $material->material;
    }
    //上传贩卖机领奖二维码
    public function image()
    {
    	$qrcode = Code::where('isupload', 0)->first();
    	QrCode::format('png')->size(250)->generate($qrcode->code, public_path('vend/'.$qrcode->code.'.png'));
    	$result = $this->material->uploadImage(public_path('vend/'.$qrcode->code.'.png'));
    	$result = json_decode($result);
    	$qrcode->media_id = $result->media_id;
    	$qrcode->save();

    	return $result->media_id;
    }
}
