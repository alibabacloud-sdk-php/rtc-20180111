<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\bgColor;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\images;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\panes;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\regionColor;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\texts;

class UpdateStreamingOutShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var backgrounds[]
     */
    public $backgrounds;

    /**
     * @var bgColor
     */
    public $bgColor;

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
     * @var images[]
     */
    public $images;

    /**
     * @var string
     */
    public $layoutSpecifiedUsersShrink;

    /**
     * @var panes[]
     */
    public $panes;

    /**
     * @var regionColor
     */
    public $regionColor;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var texts[]
     */
    public $texts;
    protected $_name = [
        'appId' => 'AppId',
        'backgrounds' => 'Backgrounds',
        'bgColor' => 'BgColor',
        'channelId' => 'ChannelId',
        'clockWidgets' => 'ClockWidgets',
        'cropMode' => 'CropMode',
        'images' => 'Images',
        'layoutSpecifiedUsersShrink' => 'LayoutSpecifiedUsers',
        'panes' => 'Panes',
        'regionColor' => 'RegionColor',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
        'texts' => 'Texts',
    ];

    public function validate()
    {
        if (\is_array($this->backgrounds)) {
            Model::validateArray($this->backgrounds);
        }
        if (null !== $this->bgColor) {
            $this->bgColor->validate();
        }
        if (\is_array($this->clockWidgets)) {
            Model::validateArray($this->clockWidgets);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->panes)) {
            Model::validateArray($this->panes);
        }
        if (null !== $this->regionColor) {
            $this->regionColor->validate();
        }
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->backgrounds) {
            if (\is_array($this->backgrounds)) {
                $res['Backgrounds'] = [];
                $n1 = 0;
                foreach ($this->backgrounds as $item1) {
                    $res['Backgrounds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bgColor) {
            $res['BgColor'] = null !== $this->bgColor ? $this->bgColor->toArray($noStream) : $this->bgColor;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->clockWidgets) {
            if (\is_array($this->clockWidgets)) {
                $res['ClockWidgets'] = [];
                $n1 = 0;
                foreach ($this->clockWidgets as $item1) {
                    $res['ClockWidgets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cropMode) {
            $res['CropMode'] = $this->cropMode;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->layoutSpecifiedUsersShrink) {
            $res['LayoutSpecifiedUsers'] = $this->layoutSpecifiedUsersShrink;
        }

        if (null !== $this->panes) {
            if (\is_array($this->panes)) {
                $res['Panes'] = [];
                $n1 = 0;
                foreach ($this->panes as $item1) {
                    $res['Panes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionColor) {
            $res['RegionColor'] = null !== $this->regionColor ? $this->regionColor->toArray($noStream) : $this->regionColor;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->texts) {
            if (\is_array($this->texts)) {
                $res['Texts'] = [];
                $n1 = 0;
                foreach ($this->texts as $item1) {
                    $res['Texts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['Backgrounds'])) {
            if (!empty($map['Backgrounds'])) {
                $model->backgrounds = [];
                $n1 = 0;
                foreach ($map['Backgrounds'] as $item1) {
                    $model->backgrounds[$n1] = backgrounds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BgColor'])) {
            $model->bgColor = bgColor::fromMap($map['BgColor']);
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ClockWidgets'])) {
            if (!empty($map['ClockWidgets'])) {
                $model->clockWidgets = [];
                $n1 = 0;
                foreach ($map['ClockWidgets'] as $item1) {
                    $model->clockWidgets[$n1] = clockWidgets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CropMode'])) {
            $model->cropMode = $map['CropMode'];
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = images::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LayoutSpecifiedUsers'])) {
            $model->layoutSpecifiedUsersShrink = $map['LayoutSpecifiedUsers'];
        }

        if (isset($map['Panes'])) {
            if (!empty($map['Panes'])) {
                $model->panes = [];
                $n1 = 0;
                foreach ($map['Panes'] as $item1) {
                    $model->panes[$n1] = panes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionColor'])) {
            $model->regionColor = regionColor::fromMap($map['RegionColor']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n1 = 0;
                foreach ($map['Texts'] as $item1) {
                    $model->texts[$n1] = texts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
