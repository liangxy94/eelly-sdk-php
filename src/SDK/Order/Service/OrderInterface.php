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

namespace Eelly\SDK\Order\Service;

use Eelly\DTO\UidDTO;

/**
 * 订单.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface OrderInterface
{
    /**
     * 新增订单
     * 新增订单信息
     *
     * @param array $orderData 订单数据
     * @param int $orderData["0"]["storeId"] 店铺id
     * @param array $orderData["0"]["goodsIds"] 商品数据
     * @param int $addrId 用户地址id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @requestExample({
     *     "orderData":[
     *         {
     *             "storeId":1,
     *             "goodsIds":[1, 2, 3]
     *         }
     *     ],
     *     "addrId":3
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月25日
     */
    public function addOrder(array $orderData, int $addrId, UidDTO $user = null): bool;

    /**
     * 修改订单
     * 修改订单信息
     *
     * @param array $orderData 订单数据
     * @param int $orderData["orderId"] 订单id
     * @param int $orderData["updateType"] 修改类型 1修改订单金额 2修改订单运费
     * @param int $orderData["updateValue"] 修改的值
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @requestExample({
     *     "orderData":{
     *         "orderId":1,
     *         "updateType":1,
     *         "updateValue":12
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月25日
     */
    public function updateOrder(array $orderData, UidDTO $user = null): bool;

    /**
     * 删除订单
     * 删除订单
     *
     * @param int $orderId 订单id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @requestExample({
     *     "orderId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月25日
     */
    public function deleteOrder(int $orderId, UidDTO $user = null): bool;

    /**
     * 获取订单信息
     * 获取订单信息
     *
     * @param int $orderId 订单id
     * @return array 订单信息
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @requestExample({
     *     "orderId":1
     * })
     * @returnExample({
     *     "orderId":1,
     *     "orderSn":"xxxxxxx",
     *     "orderAmount":123,
     *     "freight":123,
     *     "commission":0,
     *     "discountAmount":0,
     *     "logisticsName":"配送方式",
     *     "createdTime":"1970-01-01 01:01:01",
     *     "sellerInfo":{
     *         "storeName":"店铺名称",
     *         "sellerName":"卖家名称",
     *         "phone":"13xxxxxxxx"
     *     },
     *     "buyerInfo":{
     *         "nickname":"买家昵称",
     *         "consignee":"收货人",
     *         "address":"收货地址",
     *         "phone":"13xxxxxxxx"
     *     },
     *     "goodsInfo":[
     *         {
     *             "goodsId":1,
     *             "goodsImage":"http://image.eelly.test/abc.jpg",
     *             "goodsName":"商品名称",
     *             "goodsNumber":"货号",
     *             "singlePrice":"123",
     *             "specInfo":[
     *                 {
     *                     "color":"颜色",
     *                     "size":"尺码",
     *                     "price":123,
     *                     "quantity":1
     *                 }
     *             ],
     *             "goodsCount":2,
     *             "totalPrice":10.00
     *         }
     *     ]
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月25日
     */
    public function getOrderInfo(int $orderId): array;
}
