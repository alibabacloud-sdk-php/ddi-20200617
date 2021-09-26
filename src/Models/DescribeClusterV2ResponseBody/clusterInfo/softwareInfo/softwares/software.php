<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\softwareInfo\softwares;

use AlibabaCloud\Tea\Model;

class software extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $onlyDisplay;

    /**
     * @var int
     */
    public $startTpe;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'displayName' => 'DisplayName',
        'onlyDisplay' => 'OnlyDisplay',
        'startTpe'    => 'StartTpe',
        'name'        => 'Name',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->onlyDisplay) {
            $res['OnlyDisplay'] = $this->onlyDisplay;
        }
        if (null !== $this->startTpe) {
            $res['StartTpe'] = $this->startTpe;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return software
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['OnlyDisplay'])) {
            $model->onlyDisplay = $map['OnlyDisplay'];
        }
        if (isset($map['StartTpe'])) {
            $model->startTpe = $map['StartTpe'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
