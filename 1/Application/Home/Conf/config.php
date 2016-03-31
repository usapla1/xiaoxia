<?php
return array(
    'DEFAULT_MODULE'            => 'Index', //默认模块
    'URL_MODEL'                 => '3', //URL模式
    'SESSION_AUTO_START'        => true, //是否开启session
    'APP_AUTOLOAD_REG'          => true,
    'LOG_SQL'                   => true,
    'LOG_PATH'                  => "E:/logs/yun/",
    'UPLOAD_PATH'               => "E:/www/upload.coobar.cn/",
    'IS_TEST'                   => true,
    'CUSTOM'                    => 0,

    'DB_TYPE'                   => 'mysqli',
    'DB_HOST'                   => '127.0.0.1',
    'DB_PORT'                   => 19306,
    'DB_NAME'                   => 'xiaoxia',
    'DB_USER'                   => 'root',
    'DB_PWD'                    => 'j33mqXT5ARXXuP5w',
    'DB_PREFIX'                 => 'cb_',
    'DB_DEBUG'                  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

    'WEIXIN_API_HOST'          => 'weixin.coobar.cn',
    'WEIXIN_API_PORT'          => 80,
    'WEIXIN_API_PATH'          => '/Index/IndexLogin',
    'WEIXIN_API_ID'            => 5,
    'WEIXIN_API_KEY'           => '',
    'WEIXIN_API_VER'           => 'v4.0.0',
);