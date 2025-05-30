<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class SubmitSolutionResponseBody extends Model
{
    /**
     * @var string
     */
    public $confirmUrl;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $solutionBizId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'confirmUrl' => 'ConfirmUrl',
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'requestId' => 'RequestId',
        'solutionBizId' => 'SolutionBizId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confirmUrl) {
            $res['ConfirmUrl'] = $this->confirmUrl;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->solutionBizId) {
            $res['SolutionBizId'] = $this->solutionBizId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfirmUrl'])) {
            $model->confirmUrl = $map['ConfirmUrl'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SolutionBizId'])) {
            $model->solutionBizId = $map['SolutionBizId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
