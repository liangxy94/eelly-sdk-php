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

namespace Eelly\SDK\Oauth\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Oauth\Service\ModuleInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Module implements ModuleInterface
{
    /**
     * 返回模块列表.
     *
     * @returnExample([{"module_id": "1","module_name": "user","status": "1","domain": "","created_time": "1498042082","update_time": "2017-06-21 10:51:02"}])
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function getModuleList(): array
    {
        return EellyClient::request('oauth/moduleserver', 'getModuleList');
    }

    /**
     * 根据id删除模型服务.
     *
     * @param int $id 服务service_id
     *
     * @return bool
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function deleteModulService(int $id): bool
    {
        return EellyClient::request('oauth/moduleserver', 'deleteModulService', $id);
    }

    /**
     * 返回模块列表.
     *
     * @returnExample([{"module_id": "1","module_name": "user","status": "1","domain": "","created_time": "1498042082","update_time": "2017-06-21 10:51:02"}])
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listModule(): array
    {
        // TODO: Implement listModule() method.
        return EellyClient::request('oauth/moduleserver', 'listModule');
    }

    /**
     * 返回分页模块列表.
     *
     * @param int $limit       分页页数
     * @param int $currentPage 当前页
     *
     * @return array
     * @returnExample({"items":[{"module_id":"1","module_name":"user","status":"1","domain":"","created_time":"1498042082","update_time":"2017-06-21 10:51:02"}],"page":{"first":1,"before":1,"current":1,"last":11,"next":2,"total_pages":11,"total_items":11,"limit":1}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listModulePage(int $currentPage = 1, int $limit = 10): array
    {
        // TODO: Implement listModulePage() method.
        return EellyClient::request('oauth/moduleserver', 'listModulePage', $limit, $currentPage);
    }

    /**
     * 返回模块服务列表.
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listModulService(): array
    {
        // TODO: Implement listModulService() method.
        return EellyClient::request('oauth/moduleserver', 'listModulService');
    }

    /**
     * 返回模块服务列表.
     *
     * @param int $page        当前页
     * @param int $currentPage
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listModulServicePage(int $page = 10, int $currentPage = 1): array
    {
        // TODO: Implement listModulServicePage() method.
        return EellyClient::request('oauth/moduleserver', 'listModulServicePage', $page, $currentPage);
    }
}
