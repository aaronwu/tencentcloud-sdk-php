<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Es\V20180416;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Es\V20180416\Models as Models;

/**
* @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 创建指定规格的ES集群实例
* @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 销毁集群实例 
* @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询用户该地域下符合条件的所有实例
* @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) 重启ES集群实例(用于系统版本更新等操作) 
* @method Models\UpdateInstanceResponse UpdateInstance(Models\UpdateInstanceRequest $req) 对已存在的集群进行扩缩容，修改实例名称，修改配置，重置密码， 添加Kibana黑白名单等操作 
 */

class EsClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "es.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-16";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("es")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
