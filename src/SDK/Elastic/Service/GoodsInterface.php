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

namespace Eelly\SDK\Elastic\Service;


/**
 * Elastic查询商品接口.
 *
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface GoodsInterface
{
    /**
     * 检索商品信息.
     *
     * @param array $param 商品检索数组参数
     * @return array   商品检索返回结果
     * @requestExample({"core":"user","sArray":[{"field":"realname","keyword":"\u6881\u65b0\u5b9c"},{"field":"email","keyword":"qq.com"}],"sortArray":{"regTime":"desc"},"locationSearch":{"field":"local","lat":39.909999999999997,"lon":116.41667,"distance":1000},"sRows":80,"sStart":0,"fArray":{"status":1},"spWord":"1","facets":["uiId","gpvId"],"query":"gender:2","clear":1})
     * @returnExample({"numFound":10,"docs":[{"username":"liangxinyi8525917","realname":"\u6881\u65b0\u5b9c8525917","email":"8525917@qq.com","mobile":"13588525917","creditMark":32,"regTime":1507567070,"status":1,"regType":4,"flag":1,"gender":2,"regChannel":1,"uiId":8,"gcId":852,"gpvId":231,"districtId":241,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi8793129","realname":"\u6881\u65b0\u5b9c8793129","email":"8793129@qq.com","mobile":"13588793129","creditMark":64,"regTime":1507567070,"status":0,"regType":4,"flag":1,"gender":0,"regChannel":1,"uiId":5,"gcId":880,"gpvId":145,"districtId":822,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi7956893","realname":"\u6881\u65b0\u5b9c7956893","email":"7956893@qq.com","mobile":"13587956893","creditMark":64,"regTime":1507567070,"status":2,"regType":1,"flag":1,"gender":1,"regChannel":1,"uiId":8,"gcId":40,"gpvId":285,"districtId":455,"location":{"lat":39.916670000000003,"lon":116.41667}}],"facetData":{"gpvId":{"145":1,"227":1,"231":1,"284":1,"285":1,"423":1,"442":1,"657":1,"702":1,"935":1},"uiId":{"8":3,"1":2,"5":2,"4":1,"7":1,"10":1}}})
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-10
     */
    public function searchGoods(array $param = null):array;


    /**
     * 添加商品索引信息.
     *
     * @param int $docs[]['goodsId']  商品索引id,必须,其他字段参考配置
     * @return bool 返回bool值
     * @requestExample()
     * @returnExample()
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-10
     */
    public function putGoods(array $docs):bool;

    /**
     * 创建商品索引类型mapping映射.
     *
     * @return bool 返回bool结果
     * @requestExample()
     * @returnExample(true)
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-09
     */
    public function createGoodsType():bool;

    /**
     * 根据goodsId删除商品索引信息.
     *
     * @param array $goodsIds  商品goodsId
     * @return bool 返回bool结果
     * @requestExample({"goodsIds":[1,2,3]})
     * @returnExample(true)
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-10
     */
    public function deleteGoods(array $goodsIds):bool;

    /**
     * 清空商品索引的所有数据.
     *
     * @return bool 返回bool值
     * @requestExample()
     * @returnExample(true)
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-10
     */
    public function clearGoods():bool;


    /**
     * 更新商品索引信息--可局部更新.
     *
     * @param array $docs 二维商品信息数组
     * @param int $docs[]['goodsId']  商品索引id,必须,其他字段参考配置
     * @return bool 返回bool值
     * @requestExample({"docs":[{"id":1,"doc":{"username":"梁新宜"}},{"id":2,"doc":{"username":"liangxinyi"}}]})
     * @returnExample(true)
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-10
     */
    public function updateGoods(array $docs):bool;


    /**
     * 初始化商品索引--加载数据存储.
     * php-fpm下运行的是单进程初始化，cli下运营的是多进程初始化.
     *
     * @return bool 返回bool值
     * @requestExample({"docs":[{"id":1,"doc":{"goodsname":"梁新宜"}},{"id":2,"doc":{"goodsname":"liangxinyi"}}]})
     * @returnExample(true)
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-10
     */
    public function initGoods();

}