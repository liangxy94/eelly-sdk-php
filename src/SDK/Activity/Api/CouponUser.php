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

namespace Eelly\SDK\Activity\Api;

use Eelly\DTO\CouponUserDTO;
use Eelly\SDK\Activity\Service\CouponUserInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class CouponUser implements CouponUserInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponUser(int $couponUserId): CouponUserDTO
    {
        return EellyClient::request('activity/couponuser', 'getCouponUser', $couponUserId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponUser(array $data): bool
    {
        return EellyClient::request('activity/couponuser', 'addCouponUser', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponUser(int $couponUserId, array $data): bool
    {
        return EellyClient::request('activity/couponuser', 'updateCouponUser', $couponUserId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponUser(int $couponUserId): bool
    {
        return EellyClient::request('activity/couponuser', 'deleteCouponUser', $couponUserId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponUserPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/couponuser', 'listCouponUserPage', $condition, $limit, $currentPage);
    }

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
}
