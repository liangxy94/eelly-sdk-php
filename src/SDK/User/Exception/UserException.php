<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\User\Exception;

use Eelly\Exception\LogicException;

/**
 * User模块异常类.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 *
 * @since 2017-09-28
 */
class UserException extends LogicException
{
    public const OVERTAKE_ERROR = '收货地址不能超过10';
    public const TYPE_ERROR = '参数类型错误';
    public const BIND_PHONE_ERROR = '手机号码已被其他用户绑定';
    public const NO_BIND_PHONE_ERROR = '请先绑定手机号码';
    public const NO_REGISTER_PHONE_ERROR = '该手机号没有注册账号，无法收取验证码';
}