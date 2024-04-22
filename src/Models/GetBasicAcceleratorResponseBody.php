<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody\crossDomainBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetBasicAcceleratorResponseBody extends Model
{
    /**
     * @description The ID of the basic GA instance.
     *
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The bandwidth metering method.
     *
     *   **BandwidthPackage**: billed based on bandwidth plans.
     *   **CDT**: billed by Cloud Data Transfer (CDT) and based on data transfer.
     *   **CDT95**: billed by CDT and based on the 95th percentile bandwidth. This bandwidth metering method is available only to users that are included in the whitelist.
     *
     * @example CDT
     *
     * @var string
     */
    public $bandwidthBillingType;

    /**
     * @description The details about the basic bandwidth plan that is associated with the basic GA instance.
     *
     * @var basicBandwidthPackage
     */
    public $basicBandwidthPackage;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $basicEndpointGroupId;

    /**
     * @description The ID of the acceleration region.
     *
     * @example ips-bp11ilwqjdkjeg9r7****
     *
     * @var string
     */
    public $basicIpSetId;

    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance to which the basic GA instance is attached.
     *
     * @example cen-hjkduu767hc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The timestamp that indicates when the basic GA instance is created.
     *
     * @example 1637734547
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether cross-border acceleration is enabled for the basic GA instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $crossBorderStatus;

    /**
     * @description The details about the cross-border acceleration bandwidth plan that is associated with the GA instance.
     *
     * This array is returned only for GA instances that are created on the international site (alibabacloud.com).
     * @var crossDomainBandwidthPackage
     */
    public $crossDomainBandwidthPackage;

    /**
     * @description Indicates whether cross-border acceleration is enabled.
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var string
     */
    public $crossPrivateState;

    /**
     * @description The description of the basic GA instance.
     *
     * @example BasicAccelerator
     *
     * @var string
     */
    public $description;

    /**
     * @description The timestamp that indicates when the basic GA instance expires.
     *
     * The time follows the UNIX time format. It is the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1640326547
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The billing method of the basic GA instance. Only **PREPAY** is returned, which indicates the subscription billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The name of the basic GA instance.
     *
     * @example BasicAccelerator
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region where the basic GA instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example F591955F-5CB5-4CCE-A75D-17CF2085CE22
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the basic GA instance belongs.
     *
     * @example rg-aekzrnd67gq****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the basic GA instance.
     *
     *   **init**: The GA instance is being initialized.
     *   **active**: The GA instance is available.
     *   **configuring**: The GA instance is being configured.
     *   **binding**: The GA instance is being associated.
     *   **unbinding**: The GA instance is being disassociated.
     *   **deleting**: The GA instance is being deleted.
     *   **finacialLocked**: The GA instance is locked due to overdue payments.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The tags of the basic GA instance.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'acceleratorId'               => 'AcceleratorId',
        'bandwidthBillingType'        => 'BandwidthBillingType',
        'basicBandwidthPackage'       => 'BasicBandwidthPackage',
        'basicEndpointGroupId'        => 'BasicEndpointGroupId',
        'basicIpSetId'                => 'BasicIpSetId',
        'cenId'                       => 'CenId',
        'createTime'                  => 'CreateTime',
        'crossBorderStatus'           => 'CrossBorderStatus',
        'crossDomainBandwidthPackage' => 'CrossDomainBandwidthPackage',
        'crossPrivateState'           => 'CrossPrivateState',
        'description'                 => 'Description',
        'expiredTime'                 => 'ExpiredTime',
        'instanceChargeType'          => 'InstanceChargeType',
        'name'                        => 'Name',
        'regionId'                    => 'RegionId',
        'requestId'                   => 'RequestId',
        'resourceGroupId'             => 'ResourceGroupId',
        'state'                       => 'State',
        'tags'                        => 'Tags',
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
        if (null !== $this->bandwidthBillingType) {
            $res['BandwidthBillingType'] = $this->bandwidthBillingType;
        }
        if (null !== $this->basicBandwidthPackage) {
            $res['BasicBandwidthPackage'] = null !== $this->basicBandwidthPackage ? $this->basicBandwidthPackage->toMap() : null;
        }
        if (null !== $this->basicEndpointGroupId) {
            $res['BasicEndpointGroupId'] = $this->basicEndpointGroupId;
        }
        if (null !== $this->basicIpSetId) {
            $res['BasicIpSetId'] = $this->basicIpSetId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossBorderStatus) {
            $res['CrossBorderStatus'] = $this->crossBorderStatus;
        }
        if (null !== $this->crossDomainBandwidthPackage) {
            $res['CrossDomainBandwidthPackage'] = null !== $this->crossDomainBandwidthPackage ? $this->crossDomainBandwidthPackage->toMap() : null;
        }
        if (null !== $this->crossPrivateState) {
            $res['CrossPrivateState'] = $this->crossPrivateState;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBasicAcceleratorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['BandwidthBillingType'])) {
            $model->bandwidthBillingType = $map['BandwidthBillingType'];
        }
        if (isset($map['BasicBandwidthPackage'])) {
            $model->basicBandwidthPackage = basicBandwidthPackage::fromMap($map['BasicBandwidthPackage']);
        }
        if (isset($map['BasicEndpointGroupId'])) {
            $model->basicEndpointGroupId = $map['BasicEndpointGroupId'];
        }
        if (isset($map['BasicIpSetId'])) {
            $model->basicIpSetId = $map['BasicIpSetId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossBorderStatus'])) {
            $model->crossBorderStatus = $map['CrossBorderStatus'];
        }
        if (isset($map['CrossDomainBandwidthPackage'])) {
            $model->crossDomainBandwidthPackage = crossDomainBandwidthPackage::fromMap($map['CrossDomainBandwidthPackage']);
        }
        if (isset($map['CrossPrivateState'])) {
            $model->crossPrivateState = $map['CrossPrivateState'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
