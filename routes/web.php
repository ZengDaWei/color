<?php

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

Route::get('/', function () {
    $result = \App\Services\VideoService::uploadVideoByVideoUrl('https://cv.phncdn.com/videos/201909/13/248140321/720P_1500K_248140321.mp4?m86mCjhUqT289TXryjXLAzmLVmYbd0ZfcW17c791wjHP6r2kaAL7dWN2IFfy5YEAP4g8XAxL_54Rj57xEcPGotSW6ki16gRiI2xgqB_WCos7bfhSSBVtsox46WYzDU0M12qQyyV6wa61GE4jTbmMdmjwUU6ke2Q4q3alICaF4md79-15YMAfXdkGCTWZcpMKJ9WCUTTlxx4');
    dd($result);
    return '此站点已经关闭';
});
