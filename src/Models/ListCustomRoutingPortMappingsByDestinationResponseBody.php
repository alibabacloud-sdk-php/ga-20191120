<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsByDestinationResponseBody\portMappings;
use AlibabaCloud\Tea\Model;

class ListCustomRoutingPortMappingsByDestinationResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Details about the port mapping table.
     *
     * @var portMappings[]
     */
    public $portMappings;

    /**
     * @description The ID of the request.
     *
     * @example String	04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'portMappings' => 'PortMappings',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->portMappings) {
            $res['PortMappings'] = [];
            if (null !== $this->portMappings && \is_array($this->portMappings)) {
                $n = 0;
                foreach ($this->portMappings as $item) {
                    $res['PortMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomRoutingPortMappingsByDestinationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PortMappings'])) {
            if (!empty($map['PortMappings'])) {
                $model->portMappings = [];
                $n                   = 0;
                foreach ($map['PortMappings'] as $item) {
                    $model->portMappings[$n++] = null !== $item ? portMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
