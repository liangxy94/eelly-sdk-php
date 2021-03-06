<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\RegionInterface;
use Eelly\SDK\SYSTEM\DTO\RegionDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Region implements RegionInterface
{

    /**
     * 根据传过来的主键id，返回对应的网格化区域信息.
     *
     * @param int $gbCode 区域国标编码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"gbCode":1})
     * @returnExample({"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function getRegion(int $gbCode): RegionDTO
    {
        return EellyClient::request('system/region', 'getRegion', $gbCode);
    }

    /**
     * 新增网格化区域信息记录.
     *
     * @param array  $data               网格化区域信息数据
     * @param int    $data['gbCode']     区域国标编码
     * @param string $data['areaName']   区域名称
     * @param string $data['shortName']  区域简称
     * @param int    $data['parentCode'] 上级编码
     * @param string $data['telCode']    电话区号
     * @param int    $data['zipCode']    邮政编码
     * @param int    $data['regionCode'] 区域所属片区
     * @param UidDTO $user               登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function addRegion(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/region', 'addRegion', $data);
    }

    /**
     * 更新网格化区域信息记录.
     *
     * @param int    $gbCode             区域国标编码
     * @param array  $data               网格化区域信息数据
     * @param string $data['areaName']   区域名称
     * @param string $data['shortName']  区域简称
     * @param int    $data['parentCode'] 上级编码
     * @param string $data['telCode']    电话区号
     * @param int    $data['zipCode']    邮政编码
     * @param int    $data['regionCode'] 区域所属片区
     * @param UidDTO $user               登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"gbCode":110000,"data":{"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function updateRegion(int $gbCode, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/region', 'updateRegion', $gbCode, $data);
    }

    /**
     * 分页获取网格化区域信息列表.
     *
     * @param array $condition               查询条件
     * @param int   $condition['parentCode'] 上级编码
     * @param int   $condition['telCode']    电话区号
     * @param int   $condition['zipCode']    邮政编码
     * @param int   $currentPage             页码
     * @param int   $limit                   分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * items                  |array  |
     * items["gbCode"]        |int    | 区域国标编码
     * items["areaName"]      |string | 区域名称
     * items["shortName"]     |string | 区域简称
     * items["parentCode"]    |string | 上级编码
     * items["telCode"]       |int    | 电话区号
     * items["zipCode"]       |int    | 邮政编码
     * items["regionCode"]    |string | 区域所属片区
     * page                   |array  |
     * page[first]            |int    | 第一页
     * page[before]           |int    | 上一页
     * page[current]          |int    | 当前页
     * page[last]             |int    | 最后一页
     * page[next]             |int    | 下一页
     * page[total_pages]      |int    | 总页数
     * page[total_items]      |int    | 总数
     * page[limit]            |int    | 每页显示的数量
     *
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"parentCode": 1,"telCode":"00852","zipCode":100000}],"currentPage": "1","limit": "20"])
     * @returnExample(["items": [{"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,
     *     "regionCode":""}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function listRegionPage(array $condition = [], int $currentPage = 1, int $limit = 20): array
    {
        return EellyClient::request('system/region', 'listRegionPage', $condition, $currentPage, $limit);
    }
    
    /**
     * 根据传过来的gbCode，返回对应的地址信息
     *
     * @param int $gbCode  区域国标编码
     *
     * @return array
     * @requestExample({"gbCode":1})
     * @returnExample({"gbCode":"4401","areaName":"广东省.广州市","shortName":"广东.广州"})
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since  2017-10-31
     */
    public function getUserAddressByGbCode(int $gbCode): array
    {
        return EellyClient::request('system/region', __FUNCTION__, $gbCode);
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