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
    $result = \App\Services\VideoService::uploadVideoByVideoUrl('https://dv.phncdn.com/videos/201908/19/242810871/480P_600K_242810871.mp4?ttl=1582100246&ri=1228800&rs=4000&hash=2548fa567b93990c50158046dc84754f',\App\User::find(1));
    dd($result);
    return '此站点已经关闭';
});
