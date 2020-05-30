<?php
/**
 * Created by PhpStorm.
 * User: NickBai
 * Email: 876337011@qq.com
 * Date: 2019/6/21
 * Time: 9:54 PM
 */
return [

    // socket.io 端口
    'socket_port' => 2020,

    // http api 端口
    'http_port' => 2945,

    // api接口
    'api_url' => 'https://cc.tmslyhh.com/index/test/receive',

    // 当前系统域名
    'domain' => 'https://cc.tmslyhh.com',

    // 弹层模式是否校验域名 0 不校验 1 校验
    'default_box_link_flag' => 1,

    // 直连模式校验接入域名 0 不校验 1 校验
    'default_link_flag' => 0,

    // 是否开启客服只允许单点登录 0 不开启 1 开启,
    // 切换需要重启 socket.io
    'single_login' => 1,

    // 是否开启 ssl
    'is_open_ssl' => true,

    // ssl 上下文
    'context' => [
        'ssl' => [
            'local_cert'  => '/www/server/panel/vhost/cert/cc.tmslyhh.com/fullchain.pem', // 服务器的证书绝对路径
            'local_pk'    => '/www/server/panel/vhost/cert/cc.tmslyhh.com/privkey.pem', // 服务器的证书绝对路径
            'verify_peer' => false,
        ]
    ],
];