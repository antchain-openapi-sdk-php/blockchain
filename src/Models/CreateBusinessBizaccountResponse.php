<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BLOCKCHAIN\Models;

use AlibabaCloud\Tea\Model;

class CreateBusinessBizaccountResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // did地址
    /**
     * @var string
     */
    public $did;

    // 租户账户
    /**
     * @var string
     */
    public $isvAccount;

    // 生成的账户在kms上的密钥id
    //
    /**
     * @var string
     */
    public $kmsId;

    // 调用接口是否成功
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'did'        => 'did',
        'isvAccount' => 'isv_account',
        'kmsId'      => 'kms_id',
        'status'     => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->did) {
            $res['did'] = $this->did;
        }
        if (null !== $this->isvAccount) {
            $res['isv_account'] = $this->isvAccount;
        }
        if (null !== $this->kmsId) {
            $res['kms_id'] = $this->kmsId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBusinessBizaccountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['did'])) {
            $model->did = $map['did'];
        }
        if (isset($map['isv_account'])) {
            $model->isvAccount = $map['isv_account'];
        }
        if (isset($map['kms_id'])) {
            $model->kmsId = $map['kms_id'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
