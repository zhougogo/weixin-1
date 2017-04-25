<?php

use App\Models\Vend_user;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', function ()
{
	return 'true';
});

Route::group(['middleware' => 'wechat.oauth'], function () {
});

Route::group(['namespace' => 'Vend'], function ()
{
	//自动贩卖机项目
	//入口
	Route::any('/wechat', 'WechatController@serve');
	//上传二维码图片
	Route::get('/wechat/image', 'MaterialController@image');
});
