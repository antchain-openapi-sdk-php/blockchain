<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BLOCKCHAIN\Models;

use AlibabaCloud\Tea\Model;

class TriggerDTO extends Model
{
    // 名称
    /**
     * @example 9481b612d6ca4cfdbecc5c5d395eda4237c749fa-97fc-4156-9c23-e21cd6060669
     *
     * @var string
     */
    public $name;

    // 类型
    /**
     * @example "BLOCK"
     *
     * @var string
     */
    public $type;

    // 源
    /**
     * @example “”
     *
     * @var string
     */
    public $source;

    // 创建时间
    /**
     * @example 103422
     *
     * @var string
     */
    public $createTime;

    // 错误信息
    /**
     * @example "error"
     *
     * @var string
     */
    public $errorMessage;

    // 状态
    /**
     * @example “success”
     *
     * @var string
     */
    public $status;

    // option（map结构，由于金融云无map接口所以通过string类型传输json格式）
    /**
     * @example {a:"123",  b:"123"}
     *
     * @var string
     */
    public $option;

    // checkpoint类
    /**
     * @example {}
     *
     * @var CheckPoint
     */
    public $checkpoint;
    protected $_name = [
        'name'         => 'name',
        'type'         => 'type',
        'source'       => 'source',
        'createTime'   => 'create_time',
        'errorMessage' => 'error_message',
        'status'       => 'status',
        'option'       => 'option',
        'checkpoint'   => 'checkpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->option) {
            $res['option'] = $this->option;
        }
        if (null !== $this->checkpoint) {
            $res['checkpoint'] = null !== $this->checkpoint ? $this->checkpoint->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['create_time'])) {
            $model->createTime = $map['create_time'];
        }
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['option'])) {
            $model->option = $map['option'];
        }
        if (isset($map['checkpoint'])) {
            $model->checkpoint = CheckPoint::fromMap($map['checkpoint']);
        }

        return $model;
    }
}