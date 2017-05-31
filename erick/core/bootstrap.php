<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/4
 * Time: 18:05
 */
use Illuminate\Database\Capsule\Manager as Capsule;

$conf = new \Noodlehaus\Config(CONFIG_PATH. '/config.php');

$debug =  $conf->get('debug');
if ( $debug )
{
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}

$capsule = new Capsule;

$capsule->addConnection(require CONFIG_PATH.'/database.php');
// 设置全局静态可访问
$capsule->setAsGlobal();
$capsule->bootEloquent();