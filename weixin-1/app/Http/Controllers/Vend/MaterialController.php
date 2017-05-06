<?php

namespace App\Http\Controllers\Vend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use App\Models\Qrcode;
use SimpleSoftwareIO\QrCode\Facades\QrCode as SSQrCode;

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
    	$qrcode = QrCode::where('isupload', 0)->first();
    	SSQrCode::format('png')->size(250)->margin(2)->generate($qrcode->code, public_path('vend/'.$qrcode->code.'.png'));
    	$result = $this->material->uploadImage(public_path('vend/'.$qrcode->code.'.png'));
    	$result = json_decode($result);
    	$qrcode->media_id = $result->media_id;
        $qrcode->isupload = 1;
    	$qrcode->save();

    	return $result->media_id;
    }
}
