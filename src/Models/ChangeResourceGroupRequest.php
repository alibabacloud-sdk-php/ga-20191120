<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate a value, but you must make sure that the value is unique among different requests. The client token can contain only ASCII characters.****
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the new resource group.
     *
     * @example rg-aekzrnd67gq****
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the GA resource.
     *
     *   If **ResourceType** is set to **accelerator**, set the value of ResourceId to the ID of a standard GA instance.
     *   If **ResourceType** is set to **basicaccelerator**, set the value of ResourceId to the ID of a basic GA instance.
     *   If **ResourceType** is set to**bandwidthpackage**, set the value of ResourceId to the ID of a bandwidth plan.
     *   If **ResourceType** is set to **acl**, set the value of ResourceId to the ID of a network ACL.
     *
     * @example ga-bp149u6o36qt1as9b****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the GA resource. Valid values:
     *
     *   **accelerator**: a standard GA instance.
     *   **basicaccelerator**: a basic GA instance.
     *   **bandwidthpackage**: a bandwidth plan.
     *   **acl**: a network ACL.
     *
     * @example accelerator
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'newResourceGroupId' => 'NewResourceGroupId',
        'regionId'           => 'RegionId',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
