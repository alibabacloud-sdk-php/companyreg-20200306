<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class DescribePartnerConfigRequest extends Model
{
    /**
     * @example esp.wangwen
     *
     * @var string
     */
    public $bizType;

    /**
     * @example jinsan
     *
     * @var string
     */
    public $partnerCode;
    protected $_name = [
        'bizType'     => 'BizType',
        'partnerCode' => 'PartnerCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePartnerConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }

        return $model;
    }
}
