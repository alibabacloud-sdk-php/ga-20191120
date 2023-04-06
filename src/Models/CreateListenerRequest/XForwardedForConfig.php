<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;

use AlibabaCloud\Tea\Model;

class XForwardedForConfig extends Model
{
    /**
     * @description Specifies whether to use the `GA-AP` header to retrieve the information about acceleration regions. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * > This parameter is available only when you create an HTTPS or HTTP listener.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForGaApEnabled;

    /**
     * @description Specifies whether to use the `GA-ID` header to retrieve the ID of the GA instance. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * > This parameter is available only when you create an HTTPS or HTTP listener.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForGaIdEnabled;

    /**
     * @description Specifies whether to use the `GA-X-Forward-Port` header to retrieve the listener ports of the GA instance. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * > This parameter is available only when you create an HTTPS or HTTP listener.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForPortEnabled;

    /**
     * @description Specifies whether to use the `GA-X-Forward-Proto` header to retrieve the listener protocol of the GA instance. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * > This parameter is available only when you create an HTTPS or HTTP listener.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForProtoEnabled;

    /**
     * @description Specifies whether to use the `X-Real-IP` header to retrieve client IP addresses. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * > This parameter is available only when you create an HTTPS or HTTP listener.
     * @example false
     *
     * @var bool
     */
    public $XRealIpEnabled;
    protected $_name = [
        'XForwardedForGaApEnabled'  => 'XForwardedForGaApEnabled',
        'XForwardedForGaIdEnabled'  => 'XForwardedForGaIdEnabled',
        'XForwardedForPortEnabled'  => 'XForwardedForPortEnabled',
        'XForwardedForProtoEnabled' => 'XForwardedForProtoEnabled',
        'XRealIpEnabled'            => 'XRealIpEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->XForwardedForGaApEnabled) {
            $res['XForwardedForGaApEnabled'] = $this->XForwardedForGaApEnabled;
        }
        if (null !== $this->XForwardedForGaIdEnabled) {
            $res['XForwardedForGaIdEnabled'] = $this->XForwardedForGaIdEnabled;
        }
        if (null !== $this->XForwardedForPortEnabled) {
            $res['XForwardedForPortEnabled'] = $this->XForwardedForPortEnabled;
        }
        if (null !== $this->XForwardedForProtoEnabled) {
            $res['XForwardedForProtoEnabled'] = $this->XForwardedForProtoEnabled;
        }
        if (null !== $this->XRealIpEnabled) {
            $res['XRealIpEnabled'] = $this->XRealIpEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return XForwardedForConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['XForwardedForGaApEnabled'])) {
            $model->XForwardedForGaApEnabled = $map['XForwardedForGaApEnabled'];
        }
        if (isset($map['XForwardedForGaIdEnabled'])) {
            $model->XForwardedForGaIdEnabled = $map['XForwardedForGaIdEnabled'];
        }
        if (isset($map['XForwardedForPortEnabled'])) {
            $model->XForwardedForPortEnabled = $map['XForwardedForPortEnabled'];
        }
        if (isset($map['XForwardedForProtoEnabled'])) {
            $model->XForwardedForProtoEnabled = $map['XForwardedForProtoEnabled'];
        }
        if (isset($map['XRealIpEnabled'])) {
            $model->XRealIpEnabled = $map['XRealIpEnabled'];
        }

        return $model;
    }
}
