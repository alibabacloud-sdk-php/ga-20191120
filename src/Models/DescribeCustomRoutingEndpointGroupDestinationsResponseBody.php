<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointGroupDestinationsResponseBody\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class DescribeCustomRoutingEndpointGroupDestinationsResponseBody extends Model
{
    /**
     * @description The ID of the Global Accelerator (GA) instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The ID of the endpoint group mapping configuration.
     *
     * @example dst-123abc****
     *
     * @var string
     */
    public $destinationId;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The start port of the backend service port range of the endpoint group.
     *
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The backend service protocol of the endpoint group.
     *
     *   **TCP**: TCP
     *   **UDP**: UDP
     *   **TCP,UDP**: TCP and UDP
     *
     * @var string[]
     */
    public $protocols;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service ID to which the managed instance belongs.
     *
     * >  Valid only when the ServiceManaged parameter is True.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Is it a managed instance. Valid values:
     *
     * - false
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description A list of action policies that users can execute on this managed instance.
     *
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The status of the endpoint group mapping configuration.
     *
     *   **init**: being initialized.
     *   **active**: normal.
     *   **updating**: being updated.
     *   **deleting**: being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The end port of the backend service port range of the endpoint group.
     *
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'acceleratorId'       => 'AcceleratorId',
        'destinationId'       => 'DestinationId',
        'endpointGroupId'     => 'EndpointGroupId',
        'fromPort'            => 'FromPort',
        'listenerId'          => 'ListenerId',
        'protocols'           => 'Protocols',
        'requestId'           => 'RequestId',
        'serviceId'           => 'ServiceId',
        'serviceManaged'      => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'state'               => 'State',
        'toPort'              => 'ToPort',
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
        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceManagedInfos) {
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomRoutingEndpointGroupDestinationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
