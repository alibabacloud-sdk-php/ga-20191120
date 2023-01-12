<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The ID of the GA instance with which the endpoint is associated.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The name of the endpoint (vSwitch).
     *
     * @example vsw-test01
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The ID of the endpoint group to which the endpoint belongs.
     *
     * @example epg-bp16jdc00bhe97sr5****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the listener with which the endpoint is associated.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The access policy of traffic for the specified endpoint. Valid values:
     *
     *   **AllowAll**: allows all traffic to the endpoint.
     *   **DenyAll**: denies all traffic to the endpoint.
     *   **AllowCustom**: allows traffic only to specified destinations.
     *
     * @example DenyAll
     *
     * @var string
     */
    public $trafficToEndpointPolicy;

    /**
     * @description The backend service type of the endpoint.
     *
     * Set the value to **PrivateSubNet**, which indicates private CIDR blocks.
     * @example PrivateSubNet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceleratorId'           => 'AcceleratorId',
        'endpoint'                => 'Endpoint',
        'endpointGroupId'         => 'EndpointGroupId',
        'endpointId'              => 'EndpointId',
        'listenerId'              => 'ListenerId',
        'trafficToEndpointPolicy' => 'TrafficToEndpointPolicy',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
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
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
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
