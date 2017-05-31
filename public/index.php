<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/4
 * Time: 17:35
 */

define("APPS_PATH", dirname(dirname(__FILE__)).'/apps');
define("CONFIG_PATH", APPS_PATH.'/config');
require '../vendor/autoload.php';

require '../erick/core/bootstrap.php';

require  CONFIG_PATH. '/routes.php';







