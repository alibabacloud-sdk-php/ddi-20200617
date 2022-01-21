<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobsResponseBody\jobList;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobsResponseBody\jobList\job\resourceList;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @description 是否临时查询。
     *
     * @var string
     */
    public $adhoc;

    /**
     * @description 报警配置。
     *
     * @var string
     */
    public $alertConf;

    /**
     * @description 作业所在目录ID。
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description 自定义变量。
     *
     * @var string
     */
    public $customVariables;

    /**
     * @description 作业的描述。
     *
     * @var string
     */
    public $description;

    /**
     * @description 环境变量设置。
     *
     * @var string
     */
    public $envConf;

    /**
     * @description 失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）
     *
     * @var string
     */
    public $failAct;

    /**
     * @description 创建时间。
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 最后修改时间。
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 作业ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 最后一次执行的实例ID。
     *
     * @var string
     */
    public $lastInstanceDetail;

    /**
     * @description 最大重试次数。
     *
     * @var int
     */
    public $maxRetry;

    /**
     * @description 模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。
     *
     * @var string
     */
    public $mode;

    /**
     * @description 监控配置，仅SPARK_STREAMING类型作业支持监控配置。
     *
     * @var string
     */
    public $monitorConf;

    /**
     * @description 作业名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 参数设置。
     *
     * @var string
     */
    public $paramConf;

    /**
     * @description 作业内容。
     *
     * @var string
     */
    public $params;

    /**
     * @var resourceList
     */
    public $resourceList;

    /**
     * @description 重试间隔 0~300（秒）。
     *
     * @var int
     */
    public $retryInterval;

    /**
     * @description 运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）
     *
     * @var string
     */
    public $runConf;

    /**
     * @description 作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'adhoc'              => 'Adhoc',
        'alertConf'          => 'AlertConf',
        'categoryId'         => 'CategoryId',
        'customVariables'    => 'CustomVariables',
        'description'        => 'Description',
        'envConf'            => 'EnvConf',
        'failAct'            => 'FailAct',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'id'                 => 'Id',
        'lastInstanceDetail' => 'LastInstanceDetail',
        'maxRetry'           => 'MaxRetry',
        'mode'               => 'Mode',
        'monitorConf'        => 'MonitorConf',
        'name'               => 'Name',
        'paramConf'          => 'ParamConf',
        'params'             => 'Params',
        'resourceList'       => 'ResourceList',
        'retryInterval'      => 'RetryInterval',
        'runConf'            => 'RunConf',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adhoc) {
            $res['Adhoc'] = $this->adhoc;
        }
        if (null !== $this->alertConf) {
            $res['AlertConf'] = $this->alertConf;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastInstanceDetail) {
            $res['LastInstanceDetail'] = $this->lastInstanceDetail;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = $this->monitorConf;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paramConf) {
            $res['ParamConf'] = $this->paramConf;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = null !== $this->resourceList ? $this->resourceList->toMap() : null;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->runConf) {
            $res['RunConf'] = $this->runConf;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adhoc'])) {
            $model->adhoc = $map['Adhoc'];
        }
        if (isset($map['AlertConf'])) {
            $model->alertConf = $map['AlertConf'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastInstanceDetail'])) {
            $model->lastInstanceDetail = $map['LastInstanceDetail'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['MonitorConf'])) {
            $model->monitorConf = $map['MonitorConf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParamConf'])) {
            $model->paramConf = $map['ParamConf'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ResourceList'])) {
            $model->resourceList = resourceList::fromMap($map['ResourceList']);
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RunConf'])) {
            $model->runConf = $map['RunConf'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
