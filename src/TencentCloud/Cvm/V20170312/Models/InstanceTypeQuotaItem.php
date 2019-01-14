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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method string getInstanceChargeType() 获取实例计费模式。取值范围： <br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费<br><li>CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对CDH计费，不对CDH上的实例计费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式。取值范围： <br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费<br><li>CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对CDH计费，不对CDH上的实例计费。
 * @method integer getNetworkCard() 获取网卡类型，例如：25代表25G网卡
 * @method void setNetworkCard(integer $NetworkCard) 设置网卡类型，例如：25代表25G网卡
 * @method Externals getExternals() 获取扩展属性。
 * @method void setExternals(Externals $Externals) 设置扩展属性。
 * @method integer getCpu() 获取实例的CPU核数，单位：核。
 * @method void setCpu(integer $Cpu) 设置实例的CPU核数，单位：核。
 * @method integer getMemory() 获取实例内存容量，单位：`GB`。
 * @method void setMemory(integer $Memory) 设置实例内存容量，单位：`GB`。
 * @method string getInstanceFamily() 获取实例机型系列。
 * @method void setInstanceFamily(string $InstanceFamily) 设置实例机型系列。
 * @method string getTypeName() 获取机型名称。
 * @method void setTypeName(string $TypeName) 设置机型名称。
 * @method array getLocalDiskTypeList() 获取本地磁盘规格列表。
 * @method void setLocalDiskTypeList(array $LocalDiskTypeList) 设置本地磁盘规格列表。
 * @method string getStatus() 获取实例是否售卖。取值范围： <br><li>SELL：表示实例可购买<br><li>SOLD_OUT：表示实例已售罄。
 * @method void setStatus(string $Status) 设置实例是否售卖。取值范围： <br><li>SELL：表示实例可购买<br><li>SOLD_OUT：表示实例已售罄。
 * @method ItemPrice getPrice() 获取实例的售卖价格。
 * @method void setPrice(ItemPrice $Price) 设置实例的售卖价格。
 */

/**
 *描述实例机型配额信息。
 */
class InstanceTypeQuotaItem extends AbstractModel
{
    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var string 实例计费模式。取值范围： <br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费<br><li>CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对CDH计费，不对CDH上的实例计费。
     */
    public $InstanceChargeType;

    /**
     * @var integer 网卡类型，例如：25代表25G网卡
     */
    public $NetworkCard;

    /**
     * @var Externals 扩展属性。
     */
    public $Externals;

    /**
     * @var integer 实例的CPU核数，单位：核。
     */
    public $Cpu;

    /**
     * @var integer 实例内存容量，单位：`GB`。
     */
    public $Memory;

    /**
     * @var string 实例机型系列。
     */
    public $InstanceFamily;

    /**
     * @var string 机型名称。
     */
    public $TypeName;

    /**
     * @var array 本地磁盘规格列表。
     */
    public $LocalDiskTypeList;

    /**
     * @var string 实例是否售卖。取值范围： <br><li>SELL：表示实例可购买<br><li>SOLD_OUT：表示实例已售罄。
     */
    public $Status;

    /**
     * @var ItemPrice 实例的售卖价格。
     */
    public $Price;
    /**
     * @param string $Zone 可用区。
     * @param string $InstanceType 实例机型。
     * @param string $InstanceChargeType 实例计费模式。取值范围： <br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费<br><li>CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对CDH计费，不对CDH上的实例计费。
     * @param integer $NetworkCard 网卡类型，例如：25代表25G网卡
     * @param Externals $Externals 扩展属性。
     * @param integer $Cpu 实例的CPU核数，单位：核。
     * @param integer $Memory 实例内存容量，单位：`GB`。
     * @param string $InstanceFamily 实例机型系列。
     * @param string $TypeName 机型名称。
     * @param array $LocalDiskTypeList 本地磁盘规格列表。
     * @param string $Status 实例是否售卖。取值范围： <br><li>SELL：表示实例可购买<br><li>SOLD_OUT：表示实例已售罄。
     * @param ItemPrice $Price 实例的售卖价格。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }

        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("LocalDiskTypeList",$param) and $param["LocalDiskTypeList"] !== null) {
            $this->LocalDiskTypeList = [];
            foreach ($param["LocalDiskTypeList"] as $key => $value){
                $obj = new LocalDiskType();
                $obj->deserialize($value);
                array_push($this->LocalDiskTypeList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new ItemPrice();
            $this->Price->deserialize($param["Price"]);
        }
    }
}
