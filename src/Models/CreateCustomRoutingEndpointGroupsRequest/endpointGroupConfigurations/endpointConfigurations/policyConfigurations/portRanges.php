<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations\endpointConfigurations\policyConfigurations;

use AlibabaCloud\Tea\Model;

class portRanges extends Model
{
    /**
     * @description The first port of the destination port range. The value of this parameter must fall within the port range of the endpoint group.
     *
     * This parameter takes effect only when **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify port ranges for at most 20 destinations in each endpoint and specify at most five first ports for each destination.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The last port of the destination port range. The value of this parameter must fall within the port range of the endpoint group.
     *
     * This parameter takes effect only when **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify port ranges for at most 20 destinations in each endpoint and specify at most five last ports for each destination.
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'fromPort' => 'FromPort',
        'toPort'   => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portRanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
