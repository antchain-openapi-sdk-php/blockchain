<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BLOCKCHAIN\Models;

use AlibabaCloud\Tea\Model;

class StartDidCertificationFourmetaRequest extends Model
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

    // 银行卡号
    //
    /**
     * @var string
     */
    public $bankCard;

    // 身份证号码
    //
    /**
     * @var string
     */
    public $certNo;

    // 证书的subject did
    //
    /**
     * @var string
     */
    public $did;

    // 手机号码
    //
    /**
     * @var string
     */
    public $mobile;

    // 姓名
    //
    /**
     * @var string
     */
    public $name;

    // 场景码，找dis工作人员进行分配
    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'bankCard'          => 'bank_card',
        'certNo'            => 'cert_no',
        'did'               => 'did',
        'mobile'            => 'mobile',
        'name'              => 'name',
        'bizCode'           => 'biz_code',
    ];

    public function validate()
    {
        Model::validateRequired('bankCard', $this->bankCard, true);
        Model::validateRequired('certNo', $this->certNo, true);
        Model::validateRequired('did', $this->did, true);
        Model::validateRequired('mobile', $this->mobile, true);
        Model::validateRequired('name', $this->name, true);
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
        if (null !== $this->bankCard) {
            $res['bank_card'] = $this->bankCard;
        }
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->did) {
            $res['did'] = $this->did;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartDidCertificationFourmetaRequest
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
        if (isset($map['bank_card'])) {
            $model->bankCard = $map['bank_card'];
        }
        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }
        if (isset($map['did'])) {
            $model->did = $map['did'];
        }
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['biz_code'])) {
            $model->bizCode = $map['biz_code'];
        }

        return $model;
    }
}
