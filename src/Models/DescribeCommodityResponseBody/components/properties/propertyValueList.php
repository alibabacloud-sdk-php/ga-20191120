<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody\components\properties;

use AlibabaCloud\Tea\Model;

class propertyValueList extends Model
{
    /**
     * @description The sequence number of the attribute.
     *
     * The returned information varies based on the commodity module.
     * @example 1
     *
     * @var int
     */
    public $orderIndex;

    /**
     * @description The content of the attribute.
     *
     * The returned information varies based on the commodity module.
     * @example 1 Month
     *
     * @var string
     */
    public $text;

    /**
     * @description The message of the attribute.
     *
     * The returned information varies based on the commodity module.
     * @example 1 Month
     *
     * @var string
     */
    public $tips;

    /**
     * @description The value of the attribute.
     *
     * The returned information varies based on the commodity module.
     * @example 1:Month
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'orderIndex' => 'OrderIndex',
        'text'       => 'Text',
        'tips'       => 'Tips',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderIndex) {
            $res['OrderIndex'] = $this->orderIndex;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyValueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderIndex'])) {
            $model->orderIndex = $map['OrderIndex'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
