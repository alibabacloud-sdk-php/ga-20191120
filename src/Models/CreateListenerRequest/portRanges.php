<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;

use AlibabaCloud\Tea\Model;

class portRanges extends Model
{
    /**
     * @description The first port in the range of listening ports that are used to receive and forward requests to endpoints.
     *
     * Valid values: **1** to **65499**. The value of **FromPort** must be smaller than or equal to the value of **ToPort**.
     *
     * >  You can configure only one listening port for an HTTP or HTTPS listener. In this case, the first port also serves as the last port.
     * @example 20
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The last port in the range of listening ports that are used to receive and forward requests to endpoints.
     *
     * Valid values: **1** to **65499**. The value of **FromPort** must be smaller than or equal to the value of **ToPort**.
     *
     * >  You can configure only one listening port for an HTTP or HTTPS listener. In this case, the first port also serves as the last port.
     * @example 20
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
