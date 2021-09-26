<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class AddSecurityWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string[]
     */
    public $whiteIpList;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'portRange'   => 'PortRange',
        'whiteIpList' => 'WhiteIpList',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->whiteIpList) {
            $res['WhiteIpList'] = $this->whiteIpList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSecurityWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['WhiteIpList'])) {
            if (!empty($map['WhiteIpList'])) {
                $model->whiteIpList = $map['WhiteIpList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
