<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BLOCKCHAIN\Models;

use AlibabaCloud\Tea\Model;

class BasicCarInfo extends Model
{
    // 车牌号码
    /**
     * @example 京Axxxxx
     *
     * @var string
     */
    public $licenseNo;

    // 车架号
    /**
     * @example xxxxx
     *
     * @var string
     */
    public $vin;

    // 发动机号
    /**
     * @example xxxxx
     *
     * @var string
     */
    public $engineNo;

    // 初登日期
    /**
     * @example 2021-12-21
     *
     * @var string
     */
    public $registerDate;

    // 车辆型号
    /**
     * @example xxxxx
     *
     * @var string
     */
    public $modelCode;

    // 营运性质
    /**
     * @example xxxxx
     *
     * @var string
     */
    public $useNatureCode;

    // 是否抵押
    /**
     * @example true, false
     *
     * @var bool
     */
    public $mortgage;
    protected $_name = [
        'licenseNo'     => 'license_no',
        'vin'           => 'vin',
        'engineNo'      => 'engine_no',
        'registerDate'  => 'register_date',
        'modelCode'     => 'model_code',
        'useNatureCode' => 'use_nature_code',
        'mortgage'      => 'mortgage',
    ];

    public function validate()
    {
        Model::validateRequired('licenseNo', $this->licenseNo, true);
        Model::validateRequired('vin', $this->vin, true);
        Model::validateRequired('engineNo', $this->engineNo, true);
        Model::validateRequired('registerDate', $this->registerDate, true);
        Model::validateRequired('modelCode', $this->modelCode, true);
        Model::validateRequired('useNatureCode', $this->useNatureCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->licenseNo) {
            $res['license_no'] = $this->licenseNo;
        }
        if (null !== $this->vin) {
            $res['vin'] = $this->vin;
        }
        if (null !== $this->engineNo) {
            $res['engine_no'] = $this->engineNo;
        }
        if (null !== $this->registerDate) {
            $res['register_date'] = $this->registerDate;
        }
        if (null !== $this->modelCode) {
            $res['model_code'] = $this->modelCode;
        }
        if (null !== $this->useNatureCode) {
            $res['use_nature_code'] = $this->useNatureCode;
        }
        if (null !== $this->mortgage) {
            $res['mortgage'] = $this->mortgage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BasicCarInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['license_no'])) {
            $model->licenseNo = $map['license_no'];
        }
        if (isset($map['vin'])) {
            $model->vin = $map['vin'];
        }
        if (isset($map['engine_no'])) {
            $model->engineNo = $map['engine_no'];
        }
        if (isset($map['register_date'])) {
            $model->registerDate = $map['register_date'];
        }
        if (isset($map['model_code'])) {
            $model->modelCode = $map['model_code'];
        }
        if (isset($map['use_nature_code'])) {
            $model->useNatureCode = $map['use_nature_code'];
        }
        if (isset($map['mortgage'])) {
            $model->mortgage = $map['mortgage'];
        }

        return $model;
    }
}
