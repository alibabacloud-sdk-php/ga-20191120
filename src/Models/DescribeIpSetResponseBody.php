<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpSetResponseBody extends Model
{
    /**
     * @var string
     */
    public $accelerateRegionId;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string[]
     */
    public $ipAddressList;

    /**
     * @var string
     */
    public $ipSetId;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateRegionId' => 'AccelerateRegionId',
        'acceleratorId'      => 'AcceleratorId',
        'bandwidth'          => 'Bandwidth',
        'ipAddressList'      => 'IpAddressList',
        'ipSetId'            => 'IpSetId',
        'ipVersion'          => 'IpVersion',
        'requestId'          => 'RequestId',
        'state'              => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateRegionId) {
            $res['AccelerateRegionId'] = $this->accelerateRegionId;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->ipAddressList) {
            $res['IpAddressList'] = $this->ipAddressList;
        }
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateRegionId'])) {
            $model->accelerateRegionId = $map['AccelerateRegionId'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['IpAddressList'])) {
            if (!empty($map['IpAddressList'])) {
                $model->ipAddressList = $map['IpAddressList'];
            }
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
