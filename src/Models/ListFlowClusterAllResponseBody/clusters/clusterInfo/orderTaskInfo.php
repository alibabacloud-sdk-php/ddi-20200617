<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponseBody\clusters\clusterInfo;

use AlibabaCloud\Tea\Model;

class orderTaskInfo extends Model
{
    /**
     * @description 当前数量。
     *
     * @var int
     */
    public $currentCount;

    /**
     * @description 订单列表。
     *
     * @var string
     */
    public $orderIdList;

    /**
     * @description 目标数量。
     *
     * @var int
     */
    public $targetCount;
    protected $_name = [
        'currentCount' => 'CurrentCount',
        'orderIdList'  => 'OrderIdList',
        'targetCount'  => 'TargetCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->orderIdList) {
            $res['OrderIdList'] = $this->orderIdList;
        }
        if (null !== $this->targetCount) {
            $res['TargetCount'] = $this->targetCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderTaskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['OrderIdList'])) {
            $model->orderIdList = $map['OrderIdList'];
        }
        if (isset($map['TargetCount'])) {
            $model->targetCount = $map['TargetCount'];
        }

        return $model;
    }
}
