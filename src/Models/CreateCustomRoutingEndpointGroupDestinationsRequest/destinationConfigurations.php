<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupDestinationsRequest;

use AlibabaCloud\Tea\Model;

class destinationConfigurations extends Model
{
    /**
     * @description The start port of the backend service port range of the endpoint group.
     *
     * Valid values: **1** to **65499**. The **FromPort** value must be smaller than or equal to the **ToPort** value.
     *
     * You can specify up to 20 start ports of backend service port ranges in each request.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @description The end port of the backend service port range of the endpoint group.
     *
     * Valid values: **1** to **65499**. The **FromPort** value must be smaller than or equal to the **ToPort** value.
     *
     * You can specify up to 20 end ports of backend service port ranges in each request.
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'fromPort'  => 'FromPort',
        'protocols' => 'Protocols',
        'toPort'    => 'ToPort',
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
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
