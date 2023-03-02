<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class ListUserSolutionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $existStatusShrink;

    /**
     * @example I20210924151843000001
     *
     * @var string
     */
    public $intentionBizId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'existStatusShrink' => 'ExistStatus',
        'intentionBizId'    => 'IntentionBizId',
        'pageNum'           => 'PageNum',
        'pageSize'          => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->existStatusShrink) {
            $res['ExistStatus'] = $this->existStatusShrink;
        }
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserSolutionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExistStatus'])) {
            $model->existStatusShrink = $map['ExistStatus'];
        }
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
