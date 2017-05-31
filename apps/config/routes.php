<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/4
 * Time: 17:43
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('erick/admin', function() {
    echo "成功！";
});
Macaw::get('erick/index', 'IndexController@index');
Macaw::get('erick/', 'HomeController@home');

Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};

Macaw::dispatch();
