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
Route::get('/test', function () {
    return str_random(5);
});

/**
 * 惠氏答题活动
 */
Route::group(['middleware' => 'wechat.oauth', 'prefix' => 'hs'], function () {
    Route::get('/', function(){
        return view('hs/welcome');
    });
    Route::get('/user', function () {
        $user = session('wechat.oauth_user');
        dd($user);
    });
});
Route::get('/question','Hs\\QuestionController@index');
Route::get('/result/{quantity}', 'Hs\\QuestionController@result');

Route::group(['namespace' => 'Vend'], function () {
    //自动贩卖机项目
    //入口
    Route::any('/wechat', 'WechatController@serve');
    //上传二维码图片
    Route::get('/wechat/image', 'MaterialController@image');
    //自定义菜单
    Route::get('/wechat/menu', 'MenuController@menu');
});
