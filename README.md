完整的mvc-web架构系统
=====
### 目录结构： 
    apps--   
    config
    controllers  
    models   
    services   
    views   
    erick--  
    core   
    library   
    vendor--  
    插件目录   
### 系统介绍
    本系统包括web常用的mvc架构
    主要插件如下
    "require": {
    "noahbuscher/macaw":"dev-master",
    "illuminate/database": "*",
    "filp/whoops": "*",
    "hassankhan/config":"0.10.0",
    "predis/predis": "*",
    "char0n/ffmpeg-php": "dev-master"
    }
    建立表
    CREATE TABLE `articles` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(255) DEFAULT NULL,
    `content` longtext,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
    功能函数在目录library下：function.php文件中。
