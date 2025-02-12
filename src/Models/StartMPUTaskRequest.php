<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\enhancedParam;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\userPanes;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\watermarks;

class StartMPUTaskRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var int
     */
    public $backgroundColor;
    /**
     * @var backgrounds[]
     */
    public $backgrounds;
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var clockWidgets[]
     */
    public $clockWidgets;
    /**
     * @var int
     */
    public $cropMode;
    /**
     * @var enhancedParam
     */
    public $enhancedParam;
    /**
     * @var int[]
     */
    public $layoutIds;
    /**
     * @var int
     */
    public $mediaEncode;
    /**
     * @var int
     */
    public $mixMode;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var int
     */
    public $payloadType;
    /**
     * @var int
     */
    public $reportVad;
    /**
     * @var int
     */
    public $rtpExtInfo;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var int
     */
    public $streamType;
    /**
     * @var string
     */
    public $streamURL;
    /**
     * @var string[]
     */
    public $subSpecAudioUsers;
    /**
     * @var string[]
     */
    public $subSpecCameraUsers;
    /**
     * @var string[]
     */
    public $subSpecShareScreenUsers;
    /**
     * @var string[]
     */
    public $subSpecUsers;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var int
     */
    public $taskType;
    /**
     * @var int
     */
    public $timeStampRef;
    /**
     * @var string[]
     */
    public $unsubSpecAudioUsers;
    /**
     * @var string[]
     */
    public $unsubSpecCameraUsers;
    /**
     * @var string[]
     */
    public $unsubSpecShareScreenUsers;
    /**
     * @var userPanes[]
     */
    public $userPanes;
    /**
     * @var int
     */
    public $vadInterval;
    /**
     * @var watermarks[]
     */
    public $watermarks;
    protected $_name = [
        'appId'                     => 'AppId',
        'backgroundColor'           => 'BackgroundColor',
        'backgrounds'               => 'Backgrounds',
        'channelId'                 => 'ChannelId',
        'clockWidgets'              => 'ClockWidgets',
        'cropMode'                  => 'CropMode',
        'enhancedParam'             => 'EnhancedParam',
        'layoutIds'                 => 'LayoutIds',
        'mediaEncode'               => 'MediaEncode',
        'mixMode'                   => 'MixMode',
        'ownerId'                   => 'OwnerId',
        'payloadType'               => 'PayloadType',
        'reportVad'                 => 'ReportVad',
        'rtpExtInfo'                => 'RtpExtInfo',
        'sourceType'                => 'SourceType',
        'streamType'                => 'StreamType',
        'streamURL'                 => 'StreamURL',
        'subSpecAudioUsers'         => 'SubSpecAudioUsers',
        'subSpecCameraUsers'        => 'SubSpecCameraUsers',
        'subSpecShareScreenUsers'   => 'SubSpecShareScreenUsers',
        'subSpecUsers'              => 'SubSpecUsers',
        'taskId'                    => 'TaskId',
        'taskType'                  => 'TaskType',
        'timeStampRef'              => 'TimeStampRef',
        'unsubSpecAudioUsers'       => 'UnsubSpecAudioUsers',
        'unsubSpecCameraUsers'      => 'UnsubSpecCameraUsers',
        'unsubSpecShareScreenUsers' => 'UnsubSpecShareScreenUsers',
        'userPanes'                 => 'UserPanes',
        'vadInterval'               => 'VadInterval',
        'watermarks'                => 'Watermarks',
    ];

    public function validate()
    {
        if (\is_array($this->backgrounds)) {
            Model::validateArray($this->backgrounds);
        }
        if (\is_array($this->clockWidgets)) {
            Model::validateArray($this->clockWidgets);
        }
        if (null !== $this->enhancedParam) {
            $this->enhancedParam->validate();
        }
        if (\is_array($this->layoutIds)) {
            Model::validateArray($this->layoutIds);
        }
        if (\is_array($this->subSpecAudioUsers)) {
            Model::validateArray($this->subSpecAudioUsers);
        }
        if (\is_array($this->subSpecCameraUsers)) {
            Model::validateArray($this->subSpecCameraUsers);
        }
        if (\is_array($this->subSpecShareScreenUsers)) {
            Model::validateArray($this->subSpecShareScreenUsers);
        }
        if (\is_array($this->subSpecUsers)) {
            Model::validateArray($this->subSpecUsers);
        }
        if (\is_array($this->unsubSpecAudioUsers)) {
            Model::validateArray($this->unsubSpecAudioUsers);
        }
        if (\is_array($this->unsubSpecCameraUsers)) {
            Model::validateArray($this->unsubSpecCameraUsers);
        }
        if (\is_array($this->unsubSpecShareScreenUsers)) {
            Model::validateArray($this->unsubSpecShareScreenUsers);
        }
        if (\is_array($this->userPanes)) {
            Model::validateArray($this->userPanes);
        }
        if (\is_array($this->watermarks)) {
            Model::validateArray($this->watermarks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }

        if (null !== $this->backgrounds) {
            if (\is_array($this->backgrounds)) {
                $res['Backgrounds'] = [];
                $n1                 = 0;
                foreach ($this->backgrounds as $item1) {
                    $res['Backgrounds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->clockWidgets) {
            if (\is_array($this->clockWidgets)) {
                $res['ClockWidgets'] = [];
                $n1                  = 0;
                foreach ($this->clockWidgets as $item1) {
                    $res['ClockWidgets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cropMode) {
            $res['CropMode'] = $this->cropMode;
        }

        if (null !== $this->enhancedParam) {
            $res['EnhancedParam'] = null !== $this->enhancedParam ? $this->enhancedParam->toArray($noStream) : $this->enhancedParam;
        }

        if (null !== $this->layoutIds) {
            if (\is_array($this->layoutIds)) {
                $res['LayoutIds'] = [];
                $n1               = 0;
                foreach ($this->layoutIds as $item1) {
                    $res['LayoutIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }

        if (null !== $this->mixMode) {
            $res['MixMode'] = $this->mixMode;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->payloadType) {
            $res['PayloadType'] = $this->payloadType;
        }

        if (null !== $this->reportVad) {
            $res['ReportVad'] = $this->reportVad;
        }

        if (null !== $this->rtpExtInfo) {
            $res['RtpExtInfo'] = $this->rtpExtInfo;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }

        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }

        if (null !== $this->subSpecAudioUsers) {
            if (\is_array($this->subSpecAudioUsers)) {
                $res['SubSpecAudioUsers'] = [];
                $n1                       = 0;
                foreach ($this->subSpecAudioUsers as $item1) {
                    $res['SubSpecAudioUsers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->subSpecCameraUsers) {
            if (\is_array($this->subSpecCameraUsers)) {
                $res['SubSpecCameraUsers'] = [];
                $n1                        = 0;
                foreach ($this->subSpecCameraUsers as $item1) {
                    $res['SubSpecCameraUsers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->subSpecShareScreenUsers) {
            if (\is_array($this->subSpecShareScreenUsers)) {
                $res['SubSpecShareScreenUsers'] = [];
                $n1                             = 0;
                foreach ($this->subSpecShareScreenUsers as $item1) {
                    $res['SubSpecShareScreenUsers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->subSpecUsers) {
            if (\is_array($this->subSpecUsers)) {
                $res['SubSpecUsers'] = [];
                $n1                  = 0;
                foreach ($this->subSpecUsers as $item1) {
                    $res['SubSpecUsers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->timeStampRef) {
            $res['TimeStampRef'] = $this->timeStampRef;
        }

        if (null !== $this->unsubSpecAudioUsers) {
            if (\is_array($this->unsubSpecAudioUsers)) {
                $res['UnsubSpecAudioUsers'] = [];
                $n1                         = 0;
                foreach ($this->unsubSpecAudioUsers as $item1) {
                    $res['UnsubSpecAudioUsers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->unsubSpecCameraUsers) {
            if (\is_array($this->unsubSpecCameraUsers)) {
                $res['UnsubSpecCameraUsers'] = [];
                $n1                          = 0;
                foreach ($this->unsubSpecCameraUsers as $item1) {
                    $res['UnsubSpecCameraUsers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->unsubSpecShareScreenUsers) {
            if (\is_array($this->unsubSpecShareScreenUsers)) {
                $res['UnsubSpecShareScreenUsers'] = [];
                $n1                               = 0;
                foreach ($this->unsubSpecShareScreenUsers as $item1) {
                    $res['UnsubSpecShareScreenUsers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userPanes) {
            if (\is_array($this->userPanes)) {
                $res['UserPanes'] = [];
                $n1               = 0;
                foreach ($this->userPanes as $item1) {
                    $res['UserPanes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vadInterval) {
            $res['VadInterval'] = $this->vadInterval;
        }

        if (null !== $this->watermarks) {
            if (\is_array($this->watermarks)) {
                $res['Watermarks'] = [];
                $n1                = 0;
                foreach ($this->watermarks as $item1) {
                    $res['Watermarks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }

        if (isset($map['Backgrounds'])) {
            if (!empty($map['Backgrounds'])) {
                $model->backgrounds = [];
                $n1                 = 0;
                foreach ($map['Backgrounds'] as $item1) {
                    $model->backgrounds[$n1++] = backgrounds::fromMap($item1);
                }
            }
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ClockWidgets'])) {
            if (!empty($map['ClockWidgets'])) {
                $model->clockWidgets = [];
                $n1                  = 0;
                foreach ($map['ClockWidgets'] as $item1) {
                    $model->clockWidgets[$n1++] = clockWidgets::fromMap($item1);
                }
            }
        }

        if (isset($map['CropMode'])) {
            $model->cropMode = $map['CropMode'];
        }

        if (isset($map['EnhancedParam'])) {
            $model->enhancedParam = enhancedParam::fromMap($map['EnhancedParam']);
        }

        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = [];
                $n1               = 0;
                foreach ($map['LayoutIds'] as $item1) {
                    $model->layoutIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }

        if (isset($map['MixMode'])) {
            $model->mixMode = $map['MixMode'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PayloadType'])) {
            $model->payloadType = $map['PayloadType'];
        }

        if (isset($map['ReportVad'])) {
            $model->reportVad = $map['ReportVad'];
        }

        if (isset($map['RtpExtInfo'])) {
            $model->rtpExtInfo = $map['RtpExtInfo'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }

        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }

        if (isset($map['SubSpecAudioUsers'])) {
            if (!empty($map['SubSpecAudioUsers'])) {
                $model->subSpecAudioUsers = [];
                $n1                       = 0;
                foreach ($map['SubSpecAudioUsers'] as $item1) {
                    $model->subSpecAudioUsers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SubSpecCameraUsers'])) {
            if (!empty($map['SubSpecCameraUsers'])) {
                $model->subSpecCameraUsers = [];
                $n1                        = 0;
                foreach ($map['SubSpecCameraUsers'] as $item1) {
                    $model->subSpecCameraUsers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SubSpecShareScreenUsers'])) {
            if (!empty($map['SubSpecShareScreenUsers'])) {
                $model->subSpecShareScreenUsers = [];
                $n1                             = 0;
                foreach ($map['SubSpecShareScreenUsers'] as $item1) {
                    $model->subSpecShareScreenUsers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SubSpecUsers'])) {
            if (!empty($map['SubSpecUsers'])) {
                $model->subSpecUsers = [];
                $n1                  = 0;
                foreach ($map['SubSpecUsers'] as $item1) {
                    $model->subSpecUsers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TimeStampRef'])) {
            $model->timeStampRef = $map['TimeStampRef'];
        }

        if (isset($map['UnsubSpecAudioUsers'])) {
            if (!empty($map['UnsubSpecAudioUsers'])) {
                $model->unsubSpecAudioUsers = [];
                $n1                         = 0;
                foreach ($map['UnsubSpecAudioUsers'] as $item1) {
                    $model->unsubSpecAudioUsers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UnsubSpecCameraUsers'])) {
            if (!empty($map['UnsubSpecCameraUsers'])) {
                $model->unsubSpecCameraUsers = [];
                $n1                          = 0;
                foreach ($map['UnsubSpecCameraUsers'] as $item1) {
                    $model->unsubSpecCameraUsers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UnsubSpecShareScreenUsers'])) {
            if (!empty($map['UnsubSpecShareScreenUsers'])) {
                $model->unsubSpecShareScreenUsers = [];
                $n1                               = 0;
                foreach ($map['UnsubSpecShareScreenUsers'] as $item1) {
                    $model->unsubSpecShareScreenUsers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserPanes'])) {
            if (!empty($map['UserPanes'])) {
                $model->userPanes = [];
                $n1               = 0;
                foreach ($map['UserPanes'] as $item1) {
                    $model->userPanes[$n1++] = userPanes::fromMap($item1);
                }
            }
        }

        if (isset($map['VadInterval'])) {
            $model->vadInterval = $map['VadInterval'];
        }

        if (isset($map['Watermarks'])) {
            if (!empty($map['Watermarks'])) {
                $model->watermarks = [];
                $n1                = 0;
                foreach ($map['Watermarks'] as $item1) {
                    $model->watermarks[$n1++] = watermarks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
