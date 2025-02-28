<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BLOCKCHAIN\Models;

use AlibabaCloud\Tea\Model;

class QueryAuthCrowdUploadurlRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 问件类型
    /**
     * @var string
     */
    public $fileType;

    // 人群类型：LAST_THREE_MONTHS_SURVEY（排除问卷三个月人群）；LAST_SIX_MONTHS_SURVEY（排除问卷六个月人群）；LAST_THREE_MONTHS_RECRUIT（排除招募三个月人群）LAST_SIX_MONTHS_RECRUIT（排除招募任务六个月人群）
    /**
     * @var string
     */
    public $crowdType;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'fileType'          => 'file_type',
        'crowdType'         => 'crowd_type',
    ];

    public function validate()
    {
        Model::validateRequired('fileType', $this->fileType, true);
        Model::validateRequired('crowdType', $this->crowdType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->fileType) {
            $res['file_type'] = $this->fileType;
        }
        if (null !== $this->crowdType) {
            $res['crowd_type'] = $this->crowdType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAuthCrowdUploadurlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['file_type'])) {
            $model->fileType = $map['file_type'];
        }
        if (isset($map['crowd_type'])) {
            $model->crowdType = $map['crowd_type'];
        }

        return $model;
    }
}
