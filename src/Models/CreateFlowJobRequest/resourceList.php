<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowJobRequest;

use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @description 保留参数。
     *
     * @var string
     */
    public $alias;

    /**
     * @description 保留参数。
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'alias' => 'Alias',
        'path'  => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
