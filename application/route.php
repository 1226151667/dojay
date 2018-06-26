<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use \think\Route;
Route::bind('index/Index');
Route::rule('news/[:id]', 'index/Index/news', 'GET',[], ['id'=>'[1-9]\d*']);
Route::rule('service/:cate', 'index/Index/service', 'GET',[], ['cate'=>'\w+']);