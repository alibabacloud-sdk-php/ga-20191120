<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\backendPorts;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\certificates;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class UpdateListenerRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $clientAffinity;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $proxyProtocol;

    /**
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var backendPorts[]
     */
    public $backendPorts;

    /**
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;

    /**
     * @var string
     */
    public $securityPolicyId;
    protected $_name = [
        'regionId'            => 'RegionId',
        'clientToken'         => 'ClientToken',
        'name'                => 'Name',
        'description'         => 'Description',
        'clientAffinity'      => 'ClientAffinity',
        'protocol'            => 'Protocol',
        'listenerId'          => 'ListenerId',
        'proxyProtocol'       => 'ProxyProtocol',
        'portRanges'          => 'PortRanges',
        'certificates'        => 'Certificates',
        'backendPorts'        => 'BackendPorts',
        'XForwardedForConfig' => 'XForwardedForConfig',
        'securityPolicyId'    => 'SecurityPolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clientAffinity) {
            $res['ClientAffinity'] = $this->clientAffinity;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->proxyProtocol) {
            $res['ProxyProtocol'] = $this->proxyProtocol;
        }
        if (null !== $this->portRanges) {
            $res['PortRanges'] = [];
            if (null !== $this->portRanges && \is_array($this->portRanges)) {
                $n = 0;
                foreach ($this->portRanges as $item) {
                    $res['PortRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->backendPorts) {
            $res['BackendPorts'] = [];
            if (null !== $this->backendPorts && \is_array($this->backendPorts)) {
                $n = 0;
                foreach ($this->backendPorts as $item) {
                    $res['BackendPorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toMap() : null;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClientAffinity'])) {
            $model->clientAffinity = $map['ClientAffinity'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['ProxyProtocol'])) {
            $model->proxyProtocol = $map['ProxyProtocol'];
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n                 = 0;
                foreach ($map['PortRanges'] as $item) {
                    $model->portRanges[$n++] = null !== $item ? portRanges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BackendPorts'])) {
            if (!empty($map['BackendPorts'])) {
                $model->backendPorts = [];
                $n                   = 0;
                foreach ($map['BackendPorts'] as $item) {
                    $model->backendPorts[$n++] = null !== $item ? backendPorts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        return $model;
    }
}
