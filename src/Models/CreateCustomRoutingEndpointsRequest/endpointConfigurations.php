<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointsRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointsRequest\endpointConfigurations\policyConfigurations;
use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @description The name of the endpoint (vSwitch).
     *
     * @example vsw-test01
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var policyConfigurations[]
     */
    public $policyConfigurations;

    /**
     * @description The access policy of traffic to the endpoint. Defualt value: DenyAll. Valid values:
     *
     *   **DenyAll**: denies all traffic to the endpoint.
     *
     *   **AllowAll**: allows all traffic to the endpoint.
     *
     *   **AllowCustom**: allows traffic only to specified destinations in the endpoint
     *
     * If you set this parameter to AllowCustom, you must specify IP addresses and port ranges of destinations to which to allow traffic. If you specify only IP addresses and do not specify port ranges, GA can forward traffic to all ports and the specified IP addresses in the destinations.
     * @example DenyAll
     *
     * @var string
     */
    public $trafficToEndpointPolicy;

    /**
     * @description The backend service type of the endpoint. Default value: PrivateSubNet.
     *
     * Set the value to **PrivateSubNet**, which indicates private CIDR blocks.
     * @example PrivateSubNet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endpoint'                => 'Endpoint',
        'policyConfigurations'    => 'PolicyConfigurations',
        'trafficToEndpointPolicy' => 'TrafficToEndpointPolicy',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->policyConfigurations) {
            $res['PolicyConfigurations'] = [];
            if (null !== $this->policyConfigurations && \is_array($this->policyConfigurations)) {
                $n = 0;
                foreach ($this->policyConfigurations as $item) {
                    $res['PolicyConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trafficToEndpointPolicy) {
            $res['TrafficToEndpointPolicy'] = $this->trafficToEndpointPolicy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['PolicyConfigurations'])) {
            if (!empty($map['PolicyConfigurations'])) {
                $model->policyConfigurations = [];
                $n                           = 0;
                foreach ($map['PolicyConfigurations'] as $item) {
                    $model->policyConfigurations[$n++] = null !== $item ? policyConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrafficToEndpointPolicy'])) {
            $model->trafficToEndpointPolicy = $map['TrafficToEndpointPolicy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
