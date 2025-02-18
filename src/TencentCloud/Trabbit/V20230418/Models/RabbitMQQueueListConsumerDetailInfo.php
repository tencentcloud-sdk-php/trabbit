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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ队列列表消费者信息
 *
 * @method integer getConsumersNumber() 获取消费者数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumersNumber(integer $ConsumersNumber) 设置消费者数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQQueueListConsumerDetailInfo extends AbstractModel
{
    /**
     * @var integer 消费者数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumersNumber;

    /**
     * @param integer $ConsumersNumber 消费者数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ConsumersNumber",$param) and $param["ConsumersNumber"] !== null) {
            $this->ConsumersNumber = $param["ConsumersNumber"];
        }
    }
}
