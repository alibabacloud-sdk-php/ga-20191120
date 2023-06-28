<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomRoutingEndpointsResponseBody extends Model
{
    /**
     * @description The IDs of the endpoints.
     *
     * @var string[]
     */
    public $endpointIds;

    /**
     * @description The IDs of the endpoints.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'endpointIds' => 'EndpointIds',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointIds) {
            $res['EndpointIds'] = $this->endpointIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomRoutingEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointIds'])) {
            if (!empty($map['EndpointIds'])) {
                $model->endpointIds = $map['EndpointIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
