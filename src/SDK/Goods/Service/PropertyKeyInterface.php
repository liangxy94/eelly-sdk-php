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

namespace Eelly\SDK\Goods\Service;

/**
 * 商品属性名.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface PropertyKeyInterface
{
    /**
     * 新增商品属性名
     * 新增商品属性名
     *
     * @param array $keyData 商品属性名数据
     * @param string $keyData["name"] 属性名
     * @param int $keyData["sort"] 排序
     * @param int $keyData["status"] 状态 0 无效 1 有效
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "keyData":{
     *         "name":"属性名",
     *         "sort":1,
     *         "status":1
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月23日
     */
    public function addPropertyKey(array $keyData): bool;

    /**
     * 修改商品属性名
     * 修改商品属性名
     *
     * @param array $keyData 商品属性名数据
     * @param int $keyData["keyId"] 商品属性名id
     * @param string $keyData["name"] 属性名
     * @param int $keyData["sort"] 排序
     * @param int $keyData["status"] 状态 0 无效 1 有效
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "keyData":{
     *         "keyId":1,
     *         "name":"属性名",
     *         "sort":1,
     *         "status":1
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月23日
     */
    public function updatePropertyKey(array $keyData): bool;

    /**
     * 删除商品属性名
     * 删除商品属性名
     *
     * @param int $keyId 商品属性名id
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "keyId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月23日
     */
    public function deletePropertyKey(int $keyId): bool;

    /**
     * 获取商品属性名信息
     * 获取商品属性名信息
     *
     * @param int $keyId 商品属性名id
     * @return array 商品属性名信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "keyId":1
     * })
     * @returnExample({
     *     "keyId":1,
     *     "name":"属性名",
     *     "values":[
     *         {
     *             "valueId":1,
     *             "value":"属性值",
     *             "remark":"描述",
     *             "extends":"拓展字段"
     *         }
     *     ]
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月23日
     */
    public function getPropertyKey(int $keyId): array;
}
