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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method float getTimeOffset() 获取该张截图对应视频文件中的时间偏移，单位：秒。
 * @method void setTimeOffset(float $TimeOffset) 设置该张截图对应视频文件中的时间偏移，单位：秒。
 * @method string getUrl() 获取该张截图的 URL 地址。
 * @method void setUrl(string $Url) 设置该张截图的 URL 地址。
 * @method array getWaterMarkDefinition() 获取截图如果被打上了水印，被打水印的模板 ID 列表。
 * @method void setWaterMarkDefinition(array $WaterMarkDefinition) 设置截图如果被打上了水印，被打水印的模板 ID 列表。
 */

/**
 *指定时间点截图信息
 */
class MediaSnapshotByTimePicInfoItem extends AbstractModel
{
    /**
     * @var float 该张截图对应视频文件中的时间偏移，单位：秒。
     */
    public $TimeOffset;

    /**
     * @var string 该张截图的 URL 地址。
     */
    public $Url;

    /**
     * @var array 截图如果被打上了水印，被打水印的模板 ID 列表。
     */
    public $WaterMarkDefinition;
    /**
     * @param float $TimeOffset 该张截图对应视频文件中的时间偏移，单位：秒。
     * @param string $Url 该张截图的 URL 地址。
     * @param array $WaterMarkDefinition 截图如果被打上了水印，被打水印的模板 ID 列表。
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
        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("WaterMarkDefinition",$param) and $param["WaterMarkDefinition"] !== null) {
            $this->WaterMarkDefinition = $param["WaterMarkDefinition"];
        }
    }
}
