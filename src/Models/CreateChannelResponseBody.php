<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateChannelResponseBody extends Model
{
    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $channelKey;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'nonce'      => 'Nonce',
        'requestId'  => 'RequestId',
        'channelKey' => 'ChannelKey',
        'timestamp'  => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->channelKey) {
            $res['ChannelKey'] = $this->channelKey;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChannelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ChannelKey'])) {
            $model->channelKey = $map['ChannelKey'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
