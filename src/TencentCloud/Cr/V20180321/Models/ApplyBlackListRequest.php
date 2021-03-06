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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getModule() 获取模块
 * @method void setModule(string $Module) 设置模块
 * @method string getOperation() 获取操作
 * @method void setOperation(string $Operation) 设置操作
 * @method array getBlackList() 获取黑名单列表
 * @method void setBlackList(array $BlackList) 设置黑名单列表
 */

/**
 *ApplyBlackList请求参数结构体
 */
class ApplyBlackListRequest extends AbstractModel
{
    /**
     * @var string 模块
     */
    public $Module;

    /**
     * @var string 操作
     */
    public $Operation;

    /**
     * @var array 黑名单列表
     */
    public $BlackList;
    /**
     * @param string $Module 模块
     * @param string $Operation 操作
     * @param array $BlackList 黑名单列表
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("BlackList",$param) and $param["BlackList"] !== null) {
            $this->BlackList = [];
            foreach ($param["BlackList"] as $key => $value){
                $obj = new SingleBlackApply();
                $obj->deserialize($value);
                array_push($this->BlackList, $obj);
            }
        }
    }
}
