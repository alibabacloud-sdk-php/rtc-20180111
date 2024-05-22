<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest;

use AlibabaCloud\Tea\Model;

class panes extends Model
{
    /**
     * @description paneId
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $paneId;

    /**
     * @description sourceType
     *
     * @example video
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'paneId'     => 'PaneId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paneId) {
            $res['PaneId'] = $this->paneId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return panes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PaneId'])) {
            $model->paneId = $map['PaneId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
