<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointTrafficPoliciesRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointTrafficPoliciesRequest\policyConfigurations\portRanges;
use AlibabaCloud\Tea\Model;

class policyConfigurations extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var portRanges[]
     */
    public $portRanges;
    protected $_name = [
        'address'    => 'Address',
        'policyId'   => 'PolicyId',
        'portRanges' => 'PortRanges',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->portRanges) {
            $res['PortRanges'] = [];
            if (null !== $this->portRanges && \is_array($this->portRanges)) {
                $n = 0;
                foreach ($this->portRanges as $item) {
                    $res['PortRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n                 = 0;
                foreach ($map['PortRanges'] as $item) {
                    $model->portRanges[$n++] = null !== $item ? portRanges::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
