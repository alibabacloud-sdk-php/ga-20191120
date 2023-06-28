<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesResponseBody;

use AlibabaCloud\Tea\Model;

class forwardingRules extends Model
{
    /**
     * @description The forwarding rule ID.
     *
     * @example frule-bp19a3t3yzr21q3****
     *
     * @var string
     */
    public $forwardingRuleId;
    protected $_name = [
        'forwardingRuleId' => 'ForwardingRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardingRuleId) {
            $res['ForwardingRuleId'] = $this->forwardingRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardingRuleId'])) {
            $model->forwardingRuleId = $map['ForwardingRuleId'];
        }

        return $model;
    }
}
