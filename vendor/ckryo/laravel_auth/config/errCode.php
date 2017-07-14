<?php

/**
 * 登录授权错误码
 * 代码范围 200 - 399
 *
 * 登录授权 200 - 299
 * 权限验证 300 - 399
 */
return [
    'auth' => [
        '200' => '授权信息验证失败, 需要重新登录',
        '201' => '账号异地登录提醒',
        '210' => '账号不存在',
        '211' => '账号密码错误',
        '212' => '账号被禁用, 无法使用',
        '240' => '当前账号不属于该平台,无法从此处登录'
    ],
    'permission' => [
        '300' => '当前账号无权进行此操作'
    ]
];