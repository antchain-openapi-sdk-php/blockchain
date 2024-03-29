<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BLOCKCHAIN\Models;

use AlibabaCloud\Tea\Model;

class StartDidIdentificationFaceauthnewocpRequest extends Model
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

    // 认证类型,枚举值 PC_AUTH、APP_AUTH
    /**
     * @var string
     */
    public $authType;

    // 颁发证书的subject did
    /**
     * @var string
     */
    public $did;

    // 用户身份信息
    /**
     * @var IdentityParam
     */
    public $identityParam;

    // 认证接口回调路径，POST接口 请求示例： { "certifyId":"0242de204e1a2c3ed6ee5e21d8a57a4c", "did":"xxxxx","vcId":"xxxxx" }
    /**
     * @var string
     */
    public $returnUrl;

    // 场景码，找dis工作人员进行分配
    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'authType'          => 'auth_type',
        'did'               => 'did',
        'identityParam'     => 'identity_param',
        'returnUrl'         => 'return_url',
        'bizCode'           => 'biz_code',
    ];

    public function validate()
    {
        Model::validateRequired('authType', $this->authType, true);
        Model::validateRequired('did', $this->did, true);
        Model::validateRequired('identityParam', $this->identityParam, true);
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
        if (null !== $this->authType) {
            $res['auth_type'] = $this->authType;
        }
        if (null !== $this->did) {
            $res['did'] = $this->did;
        }
        if (null !== $this->identityParam) {
            $res['identity_param'] = null !== $this->identityParam ? $this->identityParam->toMap() : null;
        }
        if (null !== $this->returnUrl) {
            $res['return_url'] = $this->returnUrl;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartDidIdentificationFaceauthnewocpRequest
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
        if (isset($map['auth_type'])) {
            $model->authType = $map['auth_type'];
        }
        if (isset($map['did'])) {
            $model->did = $map['did'];
        }
        if (isset($map['identity_param'])) {
            $model->identityParam = IdentityParam::fromMap($map['identity_param']);
        }
        if (isset($map['return_url'])) {
            $model->returnUrl = $map['return_url'];
        }
        if (isset($map['biz_code'])) {
            $model->bizCode = $map['biz_code'];
        }

        return $model;
    }
}
