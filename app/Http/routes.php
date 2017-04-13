<?php

Route::group(['middleware' => ['web']], function () {
    // 当get形式访问根目录的时候，被这里拦截到并处理
    // 访问根目录的时候用这个控制器的index方法处理
    Route::get('/', 'Home\HomeController@index');
});
