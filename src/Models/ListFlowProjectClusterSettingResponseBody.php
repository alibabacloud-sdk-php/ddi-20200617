<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectClusterSettingResponseBody\clusterSettings;
use AlibabaCloud\Tea\Model;

class ListFlowProjectClusterSettingResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var clusterSettings
     */
    public $clusterSettings;
    protected $_name = [
        'requestId'       => 'RequestId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'total'           => 'Total',
        'clusterSettings' => 'ClusterSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->clusterSettings) {
            $res['ClusterSettings'] = null !== $this->clusterSettings ? $this->clusterSettings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowProjectClusterSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ClusterSettings'])) {
            $model->clusterSettings = clusterSettings::fromMap($map['ClusterSettings']);
        }

        return $model;
    }
}
