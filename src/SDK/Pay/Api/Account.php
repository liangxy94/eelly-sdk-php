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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\DTO\AccountDTO;
use Eelly\SDK\Pay\Service\AccountInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Account implements AccountInterface
{
    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * 获取一条价格记录.
     *
     * @param int $userId 历史记录ID
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return AccountDTO
     * @requestExample({'userId':1})
     * @returnExample({"paId": 1, "userId": 1, "storeId": 2, "money": "2", "commissionRatio": 3,"status":1,"alipayAccount":'',"wechatPurseOpenId":'' ,"createdTime": "2017-09-04 16:07:05"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月15日
     * @Validation(
     *      @OperatorValidator(0,{message : "日志ID",operator:["gt",0]})
     * )
     */
    public function getAccount(int $userId): AccountDTO
    {
        return EellyClient::request('pay/account', 'getAccount', $userId);
    }
}
