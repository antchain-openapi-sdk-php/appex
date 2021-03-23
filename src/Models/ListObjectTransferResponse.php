<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\APPEX\Models;

use AlibabaCloud\Tea\Model;

class ListObjectTransferResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    // 数据归属权流转列表
    //
    /**
     * @var DataTransferObject[]
     */
    public $dataTransferList;
    protected $_name = [
        'reqMsgId'         => 'req_msg_id',
        'resultCode'       => 'result_code',
        'resultMsg'        => 'result_msg',
        'dataTransferList' => 'data_transfer_list',
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
        if (null !== $this->dataTransferList) {
            $res['data_transfer_list'] = [];
            if (null !== $this->dataTransferList && \is_array($this->dataTransferList)) {
                $n = 0;
                foreach ($this->dataTransferList as $item) {
                    $res['data_transfer_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListObjectTransferResponse
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
        if (isset($map['data_transfer_list'])) {
            if (!empty($map['data_transfer_list'])) {
                $model->dataTransferList = [];
                $n                       = 0;
                foreach ($map['data_transfer_list'] as $item) {
                    $model->dataTransferList[$n++] = null !== $item ? DataTransferObject::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
