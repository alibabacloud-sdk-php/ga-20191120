<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest\accelerateRegion;
use AlibabaCloud\Tea\Model;

class CreateIpSetsRequest extends Model
{
    /**
     * @var accelerateRegion[]
     */
    public $accelerateRegion;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accelerateRegion' => 'AccelerateRegion',
        'acceleratorId'    => 'AcceleratorId',
        'clientToken'      => 'ClientToken',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateRegion) {
            $res['AccelerateRegion'] = [];
            if (null !== $this->accelerateRegion && \is_array($this->accelerateRegion)) {
                $n = 0;
                foreach ($this->accelerateRegion as $item) {
                    $res['AccelerateRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateRegion'])) {
            if (!empty($map['AccelerateRegion'])) {
                $model->accelerateRegion = [];
                $n                       = 0;
                foreach ($map['AccelerateRegion'] as $item) {
                    $model->accelerateRegion[$n++] = null !== $item ? accelerateRegion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
